<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  AuthController,
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

// Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

// Home visitor are not logged in
Route::get('/', [HomeController::class, 'index'])->name('home');

//Home visitor are logged in
Route::get('dashboard', function () {
  return view('dashboard.index');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
  Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
