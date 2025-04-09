<html lang="uk" class="page-oklens page-header-not-margin">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('blepharoplastika-css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('blepharoplastika-css/style-bleforoplastik.css') }}">

    <link rel="stylesheet" href="{{ asset('blepharoplastika-css/oklens.css') }}" >









</head>
<body class="">
<div id="app" class="app">
    <header class="section page-header  @if(request()->routeIs('main.index') || request()->routeIs('main.blepharoplastika') || request()->routeIs('main.plastichna-khururgiya') || request()->routeIs('services.inektsionnaya-terapiya') || request()->routeIs('services.plazmoterapiya') || request()->routeIs('services.rf-lifting')|| request()->routeIs('services.lazernaya-epilyatsiya')|| request()->routeIs('services.lazernoe-omolozhenie')|| request()->routeIs('services.co2') || request()->routeIs('services.checkup') || request()->routeIs('services.panoptix')|| request()->routeIs('services.oklens')|| request()->routeIs('services.tests')) header-absolute @endif">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-subpage" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                <div class="rd-navbar-aside-outer rd-navbar-collapse">
                    <!--RD Navbar Brand-->
                    <div class="rd-navbar-aside">
                        <div class="rd-navbar-brand">
                            <!--Brand--><a class="brand" href="{{ route('main.index') }}"><img class="brand-logo-dark" src="{{ asset('images/logo-brand.webp') }}" alt="" width="30" height="20"/><img class="brand-logo-light" src="{{ asset('images/logo-brand.webp') }}" alt="" width="77" height="20"/></a>
                        </div>

                        <div class="contacts-wrap">

                            <address class="contact-info reveal-sm-inline-block text-start custom-styles-address">
                                <div class="p unit unit-horizontal unit-spacing-xs position-address-center" style="display: flex;align-items: center;">
                                    <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light text-primary  fa-clock-o [&#xf017;]"></span></div>
                                    <div class="unit-body unit-body-first"><a href="#" class=" @if(request()->routeIs('main.index') || request()->routeIs('services.oklens')) text-white @endif">ПН-СБ
                                            <br> с 9-00 до 17-00
                                        </a>
                                    </div>
                                </div>
                            </address>
                            <address class="contact-info reveal-sm-inline-block text-start offset-none">
                                <div class="p unit unit-spacing-xs unit-horizontal position-address-center">
                                    <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light text-primary mdi mdi-phone"></span></div>
                                    <div class="unit-body align-content-center "><a href="tel:#" class=" @if(request()->routeIs('main.index') || request()->routeIs('services.oklens')) text-white @endif">0 (800) 317-317
                                        </a></div>
                                </div>
                            </address>

                            <address class="contact-info reveal-sm-inline-block text-start">
                                <div class="p unit unit-horizontal unit-spacing-xs position-address-center" style="display: flex;align-items: center;">
                                    <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light text-primary mdi mdi-map-marker"></span></div>
                                    <div class="unit-body unit-body-third"><a href="#" class=" @if(request()->routeIs('main.index') || request()->routeIs('services.oklens')) text-white @endif">Україна, м. Харків,
                                            <br> вул. Миколи Хвильового (Маяковського), 24</a>
                                    </div>
                                </div>
                            </address>


                        </div>
                    </div>
                </div>
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!--RD Navbar Panel-->
                        <div class="rd-navbar-panel ">
                            <!--RD Navbar Toggle-->

                            <button class="rd-navbar-toggle togle-padding-mobil" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span class="color-mobil"></span></button>
                            <!--RD Navbar Brand-->
                            <div class="rd-navbar-brand ">
                                <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="{{ asset('images/logo-brand.webp') }}" alt="" width="77" height="20"/><img class="brand-logo-light" src="{{ asset('images/logo-brand.webp') }}" alt="" width="77" height="20"/></a>
                            </div>

                        </div>
                        <div class="rd-navbar-main-element ">
                            <div class="rd-navbar-nav-wrap">

                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item @if(request()->routeIs('main.index')) active @endif"><a class="rd-nav-link"href="{{ route('main.index') }}">@lang('messages.Home')</a>
                                    </li>

                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('main.services') }}">@lang('messages.Services')</a>
                                        <ul class="rd-menu rd-navbar-megamenu">
                                            <li class="rd-megamenu-item">
                                                <h6 class="rd-megamenu-title">@lang('main.oftalmology')</h6>
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{ route('main.blepharoplastika') }}" >Блефаропластика</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{ route('services.panoptix') }}">PanOptix</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{ route('services.oklens') }}">Ок Лінзи</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-system.html">@lang('messages.Grid')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tabs-and-accordions.html">@lang('messages.Tabs and Accordions')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">@lang('messages.Progress bars')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="icons.html">@lang('messages.Icons')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tables.html">@lang('messages.Tables')</a></li>
                                                </ul>
                                            </li>
                                            <li class="rd-megamenu-item">
                                                <h6 class="rd-megamenu-title">@lang('main.plastic_khirurgiya')</h6>
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"  href="{{ route('main.plastichna-khururgiya') }}">Пластична хірургія</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="careers.html">@lang('messages.Careers')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="faq.html">@lang('messages.FAQ Page')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="pricing.html">@lang('messages.Pricing')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="coming-soon.html">@lang('messages.Coming Soon')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="maintenance.html">@lang('messages.Maintenance')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="under-construction.html">@lang('messages.Under Construction')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="login.html">@lang('messages.Login/Register')</a></li>
                                                </ul>
                                            </li>
                                            <li class="rd-megamenu-item">
                                                <h6 class="rd-megamenu-title">@lang('main.estetychna_medicine')</h6>
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"  href="{{ route('services.inektsionnaya-terapiya') }}">Ін'єкційна косметологія</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"  href="{{ route('services.plazmoterapiya') }}">Плазмотерапія</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"  href="{{ route('services.rf-lifting') }}">RF-ліфтинг</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"  href="{{ route('services.lazernaya-epilyatsiya') }}">Лазерна епиляция</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"  href="{{ route('services.lazernoe-omolozhenie') }}">Лазерне омоложення</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"  href="{{ route('services.co2') }}">Фракційний лазер Candela CO2RE</a></li>



                                                </ul>
                                            </li>
                                            <li class="rd-megamenu-item">
                                                <h6 class="rd-megamenu-title">@lang('main.all_medicine')</h6>
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="clients.html">@lang('messages.Clients')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="partners.html">@lang('messages.Partners')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">@lang('messages.Privacy Policy')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">@lang('messages.Search Results')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="404.html">@lang('messages.404 Page')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="503.html">@lang('messages.503 Page')</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="make-an-appointment.html">@lang('messages.Make an Appointment')</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('main.timetable') }}">@lang('messages.Timetable')</a>
                                    </li>

                                    <li class="rd-nav-item @if(request()->routeIs('main.team')) active @endif"><a class="rd-nav-link" href="{{ route('main.team') }}">@lang('messages.Team')</a></li>

                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('main.testimonials') }}">@lang('messages.testimonials')</a></li>


                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('main.prices') }}">@lang('messages.prices')</a>

                                    <!--<li class="rd-nav-item"><a class="rd-nav-link" href="#">@lang('messages.Gallery')</a>
                                    <ul class="rd-menu rd-navbar-dropdown">
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-gallery.html">@lang('messages.Grid Gallery')</a>
                                        </li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-gallery-no-padding.html">@lang('messages.Gallery Without Padding')</a>
                                        </li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="masonry-gallery.html">@lang('messages.Masonry Gallery')</a>
                                        </li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="cobbles-gallery.html">@lang('messages.Cobbles Grid')</a>
                                        </li>
                                    </ul>
                                </li>-->

                                    <li class="rd-nav-item"><a class="rd-nav-link"  href="{{ route('main.contacts') }}">@lang('messages.Contacts')</a>
                                    </li>

                                    <li class="rd-nav-item"><a class="rd-nav-link " style="white-space: nowrap;" href="{{ route('main.about') }}">@lang('messages.About')</a>
                                    </li>



                                    <li class="rd-nav-item"><a class="rd-nav-link"  href="{{ route('main.telemed') }}">@lang('messages.Online information')</a>

                                    <li class="rd-nav-item"><a class="rd-nav-link"  href="{{ route('main.blog') }}">@lang('messages.Blog')</a>
                                    <!--<ul class="rd-menu rd-navbar-dropdown">
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-masonry.html">@lang('messages.Blog Masonry')</a>
                                        </li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-modern.html">@lang('messages.Blog Modern')</a>
                                        </li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-classic.html">@lang('messages.Blog Classic')</a>
                                        </li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-grid.html">@lang('messages.Blog Grid')</a>
                                        </li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-post.html">@lang('messages.Single Post')</a>
                                        </li>
                                    </ul>-->
                                    </li>
                                    <div class="language_select">
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#">{{ strtoupper(app()->getLocale()) }}</a>
                                            <ul class="rd-menu rd-navbar-dropdown" style="width: auto">
                                                @foreach (['en', 'uk', 'ru'] as $lang)
                                                    <li class="rd-dropdown-item">
                                                        <a class="rd-dropdown-link" href="{{ route('switch.language', ['locale' => $lang]) }}">{{ strtoupper( __('main.'.$lang)) }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </div>

                                </ul>
                            </div>
                            <!--RD Navbar Search-->
                        <!--<div class="rd-navbar-search">
                            <button class="rd-navbar-search-toggle rd-navbar-fixed-element-2" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                            <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                                <div class="form-wrap">
                                    <label class="form-label" for="rd-navbar-search-form-input">@lang('messages.Type and hit enter...')</label>
                                    <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                </div>
                                <button class="rd-search-form-submit fa-search" type="submit"></button>
                            </form>
                            </div>-->
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section class="section swiper-container swiper-slider " data-swiper='{"autoplay":{"delay":5000},"effect":"fade"}'>
        <div class="swiper-wrapper text-center ">
            <div class="swiper-slide " id="page-loader" data-slide-bg="/images/1549d8b2f585416ee85313fc51e63ef3.webp">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption slider-fade">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 section-slider-custom first-section-position-mobil">
                                    <div class="inset-xl-right-80 text-lg-start  swiper-slider-content-mt">
                                        <h2>@lang('messages.Take Care of')<br class="d-block"> @lang('messages.Your Health')
                                        </h2>
                                        <h5 class="d-none d-lg-block mw-400">@lang('messages.At Medina, we are dedicated to diagnosing all kinds of diseases.')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="main.appointment {{ route('main.timetable') }}">@lang('messages.make an appointment')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slider-fade" data-slide-bg="/images/7479920ff89386ac92a9419f07da0308.webp">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption slider-fade">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 section-slider-custom to-front first-section-position-mobil">
                                    <div class="text-lg-start swiper-slider-content-mt">
                                        <h2>@lang('messages.Years of')<br class="d-block"> @lang('messages.Experience')
                                        </h2>
                                        <h5 class="d-none d-lg-block mw-400">@lang('messages.Since our foundation, we`ve been delivering diagnostic solutions').</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">@lang('messages.make an appointment')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slider-fade" data-slide-bg="/images/2ebbb981858861962de32ac1b146339d.webp">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption slider-fade">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 section-slider-custom first-section-position-mobil" >
                                    <div class="text-lg-start swiper-slider-content-mt">
                                        <h2>@lang('messages.Qualified Team')<br class="d-block">@lang('messages.of Experts')</h2>
                                        <h5 class="d-none d-lg-block mw-400">@lang('messages.Our team of diagnosticians is always ready to help you be healthier.')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">@lang('messages.make an appointment')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slider-fade" data-slide-bg="/images/32cbee805c52b9a7e02675477669a4cf.webp">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption slider-fade">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 section-slider-custom first-section-position-mobil">
                                    <div class="text-lg-start swiper-slider-content-mt">
                                        <h2>@lang('messages.Qualified Team')<br class="d-block">@lang('messages.of Experts')</h2>
                                        <h5 class="d-none d-lg-block mw-400">@lang('messages.Our team of diagnosticians is always ready to help you be healthier.')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">@lang('messages.make an appointment')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <!--Sheldue-->

    <section class="with-icon" style="transform: translateY(0px); transition: 0.3s; opacity: 1;">
        <div class="additional">
            <div class="icon"><img src="/images/2cde28769923fd45b1e2f262351c9039.webp"></div>
        </div> <!---->
        <div class="content"><h3>Що таке Ортокератологія?</h3>
            <p class="p-mobil">Це сучасний метод корекції аномалій рефракції, а саме короткозорості та астигматизму. Даний метод
                дозволяє тимчасово скорегувати зір за допомогою застосування спеціальних контактних лінз (ОК-лінз) під
                час сну. Таким чином, пацієнт носить лінзи тільки коли спить, а вдень отримує можливість чітко бачити
                без використання окулярів та денних лінз.</p> <!----></div>
    </section>

    <div class="parallax-container"  data-parallax-img="/images/53c7040420ca6f48cc5827f9addb9656.webp">
        <div class="parallax-content   parallax-container-bg section-98 section-sm-110 context-dark">
            <div class="additional">
                <div class="icon"><img src="/images/77775b5b7c04a94448c250ef94a2eea1.webp"></div>


            </div>
            <div class="hr-container">
                <hr class="line-paralax">
            </div>

            <div class="content"><h3 class="text-center content-title-position">Для того, щоб чітко бачити – не потрібна хірургічна операція!</h3>
                <p class="text-center p-mobil-2">Тільки ОК-лінзи вночі, які скорегують ваш зір та зір вашої дитини для майбутнього дня.</p> <!---->
            </div>
        </div>
    </div>
    <section class="children tiles section-padding parallax "
             style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content"><h3>Порушення зору у дітей</h3>
            <p class="content-textx-color p-mobil-2 ">Дитині з <strong>короткозорістю або далекозорістю</strong> дуже складно робити повсякденні завдання без
                використання окулярів чи контактних лінз. <strong>Окуляри</strong> заважають повністю насолоджуватися
                життям : спадають, тягнуть, а під час активних занять їх можна розбити і травмуватися. Також діти можуть
                не дотримуватися правил носіння <strong>контактних лінз</strong>, що може призвести до сумних наслідків.
            </p>
            <div class="slot section-mobil">
                <div class="tile">
                    <div class="header">
                        <div class="icon"><img src="/images/31350162dbb169b44f63f1ef56575df7.webp"></div>
                    </div>
                    <div class="body">Лінзи одягаються тільки<br>на ніч</div>
                    <div class="footer">
                        <button class="button-ellipse button-preset-white button-large">Детальніше</button>
                    </div>
                </div>
                <div class="tile">
                    <div class="header">
                        <div class="icon"><img src="/images/logo_lense-1.png"></div>
                    </div>
                    <div class="body">Гарний зір забезпечено протягом<br>24 годин</div>
                    <div class="footer">
                        <button class="button-ellipse button-preset-white button-large">Детальніше</button>
                    </div>
                </div>
                <div class="tile">
                    <div class="header">
                        <div class="icon"><img src="/images/7f60fbbdf5685051501baa68dc0c95a0.webp"></div>
                    </div>
                    <div class="body">Немає гіпоксії рогівки й не порушується сльозообмін</div>
                    <div class="footer">
                        <button class="button-ellipse button-preset-white button-large">Детальніше</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class=" parallax-container section-mb with-icon light title-preset-2 section-image parallax section-full-width"
             data-parallax-img="/images/14d38b954dd0885672e150bede8effc2.webp">
        <div class="additional">
            <div class="icon"><img src="/images/369e03686d6ccde0cf9a2518fc6f4084.webp"></div>
        </div>

        <div class="content"><h3>Удень ви звільнені від окулярів та контактних лінз</h3> <!----> <!----></div>
    </section>
    <section class="list" style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content"><h3>Переваги ОК-лінз</h3> <!---->
            <div class="slot">
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/519a7f6e898a7630fb08c8eecee2d18d.webp"></div>
                    <div class="text">
                        Повна свобода від окулярів та лінз протягом дня
                        <div class="description">Ортокератологія є єдиним методом, який дозволяє чітко бачити, при цьому
                            не використовуючи окулярів, контактних лінз і не проводячи рефракційних операцій.
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/519a7f6e898a7630fb08c8eecee2d18d.webp"></div>
                    <div class="text">
                        Зворотність ефекту, якщо скасувати терапію
                        <div class="description">Ефект від лінз з'являється тільки при їх використанні. Якщо скасувати
                            використання ОК-лінз, рогівка ока повернеться до свого попереднього стану, який був до
                            початку терапії, що дозволить провести лазерну корекцію зору пізніше.
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/519a7f6e898a7630fb08c8eecee2d18d.webp"></div>
                    <div class="text">
                        Уповільнення розвитку короткозорості
                        <div class="description">ОК-терапія дозволяє загальмувати процес розвитку короткозорості у дітей
                            та підлітків.
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/519a7f6e898a7630fb08c8eecee2d18d.webp"></div>
                    <div class="text">
                        Використання ОК-терапії повністю безпечне
                        <div class="description">ОК-терапія абсолютно безпечна, якщо суворо дотримуватися всіх порад
                            фахівця. Крім цього, треба чітко дотримуватися правил щодо використання і догляду за
                            лінзами.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="with-icon  parallax-container section-mb  light title-preset-2 section-image parallax section-full-width"
             data-parallax-img="/images/ca664ef53b472650a9bfbc6cee904a56.webp">
        <div class="additional">
            <div class="icon"><img src="/images/0236bcbafe0233f8a286f57e3e111862.webp"></div>
        </div>

        <div class="content"><h3>З <strong>6-ти років</strong> при <strong>короткозорості</strong> від 0.5 до 7 діоптрій
                або при <strong>астигматизмі</strong> до 2 діоптрій</h3> <!----> <!----></div>
    </section>
    <section class="list" style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content"><h3>Показання до ОК-терапії</h3>
            <p>За межами верхніх границь будь-яких аметропій існує можливість неповної корекції з докорекцією
                окулярами.</p>
            <div class="slot">
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/50daa468cc52463afcbf90d20f841f92.webp"></div>
                    <div class="text">
                        Вік – від 6-ти років
                        <div class="description">Для ОК-терапії не існує чітких верхніх меж, пов'язаних із віком людини,
                            адже все залежить безпосередньо від пацієнта і наявності протипоказань. Нижня ж межа
                            визначається соціальною адаптованістю дитини та її взаємовідносинами з батьками.
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/7f60fbbdf5685051501baa68dc0c95a0.webp"></div>
                    <div class="text">
                        Прогресування міопії
                        <div class="description">ОК-терапія здатна з високою імовірністю уповільнити розвиток
                            короткозорості у дітей та підлітків.
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/68e66c10e5ac8334b8931a91eff08fe0.webp"></div>
                    <div class="text">
                        Міопія в межах 0.50 - 7.00 діоптрій, астигматизм до 2.00 діоптрій
                        <div class="description">Для корекції, міопія (короткозорість) повинна бути в межах від 0.50 до
                            7.00 діоптрій за сфероеквівалентом. У нашій клініці були випадки, коли в індивідуальному
                            порядку замовлялися лінзи для -8 діоптрій. Нижня межа визначається некорегованою гостротою
                            зору і якщо вона не влаштовує пацієнта навіть при невеликій аметропії, є сенс у корекції
                            зору.
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/369e03686d6ccde0cf9a2518fc6f4084.webp"></div>
                    <div class="text">
                        Неможливість використання окулярів та контактних лінз удень
                        <div class="description">За професійним показанням або з інших причин, через які немає
                            можливості використовувати окуляри або контактні лінзи в активний час доби.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="consultation  parallax-container  light title-preset-2 section-image parallax section-full-width"
             data-parallax-img="/images/284a6148157fc353c372115e895e1426.webp"><!---->

        <div class="content"><h3>Проконсультуйтеся з нашими спеціалістами!</h3>
            <p>Наші фахівці допоможуть вам і дадуть відповідь на всі ваші питання</p> <!---->
        </div>
    </section>
    <section class="glasses light parallax-container title-preset-2 section-image parallax section-full-width"
             data-parallax-img="/images/745dd5ceb069591723c71d58437c508c.webp"><!---->

        <div class="content"><h3>Припиніть відчувати дискомфорт від носіння окулярів та денних контактних лінз!</h3>
            <!----> <!----></div>
    </section>
    <section class="timeline section-padding" style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!---->
        <!---->
        <div class="content section-mobil"><!----> <!---->
            <div class="slot"><h3>Як правильно одягати лінзи перед сном</h3>
                <div class="list">
                    <div class="item">Вимийте руки з милом (мило не повинно містити ароматичних добавок і барвників,
                        наприклад, дитяче) і добре ополосніть їх, щоб змити залишки мила.
                    </div>
                    <div class="item">Витріть руки рушником, який не залишає ворсинок, або не витирайте руки зовсім.
                        Можна використовувати паперові рушники або серветки.
                    </div>
                    <div class="item">Відкрийте кришечку контейнера, де знаходиться лінза для правого ока. Завжди
                        починайте з правого ока. Це дозволить вам ніколи не плутати лінзи. Акуратно дістаньте лінзу
                        пальцями. Зверніть увагу, що діставати лінзу нігтями категорично заборонено.
                    </div>
                    <div class="item">Ополосніть лінзу невеликою кількістю свіжого розчину для зберігання. Ні в якому
                        разі не використовуйте воду.
                    </div>
                    <div class="item">Помістіть праву лінзу на кінчик вашого правого вказівного пальця.</div>
                    <div class="item">Середнім пальцем тієї ж (правої) руки відтягніть нижню повіку вниз, а лівою рукою
                        відтягніть верхню повіку, щоб було повністю видно райдужку. Добре притримуйте повіки. Дивіться
                        прямо перед собою в дзеркало і повільно підносьте ОК-лінзу до центра рогівки. Контролюйте свої
                        рухи в дзеркалі другим оком. Не притискайте лінзу до ока. Волога лінза сама притягнеться до
                        рогівки.
                    </div>
                    <div class="item">Повільно відпустіть повіки й дивіться вниз кілька секунд.</div>
                    <div class="item">Відкрийте кришечку наступного контейнера для лівого ока і повторіть свої дії.
                    </div>
                    <div class="item">Ретельно сполосніть контейнер та кришечки під струменем теплої води, що відповідає
                        питному стандарту.
                    </div>
                    <div class="item">Нещільно прикрийте контейнер кришечками або залиште його відкритим на столі в
                        кімнаті так, щоб він не припадав пилом, але став сухим за ніч (у ванній кімнаті залишати
                        контейнер не слід).
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section  style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content section-title"><h3>Якщо вам не вдається одягти лінзу, зверніться до фахівця нашого центру</h3> <!---->
            <!----></div>
    </section>
    <section reverse="true" class="timeline section-padding "
             style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content section-mobil section-pt"><!----> <!---->
            <div class="slot"><h3 style="margin-top: 110px;">Як правильно знімати лінзи після сну</h3>
                <div class="list">
                    <div class="item">Вимийте руки з милом (мило не повинно містити ароматичних добавок і барвників,
                        наприклад, дитяче) і добре ополосніть їх, щоб змити залишки мила.
                    </div>
                    <div class="item">Витріть руки рушником, який не залишає ворсинок, або не витирайте руки зовсім.
                        Можна використовувати паперові рушники або серветки.
                    </div>
                    <div class="item">Наповніть чашечки контейнера свіжим розчином для зберігання так, щоб рідина
                        повністю накривала всю лінзу.
                    </div>
                    <div class="item">Покладіть на стіл чисту неворсисту серветку, щоб лінза впала на неї, коли ви
                        будете робити маніпуляції.
                    </div>
                    <div class="item">Нахиліть голову, поки обличчя не буде паралельно до столу. Відкрийте очі якомога
                        ширше.
                    </div>
                    <div class="item">Помістіть правий вказівний і середній палець у зовнішній кут правого ока.
                        Дивлячись вниз, потягніть повіки правим вказівним і середнім пальцями назовні й трохи вгору
                        (можна одночасно знизу натиснути на нижню повіку середнім пальцем лівої руки) і моргніть. Лінза
                        повинна випасти.
                    </div>
                    <div class="item">Обережно потріть кожну сторону лінзи по 20 секунд між подушечками великого,
                        вказівного і середнього пальців. Також, можна покласти лінзу на долоню й обережно потерти кожну
                        сторону лінзи по 20 секунд подушечкою вказівного або середнього пальця.
                    </div>
                    <div class="item">Ретельно сполосніть лінзу проточною теплою (але не гарячою) водою, що відповідає
                        питному стандарту. Якщо вода не відповідає стандарту ретельно сполосніть лінзу розчином для
                        зберігання лінз.
                    </div>
                    <div class="item">Помістіть лінзу в чашечку контейнера та повторіть усі дії з лівою лінзою.</div>
                </div>
            </div>
        </div>
    </section>
    <section style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content section-title"><h3>Якщо вам не вдається зняти лінзу, зверніться до фахівця нашого центру</h3> <!---->
            <!----></div>
    </section>
    <section class="section-full-width section-flat-width section-flat-height"
             style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content"><!----> <!---->
            <div class="slot">
                <iframe width="100%" height="600px" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/c_Br0XtxKVI"></iframe>
            </div>
        </div>
    </section>
    <section class="section-full-width" style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----><!---->
        <div class="content section-title"><h3>Ми пропонуємо чудовий суперсучасний альтернативний варіант – ортокератологічні «нічні»
                лінзи!</h3> <!---->
            <div class="slot"><a href="/contacts" class="button button-ellipse button-preset-primary button-large">Зв'яжіться
                    з нами</a></div>
        </div>
    </section>
    <section class="section-map section-full-width section-flat-width section-flat-height"
             style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content"><!----> <!---->
            <div class="slot">
                <iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="allowfullscreen" width="100%" height="400px" frameborder="0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d453.2756506946719!2d36.245743173268586!3d50.00921300450467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0dbc8603d19%3A0x344aa3d3b44d1308!2z0YPQuy4g0JzQsNGP0LrQvtCy0YHQutC-0LPQviwgMjQsINCl0LDRgNGM0LrQvtCyLCDQpdCw0YDRjNC60L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2MTAwMA!5e0!3m2!1sru!2sua!4v1577399748711!5m2!1sru!2sua"></iframe>
            </div>
        </div>
    </section>
    <footer class="section-relative section-top-66 section-bottom-34 page-footer bg-accent context-dark footer-classic">
        <div class="container">
            <div class="row justify-content-md-center text-xl-start">
                <div class="col-md-8 col-lg-12">
                    <div class="row justify-content-sm-center row-40">
                        <div class="col-sm-10 col-lg-4 text-start order-lg-3 inset-lg-left-50">
                            <h6>@lang('messages.Newsletter')</h6>
                            <hr class="text-subline">
                            <p class="text-white-70">@lang('messages.Enter your email address to receive up-to-date news, new patient information and other useful stuff, delivered right to your inbox.')</p>
                            <form class="rd-mailform" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                                <div class="form-wrap input-group input-group-custom input-group-sm no-wrap">
                                    <label class="form-label" for="subscribe-form-email">@lang('messages.Your e-mail...')</label>
                                    <input class="form-input mr-2" id="subscribe-form-email" type="email" name="email">
                                    <button class="btn btn-sm btn-darkest" type="submit">@lang('messages.Subscribe')</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-10 text-sm-start col-lg-4 order-lg-2">
                            <h6>@lang('messages.contact us')</h6>
                            <hr class="text-subline">
                            <div class="text-center text-xl-start">
                                <address class="contact-info d-md-inline-block text-start">
                                    <div class="p unit unit-spacing-xxs flex-row">
                                        <div class="unit-left"><span class="icon icon-xxs mdi mdi-phone text-white"></span></div>
                                        <div class="unit-body"> <a class="text-white-70" href="tel:#"> (057) 761-61-31</a> <span class="text-white-70">, </span> <a class="text-white-70" href="tel:#"> (093) 761-61-31</a> <span class="text-white-70">, </span> <a class="text-white-70" href="tel:#"> (099) 548-44-85</a> <span class="text-white-70">, </span> <a class="text-white-70" href="tel:#"> (097) 318-67-58</a> </div>
                                    </div>
                                    <div class="p unit flex-row unit-spacing-xxs">
                                        <div class="unit-left"><span class="icon icon-xxs mdi mdi-map-marker text-white"></span></div>
                                        <div class="unit-body"><a class="text-white-70" href="#">м. Харків, вул. Миколи Хвильового (Маяковського), 24 (м. Університет, м. Пушкінська)</a></div>
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
                            <div class="offset-top-30" style="margin-top: 40px;">
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


</div>

<div class="snackbars" id="form-output-global"></div>
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>





</body>
</html>
