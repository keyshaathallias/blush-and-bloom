<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index() {
        $products   = Product::with('categories')->get();
        $categories = Categories::all();

        $title = 'Delete Product';
        $text  = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('admin.pages.product', compact('products', 'categories'));
    }

    public function create() {
        $categories = Categories::all();
        return view('admin.pages.createProduct', compact('categories'));
    }

    public function store(Request $request) {
        $credentials = $request->validate([
            'image'         => 'required|image|mimes:png,jpg,jpeg',
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required',
            'categories_id' => 'required',
        ]);

        $credentials['slug'] = Str::slug($credentials['name']);

        $image = $request->file('image');
        $image->storeAs('public/img', $image->hashName());

        Product::create([
            'image'         => $image->hashName(),
            'name'          => $credentials['name'],
            'description'   => $credentials['description'],
            'price'         => $credentials['price'],
            'categories_id' => $credentials['categories_id'],
            'slug'          => $credentials['slug'],
        ]);

        return redirect()->route('product.index')->with('success', 'New Product Unlocked!');
    }

    public function show(string $slug) {
        //
    }

    public function edit(string $slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        $categories = Categories::all();
        return view('admin.pages.editProduct', compact('product', 'categories'));
    }

    public function update(Request $request, string $slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        
        $credentials = $request->validate([
            'image'         => 'nullable|image|mimes:png,jpg,jpeg',
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required',
            'categories_id' => 'required',
        ]);

        $credentials['slug'] = Str::slug($credentials['name']);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/img', $image->hashName());

            Storage::delete('public/img/' . $product->image);

            $product->update([
                'image'         => $image->hashName(),
                'name'          => $credentials['name'],
                'description'   => $credentials['description'],
                'price'         => $credentials['price'],
                'categories_id' => $credentials['categories_id'],
                'slug'          => $credentials['slug'],
            ]);
        } else {
            $product->update([
                'name'          => $credentials['name'],
                'description'   => $credentials['description'],
                'price'         => $credentials['price'],
                'categories_id' => $credentials['categories_id'],
                'slug'          => $credentials['slug'],
            ]);
        }

        return redirect()->route('product.index')->with('success', 'Product Updated!');
    }

    public function destroy($slug): RedirectResponse {
        $product = Product::where('slug', $slug)->firstOrFail();
        Storage::delete('public/img/' . $product->image);
        $product->delete();

        return redirect()->back()->with('success', 'Product Deleted.');
    }

}
