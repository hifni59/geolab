import * as bootstrap from 'bootstrap';

document.addEventListener('DOMContentLoaded', function () {

    // --- Logic for Highlight Feature ---
    if (window.location.hash) {
        try {
            const targetElement = document.querySelector(window.location.hash);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
                targetElement.classList.add('highlight-search');
                setTimeout(() => {
                    targetElement.classList.remove('highlight-search');
                }, 4000);
            }
        } catch (e) {
            console.error("Invalid selector for highlight:", window.location.hash);
        }
    }

    // --- Logic for "Scroll to Top" Button ---
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    if (scrollToTopBtn) {
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
    }
    
    // --- Logic for Dropdown menu fix on Desktop ---
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
});