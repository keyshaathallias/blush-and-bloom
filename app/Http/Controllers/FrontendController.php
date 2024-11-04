<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Specialist;
use App\Models\Treatment;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function showHome() {
        $products    = Product::all();
        $specialists = Specialist::all();
        $treatments  = Treatment::all();

        // Reservation
        $reservation = Reservation::with('treatment')->get();

        return view('pages.home', compact('products', 'specialists', 'treatments', 'reservation'));
    }
    
    public function showProduct() {
        $products   = Product::with('categories')->get();
        $categories = Categories::all();
        return view('pages.product', compact('products', 'categories'));
    }

    public function showTreatment() {
        $treatments = Treatment::all();
        return view('pages.treatment', compact('treatments'));
    }

    public function showDetailTreatment(string $slug) {
        $treatment = Treatment::where('slug', $slug)->firstOrFail();
        return view('pages.detailTreatment', compact('treatment'));
    }

    public function showSpecialist() {
        $specialists = Specialist::all();
        return view('pages.specialist', compact('specialists'));
    }

    public function storeReservation(Request $request) {
        $credentials = $request->validate([
            'first_name'   => 'required',
            'last_name'    => 'required',
            'phone_number' => 'required',
            'email'        => 'required',
            'date'         => 'required',
            'treatment_id' => 'required',
            'message'      => 'nullable',
        ]);

        Reservation::create($credentials);

        return redirect()->back()->with('success', 'Please check your email for updates!');
    }
}
