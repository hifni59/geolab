@extends('layouts.app')

@section('title', 'Penyewaan Peralatan')

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
        <div class="card card-service shadow-lg border-0 mb-5">
            <div class="card-body p-5">
                <div class="d-flex align-items-start mb-4">
                    <i class="bi bi-geo-alt-fill text-primary me-4 fs-1"></i>
                    <div>
                        <h3 class="fw-bold text-secondary mb-0">Daftar Peralatan Tersedia</h3>
                        <p class="text-muted small">Pilih peralatan yang sesuai dengan kebutuhan survei dan proyek Anda.</p>
                    </div>
                </div>
                <p class="fs-6 lh-lg">Penyewaan peralatan eksplorasi meliputi berbagai alat canggih yang siap digunakan untuk menunjang kegiatan geologi dan pertambangan.</p>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Penyewaan peralatan Mesin bor</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Penyewaan peralatan Pompa Air</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Penyewaan peralatan Menara Bor</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Penyewaan peralatan Pipa Bor</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Penyewaan peralatan Core Barel</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Penyewaan peralatan Casing</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Penyewaan peralatan Mata Bor</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Penyewaan peralatan Mesin Sondir</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Penyewaan peralatan Geolistrik</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Penyewaan peralatan Teodolite</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Penyewaan peralatan Logging Air Tanah</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Penyewaan peralatan Water Level Meter</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Penyewaan peralatan Bore Hole Camera</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection