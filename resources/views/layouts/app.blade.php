<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'UPTD Geolab Portofolio')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    {{-- Animate.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    {{-- Styles --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
<style>
    .highlight-search {
        transition: all 1s ease-in-out;
        border-radius: 0.5rem; /* Menyesuaikan dengan radius kartu */
        background-color: #fffde7; /* Warna kuning muda */
        box-shadow: 0 0 15px rgba(255, 235, 59, 0.8); /* Efek glow */
    }
</style>

</head>
<body class="d-flex flex-column min-vh-100">

    @include('layouts.partials._header')

    {{-- Main Content --}}
    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('layouts.partials._footer')

    @include('layouts.partials._fixed_buttons')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Cek apakah URL memiliki hash/anchor
        if (window.location.hash) {
            try {
                // Cari elemen yang cocok dengan hash di URL (misal: #equipment-5)
                const targetElement = document.querySelector(window.location.hash);

                if (targetElement) {
                    // Gulir ke elemen tersebut agar terlihat di tengah layar
                    targetElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    
                    // Tambahkan kelas highlight
                    targetElement.classList.add('highlight-search');

                    // Hapus kelas highlight setelah 4 detik (4000 milidetik)
                    setTimeout(() => {
                        targetElement.classList.remove('highlight-search');
                    }, 4000);
                }
            } catch (e) {
                console.error("Invalid selector for highlight:", window.location.hash);
            }
        }
    });
</script>    

</body>
</html>