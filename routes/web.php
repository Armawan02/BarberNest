<?php

use App\Http\Controllers\BarberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboardCostumer', function () {
    return view('customer.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->get('/admin', [AdminController::class, 'index']);
Route::middleware(['auth','role:barber'])->get('/barber',[BarberController::class,'index']);
Route::middleware(['auth', 'role:customer'])->get('/customer', [CustomerController::class, 'index']);


    
require __DIR__.'/auth.php';