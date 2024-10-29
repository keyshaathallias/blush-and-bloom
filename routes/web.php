<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\TreatmentExploreController;
use App\Http\Controllers\UserController;
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

Route::get('/', [FrontendController::class, 'showHome'])->name('home.show');
Route::post('/', [FrontendController::class, 'storeReservation'])->name('home.reservation.store');
Route::get('/product', [FrontendController::class, 'showProduct'])->name('product.show');
Route::get('/treatment', [FrontendController::class, 'showTreatment'])->name('treatment.show');
Route::get('/treatment-detail/{slug}', [FrontendController::class, 'showDetailTreatment'])->name('detail.treatment.show');
Route::get('/specialist', [FrontendController::class, 'showSpecialist'])->name('specialist.show');

// Reservation
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

// Authentication
Route::get('login', [AuthController::class, 'index'])->name('login.index');
Route::post('login', [AuthController::class, 'login'])->name('login.login');

Route::middleware('auth')->group(function() {
    Route::resource('/dashboard', DashboardController::class);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

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

    // Treatment
    Route::get('/treatment-dashboard', [TreatmentController::class, 'index'])->name('treatment.index');
    Route::get('/create-treatment', [TreatmentController::class, 'create'])->name('treatment.create');
    Route::post('/create-treatment', [TreatmentController::class, 'store'])->name('treatment.store');
    Route::get('/edit-treatment/{slug}', [TreatmentController::class, 'edit'])->name('treatment.edit');
    Route::put('/edit-treatment/{slug}', [TreatmentController::class, 'update'])->name('treatment.update');
    Route::delete('/delete-treatment/{slug}', [TreatmentController::class, 'destroy'])->name('treatment.destroy');

    // Reservation
    Route::get('/reservation-dashboard', [ReservationController::class, 'dashboard'])->name('reservation.dashboard');
    Route::get('/edit-reservation/{slug}', [ReservationController::class, 'edit'])->name('reservation.edit');
    Route::put('/edit-reservation/{slug}', [ReservationController::class, 'update'])->name('reservation.update');
    Route::get('/customer-dashboard', [ReservationController::class, 'customerList'])->name('customer.dashboard');
    Route::post('/customer-dashboard/send-promotion', [ReservationController::class, 'sendPromotion'])->name('customer.sendPromotion');
    Route::delete('/delete-reservation/{slug}', [ReservationController::class, 'destroy'])->name('reservation.destroy');

    // User
    Route::get('/account-dashboard', [UserController::class, 'index'])->name('account.index');
    Route::get('/create-account', [UserController::class, 'create'])->name('account.create');
    Route::post('/create-account', [UserController::class, 'store'])->name('account.store');
    Route::get('/edit-account/{id}', [UserController::class, 'edit'])->name('account.edit');
    Route::put('/edit-account/{id}', [UserController::class, 'update'])->name('account.update');
    Route::delete('/delete-account/{id}', [UserController::class, 'destroy'])->name('account.destroy');
});

// Route::get('/cart', function () {
//     return view('pages.cart');
// });
