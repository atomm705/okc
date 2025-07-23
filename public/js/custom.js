$(document).ready(function () {
    $('.ba-slider').each(function () {
        var $slider = $(this);
        var $handle = $slider.find('.draggable');
        var $resize = $slider.find('.resize');

        var dragging = false;

        $handle[0].addEventListener('touchstart', function(e) {
            e.preventDefault();
            dragging = true;
            $(document).on('touchmove', onMove);
            $(document).on('touchend touchcancel', onEnd);
        }, { passive: false });


        $handle.on('mousedown', function (e) {
            e.preventDefault();
            dragging = true;
            $(document).on('mousemove', onMove);
            $(document).on('mouseup', onEnd);
        });


        function onMove(e) {
            if (!dragging) return;

            var pageX = e.pageX || (e.originalEvent && e.originalEvent.touches && e.originalEvent.touches[0].pageX);
            if (typeof pageX === 'undefined') return;

            var offset = $slider.offset().left;
            var width = $slider.width();

            var pos = Math.max(0, Math.min(width, pageX - offset));
            var percent = (pos / width) * 100;

            $handle.css('left', percent + '%');
            $resize.css('width', percent + '%');
        }

        function onEnd() {
            dragging = false;
            $(document).off('mousemove touchmove', onMove);
            $(document).off('mouseup touchend touchcancel', onEnd);
        }

        $(window).on('resize', function () {
            var percent = $resize.width() / $slider.width() * 100;
            $handle.css('left', percent + '%');
        });
    });
});

$(document).ready(function () {
    const itemsToShow = 2;
    const $items = $('.lazernoe-omolozhenie__item');
    let currentlyVisible = itemsToShow;

    $items.hide().slice(0, itemsToShow).show();

    $('#load-more').on('click', function () {
        $items.slice(currentlyVisible, currentlyVisible + itemsToShow).slideDown();
        currentlyVisible += itemsToShow;

        if (currentlyVisible >= $items.length) {
            $(this).hide();
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".section-mouse-effects");

    sections.forEach((section) => {
        const images = section.querySelectorAll(".image img");
        const particles = section.querySelectorAll(".particles ");


        //particles.forEach((particle) => {
        //   const randX = Math.random() * 100;
        //   const randY = Math.random() * 100;

        //  particle.dataset.left = randX;
        //  particle.dataset.top = randY;

        //  particle.style.position = 'absolute';
        //  particle.style.left = `${randX}%`;
        //  particle.style.top = `${randY}%`;
        // });

        section.addEventListener("mousemove", (e) => {
            const { left, top, width, height } = section.getBoundingClientRect();
            const x = (e.clientX - left) / width;
            const y = (e.clientY - top) / height;

            const moveX = (x - 0.5) * -80;
            const moveY = (y - 0.5) * -100;

            images.forEach((img) => {
                img.style.transform = `translate(${moveX}px, ${moveY}px)`;
            });

            particles.forEach((particle, index) => {
                const factor = (index % 3 === 0 ? 0.5 : 1);
                particle.style.transform = `translate(${moveX * factor}px, ${moveY * factor}px)`;
            });
        });

        section.addEventListener("mouseleave", () => {
            images.forEach((img) => {
                img.style.transform = "translate(0, 0)";
            });

            particles.forEach((particle) => {
                particle.style.transform = "translate(0, 0)";
            });
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const section1 = document.querySelector(".section-1");

    if (section1) {
        const images = section1.querySelectorAll(".image img");

        section1.addEventListener("mousemove", (e) => {
            const { left, width } = section1.getBoundingClientRect();
            const x = (e.clientX - left) / width;

            images.forEach((img) => {
                const moveX = -(x - 0.5) * 10;
                img.style.transform = `translateX(${moveX}px)`;
            });
        });

        section1.addEventListener("mouseleave", () => {
            images.forEach((img) => {
                img.style.transform = "translateX(0)";
            });
        });
    }
});

function toggleDropdown() {
    const menu = document.getElementById('dropdown-menu');
    menu.classList.toggle('hidden-list');
}

// цей скрипт для роботи тегу select для телефонів і планшетів
document.addEventListener("DOMContentLoaded", function () {
    const categorySelect = document.getElementById("category");

    if (categorySelect) {
        categorySelect.addEventListener("change", function () {
            const url = this.value;
            if (url) {
                window.location.href = url;
            }
        });
    }
});

// цей скрипт для роботи акордіону
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".edit-spoiler-component > .header").forEach(header => {
        header.addEventListener("click", function () {
            const body = this.nextElementSibling;

            // якщо у мене багато інформації и треба відкривати тільки один акордін то просто це розкометувати треба
            //document.querySelectorAll(".price-item > .edit-spoiler-component > .body").forEach(b => b.style.display = "none");
            //document.querySelectorAll(".price-item > .edit-spoiler-component > .header").forEach(h => h.classList.remove("active"));

            const isOpen = body.style.display === "block";
            body.style.display = isOpen ? "none" : "block";
            this.classList.toggle("active", !isOpen);
        });
    });
});

// цей скрипт відповідає за натискання кнопки яка знаходится поверх відео
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.edit-video-cover-component').forEach(component => {
        const content = component.querySelector('.content');
        const iframe = component.querySelector('iframe');

        const button = content?.querySelector('button');

        if (button && iframe && content) {
            button.addEventListener('click', function () {
                content.style.display = 'none';

                const src = iframe.getAttribute('src');
                if (!src.includes('autoplay=1')) {
                    const newSrc = src.includes('?') ? `${src}&autoplay=1` : `${src}?autoplay=1`;
                    iframe.setAttribute('src', newSrc);
                }
            });
        }
    });
});

function goToSearch(e) {
    e.preventDefault();
    const input = document.querySelector('#blog-classic-form-search-widget');
    const query = encodeURIComponent(input.value.trim());

    if (query.length > 0) {
        const locale = window.locale || 'uk';
        window.location.href = `/${locale}/blog/search/${query}`;
    }

    return false;
}

