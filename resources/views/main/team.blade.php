<x-app-layout>

    <section class="breadcrumbs-custom bg-image context-dark slider-page" style="background-image: url({{ asset('images/bg-6.webp') }});" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title" style="margin-top: 10px;">@lang('global.pages.doctors')</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li class="active"><a href="{{ route('main.team') }}">@lang('global.pages.doctors')</a></li>
            </ul>
        </div>
    </section>

    <div id="app" class="app">
        <section>
            <div class="content">
                <div class="slot">
                    <div class="doctors-departments-section">
                        <div class="departments-list-compact">
                            @foreach($departments as $department)
                                <a href="#doctors-department-{{ Str::slug($department->name) }}" class="department">
                                    <img src="/images/uploads/{{ $department->image_src }}" alt="{{ $department->name }}">
                                    <div class="title">{{ $department->name }}</div>
                                    <div class="details">@lang('global.more')</div>
                                </a>
                            @endforeach
                        </div>
                        <div class="content">
                            @foreach($departments as $department)
                                <div class="doctors-departments-section-department" id="doctors-department-{{ Str::slug($department->name) }}">
                                    <div class="content">
                                        <h3>{{ $department->name }}</h3>
                                        <div class="doctors">
                                            @foreach($doctorsByDepartment[$department->department_id] ?? [] as $doctor)
                                                @php
                                                    $translation = $doctor->translations->where('locale', app()->getLocale())->first();
                                                @endphp

                                                @if ($translation)
                                                    <a href="{{ route('main.doctor.profile', ['slug' => $translation->full_slug]) }}" class="doctor-tile-compact-component">
                                                        <img src="/images/uploads/{{ $doctor->photo_square_id }}.webp">
                                                        <div class="content" style="height: 160px;">
                                                            <div class="name">{{ $translation->full_name }}</div>
                                                            <div class="description">
                                                                {{ implode(', ', json_decode($translation->position_main)) }}
                                                            </div>
                                                            <div class="more">@lang('global.more')</div>
                                                        </div>
                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-app-layout>
