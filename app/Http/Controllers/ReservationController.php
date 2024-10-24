<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Treatment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index() {
        $reservation = Reservation::with('treatment')->get();
        $treatments  = Treatment::all();

        return view('pages.reservation', compact('reservation', 'treatments'));
    }

    public function store(Request $request) {
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

        return redirect()->back();
    }

    public function dashboard() {
        $pendingReservations = Reservation::where('status', 'pending')->orderBy('created_at', 'DESC')->get();
        $confirmedReservations = Reservation::where('status', 'confirmed')->orderBy('created_at', 'DESC')->get();
        $completedReservations = Reservation::where('status', 'completed')->orderBy('created_at', 'DESC')->get();
    
        return view('admin.pages.reservation', compact('pendingReservations', 'confirmedReservations', 'completedReservations'));
    }    

    public function edit($id) {
        $reservation = Reservation::where('id', $id)->firstOrFail();
        return view('admin.pages.editReservation', compact('reservation'));
    }

    public function update(Request $request, string $id) {
        $reservation = Reservation::where('id', $id);
        
        $credentials = $request->validate([
            'status' => 'required',
        ]);

        $reservation->update($credentials);

        return redirect()->route('reservation.dashboard');
    }

    public function destroy($id): RedirectResponse {
        $reservation = Reservation::where('id', $id);
        $reservation->delete();
        return redirect()->back();
    }
}
