<?php

use App\Http\Controllers\CountyController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewCityController;
use App\Http\Controllers\UpdateDeleteController;

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
Route::post('newcity', [NewCityController::class, 'store']);
Route::put('update/{id}', [UpdateDeleteController::class, 'update']);
Route::delete('delete/{id}', [UpdateDeleteController::class, 'destroy']);
