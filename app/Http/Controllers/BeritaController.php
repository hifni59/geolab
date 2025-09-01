<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BeritaController extends Controller
{
    public function index()
    {
        // URL API dari web induk, menggunakan IP lokal
        $apiUrl = 'http://127.0.0.1:8000/api/berita';
        // $apiUrl ='http://desdm-sumsel-portal.test/api/berita';
        // Mengambil semua data postingan dari API dengan parameter per_page
        // Ini akan memastikan kita mendapatkan semua postingan yang mungkin
        $response = Http::get($apiUrl);

        $posts = collect();

        if ($response->successful() && isset($response->json()['data']) && is_array($response->json()['data'])) {
            $allPosts = collect($response->json()['data']);

            // Melakukan filter lokal di sisi controller untuk kategori 'Geolab'
            $posts = $allPosts->filter(function ($post) {
                return isset($post['kategori']) && $post['kategori'] == 'Geolab';
            })->values();
        }

        return view('frontend.berita.index', compact('posts'));
    }
}