<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function laboratorium()
    {
        $layanan = [
            'batubara' => [
                'nama' => 'Pengujian Batubara',
                'deskripsi' => 'Pengujian batubara dapat dilakukan untuk contoh antrasit, bituminous, sub-bituminous, lignit, dan gambut.',
                'parameter' => [
                    'Proximate Analysis' => ['Total Moisture/kadar air total', 'Inherent Moisture/kadar air lembab', 'Ash Content/kadar abu', 'Volatile Matter/kadar zat terbang', 'Fixed Carbon'],
                    'Ultimate Analysis' => ['Total Sulfur/kadar sulfur'],
                    'Analysis Sifat Fisik' => ['Gross Calorific Value/nilai kalori', 'Hard Grove Index (HGI)'],
                ],
                'peralatan' => ['Leco S832', 'Leco AC600', 'Oven Mini Free Space', 'Analytical Balance', 'Carbolite Volatile Matter Furnace (VMF)', 'Carbolite Ashing Furnace (AAF)'],
            ],
            'air' => [
                'nama' => 'Pengujian Air',
                'deskripsi' => 'Pengujian air dilakukan untuk air yang digunakan untuk keperluan higiene dan sanitasi perorangan dan/atau rumah tangga.',
                'parameter' => [
                    'Parameter Fisika' => ['Temperatur/suhu', 'Bau dan rasa', 'Daya Hantar Listrik (DHL)', 'Kekeruhan/turbidity', 'Zat Padat Total', 'Zat Padat Terlarut', 'Zat Padat Tersuspensi', 'Warna'],
                    'Parameter Kimia' => ['Senyawa anion: sulfat, nitrat, nitrit dll.', 'Senyawa logam: Fe, Pb, Cd, Mn, Zn, dll.'],
                ],
                'peralatan' => ['Spectrofotometer UV-VIS', 'Atomic Absorption Spectrometer (AAS)'],
            ],
            'kimia_mineral' => [
                'nama' => 'Pengujian Kimia Mineral',
                'deskripsi' => 'Pengujian kimia mineral dilakukan untuk contoh bahan galian, batuan, dan pasir.',
                'parameter' => [
                    'Parameter Kimia' => ['SiO2', 'Al2O3', 'Fe2O3', 'FeO', 'CaO', 'MgO', 'K2O', 'Na2O', 'TiO2', 'Mn', 'MnO', 'SO3', 'LOI', 'H2O', 'Pb', 'Cu', 'Zn', 'Fe', 'Cd'],
                ],
                'peralatan' => ['Peralatan preparasi: Jaw crusher, Raymond mill, ring grinder, dll.'],
            ],
        ];

        return view('frontend.services.laboratorium', compact('layanan'));
    }
}