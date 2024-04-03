<?php

use App\Http\Controllers\ChirpController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('/counter', Counter::class);
Route::view('/welcome', 'welcome',);


Route::get('chirps', [ChirpController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('chirps');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
