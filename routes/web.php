<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\AdoptionController;
use App\Http\Controllers\Admin\AccessoryController;
use App\Http\Controllers\Admin\VetController;

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

Route::get('/', [HomeController::class,'dashboard'])->name('dashboard');

   


Route::get('/create/food',[FoodController::class,'createFood'])->name('admin.create.food');
Route::post('/submit/food',[FoodController::class,'submitFood'])->name('admin.submit.food');
Route::get('/view/food',[FoodController::class,'viewFood'])->name('admin.view.food');
Route::get('/delete/food/{id}',[FoodController::class,'deleteFood'])->name('admin.delete.food');

Route::get('/create/accessory',[AccessoryController::class,'createAccessory'])->name('admin.create.accessory');
Route::post('/submit/accessory',[AccessoryController::class,'submitAccessory'])->name('admin.submit.accessory');
Route::get('/view/accessory',[AccessoryController::class,'viewAccessory'])->name('admin.view.accessory');
Route::get('/delete/accessory/{id}',[AccessoryController::class,'deleteAccessory'])->name('admin.delete.accessory');


//user
Route::resource('users',UserController::class);

//pet

Route::get('/index/pet',[PetController::class,'indexpet'])->name('admin.index.pet');
Route::get('/create/pet',[PetController::class,'createpet'])->name('admin.create.pet');
Route::post('/store/pet',[PetController::class,'storepet'])->name('admin.store.pet');
Route::post('/show/pet',[PetController::class,'showpet'])->name('admin.show.pet');

