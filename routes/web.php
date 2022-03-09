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
Route::get('/adoption/add',[AdoptionController::class,'adoptionAdd'])->name('admin.adoption.add');

Route::get('/create/food',[FoodController::class,'createfood'])->name('admin.create.food');
Route::get('/create/category',[AccessoryController::class,'createccessory'])->name('admin.create.category');


Route::view('/dashboard','admin.dashboard')->name('dashboard');

