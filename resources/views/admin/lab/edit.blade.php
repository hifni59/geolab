@extends('layouts.admin')

@section('title', 'Edit Layanan Laboratorium')

@section('content')
    <h1>Edit Layanan: {{ $labItem->name }}</h1>

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
            <form action="{{ route('admin.lab.update', $labItem->id) }}" method="POST">
                @csrf
                @method('PUT') {{-- PENTING untuk method update --}}

                <div class="mb-3">
                    <label for="lab_category_id" class="form-label">Kategori</label>
                    <select class="form-select" id="lab_category_id" name="lab_category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $labItem->lab_category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Layanan</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $labItem->name) }}" required>
                </div>
                <div class="mb-3">
                    <label for="aliases" class="form-label">Alias / Nama Umum</label>
                    <input type="text" class="form-control" id="aliases" name="aliases" value="{{ old('aliases', $labItem->aliases) }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $labItem->price) }}" required>
                </div>
                <div class="mb-3">
                    <label for="notes" class="form-label">Catatan</label>
                    <textarea class="form-control" id="notes" name="notes" rows="3">{{ old('notes', $labItem->notes) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.lab.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection