<?php

namespace App\Http\Controllers;

// Import semua model yang kita butuhkan
use App\Models\EquipmentCategory;
use App\Models\LabCategory;
use App\Models\SigService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Menampilkan halaman layanan laboratorium beserta datanya.
     */
    public function laboratorium()
    {
        // Ambil data kategori lab, eager load relasi 'items'
        $kategoriLayanan = LabCategory::with('items')->get(); 
        
        // Kirim data tersebut ke view
        return view('frontend.services.laboratorium', compact('kategoriLayanan'));
    }

    /**
     * Menampilkan halaman penyewaan peralatan beserta datanya.
     */
    public function penyewaan()
    {
        // Ambil data kategori peralatan, eager load relasi 'items'
        $kategoriPeralatan = EquipmentCategory::with('items')->get();
        
        // Kirim data tersebut ke view
        return view('frontend.services.sewa', compact('kategoriPeralatan'));
    }

    /**
     * Menampilkan halaman jasa SIG beserta datanya.
     */
    public function sig()
    {
        // Ambil data layanan SIG, eager load relasi 'tiers'
        $layananSig = SigService::with('tiers')->get();
        
        // Kirim data tersebut ke view
        return view('frontend.services.sig', compact('layananSig'));
    }
}