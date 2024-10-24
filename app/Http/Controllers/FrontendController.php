<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Specialist;
use App\Models\Treatment;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function showHome() {
        $products    = Product::all();
        $specialists = Specialist::all();
        $treatments  = Treatment::all();

        return view('pages.home', compact('products', 'specialists', 'treatments'));
    }

    // public function showTreatment() {
    //     $treatments = Treatment::all();
    //     return view('pages.treatment', compact('treatments'));
    // }

    // public function showDetailTreatment(string $slug) {
    //     $treatment = Treatment::where('slug', $slug)->firstOrFail();
    //     return view('pages.detailTreatment', compact('treatment'));
    // }
    
    public function showProduct() {
        $products = Product::all();
        return view('pages.product', compact('products'));
    }

    public function showSpecialist() {
        $specialists = Specialist::all();
        return view('pages.specialist', compact('specialists'));
    }
}
