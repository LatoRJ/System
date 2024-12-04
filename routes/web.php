<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Login Page
Route::get('/logintest', function () {
    return view('logintest');
});

// Sign Up
Route::get('/signup', function () {
    return view('signup');
});

// Home Page
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/product-stock', function () {
    return view('product-stock');
})->name('product-stock');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
