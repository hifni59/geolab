<?php

if (!function_exists('format_chemical_name')) {
    /**
     * Mengubah nama kimia format standar menjadi HTML yang diformat.
     * Contoh: SiO2 -> SiO<sub>2</sub>
     * Contoh: SO4(2-) -> SO₄<sup>2-</sup>
     *
     * @param string|null $name
     * @return string
     */
    function format_chemical_name(?string $name): string
    {
        if (is_null($name)) {
            return '';
        }
        
        // Bagian ini sudah benar
        $formatted_name = preg_replace('/([A-Za-z])(\d+)/', '$1<sub>$2</sub>', $name);

        // ======================= AWAL PERBAIKAN DI SINI =======================
        // Mengubah \d+ (satu atau lebih angka) menjadi \d* (nol atau lebih angka)
        // agar bisa menangani (+) dan (-)
        $formatted_name = preg_replace('/\(([\d]*[+\-⁻⁺])\)/', '<sup>$1</sup>', $formatted_name);
        // ======================= AKHIR PERBAIKAN DI SINI =======================
        
        return $formatted_name;
    }
}