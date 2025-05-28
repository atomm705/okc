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
                                @foreach($category_active->category->groups as $group)
                                    <tr>
                                        <td>{{ $group->admin_translation()->name ?? ''}}</td>
                                        <td>@if($group->is_visible == '1')<span class="badge rounded-pill bg-label-success">Відображається</span>@else<span class="badge rounded-pill bg-label-warning">Не відображається</span>@endif</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('admin.prices.edit', ['slug' => $group->admin_translation()->slug]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @foreach($group->services as $service)
                                    <tr>
                                        <td>{{ $service->translation('uk')->name ?? ''}}</td>
                                        <td>{{ $service->price }}</td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-3">
                        <div class="col-md-12 right"><a href="{{ route('admin.prices.create') }}" class="btn btn-secondary">Додати віділення</a></div>
                    </div>
                    <div class="card">
                        <div class="card-header text-center text-uppercase" style="font-size: 20px; font-weight: bold">
                            Відділення
                        </div>
                        <div class="card-body">
                            <ul class="list-style-none">
                                @foreach($categories as $category)
                                    <li class="text-uppercase mt-1"><a href="{{ route('admin.prices.list', ['slug' => $category->admin_translation()->slug]) }}">{{ $category->admin_translation()->name ?? '' }}</a></li>
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
