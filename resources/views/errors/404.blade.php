@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
<div class="container my-5 py-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <h1 class="display-1 fw-bold text-primary">404</h1>
            <h2 class="h3 fw-bold mt-4 mb-3">Halaman Tidak Ditemukan</h2>
            <p class="lead text-muted mb-4">
                Maaf, halaman yang Anda cari mungkin telah dihapus, dipindahkan, atau tidak pernah ada.
            </p>
            <a href="{{ route('frontend.home') }}" class="btn btn-primary btn-lg">
                <i class="bi bi-house-door-fill me-2"></i>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
@endsection