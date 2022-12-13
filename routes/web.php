<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Client\CategorieController as ClientCategorieController;
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




    Route::get('/',[ClientHomeController::class,'index'])->name('home');
    Route::get('/categorie',[ClientCategorieController::class,'index'])->name('client-categorie');



  Route::get('/dashboard',[AdminHomeController::class,'index'])->name('admin-dash');
  Route::get('/categories',[CategorieController::class,'index'])->name('admin-categories');
  Route::get('/location',[LocationController::class,'index'])->name('admin-location');
  Route::get('/managers',[ManagerController::class,'index'])->name('admin-managers');

  Route::post('/categories',[CategorieController::class,'store'])->name('admin-categories');
  Route::post('/location',[LocationController::class,'store'])->name('admin-location');

Auth::routes();