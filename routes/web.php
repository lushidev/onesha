<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\HomeController;
use App\Models\Entreprise;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Route::group(function(){
    Route::get('/',[ClientHomeController::class,'index'])->name('home');
});

Route::prefix('admin')->group(function(){
  Route::get('/dashboard',[AdminHomeController::class,'index'])->name('admin-dash');
  Route::get('/categories',[CategorieController::class,'index'])->name('admin-categories');
  Route::get('/location',[LocationController::class,'index'])->name('admin-location');
});
Auth::routes();