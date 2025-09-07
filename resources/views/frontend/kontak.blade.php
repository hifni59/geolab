@extends('layouts.app')

@section('title', 'Kontak Kami')
@section('description', 'Informasi Kontak, Alamat dan Jam Operasional UPTD Geologi dan Laboratorium.')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h1 class="display-5 fw-bold text-primary mb-3">Hubungi Kami</h1>
            <p class="lead text-muted">Kami siap melayani Anda. Kirimkan pesan atau kunjungi kantor kami.</p>
        </div>
    </div>
</div>

<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row justify-content-center g-5">
            {{-- Bagian Informasi Kontak --}}
            <div class="col-md-5">
                <div class="card h-100 shadow-lg border-0 p-4">
                    <h4 class="fw-bold text-secondary mb-4">Informasi Kontak</h4>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-geo-alt-fill me-3 fs-5 text-primary"></i>
                            <div>
                                <h6 class="fw-bold mb-0">Alamat</h6>
                                <p class="text-muted mb-0">Jalan Angkatan 45 No. 2440, Demang Lebar Daun, Kec. Ilir Barat I, Kota Palembang, Sumatera Selatan 30137</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-envelope-fill me-3 fs-5 text-primary"></i>
                            <div>
                                <h6 class="fw-bold mb-0">Email</h6>
                                <p class="text-muted mb-0">lab_distamben@yahoo.co.id</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-clock-fill me-3 fs-5 text-primary"></i>
                            <div>
                                <h6 class="fw-bold mb-0">Jam Operasional</h6>
                                <p class="text-muted mb-0">Senin - Jumat: 08:00 - 16:00</p>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-4 text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.4533722216524!2d104.72973957597148!3d-2.966468497042571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75e921d37b8b%3A0x62c0b6b2b7a0d42b!2sDinas%20Energi%20dan%20Sumber%20Daya%20Mineral%20Provinsi%20Sumatera%20Selatan!5e0!3m2!1sen!2sid!4v1714470377033!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            {{-- Bagian Formulir Kontak --}}
            <div class="col-md-5">
                <div class="card h-100 shadow-lg border-0 p-4">
                    <h4 class="fw-bold text-secondary mb-4">Kirimkan Pesan</h4>
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subjek" class="form-label">Subjek</label>
                            <input type="text" class="form-control" id="subjek" name="subjek" required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection