<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product',[ProductController::class, 'product'])->name('product');

Route::post('/add-product',[ProductController::class, 'addProduct'])->name('add.product');

// Route::get('/product(url)',[ProductController::class(class trong productController), 'product(function)'])->name('product');
