<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function showProductHome() {
        $products = Product::all();
        return view('pages.home', compact('products'));
    }
    
    public function showProduct() {
        $products = Product::all();
        return view('pages.product', compact('products'));
    }
}
