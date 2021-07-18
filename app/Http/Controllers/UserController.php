<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

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

    public function profile()
    {
      return response()->json([
        'message' => 'success display the specified resource',
        'data' => Auth::user()
      ], Response::HTTP_OK);
    }

    public function update(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'name'      => 'required|max:128',
        'nickname'  => 'required|max:64',
        'email'     => 'required|email|unique:users,email,' . Auth::id(),
        'phone'     => 'required|numeric|digits_between:12,14',
        'job'       => 'required|in:designer,manager,accaunting',
        'password'  => 'confirmed'
      ]);

      if ($validator->fails()) {
        return response()->json(['message' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
      }

      try {
        $user = User::where('id', Auth::id())->first();

        if ($request->password) {
          $user->password = bcrypt($request->password);
        }

        $user->name   = $request->name;
        $user->email  = $request->email;
        $user->phone  = $request->phone;

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

    public function updatePhotoProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo_profile'      => 'required|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $user = User::where('id', Auth::id())->first();

            if ($photo = $user->photo_profile) {
                $base = explode('/', $photo);

                $path = end($base);
                Storage::delete('images/profile' . $path);
            }

            $file = $request->file('photo_profile');
            $path = $file->store('images/profile');

            $user->photo_profile = env('APP_URL') . '/' . $path;
            
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
}
