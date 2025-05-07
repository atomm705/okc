<x-app-layout>
    <section class="breadcrumbs-custom bg-image context-dark  slider-page" style="background-image: url({{ asset('images/bg-6.webp') }});" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">{{ $doctorTranslation->full_name }}</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li><a href="{{ route('main.team') }}">@lang('global.pages.doctors')</a></li>
                <li class="active">{{ $doctorTranslation->full_name }}</li>
            </ul>
        </div>
    </section>
    <!-- team member section-->
    <section class="section-lg section bg-default">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-sm-10 col-lg-4">
                    <!-- Member block type 5-->
                    <div class="member-block-type-5 inset-lg-right-20">

                        <img src="{{ asset(str_replace('/assets', '', $doctor->imageSquare->src)) }}"
                             width="320" height="320"
                             alt="{{ $doctorTranslation->full_name }}" />
                        <div class="member-block-body"><a class="btn-ellipse btn-primary btn" href="make-an-appointment.html">make an appointment</a>
                            <address class="contact-info offset-top-20 offset-sm-top-24">
                                <ul class="list-unstyled p">
                                    <li><span class="icon icon-xxxs text-middle text-primary mdi mdi-phone"></span><a class="text-middle d-inline-block text-gray-darker" href="tel:1-800-1234-567">1-800-1234-567</a></li>
                                    <li><span class="icon icon-xxxs text-middle text-primary mdi mdi-email-open"></span><a class="text-middle d-inline-block" href="mailto:mail@demolink.org">mail@demolink.org</a></li>
                                </ul>
                            </address>
                            <div class="offset-top-24">
                                <ul class="list-inline list-inline-xs">
                                    <li><a class="icon icon-xxs icon-circle icon-gray-light fa-facebook" href="#"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-gray-light fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-gray-light fa-google-plus" href="#"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-gray-light fa-rss" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="offset-top-34 text-md-start inset-lg-right-20">
                        <h6 class="text-start">@lang('frontend/doctors/doctors.certificates.title')</h6>
                        <hr class="text-subline">
                        <div class="row justify-content-sm-center justify-content-md-start offset-top-24 row-certificates" data-lightgallery="group">
                            @foreach ($doctor->getCertificates() as $certificate)
                                <div class="col-sm-8 col-md-4 offset-top-20">
                                    <a class="thumbnail-classic" data-lightgallery="item" data-size="700x970"
                                       href="{{ asset(str_replace('/assets', '', $certificate->src)) }}">
                                        <figure>
                                            <img width="100" height="138"
                                                 src="{{ asset(str_replace('/assets', '', $certificate->src)) }}"
                                                 alt="certificate">
                                        </figure>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-lg-8 text-lg-start offset-top-60 offset-md-top-0">
                    @php
                        $position = json_decode($doctorTranslation->position_all, true);
                        $education = json_decode($doctorTranslation->educations, true);
                    @endphp

                    @if ((is_array($position) && count(array_filter($position))) || (is_array($education) && count(array_filter($education))))
                        <div class="row">
                            @if (is_array($position) && count(array_filter($position)))
                                <div class="col-md-5">
                                    <div><h6>@lang('frontend/doctors/doctors.position.title')</h6></div>
                                    <hr class="text-subline-2">
                                    <ul class="list list-marked">
                                        @foreach ($position as $item)
                                            @if (!empty(trim($item)))
                                                <li>{{ $item }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (is_array($education) && count(array_filter($education)))
                                <div class="col-md-7 offset-top-41 offset-sm-top-0">
                                    <div><h6>@lang('frontend/doctors/doctors.education.title')</h6></div>
                                    <hr class="text-subline-2">
                                    <ul class="list list-marked">
                                        @foreach ($education as $item)
                                            @if (!empty(trim($item)))
                                                <li>{{ $item }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    @endif


                    @php
                        $specs = json_decode($doctorTranslation->specialisation, true);
                    @endphp

                    @if (is_array($specs) && count(array_filter($specs)))
                        <div class="col-md-10 col-lg-8 offset-top-30">
                            <h6>@lang('frontend/doctors/doctors.specialization.title')</h6>
                            <hr class="text-subline-2">
                            <ul class="list list-marked">
                                @foreach ($specs as $spec)
                                    @if (!empty(trim($spec)))
                                        <li>{{ $spec }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @php
                        $courses = json_decode($doctorTranslation->courses, true);
                        $associations = json_decode($doctorTranslation->associations, true);
                    @endphp

                    @if (
                        (is_array($courses) && count(array_filter($courses))) ||
                        (is_array($associations) && count(array_filter($associations)))
                    )
                        <div class="row offset-top-30">
                            @if (is_array($courses) && count(array_filter($courses)))
                                <div class="col-md-5">
                                    <div><h6>@lang('frontend/doctors/doctors.courses.title')</h6></div>
                                    <hr class="text-subline-2">
                                    <ul class="list list-marked">
                                        @foreach ($courses as $course)
                                            @if (!empty(trim($course)))
                                                <li>{{ $course }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (is_array($associations) && count(array_filter($associations)))
                                <div class="col-md-7 offset-top-41 offset-sm-top-0">
                                    <div><h6>@lang('frontend/doctors/doctors.association.title')</h6></div>
                                    <hr class="text-subline-2">
                                    <ul class="list list-marked">
                                        @foreach ($associations as $assoc)
                                            @if (!empty(trim($assoc)))
                                                <li>{{ $assoc }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    @endif

                    @if (!empty(trim($doctorTranslation->about)))
                        <div class="offset-top-30 text-start">
                            <h6>@lang('frontend/doctors/doctors.about.title')</h6>
                            <hr class="text-subline-2">
                            <p>{{ $doctorTranslation->about }}</p>
                        </div>
                    @endif

                    @php
                        $treatment = json_decode($doctorTranslation->treatment_of_disease, true);
                        $procedures = json_decode($doctorTranslation->procedures, true);
                    @endphp

                    @if (
                        (is_array($treatment) && count(array_filter($treatment))) ||
                        (is_array($procedures) && count(array_filter($procedures)))
                    )
                        <div class="row offset-top-30">
                            @if (is_array($treatment) && count(array_filter($treatment)))
                                <div class="col-md-5">
                                    <div><h6>@lang('frontend/doctors/doctors.treatment_of_disease.title')</h6></div>
                                    <hr class="text-subline-2">
                                    <ul class="list list-marked">
                                        @foreach ($treatment as $item)
                                            @if (!empty(trim($item)))
                                                <li>{{ $item }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (is_array($procedures) && count(array_filter($procedures)))
                                <div class="col-md-7 offset-top-41 offset-sm-top-0">
                                    <div><h6>@lang('frontend/doctors/doctors.procedures.title')</h6></div>
                                    <hr class="text-subline-2">
                                    <ul class="list list-marked">
                                        @foreach ($procedures as $proc)
                                            @if (!empty(trim($proc)))
                                                <li>{{ $proc }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    @endif



                    @php
                        $awards = json_decode($doctorTranslation->awards, true);
                    @endphp

                    @if (is_array($awards) && count(array_filter($awards)))
                        <div class="offset-top-30 text-start">
                            <h6>@lang('frontend/doctors/doctors.awards.title')</h6>
                            <hr class="text-subline-2">
                            <ul class="list list-marked">
                                @foreach ($awards as $award)
                                    @if (!empty(trim($award)))
                                        <li>{{ $award }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif



                  <!--<div class="offset-top-66">
                        <h6 class="text-start">skills</h6>
                        <hr class="text-subline">
                        <div class="offset-top-30">

                            <div class="progress-linear">
                                <div class="progress-header">
                                    <h6 class="text-gray-dark pull-left">Dedication</h6>
                                    <h6 class="text-primary offset-top-0 pull-right progress-value progress-linear-counter">50</h6>
                                </div>
                                <div class="progress-bar-linear-wrap progress-linear-body">
                                    <div class="progress-linear-bar progress-bar-linear bg-accent"></div>
                                </div>
                            </div>
                            <div class="offset-top-60">

                                <div class="progress-linear">
                                    <div class="progress-header">
                                        <h6 class="text-gray-dark pull-left">problem Solving</h6>
                                        <h6 class="text-primary offset-top-0 pull-right progress-value progress-linear-counter">20</h6>
                                    </div>
                                    <div class="progress-bar-linear-wrap progress-linear-body">
                                        <div class="progress-linear-bar progress-bar-linear bg-accent"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-60">

                                <div class="progress-linear">
                                    <div class="progress-header">
                                        <h6 class="text-gray-dark pull-left">professionalism</h6>
                                        <h6 class="text-primary offset-top-0 pull-right progress-value progress-linear-counter">87</h6>
                                    </div>
                                    <div class="progress-bar-linear-wrap progress-linear-body">
                                        <div class="progress-linear-bar progress-bar-linear bg-accent"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-60">

                                <div class="progress-linear">
                                    <div class="progress-header">
                                        <h6 class="text-gray-dark pull-left">Decision-making</h6>
                                        <h6 class="text-primary offset-top-0 pull-right progress-value progress-linear-counter">37</h6>
                                    </div>
                                    <div class="progress-bar-linear-wrap progress-linear-body">
                                        <div class="progress-linear-bar progress-bar-linear bg-accent"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <!-- Dr. Scott Riley’s blog posts-->
    <!--<section class="section-lg section bg-default-liac">
        <div class="container">
            <h3>Scott Riley’s Blog Posts</h3>
            <div class="row justify-content-sm-center row-40">
                <div class="col-sm-10 col-md-8 col-lg-4">

                    <article class="post post-modern post-modern-classic">

                        <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src=" {{ asset('images/post-13-370x250.jpg') }}" alt=""/></a>
                        </div>

                        <div class="post-content text-start">

                            <div class="post-title offset-top-8">
                                <h5 class="font-weight-bold"><a href="single-post.html">Reasons to Visit a Breast Specialist</a></h5>
                            </div>
                            <ul class="list-inline list-inline-dashed">
                                <li>June 21, 2023 at 8:12pm</li>
                                <li><a class="text-primary text-primary" href="single-post.html">News</a></li>
                            </ul>

                            <div class="post-body">
                                <div class="offset-top-14">
                                    <p>There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the importance of visiting...</p>
                                </div>
                            </div>
                            <div class="tags group group-sm">
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-4">

                    <article class="post post-modern post-modern-classic">

                        <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src="{{ asset('images/post-14-370x250.jpg') }}" alt=""/></a>
                        </div>

                        <div class="post-content text-start">

                            <div class="post-title offset-top-8">
                                <h5 class="font-weight-bold"><a href="single-post.html">Picking the Right Diagnostic Services for Efficient Results</a></h5>
                            </div>
                            <ul class="list-inline list-inline-dashed">
                                <li>June 21, 2023 at 8:12pm</li>
                                <li><a class="text-primary text-primary" href="single-post.html">News</a></li>
                            </ul>

                            <div class="post-body">
                                <div class="offset-top-14">
                                    <p>There have been a lot of cases in which people were not provided with accurate reports that eventually affected their medical treatment. There is always...</p>
                                </div>
                            </div>
                            <div class="tags group group-sm">
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-4">

                    <article class="post post-modern post-modern-classic">

                        <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src="{{ asset('images/post-15-370x250.jpg') }}" alt=""/></a>
                        </div>

                        <div class="post-content text-start">

                            <div class="post-title offset-top-8">
                                <h5 class="font-weight-bold"><a href="single-post.html">Preparing for an ECG in 8 Easy Steps: Tips From Our Diagnosticians</a></h5>
                            </div>
                            <ul class="list-inline list-inline-dashed">
                                <li>June 21, 2023 at 8:12pm</li>
                                <li><a class="text-primary text-primary" href="single-post.html">News</a></li>
                            </ul>

                            <div class="post-body">
                                <div class="offset-top-14">
                                    <p>An ECG stands for an "electrocardiogram," which is a test that measures and records the electrical activity of the heart. It is used by doctors to obtain...</p>
                                </div>
                            </div>
                            <div class="tags group group-sm">
                            </div>
                        </div>
                    </article>
                </div>
            </div><a class="btn btn-ellipse btn-primary offset-top-41 offset-md-top-60" href="blog-masonry.html">view all blog posts</a>
        </div>
    </section>-->
</x-app-layout>
