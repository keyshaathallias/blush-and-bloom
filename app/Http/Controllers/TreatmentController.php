<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TreatmentController extends Controller
{
    public function index() {
        $treatments = Treatment::all();
        
        $title = 'Delete Treatment';
        $text  = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('admin.pages.treatment', compact('treatments'));
    }

    public function create() {
        return view('admin.pages.createTreatment');
    }

    public function store(Request $request) {
        $credentials = $request->validate([
            'image'       => 'required',
            'name'        => 'required',
            'description' => 'required',
        ]);

        $credentials['slug'] = Str::slug($request['name']);

        $image = $request->file('image');
        $image->storeAs('public/img', $image->hashName());

        Treatment::create([
            'image'        => $image->hashName(),
            'name'         => $credentials['name'],
            'description'  => $credentials['description'],
            'slug'         => $credentials['slug'],
        ]);

        return redirect()->route('treatment.index')->with('success', 'New Treatment Unlocked!');
    }

    public function edit(string $slug) {
        $treatment = Treatment::where('slug', $slug)->firstOrFail();
        return view('admin.pages.editTreatment', compact('treatment'));
    }

    public function update(Request $request, string $slug) {
        $treatment = Treatment::where('slug', $slug)->firstOrFail();

        $credentials = $request->validate([
            'image'       => 'nullable|image|mimes:png,jpg,jpeg',
            'name'        => 'required',
            'description' => 'required',
        ]);

        $credentials['slug'] = Str::slug($request['name']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/img', $image->hashName());

            Storage::delete('public/img/' . $treatment->image);

            $treatment->update([
                'image'       => $image->hashName(),
                'name'        => $credentials['name'],
                'description' => $credentials['description'],
                'slug'        => $credentials['slug'],
            ]);
        } else {
            $treatment->update([
                'name'        => $credentials['name'],
                'description' => $credentials['description'],
                'slug'        => $credentials['slug'],
            ]);
        }

        return redirect()->route('treatment.index')->with('success', 'Treatment Updated!');
    }

    public function destroy($slug): RedirectResponse {
        $treatment = Treatment::where('slug', $slug)->firstOrFail();
        Storage::delete('public/img/' . $treatment->image);
        $treatment->delete();

        return redirect()->back()->with('success', 'Treatment Deleted.');
    }
}
