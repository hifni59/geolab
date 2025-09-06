<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfilController extends Controller
{
    public function index()
    {
        // URL API untuk halaman profil
        $apiUrl = 'http://127.0.0.1:8000/api/bidang/uptd-geologi-dan-laboratorium';

        // Mengambil data profil dari API
        $response = Http::get($apiUrl);
        $profil = null;

        if ($response->successful() && is_array($response->json())) {
            $profil = $response->json();
        }

        return view('frontend.profil.index', compact('profil'));
    }
}