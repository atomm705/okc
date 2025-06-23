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
                                                <div class="col-lg-3"><a href="" class="btn btn-success">Додати лікаря</a></div>
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
                            <div class="card-body">
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
                                                <td>{{ $doctor->admin_translation('uk')->full_name ?? $doctor->doctor->admin_translation('ru')->full_name ?? 'empty - '.$doctor->id}}</td>
                                                <td>@if($doctor->is_visible == '1')<span class="badge rounded-pill bg-label-success">Відображається</span>@else<span class="badge rounded-pill bg-label-warning">Не відображається</span>@endif</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{ route('admin.doctor.edit', ['id' => $doctor->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
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
