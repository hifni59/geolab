@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1 class="mb-4">Admin Dashboard</h1>
    <p>Selamat datang, {{ Auth::user()->name }}.</p>

    <div class="card">
        <div class="card-header fw-bold">Manajemen Layanan</div>
        <div class="list-group list-group-flush">
            {{-- PERBAIKI NAMA ROUTE DI SINI --}}
            <a href="{{ route('admin.lab.index') }}" class="list-group-item list-group-item-action">
                Kelola Layanan Laboratorium
            </a>
            {{-- Link lain akan ditambahkan di sini --}}
            <a href="{{ route('admin.equipment.index') }}" class="list-group-item list-group-item-action"><i class="bi bi-tools me-2"></i> 
                Kelola Peralatan Sewa
            </a>
        </div>
    </div>
@endsection