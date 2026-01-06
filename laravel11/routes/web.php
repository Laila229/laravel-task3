<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

//pass the para
Route::get('/user/{name}', [PageController::class, 'user']);

//part 5
Route::get('/products', [PageController::class, 'products']);
Route::get('/products/{name}', [PageController::class, 'productDetails']);

//resource controller
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);

