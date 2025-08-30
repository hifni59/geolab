{{-- resources/views/frontend/services/partials/_tabel-tarif-sewa.blade.php --}}
<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <h2 class="fw-bold text-primary mb-3">Tarif Penyewaan Peralatan</h2>
                <p class="lead text-muted">Daftar tarif penyewaan untuk setiap jenis peralatan
                    berdasarkan Peraturan Gubernur Provinsi Sumatera Selatan Nomor 10 Tahun 2024 
                    tentang Tarif Layanan pada Unit Pelaksana Teknis Dinas Geologi dan Laboratorium 
                    pada Dinas Energi dan Sumber Daya Mineral Provinsi Sumatera Selatan.</p>
            </div>
        </div>

        <div class="row mt-4">
            {{-- Bagian Mesin Bor --}}
            <div class="col-md-12 mb-5">
                <h4 class="fw-bold mb-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 11V6H8V11H16Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 21V11" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 21L14 19L10 19L12 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 11V16H15V11H12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 11V16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 16L14 18L10 18L12 16Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 6V4H8V6" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 4H8" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 11L14 13L10 13L12 11Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 13V15" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 15L14 17L10 17L12 15Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 17V19" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 19L14 21L10 21L12 19Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Mesin Bor
                </h4>
                <div class="row g-4 justify-content-center">

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mesin+Bor+Variable" class="card-img-top" alt="Mesin Bor Variable">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Mesin Bor Variable</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">CG.2.1</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1993</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 114.300</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 3.429.000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mesin+Bor" class="card-img-top" alt="Mesin Bor">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Mesin Bor</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">DB. 455</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 121.923</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 3.657.690</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mesin+Bor" class="card-img-top" alt="Mesin Bor">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Mesin Bor</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">YBM.3</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1983</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 102.835</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 3.085.050</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mesin+Bor" class="card-img-top" alt="Mesin Bor">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Mesin Bor</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">TOHO</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1984</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 85.727</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 2.571.810</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mesin+Bor+Jackcro" class="card-img-top" alt="Mesin Bor Jackcro">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Mesin Bor Jackcro</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Y-SPK</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1998</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 63.067</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 1.892.010</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mesin+Bor+Portable" class="card-img-top" alt="Mesin Bor Portable">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Mesin Bor Portable</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">DORMER</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1998</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 22.861</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 685.830</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Bagian Menara Bor --}}
            <div class="col-md-12 mb-5">
                <h4 class="fw-bold mb-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 2H14V4H10V2Z" fill="#000000"/>
                    <path d="M12 4V22" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6 10H18V12H6V10Z" fill="#000000"/>
                    <path d="M6 10V22" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 10V22" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 12V22" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 14H14V16H10V14Z" fill="#000000"/>
                    <path d="M10 18H14V20H10V18Z" fill="#000000"/>
                </svg>
                Menara Bor
                </h4>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Tripod%2C+Katrol%2C+Taket" class="card-img-top" alt="Tripod, Katrol, Taket">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Tripod, Katrol, Taket</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Lokal</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 2.286,06</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 68.581,80</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bagian Pipa Bor --}}
            <div class="col-md-12 mb-5">
                <h4 class="fw-bold mb-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C9.79 2 8 3.79 8 6V18C8 20.21 9.79 22 12 22C14.21 22 16 20.21 16 18V6C16 3.79 14.21 2 12 2ZM12 4C13.1 4 14 4.9 14 6V8H10V6C10 4.9 10.9 4 12 4ZM14 10V14H10V10H14ZM14 16V18C14 19.1 13.1 20 12 20C10.9 20 10 19.1 10 18V16H14Z" fill="#000000"/>
                    <path d="M16 11H18V13H16V11Z" fill="#000000"/>
                    <path d="M6 11H8V13H6V11Z" fill="#000000"/>
                </svg>
                Pipa Bor
                </h4>
                <div class="row g-4 justify-content-center">
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Pipa+Bor+HQ" class="card-img-top" alt="Pipa Bor HQ">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Pipa Bor HQ</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">3 mtr</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 571,52</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 17.145,60</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Pipa+Bor+NQ" class="card-img-top" alt="Pipa Bor NQ">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Pipa Bor NQ</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">3 mtr</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 476,26</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 14.287,80</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Pipa+Bor+BW" class="card-img-top" alt="Pipa Bor BW">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Pipa Bor BW</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">3 mtr</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 419,11</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 12.573,30</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Pipa+Bor+AW" class="card-img-top" alt="Pipa Bor AW">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Pipa Bor AW</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">3 mtr</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 407,31</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 12.219,30</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bagian Core Barel --}}
            <div class="col-md-12 mb-5">
                <h4 class="fw-bold mb-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 2H17C17.5523 2 18 2.44772 18 3V21C18 21.5523 17.5523 22 17 22H7C6.44772 22 6 21.5523 6 21V3C6 2.44772 6.44772 2 7 2Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 5H14" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 8H14" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 11H14" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 14H14" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 17H14" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="12" cy="5" r="1" fill="#000000"/>
                    <circle cx="12" cy="8" r="1" fill="#000000"/>
                    <circle cx="12" cy="11" r="1" fill="#000000"/>
                    <circle cx="12" cy="14" r="1" fill="#000000"/>
                    <circle cx="12" cy="17" r="1" fill="#000000"/>
                </svg>
                Core Barel
                </h4>
                <div class="row g-4 justify-content-center">
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Core+Barel+HQ+TT/DT" class="card-img-top" alt="Core Barel HQ TT/DT">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Core Barel HQ TT/DT</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">3 mtr</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 8.572,73</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 257.181,90</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Core+Barel+NQ+TT/DT" class="card-img-top" alt="Core Barel NQ TT/DT">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Core Barel NQ TT/DT</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">3 mtr</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 8.286,97</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 248.609,10</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Core+Barel+NMLC+TT" class="card-img-top" alt="Core Barel NMLC TT">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Core Barel NMLC TT</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">1,5 mtr</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 4.204,48</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 126.134,40</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Core+Barel+Sangle+Tube" class="card-img-top" alt="Core Barel Sangle Tube">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Core Barel Sangle Tube</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">HQ/NQ</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 2.476,57</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 74.297,10</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            

            {{-- Bagian Casing --}}
            <div class="col-md-12 mb-5">
                <h4 class="fw-bold mb-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 4C14.76 4 17 6.24 17 9V15C17 17.76 14.76 20 12 20C9.24 20 7 17.76 7 15V9C7 6.24 9.24 4 12 4ZM12 6C10.34 6 9 7.34 9 9V15C9 16.66 10.34 18 12 18C13.66 18 15 16.66 15 15V9C15 7.34 13.66 6 12 6Z" fill="#000000"/>
                </svg>
                Casing
                </h4>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Casing+Hw" class="card-img-top" alt="Casing Hw">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Casing Hw</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">3 mtr</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 952,53</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 28.575,90</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Casing+Nw" class="card-img-top" alt="Casing Nw">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Casing Nw</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">3 mtr</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 919,73</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 27.591,90</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Casing+Bx" class="card-img-top" alt="Casing Bx">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Casing Bx</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">1,5 mtr</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 571,52</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 17.145,60</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            

            {{-- Bagian Mata Bor --}}
            <div class="col-md-12 mb-5">
                <h4 class="fw-bold mb-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L6 10H18L12 2Z" fill="#000000"/>
                    <path d="M12 22L6 14H18L12 22Z" fill="#000000"/>
                    <path d="M22 12L14 18V6L22 12Z" fill="#000000"/>
                    <path d="M2 12L10 6V18L2 12Z" fill="#000000"/>
                    <circle cx="12" cy="12" r="2" fill="#000000"/>
                </svg>
                Mata Bor
                </h4>
                <div class="row g-4 justify-content-center">

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+Theree+Cone+12%22" class="card-img-top" alt="Mata Bor Theree Cone 12&quot;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Theree Cone 12"</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 31.500</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 945.000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+Theree+Cone+10%22" class="card-img-top" alt="Mata Bor Theree Cone 10&quot;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Theree Cone 10"</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 28.000</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 840.000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+Theree+Cone+8%22" class="card-img-top" alt="Mata Bor Theree Cone 8&quot;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Theree Cone 8"</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 24.500</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 735.000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+Theree+Cone+6%22" class="card-img-top" alt="Mata Bor Theree Cone 6&quot;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Theree Cone 6"</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 21.000</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 630.000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+Theree+Cone+4%22" class="card-img-top" alt="Mata Bor Theree Cone 4&quot;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Theree Cone 4"</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 19.250</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 577.500</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+Theree+Cone+3%22" class="card-img-top" alt="Mata Bor Theree Cone 3&quot;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Theree Cone 3"</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 17.500</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 525.000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+Theree+Cone+9%22" class="card-img-top" alt="Mata Bor Theree Cone 9&quot;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Theree Cone 9"</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 15.750</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 472.500</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+There+Wing+6%22" class="card-img-top" alt="Mata Bor There Wing 6&quot;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">There Wing 6"</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 14.000</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 420.000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+There+Wing+4%22" class="card-img-top" alt="Mata Bor There Wing 4&quot;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">There Wing 4"</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 12.250</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 367.500</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+There+Wing+3%22" class="card-img-top" alt="Mata Bor There Wing 3&quot;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">There Wing 3"</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 10.500</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 315.000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+Diamond+Bit+HQ/TT/DT" class="card-img-top" alt="Mata Bor Diamond Bit HQ/TT/DT">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Diamond Bit HQ/TT/DT</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 47.250</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 1.417.500</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+Diamond+Bit+NQ/TT/DT" class="card-img-top" alt="Mata Bor Diamond Bit NQ/TT/DT">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Diamond Bit NQ/TT/DT</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 40.250</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 1.207.500</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+Diamond+Bit+NMLC" class="card-img-top" alt="Mata Bor Diamond Bit NMLC">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Diamond Bit NMLC</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 22.750</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 682.500</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+Tungsten+HQ/TT/DT" class="card-img-top" alt="Mata Bor Tungsten HQ/TT/DT">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Tungsten HQ/TT/DT</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 14.000</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 420.000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+Tungsten+NQ/TT/DT" class="card-img-top" alt="Mata Bor Tungsten NQ/TT/DT">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Tungsten NQ/TT/DT</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 12.250</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 367.500</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mata+Bor+Tungsten+NMLC" class="card-img-top" alt="Mata Bor Tungsten NMLC">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Tungsten NMLC</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">Luar</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1980</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 10.500</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 315.000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bagian Peralatan Lain --}}
            <div class="col-md-12 mb-5">
                <h4 class="fw-bold mb-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12H6L9 5L15 19L18 12H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="4" cy="12" r="2" fill="#000000"/>
                    <circle cx="20" cy="12" r="2" fill="#000000"/>
                </svg>
                Peralatan Lain
                </h4>
                <div class="row g-4 justify-content-center">

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Mesin+Sondir+HF" class="card-img-top" alt="Mesin Sondir HF">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Mesin Sondir</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">HF</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1997</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 99.856</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 2.995.680</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Geolistrik+NANIURA" class="card-img-top" alt="Geolistrik NANIURA">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Geolistrik</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">NANIURA</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1998</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 149.785</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 4.493.550</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Teodolite+TOPCON" class="card-img-top" alt="Teodolite TOPCON">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Teodolite</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk</span>
                                        <span class="fw-bold">TOPCON</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">1986</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 69.637</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 2.089.110</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Alat+Logging+Air+Tanah" class="card-img-top" alt="Alat Logging Air Tanah">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Alat Logging Air Tanah</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk <br><b>Martiel Geophysics, Type: MLTCX-137002</b></span>
                                    </li>

                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">2021</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 211.680</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 6.350.400</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Alat+Geolistrik+Martiel+Geophysics" class="card-img-top" alt="Alat Geolistrik Martiel Geophysics">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Alat Geolistrik</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk <br><b>Martiel Geophysics Resistivity Meter, Model : MGG-1261, Type: 1450P</b></span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">2021</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 423.360</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 12.700.800</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Water+Level+Meter+Martiel" class="card-img-top" alt="Water Level Meter Martiel">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Water Level Meter</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk <br><b>Martiel Geophysics, Model: W-100, Serial: 137-01</b></span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">2021</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 54.022,50</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 1.620.675</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-lg border-0">
                            <img src="https://placehold.co/400x300.png?text=Bore+Hole+Camera+Martiel" class="card-img-top" alt="Bore Hole Camera Martiel">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Bore Hole Camera</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex justify-content-between">
                                        <span>Merk <br><b>Martiel Geophysics, Type: SID-Ovrec/F2K-1994001</b></span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tahun</span>
                                        <span class="fw-bold">2021</span>
                                    </li>
                                    <li class="d-flex justify-content-between mt-2">
                                        <span>Tarif per hari</span>
                                        <span class="fw-bold text-success">Rp 360.150</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Tarif per 30 hari</span>
                                        <span class="fw-bold text-success">Rp 10.804.500</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            

        </div>
    </div>
</div>