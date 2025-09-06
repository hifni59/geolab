<?php

namespace Database\Seeders;

use App\Models\LabCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananLabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu untuk menghindari duplikasi data
        DB::table('lab_items')->delete();
        DB::table('lab_categories')->delete();

        // ---------------- KATEGORI 1: PENGUJIAN BATUBARA ----------------
        $batubara = LabCategory::create(['name' => 'Pengujian Batubara']);
        
        $batubara->items()->createMany([
            // Preparasi
            ['name' => 'Persiapan Sampel (≤ 4 Kg)', 'price' => 75000, 'notes' => '*Berat sampel lebih dari 4 Kg, penambahan per Kg dikenakan tambahan biaya sebesar Rp 95.000.'],
            ['name' => 'Preparasi Pengabuan (≤ 25 gram sampel ukuran 60 mesh)', 'price' => 75000, 'notes' => '*Berat sampel ukuran 60 mesh lebih dari 25 gram, penambahan per 25 gram dikenakan tambahan biaya sebesar Rp 95.000.'],
            // Analisis Moisture & Fixed Carbon
            ['name' => 'Analisis Equilibrium Moisture (EQM)', 'price' => 444000],
            ['name' => 'Total Moisture', 'price' => 80000],
            ['name' => 'Air Lembab', 'price' => 75000],
            ['name' => 'Abu', 'price' => 75000],
            ['name' => 'Zat Terbang', 'price' => 75000, 'notes' => '*Harga belum termasuk analisis air lembab.'],
            // Analisis Ultimat & Belerang
            ['name' => 'Carbon/Hydrogen/Nitrogen', 'price' => 900000],
            ['name' => 'Belerang Total', 'price' => 180000],
            ['name' => 'Oksigen', 'price' => 0, 'notes' => '*Diperoleh dari hasil analisis CHNS dan abu.'],
            ['name' => 'Analisis Klor', 'price' => 470000],
            ['name' => 'Belerang Sulfat', 'price' => 660000, 'notes' => '*Belerang organik harus ditambahkan analisis belerang total.'],
            ['name' => 'Belerang Pirit', 'price' => 540000],
            // Analisis Sifat Fisik
            ['name' => 'Nilai Kalor Gross Adb (Tanpa Koreksi Sulfur)', 'notes' => '*Pengujian Nilai Kalor Gross Adb ditambahkan analisis Sulfur', 'price' => 220000],
            ['name' => 'Nilai Kalor Gross Adb (Dengan Koreksi Sulfur)', 'notes' => '*Pengujian Nilai Kalor Gross Adb ditambahkan analisis Sulfur', 'price' => 400000],
            ['name' => 'Ash Fusion Temperature (Oksidasi dan Reduksi)', 'price' => 540000],
            ['name' => 'Hardgrove Grindability Index (HGI)', 'price' => 420000],
            ['name' => 'Tipe Kokas', 'price' => 360000],
            ['name' => 'Free Swelling Index (FSI)', 'price' => 175000],
            ['name' => 'True Specific Gravity (TSG)', 'price' => 250000, 'notes' => '*Pengujian TSG harus ditambahkan dengan analisis air lembab.'],
            ['name' => 'Relative Density (RD)', 'price' => 245000],
            ['name' => 'Porositas', 'price' => 520000, 'notes' => '*Pengujian porositas harus ditambahkan pengujian TSG dan analisis air lembab.'],
            ['name' => 'Bulk Density', 'price' => 325000],
            // Analisis Petrografi & Ayak
            ['name' => 'Preparasi Petrografi', 'price' => 900000],
            ['name' => 'Petrografi', 'price' => 850000],
            ['name' => 'Analisa Ayak', 'price' => 80000],
        ]);


        // ---------------- KATEGORI 2: PENGUJIAN AIR ----------------
        $air = LabCategory::create(['name' => 'Pengujian Air']);
        
        $air->items()->createMany([
            // Fisika
            ['name' => 'Temperatur', 'price' => 15000],
            ['name' => 'Kekeruhan', 'price' => 15000],
            ['name' => 'Daya Hantar Listrik (DHL)', 'price' => 15000],
            ['name' => 'Salinitas', 'price' => 20000],
            ['name' => 'Warna', 'price' => 20000],
            ['name' => 'Bau', 'price' => 15000],
            ['name' => 'Rasa', 'price' => 15000],
            ['name' => 'Zat Padat Terlarut (TDS)', 'price' => 30000],
            ['name' => 'Zat Padat Tersuspensi (TSS)', 'price' => 30000],
            ['name' => 'Zat Padat Total', 'price' => 30000],
            // Kimia
            ['name' => 'pH', 'price' => 20000],
            ['name' => 'Kesadahan', 'price' => 30000],
            ['name' => 'Ca (Kalsium)', 'price' => 30000],
            ['name' => 'Mg (Magnesium)', 'price' => 30000],
            ['name' => 'Alkalinity', 'price' => 30000],
            ['name' => 'Acidity', 'price' => 30000],
            ['name' => 'Zat Organik (KMnO4)', 'price' => 30000],
            ['name' => 'Klorida (Cl)', 'price' => 30000],
            ['name' => 'Chemical Oxygen Demand (COD)', 'price' => 75000],
            ['name' => 'Biological Oxygen Demand (BOD)', 'price' => 75000],
            ['name' => 'Oksigen Terlarut', 'price' => 20000],
            ['name' => 'Titanium (Ti)', 'price' => 50000],
            ['name' => 'Krom Heksavalen (Cr6+)', 'price' => 50000],
            ['name' => 'Posfat (PO4(3-))', 'price' => 50000],
            ['name' => 'Sulfat (SO4(2-))', 'price' => 30000],
            ['name' => 'Nitrit (NO2(-))', 'price' => 30000],
            ['name' => 'Nitrat (NO3(-))', 'price' => 30000],
            ['name' => 'Amonia (NH4(+))', 'price' => 30000],
            ['name' => 'Sulfida (S2(-))', 'price' => 30000],
            ['name' => 'Flouride (F(-))', 'price' => 30000],
            ['name' => 'Klorin (Cl2)', 'price' => 30000],
            ['name' => 'Pb (Timbal)', 'price' => 75000],
            ['name' => 'Zn (Seng)', 'price' => 75000],
            ['name' => 'Cu (Tembaga)', 'price' => 75000],
            ['name' => 'Fe (Besi)', 'price' => 75000],
            ['name' => 'Cd (Kadmium)', 'price' => 75000],
            ['name' => 'Cr (Kromium) total', 'price' => 75000],
            ['name' => 'K (Kalium)', 'price' => 75000],
            ['name' => 'Na (Natrium)', 'price' => 75000],
            ['name' => 'Al (Aluminium)', 'price' => 75000],
            ['name' => 'Sn (Timah)', 'price' => 75000],
            ['name' => 'As (Arsen)', 'price' => 75000],
            ['name' => 'Mn (Mangan)', 'price' => 75000],
            ['name' => 'Si (Silikon)', 'price' => 75000],
            ['name' => 'Hg (Merkuri/Air Raksa)', 'price' => 150000],
        ]);
        
        // ---------------- KATEGORI 3: PENGUJIAN KIMIA MINERAL ----------------
        $mineral = LabCategory::create(['name' => 'Pengujian Kimia Mineral']);

        $mineral->items()->createMany([
            // Preparasi & Pelarutan Contoh
            ['name' => 'Preparasi Per 1 Kg', 'price' => 80000],
            ['name' => 'Pelarutan Contoh Batu Kapur', 'price' => 380000],
            ['name' => 'Pelarutan Contoh Clay Mineral / Paris Kwarsa', 'price' => 500000],
            ['name' => 'Pelarutan Contoh Batuan Sulfida', 'price' => 380000],
            ['name' => 'Pelarutan Contoh Paris Besi / Bijih Besi', 'price' => 425000],
            ['name' => 'Pelarutan Contoh Batuan Fosfat', 'price' => 370000],
            ['name' => 'Pelarutan Contoh Batuan Mangan', 'price' => 370000],
            ['name' => 'Pelarutan Contoh Bijih Nikel', 'price' => 590000],
            // Pengujian Mineral Per Parameter
            ['name' => 'SiO2', 'aliases' => 'Silikon Dioksida', 'price' => 220000],
            ['name' => 'SO3', 'aliases' => 'Sulfur Trioksida', 'price' => 175000],
            ['name' => 'LOI', 'aliases' => 'Loss on Ignition', 'price' => 70000],
            ['name' => 'H2O', 'aliases' => 'Air', 'price' => 70000],
            ['name' => 'CaO', 'aliases' => 'Kalsium Oksida', 'price' => 130000],
            ['name' => 'MgO', 'aliases' => 'Magnesium Oksida', 'price' => 135000],
            ['name' => 'CaCO3', 'aliases' => 'Kalsium Karbonat', 'price' => 35000],
            ['name' => 'MnO Total', 'aliases' => 'Mangan Oksida Total', 'price' => 95000],
            ['name' => 'MnO2', 'aliases' => 'Mangan Dioksida', 'price' => 95000],
            ['name' => 'FeO', 'aliases' => 'Besi(II) Oksida, Oksida Fero', 'price' => 140000],
            ['name' => 'FeO Total', 'aliases' => 'Besi(II) Oksida, Oksida Fero Total', 'price' => 200000],
            ['name' => 'Al2O3', 'aliases' => 'Aluminium Oksida', 'price' => 100000],
            ['name' => 'Fe2O3', 'aliases' => 'Besi(III) Oksida, Ferri Oksida', 'price' => 35000],
            ['name' => 'TiO2', 'aliases' => 'Titanium Dioksida', 'price' => 100000],
            ['name' => 'P2O5', 'aliases' => 'Fosfor Pentoksida', 'price' => 100000],
            ['name' => 'As', 'aliases' => 'Arsen', 'price' => 140000],
            ['name' => 'Pb', 'aliases' => 'Timbal', 'price' => 140000],
            ['name' => 'Cu', 'aliases' => 'Tembaga', 'price' => 140000],
            ['name' => 'Zn', 'aliases' => 'Seng', 'price' => 140000],
            ['name' => 'Cr', 'aliases' => 'Kromium', 'price' => 140000],
            ['name' => 'Mn', 'aliases' => 'Mangan', 'price' => 140000],
            ['name' => 'Fe', 'aliases' => 'Besi', 'price' => 140000],
            ['name' => 'Al', 'aliases' => 'Aluminium', 'price' => 140000],
            ['name' => 'K', 'aliases' => 'Kalium', 'price' => 140000],
            ['name' => 'Na', 'aliases' => 'Natrium', 'price' => 140000],
            ['name' => 'Sn', 'aliases' => 'Timah', 'price' => 160000],
            ['name' => 'Ti', 'aliases' => 'Titanium', 'price' => 140000],
            ['name' => 'Si', 'aliases' => 'Silikon', 'price' => 140000],
            ['name' => 'Ca', 'aliases' => 'Calsium', 'price' => 140000],
            ['name' => 'Mg', 'aliases' => 'Magnesium', 'price' => 140000],
            ['name' => 'Cd', 'aliases' => 'Kadmium', 'price' => 140000],
            ['name' => 'Ag', 'aliases' => 'Perak', 'price' => 140000],
            ['name' => 'Hg', 'aliases' => 'Merkuri/Air Raksa', 'price' => 150000],
            ['name' => 'Au', 'aliases' => 'Emas', 'price' => 140000],
        ]);
    }
}