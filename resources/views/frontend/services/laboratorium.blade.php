@extends('layouts.app')

@section('title', 'Layanan Pengujian Laboratorium')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h1 class="display-5 fw-bold text-primary mb-3">Layanan Pengujian Laboratorium</h1>
            <p class="lead text-muted">Kami melayani berbagai pengujian laboratorium dengan standar terakreditasi untuk memastikan hasil yang akurat dan terpercaya.</p>
        </div>
    </div>
</div>

<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                {{-- Kartu Preparasi --}}
                <div class="card card-service shadow-lg border-0 mb-5">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-tools text-secondary me-4 fs-1"></i>
                            <div>
                                <h3 class="fw-bold text-secondary mb-0">Preparasi dan Pengolahan Contoh</h3>
                                <p class="text-muted small">Tahapan krusial untuk memastikan contoh uji representatif.</p>
                            </div>
                        </div>
                        <p class="fs-6 lh-lg">Preparasi dan pengolahan contoh adalah tahapan penting sebelum dilakukan pengujian di laboratorium. Contoh uji yang digunakan untuk pengujian harus representatif dan sesuai dengan persyaratan pada metode standar uji yang digunakan.</p>
                        <h5 class="fw-bold text-muted mt-4 mb-3">Peralatan yang digunakan:</h5>
                        <ul class="list-unstyled row g-2">
                            <li class="col-md-6"><i class="bi bi-gear-fill text-info me-2"></i> Jaw crusher</li>
                            <li class="col-md-6"><i class="bi bi-gear-fill text-info me-2"></i> Raymond mill, ring grinder</li>
                            <li class="col-md-6"><i class="bi bi-gear-fill text-info me-2"></i> Rotap shieve shaker</li>
                            <li class="col-md-6"><i class="bi bi-gear-fill text-info me-2"></i> Drying oven</li>
                            <li class="col-md-6"><i class="bi bi-gear-fill text-info me-2"></i> Analytical balance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                {{-- Kartu Pengujian Batubara --}}
                <div class="card card-service shadow-lg border-0 mb-5">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-fire text-warning me-4 fs-1"></i>
                            <div>
                                <h3 class="fw-bold text-secondary mb-0">Pengujian Batubara</h3>
                                <p class="text-muted small">Untuk contoh antrasit, bituminous, sub-bituminous, lignit, dan gambut.</p>
                            </div>
                        </div>
                        <p class="fs-6 lh-lg">Pengujian batubara dapat dilakukan untuk contoh antrasit, bituminous, sub-bituminous, lignit, dan gambut.</p>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h5 class="fw-bold text-muted mb-3">Parameter Pengujian</h5>
                                <h6 class="fw-bold text-secondary">Proximate analysis</h6>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Total Moisture/kadar air total</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Inherent Moisture/kadar air lembab</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Ash Content/kadar abu</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Volatile Matter/kadar zat terbang</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Fixed Carbon</li>
                                </ul>
                                <h6 class="fw-bold text-secondary">Ultimate analysis</h6>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Total sulfur/kadar sulfur</li>
                                </ul>
                                <h6 class="fw-bold text-secondary">Analysis sifat fisik</h6>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Gross Calorific Value/nilai kalori</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Hard Grove Index (HGI)</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-bold text-muted mb-3">Peralatan Pengujian</h5>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-tools text-info me-2"></i> Leco S832</li>
                                    <li><i class="bi bi-tools text-info me-2"></i> Leco AC600</li>
                                    <li><i class="bi bi-tools text-info me-2"></i> Oven Mini Free Space</li>
                                    <li><i class="bi bi-tools text-info me-2"></i> Analytical balance</li>
                                    <li><i class="bi bi-tools text-info me-2"></i> Carbolite Volatile Matter Furnace (VMF)</li>
                                    <li><i class="bi bi-tools text-info me-2"></i> Carbolite Ashing Furnace (AAF)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                {{-- Kartu Pengujian Air --}}
                <div class="card card-service shadow-lg border-0 mb-5">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-droplet-fill text-primary me-4 fs-1"></i>
                            <div>
                                <h3 class="fw-bold text-secondary mb-0">Pengujian Air</h3>
                                <p class="text-muted small">Untuk kebutuhan higiene dan sanitasi perorangan atau rumah tangga.</p>
                            </div>
                        </div>
                        <p class="fs-6 lh-lg">Pengujian air dilakukan untuk air yang digunakan untuk keperluan higiene dan sanitasi perorangan dan/atau rumah tangga yang mengakses secara mandiri atau yang memiliki sumber air sendiri untuk keperluan sehari-hari.</p>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h5 class="fw-bold text-muted mb-3">Parameter Pengujian</h5>
                                <h6 class="fw-bold text-secondary">Parameter Fisika</h6>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Temperatur/suhu</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Bau dan rasa</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Daya Hantar Listrik (DHL)</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Kekeruhan/turbidity</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Zat Padat Total</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Zat Padat Terlarut</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Zat Padat Tersuspensi</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Warna</li>
                                </ul>
                                <h6 class="fw-bold text-secondary">Parameter Kimia</h6>
                                <ul class="list-unstyled">
                                    <li class="d-flex"><i class="bi bi-check-circle-fill text-success me-2"></i> <span>Senyawa anion: sulfat, nitrat, nitrit, klorida, kesadahan total, Ca, Mg, dll.</span></li>
                                    <li class="d-flex"><i class="bi bi-check-circle-fill text-success me-2"></i> <span>Senyawa logam: Fe, Pb, Cd, Mn, Zn, dll.</span></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-bold text-muted mb-3">Peralatan Pengujian</h5>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-tools text-info me-2"></i> Spectrofotometer UV-VIS</li>
                                    <li><i class="bi bi-tools text-info me-2"></i> Metoda volumetri</li>
                                    <li><i class="bi bi-tools text-info me-2"></i> Atomic Absorption Spectrometer (AAS)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                {{-- Kartu Pengujian Kimia Mineral --}}
                <div class="card card-service shadow-lg border-0 mb-5">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-gem text-info me-4 fs-1"></i>
                            <div>
                                <h3 class="fw-bold text-secondary mb-0">Pengujian Kimia Mineral</h3>
                                <p class="text-muted small">Untuk contoh bahan galian, batuan, dan pasir.</p>
                            </div>
                        </div>
                        <p class="fs-6 lh-lg">Pengujian kimia mineral dilakukan untuk contoh bahan galian, batuan, dan pasir.</p>
                        <h5 class="fw-bold text-muted mt-4 mb-3">Parameter Pengujian</h5>
                        <ul class="list-unstyled row g-2">
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> SiO2</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> Al2O3</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> Fe2O3</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> FeO</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> CaO</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> MgO</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> K2O</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> Na2O</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> TiO2</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> Mn</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> MnO</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> SO3</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> LOI</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> H2O</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> Pb</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> Cu</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> Zn</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> Fe</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> Cd</li>
                            <li class="col-md-4"><i class="bi bi-check-circle-fill text-success me-2"></i> dll.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection