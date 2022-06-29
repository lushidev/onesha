<?php

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

Route::get('/', function () {
    return view('pages.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/categories', [App\Http\Controllers\CategorieController::class, 'index'])->name('all');

Route::middleware(['auth'])->group(function(){
        Route::get('/categories', [App\Http\Controllers\CategorieController::class, 'create'])->name('create-categorie');
        Route::post('/categories', [App\Http\Controllers\CategorieController::class, 'store'])->name('store-categorie');
        Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/products', [App\Http\Controllers\ProductController::class, 'create'])->name('create-product');
        Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('store-product');
        Route::get('/Entreprise', [App\Http\Controllers\EntrepriseController::class, 'create'])->name('create-entreprise');
    });