@extends('layouts.admin')
@section('title', 'Kelola Jasa SIG')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Jasa Pengolahan Data Spasial (SIG)</h1>
        <a href="{{ route('admin.sig.create') }}" class="btn btn-primary">Tambah Jasa Baru</a>
    </div>
    @if (session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead><tr><th>ID</th><th>Nama Jasa</th><th>Jumlah Tingkatan Harga</th><th>Aksi</th></tr></thead>
                <tbody>
                    @forelse ($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->tiers_count }}</td>
                            <td>
                                <a href="{{ route('admin.sig.edit', $service->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.sig.destroy', $service->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="text-center">Tidak ada data.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-4">{{ $services->links() }}</div>
@endsection