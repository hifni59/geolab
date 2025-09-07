@extends('layouts.app')

@section('title', 'Kesalahan Server')

@section('content')
<div class="container my-5 py-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <h1 class="display-1 fw-bold text-danger">500</h1>
            <h2 class="h3 fw-bold mt-4 mb-3">Terjadi Kesalahan pada Server</h2>
            <p class="lead text-muted mb-4">
                Maaf, kami sedang mengalami masalah teknis. Tim kami telah diberitahu dan sedang bekerja untuk memperbaikinya. Silakan coba lagi nanti.
            </p>
            <a href="{{ route('frontend.home') }}" class="btn btn-primary btn-lg">
                <i class="bi bi-house-door-fill me-2"></i>
                Kembali ke Beranda
            </a>

            {{-- Bagian ini hanya akan muncul saat APP_DEBUG=true di file .env --}}
            @if(config('app.debug'))
                <div class="card text-start mt-5">
                    <div class="card-header bg-danger text-white">
                        <i class="bi bi-bug-fill me-2"></i> Detail Error (Hanya untuk Developer)
                    </div>
                    <div class="card-body">
                        <p class="mb-1"><strong>Pesan:</strong> {{ $exception->getMessage() }}</p>
                        <p class="mb-1"><strong>File:</strong> {{ $exception->getFile() }}</p>
                        <p class="mb-1"><strong>Baris:</strong> {{ $exception->getLine() }}</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection