<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ChefController;
use App\Models\Menu;
use App\Models\Chef;
use App\Models\User;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HalamanUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\isTamu;
use App\Models\Reservasi;

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



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {

//     })->name('dashboard');
// });

// user
Route::redirect('/', '/foodrestaurant');
Route::get('/foodrestaurant', [HalamanUserController::class, 'index'])->name('home');
Route::get('/foodrestaurant/show', [HalamanUserController::class, 'show'])->name('show');

// end user

// admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::delete('/dashboard/{id}', [ReservasiController::class, 'destroy'])->name('dashboard.i');
// menu
Route::resource('menu' , MenuController::class);
// end menu
// chef
Route::resource('chef' , ChefController::class);
// end menu
// about
Route::resource('about', AboutController::class);
// endabout
// user
Route::resource('user', UserController::class);
// end user
// login
Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware(isTamu::class);
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login.login-proses')->middleware(isTamu::class);
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
// endlogin

// //register
Route::get('/register', [LoginController::class, 'register'])->name('login.register')->middleware(isTamu::class);
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('login.register_proses')->middleware(isTamu::class);
// //endregister
// end admin
// end admin
Route::resource('reservasi', ReservasiController::class);