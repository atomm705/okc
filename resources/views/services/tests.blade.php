<!DOCTYPE html>
<html lang="uk" class="page-panoptix page-header-not-margin">

<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="a8YXROVf1VdVuKifPeQ50SlXPOGIdCveMJ6TUIw9">
    <meta name="date" content="2025 Apr 04">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description"
          content="Багатопрофільний медичний центр Докарт Харків. Діагностичний центр із використанням сучасного обладнання. вул. Маяковського, 24 ☎0(800)317-317">
    <meta name="keywords"
          content="Докарт, Харків, офтальмологія, офтальмолог, лазерна корекція зору, лазерна корекція, лікування катаракти, підбір очок, гінекологія, гінеколог, урологія, уролог">
    <meta property="og:title"
          content="Лінзи PanOptix у медичному центрі у Харкові &quot;Докарт&quot;. Приватна клініка у Харкові.">
    <meta property="og:description"
          content="Багатопрофільний медичний центр Докарт Харків. Діагностичний центр із використанням сучасного обладнання. вул. Маяковського, 24 ☎0(800)317-317">

    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">



    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('blepharoplastika-css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('blepharoplastika-css/style-bleforoplastik.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">


    <link rel="stylesheet" href="{{ asset('blepharoplastika-css/panoptix.css') }}">



    <link rel="preload" as="script" src="{{ asset('blepharoplastika-js/app.js') }}">




</head>

<body >







<div id="app" class="app">
    <header class="section page-header  @if(request()->routeIs('main.index') || request()->routeIs('main.blepharoplastika') || request()->routeIs('main.plastichna-khururgiya') || request()->routeIs('services.inektsionnaya-terapiya') || request()->routeIs('services.plazmoterapiya') || request()->routeIs('services.rf-lifting')|| request()->routeIs('services.lazernaya-epilyatsiya')|| request()->routeIs('services.lazernoe-omolozhenie')|| request()->routeIs('services.co2') || request()->routeIs('services.checkup') || request()->routeIs('services.panoptix')|| request()->routeIs('services.oklens')) header-absolute @endif">
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
                                <div class="p unit unit-horizontal unit-spacing-xs">
                                    <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light text-primary  fa-clock-o [&#xf017;]"></span></div>
                                    <div class="unit-body unit-body-first"><a href="#" class=" @if(request()->routeIs('main.index') || request()->routeIs('services.tests') ) text-white @endif">ПН-СБ
                                            <br> с 9-00 до 17-00
                                        </a>
                                    </div>
                                </div>
                            </address>
                            <address class="contact-info reveal-sm-inline-block text-start offset-none">
                                <div class="p unit unit-spacing-xs unit-horizontal">
                                    <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light text-primary mdi mdi-phone"></span></div>
                                    <div class="unit-body align-content-center "><a href="tel:#" class=" @if(request()->routeIs('main.index') || request()->routeIs('services.tests')) text-white @endif">0 (800) 317-317
                                        </a></div>
                                </div>
                            </address>

                            <address class="contact-info reveal-sm-inline-block text-start">
                                <div class="p unit unit-horizontal unit-spacing-xs">
                                    <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light text-primary mdi mdi-map-marker"></span></div>
                                    <div class="unit-body unit-body-third"><a href="#" class=" @if(request()->routeIs('main.index') || request()->routeIs('services.tests')) text-white @endif">Україна, м. Харків,
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

                            <button class="rd-navbar-toggle " data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span class="color-mobil"></span></button>
                            <!--RD Navbar Brand-->
                            <div class="rd-navbar-brand ">
                                <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="{{ asset('images/logo-brand.webp') }}" alt="" width="77" height="20"/><img class="brand-logo-light" src="{{ asset('images/logo-brand.webp') }}" alt="" width="77" height="20"/></a>
                            </div>

                        </div>
                        <div class="rd-navbar-main-element">
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
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"  href="{{ route('services.panoptix') }}">PanOptix</a></li>
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

                                    <li class="rd-nav-item @if(request()->routeIs('main.about')) active @endif"><a class="rd-nav-link" href="{{ route('main.about') }}" > @lang('messages.About')</a>
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
                                            <ul class="rd-menu rd-navbar-dropdown">
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

    <section class=" section-1 section-flat-height section-full-width section-full-height "><!---->
        <div class="images">
            <div class="image" style="transform-style: preserve-3d; backface-visibility: hidden;"><img class="board"
                                                                                                       src="/images/9c865035a41a088e2394ef64c8afc017.webp">
            </div>
            <div class="image" style="transform-style: preserve-3d; backface-visibility: hidden;"><img class="iols"
                                                                                                       src="/images/fc27907f2413cdff764b30b308059476.webp">
            </div>
        </div>
        <div class="content"><h3>@lang('frontend/panoptix.cover.title')</h3>
            <p>@lang('frontend/panoptix.cover.description')</p>
            <div class="slot">@lang('frontend/panoptix.cover.body')</div>
        </div>
    </section>
    <section class="section-mouse-effects section-mouse-effects-sides section-2 section-flat-height section-full-width section-full-height">
        <!---->
        <div class="images">
            <div class="image section-mouse-effects" style="transform-style: preserve-3d; backface-visibility: hidden;"><img
                    src="/images/69c53bef4bfcc111c612abd11b996de9.webp"></div>
            <div class="particles" style="transform-style: preserve-3d; backface-visibility: hidden;">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>
        </div>
        <div class="content"><h3>@lang('frontend/panoptix.intraocular.title')</h3> <!---->
            <div class="slot"><p>@lang('frontend/panoptix.intraocular.body.text_1')</p>
                <p>@lang('frontend/panoptix.intraocular.body.text_2')</p> <a href="/contacts" class="button button-ellipse button-preset-primary button-large">@lang('frontend/panoptix.intraocular.link')</a>
            </div>
        </div>
    </section>
    <section class="section-mouse-effects section-mouse-effects-sides section-mouse-effects-reversed section-3 section-flat-height section-full-width section-full-height">
        <!---->
        <div class="images">
            <div class="image" style="transform-style: preserve-3d; backface-visibility: hidden;"><img
                    src="/images/e54b3beace82bb7e66a9c4e539caede7.webp"></div>
            <div class="particles" style="transform-style: preserve-3d; backface-visibility: hidden;">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>
        </div>
        <div class="content"><h3>@lang('frontend/panoptix.panoptix.title')</h3> <!---->
            <div class="slot"><p>@lang('frontend/panoptix.panoptix.body.text_1')</p>
                <p>@lang('frontend/panoptix.panoptix.body.text_2')</p>
                <p>@lang('frontend/panoptix.panoptix.body.text_3')</p> <a href="/contacts"
                                                                          class="button button-ellipse button-preset-primary button-large">@lang('frontend/panoptix.panoptix.link')</a>
            </div>
        </div>
    </section>
    <section
        class="section-mouse-effects section-mouse-effects-sides section-4 section-flat-height section-full-width section-full-height">
        <!---->
        <div class="images">
            <div class="image" style="transform-style: preserve-3d; backface-visibility: hidden;"><img
                    src="/images/bb5bf3aecc22c5000ba655d32f1748d8.webp"></div>
            <div class="particles" style="transform-style: preserve-3d; backface-visibility: hidden;">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>
        </div>
        <div class="content"><h3>@lang('frontend/panoptix.enlighten.title')</h3> <!---->
            <div class="slot"><p>@lang('frontend/panoptix.enlighten.body.text_1')</p>
                <ul class="list-marked list-tab-none">
                    <li>@lang('frontend/panoptix.enlighten.body.items.item_1')</li>
                    <li>@lang('frontend/panoptix.enlighten.body.items.item_1')</li>
                    <li>@lang('frontend/panoptix.enlighten.body.items.item_1')</li>
                </ul>
                <p>@lang('frontend/panoptix.enlighten.body.text_2')</p> <a href="/contacts"class="button button-ellipse button-preset-primary button-large">@lang('frontend/panoptix.enlighten.link')</a>
            </div>
        </div>
    </section>
    <section
        class="section-mouse-effects section-mouse-effects-sides section-mouse-effects-reversed section-5 section-flat-height section-full-width section-full-height">
        <!---->
        <div class="images">
            <div class="image" style="transform-style: preserve-3d; backface-visibility: hidden;"><img
                    src="/images/ddb67f77df26b9ab3a22d62890349112.webp"></div>
            <div class="particles" style="transform-style: preserve-3d; backface-visibility: hidden;">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>
        </div>
        <div class="content position-decstop"><h3>@lang('frontend/panoptix.company.title')</h3> <!---->
            <div class="slot"><p>@lang('frontend/panoptix.company.body.text_1')</p>
                <ul class="list-marked list-tab-none">
                    <li>@lang('frontend/panoptix.company.body.items.item_1')</li>
                    <li>@lang('frontend/panoptix.company.body.items.item_2')</li>
                    <li>@lang('frontend/panoptix.company.body.items.item_3')</li>
                    <li>@lang('frontend/panoptix.company.body.items.item_4')</li>
                    <li>@lang('frontend/panoptix.company.body.items.item_5')</li>
                </ul>
                <p>@lang('frontend/panoptix.company.body.text_2')</p> <a href="/contacts" class="button button-ellipse button-preset-primary button-large">@lang('frontend/panoptix.company.link')</a></div>
        </div>
    </section>
    <section
        class="section-mouse-effects section-mouse-effects-sides section-6 section-flat-height section-full-width section-full-height ">
        <!---->
        <div class="images">
            <div class="image"
                 style="transform-style: preserve-3d; backface-visibility: hidden; transform: translate3d(-48.4587px, 14.3457px, 0px);">
                <img src="/images/0ce32fde40dc9b0d3ccec8420c3188c4.webp"></div>
            <div class="particles"
                 style="transform-style: preserve-3d; backface-visibility: hidden; transform: translate3d(-144.67px, 43.0321px, 0px);">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>
        </div>
        <div class="content"><h3>@lang('frontend/panoptix.centurion.title')</h3> <!---->
            <div class="slot"><p>@lang('frontend/panoptix.centurion.body.text_1')</p>
                <ul class="list-marked list-tab-none">
                    <li>@lang('frontend/panoptix.centurion.body.items.item_1')</li>
                    <li>@lang('frontend/panoptix.centurion.body.items.item_2')
                    </li>
                    <li>@lang('frontend/panoptix.centurion.body.items.item_3')
                    </li>
                </ul>
                <p>@lang('frontend/panoptix.centurion.body.text_1')</p> <a href="/contacts" class="button button-ellipse button-preset-primary button-large">@lang('frontend/panoptix.centurion.link')</a></div>
        </div>
    </section>
    <section tilt="true"
             class="section-mouse-effects section-7 section-flat-height section-full-width section-full-height"><!---->
        <div class="images"><img data-tilt-full-page-listening="" data-tilt-reset="false"
                                 src="/images/29f97ac0545f1369b0528257352d4cd6.png">
            <div data-tilt-full-page-listening="" data-tilt-reset="false" data-tilt-perspective="400" class="particles">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>
        </div>
        <div class="content"><h3>@lang('frontend/panoptix.questions.title')</h3> <!---->
            <div class="slot"><p>@lang('frontend/panoptix.questions.body.text_1')</p>
                <p>@lang('frontend/panoptix.questions.body.text_2')</p>
                <p>@lang('frontend/panoptix.questions.body.text_3')</p>
                <div class="center"><a href="/contacts"   class="button button-ellipse button-preset-primary button-large">@lang('frontend/panoptix.questions.link')</a></div>
            </div>
        </div>
    </section>

    <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
    <!--Please note that YOUR_API_KEY should replaced with your key.-->
    <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
    <div  data-center="Медицинский центр Докарт (клиника Ок Центр)" data-zoom="5" >
        <div class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.105976527954!2d36.24050249288963!3d50.00936884557607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0e56e275b2f%3A0x42bbbee2ee570576!2z0JzQtdC00LjRhtC40L3RgdC60LjQuSDRhtC10L3RgtGAINCU0L7QutCw0YDRgiAo0LrQu9C40L3QuNC60LAg0J7QuiDQptC10L3RgtGAKQ!5e0!3m2!1sru!2sua!4v1743058892159!5m2!1sru!2sua&gestureHandling=greedy"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
        </ul>
    </div>




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



</div>



<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>


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



</body>


</html>
