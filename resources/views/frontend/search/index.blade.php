@extends('layouts.app')
@section('title', 'Hasil Pencarian')
@section('content')
<div class="container my-5">
<div class="row justify-content-center text-center">
<div class="col-md-10">
<h1 class="display-5 fw-bold text-primary mb-3">Hasil Pencarian</h1>
@if (isset($query) && strlen($query) > 0)
<p class="lead text-muted">Hasil untuk kata kunci: <strong class="text-dark">"{{ $query }}"</strong></p>
@else
<p class="lead text-muted">Silakan masukkan kata kunci untuk memulai pencarian.</p>
@endif
</div>
</div>
</div>
<div class="container-fluid bg-light py-5">
<div class="container">
{{-- Pastikan ada query sebelum menampilkan hasil --}}
@if (isset($query) && strlen($query) > 0)
        {{-- Hasil Berita (di-refactor agar menggunakan variabel langsung) --}}
        <div class="mb-5">
            <h4 class="fw-bold text-secondary">Berita ({{ count($berita) }})</h4>
            <hr>
            <div class="row g-4">
                @forelse ($berita as $post)
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card h-100 shadow-sm border-0">
                        {{-- Ganti dengan URL yang benar jika perlu --}}
                        <img src="{{ $post['gambar_unggulan'] ?? 'https://placehold.co/400x250?text=Gambar+Error' }}" class="card-img-top" alt="{{ Str::limit(strip_tags($post['judul']), 50) }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">{{ $post['judul'] }}</h5>
                            <p class="card-text text-muted small">{{ \Carbon\Carbon::parse($post['tanggal_publikasi'])->translatedFormat('d F Y') }}</p>
                            <p class="card-text">{{ Str::limit(strip_tags($post['konten_html']), 100) }}</p>
                            <a href="http://127.0.0.1:8000/berita/{{ $post['slug'] }}" class="btn btn-primary btn-sm mt-auto" target="_blank">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-12"><p class="fs-6 text-muted">Tidak ada berita yang ditemukan.</p></div>
                @endforelse
            </div>
        </div>

        {{-- ======================= BAGIAN LAYANAN YANG DI-UPGRADE ======================= --}}
        <div class="mb-5">
            <h4 class="fw-bold text-secondary">Layanan ({{ $equipmentItems->count() + $labItems->count() + $sigServices->count() }})</h4>
            <hr>
            {{-- Tampilkan hasil penyewaan peralatan --}}
            <div class="row g-4 mb-4">
                @foreach ($equipmentItems as $alat)
                    {{-- Ini akan menampilkan kartu peralatan yang kaya detail --}}
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="card h-100 shadow-lg border-0 w-100">
                            <img src="{{ $alat->image_path ?? 'https://placehold.co/400x300/EBF4FF/76839A?text=' . urlencode($alat->name) }}" class="card-img-top" alt="{{ $alat->name }}">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $alat->name }}</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between"><span>Merk</span><span class="fw-bold text-end">{{ $alat->brand }}</span></li>
                                    <li class="d-flex justify-content-between"><span>Tahun</span><span class="fw-bold">{{ $alat->year }}</span></li>
                                    <li class="d-flex justify-content-between mt-2"><span>Tarif per hari</span><span class="fw-bold text-success">Rp {{ number_format($alat->daily_rate, 0, ',', '.') }}</span></li>
                                    <li class="d-flex justify-content-between"><span>Tarif per 30 hari</span><span class="fw-bold text-success">Rp {{ number_format($alat->monthly_rate, 0, ',', '.') }}</span></li>
                                </ul>
                                <a href="{{ route('layanan.sewa') }}#equipment-{{ $alat->id }}" class="btn btn-outline-primary btn-sm mt-2">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            {{-- Tampilkan hasil layanan lab dan SIG jika ada --}}
            @if($labItems->isNotEmpty() || $sigServices->isNotEmpty())
            <div class="row g-4">
                {{-- Layanan Lab dalam bentuk list --}}
                @if($labItems->isNotEmpty())
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                         <div class="card-header fw-bold"><i class="bi bi-flask-fill me-2"></i>Ditemukan di Pengujian Laboratorium</div>
                         <ul class="list-group list-group-flush">
                            @foreach($labItems as $item)
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>{!! format_chemical_name($item->name) !!} <small class="text-muted">{{ $item->aliases ? '('.$item->aliases.')' : '' }}</small></span>
                                    <a href="{{ route('layanan.lab') }}#lab-{{ $item->id }}" class="btn btn-outline-primary btn-sm">Lihat Detail</a>

                                </li>
                            @endforeach
                         </ul>
                    </div>
                </div>
                @endif

                {{-- Layanan SIG dalam bentuk list --}}
                 @if($sigServices->isNotEmpty())
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                         <div class="card-header fw-bold"><i class="bi bi-map-fill me-2"></i>Ditemukan di Jasa SIG</div>
                         <ul class="list-group list-group-flush">
                            @foreach($sigServices as $service)
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>{{ $service->name }}</span>
                                    <a href="{{ route('layanan.sig') }}#sig-{{ $service->id }}" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                                </li>
                            @endforeach
                         </ul>
                    </div>
                </div>
                @endif
            </div>
            @endif
            
            {{-- Tampilkan pesan ini jika tidak ada hasil layanan SAMA SEKALI --}}
            @if($equipmentItems->isEmpty() && $labItems->isEmpty() && $sigServices->isEmpty())
                 <div class="col-12"><p class="fs-6 text-muted">Tidak ada layanan yang ditemukan.</p></div>
            @endif
        </div>
            {{-- Cek apakah hasil pencarian profil/tupoksi ada --}}
            @if($profilTupoksi)
                <div class="mb-5">
                    <h4 class="fw-bold text-secondary">Profil & Tupoksi (1)</h4>
                    <hr>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0 text-center p-4">
                                <i class="bi bi-building text-primary fs-1 mb-3"></i>
                                <h5 class="fw-bold">{{ $profilTupoksi['judul'] }}</h5>
                                <p class="text-muted">{{ $profilTupoksi['konten'] }}</p>
                                <a href="{{ $profilTupoksi['link'] }}" class="btn btn-outline-primary mt-auto">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        {{-- Hasil Pejabat (di-refactor agar menggunakan variabel langsung) --}}
            <div class="mb-5">
                <h4 class="fw-bold text-secondary">Pejabat ({{ count($pejabat) }})</h4>
                <hr>
                <div class="row g-4">
                    {{-- ======================= AWAL PERUBAHAN DI SINI ======================= --}}
                    @forelse ($pejabat as $pejabatItem)
                    {{-- Kita buat kolom lebih lebar untuk menampung layout horizontal --}}
                    <div class="col-md-6 d-flex align-items-stretch"> 
                        <div class="card h-100 shadow-sm border-0 w-100">
                            {{-- Ganti card-body lama dengan struktur row-col baru --}}
                            <div class="card-body p-3">
                                <div class="row g-3 align-items-center">
                                    {{-- Kolom 1: Untuk Foto --}}
                                    <div class="col-auto">
                                        @if (!empty($pejabatItem['url_foto']))
                                            <img src="{{ $pejabatItem['url_foto'] }}" class="rounded" alt="{{ $pejabatItem['nama'] ?? '' }}" style="width: 80px; height: 80px; object-fit: cover;">
                                        @else
                                            <img src="https://placehold.co/80/6c757d/FFFFFF?text=FOTO" class="rounded" alt="{{ $pejabatItem['nama'] ?? '' }}" style="width: 80px; height: 80px; object-fit: cover;">
                                        @endif
                                    </div>

                                    {{-- Kolom 2: Untuk Teks (Nama dan Jabatan) --}}
                                    <div class="col">
                                        <h6 class="fw-bold mb-0">{{ $pejabatItem['nama'] ?? '' }}</h6>
                                        <p class="mb-0 small text-muted">{{ $pejabatItem['jabatan'] ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="col-12"><p class="fs-6 text-muted">Tidak ada pejabat yang ditemukan.</p></div>
                    @endforelse
                    {{-- ======================= AKHIR PERUBAHAN DI SINI ======================= --}}
                </div>
            </div>
        
    @endif
</div>
</div>
@endsection