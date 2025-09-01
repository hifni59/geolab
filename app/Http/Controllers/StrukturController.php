<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StrukturController extends Controller
{
    public function index()
    {
        // Ambil data pejabat UPTD dari API web induk
        // URL ini adalah contoh, ganti dengan URL API yang benar
        // Anda mungkin perlu menyesuaikan parameter untuk mengambil data khusus UPTD Geolab
        $response = Http::get('http://desdm.sumselprov.go.id/api/pejabat');

        // Cek jika request berhasil dan data tersedia
        if ($response->successful() && $response->json()) {
            // Filter data untuk hanya menampilkan pejabat UPTD Geolab
            $pejabat = collect($response->json())->filter(function ($item) {
                return $item['unit'] == 'UPTD Geologi dan Laboratorium';
            });
        } else {
            $pejabat = collect();
        }

        // Data tupoksi (tugas pokok dan fungsi) UPTD
        $tupoksi = [
            'tugas' => 'Melaksanakan kegiatan operasional dan/atau kegiatan teknis penunjang Dinas di bidang pemberi layanan Laboratorium Pengujian, Penyewaan Peralatan eksplorasi dan jasa Pengolahan Data Spasial pada Sistem informasi Geografis.',
            'fungsi' => [
                'Pengujian Laboratorium',
                'Penyewaan Peralatan Eksplorasi',
                'Jasa Pengolahan Data Spasial pada Sistem Informasi Geografis'
            ]
        ];

        return view('frontend.struktur.index', compact('pejabat', 'tupoksi'));
    }
}