@extends('layouts.admin')
@section('title', 'Tambah Layanan Laboratorium Baru')
@section('content')
<h1>Tambah Layanan Baru</h1>
{{-- Tampilkan Error Validasi --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.lab.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="lab_category_id" class="form-label">Kategori</label>
                <select class="form-select" id="lab_category_id" name="lab_category_id" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Layanan (Gunakan Format Standar: SiO2)</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label for="aliases" class="form-label">Alias / Nama Umum (Opsional, pisahkan dengan koma)</label>
                <input type="text" class="form-control" id="aliases" name="aliases" value="{{ old('aliases') }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga (Hanya Angka)</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Catatan (Opsional)</label>
                <textarea class="form-control" id="notes" name="notes" rows="3">{{ old('notes') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.lab.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection