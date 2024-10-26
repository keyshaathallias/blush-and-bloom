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
        $categories  = Categories::all();
        $products    = Product::all();
        $specialists = Specialist::all();
        $treatments  = Treatment::all();
        $users       = User::all();

        $category    = Categories::limit(3)->get();
        $product     = Product::limit(3)->get();
        $user        = User::limit(3)->get();

        $totalCategory    = Categories::count();
        $totalProduct     = Product::count();
        $totalSpecialist  = Specialist::count();
        $totalTreatment   = Treatment::count();
        $totalUser        = User::count();

        $totalPendingReservations   = Reservation::where('status', 'pending')->count();
        $totalConfirmedReservations = Reservation::where('status', 'confirmed')->count();
        $totalCompletedReservations = Reservation::where('status', 'completed')->count();
        
        $pendingReservations   = Reservation::where('status', 'pending')->get();
        $confirmedReservations = Reservation::where('status', 'confirmed')->get();
        $completedReservations = Reservation::where('status', 'completed')->get();

        return view('admin.pages.dashboard', compact('categories', 'category', 'products', 'product', 'specialists', 'treatments', 'users', 'totalCategory', 'totalProduct', 'totalSpecialist', 'totalTreatment', 'pendingReservations', 'confirmedReservations', 'completedReservations', 'totalPendingReservations', 'totalConfirmedReservations', 'totalCompletedReservations', 'totalUser'));
    }
}
