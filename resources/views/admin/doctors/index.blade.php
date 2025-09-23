@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="card border">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="rounded-full">
                                                    @if(empty($department))
                                                        <img src="{{ $departments->first()->image }}" width="128"> {{ $departments->first()->admin_translation('uk')->name }}</div>
                                                    @else
                                                        <img src="{{ $department->image }}" width="128"> {{ $department->admin_translation('uk')->name }}</div>
                                                    @endif
                                        </div>
                                            <div class="row border-right">
                                                <span class="text-uppercase" style="border-bottom: 2px solid #ececec">Підтримувані мови</span>
                                                @php
                                                    $languages = [
                                                        'uk' => 'Українська',
                                                        'ru' => 'Російська',
                                                        'en' => 'Англійська',
                                                        // додати інші мови за потреби
                                                    ];
                                                @endphp
                                                @if(empty($department))
                                                    @foreach($departments->first()->translations as $lang)
                                                        <span class="">{{ $languages[$lang->locale] }}</span>
                                                    @endforeach
                                                @else
                                                    @foreach($department->translations as $lang)
                                                        <span class="">{{ $languages[$lang->locale] }}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="card-body bg-gray-500">
                                            <div class="row">
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-3">
                                                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#basicModal">Додати лікаря</a>
                                                    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    @php
                                                                        $dep = $department ?? $departments->first();
                                                                    @endphp
                                                                    <h5 class="modal-title" id="exampleModalLabel1">Додати лікаря у {{ $department->translation->name }}</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form method="post" action="{{ route('admin.doctor.department_add') }}" id="addDoctorForm">
                                                                    @csrf
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col mb-6">
                                                                            <input type="hidden" name="department" value="{{ $department->id }}">
                                                                            <label for="nameBasic" class="form-label">Лікар</label>
                                                                            <select name="doctor" class="form-control" id="doctorSearch"></select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-6">
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
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Закрити</button>
                                                                    <button type="submit" class="btn btn-primary add_doctor">Додати</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if(empty($department))
                                                    <div class="col-lg-3">
                                                        <a href="{{ route('admin.doctor.create', ['department_id' => $departments->first()->id]) }}" class="btn btn-outline-success">Створити лікаря</a>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <a href="{{ route('admin.doctor_department.edit', ['id' => $departments->first()->id]) }}" class="btn btn-outline-primary">Редагувати</a>
                                                    </div>
                                                @else
                                                    <div class="col-lg-3">
                                                        <a href="{{ route('admin.doctor.create', ['department_id' => $department->id]) }}" class="btn btn-outline-success">Створити лікаря</a>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <a href="{{ route('admin.doctor_department.edit', ['id' => $department->id]) }}" class="btn btn-outline-primary">Редагувати</a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="doctorResult">
                                <table class="table">
                                    <thead>
                                    <th>Ім'я</th>
                                    <th>Статус</th>
                                    <th>Дії</th>
                                    </thead>
                                    <tbody>
                                    @if(empty($department))
                                        @foreach($departments->first()->doctors as $doctor)
                                            <tr>
                                                <td>{{ $doctor->admin_translation('uk')->second_name ?? '' }} {{ $doctor->admin_translation('uk')->first_name ?? '' }} {{ $doctor->admin_translation('uk')->middle_name ?? '' }}</td>
                                                <td>@if($doctor->is_visible == '1')<span class="badge rounded-pill bg-label-success">Відображається</span>@else<span class="badge rounded-pill bg-label-warning">Не відображається</span>@endif</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{ route('admin.doctor.edit', ['id' => $doctor->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item" href="{{ route('admin.doctor.department_delete', ['id' => $doctor->id, 'department_id' => $department->id]) }}"><i class="bx bx-trash-alt me-1"></i>Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        @foreach($department->doctors as $doctor)
                                            <tr>
                                                <td>{{ $doctor->admin_translation('uk')->second_name ?? '' }} {{ $doctor->admin_translation('uk')->first_name ?? '' }} {{ $doctor->admin_translation('uk')->middle_name ?? '' }}</td>
                                                <td>@if($doctor->is_visible == '1')<span class="badge rounded-pill bg-label-success">Відображається</span>@else<span class="badge rounded-pill bg-label-warning">Не відображається</span>@endif</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{ route('admin.doctor.edit', ['id' => $doctor->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item" href="{{ route('admin.doctor.department_delete', ['id' => $doctor->id, 'department_id' => $department->id]) }}"><i class="bx bx-trash-alt me-1"></i>Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row mb-3">
                            <div class="col-md-12 right"><a href="{{ route('admin.doctor_department.create') }}" class="btn btn-secondary">Додати віділення</a></div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center text-uppercase" style="font-size: 20px; font-weight: bold">
                                Відділення
                            </div>
                            <div class="card-body">
                                <ul class="list-style-none">
                                    @foreach($departments as $department)
                                        <li class="text-uppercase mt-1"><a href="{{ route('admin.doctors.list', ['id' => $department->id]) }}">{{ $department->admin_translation('uk')->name ?? '' }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Ініціалізація select2 всередині модалки (щоб не було проблем із z-index)
            $('#basicModal').on('shown.bs.modal', function () {
                $('#doctorSearch').select2({
                    placeholder: 'Почніть набирати назву..',
                    language: 'uk',
                    width: '100%',
                    dropdownParent: $('#basicModal'),
                    ajax: {
                        url: '{{ route("admin.doctor.search") }}',
                        dataType: 'json',
                        delay: 250,
                        data: function (params) {
                            return { q: params.term }; // або term: params.term — на бек ми підтримуємо обидва
                        },
                        processResults: function (data) {
                            return { results: data }; // вже [{id, text}]
                        },
                        cache: true
                    }
                });
            });

            // Сабмітимо САМЕ ФОРМУ
            $('#addDoctorForm').on('submit', function (e) {
                e.preventDefault();
                var $form = $(this);

                $.ajax({
                    url: $form.attr('action'),
                    type: 'POST',
                    data: $form.serialize(),
                    success: function (html) {
                        // Оновлюємо список лікарів
                        $('#doctorResult').html(html);

                        // Закриваємо модалку
                        const modalEl = document.getElementById('basicModal');
                        const modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                        modal.hide();

                        // Скидаємо форму
                        $form[0].reset();
                        // Якщо треба — очистити select2
                        $('#doctorSearch').val(null).trigger('change');
                    },
                    error: function (xhr) {
                        // Вивести помилки валідації (за бажанням — красивіше)
                        alert('Не вдалося зберегти. Статус: ' + xhr.status);
                    }
                });
            });
        });
    </script>
@endsection
