<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home']) ->name('home');
Route::get('/product-details', [HomeController::class, 'productDetails']) ->name('product-details');
