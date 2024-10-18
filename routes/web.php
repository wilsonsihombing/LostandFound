<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\DashboardController;



// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')
    ->middleware(['auth', 'isAdmin'])
    ->group(function () {
        // Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });

Auth::routes();