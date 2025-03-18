<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Asap:400,500,600,700%7CLato:400italic,400,700">


        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <!-- Bootstrap JS + Popper.js -->
    <body >
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-double-torus"></div>
            </div>
            <p>&nbsp;</p>
        </div>
    </div>
    <div class="page">
        <!--<div class="min-h-screen bg-gray-100">-->
        @yield('header', View::make('layouts.header'))
            <main>
                {{ $slot }}
            </main>
        @include('layouts.footer')
    </div>
    </body>
</html>
