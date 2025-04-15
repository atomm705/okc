<!-- Breadcrumbs-->
<x-app-layout>

        <section class="breadcrumbs-custom bg-image context-dark slider-page"  style="background-image: url({{ asset('images/bg-6.webp') }});" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>

                <div class="container " >
                    <h2 class="breadcrumbs-custom-title">About</h2>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{ route('main.index') }}">Home</a></li>
                        <li class="active"><a href="{{ route('main.about') }}">About</a></li>
                    </ul>
                </div>

        </section>
        <!-- a few words about us-->
        <section class="section-lg bg-default text-start section">
            <div class="container">
                <div class="row justify-content-sm-center row-30">
                    <div class="col-sm-10 col-lg-8">
                        <h3>A Few Words About Us</h3>
                        <div class="offset-top-20 offset-lg-top-60">
                            <p>Etiam et imperdiet quam. In sit amet finibus lorem, ac ultricies enim. Aliquam volutpat enim diam, vitae elementum ipsum tempor sit amet. Ut pellentesque sem nulla, in blandit leo viverra a. Phasellus et lacus mattis, tincidunt metus sodales, tincidunt urna. Cras felis neque, iaculis vitae varius eu, luctus consectetur odio. Phasellus non luctus justo, eu fringilla tortor. Aenean ornare sem sit amet rhoncus tincidunt. Cras tempor eu enim id pulvinar. Proin at imperdiet felis, vel vehicula neque. Nulla quis nisl facilisis ex dignissim euismod eu vel neque.</p>
                            <p>Proin accumsan ultricies tincidunt. Morbi semper enim a nulla vulputate pellentesque. Sed nulla tellus, gravida vel placerat vel, euismod at neque. Maecenas commodo viverra efficitur.</p>
                        </div>
                    </div>
                    <div class="col-sm-10 col-lg-4">
                        <h6>the heart of medical center</h6>
                        <hr class="text-subline">
                        <div class="offset-top-30">
                            <div class="unit flex-xxl-row flex-xl-row flex-lg-column flex-md-row flex-sm-row unit-spacing-sm">
                                <div class="unit-left"><img class="img-responsive" src="{{ asset('images/user-scott-riley-110x110.jpg') }}"  width="110" height="110" alt=""/>
                                </div>
                                <div class="unit-body">
                                    <h5 class="font-weight-bold text-primary">Dr. Scott Riley</h5>
                                    <p class="font-italic offset-top-0">Chief Medical Officer, Founder</p>
                                    <div class="p unit unit-spacing-xxs flex-row">
                                        <div class="unit-left"><span class="icon icon-xs mdi mdi-phone text-primary"></span></div>
                                        <div class="unit-body"><a class="h6" href="tel:#">1-800-1234-567</a></div>
                                    </div>
                                </div>
                            </div>
                            <p>Proin accumsan ultricies tincidunt. Morbi semper enim a nulla vulputate pellentesque. Sed nulla tellus, gravida vel placerat vel, euismod at neque.</p><a class="btn btn-primary btn-ellipse" href="team-member.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Achievements-->
        <section class="text-md-start bg-default-liac section">
            <div class="container-wide container">
                <div class="row justify-content-sm-center">
                    <div class="col-xl-5 col-xxl-4 section-90 section-md-122 context-md-dark bg-image-md-fullwidth-1 bg-image-md-fullwidth-1-left d-none d-xl-block"></div>
                    <div class="col-md-10 col-lg-12 col-xl-7 col-xxl-8 section-85">
                        <div class="inset-lg-left-60 inset-xxl-left-100">
                            <h3>Our Achievements</h3>
                            <div class="offset-top-41 offset-lg-top-60">
                                <div class="row">
                                    <div class="col-lg-12 col-xxl-9">
                                        <div class="row row-50">
                                            <div class="col-lg-6">
                                                <!-- Icon Box Type 2-->
                                                <div class="unit unit-sm flex-md-row unit-spacing-sm text-md-start align-items-center unit-middle">
                                                    <div class="unit-left"><span class="icon icon icon-sm icon-circle text-primary icon-default mdi mdi-trophy-variant"></span></div>
                                                    <div class="unit-body">
                                                        <h5 class="font-weight-bold font-weight-bold text-gray-darkest">The Best Medical Center 2015</h5>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <!-- Icon Box Type 2-->
                                                <div class="unit unit-sm flex-md-row unit-spacing-sm text-md-start align-items-center unit-middle">
                                                    <div class="unit-left"><span class="icon icon icon-sm icon-circle text-primary icon-default  mdi mdi-pill copy"></span></div>
                                                    <div class="unit-body">
                                                        <h5 class="font-weight-bold font-weight-bold text-gray-darkest">Certified by the AMA and IAMH</h5>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <!-- Icon Box Type 2-->
                                                <div class="unit unit-sm flex-md-row unit-spacing-sm text-md-start align-items-center unit-middle">
                                                    <div class="unit-left"><span class="icon icon icon-sm icon-circle text-primary icon-default  mdi mdi-school"></span></div>
                                                    <div class="unit-body">
                                                        <h5 class="font-weight-bold font-weight-bold text-gray-darkest">The Best Diagnostics Award</h5>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <!-- Icon Box Type 2-->
                                                <div class="unit unit-sm flex-md-row unit-spacing-sm text-md-start align-items-center unit-middle">
                                                    <div class="unit-left"><span class="icon icon icon-sm icon-circle text-primary icon-default  mdi mdi-star"></span></div>
                                                    <div class="unit-body">
                                                        <h5 class="font-weight-bold font-weight-bold text-gray-darkest">Global Health Contributor</h5>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our team-->
        <section class="section-lg section bg-default">
            <div class="container">
                <h3 class="text-center">Our team</h3>
                <div class="row justify-content-sm-center row-40">
                    <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3">
                        <!-- Thumbnail Josip-->
                        <figure class="thumbnail-josip odd"><a href="team-member.html"><img width="270" height="270" src=" {{ asset('images/our-team-08-270x270.jpg') }}" alt=""/></a>
                            <div class="thumbnail-desc">
                                <h5 class="thumbnail-josip-title text-medium text-white">Dr. Scott Riley</h5>
                                <p class="d-none d-lg-block font-italic text-white offset-top-0">Chief Medical Officer, Pathologist</p>
                            </div>
                            <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">view full profile</a></figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3">
                        <!-- Thumbnail Josip-->
                        <figure class="thumbnail-josip"><a href="team-member.html"><img width="270" height="270" src="{{ asset('images/our-team-02-270x270.jpg') }} " alt=""/></a>
                            <div class="thumbnail-desc">
                                <h5 class="thumbnail-josip-title text-medium text-white">Dr. Martha Schmidt</h5>
                                <p class="d-none d-lg-block font-italic text-white offset-top-0">EKG Technician</p>
                            </div>
                            <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">view full profile</a></figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3">
                        <!-- Thumbnail Josip-->
                        <figure class="thumbnail-josip odd"><a href="team-member.html"><img width="270" height="270" src="{{ asset('images/our-team-03-270x270.jpg') }}" alt=""/></a>
                            <div class="thumbnail-desc">
                                <h5 class="thumbnail-josip-title text-medium text-white">Dr. Sam McMillan</h5>
                                <p class="d-none d-lg-block font-italic text-white offset-top-0">Histotechnologist</p>
                            </div>
                            <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">view full profile</a></figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3">
                        <!-- Thumbnail Josip-->
                        <figure class="thumbnail-josip"><a href="team-member.html"><img width="270" height="270" src="{{ asset('images/our-team-04-270x270.jpg') }}" alt=""/></a>
                            <div class="thumbnail-desc">
                                <h5 class="thumbnail-josip-title text-medium text-white">Dr. Mary Smith</h5>
                                <p class="d-none d-lg-block font-italic text-white offset-top-0">Phlebotomist</p>
                            </div>
                            <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">view full profile</a></figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3">
                        <!-- Thumbnail Josip-->
                        <figure class="thumbnail-josip odd"><a href="team-member.html"><img width="270" height="270" src="{{ asset('images/our-team-05-270x270.jpg') }}" alt=""/></a>
                            <div class="thumbnail-desc">
                                <h5 class="thumbnail-josip-title text-medium text-white">Dr. Jane Fowler</h5>
                                <p class="d-none d-lg-block font-italic text-white offset-top-0">Clinical Laboratory Technologist</p>
                            </div>
                            <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">view full profile</a></figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3">
                        <!-- Thumbnail Josip-->
                        <figure class="thumbnail-josip"><a href="team-member.html"><img width="270" height="270" src="{{ asset('images/our-team-06-270x270.jpg') }}" alt=""/></a>
                            <div class="thumbnail-desc">
                                <h5 class="thumbnail-josip-title text-medium text-white">Dr. Eric Snyder</h5>
                                <p class="d-none d-lg-block font-italic text-white offset-top-0">MRI Technologist</p>
                            </div>
                            <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">view full profile</a></figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3">
                        <!-- Thumbnail Josip-->
                        <figure class="thumbnail-josip odd"><a href="team-member.html"><img width="270" height="270" src="{{ asset('images/our-team-07-270x270.jpg') }}" alt=""/></a>
                            <div class="thumbnail-desc">
                                <h5 class="thumbnail-josip-title text-medium text-white">Dr. Kate Hudson</h5>
                                <p class="d-none d-lg-block font-italic text-white offset-top-0">Medical Laboratory Technician</p>
                            </div>
                            <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">view full profile</a></figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3">
                        <!-- Thumbnail Josip-->
                        <figure class="thumbnail-josip"><a href="team-member.html"><img width="270" height="270" src="{{ asset('images/our-team-01-270x270.jpg') }}" alt=""/></a>
                            <div class="thumbnail-desc">
                                <h5 class="thumbnail-josip-title text-medium text-white">Dr. James Wilson</h5>
                                <p class="d-none d-lg-block font-italic text-white offset-top-0">Radiology Technician</p>
                            </div>
                            <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="team-member.html">view full profile</a></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonials-->
        <section class="section-lg section bg-default-liac">
            <div class="container">
                <h3 class="text-center">Testimonials</h3>
                <div class="offset-top-66">
                    <div class="owl-carousel owl-carousel-default owl-carousel-class-light" data-loop="false" data-margin="15" data-items="1" data-dots="true" data-mouse-drag="false" data-lg-items="3" data-owl="{&quot;dots&quot;:true,&quot;nav&quot;:false,&quot;autoplayTimeout&quot;:3500}">
                        <div class="item">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p class="font-italic text-gray-dark">
                                        <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ligula tellus, vestibulum a velit at, cursus iaculis quam. Ut tempus augue non tellus semper convallis.</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src=" {{ asset('images/users/user-betty-wade-60x60.jpg') }}" alt=""/></div>
                                        <div class="unit-body unit-item-wide">
                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                <cite class="text-normal">Betty Wade</cite>
                                            </h5>
                                            <p class="quote-desc text-capitalize text-gray font-italic">Regular Patient</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p class="font-italic text-gray-dark">
                                        <q>Proin luctus augue vel egestas aliquam. Etiam rhoncus erat nisi, at molestie dolor pellentesque vel. Praesent leo est, molestie id mauris ut, ornare dictum massa.</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src=" {{ asset('images/users/user-bryan-green-60x60.jpg') }}" alt=""/></div>
                                        <div class="unit-body unit-item-wide">
                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                <cite class="text-normal">Bryan Green</cite>
                                            </h5>
                                            <p class="quote-desc text-capitalize text-gray font-italic">Regular Patient</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p class="font-italic text-gray-dark">
                                        <q>Suspendisse pharetra purus a sollicitudin pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.  Cras et diam tempus, ultrices.</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src=" {{ asset('images/users/user-joan-anderson-60x60.jpg') }}" alt=""/></div>
                                        <div class="unit-body unit-item-wide">
                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                <cite class="text-normal">Joan Anderson</cite>
                                            </h5>
                                            <p class="quote-desc text-capitalize text-gray font-italic">Regular Patient</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p class="font-italic text-gray-dark">
                                        <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ligula tellus, vestibulum a velit at, cursus iaculis quam. Ut tempus augue non tellus semper convallis.</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src="{{ asset('images/users/user-betty-wade-60x60.jpg ') }}" alt=""/></div>
                                        <div class="unit-body unit-item-wide">
                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                <cite class="text-normal">Betty Wade</cite>
                                            </h5>
                                            <p class="quote-desc text-capitalize text-gray font-italic">Regular Patient</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p class="font-italic text-gray-dark">
                                        <q>Proin luctus augue vel egestas aliquam. Etiam rhoncus erat nisi, at molestie dolor pellentesque vel. Praesent leo est, molestie id mauris ut, ornare dictum massa.</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src=" {{ asset('images/users/user-bryan-green-60x60.jpg') }}" alt=""/></div>
                                        <div class="unit-body unit-item-wide">
                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                <cite class="text-normal">Bryan Green</cite>
                                            </h5>
                                            <p class="quote-desc text-capitalize text-gray font-italic">Regular Patient</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p class="font-italic text-gray-dark">
                                        <q>Suspendisse pharetra purus a sollicitudin pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.  Cras et diam tempus, ultrices.</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src="   {{ asset('images/users/user-joan-anderson-60x60.jpg') }}" alt=""/></div>
                                        <div class="unit-body unit-item-wide">
                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                <cite class="text-normal">Joan Anderson</cite>
                                            </h5>
                                            <p class="quote-desc text-capitalize text-gray font-italic">Regular Patient</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p class="font-italic text-gray-dark">
                                        <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ligula tellus, vestibulum a velit at, cursus iaculis quam. Ut tempus augue non tellus semper convallis.</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src=" {{ asset('images/users/user-betty-wade-60x60.jpg') }}" alt=""/></div>
                                        <div class="unit-body unit-item-wide">
                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                <cite class="text-normal">Betty Wade</cite>
                                            </h5>
                                            <p class="quote-desc text-capitalize text-gray font-italic">Regular Patient</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p class="font-italic text-gray-dark">
                                        <q>Proin luctus augue vel egestas aliquam. Etiam rhoncus erat nisi, at molestie dolor pellentesque vel. Praesent leo est, molestie id mauris ut, ornare dictum massa.</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src=" {{ asset('images/users/user-bryan-green-60x60.jpg') }}" alt=""/></div>
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
                                        <q>Suspendisse pharetra purus a sollicitudin pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras et diam tempus, ultrices.</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src="{{ asset('images/users/user-joan-anderson-60x60.jpg ') }}" alt=""/></div>
                                        <div class="unit-body unit-item-wide">
                                            <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                                <cite class="text-normal">Joan Anderson</cite>
                                            </h5>
                                            <p class="quote-desc text-capitalize text-gray font-italic">Regular Patient</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>





</x-app-layout>
