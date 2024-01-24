<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MyProfileController;

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
    // return view('welcome');
    return view('home.index');
});

// Home
Route::get('/home', [HomeController::class, 'index']);

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Login & Logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Manajemen Mobil
Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/mobil/add', [MobilController::class, 'create']);
Route::post('/mobil/add', [MobilController::class, 'store']);

// My Profile
Route::get('/myprofile', [MyProfileController::class, 'index'])->middleware('auth');
Route::get('/myprofile/edit/{id}', [MyProfileController::class, 'edit']);
Route::patch('/myprofile/{id}', [MyProfileController::class, 'update']);

