<header class="section page-header  @if(request()->routeIs('main.index') || request()->routeIs('main.blepharoplastika') || request()->routeIs('main.plastichna-khururgiya') || request()->routeIs('services.inektsionnaya-terapiya') || request()->routeIs('services.plazmoterapiya') || request()->routeIs('services.rf-lifting')|| request()->routeIs('services.lazernaya-epilyatsiya')|| request()->routeIs('services.lazernoe-omolozhenie')|| request()->routeIs('services.co2') || request()->routeIs('services.checkup') || request()->routeIs('services.panoptix')|| request()->routeIs('services.oklens')|| request()->routeIs('services.tests')|| request()->routeIs('services.liposaktsiya-ta-liposkulpturuvannya-v-dokart')) header-absolute @endif">
    <!--RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-subpage" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle
            {{ Route::currentRouteName() === 'main.blepharoplastika' ||
               Route::currentRouteName() === 'main.plastichna-khururgiya' ||
               Route::currentRouteName() === 'services.inektsionnaya-terapiya' ||
               Route::currentRouteName() === 'services.plazmoterapiya' ||
               Route::currentRouteName() === 'services.rf-lifting' ||
               Route::currentRouteName() === 'services.lazernaya-epilyatsiya' ||
               Route::currentRouteName() === 'services.lazernoe-omolozhenie' ||
               Route::currentRouteName() === 'services.co2' ||
               Route::currentRouteName() === 'services.checkup' ||
               Route::currentRouteName() === 'services.liposaktsiya-ta-liposkulpturuvannya-v-dokart'
               ? 'rd-navbar-collapse-toggle1'
               : '' }}
                rd-navbar-fixed-element-1"
                 data-rd-navbar-toggle=".rd-navbar-collapse">
                <span></span>
            </div>
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
                                <div class="unit-body unit-body-first"><a href="#" class=" @if(request()->routeIs('main.index') || request()->routeIs('main.plastichna-khururgiya')|| request()->routeIs('services.oklens')) text-white @endif">ПН-СБ
                                        <br> с 9-00 до 17-00
                                    </a>
                                </div>
                            </div>
                        </address>
                        <address class="contact-info reveal-sm-inline-block text-start offset-none">
                            <div class="p unit unit-spacing-xs unit-horizontal">
                                <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light text-primary mdi mdi-phone"></span></div>
                                <div class="unit-body align-content-center "><a href="tel:#" class=" @if(request()->routeIs('main.index') || request()->routeIs('main.plastichna-khururgiya') || request()->routeIs('services.oklens')) text-white @endif">0 (800) 317-317
                                    </a></div>
                            </div>
                        </address>

                        <address class="contact-info reveal-sm-inline-block text-start">
                            <div class="p unit unit-horizontal unit-spacing-xs">
                                <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light text-primary mdi mdi-map-marker"></span></div>
                                <div class="unit-body unit-body-third"><a href="#" class=" @if(request()->routeIs('main.index') || request()->routeIs('main.plastichna-khururgiya') || request()->routeIs('services.oklens')) text-white @endif">Україна, м. Харків,
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
                    <div class="rd-navbar-panel"  style="{{ Route::currentRouteName() === 'main.blepharoplastika' ||
              Route::currentRouteName() === 'main.plastichna-khururgiya' ||
              Route::currentRouteName() === 'services.inektsionnaya-terapiya' ||
              Route::currentRouteName() === 'services.plazmoterapiya' ||
              Route::currentRouteName() === 'services.rf-lifting' ||
              Route::currentRouteName() === 'services.lazernaya-epilyatsiya' ||
              Route::currentRouteName() === 'services.lazernoe-omolozhenie' ||
              Route::currentRouteName() === 'services.co2' ||
              Route::currentRouteName() === 'services.checkup' ||
              Route::currentRouteName() === 'services.liposaktsiya-ta-liposkulpturuvannya-v-dokart'
              ? 'background: white;box-shadow: 0 3px 14px 0 rgba(0, 0, 0, 0.2);'
              : '' }}">
                        <!--RD Navbar Toggle-->

                        <button class="rd-navbar-toggle  {{ Route::currentRouteName() === 'main.blepharoplastika' ||
               Route::currentRouteName() === 'main.plastichna-khururgiya' ||
               Route::currentRouteName() === 'services.inektsionnaya-terapiya' ||
               Route::currentRouteName() === 'services.plazmoterapiya' ||
               Route::currentRouteName() === 'services.rf-lifting' ||
               Route::currentRouteName() === 'services.lazernaya-epilyatsiya' ||
               Route::currentRouteName() === 'services.lazernoe-omolozhenie' ||
               Route::currentRouteName() === 'services.co2' ||
               Route::currentRouteName() === 'services.checkup' ||
               Route::currentRouteName() === 'services.liposaktsiya-ta-liposkulpturuvannya-v-dokart'
               ? 'rd-navbar-toggle2'
               : '' }}" data-rd-navbar-toggle=".rd-navbar-nav-wrap" ><span class="color-mobil "></span></button>
                        <!--RD Navbar Brand-->
                        <div class="rd-navbar-brand ">
                            <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="{{ asset('images/logo-brand.webp') }}" alt="" width="77" height="20"/><img class="brand-logo-light" src="{{ asset('images/logo-brand.webp') }}" alt="" width="77" height="20"/></a>
                        </div>

                    </div>
                    <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap">

                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item @if(request()->routeIs('main.index')) active @endif"><a class="rd-nav-link"href="{{ route('main.index') }}">{{ __('header.menu.index') }}</a>
                                </li>

                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('main.services') }}">{{ __('header.menu.services') }}</a>
                                    <ul class="rd-menu rd-navbar-megamenu">
                                        <li class="rd-megamenu-item">
                                            <h6 class="rd-megamenu-title">@lang('main.oftalmology')</h6>
                                            <ul class="rd-megamenu-list">
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{ route('main.blepharoplastika') }}" >Блефаропластика</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{ route('services.panoptix') }}">PanOptix</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{ route('services.oklens') }}">Ок Лінзи</a></li>

                                            </ul>
                                        </li>
                                        <li class="rd-megamenu-item">
                                            <h6 class="rd-megamenu-title">@lang('main.plastic_khirurgiya')</h6>
                                            <ul class="rd-megamenu-list">
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"  href="{{ route('main.plastichna-khururgiya') }}">Пластична хірургія</a></li>
                                                <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"  href="{{ route('services.liposaktsiya-ta-liposkulpturuvannya-v-dokart') }}">Ліпосакція</a></li>

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

                                            </ul>
                                        </li>
                                    </ul>
                                </li>


                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('main.timetable') }}">{{ __('header.menu.schedule') }}</a>
                                </li>

                                <li class="rd-nav-item @if(request()->routeIs('main.team')) active @endif"><a class="rd-nav-link" href="{{ route('main.team') }}">{{ __('header.menu.doctors') }}</a></li>

                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('main.testimonials') }}">{{ __('header.menu.testimonials') }}</a></li>


                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('main.prices') }}">{{ __('header.menu.price') }}</a>

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

                                <li class="rd-nav-item"><a class="rd-nav-link"  href="{{ route('main.contacts') }}">{{ __('header.menu.contacts') }}</a>
                                </li>

                                <li class="rd-nav-item @if(request()->routeIs('main.about')) active @endif"><a class="rd-nav-link" href="{{ route('main.about') }}" style=" white-space: nowrap;" > {{ __('header.menu.about') }}</a>
                                </li>

                                <li class="rd-nav-item"><a class="rd-nav-link"  href="{{ route('main.telemed') }}">{{ __('header.menu.telemed') }}</a>

                                <li class="rd-nav-item"><a class="rd-nav-link"  href="{{ route('main.blog') }}">{{ __('header.menu.blog') }}</a>
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
                                        <ul class="rd-menu rd-navbar-dropdown" >
                                            @foreach (['en', 'uk', 'ru'] as $lang)
                                                <li class="rd-dropdown-item">
                                                    <a class="rd-dropdown-link" href="{{ route('switch.language', ['locale' => $lang]) }}">  {{ __('header.menu_ext.languages.'.$lang) }}</a>
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
