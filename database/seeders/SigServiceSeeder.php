<?php

namespace Database\Seeders;

use App\Models\SigService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SigServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Penting: Hapus data dari tabel child (tiers) terlebih dahulu
        // sebelum menghapus dari tabel parent (services) untuk menghindari
        // error foreign key constraint.
        DB::table('sig_tiers')->delete();
        DB::table('sig_services')->delete();

        // 1. Peta Administrasi
        $adminService = SigService::create(['name' => 'Peta Administrasi', 'icon_class' => 'bi bi-map-fill']);
        $adminService->tiers()->createMany([
            ['scale' => '1:250.000', 'price' => 150000],
            ['scale' => '1:100.000', 'price' => 200000],
            ['scale' => '1:50.000', 'price' => 250000],
            ['scale' => '1:25.000', 'price' => 300000],
            ['scale' => '1:10.000', 'price' => 350000],
        ]);

        // 2. Peta Geologi
        $geologiService = SigService::create(['name' => 'Peta Geologi', 'icon_class' => 'bi bi-map-fill']);
        $geologiService->tiers()->createMany([
            ['scale' => '1:250.000', 'price' => 250000],
            ['scale' => '1:100.000', 'price' => 300000],
            ['scale' => '1:50.000', 'price' => 350000],
            ['scale' => '1:25.000', 'price' => 350000],
            ['scale' => '1:10.000', 'price' => 450000],
        ]);
        
        // 3. Peta Pertambangan
        $tambangService = SigService::create(['name' => 'Peta Pertambangan', 'icon_class' => 'bi bi-map-fill']);
        $tambangService->tiers()->createMany([
            ['scale' => '1:250.000', 'price' => 300000],
            ['scale' => '1:100.000', 'price' => 400000],
            ['scale' => '1:50.000', 'price' => 450000],
            ['scale' => '1:25.000', 'price' => 500000],
            ['scale' => '1:10.000', 'price' => 550000],
        ]);
        
        // 4. Peta Migas
        $migasService = SigService::create(['name' => 'Peta Migas', 'icon_class' => 'bi bi-map-fill']);
        $migasService->tiers()->createMany([
            ['scale' => '1:250.000', 'price' => 300000],
            ['scale' => '1:100.000', 'price' => 350000],
            ['scale' => '1:50.000', 'price' => 350000],
            ['scale' => '1:25.000', 'price' => 450000],
            ['scale' => '1:10.000', 'price' => 550000],
        ]);
        
        // 5. Peta Kelistrikan
        $listrikService = SigService::create(['name' => 'Peta Kelistrikan', 'icon_class' => 'bi bi-map-fill']);
        $listrikService->tiers()->createMany([
            ['scale' => '1:250.000', 'price' => 300000],
            ['scale' => '1:100.000', 'price' => 350000],
            ['scale' => '1:50.000', 'price' => 350000],
            ['scale' => '1:25.000', 'price' => 450000],
            ['scale' => '1:10.000', 'price' => 550000],
        ]);

        // 6. Jasa Overlay Peta
        $overlayService = SigService::create(['name' => 'Jasa Overlay Peta', 'icon_class' => 'bi bi-map-fill']);
        $overlayService->tiers()->createMany([
            ['scale' => '1:250.000', 'price' => 150000],
            ['scale' => '1:100.000', 'price' => 200000],
            ['scale' => '1:50.000', 'price' => 250000],
            ['scale' => '1:25.000', 'price' => 300000],
            ['scale' => '1:10.000', 'price' => 350000],
        ]);
    }
}