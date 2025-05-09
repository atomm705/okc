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
                <li >{{ $currentDepartment->name ?? 'Офтальмология' }}</li>
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

                            <div class="articles">
                                <h3 class="mb-3">{{ $currentDepartment->name ?? 'Без названия' }}</h3>

                                @foreach ($currentDepartment->department->doctors as $doctor)
                                    <div class="doctor-container mb-5">
                                        <div class="doctor d-flex align-items-start">
                                            @if ($doctor->imageSquare)
                                                <img src="{{ asset(str_replace('/assets', '', $doctor->imageSquare->src)) }}"
                                                     alt="{{ $doctor->translation->full_name ?? 'Фото доктора' }}"
                                                     class="img-fluid me-3"
                                                     style="margin: 0;border: 4px solid #e5e5e5;border-radius: 50%;width: 60px;height: 60px;">
                                            @endif

                                            <div class="info">
                                                <div class="name fw-bold ">{{ $doctor->translation->full_name ?? 'Имя не указано' }}</div>
                                                @if ($doctor->translation)
                                                    <a href="{{ route('main.doctor.profile', ['slug' => $doctor->translation->full_slug]) }}" class="info-doctor" >Профиль врача</a>
                                                @else
                                                    <p>Профиль недоступен</p>
                                                @endif
                                            </div>
                                        </div>

                                        @if (!empty($doctor->schedule))
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
                                                        $rowspans = [];


                                                        foreach ($doctor->schedule as $entry) {
                                                            if (!isset($entry['day']) || !isset($entry['time']) || $entry['time'] === 'нет приёма') continue;
                                                            [$start, $end] = explode('-', $entry['time']);
                                                            $startHour = (int) explode(':', $start)[0];
                                                            $endHour = (int) explode(':', $end)[0];
                                                            $rowspans[$entry['day']][] = [
                                                                'startHour' => $startHour,
                                                                'endHour' => $endHour,
                                                                'time' => $entry['time']
                                                            ];
                                                        }
                                                    @endphp

                                                    @for ($hour = 8; $hour <= 17; $hour++)
                                                        <tr>
                                                            <td class="hour">{{ sprintf('%02d:00', $hour) }}</td>
                                                            @foreach ($dayMap as $day)
                                                                @php
                                                                    $rendered = false;

                                                                    if (isset($rowspans[$day])) {
                                                                        foreach ($rowspans[$day] as $index => $block) {
                                                                            $startHour = $block['startHour'];
                                                                            $endHour = $block['endHour'];
                                                                            $duration = $endHour - $startHour;

                                                                             [$start, $end] = explode('-', $block['time']);

                                                                            if ($hour === $startHour) {
                                                                                echo '<td class"shadow" rowspan="' . $duration . '">';
                                                                                echo '<div class="line" style="--rows: ' . $duration . ';">';
                                                                                echo '<div class="start"> ' . $start . ' </div>';
                                                                                echo '<div class="icon-2"><span class="mdi mdi-clock"></span></div>';
                                                                                echo '<div class="finish">' . $end . '</div>';
                                                                                echo '</div>';
                                                                                echo '</td>';
                                                                                $rendered = true;
                                                                                break;
                                                                            } elseif ($hour > $startHour && $hour < $endHour) {

                                                                                $rendered = true;
                                                                                break;
                                                                            }
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
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>



