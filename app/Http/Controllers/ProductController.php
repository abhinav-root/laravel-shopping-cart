<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function laptop() {
        $products = Product::where('type', 'laptop')->paginate(3);
        return view('products.laptops', ["products" => $products]);
    }

    public function smartphone() {
        $products = Product::where('type', 'smartphone')->paginate(3);
        return view('products.smartphones', ["products" => $products]);
    }
}

