<?php

use App\Http\Controllers\Auth\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('profile.edit');
Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->middleware(['auth', 'verified'])->name('profile.destroy');

