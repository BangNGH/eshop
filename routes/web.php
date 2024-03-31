<?php

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/',  [HomeController::class, 'index']);
Route::get('/login',  [HomeController::class, 'login']);
Route::get('/register',  [HomeController::class, 'register']);
Route::get('/home',  [HomeController::class, 'index']);
Route::get('/admin',  [AdminController::class, 'index']);

