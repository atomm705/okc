<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style layout-compact layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('admin/images/favicon.png') }}?v=2" type="image/png" />
    <title>AdminPanel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin/css/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/flag-icons.css') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/core.css') }}?v=1" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin/css/demo.css') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/select2.css') }}" />
    <link href="/admin/vendor/datatables/datatables.css" rel="stylesheet" type="text/css">
    <script src="{{ asset('admin/js/helpers.js') }}"></script>
    <script src="{{ asset('admin/js/template-customizer.js') }}"></script>
    <script src="{{ asset('admin/js/config.js') }}"></script>

</head>

<body>
<div class="layout-wrapper layout-content-navbar ">
    <div class="layout-container">
        @include('admin.layouts.nav')
        @yield('content')
@include('admin.layouts.footer')
@yield('script')
</body>
</html>
