<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

// Login Page
Route::get('/login', function () {
    return view('forms.login');
});

// Sign Up
Route::get('/signup', function () {
    return view('forms.signup');
});

// Home Page
Route::get('/home', function () {
    return view('products.home');
})->name('home');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/productstocks', function () {
    return view('admin.productstocks');
})->name('productstocks');

Route::get('/inbox', function () {
    return view('admin.inbox');
})->name('inbox');

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
