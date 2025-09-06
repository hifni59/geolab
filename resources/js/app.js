import './bootstrap';
import * as bootstrap from 'bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    // Dropdown menu fix
    const dropdownToggle = document.getElementById('navbarDropdownLayanan');
    const isMobile = window.matchMedia('(max-width: 991.98px)').matches;

    if (dropdownToggle && !isMobile) {
        dropdownToggle.addEventListener('click', function (e) {
            if (e.target.classList.contains('dropdown-toggle')) {
                e.preventDefault();
                window.location.href = this.getAttribute('href');
            }
        });
    }

    // Scroll to top button functionality
    let scrollToTopBtn = document.getElementById("scrollToTopBtn");

    window.onscroll = function() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            scrollToTopBtn.style.display = "block";
        } else {
            scrollToTopBtn.style.display = "none";
        }
    };

    scrollToTopBtn.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Logika untuk tombol "Muat Lebih Banyak"
    const cardBerita = document.querySelectorAll('.card-berita');
    const muatBtn = document.getElementById('muat-lebih-banyak-btn');
    let postsToShow = 3;
    const loadMoreStep = 3;

    // Sembunyikan semua postingan di luar 3 postingan pertama
    cardBerita.forEach((card, index) => {
        if (index >= postsToShow) {
            card.style.display = 'none';
        }
    });

    // Event listener untuk tombol
    if (muatBtn) {
        muatBtn.addEventListener('click', function () {
            const hiddenPosts = Array.from(cardBerita).filter(card => card.style.display === 'none');

            // Tampilkan 3 postingan berikutnya
            for (let i = 0; i < loadMoreStep && i < hiddenPosts.length; i++) {
                hiddenPosts[i].style.display = 'block';
            }

            // Perbarui jumlah postingan yang ditampilkan
            postsToShow += loadMoreStep;

            // Sembunyikan tombol jika tidak ada lagi postingan yang tersembunyi
            if (postsToShow >= cardBerita.length) {
                muatBtn.style.display = 'none';
            }
        });
    }
});