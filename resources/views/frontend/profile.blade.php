@extends('layouts.app')

@section('title', 'Profil Lengkap')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h1 class="display-5 fw-bold text-primary mb-3">Profil UPTD Geologi dan Laboratorium</h1>
            <p class="lead text-muted">Melayani sepenuh hati dengan standar profesional untuk industri, akademisi, dan masyarakat.</p>
        </div>
    </div>
</div>

<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 mb-5">
                    <div class="card-body p-5">
                        <h3 class="fw-bold text-secondary mb-4">Sekilas Tentang Kami</h3>
                        <p class="fs-6 lh-lg">Keberadaan laboratorium pada Dinas Energi dan Sumber Daya Mineral Provinsi Sumatera Selatan berdiri sejak tahun 1976. Pada awalnya, laboratorium ini terdiri dari laboratorium kimia mineral dan petrografi, yang kemudian berkembang dengan hadirnya laboratorium pengujian batubara, pengujian kualitas air, lingkungan, dan mekanika tanah.</p>
                        <p class="fs-6 lh-lg mt-3">Unit Pelaksana Teknis Dinas (UPTD) yang membawahi laboratorium terbentuk pada tanggal 8 Oktober 2010 dengan nama UPTD Laboratorium dan Peralatan Eksplorasi. Sejak 17 Januari 2018, namanya berubah menjadi Unit Pelaksana Teknis Dinas Geologi dan Laboratorium. Sebagai nilai tambah, laboratorium UPTD Geolab Dinas ESDM Sumsel telah terakreditasi SNI ISO/IEC 17025;2017 sejak tahun 2010.</p>
                        <p class="fs-6 lh-lg mt-3">Untuk memperluas pangsa pasar dan meningkatkan jumlah pelanggan, UPTD Geolab telah membentuk Badan Layanan Umum Daerah (BLUD) per 23 Februari 2024.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center mb-5">
            <h2 class="fw-bold text-primary">Tugas Pokok & Fungsi</h2>
            <p class="text-muted">Pelaksana kegiatan operasional dan teknis penunjang Dinas ESDM Sumsel.</p>
        </div>
    </div>
    <div class="row justify-content-center g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 text-center p-4">
                <i class="bi bi-flask-fill text-primary fs-1 mb-3"></i>
                <h5 class="fw-bold mb-3">Layanan Laboratorium Pengujian</h5>
                <p>Melaksanakan pengujian batubara, kimia mineral, air, dan lingkungan pertambangan dengan standar terakreditasi.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 text-center p-4">
                <i class="bi bi-geo-alt-fill text-primary fs-1 mb-3"></i>
                <h5 class="fw-bold mb-3">Penyewaan Peralatan Eksplorasi</h5>
                <p>Menyediakan peralatan eksplorasi modern seperti mesin bor, geolistrik, dan alat survei lainnya.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 text-center p-4">
                <i class="bi bi-map-fill text-primary fs-1 mb-3"></i>
                <h5 class="fw-bold mb-3">Jasa Pengolahan Data Spasial</h5>
                <p>Memberikan layanan pengolahan data dan pencetakan peta geologi, pertambangan, dan kelistrikan.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-primary text-white py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="fw-bold mb-4">Hubungi Kami</h2>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6">
                        <p class="mb-1"><i class="bi bi-geo-alt me-2"></i> Jalan Angkatan 45 No. 2440, Demang Lebar Daun, Palembang, Sumatera Selatan 30137</p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1"><i class="bi bi-envelope me-2"></i> lab_distamben@yahoo.co.id</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection