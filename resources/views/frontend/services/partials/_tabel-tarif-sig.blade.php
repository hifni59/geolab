<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <h2 class="fw-bold text-primary mb-3">Tarif Jasa Pengolahan Data Spasial</h2>
                <p class="lead text-muted">Daftar tarif untuk setiap jenis peta yang dicetak
                    berdasarkan Peraturan Gubernur Provinsi Sumatera Selatan Nomor 10 Tahun 2024.</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12 mb-5">
                <h4 class="d-flex fw-bold mb-4"><i class="bi bi-map-fill me-2"></i> Pengolahan Data Spasial (SIG) </h4>
                <div class="row g-4 justify-content-center">

                    {{-- Loop untuk setiap Layanan SIG (e.g., Peta Administrasi) --}}
                    @forelse ($layananSig as $layanan)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" id="sig-{{ $layanan->id }}">
                            <div class="card h-100 shadow-lg border-0 w-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $layanan->name }}</h5>
                                    <div class="row g-2 mt-3">
                                        <div class="col-6"><span class="fw-bold">Skala</span></div>
                                        <div class="col-6 text-end"><span class="fw-bold">Tarif</span></div>
                                    </div>
                                    <hr class="my-2">
                                    {{-- Loop untuk setiap tingkatan harga/skala di dalam layanan ini --}}
                                    @foreach ($layanan->tiers as $tier)
                                        <div class="row g-2">
                                            <div class="col-6">{{ $tier->scale }}</div>
                                            <div class="col-6 text-end text-success fw-medium">Rp {{ number_format($tier->price, 0, ',', '.') }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="lead">Data Jasa SIG tidak tersedia saat ini.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>