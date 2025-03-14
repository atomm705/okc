<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <a href="{{ url('lang/en') }}">English</a> |
    <a href="{{ url('lang/ua') }}">Українська</a>

    <!--<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900"> -->


                   <div class="preloader">
                        <div class="preloader-body">
                            <div class="cssload-container">
                                <div class="cssload-double-torus"></div>
                            </div>
                            <p>&nbsp;</p>
                        </div>
                    </div>



                    <div class="page">




                        <header class="section page-header header-absolute">
                            <!--RD Navbar-->
                            <div class="rd-navbar-wrap">
                                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                                    <div class="rd-navbar-aside-outer rd-navbar-collapse">
                                        <!--RD Navbar Brand-->
                                        <div class="rd-navbar-aside">
                                            <div class="rd-navbar-brand">
                                                <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="{{ asset('images/logo-default-154x53.png') }}" alt="" width="77" height="26"/><img class="brand-logo-light" src="images/logo-inverse-154x53.png" alt="" width="77" height="26"/></a>
                                            </div>
                                            <div class="contacts-wrap">
                                                <address class="contact-info reveal-sm-inline-block text-start offset-none">
                                                    <div class="p unit unit-spacing-xs unit-horizontal">
                                                        <div class="unit-left"><span class="icon icon-xs icon-circle icon-white-17 mdi mdi-phone"></span></div>
                                                        <div class="unit-body"><a class="text-white" href="tel:#">1-800-1234-567</a><br><a class="text-white" href="tel:#">1-800-3214-654</a></div>
                                                    </div>
                                                </address>
                                                <address class="contact-info reveal-sm-inline-block text-start">
                                                    <div class="p unit unit-horizontal unit-spacing-xs">
                                                        <div class="unit-left"><span class="icon icon-xs icon-circle icon-white-17 mdi mdi-map-marker"></span></div>
                                                        <div class="unit-body"><a class="text-white" href="#">2130 Fulton Street San Diego<br>CA 94117-1080 USA</a></div>
                                                    </div>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rd-navbar-main-outer">
                                        <div class="rd-navbar-main">
                                            <!--RD Navbar Panel-->
                                            <div class="rd-navbar-panel">
                                                <!--RD Navbar Toggle-->
                                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                                <!--RD Navbar Brand-->
                                                <div class="rd-navbar-brand">
                                                    <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="{{ asset('images/logo-default-154x53.png') }}"  alt="" width="77" height="26"/><img class="brand-logo-light" src="images/logo-inverse-154x53.png" alt="" width="77" height="26"/></a>
                                                </div>
                                            </div>
                                            <div class="rd-navbar-main-element">
                                                <div class="rd-navbar-nav-wrap">
                                                    <ul class="rd-navbar-nav">
                                                        <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                                                        </li>
                                                        <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">About</a>
                                                        </li>
                                                        <li class="rd-nav-item"><a class="rd-nav-link" href="team.html">Team</a>
                                                        </li>
                                                        <li class="rd-nav-item"><a class="rd-nav-link">Pages</a>
                                                            <ul class="rd-menu rd-navbar-megamenu">
                                                                <li class="rd-megamenu-item">
                                                                    <h6 class="rd-megamenu-title">Elements</h6>
                                                                    <ul class="rd-megamenu-list">
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Typography</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Forms</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="buttons.html">Buttons</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-system.html">Grid</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tabs-and-accordions.html">Tabs and Accordions</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Progress bars</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="icons.html">Icons</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tables.html">Tables</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="rd-megamenu-item">
                                                                    <h6 class="rd-megamenu-title">Pages 1</h6>
                                                                    <ul class="rd-megamenu-list">
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="team-member.html">Team Member Profile</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="careers.html">Careers</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="faq.html">FAQ Page</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="pricing.html">Pricing</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="coming-soon.html">Coming Soon</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="maintenance.html">Maintenance</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="under-construction.html">Under Construction</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="login.html">Login/Register</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="rd-megamenu-item">
                                                                    <h6 class="rd-megamenu-title">Pages 2</h6>
                                                                    <ul class="rd-megamenu-list">
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="clients.html">Clients</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="partners.html">Partners</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">Privacy Policy</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">Search Results</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="404.html">404 Page</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="503.html">503 Page</a></li>
                                                                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="make-an-appointment.html">Make an Appointment</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="rd-nav-item"><a class="rd-nav-link" href="services.html">Services</a>
                                                        </li>
                                                        <li class="rd-nav-item"><a class="rd-nav-link" href="departments.html">Departments</a>
                                                        </li>
                                                        <li class="rd-nav-item"><a class="rd-nav-link" href="timetable.html">Timetable</a>
                                                        </li>
                                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#">Gallery</a>
                                                            <ul class="rd-menu rd-navbar-dropdown">
                                                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-gallery.html">Grid Gallery</a>
                                                                </li>
                                                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-gallery-no-padding.html">Gallery Without Padding</a>
                                                                </li>
                                                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="masonry-gallery.html">Masonry Gallery</a>
                                                                </li>
                                                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="cobbles-gallery.html">Cobbles Grid</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="rd-nav-item"><a class="rd-nav-link" href="blog-masonry.html">Blog</a>
                                                            <ul class="rd-menu rd-navbar-dropdown">
                                                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-masonry.html">Blog Masonry</a>
                                                                </li>
                                                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-modern.html">Blog Modern</a>
                                                                </li>
                                                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-classic.html">Blog Classic</a>
                                                                </li>
                                                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-grid.html">Blog Grid</a>
                                                                </li>
                                                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-post.html">Single Post</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--RD Navbar Search-->
                                                <div class="rd-navbar-search">
                                                    <button class="rd-navbar-search-toggle rd-navbar-fixed-element-2" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                                    <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                                                        <div class="form-wrap">
                                                            <label class="form-label" for="rd-navbar-search-form-input">Type and hit enter...</label>
                                                            <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                                            <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                                        </div>
                                                        <button class="rd-search-form-submit fa-search" type="submit"></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </header>
                        <!--RD Navbar-->




                        <div class="section swiper-container swiper-slider bg-default" data-swiper='{"autoplay":{"delay":5000},"effect":"fade"}'>
                        </div>
                                <div class="swiper-slide" data-slide-bg="{{ asset('images/slide-01.jpg') }}">
                                    <div class="swiper-caption">
                                        <div class="swiper-slide-caption">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 section-slider-custom to-front">
                                                        <div class="text-lg-start">
                                                            <h2>Years of<br class="d-block"> Experience
                                                            </h2>
                                                            <h5 class="d-none d-lg-block mw-400">Since our foundation, we've been delivering diagnostic solutions.</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">make an appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-slide-bg="{{ asset('images/slide-02.jpg') }}">
                                    <div class="swiper-caption">
                                        <div class="swiper-slide-caption">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-7 section-slider-custom">
                                                        <div class="text-lg-start">
                                                            <h2>Qualified Team<br class="d-block">of Experts</h2>
                                                            <h5 class="d-none d-lg-block mw-400">Our team of diagnosticians is always ready to help you be healthier.</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">make an appointment</a>
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
                        <section class="bg-default-liac bg-white-liac section section-md pt-xl-0">
                            <div class="container section-top-34 section-lg-top-0">
                                <div class="row g-0 justify-content-sm-center justify-content-xl-start offset-lg-top-34-negative sheldue text-sm-start to-front row-30">
                                    <div class="col-md-8 col-lg-5 col-xl-3">
                                        <div class="sheldue-item first">
                                            <div class="sheldue-item-body">
                                                <div class="icon icon-xs mdi mdi-calendar-clock text-white-50">
                                                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.25 13.0664H14.875V16.1133L17.5156 17.6875L16.7031 19.0586L13.25 17.0781V13.0664ZM17.5664 7.68359H2.43359V19.5664H7.46094C6.98698 18.5846 6.75 17.5013 6.75 16.3164C6.81771 14.1836 7.5625 12.4062 8.98438 10.9844C10.4062 9.5625 12.1836 8.81771 14.3164 8.75C15.5013 8.75 16.5846 8.98698 17.5664 9.46094V7.68359ZM2.43359 21.75C1.79036 21.75 1.26562 21.5384 0.859375 21.1152C0.453125 20.6921 0.25 20.1758 0.25 19.5664V4.43359C0.25 3.79036 0.453125 3.26562 0.859375 2.85938C1.26562 2.45312 1.79036 2.25 2.43359 2.25H3.5V0.0664062H5.68359V2.25H14.3164V0.0664062H16.5V2.25H17.5664C18.1758 2.25 18.6921 2.46159 19.1152 2.88477C19.5384 3.30794 19.75 3.82422 19.75 4.43359V11.0352C20.4271 11.7122 20.9518 12.5078 21.3242 13.4219C21.6966 14.3359 21.8997 15.3008 21.9336 16.3164C21.8659 18.4831 21.1211 20.2773 19.6992 21.6992C18.2773 23.1211 16.4831 23.8659 14.3164 23.9336C13.3008 23.8997 12.3359 23.6966 11.4219 23.3242C10.5078 22.9518 9.71224 22.4271 9.03516 21.75H2.43359ZM14.3164 11.0859C12.8268 11.1198 11.5911 11.6276 10.6094 12.6094C9.6276 13.5911 9.11979 14.8268 9.08594 16.3164C9.11979 17.806 9.6276 19.0501 10.6094 20.0488C11.5911 21.0475 12.8268 21.5638 14.3164 21.5977C15.806 21.5638 17.0501 21.0475 18.0488 20.0488C19.0475 19.0501 19.5638 17.806 19.5977 16.3164C19.5638 14.8268 19.0475 13.5911 18.0488 12.6094C17.0501 11.6276 15.806 11.1198 14.3164 11.0859Z" fill="white" fill-opacity="0.5" />
                                                    </svg>
                                                </div>
                                                <h6 class="d-inline-block inset-left-10 text-white">opening hours</h6>
                                                <hr>
                                                <div class="row offset-top-24 justify-content-sm-between text-gray-light">
                                                    <div class="col-sm-4">Mon–Fri</div>
                                                    <div class="col-sm-7 offset-top-10 offset-xs-top-0 text-sm-end">8:00am–7:00pm</div>
                                                    <div class="col-sm-4 offset-top-30 offset-xs-top-10">Saturday</div>
                                                    <div class="col-sm-7 offset-top-10 text-sm-end">9:00am–5:00pm</div>
                                                    <div class="col-sm-4 offset-top-30 offset-xs-top-10">Sunday</div>
                                                    <div class="col-sm-7 offset-top-10 text-sm-end">9:00am–3:00pm</div>
                                                </div>
                                            </div>
                                            <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect" href="timetable.html">view timetable</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-5 col-xl-3">
                                        <div class="sheldue-item light">
                                            <div class="sheldue-item-body">
                                                <div class="icon icon-xs mdi mdi-calendar-today text-white-50 ">

                                                </div>
                                                <h6 class="d-inline-block inset-left-10 text-white">doctors’ timetable</h6>
                                                <hr>
                                                <div class="offset-top-24 text-gray-light">
                                                    <p>The following is for guidance only to help you plan your appointment with a preferred doctor or nurse. It does not guarantee availability as the doctors or nurses may sometimes be attending to other duties.</p>
                                                </div>
                                            </div>
                                            <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect" href="timetable.html">view timetable</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-5 col-xl-3">
                                        <div class="sheldue-item">
                                            <div class="sheldue-item-body">
                                                <div class="icon icon-xs mdi mdi-phone text-white-50">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.16016 8.67969C4.97266 10.237 5.97982 11.6165 7.18164 12.8184C8.38346 14.0202 9.76302 15.0273 11.3203 15.8398L13.707 13.4531C14.0456 13.1484 14.418 13.0638 14.8242 13.1992C16.043 13.6055 17.3294 13.8086 18.6836 13.8086C18.9883 13.8086 19.2422 13.9102 19.4453 14.1133C19.6484 14.3164 19.75 14.5703 19.75 14.875V18.6836C19.75 18.9883 19.6484 19.2422 19.4453 19.4453C19.2422 19.6484 18.9883 19.75 18.6836 19.75C13.4701 19.6146 9.12826 17.8118 5.6582 14.3418C2.18815 10.8717 0.385417 6.52995 0.25 1.31641C0.25 1.01172 0.351562 0.757812 0.554688 0.554688C0.757812 0.351562 1.01172 0.25 1.31641 0.25H5.125C5.42969 0.25 5.68359 0.351562 5.88672 0.554688C6.08984 0.757812 6.19141 1.01172 6.19141 1.31641C6.19141 2.67057 6.39453 3.95703 6.80078 5.17578C6.9362 5.58203 6.85156 5.95443 6.54688 6.29297L4.16016 8.67969Z" fill="white" fill-opacity="0.5" />
                                                    </svg>
                                                </div>
                                                <h6 class="d-inline-block inset-left-10 text-white">appointments</h6>
                                                <hr>
                                                <div class="offset-top-24 text-gray-light">
                                                    <p>The first step towards a healthy life  is to schedule an appointment. Please contact our office by phone or complete the appointment request form.</p>
                                                </div>
                                            </div>
                                            <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect" href="make-an-appointment.html">make an appointment</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-5 col-xl-3">
                                        <div class="sheldue-item light last">
                                            <div class="sheldue-item-body">


                                                <div class="sheldue-item-body-title">
                                                    <div>
                                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.25 13.0664H14.875V16.1133L17.5156 17.6875L16.7031 19.0586L13.25 17.0781V13.0664ZM17.5664 7.68359H2.43359V19.5664H7.46094C6.98698 18.5846 6.75 17.5013 6.75 16.3164C6.81771 14.1836 7.5625 12.4062 8.98438 10.9844C10.4062 9.5625 12.1836 8.81771 14.3164 8.75C15.5013 8.75 16.5846 8.98698 17.5664 9.46094V7.68359ZM2.43359 21.75C1.79036 21.75 1.26562 21.5384 0.859375 21.1152C0.453125 20.6921 0.25 20.1758 0.25 19.5664V4.43359C0.25 3.79036 0.453125 3.26562 0.859375 2.85938C1.26562 2.45312 1.79036 2.25 2.43359 2.25H3.5V0.0664062H5.68359V2.25H14.3164V0.0664062H16.5V2.25H17.5664C18.1758 2.25 18.6921 2.46159 19.1152 2.88477C19.5384 3.30794 19.75 3.82422 19.75 4.43359V11.0352C20.4271 11.7122 20.9518 12.5078 21.3242 13.4219C21.6966 14.3359 21.8997 15.3008 21.9336 16.3164C21.8659 18.4831 21.1211 20.2773 19.6992 21.6992C18.2773 23.1211 16.4831 23.8659 14.3164 23.9336C13.3008 23.8997 12.3359 23.6966 11.4219 23.3242C10.5078 22.9518 9.71224 22.4271 9.03516 21.75H2.43359ZM14.3164 11.0859C12.8268 11.1198 11.5911 11.6276 10.6094 12.6094C9.6276 13.5911 9.11979 14.8268 9.08594 16.3164C9.11979 17.806 9.6276 19.0501 10.6094 20.0488C11.5911 21.0475 12.8268 21.5638 14.3164 21.5977C15.806 21.5638 17.0501 21.0475 18.0488 20.0488C19.0475 19.0501 19.5638 17.806 19.5977 16.3164C19.5638 14.8268 19.0475 13.5911 18.0488 12.6094C17.0501 11.6276 15.806 11.1198 14.3164 11.0859Z" fill="white" fill-opacity="0.5" />
                                                        </svg>
                                                    </div>


                                                    <div>
                                                        <h6 class="d-inline-block inset-left-10 text-white">emergency cases</h6>
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="offset-top-24">
                                                    <h5 class="font-weight-bold"><a class="text-white" href="tel:#">1-800-1234-567</a></h5>
                                                    <p class="text-gray-light">Call us!</p>
                                                </div>
                                            </div>
                                            <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect" href="contacts.html">Contact page</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--What makes us different-->
                        <section class="section-lg bg-default-liac" >
                            <div class="container text-center">
                                <h3>What Makes Us Different</h3>
                                <div class="row offset-top-60 row-50">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="icon icon-xlg icon-circle icon-default icon-pills-xl"></div>
                                        <h5 class="font-weight-bold text-gray-darkest">Qualified Specialists</h5>
                                        <p>We hire the best specialists to deliver top-notch diagnostic services for you.</p>
                                    </div>
                                    <div class="col-md-6 col-lg-4 offset-md-top-0">
                                        <div class="icon icon-xlg icon-circle icon-default icon-doctor-xl"></div>
                                        <h5 class="font-weight-bold text-gray-darkest">Modern Equipment</h5>
                                        <p>We use the first-class medical equipment for timely diagnostics of various diseases.</p>
                                    </div>
                                    <div class="col-md-6 col-lg-4 offset-md-top-0">
                                        <div class="icon icon-xlg icon-circle icon-default icon-medical-car-xl"></div>
                                        <h5 class="font-weight-bold text-gray-darkest">Emergency Diagnostics</h5>
                                        <p>Our emergency diagnostics services help you get the most accurate diagnosis in a minimal time.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Material Parallax-->
                        <section class="parallax-container" data-parallax-img="{{ asset('../images/background-03-1920x980.jpg ') }}">
                            <div class="parallax-content section-98 section-sm-110 context-dark">
                                <div class="container text-start">
                                    <div class="row justify-content-sm-center justify-content-lg-start">
                                        <div class="col-md-10 col-lg-8 col-xl-5">
                                            <h2>All Kinds<br class="d-none d-xl-inline-block">of Diagnostics</h2>
                                            <p class="offset-top-30 text-white">Medina offers the region’s most comprehensive range of diagnostic services, from MRI to X-ray.</p>
                                            <div class="offset-top-30"><a class="btn btn-ellipse btn-white" href="make-an-appointment.html">free consultation</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- main services-->
                        <section class="section-lg bg-default section">
                            <div class="container">
                                <h3 class="text-center">Our Services</h3>
                                <div class="offset-top-41">
                                    <p class="custom-paragraph">At our clinic, you can experience the best and the most extensive range of diagnostic services in the state. Feel free to browse our website for more information.</p>
                                </div>
                                <div class="row offset-top-60 text-lg-start row-30">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="service"><img class="img-responsive"  src=" {{ asset('images/home-01-320x320.jpg') }}" width="320" height="320" alt=""/><a class="service-desc h6" href="services.html">Pediatrics</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 offset-sm-top-0">
                                        <div class="service"><img class="img-responsive" src=" {{ asset('images/home-02-320x320.jpg') }}" width="320" height="320" alt=""/><a class="service-desc h6" href="services.html">MRI of the brain</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 offset-md-top-0">
                                        <div class="service"><img class="img-responsive" src=" {{ asset('images/home-03-320x320.jpg') }}" width="320" height="320" alt=""/><a class="service-desc h6" href="services.html">x-ray diagnostic</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="service"><img class="img-responsive" src=" {{ asset('images/home-04-320x320.jpg') }}" width="320" height="320" alt=""/><a class="service-desc h6" href="services.html">laboratory services</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="service"><img class="img-responsive" src=" {{ asset('images/home-05-320x320.jpg') }}" width="320" height="320" alt=""/><a class="service-desc h6" href="services.html">pregnancy</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="service"><img class="img-responsive" src=" {{ asset('images/home-06-320x320.jpg') }}" width="320" height="320" alt=""/><a class="service-desc h6" href="services.html">Best Equipment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Our Team-->
                        <section class="section section-md p-xl-0">
                            <div class="container-fluid p-0">
                                <div class="justify-content-sm-center row-30 row g-0">
                                    <!-- Thumbnail Josip-->
                                    <figure class="thumbnail-josip thumbnail-big"><a href="team-member.html"><img width="384" height="410"  src=" {{ asset('images/our-team-05-384x410.jpg') }}" alt=""/></a>
                                        <div class="thumbnail-desc">
                                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Scott Riley</h5>
                                            <p class="d-none d-lg-block font-italic text-white offset-top-0">Chief Medical Officer, Pathologist</p>
                                        </div>
                                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">view full profile</a></figcaption>
                                    </figure>
                                    <!-- Thumbnail Josip-->
                                    <figure class="thumbnail-josip thumbnail-big"><a href="team-member.html"><img width="384" height="410"  src=" {{ asset('images/our-team-06-384x410.jpg') }}" alt=""/></a>
                                        <div class="thumbnail-desc">
                                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Jane Fowler</h5>
                                            <p class="d-none d-lg-block font-italic text-white offset-top-0">Clinical Laboratory Technologist</p>
                                        </div>
                                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">view full profile</a></figcaption>
                                    </figure>
                                    <!-- Thumbnail Josip-->
                                    <figure class="thumbnail-josip thumbnail-big offset-md-top-0 odd"><a href="team-member.html"><img width="384" height="410" src=" {{ asset('images/our-team-07-384x410.jpg') }}" alt=""/></a>
                                        <div class="thumbnail-desc">
                                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Eric Snyder</h5>
                                            <p class="d-none d-lg-block font-italic text-white offset-top-0">MRI Technologist</p>
                                        </div>
                                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">view full profile</a></figcaption>
                                    </figure>
                                    <!-- Thumbnail Josip-->
                                    <figure class="thumbnail-josip thumbnail-big offset-md-top-0"><a href="team-member.html"><img width="384" height="410"  src=" {{ asset('images/our-team-08-384x410.jpg') }}" alt=""/></a>
                                        <div class="thumbnail-desc">
                                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Martha Schmidt</h5>
                                            <p class="d-none d-lg-block font-italic text-white offset-top-0">EKG Technician</p>
                                        </div>
                                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">view full profile</a></figcaption>
                                    </figure>
                                    <!-- Thumbnail Josip-->
                                    <figure class="thumbnail-josip thumbnail-big "><a href="team-member.html"><img width="384" height="410" src=" {{ asset('images/our-team-09-384x410.jpg') }}" alt=""/></a>
                                        <div class="thumbnail-desc">
                                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. James Wilson</h5>
                                            <p class="d-none d-lg-block font-italic text-white offset-top-0">Radiology Technician</p>
                                        </div>
                                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">view full profile</a></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </section>
                        <!-- testimonials-->
                        <section class="section-lg bg-default-liac">
                            <div class="container">
                                <h3 class="text-center">Testimonials</h3>
                                <div class="offset-top-66">
                                    <div class="owl-carousel owl-carousel-default owl-carousel-class-light" data-loop="false" data-items="1" data-dots="true" data-mouse-drag="false" data-lg-items="2" data-nav="false" data-owl="{&quot;dots&quot;:true,&quot;nav&quot;:false,&quot;autoplayTimeout&quot;:3500}">
                                        <div class="item">
                                            <blockquote class="quote quote-classic">
                                                <div class="quote-body">
                                                    <p class="font-italic text-gray-dark">
                                                        <q>I had a colonoscopy at Medina Diagnostic Center. From the moment I entered the center, I was greeted and treated warmly and respectfully and it was the best experience.</q>
                                                    </p>
                                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60"  src=" {{ asset('images/user-betty-wade-60x60.jpg') }}" alt=""/></div>
                                                        <div class="unit-body unit-item-wide">
                                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                                <cite class="text-normal">Betty Wade</cite>
                                                            </h5>
                                                            <p class="quote-desc text-capitalize text-gray font-italic">Patient</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="item">
                                            <blockquote class="quote quote-classic">
                                                <div class="quote-body">
                                                    <p class="font-italic text-gray-dark">
                                                        <q>I would like to thank and compliment the staff at Medina, including the outpatient, laboratory staff and cardiac division during my stay at your facility on July 9th and 10th.</q>
                                                    </p>
                                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60"  src=" {{ asset('images/user-bryan-green-60x60.jpg') }}" alt=""/></div>
                                                        <div class="unit-body unit-item-wide">
                                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                                <cite class="text-normal">Bryan Green</cite>
                                                            </h5>
                                                            <p class="quote-desc text-capitalize text-gray font-italic">Patient</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="item">
                                            <blockquote class="quote quote-classic">
                                                <div class="quote-body">
                                                    <p class="font-italic text-gray-dark">
                                                        <q>I had a colonoscopy at Medina Diagnostic Center. From the moment I entered the center, I was greeted and treated warmly and respectfully and it was the best experience.</q>
                                                    </p>
                                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60"  src=" {{ asset('images/user-bryan-green-60x60.jpg') }}" alt=""/></div>
                                                        <div class="unit-body unit-item-wide">
                                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                                <cite class="text-normal">Bryan Green</cite>
                                                            </h5>
                                                            <p class="quote-desc text-capitalize text-gray font-italic">Patient</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="item">
                                            <blockquote class="quote quote-classic">
                                                <div class="quote-body">
                                                    <p class="font-italic text-gray-dark">
                                                        <q>I would like to thank and compliment the staff at Medina, including the outpatient, laboratory staff and cardiac division during my stay at your facility on July 9th and 10th.</q>
                                                    </p>
                                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60"  src=" {{ asset('images/user-betty-wade-60x60.jpg') }}" alt=""/></div>
                                                        <div class="unit-body unit-item-wide">
                                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                                <cite class="text-normal">Betty Wade</cite>
                                                            </h5>
                                                            <p class="quote-desc text-capitalize text-gray font-italic">Patient</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- RD Parallax-->
                        </section>
                        <section class="parallax-container_2 " >
                            <div class="parallax-content section-98 section-sm-110 context-dark">
                                <div class="container text-start">
                                    <div class="row justify-content-sm-center justify-content-lg-start">
                                        <div class="col-md-10 col-lg-8 col-xl-5">
                                            <h2>Pediatric<br class="d-none d-xl-inline-block">Diagnostics</h2>
                                            <p class="offset-top-30 text-white">Our center provides a vast range of pediatric diagnostic services for children all over our state.</p>
                                            <div class="offset-top-30"><a class="btn btn-ellipse btn-white" href="make-an-appointment.html">free consultation</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- latest blog posts-->
                        <section class="section-98 section-sm-110">
                            <div class="container">
                                <h3 class="text-center text-lg-start">Latest Blog Posts</h3>
                                <div class="row justify-content-sm-center offset-top-60">
                                    <div class="col-md-8 col-lg-4">
                                        <!-- Post Modern-->
                                        <article class="post post-modern post-modern-classic">
                                            <!-- Post media-->
                                            <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src=" {{ asset('images/post-13-370x250.jpg') }}" alt=""/></a>
                                            </div>
                                            <!-- Post content-->
                                            <div class="post-content text-start">
                                                <!-- Post Title-->
                                                <div class="post-title offset-top-8">
                                                    <h5 class="font-weight-bold"><a href="single-post.html">Reasons to Visit a Breast Specialist</a></h5>
                                                </div>
                                                <ul class="list-inline list-inline-dashed">
                                                    <li>June 21, 2023 at 8:12pm</li>
                                                    <li><a class="text-primary" href="blog-masonry.html">News</a></li>
                                                </ul>
                                                <!-- Post Body-->
                                                <div class="post-body">
                                                    <p>There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the importance of visiting...</p>
                                                </div>
                                                <div class="tags group group-sm">
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-8 col-lg-4 offset-top-50 offset-md-top-0">
                                        <!-- Post Modern-->
                                        <article class="post post-modern post-modern-classic">
                                            <!-- Post media-->
                                            <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src=" {{ asset('images/post-14-370x250.jpg') }}"  alt=""/></a>
                                            </div>
                                            <!-- Post content-->
                                            <div class="post-content text-start">
                                                <!-- Post Title-->
                                                <div class="post-title offset-top-8">
                                                    <h5 class="font-weight-bold"><a href="single-post.html">Picking the Right Diagnostic Services for Efficient Results</a></h5>
                                                </div>
                                                <ul class="list-inline list-inline-dashed">
                                                    <li>June 21, 2023 at 8:12pm</li>
                                                    <li><a class="text-primary" href="blog-masonry.html">News</a></li>
                                                </ul>
                                                <!-- Post Body-->
                                                <div class="post-body">
                                                    <p>There have been a lot of cases in which people were not provided with accurate reports that eventually affected their medical treatment. There is always...</p>
                                                </div>
                                                <div class="tags group group-sm">
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-8 col-lg-4 offset-top-50 offset-md-top-0">
                                        <!-- Post Modern-->
                                        <article class="post post-modern post-modern-classic">
                                            <!-- Post media-->
                                            <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src=" {{ asset('images/post-15-370x250.jpg') }}"  alt=""/></a>
                                            </div>
                                            <!-- Post content-->
                                            <div class="post-content text-start">
                                                <!-- Post Title-->
                                                <div class="post-title offset-top-8">
                                                    <h5 class="font-weight-bold"><a href="single-post.html">Preparing for an ECG in 8 Easy Steps: Tips From Our Diagnosticians</a></h5>
                                                </div>
                                                <ul class="list-inline list-inline-dashed">
                                                    <li>June 21, 2023 at 8:12pm</li>
                                                    <li><a class="text-primary" href="blog-masonry.html">News</a></li>
                                                </ul>
                                                <!-- Post Body-->
                                                <div class="post-body">
                                                    <p>An ECG stands for an "electrocardiogram," which is a test that measures and records the electrical activity of the heart. It is used by doctors to obtain...</p>
                                                </div>
                                                <div class="tags group group-sm">
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="offset-top-50 text-center text-lg-start"><a class="btn btn-ellipse btn-primary" href="blog-grid.html">View all blog posts</a></div>
                            </div>
                        </section>
                        <section class="section">
                            <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
                            <!--Please note that YOUR_API_KEY should replaced with your key.-->
                            <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
                            <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5"  data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
                                <div class="google-map"></div>
                                <ul class="google-map-markers">
                                    <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                                </ul>
                            </div>
                        </section>
                        <!-- Page Footer-->
                        <footer class="section-relative section-top-66 section-bottom-34 page-footer bg-accent context-dark footer-classic">
                            <div class="container">
                                <div class="row justify-content-md-center text-xl-start">
                                    <div class="col-md-8 col-lg-12">
                                        <div class="row justify-content-sm-center row-40">
                                            <div class="col-sm-10 col-lg-4 text-start order-lg-3 inset-lg-left-50">
                                                <h6>Newsletter</h6>
                                                <hr class="text-subline">
                                                <p class="text-white-70">Enter your email address to receive up-to-date news, new patient information and other useful stuff, delivered right to your inbox.</p>
                                                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                                                    <div class="form-wrap input-group input-group-custom input-group-sm no-wrap">
                                                        <label class="form-label" for="subscribe-form-email">Your e-mail...</label>
                                                        <input class="form-input mr-2">
                                                        <button class="btn btn-sm btn-darkest" type="submit">Subscribe</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-10 text-sm-start col-lg-4 order-lg-2">
                                                <h6>contact us</h6>
                                                <hr class="text-subline">
                                                <div class="text-center text-xl-start">
                                                    <address class="contact-info d-md-inline-block text-start">
                                                        <div class="p unit unit-spacing-xxs flex-row">
                                                            <div class="unit-left"><span class="icon icon-xxs mdi mdi-phone text-white"></span></div>
                                                            <div class="unit-body"><a class="text-white-70" href="tel:#">1-800-1234-567</a><span class="text-white-70">, </span><a class="text-white-70" href="tel:#">1-800-3214-321</a></div>
                                                        </div>
                                                        <div class="p unit flex-row unit-spacing-xxs">
                                                            <div class="unit-left"><span class="icon icon-xxs mdi mdi-map-marker text-white"></span></div>
                                                            <div class="unit-body"><a class="text-white-70" href="#">2130 Fulton Street San Diego, CA 94117-1080 USA</a></div>
                                                        </div>
                                                        <div class="p unit unit-spacing-xxs flex-row offset-top-16">
                                                            <div class="unit-left"><span class="icon icon-xxs mdi mdi-email-outline text-white"></span></div>
                                                            <div class="unit-body"><a class="text-white-70 text-java" href="mailto:#">info@demolink.org</a></div>
                                                        </div>
                                                    </address>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-lg-4 order-lg-1 text-center text-lg-start">
                                                <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src=" {{ asset('images/logo-default-154x53.png') }}"  alt="" width="77" height="26"/><img class="brand-logo-light"  src=" {{ asset('images/logo-inverse-154x53.png') }}" alt="" width="77" height="26"/></a>
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
                            <div class="container offset-top-50 offset-md-top-60">
                                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Medina diagnostic center</span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
                            </div>
                        </footer>
                    </div>
                    <div class="snackbars" id="form-output-global"></div>

    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

     <!--            </div>
            </div>
        </div>
    </div>-->
</x-app-layout>
