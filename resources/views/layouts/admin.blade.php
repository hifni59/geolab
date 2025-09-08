<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Geolab</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background-color: #f8f9fa;"> {{-- Beri background abu-abu --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">Geolab Admin Panel</a>
            <div class="ms-auto d-flex align-items-center">
                <span class="navbar-text me-3">
                    Welcome, {{ Auth::user()->name }}
                </span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="py-5">
        <div class="container">
            @yield('content')
        </div>
    </main>
        @stack('scripts')
</body>
</html>