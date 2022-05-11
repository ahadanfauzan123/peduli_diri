<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerjalananController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [PerjalananController::class, 'index'])->middleware('auth');
Route::get('/home', [PerjalananController::class, 'index'])->middleware('auth');
Route::get('/data', [PerjalananController::class, 'data'])->middleware('auth');
Route::get('/input', [PerjalananController::class, 'input'])->middleware('auth');
Route::post('/inputPerjalanan', [PerjalananController::class, 'store']);
Route::get('/search', [PerjalananController::class, 'search']);
Route::get('/orderBySearch', [PerjalananController::class, 'orderBySearch']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'storeUser']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
