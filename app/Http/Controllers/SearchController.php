<?php

namespace App\Http\Controllers;

use App\Models\EquipmentItem;
use App\Models\LabItem;
use App\Models\SigService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        
        // --- Siapkan variabel hasil ---
        $beritaResults = [];
        $pejabatResults = [];
        $profilTupoksiResult = null; // Variabel baru untuk hasil tupoksi
        $equipmentItems = collect();
        $labItems = collect();
        $sigServices = collect();
        
        if ($query) {
            $beritaResults = $this->searchBerita($query);
            
            // --- Panggil API Profil SATU KALI ---
            $profilResponse = Http::get(env('PARENT_API_URL', 'http://127.0.0.1:8000') . '/api/bidang/uptd-geologi-dan-laboratorium');
            
            if ($profilResponse->successful() && isset($profilResponse->json()['data'])) {
                $profilData = $profilResponse->json()['data'];
                
                // 1. Cari pejabat dari data profil
                $pejabatResults = $this->searchPejabat($query, $profilData);

                // 2. Cari di deskripsi dan tupoksi dari data profil
                $deskripsi = strip_tags($profilData['deskripsi'] ?? '');
                $tupoksi = strip_tags($profilData['tupoksi'] ?? '');

                if (Str::contains(Str::lower($deskripsi), Str::lower($query)) || Str::contains(Str::lower($tupoksi), Str::lower($query))) {
                    $profilTupoksiResult = [
                        'judul' => 'Profil dan Tupoksi UPTD',
                        'konten' => Str::limit($deskripsi, 150),
                        'link' => route('profil') . '#profil-content'
                    ];
                }
            }
            
            // --- Pencarian Layanan dari DATABASE (Tetap sama) ---
            $equipmentItems = EquipmentItem::where('name', 'LIKE', "%{$query}%")->orWhereHas('category', function ($q) use ($query) { $q->where('name', 'LIKE', "%{$query}%"); })->get();
            $labItems = LabItem::where('name', 'LIKE', "%{$query}%")->orWhere('aliases', 'LIKE', "%{$query}%")->orWhereHas('category', function ($q) use ($query) { $q->where('name', 'LIKE', "%{$query}%"); })->get();
            $sigServices = SigService::where('name', 'LIKE', "%{$query}%")->get();
        }
        
        return view('frontend.search.index', [
            'query' => $query,
            'berita' => $beritaResults,
            'pejabat' => $pejabatResults,
            'profilTupoksi' => $profilTupoksiResult, // Kirim hasil baru ke view
            'equipmentItems' => $equipmentItems,
            'labItems' => $labItems,
            'sigServices' => $sigServices,
        ]);
    }

    private function searchBerita(string $query): array
    {
        // ==========================================
        // PERBAIKAN TYPO ADA DI BARIS DI BAWAH INI
        // ==========================================
        $response = Http::get(env('PARENT_API_URL') . '/api/berita');

        if (!$response->successful() || !isset($response->json()['data'])) {
            return [];
        }

        return collect($response->json()['data'])->filter(function ($post) use ($query) {
            $isGeolabCategory = isset($post['kategori']) && $post['kategori'] == 'Geolab';
            
            if (!$isGeolabCategory) {
                return false;
            }
            
            $contentMatch = Str::contains(Str::lower(strip_tags($post['konten_html'])), Str::lower($query));
            $titleMatch = Str::contains(Str::lower($post['judul']), Str::lower($query));

            return $titleMatch || $contentMatch;
        })->values()->all();
    }

    /**
     * MODIFIKASI: Method ini sekarang menerima data, tidak memanggil API sendiri
     */
    private function searchPejabat(string $query, array $data): array
    {
        $results = [];
        // Cek Kepala Unit
        if (isset($data['kepala_unit']) && (Str::contains(Str::lower($data['kepala_unit']['nama']), Str::lower($query)) || Str::contains(Str::lower($data['kepala_unit']['jabatan']), Str::lower($query)))) {
            $results[] = $data['kepala_unit'];
        }
        
        // Cek Kepala Seksi
        if (isset($data['daftar_seksi'])) {
            foreach ($data['daftar_seksi'] as $seksi) {
                if (isset($seksi['kepala_seksi']) && (Str::contains(Str::lower($seksi['kepala_seksi']['nama']), Str::lower($query)) || Str::contains(Str::lower($seksi['kepala_seksi']['jabatan']), Str::lower($query)))) {
                    $results[] = $seksi['kepala_seksi'];
                }
            }
        }
        return $results;
    }
}