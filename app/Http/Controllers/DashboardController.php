<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use App\Models\Specialist;
use App\Models\Treatment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $categories  = Categories::all();
        $products    = Product::all();
        $specialists = Specialist::all();
        $treatments  = Treatment::all();

        $totalCategory    = Categories::count();
        $totalProduct     = Product::count();
        $totalSpecialist  = Specialist::count();
        $totalTreatment   = Treatment::count();
        return view('admin.pages.dashboard', compact('categories', 'products', 'specialists', 'treatments', 'totalCategory', 'totalProduct', 'totalSpecialist', 'totalTreatment'));
    }
}
