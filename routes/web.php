<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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