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

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->name('dashboard');

Route::get('/productstocks', function () {
    return view('admin/productstocks');
})->name('productstocks');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
