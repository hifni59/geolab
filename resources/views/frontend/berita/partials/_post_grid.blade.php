@foreach ($posts as $post)
<div class="col-md-4 mb-4 d-flex align-items-stretch">
    <div class="card h-100 shadow-sm border-0">
        <img src="{{ $post['gambar_unggulan'] }}" class="card-img-top" alt="{{ Str::limit(strip_tags($post['judul']), 50) }}" style="height: 200px; object-fit: cover;">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-bold">{{ $post['judul'] }}</h5>
            <p class="card-text text-muted small">{{ \Carbon\Carbon::parse($post['tanggal_publikasi'])->translatedFormat('d F Y') }}</p>
            <p class="card-text">{{ Str::limit(strip_tags($post['konten_html']), 100) }}</p>
            <a href="http://127.0.0.1:8000/berita/{{ $post['slug'] }}" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
        </div>
    </div>
</div>
@endforeach