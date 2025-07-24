<header class="section page-header  @if(request()->routeIs('main.index') || request()->routeIs('main.blepharoplastika') || request()->routeIs('main.plastichna-khururgiya') || request()->routeIs('services.inektsionnaya-terapiya') || request()->routeIs('services.plazmoterapiya') || request()->routeIs('services.rf-lifting')|| request()->routeIs('services.lazernaya-epilyatsiya')|| request()->routeIs('services.lazernoe-omolozhenie')|| request()->routeIs('services.co2') || request()->routeIs('services.checkup') || request()->routeIs('services.panoptix')|| request()->routeIs('services.oklens')|| request()->routeIs('services.tests')|| request()->routeIs('services.liposaktsiya-ta-liposkulpturuvannya-v-dokart')) header-absolute @endif">
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-subpage" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle  {{ !Route::is('main.index') ? 'rd-navbar-collapse-toggle1' : '' }} rd-navbar-fixed-element-1"
                 data-rd-navbar-toggle=".rd-navbar-collapse">
                <span></span>
            </div>
            <div class="rd-navbar-aside-outer rd-navbar-collapse  {{ !Route::is('main.index') ? 'services-aside-mobil-color' : '' }}" style="padding-top: 30px; ">

                <div class="rd-navbar-aside">
                    <div class="rd-navbar-brand">
                       <a class="brand" href="{{ route('main.index') }}"><img class="brand-logo-dark" src="{{ asset('images/logo-brand.webp') }}" alt="" width="30" height="20"/><img class="brand-logo-light" src="{{ asset('images/logo-brand.webp') }}" alt="" width="77" height="20"/></a>
                    </div>
                    <div class="contacts-wrap">
                        <address class="contact-info reveal-sm-inline-block text-start custom-styles-address">
                            <div class="p unit unit-horizontal unit-spacing-xs">
                                <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light text-primary  fa-clock-o [&#xf017;]"></span></div>
                                <div class="unit-body unit-body-first"><a href="#" class="{{ !Route::is('main.index') ? 'color-services-mobil' : '' }}   @if(request()->routeIs('main.index') || request()->routeIs('main.plastichna-khururgiya')|| request()->routeIs('services.oklens')) text-white @endif">ПН-СБ
                                        <br> с 9-00 до 17-00
                                    </a>
                                </div>
                            </div>
                        </address>
                        <address class="contact-info reveal-sm-inline-block text-start offset-none">
                            <div class="p unit unit-spacing-xs unit-horizontal">
                                <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light text-primary mdi mdi-phone"></span></div>
                                <div class="unit-body align-content-center "><a href="tel:#" class="{{ !Route::is('main.index') ? 'color-services-mobil' : '' }} @if(request()->routeIs('main.index') || request()->routeIs('main.plastichna-khururgiya') || request()->routeIs('services.oklens')) text-white @endif">0 (800) 317-317
                                    </a></div>
                            </div>
                        </address>
                        <address class="contact-info reveal-sm-inline-block text-start">
                            <div class="p unit unit-horizontal unit-spacing-xs">
                                <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light text-primary mdi mdi-map-marker"></span></div>
                                <div class="unit-body unit-body-third"><a href="#" class="{{ !Route::is('main.index') ? 'color-services-mobil' : '' }} @if(request()->routeIs('main.index') || request()->routeIs('main.plastichna-khururgiya') || request()->routeIs('services.oklens')) text-white @endif">Україна, м. Харків,
                                        <br> вул. Миколи Хвильового (Маяковського), 24</a>
                                </div>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-main-outer header-desktop-relative">
                <div class="rd-navbar-main header-desktop-absolute">
                    <div class="rd-navbar-panel"
                         @if (!Route::is('main.index'))
                            style="background: white; box-shadow: 0 3px 14px 0 rgba(0, 0, 0, 0.2);"
                         @endif>
                        <button class="rd-navbar-toggle  {{ !Route::is('main.index') ? 'rd-navbar-toggle2' : '' }}" data-rd-navbar-toggle=".rd-navbar-nav-wrap" ><span class="color-mobil "></span></button>

                        <div class="rd-navbar-brand ">
                            <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="{{ asset('images/logo-brand.webp') }}" alt="" width="77" height="20"/><img class="brand-logo-light" src="{{ asset('images/logo-brand.webp') }}" alt="" width="77" height="20"/></a>
                        </div>

                        <div class="content-mobil"></div>

                    </div>
                    <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap">

                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item @if(request()->routeIs('main.index')) active @endif">
                                    <a class="rd-nav-link"href="{{ route('main.index') }}">{{ __('header.menu.index') }}</a>
                                </li>

                                <li class="rd-nav-item">
                                        <span class="rd-nav-link rd-navbar-submenu-toggle category-open" style='display: flex; font-family: "Lato", Helvetica, Arial, sans-serif'>{{ __('header.menu.services') }}</span>
                                        <ul class="rd-menu rd-navbar-megamenu">
                                            @foreach($mainMenu as $item)
                                                <li class="rd-megamenu-item">
                                                    <h6 class="rd-megamenu-title">{{ $item->translation->name }}</h6>
                                                    <ul class="rd-megamenu-list">
                                                        @foreach($item->categories as $category)
                                                            @if(isset($category->slug))<li class="rd-megamenu-list-item">
                                                                <a class="rd-megamenu-list-link" href="{{ route('main.category', ['category_slug' => $category->slug]) }}" >{{ $category->translation->name ?? '' }}</a>
                                                            </li>@endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('main.timetable') }}">{{ __('header.menu.schedule') }}</a>
                                </li>

                                <li class="rd-nav-item @if(request()->routeIs('main.team')) active @endif"><a class="rd-nav-link" href="{{ route('main.team') }}">{{ __('header.menu.doctors') }}</a></li>

                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('main.testimonials') }}">{{ __('header.menu.testimonials') }}</a></li>


                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('main.prices') }}">{{ __('header.menu.price') }}</a>


                                <li class="rd-nav-item"><a class="rd-nav-link"  href="{{ route('main.contacts') }}">{{ __('header.menu.contacts') }}</a>
                                </li>

                                <li class="rd-nav-item @if(request()->routeIs('main.about')) active @endif"><a class="rd-nav-link" href="{{ route('main.about') }}" style=" white-space: nowrap;" > {{ __('header.menu.about') }}</a>
                                </li>

                                <li class="rd-nav-item"><a class="rd-nav-link"  href="{{ route('main.telemed') }}">{{ __('header.menu.telemed') }}</a>

                                <li class="rd-nav-item"><a class="rd-nav-link"  href="{{ route('main.blog') }}">{{ __('header.menu.blog') }}</a>
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
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
