<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'))->name('home');
Route::get('/products', fn () => view('products'))->name('products');
Route::get('/product', fn () => view('product'))->name('product');
Route::get('/checkout', fn () => view('checkout'))->name('checkout');
