

<!--<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Asap:400,500,600,700%7CLato:400italic,400,700">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>-->
<x-app-layout>



    @section('header')
        @include('layouts.header_page_home')
    @endsection



        <section class="section swiper-container swiper-slider bg-default" data-swiper='{"autoplay":{"delay":5000},"effect":"fade"}'>
            <div class="swiper-wrapper text-center">
                <div class="swiper-slide" id="page-loader" data-slide-bg="images/slide-01.jpg">
                    <div class="swiper-caption">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 section-slider-custom">
                                        <div class="inset-xl-right-80 text-lg-start">
                                            <h2>@lang('messages.Take Care of')<br class="d-block"> @lang('messages.Your Health')
                                            </h2>
                                            <h5 class="d-none d-lg-block mw-400">@lang('messages.At Medina, we are dedicated to diagnosing all kinds of diseases.')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">@lang('messages.make an appointment')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="images/slide-02.jpg">
                    <div class="swiper-caption">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 section-slider-custom to-front">
                                        <div class="text-lg-start">
                                            <h2>@lang('messages.Years of')<br class="d-block"> @lang('messages.Experience')
                                            </h2>
                                            <h5 class="d-none d-lg-block mw-400">@lang('messages.Since our foundation, we`ve been delivering diagnostic solutions').</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">@lang('messages.make an appointment')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="images/slide-03.jpg">
                    <div class="swiper-caption">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 section-slider-custom">
                                        <div class="text-lg-start">
                                            <h2>@lang('messages.Qualified Team')<br class="d-block">@lang('messages.of Experts')</h2>
                                            <h5 class="d-none d-lg-block mw-400">@lang('messages.Our team of diagnosticians is always ready to help you be healthier.')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">@lang('messages.make an appointment')</a>
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
                                <div class="icon icon-xs mdi mdi-calendar-clock text-white-50"></div>
                                <h6 class="d-inline-block inset-left-10 text-white">@lang('messages.opening hours')</h6>
                                <hr>
                                <div class="row offset-top-24 justify-content-sm-between text-gray-light">
                                    <div class="col-sm-4">@lang('messages.Mon–Fri')</div>
                                    <div class="col-sm-7 offset-top-10 offset-xs-top-0 text-sm-end">8:00am–7:00pm</div>
                                    <div class="col-sm-4 offset-top-30 offset-xs-top-10">@lang('messages.Saturday')</div>
                                    <div class="col-sm-7 offset-top-10 text-sm-end">9:00am–5:00pm</div>
                                    <div class="col-sm-4 offset-top-30 offset-xs-top-10">@lang('messages.Sunday')</div>
                                    <div class="col-sm-7 offset-top-10 text-sm-end">9:00am–3:00pm</div>
                                </div>
                            </div>
                            <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect" href="{{ route('main.timetable') }}">@lang('messages.view timetable')</a></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-5 col-xl-3">
                        <div class="sheldue-item light">
                            <div class="sheldue-item-body">
                                <div class="icon icon-xs mdi mdi-calendar-today text-white-50"></div>
                                <h6 class="d-inline-block inset-left-10 text-white">@lang('messages.doctors’ timetable')</h6>
                                <hr>
                                <div class="offset-top-24 text-gray-light">
                                    <p>@lang('messages.The following is for guidance only to help you plan your appointment with a preferred doctor or nurse. It does not guarantee availability as the doctors or nurses may sometimes be attending to other duties.')</p>
                                </div>
                            </div>
                            <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect" href="{{ route('main.timetable') }}">@lang('messages.view timetable')</a></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-5 col-xl-3">
                        <div class="sheldue-item">
                            <div class="sheldue-item-body">
                                <div class="icon icon-xs mdi mdi-phone text-white-50"></div>
                                <h6 class="d-inline-block inset-left-10 text-white">@lang('messages.appointments')</h6>
                                <hr>
                                <div class="offset-top-24 text-gray-light">
                                    <p>@lang('messages.The first step towards a healthy life  is to schedule an appointment. Please contact our office by phone or complete the appointment request form.')</p>
                                </div>
                            </div>
                            <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect" href="make-an-appointment.html">@lang('messages.make an appointment')</a></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-5 col-xl-3">
                        <div class="sheldue-item light last">
                            <div class="sheldue-item-body">
                                <div class="icon icon-xs icon-emergency-01 text-white-50"></div>
                                <h6 class="d-inline-block inset-left-10 text-white">@lang('messages.emergency cases')</h6>
                                <hr>
                                <div class="offset-top-24">
                                    <h5 class="font-weight-bold"><a class="text-white" href="tel:#">1-800-1234-567</a></h5>
                                    <p class="text-gray-light">@lang('messages.Call us!')</p>
                                </div>
                            </div>
                            <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect" href="{{ route('main.contacts') }}">@lang('messages.Contact page')</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--What makes us different-->
        <section class="section-lg bg-default-liac">
            <div class="container text-center">
                <h3>@lang('messages.What Makes Us Different')</h3>
                <div class="row offset-top-60 row-50">
                    <div class="col-md-6 col-lg-4">
                        <div class="icon icon-xlg icon-circle icon-default icon-pills-xl"></div>
                        <h5 class="font-weight-bold text-gray-darkest">@lang('messages.Qualified Specialists')</h5>
                        <p>@lang('messages.We hire the best specialists to deliver top-notch diagnostic services for you.')</p>
                    </div>
                    <div class="col-md-6 col-lg-4 offset-md-top-0">
                        <div class="icon icon-xlg icon-circle icon-default icon-doctor-xl"></div>
                        <h5 class="font-weight-bold text-gray-darkest">@lang('messages.Modern Equipment')</h5>
                        <p>@lang('messages.We use the first-class medical equipment for timely diagnostics of various diseases.')</p>
                    </div>
                    <div class="col-md-6 col-lg-4 offset-md-top-0">
                        <div class="icon icon-xlg icon-circle icon-default icon-medical-car-xl"></div>
                        <h5 class="font-weight-bold text-gray-darkest">@lang('messages.Emergency Diagnostics')</h5>
                        <p>@lang('messages.Our emergency diagnostics services help you get the most accurate diagnosis in a minimal time.')</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Material Parallax-->
        <section class="parallax-container" data-parallax-img="images/background-03-1920x939.jpg">
            <div class="parallax-content section-98 section-sm-110 context-dark">
                <div class="container text-start">
                    <div class="row justify-content-sm-center justify-content-lg-start">
                        <div class="col-md-10 col-lg-8 col-xl-5">
                            <h2>@lang('messages.All Kinds')<br class="d-none d-xl-inline-block">@lang('messages.of Diagnostics')</h2>
                            <p class="offset-top-30 text-white">@lang('messages.Medina offers the region’s most comprehensive range of diagnostic services, from MRI to X-ray.')</p>
                            <div class="offset-top-30"><a class="btn btn-ellipse btn-white" href="make-an-appointment.html">@lang('messages.free consultation')</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- main services-->
        <section class="section-lg bg-default section">
            <div class="container">
                <h3 class="text-center">@lang('messages.Our Services')</h3>
                <div class="offset-top-41">
                    <p class="custom-paragraph">@lang('messages.At our clinic, you can experience the best and the most extensive range of diagnostic services in the state. Feel free to browse our website for more information.')</p>
                </div>
                <div class="row offset-top-60 text-lg-start row-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="service"><img class="img-responsive" src="images/home-01-320x320.jpg" width="320" height="320" alt=""/><a class="service-desc h6" href="{{ route('main.services') }}">@lang('messages.Pediatrics')</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 offset-sm-top-0">
                        <div class="service"><img class="img-responsive" src="images/home-02-320x320.jpg" width="320" height="320" alt=""/><a class="service-desc h6" href="{{ route('main.services') }}">@lang('messages.MRI of the brain')</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 offset-md-top-0">
                        <div class="service"><img class="img-responsive" src="images/home-03-320x320.jpg" width="320" height="320" alt=""/><a class="service-desc h6" href="{{ route('main.services') }}">@lang('messages.x-ray diagnostic')</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service"><img class="img-responsive" src="images/home-04-320x320.jpg" width="320" height="320" alt=""/><a class="service-desc h6" href="{{ route('main.services') }}">@lang('messages.laboratory services')</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service"><img class="img-responsive" src="images/home-05-320x320.jpg" width="320" height="320" alt=""/><a class="service-desc h6" href="{{ route('main.services') }}">@lang('messages.pregnancy')</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service"><img class="img-responsive" src="images/home-06-320x320.jpg" width="320" height="320" alt=""/><a class="service-desc h6" href="{{ route('main.services') }}">@lang('messages.Best Equipment')</a>
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
                    <figure class="thumbnail-josip thumbnail-big"><a href="team-member.html"><img width="384" height="410" src="images/our-team-05-384x410.jpg" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Scott Riley</h5>
                            <p class="d-none d-lg-block font-italic text-white offset-top-0">@lang('messages.Chief Medical Officer, Pathologist')</p>
                        </div>
                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">@lang('messages.view full profile')</a></figcaption>
                    </figure>
                    <!-- Thumbnail Josip-->
                    <figure class="thumbnail-josip thumbnail-big"><a href="team-member.html"><img width="384" height="410" src="images/our-team-06-384x410.jpg" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Jane Fowler</h5>
                            <p class="d-none d-lg-block font-italic text-white offset-top-0">@lang('messages.Clinical Laboratory Technologist')</p>
                        </div>
                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">@lang('messages.view full profile')</a></figcaption>
                    </figure>
                    <!-- Thumbnail Josip-->
                    <figure class="thumbnail-josip thumbnail-big offset-md-top-0 odd"><a href="team-member.html"><img width="384" height="410" src="images/our-team-07-384x410.jpg" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Eric Snyder</h5>
                            <p class="d-none d-lg-block font-italic text-white offset-top-0">@lang('messages.MRI Technologist')</p>
                        </div>
                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">@lang('messages.view full profile')</a></figcaption>
                    </figure>
                    <!-- Thumbnail Josip-->
                    <figure class="thumbnail-josip thumbnail-big offset-md-top-0"><a href="team-member.html"><img width="384" height="410" src="images/our-team-08-384x410.jpg" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Martha Schmidt</h5>
                            <p class="d-none d-lg-block font-italic text-white offset-top-0">@lang('messages.EKG Technician')</p>
                        </div>
                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">@lang('messages.view full profile')</a></figcaption>
                    </figure>
                    <!-- Thumbnail Josip-->
                    <figure class="thumbnail-josip thumbnail-big "><a href="team-member.html"><img width="384" height="410" src="images/our-team-09-384x410.jpg" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. James Wilson</h5>
                            <p class="d-none d-lg-block font-italic text-white offset-top-0">@lang('messages.Radiology Technician')</p>
                        </div>
                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">@lang('messages.view full profile')</a></figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <!-- testimonials-->
        <section class="section-lg bg-default-liac">
            <div class="container">
                <h3 class="text-center">@lang('messages.Testimonials')</h3>
                <div class="offset-top-66">
                    <div class="owl-carousel owl-carousel-default owl-carousel-class-light" data-loop="false" data-items="1" data-dots="true" data-mouse-drag="false" data-lg-items="2" data-nav="false" data-owl="{&quot;dots&quot;:true,&quot;nav&quot;:false,&quot;autoplayTimeout&quot;:3500}">
                        <div class="item">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p class="font-italic text-gray-dark">
                                        <q>@lang('messages.I had a colonoscopy at Medina Diagnostic Center. From the moment I entered the center, I was greeted and treated warmly and respectfully and it was the best experience.')</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src="images/users/user-betty-wade-60x60.jpg" alt=""/></div>
                                        <div class="unit-body unit-item-wide">
                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                <cite class="text-normal">Betty Wade</cite>
                                            </h5>
                                            <p class="quote-desc text-capitalize text-gray font-italic">@lang('messages.Patient')</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p class="font-italic text-gray-dark">
                                        <q>@lang('messages.I would like to thank and compliment the staff at Medina, including the outpatient, laboratory staff and cardiac division during my stay at your facility on July 9th and 10th.')</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src="images/users/user-bryan-green-60x60.jpg" alt=""/></div>
                                        <div class="unit-body unit-item-wide">
                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                <cite class="text-normal">Bryan Green</cite>
                                            </h5>
                                            <p class="quote-desc text-capitalize text-gray font-italic">@lang('messages.Patient')</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p class="font-italic text-gray-dark">
                                        <q>@lang('messages.I had a colonoscopy at Medina Diagnostic Center. From the moment I entered the center, I was greeted and treated warmly and respectfully and it was the best experience.')</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src="images/users/user-bryan-green-60x60.jpg" alt=""/></div>
                                        <div class="unit-body unit-item-wide">
                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                <cite class="text-normal">Bryan Green</cite>
                                            </h5>
                                            <p class="quote-desc text-capitalize text-gray font-italic">@lang('messages.Patient')</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p class="font-italic text-gray-dark">
                                        <q>@lang('messages.I would like to thank and compliment the staff at Medina, including the outpatient, laboratory staff and cardiac division during my stay at your facility on July 9th and 10th.')</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src="images/users/user-betty-wade-60x60.jpg" alt=""/></div>
                                        <div class="unit-body unit-item-wide">
                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                <cite class="text-normal">Betty Wade</cite>
                                            </h5>
                                            <p class="quote-desc text-capitalize text-gray font-italic">@lang('messages.Patient')</p>
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
        <section class="parallax-container" data-parallax-img="images/background-04-1920x980.jpg">
            <div class="parallax-content section-98 section-sm-110 context-dark">
                <div class="container text-start">
                    <div class="row justify-content-sm-center justify-content-lg-start">
                        <div class="col-md-10 col-lg-8 col-xl-5">
                            <h2>@lang('messages.Pediatric')<br class="d-none d-xl-inline-block">@lang('messages.Diagnostics')</h2>
                            <p class="offset-top-30 text-white">@lang('messages.Our center provides a vast range of pediatric diagnostic services for children all over our state.')</p>
                            <div class="offset-top-30"><a class="btn btn-ellipse btn-white" href="make-an-appointment.html">@lang('messages.free consultation')</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest blog posts-->
        <section class="section-98 section-sm-110">
            <div class="container">
                <h3 class="text-center text-lg-start">@lang('messages.Latest Blog Posts')</h3>
                <div class="row justify-content-sm-center offset-top-60">
                    <div class="col-md-8 col-lg-4">
                        <!-- Post Modern-->
                        <article class="post post-modern post-modern-classic">
                            <!-- Post media-->
                            <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src="images/post-13-370x250.jpg" alt=""/></a>
                            </div>
                            <!-- Post content-->
                            <div class="post-content text-start">
                                <!-- Post Title-->
                                <div class="post-title offset-top-8">
                                    <h5 class="font-weight-bold"><a href="single-post.html">@lang('messages.Reasons to Visit a Breast Specialist')</a></h5>
                                </div>
                                <ul class="list-inline list-inline-dashed">
                                    <li>@lang('messages.June 21, 2023 at 8:12pm')</li>
                                    <li><a class="text-primary" href="blog-masonry.html">@lang('messages.News')</a></li>
                                </ul>
                                <!-- Post Body-->
                                <div class="post-body">
                                    <p>@lang('messages.There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the importance of visiting...')</p>
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
                            <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src="images/post-14-370x250.jpg" alt=""/></a>
                            </div>
                            <!-- Post content-->
                            <div class="post-content text-start">
                                <!-- Post Title-->
                                <div class="post-title offset-top-8">
                                    <h5 class="font-weight-bold"><a href="single-post.html">@lang('messages.Picking the Right Diagnostic Services for Efficient Results')</a></h5>
                                </div>
                                <ul class="list-inline list-inline-dashed">
                                    <li>@lang('messages.June 21, 2023 at 8:12pm')</li>
                                    <li><a class="text-primary" href="blog-masonry.html">@lang('messages.News')</a></li>
                                </ul>
                                <!-- Post Body-->
                                <div class="post-body">
                                    <p>@lang('messages.There have been a lot of cases in which people were not provided with accurate reports that eventually affected their medical treatment. There is always...')</p>
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
                            <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src="images/post-15-370x250.jpg" alt=""/></a>
                            </div>
                            <!-- Post content-->
                            <div class="post-content text-start">
                                <!-- Post Title-->
                                <div class="post-title offset-top-8">
                                    <h5 class="font-weight-bold"><a href="single-post.html">@lang('messages.Preparing for an ECG in 8 Easy Steps: Tips From Our Diagnosticians')</a></h5>
                                </div>
                                <ul class="list-inline list-inline-dashed">
                                    <li>@lang('messages.June 21, 2023 at 8:12pm')</li>
                                    <li><a class="text-primary" href="blog-masonry.html">@lang('messages.News')</a></li>
                                </ul>
                                <!-- Post Body-->
                                <div class="post-body">
                                    <p>@lang('messages.An ECG stands for an "electrocardiogram," which is a test that measures and records the electrical activity of the heart. It is used by doctors to obtain...')</p>
                                </div>
                                <div class="tags group group-sm">
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="offset-top-50 text-center text-lg-start"><a class="btn btn-ellipse btn-primary" href="blog-grid.html">@lang('messages.View all blog posts')</a></div>
            </div>
        </section>
        < <section class="section">
            <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
            <!--Please note that YOUR_API_KEY should replaced with your key.-->
            <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
            <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
                <div class="google-map"></div>
                <ul class="google-map-markers">
                    <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                </ul>
            </div>
        </section>
        <!-- Page Footer-->


    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</x-app-layout>
