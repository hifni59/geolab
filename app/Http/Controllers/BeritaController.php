<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // <-- Pastikan Request di-import
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class BeritaController extends Controller
{
    // Tentukan berapa banyak item per halaman
    private $perPage = 3;

    public function index(Request $request)
    {
        try {
            // Ambil SEMUA postingan Geolab dari cache atau API (logika ini tetap)
            $allPosts = Cache::remember('geolab_berita_posts', 3600, function () {
                $parentApiUrl = rtrim(env('PARENT_API_URL', 'http://127.0.0.1:8000'), '/');
                $response = Http::get($parentApiUrl . '/api/berita');

                if ($response->successful() && isset($response->json()['data'])) {
                    return collect($response->json()['data'])->filter(function ($post) {
                        return isset($post['kategori']) && $post['kategori'] === 'Geolab';
                    })->values();
                }
                return collect();
            });

            // Ambil nomor halaman dari request, default-nya 1
            $page = $request->input('page', 1);

            // "Paginate" collection secara manual
            $paginatedPosts = $allPosts->forPage($page, $this->perPage)->values();
            
            // Cek apakah ini permintaan AJAX (dari tombol "Muat Lebih Banyak")
            if ($request->ajax()) {
                // Jika ya, kirim hanya bagian HTML kartunya saja
                return view('frontend.berita.partials._post_grid', ['posts' => $paginatedPosts])->render();
            }
            
            // Jika ini permintaan halaman biasa (pertama kali), kirim halaman penuh
            // Kirim postingan pertama dan total semua postingan
            return view('frontend.berita.index', [
                'initialPosts' => $paginatedPosts,
                'totalPosts' => $allPosts->count()
            ]);

        } catch (\Illuminate\Http\Client\ConnectionException $e) {
            Log::error('Gagal mengambil berita dari API: ' . $e->getMessage());
            // Jika API error, tetap render halaman dengan data kosong
            if ($request->ajax()) { return ''; } // Kirim string kosong untuk AJAX
            return view('frontend.berita.index', ['initialPosts' => collect(), 'totalPosts' => 0]);
        }
    }
}