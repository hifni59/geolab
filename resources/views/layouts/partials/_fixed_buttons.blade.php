{{-- resources/views/layouts/partials/_fixed_buttons.blade.php --}}
<div class="fixed-bottom p-4 d-flex justify-content-end align-items-center gap-3">
    <a href="/" class="btn btn-primary rounded-circle shadow-lg" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;" title="Kembali ke Beranda">
        <i class="bi bi-house-fill fs-5"></i>
    </a>
    <button onclick="history.back()" class="btn btn-secondary rounded-circle shadow-lg" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;" title="Kembali">
        <i class="bi bi-arrow-left fs-5"></i>
    </button>
    <button onclick="scrollToTop()" id="scrollToTopBtn" class="btn btn-info rounded-circle shadow-lg" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;" title="Kembali ke Atas">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
        </svg>
    </button>
</div>