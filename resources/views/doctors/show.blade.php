<x-app-layout>
    <section class="breadcrumbs-custom bg-image context-dark  slider-page breadcrumbs-doctor" style="background-image: url({{ asset('images/bg-6.webp') }});" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title custom-title-size">{{ $doctor->translation->second_name }} {{ $doctor->translation->first_name }} {{ $doctor->translation->middle_name }}</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li><a href="{{ route('main.team') }}">@lang('global.pages.doctors')</a></li>
                <li >{{ $doctor->translation->second_name }} {{ $doctor->translation->first_name }} {{ $doctor->translation->middle_name }}</li>
            </ul>
        </div>
    </section>

    <section class="section-lg section bg-default">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-sm-10 col-lg-4">
                    <div class="member-block-type-5 inset-lg-right-20 custom-position-photo center-photo ">
                        <img src="/{{ $doctor->photo_square }}" width="320" height="320" alt="{{ $doctor->translation->second_name }} {{ $doctor->translation->first_name }} {{ $doctor->translation->middle_name }}" />
                    </div>
                    <div class="offset-top-34 text-md-start inset-lg-right-20 padding--top">
                        <h6 class="text-start">@lang('frontend/doctors/doctors.certificates.title')</h6>
                        <hr class="text-subline">
                        <div class="row justify-content-sm-center justify-content-md-start offset-top-24 row-certificates certificate-content-center" data-lightgallery="group">
                            @foreach ($doctor->sertificates as $certificate)
                                <div class="col-sm-8 col-md-4 offset-top-20 certificate-center width-auto">
                                    <a class="thumbnail-classic" data-lightgallery="item" data-size="700x970"
                                       href="/{{ $certificate->image }}">
                                        <figure>
                                            <img class="certificates-mobil" width="100" height="138"
                                                 src="/{{ $certificate->image }}"
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
                        $position = $doctor->translation->position_all;
                        $education = $doctor->translation->educations;
                    @endphp

                    @if ((is_array($position) && count(array_filter($position))) || (is_array($education) && count(array_filter($education))))
                        <div class="row">
                            @if (is_array($position) && count(array_filter($position)))
                                <div class="col-md-5">
                                    <div><h6>@lang('frontend/doctors/doctors.position.title')</h6></div>
                                    <hr class="text-subline-1">
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
                                    <hr class="text-subline-1">
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
                        $specs = json_decode($doctor->translation->specialisations, true);
                    @endphp

                    @if (is_array($specs) && count(array_filter($specs)))
                        <div class="col-md-10 col-lg-8 offset-top-30">
                            <h6>@lang('frontend/doctors/doctors.specialization.title')</h6>
                            <hr class="text-subline-1">
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
                        $courses = json_decode($doctor->translation->courses, true);
                        $associations = json_decode($doctor->translation->associations);
                    @endphp

                    @if (
                        (is_array($courses) && count(array_filter($courses))) ||
                        (is_array($associations) && count(array_filter($associations)))
                    )
                        <div class="row offset-top-30">
                            @if (is_array($courses) && count(array_filter($courses)))
                                <div class="col-md-5">
                                    <div><h6>@lang('frontend/doctors/doctors.courses.title')</h6></div>
                                    <hr class="text-subline-1">
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
                                    <hr class="text-subline-1">
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

                    @if (!empty(trim($doctor->translation->about)))
                        <div class="offset-top-30 text-start">
                            <h6>@lang('frontend/doctors/doctors.about.title')</h6>
                            <hr class="text-subline-1">
                            <p>{!! $doctor->translation->about !!}</p>
                        </div>
                    @endif


                    @php
                        $treatment = json_decode($doctor->translation->treatment_of_disease, true);
                        $procedures = json_decode($doctor->translation->procedures, true);
                    @endphp

                    @if (
                        (is_array($treatment) && count(array_filter($treatment))) ||
                        (is_array($procedures) && count(array_filter($procedures)))
                    )
                        <div class="row offset-top-30">
                            @if (is_array($treatment) && count(array_filter($treatment)))
                                <div class="col-md-5">
                                    <div><h6>@lang('frontend/doctors/doctors.treatment_of_disease.title')</h6></div>
                                    <hr class="text-subline-1">
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
                                    <hr class="text-subline-1">
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
                        $awards = json_decode($doctor->translation->awards, true);
                    @endphp

                    @if (is_array($awards) && count(array_filter($awards)))
                        <div class="offset-top-30 text-start">
                            <h6>@lang('frontend/doctors/doctors.awards.title')</h6>
                            <hr class="text-subline-1">
                            <ul class="list list-marked">
                                @foreach ($awards as $award)
                                    @if (!empty(trim($award)))
                                        <li>{{ $award }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
