<?php

use App\Http\Controllers\ParkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

//Route::get('/', [ParkController::class, 'index'])->middleware('guest');
Route::get('/', function(){return view('welcome');});

/* REGISTRAZIONE UTENTE */

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->middleware('guest');

Route::post('/newuser', [RegisterController::class, 'store'])->middleware('guest');

/* LOGOUT */

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

/* LOGIN */

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showLoginForm')->middleware('guest');

Route::post('/users/authenticate', [LoginController::class, 'authenticate']);

/* MULTIUSER */

Route::get('/admin', function(){return view('admin.admin');})->name('admin')->middleware('admin');

Route::get('/staff', function(){return view('staff');})->name('staff')->middleware('staff');

Route::get('/user', function(){return view('user');})->name('user')->middleware('user');

/*Route::get('/', [ParkController::class, 'index']);

Route::get('/parks/create', [ParkController::class, 'create'])->middleware('auth');

Route::post('/parks', [ParkController::class, 'store'])->middleware('auth');

Route::get('/parks/{park}/edit', [ParkController::class, 'edit'])->middleware('auth');

Route::put('/parks/{park}', [ParkController::class, 'update'])->middleware('auth');

Route::delete('/parks/{park}', [ParkController::class, 'destroy'])->middleware('auth');

Route::get('/parks/manage', [ParkController::class, 'manage'])->middleware('auth');

Route::get('/parks/{park}', [ParkController::class, 'show']);*/

//Auth::routes();