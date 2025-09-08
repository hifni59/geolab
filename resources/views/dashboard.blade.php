@extends('layouts.admin') {{-- PENTING: Gunakan layout admin yang baru --}}

@section('title', 'Dashboard')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Dashboard</h1>
        <a href="{{ route('frontend.home') }}" target="_blank" class="btn btn-outline-secondary">
            <i class="bi bi-eye-fill me-2"></i> Lihat Situs
        </a>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header fw-bold">Manajemen Layanan</div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('admin.lab.index') }}" class="list-group-item list-group-item-action">
                        <i class="bi bi-flask me-2"></i> Kelola Layanan Laboratorium
                    </a>
                    {{-- Anda akan mengaktifkan ini nanti --}}
                    <a href="{{ route('admin.equipment.index') }}" class="list-group-item list-group-item-action">
                        <i class="bi bi-tools me-2"></i> Kelola Sewa Peralatan Eksplorasi
                    </a>
                    <a href="{{ route('admin.sig.index') }}" class="list-group-item list-group-item-action">
                        <i class="bi bi-map me-2"></i> Kelola Jasa SIG
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
             <div class="card h-100">
                <div class="card-header fw-bold">Manajemen Konten Eksternal</div>
                 <div class="list-group list-group-flush">
                    <a href="{{ env('PARENT_ADMIN_URL', 'http://127.0.0.1:8000/admin') }}" target="_blank" class="list-group-item list-group-item-action">
                        <i class="bi bi-newspaper me-2"></i> Kelola Berita di Web Induk
                        <i class="bi bi-box-arrow-up-right small ms-1"></i>
                    </a>
                     <a href="{{ env('PARENT_ADMIN_URL', 'http://127.0.0.1:8000/admin') }}" target="_blank" class="list-group-item list-group-item-action">
                        <i class="bi bi-person-badge me-2"></i> Kelola Pejabat di Web Induk
                         <i class="bi bi-box-arrow-up-right small ms-1"></i>
                    </a>
                    
                 </div>
            </div>
        </div>
    </div>
@endsection