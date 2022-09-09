<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);

Route::get('/', function () {
    return inertia('Home');
})->name('homepage');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::post('/products/{id}/orders', [OrderController::class, 'store']);

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    Route::get('/admin/add-product', [AdminController::class, 'create'])->name('createProduct');
    Route::post('/admin/add-product', [AdminController::class, 'store'])->name('storeProduct');
    Route::delete('/admin/delete-product', [AdminController::class, 'destroy'])->name('deleteProduct');

    Route::get('/admin/add-category', [CategoryController::class, 'create'])->name('createCategory');
    Route::post('/admin/add-category', [CategoryController::class, 'store'])->name('storeCategory');
    Route::post('/admin/delete-category/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory');
});

Route::middleware('auth')->group(function () {
    Route::get('/product/{id}', [ProductController::class, 'show']);
    Route::post('logout', [LoginController::class, 'destroy']);
});
