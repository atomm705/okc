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
                                                <div class="rounded-full"><img src="{{ $department_active->image->src }}"> {{ $department_active->translation('uk')->name }}</div>
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
                                                @foreach($department_active->langs as $lang)
                                                    <span class="">{{ $languages[$lang->locale] }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="card-body bg-gray-500">
                                            <div class="row">
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-3"><a href="" class="btn btn-success">Додати лікаря</a></div>
                                                <div class="col-lg-3"><a href="{{ route('admin.doctor.create', ['department_id' => $department_active->department_id]) }}" class="btn btn-outline-success">Створити лікаря</a></div>
                                                <div class="col-lg-3"><a href="{{ route('admin.doctor_department.edit', ['id' => $department_active->department_id]) }}" class="btn btn-outline-primary">Редагувати</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <th>Ім'я</th>
                                    <th>Статус</th>
                                    <th>Дії</th>
                                    </thead>
                                    <tbody>
                                @foreach($department_active->admin_doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->doctor->translation('uk')->full_name ?? $doctor->doctor->translation('ru')->full_name ?? 'empty - '.$doctor->doctor->doctor_id}}</td>
                                        <td>@if($doctor->doctor->is_visible == '1')<span class="badge rounded-pill bg-label-success">Відображається</span>@else<span class="badge rounded-pill bg-label-warning">Не відображається</span>@endif</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('admin.doctor.edit', ['id' => $doctor->doctor->doctor_id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
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
                                        <li class="text-uppercase mt-1"><a href="{{ route('admin.doctors', ['id' => $department->department_id]) }}">{{ $department->translation('uk')->name ?? $department->translation('ru')->name }}</a></li>
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
