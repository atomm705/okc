<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/favicon/favicon.ico" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/boxicons-Dt7lfYs-.css" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/boxicons-Dt7lfYs-.css" />
        <!-- Core CSS -->
        <link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/core-DzPXZmyI.css" /><link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/theme-default-AfcCBw0u.css" /><link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/demo-1L0brNjh.css" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/core-DzPXZmyI.css" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/theme-default-AfcCBw0u.css" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/demo-1L0brNjh.css" />
        <!-- Vendor Styles -->
        <link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/perfect-scrollbar-iCvgFzBc.css" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/perfect-scrollbar-iCvgFzBc.css" /><link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/apex-charts-BWmKPyo3.css" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/apex-charts-BWmKPyo3.css" />
        <!-- Page Styles -->

        <!-- Include Scripts for customizer, helper, analytics, config -->
        <!-- laravel style -->
        <link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/helpers-6QHUpx47.js" /><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/helpers-6QHUpx47.js"></script>
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/config-DRrfh9f1.js" /><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/build/assets/config-DRrfh9f1.js"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5DDHKGP'); </script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

            <!--<div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>-->

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
