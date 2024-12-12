<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

//// ROUTE FOR LANDING PAGE http://127.0.0.1:8000
Route::get('/', function () {
    return view('Landing.landing');
});

// ROUTE FOR LOG IN PAGE http://127.0.0.1:8000/login
Route::get('/login', function () {
    return view('forms.login');
});

// ROUTE FOR SIGNUP PAGE http://127.0.0.1:8000/signup
Route::get('/signup', function () {
    return view('forms.signup');
});

// ROUTE FOR HOME PAGE PAGE http://127.0.0.1:8000/home
Route::get('/home', function () {
    return view('products.home');
})->name('home');

// ROUTE FOR ADMIN PAGE http://127.0.0.1:8000/dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// ROUTE FOR PRODUCTS PAGE http://127.0.0.1:8000/productstocks
Route::get('/productstocks', function () {
    return view('admin.productstocks');
})->name('productstocks');

// ROUTE FOR INBOX PAGE http://127.0.0.1:8000/orders
Route::get('/inbox', function () {
    return view('admin.inbox');
})->name('inbox');

// ROUTE FOR ORDER PAGE http://127.0.0.1:8000/orders
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');