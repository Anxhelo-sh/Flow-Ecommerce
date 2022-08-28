<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminController;

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);

Route::get('/', function () {
    return inertia('Home');
})->name('homepage');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/add-product', [AdminController::class, 'create'])->name('createProduct');
    Route::post('/admin/add-product', [AdminController::class, 'store'])->name('storeProduct');});
Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'destroy']);


});
