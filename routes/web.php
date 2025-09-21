<?php

use Illuminate\Support\Facades\Route;
use Laravel\WorkOS\Http\Middleware\ValidateSessionWithWorkOS;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth',
    ValidateSessionWithWorkOS::class,
])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('tickets', 'tickets')->name('tickets');
    Route::view('analytics', 'analytics')->name('analytics');
    Route::view('users', 'users')->name('users');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
