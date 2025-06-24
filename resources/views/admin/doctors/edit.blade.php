@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">Лікарі / {{ $doctor->admin_translation('uk')->second_name ?? '' }} {{ $doctor->admin_translation('uk')->first_name ?? '' }} {{ $doctor->admin_translation('uk')->middle_name ?? '' }} / Редагування</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <form method="post" action="{{ route('admin.doctor.update', ['id' => $doctor->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div class="nav-align-top nav-tabs-shadow mb-5">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-info" aria-controls="navs-top-info" aria-selected="true">Загальна інформація</button>
                                        </li>
                                        @foreach(config('app.fallback_locale') as $lang)
                                            <li class="nav-item" role="presentation">
                                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-{{ $lang }}" aria-controls="navs-top-{{ $lang }}" aria-selected="true">{{ strtoupper($lang) }}</button>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="navs-top-info" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3>Зображення</h3>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="photo_full" class="form-label">Зображення 384*410</label>
                                                    <input type="file" class="form-control" name="photo_full">
                                                    <div class="photo_full-result">
                                                        @if($doctor->photo_full)
                                                            @if(file_exists(public_path($doctor->photo_full)))
                                                                <div class="col-md-12 mt-3">
                                                                    <div class="image">
                                                                        <img src="{{ asset($doctor->photo_full) }}" width="150">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mt-2">
                                                                    <span class="btn btn-outline-danger cursor-pointer" id="photo_full_del" data-doctor="{{ $doctor->id }}">Видалити зображення</span>
                                                                </div>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="photo_square" class="form-label">Зображення 520*520</label>
                                                    <input type="file" class="form-control" name="photo_square">
                                                    <div class="photo_square-result">
                                                        @if($doctor->photo_square)
                                                            @if(file_exists(public_path($doctor->photo_square)))
                                                                <div class="col-md-12 mt-3">
                                                                    <div class="image">
                                                                        <img src="{{ asset($doctor->photo_square) }}" width="150">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mt-2">
                                                                    <span class="btn btn-outline-danger cursor-pointer" id="image_del" data-doctor="{{ $doctor->id }}">Видалити зображення</span>
                                                                </div>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="certificates" class="form-label">Сертифікати</label>
                                                    <input type="file" class="form-control" name="sertificates[]" multiple>
                                                    <div class="row">
                                                        @if($doctor->sertificates)
                                                            @foreach($doctor->sertificates as $sertificate)
                                                                @if(file_exists(public_path($sertificate->image)))
                                                                    <div class="col-md-2">
                                                                        <div class="mt-3">
                                                                            <div class="image">
                                                                                <img src="{{ asset($sertificate->image) }}" width="150">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-2">
                                                                            <span class="btn btn-outline-danger cursor-pointer" id="sertificate_del" data-sertificate="{{ $sertificate->id }}">Видалити зображення</span>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                @php
                                                    \Carbon\Carbon::setLocale('uk');
                                                    $workHoursRaw = old('work_hours', $doctor->departments->first()->pivot->work_hours ?? []);
                                                    $storedHours = is_string($workHoursRaw) ? json_decode($workHoursRaw, true) : $workHoursRaw;
                                                @endphp

                                                @for($i = 0; $i < 6; $i++)
                                                    @php
                                                        $start = '';
                                                        $end = '';
                                                        if (!empty($storedHours[$i]) && str_contains($storedHours[$i], '-')) {
                                                            [$start, $end] = explode('-', $storedHours[$i]);
                                                        }
                                                    @endphp

                                                    <div class="col-md-2 mb-3">
                                                        <label for="working_hours_{{ $i }}" class="text-capitalize">
                                                            {{ ucfirst(\Carbon\Carbon::create()->startOfWeek()->addDays($i)->translatedFormat('l')) }}
                                                        </label>

                                                        <select name="working_hours[{{ $i }}][start]" class="form-control mb-2" id="working_hours_start_{{ $i }}">
                                                            <option value="">Початок роботи</option>
                                                            @for ($time = strtotime('08:00'); $time <= strtotime('19:00'); $time += 15 * 60)
                                                                @php $t = date('H:i', $time); @endphp
                                                                <option value="{{ $t }}" @selected($t === $start)>{{ $t }}</option>
                                                            @endfor
                                                        </select>

                                                        <select name="working_hours[{{ $i }}][end]" class="form-control" id="working_hours_end_{{ $i }}">
                                                            <option value="">Кінець роботи</option>
                                                            @for ($time = strtotime('08:00'); $time <= strtotime('19:00'); $time += 15 * 60)
                                                                @php $t = date('H:i', $time); @endphp
                                                                <option value="{{ $t }}" @selected($t === $end)>{{ $t }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                        @foreach(config('app.fallback_locale') as $lang)
                                            <div class="tab-pane fade" id="navs-top-{{ $lang }}" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="second_name_{{ $lang }}" class="form-label">Прізвище {{ $lang }}</label>
                                                        <input type="text" class="form-control" id="second_name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="second_name_{{ $lang }}" @if($lang == 'uk') required @endif value="{{ $doctor->admin_translation($lang)->second_name ?? '' }}"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="first_name_{{ $lang }}" class="form-label">Ім'я {{ $lang }}</label>
                                                        <input type="text" class="form-control" id="first_name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="first_name_{{ $lang }}" @if($lang == 'uk') required @endif value="{{ $doctor->admin_translation($lang)->first_name ?? '' }}"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="middle_name_{{ $lang }}" class="form-label">По-батькові {{ $lang }}</label>
                                                        <input type="text" class="form-control" id="middle_name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="middle_name_{{ $lang }}" @if($lang == 'uk') required @endif value="{{ $doctor->admin_translation($lang)->middle_name ?? '' }}"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="full_name_{{ $lang }}" class="form-label">Повне ПІБ {{ $lang }}</label>
                                                        <input type="text" class="form-control" id="full_name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="full_name_{{ $lang }}" @if($lang == 'uk') required @endif readonly value="{{ $doctor->admin_translation($lang)->second_name ?? '' }} {{ $doctor->admin_translation($lang)->first_name ?? '' }} {{ $doctor->admin_translation($lang)->middle_name ?? '' }}"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="short_name_{{ $lang }}" class="form-label">Скорочене ПІБ {{ $lang }}</label>
                                                        @php
                                                            $t = optional($doctor->admin_translation($lang));
                                                            $short = $t->second_name ?? '';
                                                            $short .= $t->first_name ? ' ' . mb_substr($t->first_name, 0, 1) . '.' : '';
                                                            $short .= $t->middle_name ? mb_substr($t->middle_name, 0, 1) . '.' : '';
                                                        @endphp
                                                        <input type="text" class="form-control" id="short_name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="short_name_{{ $lang }}" @if($lang == 'uk') required @endif readonly  value="{{ $short }}"/>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>Контакти</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="email_{{ $lang }}" class="form-label">E-mail {{ $lang }}</label>
                                                        <input type="text" class="form-control" id="email_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="email_{{ $lang }}" value="{{ $doctor->admin_translation($lang)->email ?? '' }}"/>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>Посада</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="position_main_{{ $lang }}" class="form-label">Головна посада {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(вводити через кому)</span></label>
                                                        @php
                                                            $translation = optional($doctor->admin_translation($lang));
                                                            $positionMain = json_decode($translation->position_main, true) ?? [];
                                                            $positionMainString = is_array($positionMain) ? implode(',', $positionMain) : $positionMain;
                                                        @endphp

                                                        <input type="text"
                                                               class="form-control"
                                                               id="position_main_{{ $lang }}"
                                                               name="position_main_{{ $lang }}"
                                                               value="{{ old('position_main_' . $lang, $positionMainString) }}"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="position_all_{{ $lang }}" class="form-label">Всі посади {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(вводити через кому)</span></label>
                                                        @php
                                                            $translation = optional($doctor->admin_translation($lang));
                                                            $positionAll = json_decode($translation->position_all, true) ?? [];
                                                            $positionAllString = is_array($positionAll) ? implode(',', $positionAll) : $positionAll;
                                                        @endphp

                                                        <input type="text"
                                                               class="form-control"
                                                               id="position_all_{{ $lang }}"
                                                               name="position_all_{{ $lang }}"
                                                               value="{{ old('position_all_' . $lang, $positionAllString) }}"
                                                        />
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>Дані про лікаря</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="educations_{{ $lang }}" class="form-label">Освіта {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        @php
                                                            $educationItems = isset($doctor) && is_array($doctor->admin_translation($lang)?->educations)
                                                                ? implode("\n", $doctor->admin_translation($lang)->educations)
                                                                : '';
                                                        @endphp

                                                        <textarea class="form-control"
                                                                  id="educations_{{ $lang }}"
                                                                  name="educations_{{ $lang }}"
                                                                  rows="5">{{ old('educations_'.$lang, $educationItems) }}</textarea>                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="courses_{{ $lang }}" class="form-label">Курси {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        @php
                                                            $courses = optional($doctor->admin_translation($lang))->courses;
                                                            $coursesText = is_array($courses)
                                                                ? implode("\n", $courses)
                                                                : (is_string($courses) ? implode("\n", json_decode($courses, true) ?? []) : '');
                                                        @endphp

                                                        <textarea class="form-control"
                                                                  id="courses_{{ $lang }}"
                                                                  name="courses_{{ $lang }}"
                                                                  rows="5">{{ old('courses_' . $lang, $coursesText) }}</textarea>                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="awards_{{ $lang }}" class="form-label">Нагороди {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        @php
                                                            $awards = optional($doctor->admin_translation($lang))->awards ?? [];
                                                            if (is_string($awards)) {
                                                                $awards = json_decode($awards, true) ?? [];
                                                            }
                                                        @endphp

                                                        <textarea class="form-control"
                                                                  id="awards_{{ $lang }}"
                                                                  name="awards_{{ $lang }}"
                                                                  rows="5">{{ old('awards_'.$lang, implode("\n", $awards)) }}</textarea>                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="associations_{{ $lang }}" class="form-label">Участь в асоціаціях {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        @php
                                                            $associations = optional($doctor->admin_translation($lang))->associations ?? [];
                                                            if (is_string($associations)) {
                                                                $associations = json_decode($associations, true) ?? [];
                                                            }
                                                        @endphp

                                                        <textarea class="form-control"
                                                                  id="associations_{{ $lang }}"
                                                                  aria-describedby="defaultFormControlHelp"
                                                                  name="associations_{{ $lang }}"
                                                                  rows="5">{{ old('associations_'.$lang, implode("\n", $associations)) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="treatment_of_disease_{{ $lang }}" class="form-label">Захворювання, що лікує {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        @php
                                                            $treatment = optional($doctor->admin_translation($lang))->treatment_of_disease ?? [];
                                                            if (is_string($treatment)) {
                                                                $treatment = json_decode($treatment, true) ?? [];
                                                            }
                                                        @endphp

                                                        <textarea class="form-control"
                                                                  id="treatment_of_disease_{{ $lang }}"
                                                                  aria-describedby="defaultFormControlHelp"
                                                                  name="treatment_of_disease_{{ $lang }}"
                                                                  rows="5">{{ old('treatment_of_disease_'.$lang, implode("\n", $treatment)) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="procedures_{{ $lang }}" class="form-label">Процедури, що виконує {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        @php
                                                            $procedures = optional($doctor->admin_translation($lang))->procedures ?? [];
                                                            if (is_string($procedures)) {
                                                                $procedures = json_decode($procedures, true) ?? [];
                                                            }
                                                        @endphp

                                                        <textarea class="form-control"
                                                                  id="procedures_{{ $lang }}"
                                                                  aria-describedby="defaultFormControlHelp"
                                                                  name="procedures_{{ $lang }}"
                                                                  rows="5">{{ old('procedures_'.$lang, implode("\n", $procedures)) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="specialisation_{{ $lang }}" class="form-label">Спеціалізації {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        @php
                                                            $specialisation = optional($doctor->admin_translation($lang))->specialisation ?? [];
                                                            if (is_string($specialisation)) {
                                                                $specialisation = json_decode($specialisation, true) ?? [];
                                                            }
                                                        @endphp

                                                        <textarea class="form-control"
                                                                  id="specialisation_{{ $lang }}"
                                                                  aria-describedby="defaultFormControlHelp"
                                                                  name="specialisation_{{ $lang }}"
                                                                  rows="5">{{ old('specialisation_'.$lang, implode("\n", $specialisation)) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="about_{{ $lang }}" class="form-label">Про лікаря {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none"></span></label>
                                                        <textarea class="form-control" id="about_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="about_{{ $lang }}" rows="15">{{ $doctor->admin_translation($lang)->about ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>SEO</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="seo_title_{{ $lang }}" class="form-label">Заголовок {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none"></span></label>
                                                        <input type="text" class="form-control" id="seo_title_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="seo_title_{{ $lang }}" value="{{ json_decode(optional($doctor->admin_translation($lang))->page_seo ?? '', true)['title'] ?? '' }}"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="seo_description_{{ $lang }}" class="form-label">Опис {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none"></span></label>
                                                        <input type="text" class="form-control" id="seo_description_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="seo_description_{{ $lang }}" value="{{ json_decode(optional($doctor->admin_translation($lang))->page_seo ?? '', true)['description'] ?? '' }}"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="seo_keywords_{{ $lang }}" class="form-label">Ключові слова {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none"></span></label>
                                                        <input type="text" class="form-control" id="seo_keywords_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="seo_keywords_{{ $lang }}" value="{{ json_decode(optional($doctor->admin_translation($lang))->page_seo ?? '', true)['keywords'] ?? '' }}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="row mt-2">
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-primary">Зберегти</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        @foreach(config('app.fallback_locale') as $lang)
        CKEDITOR.replace('about_{{ $lang }}');
        @endforeach
    </script>
@endsection
