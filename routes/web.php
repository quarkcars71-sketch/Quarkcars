<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Sign-up route
Route::get('/sign-up', [PagesController::class, 'sign_up'])->name('sign-up');
Route::post('/sign-up', [PagesController::class, 'register'])->name('sign-up.post');

require __DIR__.'/auth.php';
