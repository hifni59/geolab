<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <h2 class="fw-bold text-primary mb-3">Tarif Layanan Pengujian</h2>
                <p class="lead text-muted">Berikut adalah daftar tarif untuk setiap pengujian berdasarkan 
                    Peraturan Gubernur Provinsi Sumatera Selatan Nomor 10 Tahun 2024 
                    tentang Tarif Layanan pada Unit Pelaksana Teknis Dinas Geologi dan Laboratorium 
                    pada Dinas Energi dan Sumber Daya Mineral Provinsi Sumatera Selatan
                </p>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            {{-- Bagian Pengujian Batubara --}}
            <div class="col-md-12 mb-5">
                <h4 class="fw-bold mb-4">1. Pengujian Batubara</h4>
                <div class="row g-4">
                    {{-- Kartu Preparasi Sampel --}}
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h5 class="fw-bold text-secondary mb-3"><i class="bi bi-box-seam me-2"></i> Preparasi Sampel</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-wrap me-2">Persiapan Sampel (≤ 4 Kg)</span>
                                        <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                    </div>
                                    <p class="text-muted small mt-1 mb-0">
                                        *Berat sampel lebih dari 4 Kg, penambahan per Kg dikenakan tambahan biaya sebesar Rp 95.000.
                                    </p>
                                </li>
                                <li class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-wrap me-2">Preparasi Pengabuan (≤ 25 gram sampel ukuran 60 mesh)</span>
                                        <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                    </div>
                                    <p class="text-muted small mt-1 mb-0">
                                        *Berat sampel ukuran 60 mesh lebih dari 25 gram, penambahan per 25 gram dikenakan tambahan biaya sebesar Rp 95.000.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    {{-- Kartu Analisis Moisture & Fixed Carbon --}}
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h5 class="fw-bold text-secondary mb-3"><i class="bi bi-moisture me-2"></i> Analisis Moisture & Fixed Carbon</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Analisis Equilibrium Moisture (EQM)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 444.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Total Moisture</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 80.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Air Lembab</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Abu</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Zat Terbang</span>
                                        <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                    </div>
                                    <p class="text-muted small mt-1 mb-0">
                                        *Harga belum termasuk analisis air lembab.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Kartu Analisis Ultimat & Bentuk Belerang --}}
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h5 class="fw-bold text-secondary mb-3"><i class="bi bi-braces me-2"></i> Analisis Ultimat & Belerang</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Carbon/Hydrogen/Nitrogen</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 900.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Belerang Total</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 180.000</span>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Oksigen</span>
                                        <span class="fw-bold text-success text-nowrap"></span>
                                    </div>
                                    <p class="text-muted small mt-1 mb-0">
                                        *Diperoleh dari hasil analisis CHNS dan abu.
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Analisis Klor</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 470.000</span>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Belerang Sulfat</span>
                                        <span class="fw-bold text-success text-nowrap">Rp 660.000</span>
                                    </div>
                                    <p class="text-muted small mt-1 mb-0">
                                        *Belerang organik harus ditambahkan analisis belerang total.
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Belerang Pirit</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 540.000</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Kartu Analisis Sifat Fisik --}}
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h5 class="fw-bold text-secondary mb-3"><i class="bi bi-graph-up me-2"></i> Analisis Sifat Fisik</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Nilai Kalor Gross Adb</span>
                                        <span class="fw-bold text-success text-nowrap">Rp 220.000</span>
                                    </div>
                                    <p class="text-muted small mt-1 mb-0">
                                        *Tanpa Koreksi Sulfur.
                                    </p>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Nilai Kalor Gross Adb</span>
                                        <span class="fw-bold text-success text-nowrap">Rp 400.000</span>
                                    </div>
                                    <p class="text-muted small mt-1 mb-0">
                                        *Dengan Koreksi Sulfur.
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Ash Fusion Temperature</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 540.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Hardgrove Grindability Index</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 420.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Tipe Kokas</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 360.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Free Swelling Index (FSI)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 175.000</span>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>True Specific Gravity (TSG)</span>
                                        <span class="fw-bold text-success text-nowrap">Rp 250.000</span>
                                    </div>
                                    <p class="text-muted small mt-1 mb-0">
                                        *Pengujian TSG harus ditambahkan dengan analisis air lembab.
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Relative Density (RD)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 245.000</span>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Porositas</span>
                                        <span class="fw-bold text-success text-nowrap">Rp 520.000</span>
                                    </div>
                                    <p class="text-muted small mt-1 mb-0">
                                        *Pengujian porositas harus ditambahkan pengujian TSG dan analisis air lembab.
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Bulk Density</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 325.000</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Kartu Analisis Petrografi --}}
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h5 class="fw-bold text-secondary mb-3"><i class="bi bi-journal-text me-2"></i> Analisis Petrografi & Ayak</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Preparasi Petrografi</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 900.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Petrografi</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 850.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Analisa Ayak</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 80.000</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bagian Pengujian Air --}}
            <div class="col-md-12 mb-5">
                <h4 class="fw-bold mb-4">2. Pengujian Air</h4>
                <div class="row g-4">
                    {{-- Kartu Parameter Fisika --}}
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h5 class="fw-bold text-secondary mb-3"><i class="bi bi-thermometer-half me-2"></i> Parameter Fisika</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Temperatur</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 15.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Kekeruhan</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 15.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Daya Hantar Listrik</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 15.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Salinitas</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 20.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Warna</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 20.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Bau</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 15.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Rasa</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 15.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Zat Padat Terlarut (TDS)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Zat Padat Tersuspensi (TSS)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Zat Padat Total</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- Kartu Parameter Kimia --}}
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h5 class="fw-bold text-secondary mb-3"><i class="bi bi-flask-fill me-2"></i> Parameter Kimia</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>pH</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 20.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Kesadahan</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Ca (Kalsium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Mg (Magnesium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Alkalinity</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Acidity</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Zat Organik (KMnO<sub>4</sub>)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Klorida (Cl)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Chemical Oxygen Demand (COD)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Biological Oxygen Demand (BOD)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Oksigen Terlarut</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 20.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Titanium (Ti)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 50.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Krom Heksavalen (Cr<sup>6+</sup>)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 50.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Posfat (PO<sub>4</sub><sup>3-</sup>)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 50.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Sulfat (SO<sub>4</sub><sup>2-</sup>)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Nitrit (NO<sub>2</sub><sup>-</sup>)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Nitrat (NO<sub>3</sub><sup>-</sup>)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Amonia (NH<sub>4</sub><sup>+</sup>)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Sulfida (S<sub>2</sub><sup>-</sup>)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Flouride (F<sup>-</sup>)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Klorin (Cl<sub>2</sub>)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 30.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Pb (Timbal)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Zn (Seng)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Cu (Tembaga)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Fe (Besi)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Cd (Kadmium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Cr (Kromium) total</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Ca (Kalsium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Mg (Magnesium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>K (Kalium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Na (Natrium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Al (Aluminium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Sn (Timah)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>As (Arsen)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Mn (Mangan)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Si (Silikon)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Ti (Titanium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 75.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Hg (Raksa)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Bagian Pengujian Kimia Mineral --}}
            <div class="col-md-12">
                <h4 class="fw-bold mt-5 mb-4">3. Pengujian Kimia Mineral</h4>
                <div class="row g-4">
                    {{-- Kartu Preparasi & Pelarutan Contoh --}}
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h5 class="fw-bold text-secondary mb-3"><i class="bi bi-box-seam-fill me-2"></i> Preparasi & Pelarutan Contoh</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Preparasi Per 1 Kg</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 80.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Pelarutan Contoh Batu Kapur</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 380.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Pelarutan Contoh Clay Mineral / Paris Kwarsa</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 500.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Pelarutan Contoh Batuan Sulfida</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 380.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Pelarutan Contoh Paris Besi / Bijih Besi</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 425.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Pelarutan Contoh Batuan Fosfat</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 370.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Pelarutan Contoh Batuan Mangan</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 370.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Pelarutan Contoh Bijih Nikel</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 590.000</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    {{-- Kartu Pengujian Mineral Per Parameter --}}
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h5 class="fw-bold text-secondary mb-3"><i class="bi bi-list-columns me-2"></i> Pengujian Mineral Per Parameter</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>SiO<sub>2</sub> (Silikon Dioksida)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 220.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>SO<sub>3</sub> (Sulfur Trioksida)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 175.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>LOI (Loss on Ignition)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 70.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>H<sub>2</sub>O (Air)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 70.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>CaO (Kalsium Oksida)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 130.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>MgO (Magnesium Oksida)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 130.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>CaCO<sub>3</sub> (Kalsium Karbonat)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 35.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>MnO Total (Mangan Oksida Total)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 95.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>MnO<sub>2</sub> (Mangan Dioksida)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 95.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>FeO (Besi(II) Oksida/Oksida Fero)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>FeO Total (Besi(II) Oksida/Oksida Fero Total)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 200.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Al<sub>2</sub>O<sub>3</sub> (Aluminium Oksida)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 100.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Fe<sub>2</sub>O<sub>3</sub> (Besi(III) Oksida/Ferri Oksida)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 95.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>TiO<sub>2</sub> (Titanium Dioksida)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 100.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>P<sub>2</sub>O<sub>5</sub> (Fosfor Pentoksida)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 100.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>As (Arsen)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Pb (Timbal)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Cu (Tembaga)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Zn (Seng)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Cr (Kromium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Mn (Mangan)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Fe (Besi)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Al (Aluminium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>K (Kalium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Na (Natrium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Sn (Timah)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 160.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Ti (Titanium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Si (Silikon)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Cd (Kadmium)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 140.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Ag (Perak)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 150.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Hg (Merkuri)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 150.000</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Au (Emas)</span>
                                    <span class="fw-bold text-success text-nowrap">Rp 150.000</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>