<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\AdoptionController;
use App\Http\Controllers\Admin\AccessoryController;

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
Route::post('/submit/food',[FoodController::class,'submitFood'])->name('admin.submit.food');
Route::get('/view/food',[FoodController::class,'viewFood'])->name('admin.view.food');
Route::get('/delete/food/{id}',[FoodController::class,'deleteFood'])->name('admin.delete.food');

Route::get('/create/accessory',[AccessoryController::class,'createAccessory'])->name('admin.create.accessory');
Route::post('/submit/accessory',[AccessoryController::class,'submitAccessory'])->name('admin.submit.accessory');
Route::get('/view/accessory',[AccessoryController::class,'viewAccessory'])->name('admin.view.accessory');
Route::get('/delete/accessory/{id}',[AccessoryController::class,'deleteAccessory'])->name('admin.delete.accessory');

// Route::view('/dashboard','admin.dashboard')->name('dashboard');

