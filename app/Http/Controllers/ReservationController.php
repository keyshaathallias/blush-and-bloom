<?php

namespace App\Http\Controllers;

use App\Mail\EmailPromotion;
use App\Mail\EmailReservation;
use App\Models\PromotionalEmail;
use App\Models\Reservation;
use App\Models\Treatment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function index() {
        $reservation = Reservation::with('treatment')->get();
        $treatments  = Treatment::all();
        
        $title = 'Delete Reservation';
        $text  = "Are you sure you want to delete?";
        confirmDelete($title, $text);


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

        $reservation = Reservation::create($credentials);
        $statusMessage = 'Thank you for your reservation. Your status is currently pending.';
        $greetingMessage = 'Please wait for confirmation.';
        Mail::to($reservation->email)->send(new EmailReservation($reservation, $statusMessage, $greetingMessage));

        return redirect()->back()->with('success', 'Please check your email for updates!');
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
        $reservation = Reservation::findOrFail($id);
        
        $credentials = $request->validate([
            'status' => 'required',
        ]);

        $status = $credentials['status'];
        $reservation->update(['status' => $status]);

        $statusMessage = '';
        if ($status == 'confirmed') {
            $statusMessage   = 'Your reservation has been confirmed.';
            $greetingMessage = 'We are looking forward to seeing you!';
        } elseif ($status == 'completed') {
            $statusMessage   = 'Your reservation has been completed.';
            $greetingMessage = 'Thank you for choosing our service!';
        }

        if ($statusMessage) {
            Mail::to($reservation->email)->send(new EmailReservation($reservation, $statusMessage, $greetingMessage));
        }

        return redirect()->route('reservation.dashboard')->with('success', 'Reservation Status Has Been Updated!');
    }

    public function customerList() {
        $customers = Reservation::select('first_name', 'last_name', 'email', 'created_at')
                                ->distinct()
                                ->orderBy('created_at', 'desc')
                                ->get();
    
        return view('admin.pages.customer', compact('customers'));
    }

    public function sendPromotion() {
        $customers = Reservation::selectRaw('email, MIN(first_name) as first_name, MIN(last_name) as last_name')
                                ->groupBy('email')
                                ->get();
                                
        $emailContent = PromotionalEmail::latest()->first();

        foreach ($customers as $customer) {
            Mail::to($customer->email)->send(new EmailPromotion($customer, $emailContent));
        }
    
        return redirect()->back()->with('success', 'Promotional emails sent successfully to all customers!');
    }    

    public function sendSelectedEmails(Request $request) {
        $selectedCustomerEmails = $request->input('selected_customers', []);
    
        if (empty($selectedCustomerEmails)) {
            return redirect()->back()->with('error', 'No customers selected!');
        }
    
        $customers = Reservation::whereIn('email', $selectedCustomerEmails)
                                ->selectRaw('email, MIN(first_name) as first_name, MIN(last_name) as last_name')
                                ->groupBy('email')
                                ->get();
    
        $emailContent = PromotionalEmail::latest()->first();
        
        foreach ($customers as $customer) {
            Mail::to($customer->email)->send(new EmailPromotion($customer, $emailContent));
        }
    
        return redirect()->back()->with('success', 'Promotional emails sent successfully to selected customers!');
    }  

    public function destroy($id): RedirectResponse {
        $reservation = Reservation::where('id', $id);
        $reservation->delete();
        return redirect()->back()->with('success', 'Reservation Deleted.');
    }
}
