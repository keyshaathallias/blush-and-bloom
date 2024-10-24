<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use App\Models\Reservation;
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

        $pendingReservations = Reservation::where('status', 'pending')->count();
        $confirmedReservations = Reservation::where('status', 'confirmed')->count();
        $completedReservations = Reservation::where('status', 'completed')->count();

        return view('admin.pages.dashboard', compact('categories', 'products', 'specialists', 'treatments', 'totalCategory', 'totalProduct', 'totalSpecialist', 'totalTreatment', 'pendingReservations', 'confirmedReservations', 'completedReservations'));
    }
}
