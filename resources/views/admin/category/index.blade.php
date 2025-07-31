@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row mb-3">
                <div class="col-md-12 right"><a href="{{ route('admin.category.create') }}" class="btn btn-secondary">Додати</a></div>
            </div>
            <div class="card">
                <h5 class="card-header">Категорії(Направлення)</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Назва</th>
                            <th>Послуг</th>
                            <th>Статус</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->admin_translation('uk')->name ?? '' }}</td>
                                <td><a href="{{ route('admin.groups', ['slug' => $category->slug]) }}">{{ $category->groups->count() }}</a></td>
                                <td>@if($category->is_visible == '1') <span class="text-green-600">Відображається</span>@endif @if($category->is_visible == '0') <span class="text-red-600">Не відображається</span>@endif </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.category.edit', ['id' => $category->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
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
    </div>
@endsection
