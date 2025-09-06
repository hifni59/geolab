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
        
        // 1. Ubah subskrip: Cari huruf yang diikuti oleh angka.
        // Contoh: "O2" akan menjadi "O<sub>2</sub>"
        $formatted_name = preg_replace('/([A-Za-z])(\d+)/', '$1<sub>$2</sub>', $name);

        // 2. Ubah superskrip: Cari tanda kurung dengan format (angka+/-).
        // Contoh: "(2-)" akan menjadi "<sup>2-</sup>"
        $formatted_name = preg_replace('/\(([\d]+[+-])\)/', '<sup>$1</sup>', $formatted_name);
        
        return $formatted_name;
    }
}