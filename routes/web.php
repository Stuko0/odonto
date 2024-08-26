<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/requests', function () {
    return view('request');
})->middleware(['auth', 'verified'])->name('request');

Route::get('/teachers', function () {
    return view('teachers');
})->middleware(['auth', 'verified'])->name('teachers');

Route::get('/students', function () {
    return view('students');
})->middleware(['auth', 'verified'])->name('students');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
