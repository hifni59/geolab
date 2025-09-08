@extends('layouts.frontend')

@section('title', 'Penyewaan Peralatan')
@section('description', 'Deskripsi, Alur Pelayanan dan Tarif Layanan Penyewaan Peralatan Eksplorasi di UPTD Geologi dan Laboratorium.')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h1 class="display-5 fw-bold text-primary mb-3">Penyewaan Peralatan Eksplorasi</h1>
            <p class="lead text-muted">Sewa peralatan geologi dan eksplorasi modern untuk mendukung setiap proyek Anda.</p>
        </div>
    </div>
</div>

<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @include('frontend.services.partials._deskripsi-layanan-sewa')
            </div>
        </div>
    </div>
</div>

@include('frontend.services.partials._alur-pelayanan-sewa')

@include('frontend.services.partials._tabel-tarif-sewa')
@endsection