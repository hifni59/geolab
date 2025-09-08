@extends('layouts.admin')
@section('title', 'Edit Peralatan')
@section('content')
    <h1>Edit Peralatan: {{ $equipmentItem->name }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger"><ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.equipment.update', $equipmentItem->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3"><label for="name" class="form-label">Nama Alat</label><input type="text" class="form-control" id="name" name="name" value="{{ old('name', $equipmentItem->name) }}" required></div>
                    <div class="col-md-6 mb-3"><label for="equipment_category_id" class="form-label">Kategori</label><select class="form-select" id="equipment_category_id" name="equipment_category_id" required>@foreach ($categories as $cat)<option value="{{ $cat->id }}" {{ $equipmentItem->equipment_category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>@endforeach</select></div>
                    <div class="col-md-6 mb-3"><label for="brand" class="form-label">Merk</label><input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $equipmentItem->brand) }}" required></div>
                    <div class="col-md-6 mb-3"><label for="year" class="form-label">Tahun</label><input type="number" class="form-control" id="year" name="year" value="{{ old('year', $equipmentItem->year) }}"></div>
                    <div class="col-md-6 mb-3"><label for="daily_rate" class="form-label">Tarif Harian</label><input type="number" class="form-control" id="daily_rate" name="daily_rate" value="{{ old('daily_rate', $equipmentItem->daily_rate) }}" required></div>
                    <div class="col-md-6 mb-3"><label for="monthly_rate" class="form-label">Tarif Bulanan</label><input type="number" class="form-control" id="monthly_rate" name="monthly_rate" value="{{ old('monthly_rate', $equipmentItem->monthly_rate) }}" required></div>
                    <div class="col-12 mb-3">
                        <label for="image" class="form-label">Upload Foto Baru (Kosongkan jika tidak ingin mengubah)</label>
                        <input class="form-control" type="file" id="image" name="image">
                        @if($equipmentItem->image_path)
                        <div class="mt-2">
                            <small>Foto saat ini:</small><br>
                            <img src="{{ asset('storage/' . $equipmentItem->image_path) }}" alt="Foto Alat" style="max-width: 150px; border-radius: 5px;">
                        </div>
                        @endif
                    </div>
                    <div class="col-12 mb-3"><label for="description" class="form-label">Deskripsi</label><textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $equipmentItem->description) }}</textarea></div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.equipment.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection