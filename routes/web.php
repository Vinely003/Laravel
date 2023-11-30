<?php

use App\Http\Controllers\CountyController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('county/{county:id}', [CountyController::class, 'search']);
Route::post('newcity', [CityController::class, 'store']);
Route::put('update/{id}', [CityController::class, 'update']);
Route::delete('delete/{id}', [CityController::class, 'destroy']);
