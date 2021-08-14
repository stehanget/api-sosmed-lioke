<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function index()
    {
      if (Auth::check()) {
        $projects = Project::select('id', 'title', 'user_id', 'category_id', 'description', 'total_like', 'total_view')
                    ->with(['comments.user','category:id,title', 'user:id,name,photo_profile'])
                    ->with(array('images' => function ($query) {
                      $query->select('id', 'project_id', 'source');
                    }))
                    ->where('visibility', true)
                    ->get();
      } else {
        $projects = Project::select('id', 'title', 'user_id', 'category_id', 'description', 'total_like', 'total_view')
                    ->with(['comments.user','category:id,title', 'user:id,name,photo_profile'])
                    ->with(array('images' => function ($query) {
                      $query->select('id', 'project_id', 'source');
                    }))
                    ->where('visibility', true)
                    ->limit(8)
                    ->get();
      }

      return response()->json([
        'message' => 'success display a listing of the resource',
        'data' => $projects,
        'test'  => Auth::check()
      ], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'category_id'       => 'required',
        'title'             => 'required|max:64',
        'description'       => 'required',
        'image'             => 'required|mimes:jpg,jpeg,png'
      ]);

      if ($validator->fails()) {
        return response()->json(['message' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
      }

      if (($total_image = $request->total_image) > 1) {
        for ($i = 1; $i < $total_image; $i++) {
          $image = [];
          array_push($image, $request->file('image' . $i));

          $validator_image = Validator::make($image, [
            'image' . $i    => 'mimes:jpg,jpeg,png'
          ]);

          if ($validator_image->fails()) {
            return response()->json(['message' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
          }
        }
      }

      try {
        $dataProject = [
          'user_id'     => Auth::id(),
          'category_id' => $request->category_id,
          'title'       => $request->title,
          'description' => $request->description,
        ];

        $project = Project::create($dataProject);

        $image = $request->file('image');
        $image = env('APP_URL') . '/' . $image->store('images/projects');

        $image = Image::insert([
          'project_id'  => $project->id,
          'source'      => $image,
          'created_at'  => \Carbon\Carbon::now(),
          'updated_at'  => \Carbon\Carbon::now()
        ]);

        if (($total_image = $request->total_image) > 1) {
          $data = [];

          for ($i = 0; $i < $total_image; $i++) {
            if ($request->hasFile('image' . $i)) {
              $image = $request->file('image' . $i);
              $image = env('APP_URL') . '/' . $image->store('images/projects');
              
              array_push($data, [
                'project_id'  => $project->id,
                'source'      => $image,
                'created_at'  => \Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now()
              ]);
            }
          }

          $image = Image::insert($data);
        }

        $dataProject = array_merge($dataProject, [
          'id'       => $project->id,
          'images'   => $project->images,
          'comments' => $project->comments,
          'user'     => $project->user,
          'visibility'  => 0,
          'total_view'  => 0,
          'total_like'  => 0
        ]);

        return response()->json([
          'message' => 'success store a newly created resource in storage',
          'data' => $dataProject
        ], Response::HTTP_CREATED);
      } catch (QueryException $e) {
        return response()->json([
          'message' => 'failed ' . $e->errorInfo
        ]);
      }
    }

    public function show(Project $project)
    {
      return response()->json([
        'message' => 'success display the specified resource',
        'data' => array_merge($project, [
          'images' => $project->images,
          'comments' => $project->comments
        ])
      ], Response::HTTP_OK);
    }

    public function update(Project $project, Request $request)
    {
			$validator = Validator::make($request->all(), [
        'category_id' => 'required',
        'title'       => 'required|max:64',
        'description' => 'required'
      ]);

      if ($validator->fails()) {
        return response()->json(['message' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
      }

      try {
        $project->update($request->all());

        $data = array_merge($request->all(), [
          'id'          => $project->id,
          'user_id'     => $project->user_id,
          'category_id' => $project->category_id,
          'category'    => $project->category,
          'user'        => $project->user,
          'images'      => $project->images,
          'comments'    => $project->comments,
          'total_like'  => $project->total_like,
          'total_view'  => $project->total_view,
          'visibility'  => $project->visibility
        ]);

        return response()->json([
          'message' => 'success update the specified resource in storage',
          'data' => $data
        ], Response::HTTP_OK);
      } catch (QueryException $e) {
        return response()->json([
          'message' => 'failed ' . $e->errorInfo
        ]);
      }
    }

    public function destroy(Project $project)
    {
      try {
        $images = Image::where('project_id', $project->id)->get();
        $comments = Comment::where('project_id', $project->id)->get();

        foreach ($images as $image) {
          $base = explode('/', $image->source);
          $path = end($base);

          Storage::delete('images/projects' . $path);

          $image->delete();
        }

        foreach ($comments as $comment) {
          $comment->delete();
        }

        $project->delete();

        return response()->json([
          'message' => 'success remove the specified resource from storage'
        ], Response::HTTP_OK);
      } catch (QueryException $e) {
        return response()->json([
          'message' => 'failed ' . $e->errorInfo
        ]);
      }
    }

    public function updateVisibility(Project $project)
    {
      $project->visibility = !$project->visibility;
      $project->save();

      return response()->json([
        'message' => 'success update visibility project'
      ], Response::HTTP_OK);
    }

    public function updateLike(Project $project)
    {
      if ($project->user_id != Auth::id()) {
        if (!Session::get('like')) {
          Session::push('like', ['project_id' => $project->id, 'user_id' => Auth::id()]);
          $project->increment('total_like');
          $project->save();
          
          return Session::get('like');
        }

        $likes = Session::get('like');
        $userLikes = [];

        foreach ($likes as $like) {
          if ($like['user_id'] == Auth::id()) {
            array_push($userLikes, $like['project_id']);
          }
        }

        if (!(in_array($project->id, $userLikes))) {
          Session::push('like', ['project_id' => $project->id, 'user_id' => Auth::id()]);
          $project->increment('total_like');
          $project->save();
          
          return Session::get('like');
        }
        
      }
    }

    public function getProjectByUser()
    {
      $projects = Project::select('id', 'title', 'user_id', 'category_id', 'total_like', 'total_view', 'visibility', 'description', 'title')
                  ->with(['comments.user','category:id,title', 'user:id,name,photo_profile'])
                  ->with(array('images' => function ($query) {
                    $query->select('id', 'project_id', 'source');
                  }))
                  ->where('user_id', Auth::id())
                  ->get();

      return response()->json([
        'message' => 'success display a listing of the resource',
        'data' => $projects
      ], Response::HTTP_OK);
    }
}
