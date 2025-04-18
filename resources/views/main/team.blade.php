<x-app-layout>
        <!-- Breadcrumbs-->
        <section class="breadcrumbs-custom bg-image context-dark slider-page" style="background-image: url({{ asset('images/bg-6.webp') }});" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
            <div class="container">
                <h2 class="breadcrumbs-custom-title">@lang('global.pages.doctors')</h2>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                    <li class="active"><a href="{{ route('main.team') }}">@lang('global.pages.doctors')</a></li>
                </ul>
            </div>
        </section>


    @php
        $doctors = [
            ['slug' => 'prokipets-armen-tarasovich', 'name' => 'Dr. Prokipets Armen Tarasovich', 'image' => 'images/our-team-08-270x270.jpg'],
            ['slug' => 'kivshar-mikola-mikolayovich', 'name' => 'Dr. Kivshar Mikola Mikolayovich', 'image' => 'images/our-team-02-270x270.jpg'],
            ['slug' => 'filatova-anna-vadimivna', 'name' => 'Dr. Filatova Anna Vadimivna', 'image' => 'images/our-team-03-270x270.jpg'],
            ['slug' => 'ivzhenko-lyudmila-igorivna', 'name' => 'Dr. Ivzhenko Lyudmila Igorivna', 'image' => 'images/our-team-04-270x270.jpg'],
        ];
    @endphp

    <section class="section-lg section bg-default">
        <div class="container">
            <h3 class="text-center">4 Column Layout</h3>
            <div class="offset-top-41 offset-lg-top-60">
                <div class="row justify-content-sm-center">
                    @foreach ($doctors as $doctor)
                        <div class="col-sm-8 col-md-7 col-lg-3">
                            <figure class="thumbnail-josip odd">
                                <a href="{{ route('main.doctor.profile', ['slug' => $doctor['slug']]) }}">
                                    <img width="270" height="270" src="{{ asset($doctor['image']) }}" alt=""/>
                                </a>
                                <div class="thumbnail-desc">
                                    <h5 class="thumbnail-josip-title text-medium text-white">{{ $doctor['name'] }}</h5>
                                </div>
                                <figcaption>
                                    <a class="btn btn-block btn-rect text-center text-lg-start btn-white"
                                       href="{{ route('main.doctor.profile', ['slug' => $doctor['slug']]) }}">
                                        View full profile
                                    </a>
                                </figcaption>
                            </figure>
                        </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>
        <section class="section section-md p-xl-0">
            <div class="container-fluid">
                <h3 class="text-center">Full-width Layout</h3>
                <div class="justify-content-sm-center row-30 row">
                    <!-- Thumbnail Josip-->
                    <figure class="thumbnail-josip thumbnail-big"><a href="team-member.html"><img width="384" height="410" src="{{ asset('images/our-team-05-270x270.jpg') }}" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Scott Riley</h5>
                            <p class="d-none d-lg-block font-italic text-white offset-top-0">Chief Medical Officer, Pathologist</p>
                        </div>
                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="{{ route('main.team') }}">view full profile</a></figcaption>
                    </figure>
                    <!-- Thumbnail Josip-->
                    <figure class="thumbnail-josip thumbnail-big"><a href="team-member.html"><img width="384" height="410" src="{{ asset('images/our-team-06-270x270.jpg') }}" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Jane Fowler</h5>
                            <p class="d-none d-lg-block font-italic text-white offset-top-0">Clinical Laboratory Technologist</p>
                        </div>
                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="{{ route('main.team') }}">view full profile</a></figcaption>
                    </figure>
                    <!-- Thumbnail Josip-->
                    <figure class="thumbnail-josip thumbnail-big offset-md-top-0 odd"><a href="team-member.html"><img width="384" height="410" src="{{ asset('images/our-team-07-270x270.jpg') }}" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Eric Snyder</h5>
                            <p class="d-none d-lg-block font-italic text-white offset-top-0">MRI Technologist</p>
                        </div>
                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="{{ route('main.team') }}">view full profile</a></figcaption>
                    </figure>
                    <!-- Thumbnail Josip-->
                    <figure class="thumbnail-josip thumbnail-big offset-md-top-0"><a href="team-member.html"><img width="384" height="410" src="{{ asset('images/our-team-08-270x270.jpg') }}" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Martha Schmidt</h5>
                            <p class="d-none d-lg-block font-italic text-white offset-top-0">EKG Technician</p>
                        </div>
                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="{{ route('main.team') }}">view full profile</a></figcaption>
                    </figure>
                    <!-- Thumbnail Josip-->
                    <figure class="thumbnail-josip thumbnail-big "><a href="team-member.html"><img width="384" height="410" src="{{ asset('images/our-team-09-384x410.jpg') }}" alt=""/></a>
                        <div class="thumbnail-desc">
                            <h5 class="thumbnail-josip-title text-medium text-white">Dr. James Wilson</h5>
                            <p class="d-none d-lg-block font-italic text-white offset-top-0">Radiology Technician</p>
                        </div>
                        <figcaption><a class="btn btn-block btn-rect text-center text-lg-start btn-white" href="{{ route('main.team') }}">view full profile</a></figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-default">
            <div class="container">
                <h3 class="text-center">3 Column Layout</h3>
                <hr class="divider divider-lg bg-java">
                <div class="row justify-content-sm-center text-start row-30">
                    <div class="col-sm-8 col-lg-4 inset-lg-right-30">
                        <div class="unit flex-xxl-row flex-xl-row flex-lg-column flex-md-row flex-sm-row unit-spacing-sm">
                            <div class="unit-left"><img class="img-responsive" src=" {{ asset('images/user-scott-riley-110x110.jpg') }}" width="110" height="110" alt=""/>
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
                        <p>Morbi luctus, lorem ut molestie mattis, arcu nisl hendrerit mi, ac ultrices odio arcu a sapien. Morbi a massa blandit.</p>
                    </div>
                    <div class="col-sm-8 col-lg-4">
                        <div class="unit flex-xxl-row flex-xl-row flex-lg-column flex-md-row flex-sm-row unit-spacing-sm">
                            <div class="unit-left"><img class="img-responsive" src=" {{ asset('images/user-johnny-fowler-110x110.jpg') }}" width="110" height="110" alt=""/>
                            </div>
                            <div class="unit-body">
                                <h5 class="font-weight-bold text-primary">Dr. Eric Snyder</h5>
                                <p class="font-italic offset-top-0">MRI Technologist</p>
                                <div class="p unit unit-spacing-xxs flex-row">
                                    <div class="unit-left"><span class="icon icon-xs mdi mdi-phone text-primary"></span></div>
                                    <div class="unit-body"><a class="h6" href="tel:#">1-800-1234-567</a></div>
                                </div>
                            </div>
                        </div>
                        <p>Mauris non cursus elit. Ut congue venenatis nisi, a efficitur turpis sodales eu. Cras at mi odio. In platea dictumst.</p>
                    </div>
                    <div class="col-sm-8 col-lg-4">
                        <div class="unit flex-xxl-row flex-xl-row flex-lg-column flex-md-row flex-sm-row unit-spacing-sm">
                            <div class="unit-left"><img class="img-responsive" src=" {{ asset('images/user-eric-110x110.jpg') }}" width="110" height="110" alt=""/>
                            </div>
                            <div class="unit-body">
                                <h5 class="font-weight-bold text-primary">Dr. James Wilson</h5>
                                <p class="font-italic offset-top-0">Radiology Technician</p>
                                <div class="p unit unit-spacing-xxs flex-row">
                                    <div class="unit-left"><span class="icon icon-xs mdi mdi-phone text-primary"></span></div>
                                    <div class="unit-body"><a class="h6" href="tel:#">1-800-1234-567</a></div>
                                </div>
                            </div>
                        </div>
                        <p>Aliquam risus urna, posuere in diam nec, eleifend bibendum metus. Etiam scelerisque dui id erat facilisis, accumsan.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Footer-->
    <div class="snackbars" id="form-output-global"></div>
</x-app-layout>
