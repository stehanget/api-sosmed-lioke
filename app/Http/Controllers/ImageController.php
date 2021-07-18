<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function index()
    {
      $images = Image::all();
      return response()->json([
        'message' => 'success display a listing of the resource',
        'data' => $images
      ], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'project_id'  => 'required',
        'source'      => 'required|mimes:jpg,jpeg,png'
      ]);

      if ($validator->fails()) {
        return response()->json(['message' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
      }

      try {
        if ($file = $request->file('source')) {
          $path = $file->store('images/project');

          $image = Image::create([
            'project_id'  => $request->project_id,
            'source'      => env('APP_URL') . '/' . $path
          ]);
        }

        return response()->json([
          'message' => 'success store a newly created resource in storage',
          'data' => $image
        ], Response::HTTP_CREATED);
      } catch (QueryException $e) {
        return response()->json([
          'message' => 'failed ' . $e->errorInfo
        ]);
      }
    }

    public function destroy(Image $image)
    {
      try {
        $base = explode('/', $image->source);
        $path = end($base);
        Storage::delete('images/projects' . $path);

        $project = Project::where('id', $image->project_id)->first();

        if (sizeof($project->images) == 1) {
          return response()->json(['message' => 'at least leave one picture'], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $image->delete();

        return response()->json([
          'message' => 'success remove the specified resource from storage'
        ], Response::HTTP_OK);
      } catch (QueryException $e) {
        return response()->json([
          'message' => 'failed ' . $e->errorInfo
        ]);
      }
    }
}
