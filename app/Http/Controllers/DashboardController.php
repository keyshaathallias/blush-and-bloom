<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $categories = Categories::all();
        $products   = Product::all();

        $totalCategory = Categories::count();
        $totalProduct  = Product::count();
        return view('admin.pages.dashboard', compact('categories', 'products', 'totalCategory', 'totalProduct'));
    }
}
