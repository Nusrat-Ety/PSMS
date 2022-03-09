<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\AdoptionController;

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
    return view('content');

   
});

Route::get('/create/food',[FoodController::class,'createFood'])->name('admin.create.food');

// Route::view('/dashboard','admin.dashboard')->name('dashboard');

