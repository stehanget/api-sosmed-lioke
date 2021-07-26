<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
  AuthController,
  CategoryController
}

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('auth/login', [AuthController::class, 'login'])->name('login');
Route::post('auth/register', [AuthController::class, 'register'])->name('register');

Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth:api');


Route::group([
  'middleware'  => 'auth:api',
  'prefix'      => 'categories'
], function () {
  Route::get('/', [CategoryController::class, 'index'])->name('category.index');
  Route::get('/{category:id}', [CategoryController::class, 'show'])->name('category.show');
  Route::post('/', [CategoryController::class, 'store'])->name('category.store');
  Route::Put('/{category:id}', [CategoryController::class, 'update'])->name('category.update');
  Route::delete('/{category:id}', [CategoryController::class, 'delete'])->name('category.delete');
});