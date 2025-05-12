@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row mb-3">
                <div class="col-md-12 right"><a href="{{ route('admin.divisions.create') }}" class="btn btn-secondary">Додати</a></div>
            </div>
            <div class="card">
                <h5 class="card-header">Підрозділи</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Назва</th>
                            <th>Категорій</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($divisions as $division)
                        <tr>
                            <td>{{ $division->translation('uk')->title }}</td>
                            <td>{{ $division->categories_count }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('admin.divisions.edit', ['id' => $division->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
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
