@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">Лікарі / Створення</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <form method="post" action="{{ route('admin.doctor.store', ['department_id' => $department_id]) }}" enctype="multipart/form-data">
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
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="photo_square" class="form-label">Зображення 520*520</label>
                                                    <input type="file" class="form-control" name="photo_square">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="certificates" class="form-label">Сертифікати</label>
                                                    <input type="file" class="form-control" name="sertificates[]" multiple>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                @php \Carbon\Carbon::setLocale('uk'); @endphp
                                                @for($i = 0;$i<6;$i++)
                                                    <div class="col-md-2 mb-3">
                                                        <label for="working_hours_{{ $i }}" class="text-capitalize">{{ ucfirst(\Carbon\Carbon::create()->startOfWeek()->addDays($i)->translatedFormat('l')) }}</label>
                                                        <select name="working_hours[{{ $i }}][start]" class="form-control mb-3" id="working_hours_{{ $i }}">
                                                            <option value="">Початок роботи</option>
                                                            @for ($time = strtotime('08:00'); $time <= strtotime('19:00'); $time += 15 * 60)
                                                                <option value="{{ date('H:i', $time) }}">{{ date('H:i', $time) }}</option>
                                                            @endfor
                                                        </select>
                                                        <select name="working_hours[{{ $i }}][end]" class="form-control mb-3" id="working_hours_{{ $i }}">
                                                            <option value="">Кінець роботи</option>
                                                            @for ($time = strtotime('08:00'); $time <= strtotime('19:00'); $time += 15 * 60)
                                                                <option value="{{ date('H:i', $time) }}">{{ date('H:i', $time) }}</option>
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
                                                        <input type="text" class="form-control" id="second_name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="second_name_{{ $lang }}" @if($lang == 'uk') required @endif/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="first_name_{{ $lang }}" class="form-label">Ім'я {{ $lang }}</label>
                                                        <input type="text" class="form-control" id="first_name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="first_name_{{ $lang }}" @if($lang == 'uk') required @endif/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="middle_name_{{ $lang }}" class="form-label">По-батькові {{ $lang }}</label>
                                                        <input type="text" class="form-control" id="middle_name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="middle_name_{{ $lang }}" @if($lang == 'uk') required @endif/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="full_name_{{ $lang }}" class="form-label">Повне ПІБ {{ $lang }}</label>
                                                        <input type="text" class="form-control" id="full_name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="full_name_{{ $lang }}" @if($lang == 'uk') required @endif readonly/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="short_name_{{ $lang }}" class="form-label">Скорочене ПІБ {{ $lang }}</label>
                                                        <input type="text" class="form-control" id="short_name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="short_name_{{ $lang }}" @if($lang == 'uk') required @endif readonly/>
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
                                                        <input type="text" class="form-control" id="email_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="email_{{ $lang }}"/>
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
                                                        <input type="text" class="form-control" id="position_main_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="position_main_{{ $lang }}"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="position_all_{{ $lang }}" class="form-label">Всі посади {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(вводити через кому)</span></label>
                                                        <input type="text" class="form-control" id="position_all_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="position_all_{{ $lang }}"/>
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
                                                        <textarea class="form-control" id="educations_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="educations_{{ $lang }}" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="courses_{{ $lang }}" class="form-label">Курси {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        <textarea class="form-control" id="courses_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="courses_{{ $lang }}" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="awards_{{ $lang }}" class="form-label">Нагороди {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        <textarea class="form-control" id="awards_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="awards_{{ $lang }}" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="associations_{{ $lang }}" class="form-label">Участь в асоціаціях {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        <textarea class="form-control" id="associations_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="associations_{{ $lang }}" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="treatment_of_disease_{{ $lang }}" class="form-label">Захворювання, що лікує {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        <textarea class="form-control" id="treatment_of_disease_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="treatment_of_disease_{{ $lang }}" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="procedures_{{ $lang }}" class="form-label">Процедури, що виконує {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        <textarea class="form-control" id="procedures_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="procedures_{{ $lang }}" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="specialisation_{{ $lang }}" class="form-label">Спеціалізації {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        <textarea class="form-control" id="specialisation_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="specialisation_{{ $lang }}" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="about_{{ $lang }}" class="form-label">Про лікаря {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                        <textarea class="form-control" id="about_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="about_{{ $lang }}" rows="15"></textarea>
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
                                                        <input type="text" class="form-control" id="seo_title_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="seo_title_{{ $lang }}"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="seo_description_{{ $lang }}" class="form-label">Опис {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none"></span></label>
                                                        <input type="text" class="form-control" id="seo_description_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="seo_description_{{ $lang }}"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="seo_keywords_{{ $lang }}" class="form-label">Ключові слова {{ $lang }} <span style="font-weight: normal; font-size: 11px; text-transform: none"></span></label>
                                                        <input type="text" class="form-control" id="seo_keywords_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="seo_keywords_{{ $lang }}"/>
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
