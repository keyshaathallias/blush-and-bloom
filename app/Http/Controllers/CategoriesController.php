<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Categories::all();
        return view('admin.pages.categories', compact('categories'));
    }

    public function create() {
        return view('admin.pages.createCategories');
    }

    public function store(Request $request) {
        $credentials = $request->validate([
            'category' => 'required',
        ]);

        $credentials['slug'] = Str::slug($credentials['category']);

        Categories::create([
            'category' => $credentials['category'],
            'slug' => $credentials['slug'],
        ]);

        return redirect()->route('categories.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $slug) {
        $category = Categories::where('slug', $slug)->firstOrFail();
        return view('admin.pages.editCategories', compact('category'));
    }

    public function update(Request $request, string $slug) {
        $category = Categories::where('slug', $slug)->firstOrFail();

        $credentials = $request->validate([
            'category' => 'required',
        ]);

        $credentials['slug'] = Str::slug($credentials['category']);

        $category->update([
            'category' => $credentials['category'],
            'slug'     => $credentials['slug'],
        ]);

        return redirect()->route('categories.index');
    }

    public function destroy($slug): RedirectResponse {
        $category = Categories::where('slug', $slug)->firstOrFail();
        $category->delete();

        return redirect()->route('categories.index');
    }
}
