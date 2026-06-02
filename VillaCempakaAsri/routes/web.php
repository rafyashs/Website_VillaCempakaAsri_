<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/villa', 'Villa.index')->name('villa.index');
Route::view('/villa/e-private-pool', 'Villa.eprivatepool')->name('villa.eprivatepool');
Route::view('/villa/rumah-lumbung', 'Villa.rumah-lumbung')->name('villa.lumbung');
Route::view('/villa/rumah-kayu-3-kamar', 'Villa.kayu3')->name('villa.kayu3');
Route::view('/villa/rumah-kayu-4-kamar', 'Villa.kayu4')->name('villa.kayu4');
Route::view('/villa/rumah-cempaka-asri', 'Villa.cempaka')->name('villa.cempaka');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
