<?php

use App\Http\Controllers\Admin\LabItemCrudController;
use App\Http\Controllers\Admin\EquipmentCrudController;
use App\Http\Controllers\Admin\SigServiceCrudController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =================== FRONTEND ROUTES ===================
Route::get('/', function () {
    return view('frontend.home');
})->name('frontend.home'); // <-- Mengembalikan halaman beranda Anda

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');

Route::get('/layanan/laboratorium', [ServiceController::class, 'laboratorium'])->name('layanan.lab');
Route::get('/layanan/penyewaan', [ServiceController::class, 'penyewaan'])->name('layanan.sewa');
Route::get('/layanan/sig', [ServiceController::class, 'sig'])->name('layanan.sig');

Route::get('/kontak', function () {
    return view('frontend.kontak');
})->name('kontak');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');


// =================== AUTH & ADMIN ROUTES ===================

// Rute dasbor default dari Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Rute untuk CRUD di bawah prefix /admin
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('lab-items', LabItemCrudController::class)->names('lab');
    Route::resource('equipment-items', EquipmentCrudController::class)->names('equipment');
    Route::resource('sig-services', SigServiceCrudController::class)->names('sig');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rute lain yang dibuat oleh Breeze (biarkan ini)
require __DIR__.'/auth.php';