<?php

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/cart', [CartController::class, 'add']);
Route::post('/checkout', [OrderController::class, 'create']);

?>