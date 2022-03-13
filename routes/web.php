<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdoptionController;
use App\Http\Controllers\Admin\AccessoryController;
use App\Http\Controllers\Admin\PetController;
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

//Adoption-donation 
Route::get('/create/adoption/donation', [AdoptionController::class,'create'])->name('adoption.donation.create');
Route::get('/list/adoption/donation', [AdoptionController::class,'list'])->name('adoption.donation.list');
Route::post('/store/adoption/donation', [AdoptionController::class,'store'])->name('adoption.donation.store');

//vet
Route::get('/create/vet',[VetController::class,'create'])->name('vet.create');
Route::get('/list/vet',[VetController::class,'list'])->name('vet.list');
Route::post('/store/vet',[VetController::class,'store'])->name('vet.store');

// Route::view('/dashboard','admin.dashboard')->name('dashboard');

//user
Route::resource('users',UserController::class);


//pet
Route::get('/list/pet',[PetController::class,'petList'])->name('pet.list');
//breed
Route::get('/create/breed',[PetController::class,'breedCreate'])->name('breed.create');
Route::post('/store/breed',[PetController::class,'breedStore'])->name('breed.store');

//type
Route::get('/type/create',[PetController::class,'typeCreate'])->name('type.create');
Route::post('/store/create',[PetController::class,'typeStore'])->name('type.store');

