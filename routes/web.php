<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/admin', [DashboardController::class,'index'])
    ->name('admin.dashboard');

Route::get('/admin/categories', [CategoryController::class,'index'])
    ->name('admin.categories.index');

Route::get('/admin/products', [ProductController::class,'index'])
    ->name('admin.products.index');

Route::get('/admin/about', [DashboardController::class,'about'])
    ->name('admin.about');