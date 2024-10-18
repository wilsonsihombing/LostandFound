<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ExportController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LostItemController;
use App\Http\Controllers\FoundItemController;




Route::get("/", [HomeController::class, 'index'])->name('home');
Route::get("/dashboard", [dashboardController::class, 'index'])->name('dashboard');

// Route untuk lapor kehilangan
Route::get('/report-loss/create', [LostItemController::class, 'create'])->name('report-loss.create');
Route::post('/report-loss', [LostItemController::class, 'store'])->name('lost-items.store');
Route::get('/export/export', [ExportController::class, 'export'])->name('lost-items.export');

// Route untuk lapor penemuan
Route::get('/report-found/create', [FoundItemController::class, 'create'])->name('report-found.create');
Route::post('/report-found', [FoundItemController::class, 'store'])->name('found-items.store');

// Route untuk menampilkan data kehilangan
// Route::resource('lost-items', LostItemController::class)->only(['index', 'show']);


// Route untuk menampilkan data penemuan
// Route::get('/found-items', [FoundItemController::class, 'index'])->name('found-items.index');
// Route untuk laporan penemuan barang

// Rute untuk Menampilkan Data Penemuan
Route::resource('found-items', FoundItemController::class)->only(['index', 'show']);
// Route::resource('found-items', FoundItemController::class);

// Route untuk mengekspor data kehilangan
// Route::get('lost-items/export', [LostItemController::class, 'export'])->name('lost-items.export');
// Route::resource('lost-items', LostItemController::class);
// Route untuk mengekspor data kehilangan
// Route untuk mengekspor data kehilangan


// Route resource untuk operasi CRUD lost-items
Route::resource('lost-items', LostItemController::class)->only(['index', 'show']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')
    ->middleware(['auth', 'isAdmin'])
    ->group(function () {
        // Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });

Auth::routes();