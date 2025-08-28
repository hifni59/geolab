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