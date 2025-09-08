@extends('layouts.admin')
@section('title', 'Tambah Jasa SIG Baru')
@section('content')
    <h1>Tambah Jasa SIG Baru</h1>
    @if ($errors->any())<div class="alert alert-danger"><ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
    
    <form action="{{ route('admin.sig.store') }}" method="POST">
        @csrf
        <div class="card mb-4">
            <div class="card-body">
                <div class="mb-3"><label for="name" class="form-label">Nama Jasa</label><input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required></div>
                <div class="mb-3"><label for="icon_class" class="form-label">Kelas Ikon (Opsional, cth: bi bi-map-fill)</label><input type="text" class="form-control" id="icon_class" name="icon_class" value="{{ old('icon_class', 'bi bi-map-fill') }}"></div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tingkatan Harga (Skala & Tarif)</h5>
                <button type="button" id="add-tier-btn" class="btn btn-sm btn-success">Tambah Tingkatan</button>
            </div>
            <div class="card-body" id="tiers-container">
                {{-- Baris pertama akan ada di sini --}}
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.sig.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>

    {{-- Template untuk baris baru --}}
    <template id="tier-row-template">
        <div class="row tier-row mb-2 align-items-center">
            <div class="col-md-5"><input type="text" name="tiers[INDEX][scale]" class="form-control" placeholder="Skala (cth: 1:250.000)" required></div>
            <div class="col-md-5"><input type="number" name="tiers[INDEX][price]" class="form-control" placeholder="Harga (hanya angka)" required></div>
            <div class="col-md-2"><button type="button" class="btn btn-danger btn-sm remove-tier-btn">Hapus</button></div>
        </div>
    </template>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('tiers-container');
    const addBtn = document.getElementById('add-tier-btn');
    const template = document.getElementById('tier-row-template');
    let tierIndex = 0;

    function addTierRow() {
        // 1. Ambil konten template sebagai string HTML
        let templateHTML = template.innerHTML;
        
        // 2. Lakukan replace pada string tersebut
        let newRowHTML = templateHTML.replaceAll('INDEX', tierIndex++);

        // 3. Tambahkan string HTML yang sudah dimodifikasi ke dalam container
        container.insertAdjacentHTML('beforeend', newRowHTML);
    }
    
    // Tambah baris pertama secara otomatis saat halaman dimuat
    addTierRow();

    addBtn.addEventListener('click', addTierRow);

    // Event delegation untuk tombol hapus (logika ini tetap sama)
    container.addEventListener('click', function(e) {
        if (e.target && e.target.classList.contains('remove-tier-btn')) {
            e.target.closest('.tier-row').remove();
        }
    });
});
</script>
@endpush