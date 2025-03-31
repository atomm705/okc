<x-app-layout>
    @php
        $doctors = [
            ['slug' => 'prokipets-armen-tarasovich', 'name' => 'Dr. Prokipets Armen Tarasovich', 'image' => 'images/our-team-08-270x270.jpg', 'speciality' => __('messages.Chief Medical Officer, oftalmologia')],
            ['slug' => 'jane-fowler', 'name' => 'Dr. Jane Fowler', 'image' => 'images/our-team-06-384x410.jpg', 'speciality' => __('messages.Clinical Laboratory Technologist')],
            ['slug' => 'eric-snyder', 'name' => 'Dr. Eric Snyder', 'image' => 'images/our-team-07-384x410.jpg', 'speciality' => __('messages.MRI Technologist')],
            ['slug' => 'martha-schmidt', 'name' => 'Dr. Martha Schmidt', 'image' => 'images/our-team-08-384x410.jpg', 'speciality' => __('messages.EKG Technician')],
            ['slug' => 'james-wilson', 'name' => 'Dr. James Wilson', 'image' => 'images/our-team-09-384x410.jpg', 'speciality' => __('messages.Radiology Technician')],
        ];
    @endphp
        <section class="section swiper-container swiper-slider bg-default " data-swiper='{"autoplay":{"delay":5000},"effect":"fade"}'>
            <div class="swiper-wrapper text-center">
                <div class="swiper-slide" id="page-loader" data-slide-bg="images/bg-1.webp">
                    <div class="swiper-caption">
                        <div class="swiper-slide-caption ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 section-slider-custom">
                                        <div class="inset-xl-right-80 text-lg-start ">
                                            <h2>@lang('messages.Take Care of')<br class="d-block"> @lang('messages.Your Health')
                                            </h2>
                                            <h5 class="d-none d-lg-block mw-400">@lang('messages.At Medina, we are dedicated to diagnosing all kinds of diseases.')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="main.appointment {{ route('main.timetable') }}">@lang('messages.make an appointment')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="images/bg-2.webp">
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
                <div class="swiper-slide" data-slide-bg="images/bg-3.webp">
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
        <section class="parallax-container  "  data-parallax-img="images/bg-4.webp">
            <div class="parallax-content section-98 section-sm-110 context-dark">
                <div class="container text-start">
                    <div class="row justify-content-sm-center justify-content-lg-start">
                        <div class="col-md-10 col-lg-8 col-xl-5">
                            <h2><br class="d-none d-xl-inline-block">Лазерна корекція зору</h2>
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
            @foreach ($doctors as $doctor)
                <!-- Thumbnail Josip -->
                    <figure class="thumbnail-josip thumbnail-big">
                        <a href="{{ route('main.doctor.profile', ['slug' => $doctor['slug']]) }}">
                            <img width="384" height="410" src="{{ asset($doctor['image']) }}" alt="{{ $doctor['name'] }}"/>
                        </a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-medium text-white">{{ $doctor['name'] }}</h5>
                            <p class="d-none d-lg-block font-italic text-white offset-top-0">{{ $doctor['speciality'] }}</p>
                        </div>
                        <figcaption>
                            <a class="btn btn-block btn-rect text-center text-lg-start btn-white"
                               href="{{ route('main.doctor.profile', ['slug' => $doctor['slug']]) }}">
                                @lang('messages.view full profile')
                            </a>
                        </figcaption>
                    </figure>
                @endforeach
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
        <section class="parallax-container" data-parallax-img="images/bg-5.webp">
            <div class="parallax-content section-98 section-sm-110 context-dark">
                <div class="container text-start">
                    <div class="row justify-content-sm-center justify-content-lg-start">
                        <div class="col-md-10 col-lg-8 col-xl-5">
                            <h2><br class="d-none d-xl-inline-block">Професійне лікування катаракти</h2>
                            <p class="offset-top-30 text-white">Якісно надаються послуги з лікування катаракти за максимально низькими цінами в нашому місті.</p>
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
        <section class="section">
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
        </section>
        <!-- Page Footer-->


</x-app-layout>
