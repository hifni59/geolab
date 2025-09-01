<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\StrukturController;

// Rute Frontend
Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/profil', function () {
    return view('frontend.profile');
});

Route::get('/layanan/laboratorium', [ServiceController::class, 'laboratorium']);

// Rute Baru untuk Layanan Lain
Route::get('/layanan/penyewaan', function () {
    return view('frontend.services.sewa');
});
Route::get('/layanan/sig', function () {
    return view('frontend.services.sig');
});

Route::get('/kontak', function () {
    return view('frontend.kontak');
});

// Rute untuk Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

// Rute untuk Struktur Organisasi
Route::get('/struktur', [StrukturController::class, 'index'])->name('struktur.index');