<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache; // Import Cache
use Illuminate\Support\Facades\Log;   // Import Log untuk mencatat error

class BeritaController extends Controller
{
    /**
     * Menampilkan daftar postingan berita dari kategori Geolab.
     */
    public function index()
    {
        // Definisikan kunci cache dan durasinya (dalam detik). 3600 = 1 jam.
        $cacheKey = 'geolab_berita_posts';
        $cacheDuration = 3600; // Cache selama 1 jam

        try {
            // Gunakan Cache::remember()
            // Jika data ada di cache, ia akan langsung mengembalikannya.
            // Jika tidak, ia akan menjalankan closure, mengambil data dari API, 
            // lalu menyimpannya di cache sebelum mengembalikannya.
            $posts = Cache::remember($cacheKey, $cacheDuration, function () {
                
                // 1. Ambil URL API dari file .env
                // rtrim() digunakan untuk memastikan tidak ada garis miring ganda
                $parentApiUrl = rtrim(env('PARENT_API_URL', 'http://127.0.0.1:8000'), '/');
                $apiUrl = $parentApiUrl . '/api/berita';

                // 2. Panggil API
                $response = Http::get($apiUrl);

                // 3. Proses data jika panggilan sukses
                if ($response->successful() && isset($response->json()['data'])) {
                    $allPosts = collect($response->json()['data']);

                    // Filter untuk kategori 'Geolab'
                    return $allPosts->filter(function ($post) {
                        // Sesuaikan ini jika struktur data API berbeda (misal: $post['kategori']['slug'])
                        return isset($post['kategori']) && $post['kategori'] === 'Geolab';
                    })->values(); // values() untuk mereset key array
                }

                // Jika API gagal atau format data salah, kembalikan collection kosong
                return collect();
            });

        } catch (\Illuminate\Http\Client\ConnectionException $e) {
            // 4. Tangani error jika API tidak dapat dihubungi
            Log::error('Gagal mengambil berita dari API: ' . $e->getMessage());
            
            // Berikan collection kosong ke view agar halaman tidak error, 
            // tapi hanya menampilkan pesan 'tidak ada berita'.
            $posts = collect();
        }

        return view('frontend.berita.index', compact('posts'));
    }
}