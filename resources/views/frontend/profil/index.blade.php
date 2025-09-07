@extends('layouts.app')

@section('title', 'Profil dan Tupoksi')
@section('description', 'Profil dan Tupoksi UPTD Geologi dan Laboratorium.')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-10">
            <h1 class="display-5 fw-bold text-primary mb-3">Profil dan Tupoksi</h1>
            <p class="lead text-muted">{{ $profil['data']['nama_unit'] ?? '' }}</p>
        </div>
    </div>
</div>

<div class="container-fluid bg-light py-5">
    <div class="container">
        @if (isset($profil['data']))

        {{-- Bagian Struktur Organisasi --}}
        <div class="card shadow-sm mb-5 p-5">
            <h2 class="h4 card-title fw-bold text-center mb-5">Struktur Organisasi</h2>
            <div class="row g-4 justify-content-center">
                
                {{-- Kartu Kepala Unit --}}
                @if (isset($profil['data']['kepala_unit']))
                <div class="col-md-3">
                    <div class="card card-str h-100 shadow-sm border-0 text-center">
                        <div class="p-2 d-flex flex-column align-items-center justify-content-center">
                            <img src="{{ $profil['data']['kepala_unit']['url_foto'] ?? 'https://placehold.co/150/007bff/FFFFFF?text=FOTO' }}" 
                            class="card-img-top" alt="{{ $profil['data']['kepala_unit']['nama'] ?? '' }}" 
                                                            style="height: 300px; object-fit: cover;">
                            <div class="card-body p-2 w-100">
                                <h6 class="fw-bold mb-0">{{ $profil['data']['kepala_unit']['nama'] ?? '' }}</h6>
                                <p class="mb-0 small text-muted">{{ $profil['data']['kepala_unit']['jabatan'] ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                {{-- Kartu Kepala Seksi --}}
                @if (isset($profil['data']['daftar_seksi']))
                    @foreach ($profil['data']['daftar_seksi'] as $seksi)
                    <div class="col-md-3">
                        <div class="card card-str h-100 shadow-sm border-0 text-center">
                            @if (isset($seksi['kepala_seksi']))
                            <div class="p-2 d-flex flex-column align-items-center justify-content-center">
                                <img src="{{ $profil['data']['kepala_seksi']['url_foto'] ?? 'https://placehold.co/150/007bff/FFFFFF?text=FOTO' }}" 
                                class="card-img-top" alt="{{ $seksi['kepala_seksi']['nama'] ?? '' }}" 
                                style="height: 300px; object-fit: cover;">
                                <div class="card-body p-2 w-100">
                                    <h6 class="fw-bold mb-0">{{ $seksi['kepala_seksi']['nama'] ?? '' }}</h6>
                                    <p class="mb-0 small text-muted">{{ $seksi['kepala_seksi']['jabatan'] ?? '' }}</p>
                                </div>
                            </div>
                            @else
                            <div class="p-2 d-flex flex-column align-items-center justify-content-center h-100">
                                <h6 class="fw-bold mb-0">{{ $seksi['nama_seksi'] ?? '' }}</h6>
                                <p class="mb-0 small text-muted">Jabatan: Belum Terisi</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                @endif

            </div>
        </div>

        {{-- Bagian Tupoksi dan Tugas Seksi --}}
        <div class="card card-str shadow-sm mb-5 p-5" id="profil-content">
            <h2 class="h4 card-title fw-bold">Tugas Pokok dan Fungsi (Tupoksi)</h2>
            <div class="card-text mb-4">
                {!! $profil['data']['tupoksi'] !!}
            </div>

            <h2 class="h4 card-title fw-bold">Tugas Seksi</h2>
            <div class="accordion" id="seksiAccordion">
                @if (isset($profil['data']['daftar_seksi']))
                    @foreach ($profil['data']['daftar_seksi'] as $index => $seksi)
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading-{{ $index }}">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $index }}" aria-expanded="true" aria-controls="collapse-{{ $index }}">
                                {{ $seksi['nama_seksi'] }}
                            </button>
                        </h3>
                        <div id="collapse-{{ $index }}" class="accordion-collapse collapse show" aria-labelledby="heading-{{ $index }}" data-bs-parent="#seksiAccordion">
                            <div class="accordion-body">
                                <div class="mt-2">
                                    {!! $seksi['tugas'] ?? 'Tugas tidak tersedia.' !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>

        @else
        <div class="row">
            <div class="col-12 text-center">
                <p class="fs-4 text-muted">Data profil tidak dapat dimuat. Pastikan API berfungsi dengan baik.</p>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection