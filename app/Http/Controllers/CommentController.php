<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'project_id' => 'required',
        'content'    => 'required|max:256'
      ]);

      if ($validator->fails()) {
        return response()->json(['message' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
      }

      try {
        $data = array_merge($request->all(), ['user_id' => Auth::id()]);

        $comment = Comment::create($data);
        
        return response()->json([
            'message' => 'success store a newly created resource in storage',
            'data' => $comment
        ], Response::HTTP_CREATED);
      } catch (QueryException $e) {
        return response()->json([
          'message' => 'failed ' . $e->errorInfo
        ]);
      }
    }

    public function update(Comment $comment, Request $request)
    {
      $validator = Validator::make($request->all(), [
        'content'    => 'required|max:256'
      ]);

      if ($validator->fails()) {
        return response()->json(['message' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
      }
      
      try {
        $comment->update($request->all());

        return response()->json([
            'message' => 'success update the specified resource in storage',
            'data' => $comment
        ], Response::HTTP_OK);
      } catch (QueryException $e) {
        return response()->json([
          'message' => 'failed ' . $e->errorInfo
        ]);
      }
    }

    public function destroy(Comment $comment)
    {
      try {
        $comment->delete();

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
