@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
{{-- Hero Section --}}
<section class="hero-section text-center d-flex align-items-center"
    style="background-image: url('{{ asset('images/lab-uptd.jpg') }}');">
    <div class="container">
        <h1 class="animate__animated animate__fadeInDown">UPTD Geologi dan Laboratorium</h1>
        <p class="lead animate__animated animate__fadeInUp">
            Pusat pengujian geologi dan layanan eksplorasi terpercaya di Sumatera Selatan.
        </p>
        <a href="#about-us" class="btn btn-light btn-lg animate__animated animate__zoomIn">Pelajari Lebih Lanjut <i class="bi bi-arrow-right ms-2"></i></a>
    </div>
</section>

{{-- About Us Section --}}
<section id="about-us" class="container py-5">
    <div class="row justify-content-center g-5">
<div class="col-md-10">
    <h2 class="fw-bold text-primary mb-4 animate__animated animate__fadeInLeft">Mengenai Kami</h2>
    <p class="fs-5 lh-lg animate__animated animate__fadeInUp animate__delay-1s">
        Keberadaan laboratorium pada Dinas Energi dan Sumber Daya Mineral Provinsi Sumatera Selatan berdiri sejak tahun 1976 (Ex Kanwil Dep. Pertambangan dan energi). Laboratorium ini terdiri dari laboratorium kimia mineral dan Petrografi, yang kemudian berkembang dengan hadirnya laboratorium pengujian batubara, pengujian kualitas air, lingkungan dan mekanika tanah.
    </p>
    <p class="fs-5 lh-lg animate__animated animate__fadeInUp animate__delay-2s">
        Unit Pelaksana Teknis Dinas (UPTD) yang membawahi laboratorium terbentuk sejak tanggal 08 Oktober tahun 2010 dengan nama UPTD Laboratorium dan Peralatan Eksplorasi berdasarkan Peraturan Gubernur Sumatera Selatan Nomor 52 Tahun 2010. UPTD ini mempunyai tugas pokok dan fungsi melakukan pengujian batubara, kimia mineral, air dan lingkungan hidup pertambangan, bimbingan teknis penyelidikan umum dan eksplorasi serta sistem informasi geografis bidang pertambangan.
    </p>
    <p class="fs-5 lh-lg animate__animated animate__fadeInUp animate__delay-3s">
        Sejak tanggal 17 Januari 2018, Unit Pelaksana Teknis Dinas Laboratorium dan Peralatan Eksplorasi berubah menjadi Unit Pelaksana Teknis Dinas Geologi dan Laboratorium dengan adanya Peraturan Gubernur Sumatera Selatan Nomor 11 Tahun 2018 yang mempunyai tugas melaksanakan kegiatan operasional dan/atau kegiatan teknis penunjang Dinas di bidang pemberi layanan Laboratorium Pengujian, Penyewaan Peralatan eksplorasi dan jasa Pengolahan Data Spasial pada Sistem informasi Geografis.
    </p>
    <p class="fs-5 lh-lg animate__animated animate__fadeInUp animate__delay-4s">
        Laboratorium UPTD Geolab Dinas ESDM Sumsel telah terakreditasi SNI ISO/IEC 17025;2017 sejak tahun 2010 yang masih dipertahankan menjadi salah satu nilai plus. Agar dapat memperluas pangsa pasar dan meningkatkan jumlah pelanggan pengujian, laboratorium membentuk Badan Layanan Umum Daerah (BLUD) berdasarkan Keputusan Gubernur Sumsel No.166/KPTS/IV/2024 tanggal 23 Februari 2024.
    </p>
    <a href="#services-section" class="btn btn-primary btn-lg mt-3 animate__animated animate__zoomIn animate__delay-5s">Lihat Layanan Kami <i class="bi bi-arrow-right ms-2"></i></a>
</div>
    </div>
</section>

{{-- Services Section --}}
<section id="services-section" class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8">
                <h2 class="fw-bold text-primary mb-3 animate__animated animate__fadeInDown">Layanan Utama Kami</h2>
                <p class="lead text-muted animate__animated animate__fadeInUp">
                    Eksplorasi geologi, pengujian laboratorium, dan dukungan teknis untuk masa depan Sumatera Selatan.
                </p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            {{-- Kartu untuk Pengujian Laboratorium --}}
            <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-1s">
                <div class="card h-100 shadow-sm card-service text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-flask-fill text-primary fs-1 mb-3"></i>
                        <h5 class="fw-bold mb-3">Pengujian Laboratorium</h5>
                        <p class="text-muted">Meliputi pengujian batubara, air, dan kimia mineral sesuai standar terakreditasi.</p>
                        <a href="/layanan/laboratorium" class="btn btn-outline-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            {{-- Kartu untuk Penyewaan Peralatan --}}
            <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-2s">
                <div class="card h-100 shadow-sm card-service text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-tools text-primary fs-1 mb-3"></i>
                        <h5 class="fw-bold mb-3">Penyewaan Peralatan Eksplorasi</h5>
                        <p class="text-muted">Menyediakan berbagai peralatan modern untuk survei dan eksplorasi geologi.</p>
                        <a href="/layanan/penyewaan" class="btn btn-outline-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>

            {{-- Kartu untuk Jasa SIG --}}
            <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-3s">
                <div class="card h-100 shadow-sm card-service text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-map-fill text-primary fs-1 mb-3"></i>
                        <h5 class="fw-bold mb-3">Jasa Pengolahan Data Spasial</h5>
                        <p class="text-muted">Layanan pengolahan data dan pencetakan peta geologi, pertambangan, dan kelistrikan.</p>
                        <a href="/layanan/sig" class="btn btn-outline-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Call to Action Section --}}
<section class="container-fluid bg-primary text-white py-5 text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="fw-bold mb-4 animate__animated animate__fadeInDown">Siap Bermitra dengan Kami?</h2>
                <p class="lead mb-4 animate__animated animate__fadeInUp">
                    Kami siap mendukung proyek Anda dengan data yang akurat dan layanan yang terpercaya.
                </p>
                <a href="/kontak" class="btn btn-light btn-lg animate__animated animate__zoomIn">Hubungi Kami Sekarang <i class="bi bi-chat-dots-fill ms-2"></i></a>
            </div>
        </div>
    </div>
</section>


@endsection