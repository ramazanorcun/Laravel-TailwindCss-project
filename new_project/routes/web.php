<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChartController;









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

Route::get('/', function () {
    return view('loginForm');
});


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/registerAdd', [RegisterController::class, 'create'])->name('userAdd');

Route::post('/loginUser', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('getUser');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/addUser', [AddUserController::class, 'index'])->name('addUser');
Route::post('/UserAdd', [AddUserController::class, 'create'])->name('UserAdd');

Route::resource('/users', UserController::class);
Route::get('delete/{id}', [UserController::class,'destroy']);


