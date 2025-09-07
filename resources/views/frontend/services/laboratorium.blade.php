@extends('layouts.app')

@section('title', 'Layanan Pengujian Laboratorium')
@section('description', 'Deskripsi, Alur Pelayanan dan Tarif Layanan Pengujian Laboratorium di UPTD Geologi dan Laboratorium.')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h1 class="display-5 fw-bold text-primary mb-3">Layanan Pengujian Laboratorium</h1>
                <p class="lead text-muted">Kami melayani berbagai pengujian laboratorium dengan standar terakreditasi untuk memastikan hasil yang akurat dan terpercaya.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    @include('frontend.services.partials._deskripsi-layanan-lab')
                </div>
            </div>
        </div>
    </div>

    {{-- Partial Alur Pelayanan tidak memerlukan container karena sudah ada di dalam filenya --}}
    @include('frontend.services.partials._alur-pelayanan-lab')

    {{-- Partial Tabel Tarif tidak memerlukan container karena sudah ada di dalam filenya --}}
    @include('frontend.services.partials._tabel-tarif-lab', ['kategoriLayanan' => $kategoriLayanan])
@endsection