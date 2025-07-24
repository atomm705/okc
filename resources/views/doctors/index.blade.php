<x-app-layout>
    <section class="breadcrumbs-custom bg-image context-dark slider-page breadcrumbs-top breadcrumbs-desktop-mt" style="background-image: url({{ asset('images/bg-6.webp') }});" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title" style="margin-top: 10px;">@lang('global.pages.doctors')</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li class="active"><a href="{{ route('main.team') }}">@lang('global.pages.doctors')</a></li>
            </ul>
        </div>
    </section>
    <div id="app" class="app">
        <section class="section-team-doctors">
            <div class="content">
                <div class="slot">
                    <div class="doctors-departments-section">
                        <div class="departments-list-compact">
                            @foreach($departments as $department)
                                @if($department->translation)
                                <a href="#doctors-department-{{ $department->slug }}" class="department">
                                    <img src="{{ $department->image }}" alt="{{ $department->translation->name }}">
                                    <div class="title">{{ $department->translation->name }}</div>
                                    <div class="details">{{ __('global.more') }}</div>
                                </a>
                                @endif
                            @endforeach
                        </div>
                        <div class="content">
                            @foreach($departments as $department)
                                @if($department->translation)
                                <div class="doctors-departments-section-department" id="doctors-department-{{ $department->slug }}">
                                    <div class="content"><h3>{{ $department->translation->name }}</h3>
                                        <div class="doctors">
                                            @foreach($department->doctors as $doctor)
                                                @if(isset($doctor->translation))
                                                    <a href="{{ route('doctors.show', ['slug' => $doctor->slug ?? '']) }}" class="doctor-tile-compact-component">

                                                        <img src="/{{ $doctor->photo_square }}">
                                                        <div class="content" style="height: 160px;">
                                                            <div class="name"> {{ $doctor->translation->second_name ?? '' }} {{ $doctor->translation->first_name ?? '' }} {{ $doctor->translation->middle_name ?? '' }}</div>
                                                            <div class="description">
                                                                @php
                                                                    $rawPositions = $doctor->translation->position_main ?? [];

                                                                    if (is_string($rawPositions)) {
                                                                        $positions = json_decode($rawPositions, true) ?? [];
                                                                    } elseif (is_array($rawPositions)) {
                                                                        $positions = $rawPositions;
                                                                    } else {
                                                                        $positions = [];
                                                                    }

                                                                    $display_positions = implode(', ', array_filter($positions));
                                                                @endphp
                                                                {{ $display_positions }}
                                                            </div>
                                                            <div class="more">{{ __('global.more') }}</div>
                                                        </div>
                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
