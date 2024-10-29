<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SpecialistController extends Controller
{
    public function index() {
        $specialists = Specialist::all();

        $title = 'Delete Specialist';
        $text  = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('admin.pages.specialist', compact('specialists'));
    }

    public function create() {
        return view('admin.pages.createSpecialist');
    }

    public function store(Request $request) {
        $credentials = $request->validate([
            'image'       => 'required|image|mimes:png,jpg,jpeg',
            'name'        => 'required',
            'description' => 'required',
        ]);

        $credentials['slug'] = Str::slug($request['name']);
        
        $image = $request->file('image');
        $image->storeAs('public/img', $image->hashName());

        Specialist::create([
            'image'        => $image->hashName(),
            'name'         => $credentials['name'],
            'description'  => $credentials['description'],
            'slug'         => $credentials['slug'],
        ]);

        return redirect()->route('specialist.index')->with('success', 'New Specialist Unlocked!');
    }

    public function edit(string $slug) {
        $specialist = Specialist::where('slug', $slug)->firstOrFail();
        return view('admin.pages.editSpecialist', compact('specialist'));
    }

    public function update(Request $request, string $slug) {
        $specialist = Specialist::where('slug', $slug)->firstOrFail();

        $credentials = $request->validate([
            'image'       => 'nullable|image|mimes:png,jpg,jpeg',
            'name'        => 'required',
            'description' => 'required',
        ]);

        $credentials['slug'] = Str::slug($request['name']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/img', $image->hashName());

            Storage::delete('public/img/' . $specialist->image);

            $specialist->update([
                'image'        => $image->hashName(),
                'name'         => $credentials['name'],
                'description'  => $credentials['description'],
                'slug'         => $credentials['slug'],
            ]);
        } else {
            $specialist->update([
                'name'         => $credentials['name'],
                'description'  => $credentials['description'],
                'slug'         => $credentials['slug'],
            ]);
        }

        return redirect()->route('specialist.index')->with('success', 'Specialist Updated!');
    }

    public function destroy($slug): RedirectResponse {
        $specialist = Specialist::where('slug', $slug)->firstOrFail();
        Storage::delete('public/img/' . $specialist->image);
        $specialist->delete();

        return redirect()->back()->with('success', 'Specialist Deleted.');
    }
}
