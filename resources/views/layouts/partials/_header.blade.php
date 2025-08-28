{{-- resources/views/layouts/partials/_header.blade.php --}}
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold" href="/">
                {{-- <img src="{{ asset('images/logo-geolab.png') }}" alt="Logo Geolab" class="me-2" style="height: 40px;"> --}}
                Geolab <span class="d-none d-md-inline-block ms-2 text-white-50">| DESDM Sumsel</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about-us*') ? 'active' : '' }}" href="/#about-us">
                            Tentang Kami
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('layanan*') ? 'active' : '' }}" href="/#services-section">
                            Layanan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Publikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>