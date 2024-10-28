<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Specialist;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $categories    = Categories::limit(2)->get();
        $products      = Product::limit(2)->get();
        $treatments    = Treatment::limit(2)->get();
        $specialists   = Specialist::limit(2)->get();
        $users         = User::limit(2)->get();

        $totalCategory    = Categories::count();
        $totalProduct     = Product::count();
        $totalSpecialist  = Specialist::count();
        $totalTreatment   = Treatment::count();
        $totalUser        = User::count();

        $totalPendingReservations   = Reservation::where('status', 'pending')->count();
        $totalConfirmedReservations = Reservation::where('status', 'confirmed')->count();
        $totalCompletedReservations = Reservation::where('status', 'completed')->count();
        
        $pendingReservations   = Reservation::where('status', 'pending')->limit(2)->get();
        $confirmedReservations = Reservation::where('status', 'confirmed')->limit(2)->get();
        $completedReservations = Reservation::where('status', 'completed')->limit(2)->get();

        return view('admin.pages.dashboard', compact('categories', 'products', 'specialists', 'treatments', 'users', 'totalCategory', 'totalProduct', 'totalSpecialist', 'totalTreatment', 'pendingReservations', 'confirmedReservations', 'completedReservations', 'totalPendingReservations', 'totalConfirmedReservations', 'totalCompletedReservations', 'totalUser'));
    }
}
