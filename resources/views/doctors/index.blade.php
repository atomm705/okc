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
                            <a href="#doctors-department-{{ $department->translations()->slug }}" class="department">
                                <img src="{{ $department->image->src }}" alt="{{ $department->translations()->name }}">
                                <div class="title">{{ $department->translations()->name }}</div>
                                <div class="details">{{ __('global.more') }}</div>
                            </a>
                            @endforeach
                        </div>
                        <div class="content">
                            @foreach($departments as $department)
                            <div class="doctors-departments-section-department" id="doctors-department-{{ $department->translations()->slug }}">
                                <div class="content"><h3>{{ $department->translations()->name }}</h3>
                                    <div class="doctors">
                                        @foreach($department->doctors as $doctor)
                                            @if(isset($doctor->translation->full_slug))
                                            <a href="{{ route('doctors.show', ['slug' => $doctor->translations()->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img src="{{ $doctor->image->src }}">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctor->translations()->full_name }}</div>
                                                <!-- <div class="description">{{ $doctor->translations()->position_main }}</div>-->
                                                   <div class="description">{{ implode(', ', json_decode($doctor->translations()->position_main)) }}</div>
                                                    <div class="more">{{ __('global.more') }}</div>
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
