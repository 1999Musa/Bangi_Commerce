<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// });
