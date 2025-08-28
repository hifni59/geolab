@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="container-fluid bg-light py-5 text-center">
        <div class="container">
            <h1 class="display-4 fw-bold text-primary">UPTD Geologi dan Laboratorium</h1>
            [cite_start]<p class="lead">Layanan profesional di bidang geologi, pengujian batubara, mineral, air, dan eksplorasi[cite: 6].</p>
            <a href="#tentang-kami" class="btn btn-primary btn-lg mt-3">Pelajari Lebih Lanjut</a>
        </div>
    </div>

    <div class="container my-5" id="tentang-kami">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('images/lab-uptd.jpg') }}" alt="Laboratorium UPTD" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 order-md-1 mt-4 mt-md-0">
                <h2 class="fw-bold text-secondary">Mengenai Kami</h2>
                [cite_start]<p>Berdiri sejak tahun 1976, UPTD Geologi dan Laboratorium telah berkembang menjadi badan layanan umum daerah (BLUD) yang terakreditasi SNI ISO/IEC 17025;2017[cite: 2, 5]. [cite_start]Kami berkomitmen memberikan layanan pengujian dan eksplorasi yang handal dan profesional di Provinsi Sumatera Selatan[cite: 4, 3].</p>
                [cite_start]<p>Layanan kami mencakup pengujian batubara, air, kimia mineral, penyewaan peralatan, dan jasa pengolahan data spasial SIG[cite: 6, 13, 12, 11, 10, 9, 8, 7].</p>
                <a href="#" class="btn btn-outline-primary">Lihat Profil Lengkap</a>
            </div>
        </div>
    </div>
@endsection