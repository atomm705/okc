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

    @if(Route::currentRouteName() === 'main.blepharoplastika' || Route::currentRouteName() === 'main.plastichna-khururgiya' || Route::currentRouteName() === 'services.inektsionnaya-terapiya' || Route::currentRouteName() === 'services.plazmoterapiya' || Route::currentRouteName() === 'services.rf-lifting'|| Route::currentRouteName() === 'services.lazernaya-epilyatsiya' || Route::currentRouteName() === 'services.lazernoe-omolozhenie'|| Route::currentRouteName() === 'services.co2'|| Route::currentRouteName() === 'services.checkup' || Route::currentRouteName() === 'services.liposaktsiya-ta-liposkulpturuvannya-v-dokart'   )
        <link rel="stylesheet" href="{{ asset('blepharoplastika-css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('blepharoplastika-css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('blepharoplastika-css/style-bleforoplastik.css') }}">


    @endif

    @if(Route::currentRouteName() === 'services.liposaktsiya-ta-liposkulpturuvannya-v-dokart' )

        <link rel="stylesheet" href="{{ asset('blepharoplastika-css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('blepharoplastika-css/swiper.min.css') }}">

    @endif


    @if(Route::currentRouteName() === 'services.oklens' )


        <link rel="stylesheet" href="{{ asset('blepharoplastika-css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('blepharoplastika-css/style-bleforoplastik.css') }}">

        <link rel="stylesheet" href="{{ asset('blepharoplastika-css/oklens.css') }}" >



    @endif

    @if(Route::currentRouteName() === 'services.panoptix' )

        <link rel="stylesheet" href="{{ asset('blepharoplastika-css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('blepharoplastika-css/style-bleforoplastik.css') }}">



        <link rel="stylesheet" href="{{ asset('blepharoplastika-css/panoptix.css') }}">

    @endif



<!-- Scripts -->
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

    @include('layouts.header')
    {{ $slot }}
    @include('layouts.footer')
</div>


</body>
</html>
