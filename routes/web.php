<?php

use App\Http\Controllers\ParkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

#--- HOME ROUTE---#
Route::get('/', [HomeController::class, 'index']);

#--- AUTH ROUTES ---#
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/newuser', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('preventback')->name('login');
Route::post('/users/authenticate', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('/logout');

#--- MULTIUSER ROUTES---#
Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('preventback');
Route::get('/admin',[AdminController::class, 'index'])->name('admin')->middleware('preventback');

/*Route::get('/', [ParkController::class, 'index']);

Route::get('/parks/create', [ParkController::class, 'create'])->middleware('auth');

Route::post('/parks', [ParkController::class, 'store'])->middleware('auth');

Route::get('/parks/{park}/edit', [ParkController::class, 'edit'])->middleware('auth');

Route::put('/parks/{park}', [ParkController::class, 'update'])->middleware('auth');

Route::delete('/parks/{park}', [ParkController::class, 'destroy'])->middleware('auth');

Route::get('/parks/manage', [ParkController::class, 'manage'])->middleware('auth');

Route::get('/parks/{park}', [ParkController::class, 'show']);*/