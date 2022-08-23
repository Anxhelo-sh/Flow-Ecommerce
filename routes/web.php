<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return inertia('Home');
    })->name('homepage');

    Route::get('/products',[ProductController::class , 'index'])->name('products');
    Route::get('/admin',[AdminController::class , 'index'])->name('admin');
    Route::get('/admin/add-product',[AdminController::class , 'create'])->name('createProduct');
    Route::post('/admin/add-product',[AdminController::class , 'store'])->name('storeProduct');

});
