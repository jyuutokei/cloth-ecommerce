<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('home');
Route::get('/shop', fn() => view('shop'))->name('shop');
Route::get('/product', fn() => view('product'))->name('product');
Route::get('/checkout', fn() => view('checkout'))->name('checkout');
Route::get('/cart', fn() => view('cart'))->name('cart');

Route::get('/login', fn() => view('login'))->name('login');
Route::get('/register', fn() => view('register'))->name('register');
