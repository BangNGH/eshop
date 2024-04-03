<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\UploadController;

Route::get('/',  [HomeController::class, 'index']);
Route::get('/login',  [LoginController::class, 'index'])->name('login');
Route::post('/login/store',  [LoginController::class, 'store']);
Route::get('/registry',  [HomeController::class, 'register']);
Route::get('/home',  [HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/',  [AdminController::class, 'index']);

        #Management City
        Route::prefix('cities')->group(function () {
            Route::get('/',  [CityController::class, 'index']);
            Route::get('/create',  [CityController::class, 'create']);
            Route::post('/store',  [CityController::class, 'store']);
            Route::get('/edit/{city}',  [CityController::class, 'edit']);
            Route::put('/edit/{city}',  [CityController::class, 'update']);
            Route::delete('/destroy',  [CityController::class, 'destroy']);
        });
        #Management City
        Route::prefix('vehicles')->group(function () {
            Route::get('/',  [CityController::class, 'index']);
            Route::get('/create',  [CityController::class, 'create']);
            Route::post('/store',  [CityController::class, 'store']);
            Route::get('/edit/{vehicle}',  [CityController::class, 'edit']);
            Route::put('/edit/{vehicle}',  [CityController::class, 'update']);
            Route::delete('/destroy',  [CityController::class, 'destroy']);
        });




        Route::get('/users',  [AdminController::class, 'index']);
        Route::get('/vehicles',  [AdminController::class, 'index']);
        Route::get('/seats',  [AdminController::class, 'index']);
        Route::get('/routes',  [AdminController::class, 'index']);
        Route::get('/trips',  [AdminController::class, 'index']);
        Route::get('/orders',  [AdminController::class, 'index']);
        Route::get('/orders-details',  [AdminController::class, 'index']);
    });
});
