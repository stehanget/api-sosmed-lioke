<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index()
    {
      $categories = Category::all();

      return response()->json([
        'message' => 'success display a listing of the resource',
        'data' => $categories
      ], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'title' => 'required|max:64'
      ]);

      if ($validator->fails()) {
        return response()->json(['message' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
      }

      try {
        $category = Category::create($request->all());
      
        return response()->json([
            'message' => 'success store a newly created resource in storage',
            'data' => $category
        ], Response::HTTP_CREATED);
      } catch (QueryException $e) {
        return response()->json([
          'message' => 'failed ' . $e->errorInfo
        ]);
      }
    }

    public function show(Category $category)
    {
      return response()->json([
        'message' => 'success display the specified resource',
        'data' => $category
      ], Response::HTTP_OK);
    }

    public function update(Category $category, Request $request)
    {
      $validator = Validator::make($request->all(), [
        'title' => 'required|max:64'
      ]);

      if ($validator->fails()) {
        return response()->json(['message' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
      }

      try {
        $data = $request->all();
      
        $category->update($data);

        return response()->json([
            'message' => 'success update the specified resource in storage',
            'data' => $category
        ], Response::HTTP_OK);
      } catch (QueryException $e) {
        return response()->json([
          'message' => 'failed ' . $e->errorInfo
        ]);
      }
    }

    public function destroy(Category $category)
    {
      try {
        $category->delete();

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
