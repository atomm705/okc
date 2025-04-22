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
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"  href="{{ route('services.checkup') }}">Check Up</a></li>
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
                                        <h2>@lang('frontend/oklens.slider.slide_1.title')
                                        </h2>
                                        <h5 class="d-none d-lg-block mw-400">@lang('frontend/oklens.slider.slide_1.description')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="main.appointment {{ route('main.timetable') }}">@lang('frontend/oklens.slider.slide_1.link')</a>
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
                                        <h2>@lang('frontend/oklens.slider.slide_2.title')
                                        </h2>
                                        <h5 class="d-none d-lg-block mw-400">@lang('frontend/oklens.slider.slide_2.description')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">@lang('frontend/oklens.slider.slide_2.link')</a>
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
                                        <h2>@lang('frontend/oklens.slider.slide_3.title')</h2>
                                        <h5 class="d-none d-lg-block mw-400">@lang('frontend/oklens.slider.slide_3.description')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">@lang('frontend/oklens.slider.slide_3.link')</a>
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
                                        <h2>@lang('frontend/oklens.slider.slide_4.title')</h2>
                                        <h5 class="d-none d-lg-block mw-400">@lang('frontend/oklens.slider.slide_4.description')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">@lang('frontend/oklens.slider.slide_4.link')</a>
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
        <div class="content"><h3>@lang('frontend/oklens.orthokeratology.title')</h3>
            <p class="p-mobil">@lang('frontend/oklens.orthokeratology.description')</p> <!----></div>
    </section>

    <div class="parallax-container"  data-parallax-img="/images/53c7040420ca6f48cc5827f9addb9656.webp">
        <div class="parallax-content   parallax-container-bg section-98 section-sm-110 context-dark">
            <div class="additional">
                <div class="icon"><img src="/images/77775b5b7c04a94448c250ef94a2eea1.webp"></div>


            </div>
            <div class="hr-container">
                <hr class="line-paralax">
            </div>

            <div class="content"><h3 class="text-center content-title-position">@lang('frontend/oklens.surgery.title')</h3>
                <p class="text-center p-mobil-2">@lang('frontend/oklens.surgery.description')</p> <!---->
            </div>
        </div>
    </div>
    <section class="children tiles section-padding parallax "
             style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content"><h3>@lang('frontend/oklens.child.title')</h3>
            <p class="content-textx-color p-mobil-2 ">@lang('frontend/oklens.child.description')
            </p>
            <div class="slot section-mobil">
                <div class="tile">
                    <div class="header">
                        <div class="icon"><img src="/images/31350162dbb169b44f63f1ef56575df7.webp"></div>
                    </div>
                    <div class="body">@lang('frontend/oklens.child.tiles.tile_1.text')</div>
                    <div class="footer">
                        <button class="button-ellipse button-preset-white button-large">@lang('frontend/oklens.child.tiles.tile_1.link')</button>
                    </div>
                </div>
                <div class="tile">
                    <div class="header">
                        <div class="icon"><img src="/images/logo_lense-1.png"></div>
                    </div>
                    <div class="body">@lang('frontend/oklens.child.tiles.tile_2.text')</div>
                    <div class="footer">
                        <button class="button-ellipse button-preset-white button-large">@lang('frontend/oklens.child.tiles.tile_2.link')</button>
                    </div>
                </div>
                <div class="tile">
                    <div class="header">
                        <div class="icon"><img src="/images/7f60fbbdf5685051501baa68dc0c95a0.webp"></div>
                    </div>
                    <div class="body">@lang('frontend/oklens.child.tiles.tile_3.text')</div>
                    <div class="footer">
                        <button class="button-ellipse button-preset-white button-large">@lang('frontend/oklens.child.tiles.tile_3.link')</button>
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

        <div class="content"><h3>@lang('frontend/oklens.lenses.title')</h3> <!----> <!----></div>
    </section>
    <section class="list" style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content"><h3>@lang('frontend/oklens.advantages.title')</h3> <!---->
            <div class="slot">
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/519a7f6e898a7630fb08c8eecee2d18d.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.advantages.items.item_1.title')
                        <div class="description">@lang('frontend/oklens.advantages.items.item_1.description')
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/519a7f6e898a7630fb08c8eecee2d18d.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.advantages.items.item_2.title')
                        <div class="description">@lang('frontend/oklens.advantages.items.item_2.description')
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/519a7f6e898a7630fb08c8eecee2d18d.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.advantages.items.item_3.title')
                        <div class="description">@lang('frontend/oklens.advantages.items.item_3.description')
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/519a7f6e898a7630fb08c8eecee2d18d.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.advantages.items.item_4.title')
                        <div class="description">@lang('frontend/oklens.advantages.items.item_4.description')
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

        <div class="content"><h3>  @lang('frontend/oklens.myopia_farsightedness.title')</h3> <!----> <!----></div>
    </section>
    <section class="list" style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content"><h3>@lang('frontend/oklens.indication.title')</h3>
            <p>@lang('frontend/oklens.indication.description')</p>
            <div class="slot">
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/50daa468cc52463afcbf90d20f841f92.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.indication.items.item_1.title')
                        <div class="description">  @lang('frontend/oklens.indication.items.item_1.description')</div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/7f60fbbdf5685051501baa68dc0c95a0.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.indication.items.item_2.title')
                        <div class="description"> @lang('frontend/oklens.indication.items.item_2.description')
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/68e66c10e5ac8334b8931a91eff08fe0.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.indication.items.item_3.title')
                        <div class="description"> @lang('frontend/oklens.indication.items.item_3.description')
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/369e03686d6ccde0cf9a2518fc6f4084.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.indication.items.item_4.title')
                        <div class="description">@lang('frontend/oklens.indication.items.item_4.description')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="consultation  parallax-container  light title-preset-2 section-image parallax section-full-width"
             data-parallax-img="/images/284a6148157fc353c372115e895e1426.webp"><!---->

        <div class="content"><h3>@lang('frontend/oklens.consultation.title')</h3>
            <p>@lang('frontend/oklens.consultation.description')</p> <!---->
        </div>
    </section>
    <section class="glasses light parallax-container title-preset-2 section-image parallax section-full-width"
             data-parallax-img="/images/745dd5ceb069591723c71d58437c508c.webp"><!---->

        <div class="content"><h3>@lang('frontend/oklens.discomfort.title')</h3>
            <!----> <!----></div>
    </section>
    <section class="timeline section-padding" style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!---->
        <!---->
        <div class="content section-mobil"><!----> <!---->
            <div class="slot"><h3>@lang('frontend/oklens.lenses_before_sleep.title')</h3>
                <div class="list">
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_1')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_2')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_3')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_4')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_5')</div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_6')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_7')</div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_8')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_9')
                    </div>
                    <div class="item">
                        @lang('frontend/oklens.lenses_before_sleep.items.item_10')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section  style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content section-title"><h3>@lang('frontend/oklens.contact_with_specialist_up_lens.title')</h3> <!---->
            <!----></div>
    </section>
    <section reverse="true" class="timeline section-padding "
             style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content section-mobil section-pt"><!----> <!---->
            <div class="slot"><h3 style="margin-top: 110px;">@lang('frontend/oklens.lenses_after_sleep.title')</h3>
                <div class="list">
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_1')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_2')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_3')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_4')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_5')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_6')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_7')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_8')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_9')</div>
                </div>
            </div>
        </div>
    </section>
    <section style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content section-title"><h3>@lang('frontend/oklens.contact_with_specialist_down_lens.title')</h3> <!---->
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
        <div class="content section-title"><h3>@lang('frontend/oklens.contact_us.title')</h3> <!---->
            <div class="slot"><a href="/contacts" class="button button-ellipse button-preset-primary button-large">@lang('frontend/oklens.contact_us.link')</a></div>
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
