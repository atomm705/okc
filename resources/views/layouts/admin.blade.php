<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/" data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo" data-framework="laravel" data-template="vertical-menu-laravel-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Sneat - HTML Laravel Free Admin Template </title>
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5, bootstrap 5 free, free admin template">
    <!-- laravel CRUD token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-free-laravel/">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/favicon/favicon.ico" />


    <!-- Include Styles -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="preload" as="style" href="{{ asset('admin-css/boxicons-Dt7lfYs-.css') }}" /><link rel="stylesheet" href="{{ asset('admin-css/boxicons-Dt7lfYs-.css') }}" />
    <!-- Core CSS -->
    <link rel="preload" as="style" href="{{ asset('admin-css/core-DzPXZmyI.css') }}" /><link rel="preload" as="style" href="{{ asset('admin-css/theme-default-AfcCBw0u.css') }}" /><link rel="preload" as="style" href="{{ asset('admin-css/demo-1L0brNjh.css') }}" /><link rel="stylesheet" href="{{ asset('admin-css/core-DzPXZmyI.css') }}" /><link rel="stylesheet" href="{{ asset('admin-css/theme-default-AfcCBw0u.css') }}" /><link rel="stylesheet" href="{{ asset('admin-css/demo-1L0brNjh.css') }} " />
    <!-- Vendor Styles -->
    <link rel="preload" as="style" href=" {{ asset('admin-css/perfect-scrollbar-iCvgFzBc.css') }}" /><link rel="stylesheet" href=" {{ asset('admin-css/perfect-scrollbar-iCvgFzBc.css') }}" /><link rel="preload" as="style" href="{{ asset('admin-css/demo-1L0brNjh.css') }} " /><link rel="stylesheet" href="{{ asset('admin-css/apex-charts-BWmKPyo3.css') }}" />
    <!-- Page Styles -->

    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- laravel style -->
    <link rel="modulepreload" href=" {{ asset('admin-js/helpers-6QHUpx47.js') }}" /><script type="module" src="{{ asset('admin-js/helpers-6QHUpx47.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <link rel="modulepreload" href="{{ asset('admin-js/config-DRrfh9f1.js') }}" /><script type="module" src="{{ asset('admin-js/config-DRrfh9f1.js') }}"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5DDHKGP'); </script>
</head>

<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>



    <div class="admin-container">
        <aside>
        @include('layouts.aside')
        </aside>

        <main class="admin-content">
            <div class="layout-wrapper layout-content-navbar ">
                <div class="layout-container">
                    <div class="layout-page">
                        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

                            <!--  Brand demo (display only for navbar-full and hide on below xl) -->

                            <!-- ! Not required for layout-without-menu -->
                            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0  d-xl-none ">
                                <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                                    <i class="bx bx-menu bx-md"></i>
                                </a>
                            </div>

                            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                                <!-- Search -->
                                <div class="navbar-nav align-items-center">
                                    <div class="nav-item d-flex align-items-center">
                                        <i class="bx bx-search bx-md"></i>
                                        <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2" placeholder="Search..." aria-label="Search...">
                                    </div>
                                </div>
                                <!-- /Search -->
                                <ul class="navbar-nav flex-row align-items-center ms-auto">

                                    <!-- Place this tag where you want the button to render. -->
                                    <li class="nav-item lh-1 me-4">
                                        <a class="github-button" href="https://github.com/themeselection/sneat-bootstrap-html-laravel-admin-template-free" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/sneat-html-laravel-admin-template-free on GitHub">Star</a>
                                    </li>

                                    <!-- User -->
                                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                        <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <div class="avatar avatar-online">
                                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar avatar-online">
                                                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0">John Doe</h6>
                                                            <small class="text-muted">Admin</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="dropdown-divider my-1"></div>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('admin.user-profile') }}">
                                                    <i class="bx bx-user bx-md me-3"></i><span>My Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="bx bx-cog bx-md me-3"></i><span>Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                  <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 bx bx-credit-card bx-md me-3"></i><span class="flex-grow-1 align-middle">Billing Plan</span>
                    <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                  </span>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="dropdown-divider my-1"></div>
                                            </li>
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-dropdown-link :href="route('logout')"
                                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--/ User -->
                                </ul>
                            </div>
                        </nav>

                        @yield('content')

                    </div>
                </div>
            </div>
        </main>
    </div>


<div class="buy-now">
    <a href="https://themeselection.com/item/sneat-dashboard-pro-laravel/" target="_blank" class="btn btn-danger btn-buy-now">Upgrade To Pro</a>
</div>

<div class="layout-overlay layout-menu-toggle"></div>
<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>
<!-- Include Scripts -->
<!-- BEGIN: Vendor JS-->

<link rel="modulepreload" href="{{ asset('admin-js/jquery-8QpT-S21.js') }}" /><link rel="modulepreload" href="{{ asset('admin-js/_commonjsHelpers-Cpj98o6Y.js') }}" /><link rel="modulepreload" href="{{ asset('admin-js/popper-DBXphNvS.js') }}" /><link rel="modulepreload" href="{{ asset('admin-js/bootstrap-B-W6M1Y3.js') }}" /><link rel="modulepreload" href="{{ asset('admin-js/perfect-scrollbar-DPYX2UL_.js') }}" /><link rel="modulepreload" href="{{ asset('admin-js/menu-Bldkajpn.js') }}" /><script type="module" src="{{ asset('admin-js/query-8QpT-S21.js') }}"></script><script type="module" src="{{ asset('admin-js/popper-DBXphNvS.js') }}"></script><script type="module" src="{{ asset('admin-js/bootstrap-B-W6M1Y3.js') }}"></script><script type="module" src="{{ asset('admin-js/perfect-scrollbar-DPYX2UL_.js') }}"></script><script type="module" src="{{ asset('admin-js/menu-Bldkajpn.js') }}"></script>
<link rel="modulepreload" href="{{ asset('admin-js/apexcharts-C2C4GUK1.js') }}" /><link rel="modulepreload" href="{{ asset('admin-js/_commonjsHelpers-Cpj98o6Y.js') }}" /><script type="module" src="{{ asset('admin-js/apexcharts-C2C4GUK1.js') }}"></script><!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<link rel="modulepreload" href="{{ asset('admin-js/main-CWila6Zz.js') }}" /><script type="module" src="{{ asset('admin-js/main-CWila6Zz.js') }}"></script>
<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<link rel="modulepreload" href="{{ asset('admin-js/dashboards-analytics-CRrulBu-.js') }}" /><script type="module" src="{{ asset('admin-js/dashboards-analytics-CRrulBu-.js') }}"></script><!-- END: Page JS-->

</body>

</html>





