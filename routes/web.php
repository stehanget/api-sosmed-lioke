<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  AuthController,
  CategoryController,
  CommentController,
  ImageController,
  ProjectController,
  HomeController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home visitor are not logged in
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('categories', [CategoryController::class, 'index'])->name('category.index');

//Home visitor are logged in
Route::get('dashboard', function () {
  return view('dashboard.index');
})->name('dashboard')->middleware('auth');

Route::prefix('api')->group(function () {
  Route::post('auth/login', [AuthController::class, 'login'])->name('login');
  Route::post('auth/register', [AuthController::class, 'register'])->name('register');
  Route::get('auth/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

  Route::get('projects/', [ProjectController::class, 'index'])->name('project.index');
  Route::get('projects/{project:id}', [ProjectController::class, 'show'])->name('project.show');

  Route::group([
    'middleware'  => 'auth',
    'prefix'      => 'projects'
  ], function () {
    Route::post('/', [ProjectController::class, 'store'])->name('project.store');
    Route::Put('/{project:id}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('/{project:id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    Route::get('/by/user', [ProjectController::class, 'getProjectByUser'])->name('project.by/user');
  });

  Route::group([
    'middleware'  => 'auth',
    'prefix'      => 'categories'
  ], function () {
    Route::get('/{category:id}', [CategoryController::class, 'show'])->name('category.show');
    Route::post('/', [CategoryController::class, 'store'])->name('category.store');
    Route::Put('/{category:id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/{category:id}', [CategoryController::class, 'destroy'])->name('category.destroy');
  });

  Route::get('comments/by/booth/{id}', [CommentController::class, 'getCommentByProject'])->name('comment.by.project');

  Route::group([
    'middleware'  => 'auth',
    'prefix'      => 'comments'
  ], function () {
    Route::post('/', [CommentController::class, 'store'])->name('comment.store');
    Route::Put('/{comment:id}', [CommentController::class, 'update'])->name('comment.update');
    Route::delete('/{comment:id}', [CommentController::class, 'destroy'])->name('comment.destroy');
  });

  Route::group([
    'middleware'  => 'auth',
    'prefix'      => 'images'
  ], function () {
    Route::get('/', [ImageController::class, 'index'])->name('image.index');
    Route::post('/', [ImageController::class, 'store'])->name('image.store');
    Route::delete('/{image:id}', [ImageController::class, 'destroy'])->name('image.destroy');
  });
});
