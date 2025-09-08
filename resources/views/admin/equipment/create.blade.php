@extends('layouts.admin')
@section('title', 'Tambah Peralatan Baru')
@section('content')
    <h1>Tambah Peralatan Baru</h1>
    @if ($errors->any())
        <div class="alert alert-danger"><ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.equipment.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3"><label for="name" class="form-label">Nama Alat</label><input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required></div>
                    <div class="col-md-6 mb-3"><label for="equipment_category_id" class="form-label">Kategori</label><select class="form-select" id="equipment_category_id" name="equipment_category_id" required>@foreach ($categories as $cat)<option value="{{ $cat->id }}">{{ $cat->name }}</option>@endforeach</select></div>
                    <div class="col-md-6 mb-3"><label for="brand" class="form-label">Merk</label><input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand') }}" required></div>
                    <div class="col-md-6 mb-3"><label for="year" class="form-label">Tahun</label><input type="number" class="form-control" id="year" name="year" value="{{ old('year') }}"></div>
                    <div class="col-md-6 mb-3"><label for="daily_rate" class="form-label">Tarif Harian</label><input type="number" class="form-control" id="daily_rate" name="daily_rate" value="{{ old('daily_rate') }}" required></div>
                    <div class="col-md-6 mb-3"><label for="monthly_rate" class="form-label">Tarif Bulanan</label><input type="number" class="form-control" id="monthly_rate" name="monthly_rate" value="{{ old('monthly_rate') }}" required></div>
                    <div class="col-12 mb-3">
                        <label for="image" class="form-label">Foto Alat (Opsional)</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <div class="col-12 mb-3"><label for="description" class="form-label">Deskripsi</label><textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea></div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.equipment.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection