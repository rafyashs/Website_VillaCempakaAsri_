<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\ProfileController;

// Halaman Utama
Route::get('/', function () { return view('home'); })->name('home');

// Halaman About & Contact (Ini yang ditambahkan agar tidak 404)
Route::get('/about', function () { 
    return view('about'); 
})->name('about');

Route::get('/contact', function () { 
    return view('contact'); 
})->name('contact');

// Halaman Villa (Nama route disamakan dengan home.blade.php)
Route::view('/villa', 'Villa.index')->name('villa.index');
Route::view('/villa/e-private-pool', 'Villa.eprivatepool')->name('villa.eprivatepool');
Route::view('/villa/rumah-lumbung', 'Villa.lumbung')->name('villa.lumbung');
Route::view('/villa/rumah-kayu-3-kamar', 'Villa.kayu3')->name('villa.rk3');
Route::view('/villa/rumah-kayu-4-kamar', 'Villa.kayu4')->name('villa.rk4');
Route::view('/villa/rumah-cempaka-asri', 'Villa.cempaka')->name('villa.cempakaasri');

// Dashboard & Auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Dashboard
Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

require __DIR__.'/auth.php';