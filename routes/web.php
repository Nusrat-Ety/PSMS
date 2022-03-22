<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
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

Route::get('admin/login',[LoginController::class,'login'])->name('admin.login');
Route::post('/dologin',[LoginController::class,'storelogin'])->name('admin.dologin.store');
Route::get('auth/facebook', [LoginController::class, 'facebookRedirect'])->name('login.facebook');
Route::get('auth/facebook/callback', [LoginController::class, 'loginWithFacebook']);

  Route::group(['prefix'=>'admin','middlewire'=>'auth'],function(){
    Route::get('/', [HomeController::class,'dashboard'])->name('dashboard');
    Route::get('/logout',[LoginController::class,'Logout'])->name('admin.logout');

   
    //food
    
    Route::get('/create/food',[FoodController::class,'createFood'])->name('admin.create.food');
    Route::post('/submit/food',[FoodController::class,'submitFood'])->name('admin.submit.food');
    Route::get('/view/food',[FoodController::class,'viewFood'])->name('admin.view.food');
    Route::get('/delete/food/{id}',[FoodController::class,'deleteFood'])->name('admin.delete.food');
    Route::get('/edit/food/{id}',[FoodController::class,'editFood'])->name('admin.edit.food');
    Route::put('/update/food/{id}',[FoodController::class,'updateFood'])->name('admin.update.food');
    
    //accessory
    
    Route::get('/create/accessory',[AccessoryController::class,'createAccessory'])->name('admin.create.accessory');
    Route::post('/submit/accessory',[AccessoryController::class,'submitAccessory'])->name('admin.submit.accessory');
    Route::get('/view/accessory',[AccessoryController::class,'viewAccessory'])->name('admin.view.accessory');
    Route::get('/delete/accessory/{id}',[AccessoryController::class,'deleteAccessory'])->name('admin.delete.accessory');
    Route::get('/edit/accessory/{id}',[AccessoryController::class,'editAccessory'])->name('admin.edit.accessory');
    Route::put('/update/accessory/{id}',[AccessoryController::class,'updateAccessory'])->name('admin.update.accessory');
    
    
    //user
    Route::resource('users',UserController::class);
    
    //pet
    
    Route::get('/index/pet',[PetController::class,'indexpet'])->name('admin.index.pet');
    Route::get('/create/pet',[PetController::class,'createpet'])->name('admin.create.pet');
    Route::post('/store/pet',[PetController::class,'storepet'])->name('admin.store.pet');
    Route::post('/show/pet',[PetController::class,'showpet'])->name('admin.show.pet');
    
    //role
    
    Route::get('/index/role',[RoleController::class,'indexrole'])->name('admin.role.index');
    Route::get('/create/role',[RoleController::class,'createrole'])->name('admin.role.create');
    Route::post('/store/role',[RoleController::class,'storerole'])->name('admin.role.store');
    
    //permission
    
    Route::get('/index/permission/',[PermissionController::class,'indexpermission'])->name('admin.permission.index');
    Route::get('/create/permission/',[PermissionController::class,'createpermission'])->name('admin.permission.create');
    Route::post('/store/permission/',[PermissionController::class,'storepermission'])->name('admin.permission.store');

 });
