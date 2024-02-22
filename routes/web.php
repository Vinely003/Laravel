<?php

use App\Http\Controllers\CountyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ViewController;

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

Route::controller(ViewController::class)->group(function () {
    Route::get('/', 'view')->name('signin');
    Route::get('login', 'view')->name('login');
    Route::get('home', 'view')->name('home')->middleware('auth');
});

Route::controller(UserController::class)->group(function () {
    Route::post('logingin', 'login');
    Route::post('register', 'register');
    Route::get('logout', 'logout')->middleware('auth');
});

Route::middleware('auth')->group(function () {
    Route::get('county/{county}', [CountyController::class, 'search']);
    Route::controller(CityController::class)->group(function () {
        Route::post('newcity', 'store');
        Route::put('update/{id}', 'update');
        Route::delete('delete/{id}', 'destroy');
    });
});
