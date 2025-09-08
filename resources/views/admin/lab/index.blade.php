@extends('layouts.admin')

@section('title', 'Kelola Layanan Laboratorium')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Layanan Laboratorium</h1>
        <a href="{{ route('admin.lab.create') }}" class="btn btn-primary">Tambah Layanan Baru</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- ======================= FORM PENCARIAN ======================= --}}
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('admin.lab.index') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari nama, alias, atau kategori..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Cari</button>
                <a href="{{ route('admin.lab.index') }}" class="btn btn-secondary ms-2">Reset</a>
            </form>
        </div>
    </div>
    {{-- ============================================================= --}}

    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        {{-- ======================= HEADER TABEL DENGAN SORTING ======================= --}}
                        @php
                            // Helper function untuk membuat link sorting
                            function sortable_link($column, $label) {
                                $sortBy = request('sort_by');
                                $sortDir = request('sort_dir', 'asc');
                                
                                $direction = ($sortBy == $column && $sortDir == 'asc') ? 'desc' : 'asc';
                                $arrow = ($sortBy == $column) ? ($sortDir == 'asc' ? 'bi-sort-up' : 'bi-sort-down') : '';

                                // Gabungkan semua parameter query string yang ada
                                $queryParams = array_merge(request()->query(), ['sort_by' => $column, 'sort_dir' => $direction]);
                                $url = route('admin.lab.index', $queryParams);

                                echo "<a href=\"{$url}\">{$label} <i class=\"bi {$arrow}\"></i></a>";
                            }
                        @endphp
                        <th style="width: 5%;">@php sortable_link('id', 'ID') @endphp</th>
                        <th>@php sortable_link('name', 'Nama Layanan') @endphp</th>
                        <th>@php sortable_link('category_name', 'Kategori') @endphp</th>
                        <th>@php sortable_link('price', 'Harga') @endphp</th>
                        <th style="width: 15%;">Aksi</th>
                        {{-- ========================================================================= --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse ($labItems as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{!! format_chemical_name($item->name) !!} <small class="text-muted">{{ $item->aliases ? '('.$item->aliases.')' : '' }}</small></td>
                            <td>{{ $item->category->name ?? 'N/A' }}</td>
                            <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('admin.lab.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.lab.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
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

    <div class="mt-4">
        {{-- Pagination akan otomatis membawa parameter search & sort --}}
        {{ $labItems->links() }}
    </div>
@endsection