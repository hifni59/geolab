@extends('layouts.app')

@section('title', 'Jasa Pengolahan Data Spasial')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h1 class="display-5 fw-bold text-primary mb-3">Jasa Pengolahan Data Spasial</h1>
            <p class="lead text-muted">Layanan pemetaan dan analisis data geografis untuk mendukung perencanaan dan pengambilan keputusan.</p>
        </div>
    </div>
</div>

<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                {{-- Deskripsi layanan dari partial --}}
                @include('frontend.services.partials._deskripsi-sig')
            </div>
        </div>
    </div>
</div>

@include('frontend.services.partials._alur-pelayanan-sig')

{{-- Partial Tarif --}}
@include('frontend.services.partials._tabel-tarif-sig')
@endsection