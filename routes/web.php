<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/profile', [ProfileController::class, 'index']);

/** Guest Routes */
Route::get('/', [DashboardController::class, 'index'])->middleware('guest');
Route::post('/', [ProductController::class, 'store'])->middleware('guest');
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');

/** Authenticated Routes */
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/products', [ProductController::class, 'index'])->middleware('auth');
Route::get('/delete/{id}', [ProductController::class, 'destroy'])->middleware('auth');