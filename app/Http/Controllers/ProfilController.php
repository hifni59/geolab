<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache; // Import Cache
use Illuminate\Support\Facades\Log;   // Import Log

class ProfilController extends Controller
{
    /**
     * Menampilkan halaman profil UPTD, struktur, dan tupoksi.
     */
    public function index()
    {
        $cacheKey = 'uptd_profil_data';
        $cacheDuration = 3600; // Cache data selama 1 jam

        try {
            // Gunakan Cache::remember untuk efisiensi
            $profil = Cache::remember($cacheKey, $cacheDuration, function () {
                // Ambil URL API dari file .env
                $parentApiUrl = rtrim(env('PARENT_API_URL', 'http://127.0.0.1:8000'), '/');
                $apiUrl = $parentApiUrl . '/api/bidang/uptd-geologi-dan-laboratorium';

                // Panggil API
                $response = Http::get($apiUrl);

                // Jika sukses dan format data benar, kembalikan data
                if ($response->successful() && is_array($response->json())) {
                    return $response->json();
                }

                // Jika gagal, kembalikan null agar tidak meng-cache error
                return null;
            });

        } catch (\Illuminate\Http\Client\ConnectionException $e) {
            // Tangani jika API tidak dapat dihubungi
            Log::error('Gagal mengambil data profil UPTD dari API: ' . $e->getMessage());
            
            // Berikan null ke view agar halaman tidak error total
            $profil = null;
        }

        return view('frontend.profil.index', compact('profil'));
    }
}