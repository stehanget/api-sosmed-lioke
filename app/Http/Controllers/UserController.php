<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index ()
    {
      $users = user::all();
      return response()->json([
        'message' => 'success display a listing of the resource',
        'data' => $users
      ], Response::HTTP_OK);
    }

    public function profile(User $user)
    {
      $projects = Project::select('id', 'title', 'user_id', 'category_id', 'description', 'total_like', 'total_view')
                    ->with(['comments.user','category:id,title', 'user:id,name,photo_profile'])
                    ->with(array('images' => function ($query) {
                      $query->select('id', 'project_id', 'source');
                    }))
                    ->where('visibility', true)
                    ->where('user_id', $user->id)
                    ->get();
      return view('dashboard.profile', [
        'user'      => $user,
        'projects'  => $projects
      ]);
    }

    public function update(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'name'          => 'required|max:128',
        'nickname'      => 'required|max:64|unique:users,nickname,' . Auth::id(),
        'email'         => 'required|email|unique:users,email,' . Auth::id(),
        'phone'         => 'required|numeric|digits_between:12,14',
        'password'      => 'confirmed',
        'photo_profile' => 'mimes:jpg,jpeg,png',
      ]);

      if ($validator->fails()) {
        return response()->json(['message' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
      }

      try {
        $user = User::find(Auth::id());

        if ($request->password) {
          if (Hash::check($request->password, Auth::user()->password)) {
            return response()->json(['message' => "Your current password can't be with new password"], Response::HTTP_UNPROCESSABLE_ENTITY);
          } else {
            $user->password = bcrypt($request->password);
          }
        }

        $user->name     = $request->name;
        $user->nickname = $request->nickname;
        $user->email    = $request->email;
        $user->phone    = $request->phone;

        if ($request->interest) {
          $user->interest = $request->interest;
        }

        if ($request->bio) {
          $user->bio      = $request->bio;
        }

        if ($request->hasFile('photo_profile')) {
          if ($photo = $user->photo_profile) {
              $base = explode('/', $photo);

              $path = end($base);
              Storage::delete('images/profile' . $path);
          }

          $file = $request->file('photo_profile');
          $path = $file->store('images/profile');

          $user->photo_profile = env('APP_URL') . '/' . $path;
        }

        $user->save();

        return response()->json([
          'message' => 'success update the specified resource in storage',
          'data' => $user
        ], Response::HTTP_OK);
      } catch (QueryException $e) {
        return response()->json([
          'message' => 'failed ' . $e->errorInfo
        ]);
      }
    }

    public function search($nickname)
    {
      try {
        $result = User::where('nickname', 'like', '%' . $nickname . '%')->select('name', 'nickname', 'photo_profile')->get();

        return response()->json([
          'message' => 'success display the specified resource',
          'data' => $result
        ], Response::HTTP_OK);
      } catch (QueryException $e) {
        return response()->json([
          'message' => 'failed ' . $e->errorInfo
        ]);
      }
    }
}
