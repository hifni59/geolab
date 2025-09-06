<?php

namespace Database\Seeders;

use App\Models\EquipmentCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel untuk seeding ulang yang bersih
        DB::table('equipment_items')->delete();
        DB::table('equipment_categories')->delete();

        // Kategori: Mesin Bor
        $mesinBor = EquipmentCategory::create([
            'name' => 'Mesin Bor',
            'icon_svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 11V6H8V11H16Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 21V11" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 21L14 19L10 19L12 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 11V16H15V11H12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 11V16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 16L14 18L10 18L12 16Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 6V4H8V6" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 4H8" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 11L14 13L10 13L12 11Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 13V15" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 15L14 17L10 17L12 15Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 17V19" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 19L14 21L10 21L12 19Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'
        ]);
        $mesinBor->items()->createMany([
            ['name' => 'Mesin Bor Variable', 'brand' => 'CG.2.1', 'year' => 1993, 'daily_rate' => 114300, 'monthly_rate' => 3429000],
            ['name' => 'Mesin Bor', 'brand' => 'DB. 455', 'year' => 1980, 'daily_rate' => 121923, 'monthly_rate' => 3657690],
            ['name' => 'Mesin Bor', 'brand' => 'YBM.3', 'year' => 1983, 'daily_rate' => 102835, 'monthly_rate' => 3085050],
            ['name' => 'Mesin Bor', 'brand' => 'TOHO', 'year' => 1984, 'daily_rate' => 85727, 'monthly_rate' => 2571810],
            ['name' => 'Mesin Bor Jackcro', 'brand' => 'Y-SPK', 'year' => 1998, 'daily_rate' => 63067, 'monthly_rate' => 1892010],
            ['name' => 'Mesin Bor Portable', 'brand' => 'DORMER', 'year' => 1998, 'daily_rate' => 22861, 'monthly_rate' => 685830],
        ]);
        // Kategori: Pompa Air
        $pompaAir = EquipmentCategory::create([
            'name' => 'Pompa Air',
            'icon_svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pump"><path d="M12 22v-6m0-4v-2"/><path d="M12 6a4 4 0 0 0-4-4h-2v4h6m-6 0h4a4 4 0 0 1 4 4v2m-8 0v4m0 0a4 4 0 0 0 4 4h2v-4h-6z"/></svg>'
        ]);
        $pompaAir->items()->createMany([
            ['name' => 'Pompa Torak YBM', 'brand' => 'SP-150', 'year' => 1980, 'daily_rate' => 20956, 'monthly_rate' => 628680],
            ['name' => 'Pompa Torak YBM', 'brand' => 'SP-100', 'year' => 1983, 'daily_rate' => 17145, 'monthly_rate' => 514350],
            ['name' => 'Pompa Torak TOHO', 'brand' => 'TOHO', 'year' => 1984, 'daily_rate' => 6477, 'monthly_rate' => 194310],
            ['name' => 'Pompa Torak BW', 'brand' => 'BW-250', 'year' => 1993, 'daily_rate' => 14716, 'monthly_rate' => 441480],
            ['name' => 'Pompa Chansin', 'brand' => 'Yanmar', 'year' => 2000, 'daily_rate' => 7883, 'monthly_rate' => 236490],
            ['name' => 'Pompa Honda', 'brand' => '3,5 HP', 'year' => 1993, 'daily_rate' => 5334, 'monthly_rate' => 160020],
        ]);
        // Kategori: Menara Bor
        $menaraBor = EquipmentCategory::create([
            'name' => 'Menara Bor',
            'icon_svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 2H14V4H10V2Z" fill="#000000"/><path d="M12 4V22" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 10H18V12H6V10Z" fill="#000000"/><path d="M6 10V22" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M18 10V22" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 12V22" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 14H14V16H10V14Z" fill="#000000"/><path d="M10 18H14V20H10V18Z" fill="#000000"/></svg>'
        ]);
        $menaraBor->items()->createMany([
            ['name' => 'Tripod, Katrol, Taket', 'brand' => 'Lokal', 'year' => 1980, 'daily_rate' => 2286, 'monthly_rate' => 68581],
        ]);
        
        // Kategori: Pipa Bor
        $pipaBor = EquipmentCategory::create(['name' => 'Pipa Bor', 'icon_svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C9.79 2 8 3.79 8 6V18C8 20.21 9.79 22 12 22C14.21 22 16 20.21 16 18V6C16 3.79 14.21 2 12 2ZM12 4C13.1 4 14 4.9 14 6V8H10V6C10 4.9 10.9 4 12 4ZM14 10V14H10V10H14ZM14 16V18C14 19.1 13.1 20 12 20C10.9 20 10 19.1 10 18V16H14Z" fill="#000000"/><path d="M16 11H18V13H16V11Z" fill="#000000"/><path d="M6 11H8V13H6V11Z" fill="#000000"/></svg>']);
        $pipaBor->items()->createMany([
            ['name' => 'Pipa Bor HQ', 'brand' => '3 mtr', 'year' => 1980, 'daily_rate' => 571, 'monthly_rate' => 17145],
            ['name' => 'Pipa Bor NQ', 'brand' => '3 mtr', 'year' => 1980, 'daily_rate' => 476, 'monthly_rate' => 14287],
            ['name' => 'Pipa Bor BW', 'brand' => '3 mtr', 'year' => 1980, 'daily_rate' => 419, 'monthly_rate' => 12573],
            ['name' => 'Pipa Bor AW', 'brand' => '3 mtr', 'year' => 1980, 'daily_rate' => 407, 'monthly_rate' => 12219],
        ]);
        
        // Kategori: Core Barel
        $coreBarel = EquipmentCategory::create(['name' => 'Core Barel', 'icon_svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 2H17C17.5523 2 18 2.44772 18 3V21C18 21.5523 17.5523 22 17 22H7C6.44772 22 6 21.5523 6 21V3C6 2.44772 6.44772 2 7 2Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 5H14" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 8H14" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 11H14" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 14H14" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 17H14" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="5" r="1" fill="#000000"/><circle cx="12" cy="8" r="1" fill="#000000"/><circle cx="12" cy="11" r="1" fill="#000000"/><circle cx="12" cy="14" r="1" fill="#000000"/><circle cx="12" cy="17" r="1" fill="#000000"/></svg>']);
        $coreBarel->items()->createMany([
            ['name' => 'Core Barel HQ TT/DT', 'brand' => '3 mtr', 'year' => 1980, 'daily_rate' => 8572, 'monthly_rate' => 257181],
            ['name' => 'Core Barel NQ TT/DT', 'brand' => '3 mtr', 'year' => 1980, 'daily_rate' => 8286, 'monthly_rate' => 248609],
            ['name' => 'Core Barel NMLC TT', 'brand' => '1,5 mtr', 'year' => 1980, 'daily_rate' => 4204, 'monthly_rate' => 126134],
            ['name' => 'Core Barel Sangle Tube', 'brand' => 'HQ/NQ', 'year' => 1980, 'daily_rate' => 2476, 'monthly_rate' => 74297],
        ]);

        // Kategori: Casing
        $casing = EquipmentCategory::create(['name' => 'Casing', 'icon_svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 4C14.76 4 17 6.24 17 9V15C17 17.76 14.76 20 12 20C9.24 20 7 17.76 7 15V9C7 6.24 9.24 4 12 4ZM12 6C10.34 6 9 7.34 9 9V15C9 16.66 10.34 18 12 18C13.66 18 15 16.66 15 15V9C15 7.34 13.66 6 12 6Z" fill="#000000"/></svg>']);
        $casing->items()->createMany([
            ['name' => 'Casing Hw', 'brand' => '3 mtr', 'year' => 1980, 'daily_rate' => 952, 'monthly_rate' => 28575],
            ['name' => 'Casing Nw', 'brand' => '3 mtr', 'year' => 1980, 'daily_rate' => 919, 'monthly_rate' => 27591],
            ['name' => 'Casing Bx', 'brand' => '1,5 mtr', 'year' => 1980, 'daily_rate' => 571, 'monthly_rate' => 17145],
        ]);

        // Kategori: Mata Bor
        $mataBor = EquipmentCategory::create(['name' => 'Mata Bor', 'icon_svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2L6 10H18L12 2Z" fill="#000000"/><path d="M12 22L6 14H18L12 22Z" fill="#000000"/><path d="M22 12L14 18V6L22 12Z" fill="#000000"/><path d="M2 12L10 6V18L2 12Z" fill="#000000"/><circle cx="12" cy="12" r="2" fill="#000000"/></svg>']);
        $mataBor->items()->createMany([
            ['name' => 'Theree Cone 12"', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 31500, 'monthly_rate' => 945000],
            ['name' => 'Theree Cone 10"', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 28000, 'monthly_rate' => 840000],
            ['name' => 'Theree Cone 8"', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 24500, 'monthly_rate' => 735000],
            ['name' => 'Theree Cone 6"', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 21000, 'monthly_rate' => 630000],
            ['name' => 'Theree Cone 4"', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 19250, 'monthly_rate' => 577500],
            ['name' => 'Theree Cone 3"', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 17500, 'monthly_rate' => 525000],
            ['name' => 'Theree Cone 9"', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 15750, 'monthly_rate' => 472500],
            ['name' => 'There Wing 6"', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 14000, 'monthly_rate' => 420000],
            ['name' => 'There Wing 4"', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 12250, 'monthly_rate' => 367500],
            ['name' => 'There Wing 3"', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 10500, 'monthly_rate' => 315000],
            ['name' => 'Diamond Bit HQ/TT/DT', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 47250, 'monthly_rate' => 1417500],
            ['name' => 'Diamond Bit NQ/TT/DT', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 40250, 'monthly_rate' => 1207500],
            ['name' => 'Diamond Bit NMLC', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 22750, 'monthly_rate' => 682500],
            ['name' => 'Tungsten HQ/TT/DT', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 14000, 'monthly_rate' => 420000],
            ['name' => 'Tungsten NQ/TT/DT', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 12250, 'monthly_rate' => 367500],
            ['name' => 'Tungsten NMLC', 'brand' => 'Luar', 'year' => 1980, 'daily_rate' => 10500, 'monthly_rate' => 315000],
        ]);

        // Kategori: Peralatan Lain
        $lainLain = EquipmentCategory::create(['name' => 'Peralatan Lain', 'icon_svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 12H6L9 5L15 19L18 12H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="4" cy="12" r="2" fill="#000000"/><circle cx="20" cy="12" r="2" fill="#000000"/></svg>']);
        $lainLain->items()->createMany([
            ['name' => 'Mesin Sondir', 'brand' => 'HF', 'year' => 1997, 'daily_rate' => 99856, 'monthly_rate' => 2995680],
            ['name' => 'Geolistrik', 'brand' => 'NANIURA', 'year' => 1998, 'daily_rate' => 149785, 'monthly_rate' => 4493550],
            ['name' => 'Teodolite', 'brand' => 'TOPCON', 'year' => 1986, 'daily_rate' => 69637, 'monthly_rate' => 2089110],
            ['name' => 'Alat Logging Air Tanah', 'brand' => 'Martiel Geophysics, Type: MLTCX-137002', 'year' => 2021, 'daily_rate' => 211680, 'monthly_rate' => 6350400],
            ['name' => 'Alat Geolistrik', 'brand' => 'Martiel Geophysics Resistivity Meter, Model: MGG-1261, Type: 1450P', 'year' => 2021, 'daily_rate' => 423360, 'monthly_rate' => 12700800],
            ['name' => 'Water Level Meter', 'brand' => 'Martiel Geophysics, Model: W-100, Serial: 137-01', 'year' => 2021, 'daily_rate' => 54022, 'monthly_rate' => 1620675],
            ['name' => 'Bore Hole Camera', 'brand' => 'Martiel Geophysics, Type: SID-Ovrec/F2K-1994001', 'year' => 2021, 'daily_rate' => 360150, 'monthly_rate' => 10804500],
        ]);
    }
}