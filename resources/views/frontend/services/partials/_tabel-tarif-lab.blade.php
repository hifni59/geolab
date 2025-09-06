<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <h2 class="fw-bold text-primary mb-3">Tarif Layanan Pengujian</h2>
                <p class="lead text-muted">Berikut adalah daftar tarif untuk setiap pengujian berdasarkan 
                    Peraturan Gubernur Provinsi Sumatera Selatan Nomor 10 Tahun 2024...
                </p>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            {{-- Loop untuk setiap Kategori Layanan --}}
            @forelse ($kategoriLayanan as $kategori)
                {{-- ***** MULAI PERUBAHAN DI SINI ***** --}}
                <div class="col-md-12 mb-4"> {{-- Margin bottom sedikit dikurangi menjadi mb-4 --}}
                    <div class="card shadow-sm border-0">
                        {{-- 1. Buat Card Header untuk judul kategori --}}
                        <div class="card-header bg-light border-0 py-3">
                            <h4 class="mb-0 fw-bold">{{ $loop->iteration }}. {{ $kategori->name }}</h4>
                        </div>
                        {{-- 2. Buat Card Body untuk daftar item --}}
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-0"> {{-- Hapus margin bottom dari <ul> --}}
                                {{-- Loop untuk setiap Item Layanan di dalam kategori ini --}}
                                @foreach ($kategori->items as $item)
                                    <li class="mb-2 pb-2 @if(!$loop->last) border-bottom @endif" id="lab-{{ $item->id }}">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <span class="text-wrap me-2">{!! format_chemical_name($item->name) !!}</span>
                                            <span class="fw-bold text-success text-nowrap">
                                                @if($item->price > 0)
                                                    Rp {{ number_format($item->price, 0, ',', '.') }}
                                                @endif
                                            </span>
                                        </div>
                                        @if($item->aliases)
                                            <p class="text-muted small mt-1 mb-0">({{ $item->aliases }})</p>
                                        @endif
                                        @if($item->notes)
                                            <p class="text-muted small mt-1 mb-0 fst-italic">{{ $item->notes }}</p>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- ***** AKHIR PERUBAHAN ***** --}}
            @empty
                <div class="col-12 text-center">
                    <p class="lead">Data layanan tidak tersedia saat ini.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>