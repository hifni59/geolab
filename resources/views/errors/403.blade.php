@extends('layouts.app')

@section('title', 'Akses Ditolak')

@section('content')
<div class="container my-5 py-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <h1 class="display-1 fw-bold text-warning">403</h1>
            <h2 class="h3 fw-bold mt-4 mb-3">Akses Ditolak</h2>
            <p class="lead text-muted mb-4">
                Maaf, Anda tidak memiliki izin untuk mengakses halaman ini.
            </p>
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary me-2">
                <i class="bi bi-arrow-left me-2"></i>
                Kembali
            </a>
            <a href="{{ route('frontend.home') }}" class="btn btn-primary">
                <i class="bi bi-house-door-fill me-2"></i>
                Ke Beranda
            </a>
        </div>
    </div>
</div>
@endsection