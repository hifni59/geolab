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
        <div class="card card-service shadow-lg border-0 mb-5">
            <div class="card-body p-5">
                <div class="d-flex align-items-start mb-4">
                    <i class="bi bi-map-fill text-info me-4 fs-1"></i>
                    <div>
                        <h3 class="fw-bold text-secondary mb-0">Layanan Pencetakan Peta</h3>
                        <p class="text-muted small">Mencetak peta berkualitas tinggi dengan data geologi, pertambangan, dan lainnya.</p>
                    </div>
                </div>
                <p class="fs-6 lh-lg">Pengolahan Data Spasial pada Sistem Informasi Geografis (SIG) meliputi pembuatan dan pencetakan peta profesional untuk berbagai kebutuhan.</p>
                <h5 class="fw-bold text-muted mt-4 mb-3">Jenis Peta yang Ditawarkan:</h5>
                <ul class="list-unstyled row g-2">
                    <li class="col-md-6"><i class="bi bi-file-earmark-bar-graph-fill text-success me-2"></i> Pencetakan Peta Administrasi</li>
                    <li class="col-md-6"><i class="bi bi-file-earmark-image-fill text-success me-2"></i> Pencetakan Peta Geologi</li>
                    <li class="col-md-6"><i class="bi bi-file-earmark-richtext-fill text-success me-2"></i> Pencetakan Peta Pertambangan</li>
                    <li class="col-md-6"><i class="bi bi-file-earmark-easel-fill text-success me-2"></i> Pencetakan Peta Kelistrikan</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection