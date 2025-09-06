@extends('layouts.app')

@section('title', 'Berita Geolab')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-10">
            <h1 class="display-5 fw-bold text-primary mb-3">Berita UPTD Geolab</h1>
            <p class="lead text-muted">Informasi terbaru seputar kegiatan dan layanan UPTD Geologi dan Laboratorium.</p>
        </div>
    </div>
</div>

<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row g-4" id="daftar-berita">
            @forelse ($posts as $index => $post)
            <div class="col-md-4 card-berita" data-index="{{ $index }}">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ $post['gambar_unggulan'] ?? 'https://placehold.co/400x250?text=Gambar+Tidak+Tersedia' }}" class="card-img-top" alt="{{ Str::limit(strip_tags($post['judul']), 50) }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">{{ $post['judul'] }}</h5>
                        <p class="card-text text-muted small">{{ \Carbon\Carbon::parse($post['tanggal_publikasi'])->translatedFormat('d F Y') }}</p>
                        <p class="card-text">{{ Str::limit(strip_tags($post['konten_html']), 100) }}</p>
                        <a href="http://desdm-sumsel-portal.test/berita/{{ $post['slug'] }}" class="btn btn-primary btn-sm mt-auto">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p class="fs-4 text-muted">Tidak ada postingan berita saat ini.</p>
            </div>
            @endforelse
        </div>
        
        {{-- Tombol Muat Lebih Banyak --}}
        @if (count($posts) > 3)
        <div class="row justify-content-center mt-5">
            <div class="col-md-4 text-center">
                <button id="muat-lebih-banyak-btn" class="btn btn-outline-primary w-100">Muat Lebih Banyak</button>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection