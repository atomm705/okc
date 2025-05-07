<x-app-layout>


    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark slider-page"
             style="background-image: url({{ asset('images/bg-6.webp') }});"
             data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">
                {{ $currentDepartment->name ?? 'Расписание' }}
            </h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li><a href="{{ route('main.timetable') }}">@lang('global.pages.schedule')</a></li>
                <li class="active">{{ $currentDepartment->name ?? 'Офтальмология' }}</li>
            </ul>
        </div>
    </section>
    <!-- Timetable-->





    <section class="section-lg section bg-default">
        <div class="container">
            <div class="row isotope-wrap">
                <div class="col-lg-3">
                    <div class="isotope-filters isotope-filters-vertical">
                        <h4 class="text-uppercase isotope-filters-title offset-top-34"></h4>
                        <ul class="list-inline list-inline-sm">
                            <li class="d-xl-none">
                                <p>Choose your category:</p>
                            </li>
                            <li class="section-relative">

                                <button class="isotope-filters-toggle btn btn-sm btn-default" data-custom-toggle="#isotope-1" data-custom-toggle-disable-on-blur="true" data-custom-toggle-hide-on-blur="true">Filter<span class="caret"></span></button>

                                <ul class="list-sm-inline isotope-filters-list" id="isotope-1">
                                    @foreach($departments as $department)
                                        <li class="list-timetable-item">
                                            <a href="{{ route('main.timetable', $department->slug) }}"
                                               class="{{ $currentDepartment->slug === $department->slug ? 'active' : '' }}">
                                                {{ $department->name }}
                                            </a>
                                        </li>
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



                            <h3 class="mb-3">{{ $currentDepartment->name ?? 'Без названия' }}</h3>

                            @foreach ($currentDepartment->department->doctors as $doctor)
                                <div class="doctor mb-3 p-3 border rounded">
                                    <h4 class="mb-2">{{ $doctor->translation->full_name ?? 'Имя не указано' }}</h4>
                                    @if ($doctor->translation)

                                        <a href="{{ route('main.doctor.profile', ['slug' => $doctor->translation->full_slug]) }}" class="doctor-tile-compact-component">
                                            Профиль врача
                                        </a>
                                    @else

                                        <p>Профиль недоступен</p>
                                    @endif
                                    @if (!empty($doctor->schedule))
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center align-middle schedule-table">
                                                <thead class="table-light">
                                                <tr>
                                                    <th>Время</th>
                                                    @foreach (['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'] as $day)
                                                        <th>{{ $day }}</th>
                                                    @endforeach
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @for ($hour = 8; $hour <= 17; $hour++)
                                                    <tr>
                                                        <td>{{ sprintf('%02d:00', $hour) }}</td>
                                                        @foreach (['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'] as $day)
                                                            @php
                                                                $blockRendered = false;

                                                                if (!empty($doctor->schedule)) {
                                                                    foreach ($doctor->schedule as $schedule) {
                                                                        if ($schedule['day'] === $day && $schedule['time'] !== 'нет приёма') {
                                                                            [$start, $end] = explode('-', $schedule['time']);
                                                                            $startHour = (int) explode(':', $start)[0];
                                                                            $endHour = (int) explode(':', $end)[0];

                                                                            if ($hour === $startHour) {
                                                                                $rowspan = $endHour - $startHour;
                                                                                $blockRendered = true;
                                                                                echo "<td rowspan=\"$rowspan\" class=\"bg-success text-white\">$start - $end</td>";
                                                                            } elseif ($hour > $startHour && $hour < $endHour) {
                                                                                $blockRendered = true;

                                                                            }
                                                                        }
                                                                    }
                                                                }

                                                                if (!$blockRendered) {
                                                                    echo "<td></td>";
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
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>



