@extends('layouts.frontend')

@section('title', 'Berita UPTD Geolab')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center text-center mb-4">
        <div class="col-md-10">
            <h1 class="display-5 fw-bold text-primary mb-3">Berita UPTD Geolab</h1>
            <p class="lead text-muted">Informasi terbaru seputar kegiatan dan layanan UPTD Geologi dan Laboratorium.</p>
        </div>
    </div>

    {{-- Container untuk menampung semua kartu berita --}}
    <div class="row" id="berita-container">
        {{-- Muat 3 berita pertama dari controller --}}
        @include('frontend.berita.partials._post_grid', ['posts' => $initialPosts])
    </div>

    {{-- Tombol "Muat Lebih Banyak" akan muncul jika masih ada berita --}}
    <div class="text-center mt-4">
        <button class="btn btn-outline-primary btn-lg" id="load-more-btn" style="display: none;">
            Muat Lebih Banyak...
        </button>
        <p id="loading-indicator" style="display: none;">Memuat...</p>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const loadMoreBtn = document.getElementById('load-more-btn');
    const container = document.getElementById('berita-container');
    const loadingIndicator = document.getElementById('loading-indicator');

    let currentPage = 1;
    // Ambil total postingan dan item per halaman dari PHP
    const totalPosts = {{ $totalPosts }};
    const perPage = {{ 3 }}; // Samakan dengan controller

    // Tampilkan tombol jika total postingan lebih banyak dari yang ditampilkan sekarang
    if (totalPosts > container.children.length) {
        loadMoreBtn.style.display = 'block';
    }

    loadMoreBtn.addEventListener('click', function() {
        currentPage++;
        loadMoreBtn.style.display = 'none'; // Sembunyikan tombol saat loading
        loadingIndicator.style.display = 'block';

        // Buat URL untuk permintaan AJAX
        const url = `{{ route('berita.index') }}?page=${currentPage}`;
        
        // Lakukan permintaan ke server
        fetch(url, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest', // Header penting agar Laravel tahu ini AJAX
            },
        })
        .then(response => response.text())
        .then(html => {
            if (html.trim().length > 0) {
                // Tambahkan HTML kartu baru ke dalam container
                container.insertAdjacentHTML('beforeend', html);

                // Cek lagi apakah masih ada postingan untuk dimuat
                if (totalPosts > container.children.length) {
                    loadMoreBtn.style.display = 'block'; // Tampilkan lagi tombolnya
                } else {
                    loadMoreBtn.style.display = 'none'; // Sembunyikan selamanya jika sudah habis
                }
            } else {
                loadMoreBtn.style.display = 'none'; // Habis, sembunyikan tombol
            }
            loadingIndicator.style.display = 'none'; // Sembunyikan loading indicator
        })
        .catch(error => {
            console.error('Error fetching more posts:', error);
            loadingIndicator.style.display = 'none';
            loadMoreBtn.style.display = 'block'; // Tampilkan lagi tombol jika error
        });
    });
});
</script>
@endpush