<footer class="section-relative section-top-66 section-bottom-34 page-footer bg-accent context-dark footer-classic">
    <div class="container">
        <div class="row justify-content-md-center text-xl-start">
            <div class="col-md-8 col-lg-12">
                <div class="row justify-content-sm-center row-40">
                    <div class="col-sm-10 col-lg-4 text-start order-lg-3 inset-lg-left-50">
                        <h6>@lang('footer.newsletter.title')</h6>
                        <hr class="text-subline">
                        <p class="text-white-70">@lang('footer.newsletter.description')</p>
                    </div>
                    <div class="col-sm-10 text-sm-start col-lg-4 order-lg-2">
                        <h6>@lang('footer.contacts.title')</h6>
                        <hr class="text-subline">
                        <div class="text-center text-xl-start">
                            <address class="contact-info d-md-inline-block text-start">
                                <div class="p unit unit-spacing-xxs flex-row">
                                    <div class="unit-left"><span class="icon icon-xxs mdi mdi-phone text-white"></span></div>
                                    <div class="unit-body"> <a class="text-white-70" href="tel:#"> (057) 761-61-31</a> <span class="text-white-70">, </span> <a class="text-white-70" href="tel:#"> (093) 761-61-31</a> <span class="text-white-70">, </span> <a class="text-white-70" href="tel:#"> (099) 548-44-85</a> <span class="text-white-70">, </span> <a class="text-white-70" href="tel:#"> (097) 318-67-58</a> </div>
                                </div>
                                <div class="p unit flex-row unit-spacing-xxs">
                                    <div class="unit-left"><span class="icon icon-xxs mdi mdi-map-marker text-white"></span></div>
                                    <div class="unit-body"><a class="text-white-70" href="#">@lang('footer.contacts.address')</a></div>
                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-10 col-lg-4 order-lg-1 text-center text-lg-start">
                        <!--Brand--><a class="brand" href="{{ route('main.index') }}"><img class="brand-logo-dark" src="{{ asset('images/logo-brand.webp') }}"  alt="" width="77" height="26"/><img class="brand-logo-light" src=" {{ asset('images/logo-brand.webp') }}" alt="" width="77" height="26"/></a>
                        <div class="offset-top-30">
                            <ul class="list-inline">
                                <li><a class="icon fa fa-facebook icon-xxs icon-circle icon-white" href="#"></a></li>
                                <li><a class="icon fa fa-twitter icon-xxs icon-circle icon-white" href="#"></a></li>
                                <li><a class="icon fa fa-google-plus icon-xxs icon-circle icon-white" href="#"></a></li>
                                <li><a class="icon fa fa-rss icon-xxs icon-circle icon-white" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="snackbars" id="form-output-global"></div>
<script src="{{ asset('js/core.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('body').UItoTop();
    });
</script>
<script src="{{ asset('js/script.js') }}"></script>
@if(Route::currentRouteName() === 'main.blepharoplastika' || Route::currentRouteName() === 'main.plastichna-khururgiya' || Route::currentRouteName() === 'services.inektsionnaya-terapiya' || Route::currentRouteName() === 'services.plazmoterapiya' || Route::currentRouteName() === 'services.rf-lifting'  || Route::currentRouteName() === 'services.co2'|| Route::currentRouteName() === 'services.checkup' || Route::currentRouteName() === 'services.lazernoe-omolozhenie' || Route::currentRouteName() === 'services.lazernaya-epilyatsiya' || Route::currentRouteName() === 'services.liposaktsiya-ta-liposkulpturuvannya-v-dokart' )
    <script src="{{ asset('blepharoplastika-js/simpleParallax.js') }}" defer></script>
    <script src="{{ asset('blepharoplastika-js/app-b.js') }}" defer></script>
    <script>
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
    </script>
@endif
@if(Route::currentRouteName() === 'services.lazernoe-omolozhenie'  )
    <script>
        $(document).ready(function () {
            const itemsToShow = 2;
            const $items = $('.list-box__item');
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
    </script>
@endif
@if(Route::currentRouteName() === 'services.panoptix')
    <script>

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
    </script>
@endif
@if(Route::currentRouteName() === 'main.timetable' )
<script>
    function toggleDropdown() {
        const menu = document.getElementById('dropdown-menu');
        menu.classList.toggle('hidden-list');
    }
</script>
@endif
@if(Route::currentRouteName() === 'main.category' || Route::currentRouteName() === 'main.service')
    <script>
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
    </script>
    <script>
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
    </script>
    <script>
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
    </script>
@endif
@if(Route::currentRouteName() === 'main.blog' || Route::currentRouteName() === 'main.show' || Route::currentRouteName() === 'blog.category' || Route::currentRouteName() === 'blog.tag' || Route::currentRouteName() === 'main.blog.archive' || Route::currentRouteName() === 'blog.search' || Route::currentRouteName() === 'main.blog.page' || Route::currentRouteName() === 'blog.tag.page' || Route::currentRouteName() === 'main.category.page' || Route::currentRouteName() === 'main.blog.archive.paginated')
    <script>
        function goToSearch(e) {
            e.preventDefault();
            const input = document.querySelector('#blog-classic-form-search-widget');
            const query = encodeURIComponent(input.value.trim());
            if (query.length > 0) {
                window.location.href = `/{{ app()->getLocale() }}/blog/search/${query}`;
            }
            return false;
        }
    </script>
@endif
