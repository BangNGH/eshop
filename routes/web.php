<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

Route::get('/',  [HomeController::class, 'index']);
Route::get('/login',  [LoginController::class, 'index'])->name('login');
Route::post('/login/store',  [LoginController::class, 'store']);
Route::get('/registry',  [HomeController::class, 'register']);
Route::get('/home',  [HomeController::class, 'index'])->name('home');
Route::get('/admin',  [AdminController::class, 'index']);

