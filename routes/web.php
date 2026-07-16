<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('fitur')->name('fitur.')->group(function () {
    Route::get('/saon', function () {
        return view('fitur.saon');
    })->name('saon');

    Route::get('/togu', function () {
        return view('fitur.togu');
    })->name('togu');

    Route::get('/pardalanan', function () {
        return view('fitur.pardalanan');
    })->name('pardalanan');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';