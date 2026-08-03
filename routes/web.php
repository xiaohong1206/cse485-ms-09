<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/admin', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/admin/categories', [CategoryController::class, 'index'])
    ->name('admin.categories.index');

Route::get('/admin/products', [ProductController::class, 'index'])
    ->name('admin.products.index');

Route::get('/admin/about', [DashboardController::class, 'about'])
    ->name('admin.about');
    // routes/web.php (demo học tập; production nên để routes/api.php + CSRF/API auth)
use App\Http\Controllers\Api\ProductApiController;

Route::get('/api/products', [ProductApiController::class, 'index']);
Route::get('/api/products/{id}', [ProductApiController::class, 'show']);
Route::post('/api/products', [ProductApiController::class, 'store']);
Route::put('/api/products/{id}', [ProductApiController::class, 'update']);
Route::delete('/api/products/{id}', [ProductApiController::class, 'destroy']);
use App\Http\Controllers\Lab\CategoryLabController;
Route::get('/lab/categories', [CategoryLabController::class, 'index']);
Route::post('/lab/categories', [CategoryLabController::class, 'store']);
Route::get('/lab/categories/{id}', [CategoryLabController::class, 'show']);
Route::put('/lab/categories/{id}', [CategoryLabController::class, 'update']);
Route::delete('/lab/categories/{id}', [CategoryLabController::class, 'destroy']);
use App\Http\Controllers\Lab\ProductLabController;
// Product Lab
Route::get('/lab/products', [ProductLabController::class, 'index']);
Route::post('/lab/products', [ProductLabController::class, 'store']);
Route::get('/lab/products/{id}', [ProductLabController::class, 'show']);
Route::put('/lab/products/{id}', [ProductLabController::class, 'update']);
Route::delete('/lab/products/{id}', [ProductLabController::class, 'destroy']);
