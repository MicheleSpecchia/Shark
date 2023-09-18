<?php

use App\Http\Controllers\ParkController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\UtentiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group

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
Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('preventback');
Route::post('/users/authenticate', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

#--- MULTIUSER ROUTES---#
Route::get('/user', [UserController::class, 'index'])->middleware('preventback');
Route::get('/admin', [AdminController::class, 'index'])->middleware('preventback')->name('admin.dashboard');


#--- PARKS ---#
Route::post('/parks/search', [ParkController::class, 'search']);
Route::get('/parks/manage', [ParkController::class, 'manage'])->middleware('auth');
Route::get('/parks/{id}/reservation', [ParkController::class, 'parkReservation'])->middleware('auth');
Route::get('/parks/create', [ParkController::class, 'create'])->middleware('auth');
Route::post('/parks/create/step1', [ParkController::class, 'storeStep1'])->middleware('auth');
Route::post('/parks/create/step2', [ParkController::class, 'storeStep2'])->middleware('auth');
Route::post('/parks/create/step3', [ParkController::class, 'storeStep3'])->middleware('auth');
Route::post('/parks/create/step4', [ParkController::class, 'storeStep4'])->middleware('auth');
Route::post('/parks/create/step5', [ParkController::class, 'storeStep5'])->middleware('auth');
Route::post('/parks/store', [ParkController::class, 'parkStore'])->middleware('auth');
Route::get('/parks/{park}/edit', [ParkController::class, 'edit'])->middleware('auth');
Route::get('/parks/{park}', [ParkController::class, 'show']);
Route::put('/parks/{park}', [ParkController::class, 'update'])->middleware('auth');
Route::delete('/parks/{park}', [ParkController::class, 'destroy'])->middleware('auth');
Route::middleware(['auth'])->group(function () {
    Route::get('/parks/{park}/reviews/create', [ParkController::class, 'createReview'])->name('reviews.create');
    Route::post('/parks/{park}/reviews', [ParkController::class, 'storeReview'])->name('reviews.store');
});



#--- RESERVATIONS ---#
Route::get('/prenotazioni', [ReservationController::class, 'show'])->name('prenota.show')->middleware('auth');
Route::post('prenota', [ReservationController::class, 'store'])->middleware('auth');
Route::get('/user-reservations', [ReservationController::class, 'userReservations'])->name('user.reservations')->middleware('auth');
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy')->middleware('auth');
Route::get('/parks/{park}/reservations/{reservation}/reviews/create', [ParkController::class, 'createReview'])->name('reviews.create')->middleware('auth');
Route::post('/parks/{park}/reservations/{reservation}/reviews', [ParkController::class, 'storeReview'])->name('reviews.store')->middleware('auth');
Route::post('prenota', [ReservationController::class, 'store'])->middleware('auth');
Route::get('/about', [AboutController::class, 'index'])->name('about');

#admin#
Route::delete('/admin/users/delete/{id}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
Route::delete('/admin/parks/delete/{id}', [AdminController::class, 'deletePark'])->name('admin.parks.delete');
Route::post('/admin/parks/updaterole/{id}', [AdminController::class, 'toggleUserRole']);



#--- PAGINA PROFILO UTENTE ---#
Route::get('/editProfile', [HomeController::class, 'editProfile']);
Route::post('/updateAvatar', [UserController::class, 'update'])->name('avatar.update');
Route::post('/updateProfile', [UserController::class, 'updateProfile'])->name('profile.update');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


#--- STRIPE  ---#
Route::get('/payment-success', [ReservationController::class, 'success'])->name('payment.success');
Route::get('/payment-cancel', [ReservationController::class, 'cancel'])->name('payment.cancel');

