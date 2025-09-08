@extends('layouts.admin')

@section('title', 'Kelola Sewa Peralatan')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Sewa Peralatan</h1>
        <a href="{{ route('admin.equipment.create') }}" class="btn btn-primary">Tambah Peralatan Baru</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('admin.equipment.index') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari nama alat, merk, atau kategori..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Cari</button>
                <a href="{{ route('admin.equipment.index') }}" class="btn btn-secondary ms-2">Reset</a>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover" style="table-layout: fixed; width: 100%;">
<thead>
    <tr>
        {{-- ======================= TAMBAHKAN KEMBALI BLOK INI ======================= --}}
        @php
            function sortable_link($column, $label) {
                $sortBy = request('sort_by');
                $sortDir = request('sort_dir', 'asc');
                
                $direction = ($sortBy == $column && $sortDir == 'asc') ? 'desc' : 'asc';
                $arrow = ($sortBy == $column) ? ($sortDir == 'asc' ? 'bi-sort-up' : 'bi-sort-down') : '';
                $url = route('admin.equipment.index', array_merge(request()->query(), ['sort_by' => $column, 'sort_dir' => $direction]));

                echo "<a href=\"{$url}\" class=\"text-decoration-none text-dark\">{$label} <i class=\"bi {$arrow}\"></i></a>";
            }
        @endphp
        {{-- ========================================================================= --}}
        <th style="width: 5%;">@php sortable_link('id', 'ID') @endphp</th>
        <th style="width: 15%;">Foto</th>
        <th style="width: 30%;">@php sortable_link('name', 'Nama Alat / Merk') @endphp</th>
        <th style="width: 25%;">@php sortable_link('category_name', 'Kategori') @endphp</th>
        <th style="width: 10%;">@php sortable_link('year', 'Tahun') @endphp</th>
        <th style="width: 15%;">Aksi</th>
    </tr>
</thead>
                <tbody>
                    @forelse ($equipmentItems as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                <img src="{{ $item->image_path ? asset('storage/' . $item->image_path) : 'https://placehold.co/100x80?text=No+Image' }}" alt="Foto" style="width: 100px; height: 80px; object-fit: cover; border-radius: 5px;">
                            </td>
                            {{-- Kolom Nama Alat dan Merk Digabung --}}
                            <td style="white-space: normal; word-wrap: break-word;">
                                <div class="fw-bold">{{ $item->name }}</div>
                                <small class="text-muted">{{ $item->brand }}</small>
                            </td>
                            <td>{{ $item->category->name ?? 'N/A' }}</td>
                            <td>{{ $item->year }}</td>
                            <td>
                                <a href="{{ route('admin.equipment.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.equipment.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                @if(request('search'))
                                    Tidak ada data yang cocok dengan pencarian "{{ request('search') }}".
                                @else
                                    Tidak ada data. Silakan tambah data baru.
                                @endif
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-4">{{ $equipmentItems->links() }}</div>
@endsection