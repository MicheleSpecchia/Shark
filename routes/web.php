<?php

use App\Http\Controllers\ParkController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ParkController::class, 'index']);

Route::get('/parks/create', [ParkController::class, 'create'])->middleware('auth');

Route::post('/parks', [ParkController::class, 'store'])->middleware('auth');

Route::get('/parks/{park}/edit', [ParkController::class, 'edit'])->middleware('auth');

Route::put('/parks/{park}', [ParkController::class, 'update'])->middleware('auth');

Route::delete('/parks/{park}', [ParkController::class, 'destroy'])->middleware('auth');

Route::get('/parks/manage', [ParkController::class, 'manage'])->middleware('auth');

Route::get('/parks/{park}', [ParkController::class, 'show']);

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
