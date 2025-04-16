<footer class="section-relative section-top-66 section-bottom-34 page-footer bg-accent context-dark footer-classic">
    <div class="container">
        <div class="row justify-content-md-center text-xl-start">
            <div class="col-md-8 col-lg-12">
                <div class="row justify-content-sm-center row-40">
                    <div class="col-sm-10 col-lg-4 text-start order-lg-3 inset-lg-left-50">
                        <h6>@lang('footer.newsletter.title')</h6>
                        <hr class="text-subline">
                        <p class="text-white-70">@lang('footer.newsletter.description')</p>
                        <form class="rd-mailform" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                            <div class="form-wrap input-group input-group-custom input-group-sm no-wrap">
                                <label class="form-label" for="subscribe-form-email">@lang('messages.Your e-mail...')</label>
                                <input class="form-input mr-2" id="subscribe-form-email" type="email" name="email">
                                <button class="btn btn-sm btn-darkest" type="submit">@lang('messages.Subscribe')</button>
                            </div>
                        </form>
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
                                <!--<div class="p unit unit-spacing-xxs flex-row offset-top-16">
                                    <div class="unit-left"><span class="icon icon-xxs mdi mdi-email-outline text-white"></span></div>
                                    <div class="unit-body"><a class="text-white-70 text-java" href="mailto:#">info@demolink.org</a></div>
                                </div>-->
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
   <!-- <div class="container offset-top-50 offset-md-top-60">
        <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Докарт центр сучасної медицини </span><span>.&nbsp;</span><a href="privacy-policy.html">политика конфиденциальности</a></p>
    </div>-->
</footer>
<div class="snackbars" id="form-output-global"></div>
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>



@if(Route::currentRouteName() === 'main.blepharoplastika' || Route::currentRouteName() === 'main.plastichna-khururgiya' || Route::currentRouteName() === 'services.inektsionnaya-terapiya' || Route::currentRouteName() === 'services.plazmoterapiya' || Route::currentRouteName() === 'services.rf-lifting'|| Route::currentRouteName() === 'services.lazernaya-epilyatsiya'|| Route::currentRouteName() === 'services.lazernoe-omolozhenie'|| Route::currentRouteName() === 'services.co2'|| Route::currentRouteName() === 'services.checkup' )
    <script src="{{ asset('blepharoplastika-js/simpleParallax.js') }}" defer></script>
    <script src="{{ asset('blepharoplastika-js/app-b.js') }}" defer></script>

@endif

@if(Route::currentRouteName() === 'services.panoptix')




    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sections = document.querySelectorAll(".section-mouse-effects");

            sections.forEach((section) => {
                const images = section.querySelectorAll(".image img");

                section.addEventListener("mousemove", (e) => {
                    const { left, top, width, height } = section.getBoundingClientRect();
                    const x = (e.clientX - left) / width;
                    const y = (e.clientY - top) / height;

                    images.forEach((img, index) => {
                        const moveX = (x - 0.5) * - 60;
                        const moveY = (y - 0.5) * - 80;
                        img.style.transform = `translate(${moveX}px, ${moveY}px)`;
                    });
                });

                section.addEventListener("mouseleave", () => {
                    images.forEach((img) => {
                        img.style.transform = "translate(0, 0)";
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


@if(Route::currentRouteName() === 'main.timetable')
<script>
    function toggleDropdown() {
        const menu = document.getElementById('dropdown-menu');
        menu.classList.toggle('hidden-list');
    }
</script>
@endif

