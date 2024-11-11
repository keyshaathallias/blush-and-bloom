<?php

namespace App\Http\Controllers;

use App\Models\PromotionalEmail;
use App\Models\Reservation;
use Illuminate\Http\Request;

class PromotionalEmailController extends Controller
{
    public function index()
    {
        $email = PromotionalEmail::latest()->first();
        return view('emails.showPromotion', compact('email'));
    }

    public function create()
    {
        return view('emails.create');
    }

    public function store(Request $request)
    {
        PromotionalEmail::create($request->only('subject', 'body'));
        return redirect()->route('email.dashboard')->with('success', 'Promotional email created successfully!');
    }

    public function edit($id)
    {
        $email = PromotionalEmail::findOrFail($id);
        return view('emails.editPromotional', compact('email'));
    }

    public function update(Request $request, $id)
    {
        $email = PromotionalEmail::findOrFail($id);
        $email->update($request->only('subject', 'body'));
        return redirect()->route('email.dashboard')->with('success', 'Promotional email updated successfully!');
    }

}
