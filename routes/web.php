<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SearchController;


Route::get('/search', [SearchController::class, 'index'])->name('search');


// Rute Frontend
Route::get('/', function () {
    return view('frontend.home');
})->name('frontend.home'); 

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');


// Rute untuk Layanan, semuanya ditangani oleh ServiceController
Route::get('/layanan/laboratorium', [ServiceController::class, 'laboratorium'])->name('layanan.lab');
Route::get('/layanan/penyewaan', [ServiceController::class, 'penyewaan'])->name('layanan.sewa');
Route::get('/layanan/sig', [ServiceController::class, 'sig'])->name('layanan.sig');

Route::get('/kontak', function () {
    return view('frontend.kontak');
});

// Rute untuk Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');