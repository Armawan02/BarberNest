<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\BookingSaya;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('master');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('users',AdminController::class);
    Route::get('/barber/dashboard', [BarberController::class, 'index'])->name('barber.dashboard');
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('dashboard');
});

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/users/create', [AdminController::class, 'usersCreate'])->name('users.create');
    Route::post('/users', [AdminController::class, 'usersStore'])->name('users.store'); 
});
// Route::get('/admin/users', [AdminController::class, 'usersIndex'])->name('admin.users.index');
Route::get('/admin/users/{user}', [AdminController::class, 'usersShow'])->name('admin.users.show');
Route::get('/admin/users/{id}/edit', [AdminController::class, 'edit'])->name('admin.users.edit');
Route::delete('/admin/users/{user}', [AdminController::class, 'usersDestroy'])->name('admin.users.destroy');
Route::get('/admin/users/{id}/edit', [AdminController::class, 'usersEdit'])->name('admin.users.edit');
Route::put('/admin/users/{user}', [AdminController::class, 'usersUpdate'])->name('admin.users.update');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('dashboard');
    Route::post('/customer/pesan', [CustomerController::class, 'store'])->name('customer.pesan');
});
Route::middleware(['auth', 'verified'])->prefix('barber')->name('barber.')->group(function () {
    Route::get('/dashboard', [BarberController::class, 'index'])->name('dashboard');

    Route::put('/booking/{id}/update-status', [BarberController::class, 'updateStatus'])->name('pemesanan.updateStatus');
});
// routes/web.php
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::post('/cabang-layanan', [AdminController::class, 'storeCabangLayanan'])->name('cabangLayanan.store');
});



require __DIR__.'/auth.php';