<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::post('/cart/add', [CartController::class, 'add']);
Route::get('/cart/view', [CartController::class, 'view']);
Route::delete('/cart/remove/{id}', [CartController::class, 'remove']);

Route::post('/checkout', [OrderController::class, 'create']);
