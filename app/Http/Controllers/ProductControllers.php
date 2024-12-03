<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::with('category')->get(); // Load products with their categories
        return view('products.index', compact('products'));
    }
}