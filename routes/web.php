<?php

use App\Livewire\Day;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/day', Day::class)
    ->name('day');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
