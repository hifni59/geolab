<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <h2 class="fw-bold text-primary mb-3">Tarif Penyewaan Peralatan</h2>
                <p class="lead text-muted">Daftar tarif penyewaan untuk setiap jenis peralatan
                    berdasarkan Peraturan Gubernur Provinsi Sumatera Selatan Nomor 10 Tahun 2024.</p>
            </div>
        </div>

        <div class="row mt-4">
            {{-- Loop untuk setiap Kategori Peralatan (e.g., Mesin Bor) --}}
            @forelse ($kategoriPeralatan as $kategori)
                <div class="col-md-12 mb-5">
                    <h4 class="fw-bold mb-4">
                        {{-- Tampilkan SVG Ikon. Perhatikan {!! !!} --}}
                        {!! $kategori->icon_svg !!}
                        {{ $kategori->name }}
                    </h4>
                    <div class="row g-4 justify-content-center">
                        {{-- Loop untuk setiap Item Peralatan di dalam kategori ini --}}
                        @foreach($kategori->items as $item)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" id="equipment-{{ $item->id }}">
                                <div class="card h-100 shadow-lg border-0 w-100">
                                    @if ($item->image_path)
                                        <img src="{{ asset('storage/' . $item->image_path) }}" class="card-img-top" alt="{{ $item->name }}" style="height: 200px; object-fit: cover;">
                                    @else
                                        <img src="https://placehold.co/400x300/EBF4FF/76839A?text={{ urlencode($item->name) }}" class="card-img-top" alt="{{ $item->name }}">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                                        <ul class="list-unstyled mt-3">
                                            <li class="d-flex justify-content-between">
                                                <span>Merk</span>
                                                <span class="fw-bold text-end">{{ $item->brand }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <span>Tahun</span>
                                                <span class="fw-bold">{{ $item->year }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between mt-2">
                                                <span>Tarif per hari</span>
                                                <span class="fw-bold text-success">Rp {{ number_format($item->daily_rate, 0, ',', '.') }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <span>Tarif per 30 hari</span>
                                                <span class="fw-bold text-success">Rp {{ number_format($item->monthly_rate, 0, ',', '.') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @empty
                 <div class="col-12 text-center">
                    <p class="lead">Data peralatan tidak tersedia saat ini.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>