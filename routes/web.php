<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  AuthController,
  CategoryController,
  CommentController,
  ImageController,
  ProjectController,
  HomeController,
    UserController
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

Route::post('portfolio', function (\Illuminate\Http\Request $request) {
  $work_exps = [];
  $projects = [];
  $hard_skills = [];
  $soft_skills = [];

  foreach ($request->input('work-place') as $key => $value) {
    array_push($work_exps, (object) [
      'work_place'  => $value,
      'work_city'   => $request->input('work-city')[$key],
      'year_start'  => $request->input('year-start')[$key],
      'year_end'    => $request->input('year-end')[$key],
      'desc_exp'    => $request->input('desc-exp')[$key]
    ]);
  }

  foreach ($request->input('project-name') as $key => $value) {
    array_push($projects, (object) [
      'project_name'  => $value,
      'desc_project'  => $request->input('desc-project')[$key],
      'filepath'      => $request->input('filepath')[$key]
    ]);
  }

  foreach ($request->input('hard-skill') as $value) {
    array_push($hard_skills, $value);
  }

  foreach ($request->input('soft-skill') as $value) {
    array_push($soft_skills, $value);
  }

  return view('portfolio.index', [
    'name'            => $request->name,
    'profesi'         => $request->profesi,
    'instagram'       => $request->instagram,
    'self_desc'       => $request->input('self-desc'),
    'work_exps'       => $work_exps,
    'hard_skills'     => $request->input('hard-skill'),
    'soft_skills'     => $request->input('soft-skill'),
    'projects'        => $projects,
    'total_client'    => $request->input('total-client'),
    'total_project'   => $request->input('total-project'),
    'total_profit'    => $request->input('total-profit'),
    'testimoni_name'  => $request->input('testimonial-name'),
    'testimoni_desc'  => $request->input('testimonial-desc'),
  ]);
  // return response()->json([
  //   'name'            => $request->name,
  //   'profesi'         => $request->profesi,
  //   'instagram'       => $request->instagram,
  //   'self_desc'       => $request->input('self-desc'),
  //   'work_exps'       => $work_exps,
  //   'hard_skills'     => $hard_skills,
  //   'soft_skills'     => $soft_skills,
  //   'projects'        => $projects,
  //   'total_client'    => $request->input('total-client'),
  //   'total_project'   => $request->input('total-project'),
  //   'total_profit'    => $request->input('total-profit'),
  //   'testimoni_name'  => $request->input('testimonial-name'),
  //   'testimoni_desc'  => $request->input('testimonial-desc'),
  // ]);
})->name('portfolio');

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
    Route::put('/{project:id}', [ProjectController::class, 'update'])->name('project.update');
    Route::put('/update/visibility/{project:id}', [ProjectController::class, 'updateVisibility'])->name('project.update.visibility');
    Route::put('/update/total-like/{project:id}', [ProjectController::class, 'updateLike'])->name('project.update.like');
    Route::delete('/{project:id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    Route::get('/by/user', [ProjectController::class, 'getProjectByUser'])->name('project.by/user');
  });

  Route::put('projects/update/total-view/{project:id}', [ProjectController::class, 'updateView'])->name('project.update.view');

  Route::group([
    'middleware'  => 'auth',
    'prefix'      => 'categories'
  ], function () {
    Route::get('/{category:id}', [CategoryController::class, 'show'])->name('category.show');
    Route::post('/', [CategoryController::class, 'store'])->name('category.store');
    Route::put('/{category:id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/{category:id}', [CategoryController::class, 'destroy'])->name('category.destroy');
  });

  Route::get('comments/by/booth/{id}', [CommentController::class, 'getCommentByProject'])->name('comment.by.project');

  Route::group([
    'middleware'  => 'auth',
    'prefix'      => 'comments'
  ], function () {
    Route::post('/', [CommentController::class, 'store'])->name('comment.store');
    Route::put('/{comment:id}', [CommentController::class, 'update'])->name('comment.update');
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

  Route::group([
    'middleware'  => 'auth',
    'prefix'      => 'users'
  ], function () {
    Route::put('/', [UserController::class, 'update'])->name('user.update');
  });

  Route::get('users/search/{nickname}', [UserController::class, 'search'])->name('user.search');

});

Route::get('profile/{user:nickname}', [UserController::class, 'profile'])->name('user.profile');


Route::group([
  'prefix' => 'filemanager',
  'middleware' => ['web', 'auth']
], function () {
  \UniSharp\LaravelFilemanager\Lfm::routes();
});
