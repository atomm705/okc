<x-app-layout>

    <section class="breadcrumbs-custom bg-image context-dark slider-page"
             style="background-image: url({{ asset('images/bg-6.webp') }});"
             data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">
                {{ $current_category->translation->name ?? 'Расписание' }}
            </h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li><a href="{{ route('main.timetable') }}">@lang('global.pages.schedule')</a></li>
                <li class="white" >{{ $current_category->translation->name ?? 'Офтальмология' }}</li>
            </ul>
        </div>
    </section>

    <section class="section-lg section bg-default">
        <div class="container">
            <div class="row isotope-wrap">
                <div class="col-lg-3">
                    <div class="isotope-filters isotope-filters-vertical">
                        <h4 class="text-uppercase isotope-filters-title offset-top-34"></h4>
                        <ul class="list-inline list-inline-sm">
                            <li class="d-xl-none">
                                <p class="gray">{{ __('global.Choose a department') }}:</p>
                            </li>
                            <li class="section-relative">

                                <button class="isotope-filters-toggle btn btn-sm btn-default" data-custom-toggle="#isotope-1" data-custom-toggle-disable-on-blur="true" data-custom-toggle-hide-on-blur="true">{{ __('global.Choose a department') }}<span class="caret"></span></button>

                                <ul class="list-sm-inline isotope-filters-list" id="isotope-1">
                                    @foreach($categories as $category)
                                        @if($category->translation)
                                        <li class="list-timetable-item">
                                            <a href="{{ route('main.timetable', $category->slug) }}"
                                               class="{{ $current_category->slug === $category->slug ? 'active' : '' }}">
                                                {{ $category->translation->name }}
                                            </a>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9 offset-lg-top-0 offset-top-34">
                    <div class="row text-md-start isotope isotope-style-1" data-isotope-layout="fitRows" data-column-class=".col-1" data-lightgallery="group" data-lg-animation="lg-slide-circular" data-isotope-group="gallery">
                        <div class="col-1 isotope-item isotope-sizer"></div>

                        <div class="col-lg-12 isotope-item">

                            <div class="articles">
                                <h3 class="mb-3">{{ $current_category->translation->name ?? 'Без названия' }}</h3>
                                @foreach ($current_category->doctors as $doctor)
                                    @if($doctor->translation)
                                    @php
                                    $full_name = '';
                                    if($doctor->translation->second_name){
                                        $full_name .= $doctor->translation->second_name.' ';
                                    }
                                    if($doctor->translation->first_name){
                                        $full_name .= $doctor->translation->first_name.' ';
                                    }
                                    if($doctor->translation->middle_name){
                                        $full_name .= $doctor->translation->middle_name;
                                    }
                                    @endphp
                                    <div class="doctor-container mb-5">
                                        <div class="doctor d-flex align-items-start">
                                            @if ($doctor->photo_square)
                                                <img src="/{{ $doctor->photo_square }}"
                                                     alt="{{ $full_name ?? 'Фото доктора' }}"
                                                     class="img-fluid me-3"
                                                     style="margin: 0;border: 4px solid #e5e5e5;border-radius: 50%;width: 60px;height: 60px;">
                                            @endif
                                            <div class="info">
                                                <div class="name fw-bold ">{{ $full_name ?? 'Имя не указано' }}</div>
                                                @if ($doctor)
                                                    <a href="{{ route('doctors.show', ['slug' => $doctor->slug]) }}" class="info-doctor" >{{ __('frontend/doctors/doctors.doctor_profile') }}</a>
                                                @else
                                                    <p>Профиль недоступен</p>
                                                @endif
                                            </div>
                                        </div>

                                        @if (!empty($doctor->departments->first()->pivot->work_hours))
                                            <div class="table-responsive mt-3">
                                                <table class="schedule table table-bordered table-preset-1">
                                                    <thead>
                                                    <tr>
                                                        <th class="hours">Час</th>
                                                        @foreach (['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Нд'] as $day)
                                                            <th  class="hours">{{ $day }}</th>
                                                        @endforeach
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $dayMap = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Нд'];

                                                        $workHoursRaw = old('work_hours', $doctor->departments->first()->pivot->work_hours ?? []);
                                                        $storedHours = is_string($workHoursRaw) ? json_decode($workHoursRaw, true) : $workHoursRaw;

                                                    @endphp

                                                    @for ($hour = 8; $hour <= 17; $hour++)
                                                        <tr>
                                                            <td class="hour">{{ sprintf('%02d:00', $hour) }}</td>
                                                            @foreach ($dayMap as $dayIndex => $day)
                                                                @php
                                                                    $rendered = false;
                                                                    $entry = $storedHours[$dayIndex] ?? null;

                                                                    if ($entry && str_contains($entry, '-')) {
                                                                        [$start, $end] = explode('-', $entry);
                                                                        $startHour = (int) explode(':', $start)[0];
                                                                        $startMin = (int) explode(':', $start)[1];
                                                                        $endHour = (int) explode(':', $end)[0];
                                                                        $endMin = (int) explode(':', $end)[1];

                                                                        $startTotalMinutes = $startHour * 60 + $startMin;
                                                                        $endTotalMinutes = $endHour * 60 + $endMin;
                                                                        $durationMinutes = $endTotalMinutes - $startTotalMinutes;
                                                                        $durationRows = $durationMinutes / 60;

                                                                        if ($hour === $startHour) {
                                                                            echo '<td rowspan="' . $durationRows . '">';
                                                                            echo '<div class="line" style="--rows: ' . $durationRows . ';">';
                                                                            echo '<div class="start"> ' . $start . ' </div>';
                                                                            echo '<div class="icon-2"><span class="mdi mdi-clock"></span></div>';
                                                                            echo '<div class="finish">' . $end . '</div>';
                                                                            echo '</div>';
                                                                            echo '</td>';
                                                                            $rendered = true;
                                                                        } elseif ($hour > $startHour && $hour < $endHour) {
                                                                            $rendered = true; // рядок вже в rowspan
                                                                        }
                                                                    }

                                                                    if (!$rendered) {
                                                                        echo '<td></td>';
                                                                    }
                                                                @endphp
                                                            @endforeach
                                                        </tr>
                                                    @endfor
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <p>Расписание отсутствует</p>
                                        @endif
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>



