<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SpecialistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'showProductHome'])->name('show.product.home');

Route::get('/product', [FrontendController::class, 'showProduct'])->name('show.product');

Route::get('/treatment', function () {
    return view('pages.treatment');
});
Route::get('/detail-treatment', function () {
    return view('pages.detailTreatment');
});
Route::get('/specialist', function () {
    return view('pages.specialist');
});
Route::get('/reservation', function () {
    return view('pages.reservation');
});
Route::get('/cart', function () {
    return view('pages.cart');
});
Route::get('/404', function () {
    return view('pages.404');
});

Route::resource('/dashboard', DashboardController::class);

// Category
Route::get('/category-dashboard', [CategoriesController::class, 'index'])->name('categories.index');
Route::get('/create-category', [CategoriesController::class, 'create'])->name('categories.create');
Route::post('/create-category', [CategoriesController::class, 'store'])->name('categories.store');
Route::get('/edit-category/{slug}', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::put('/edit-category/{slug}', [CategoriesController::class, 'update'])->name('categories.update');
Route::delete('/delete-category/{slug}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

// Product
Route::get('/product-dashboard', [ProductController::class, 'index'])->name('product.index');
Route::get('/create-product', [ProductController::class, 'create'])->name('product.create');
Route::post('/create-product', [ProductController::class, 'store'])->name('product.store');
Route::get('/edit-product/{slug}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/edit-product/{slug}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/delete-product/{slug}', [ProductController::class, 'destroy'])->name('product.destroy');

// Specialist
Route::get('/specialist-dashboard', [SpecialistController::class, 'index'])->name('specialist.index');
Route::get('/create-specialist', [SpecialistController::class, 'create'])->name('specialist.create');
Route::post('/create-specialist', [SpecialistController::class, 'store'])->name('specialist.store');
Route::get('/edit-specialist/{slug}', [SpecialistController::class, 'edit'])->name('specialist.edit');
Route::put('/edit-specialist/{slug}', [SpecialistController::class, 'update'])->name('specialist.update');
Route::delete('/delete-specialist/{slug}', [SpecialistController::class, 'destroy'])->name('specialist.destroy');
