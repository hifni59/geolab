@extends('layouts.admin')
@section('title', 'Edit Jasa SIG')

@section('content')
    <h1>Edit Jasa SIG: {{ $sigService->name }}</h1>
    
    @if (session('error')) <div class="alert alert-danger">{{ session('error') }}</div> @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('admin.sig.update', $sigService->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- ========================================================== --}}
        {{-- BAGIAN YANG HILANG SEBELUMNYA ADA DI SINI --}}
        {{-- ========================================================== --}}
        <div class="card mb-4">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Jasa</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $sigService->name) }}" required>
                </div>
                <div class="mb-3">
                    <label for="icon_class" class="form-label">Kelas Ikon (Opsional, cth: bi bi-map-fill)</label>
                    <input type="text" class="form-control" id="icon_class" name="icon_class" value="{{ old('icon_class', $sigService->icon_class) }}">
                </div>
            </div>
        </div>
        {{-- ========================================================== --}}


        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tingkatan Harga (Skala & Tarif)</h5>
                <button type="button" id="add-tier-btn" class="btn btn-sm btn-success">Tambah Tingkatan</button>
            </div>
            <div class="card-body" id="tiers-container">
                {{-- Loop untuk menampilkan tingkatan yang sudah ada --}}
                @foreach($sigService->tiers as $index => $tier)
                    <div class="row tier-row mb-2 align-items-center">
                        <div class="col-md-5"><input type="text" name="tiers[{{ $index }}][scale]" class="form-control" placeholder="Skala" value="{{ $tier->scale }}" required></div>
                        <div class="col-md-5"><input type="number" name="tiers[{{ $index }}][price]" class="form-control" placeholder="Harga" value="{{ $tier->price }}" required></div>
                        <div class="col-md-2"><button type="button" class="btn btn-danger btn-sm remove-tier-btn">Hapus</button></div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.sig.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>

    {{-- Template untuk baris baru (wajib ada untuk JS) --}}
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
    // Kode JavaScript yang sudah kita perbaiki sebelumnya
    // (biarkan sama persis)
    document.addEventListener('DOMContentLoaded', function () {
        const container = document.getElementById('tiers-container');
        const addBtn = document.getElementById('add-tier-btn');
        const template = document.getElementById('tier-row-template');
        let tierIndex = {{ $sigService->tiers->count() }};

        function addTierRow() {
            let templateHTML = template.innerHTML;
            let newRowHTML = templateHTML.replaceAll('INDEX', tierIndex++);
            container.insertAdjacentHTML('beforeend', newRowHTML);
        }

        addBtn.addEventListener('click', addTierRow);

        container.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-tier-btn')) {
                if (container.querySelectorAll('.tier-row').length > 1) {
                    e.target.closest('.tier-row').remove();
                } else {
                    alert('Setidaknya harus ada satu tingkatan harga.');
                }
            }
        });
    });
</script>
@endpush