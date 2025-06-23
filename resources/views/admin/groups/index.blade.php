@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-md-9">
                    <div class="row mb-3">
                        <div class="col-md-12 right"><a href="{{ route('admin.groups.create', ['slug' =>$category->slug]) }}" class="btn btn-secondary">Додати групу послуг</a></div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Групи послуг</h5>
                        @foreach($groups as $group)
                        <div class="table-responsive text-nowrap m-5">
                            <div class="mb-3 row">
                                <div class="col-md-6"><h3>{{ $group->admin_translation('uk')->name ?? '' }}</h3></div>
                                <div class="col-md-2">
                                    @if($group->is_visible == '1') <span class="text-success">Відображається</span>@endif @if($group->is_visible == '0') <span class="text-danger">Не відображається</span>@endif
                                </div>
                                <div class="col-md-4">
                                    <a class="dropdown-item" href="{{ route('admin.groups.edit', ['id' => $group->id]) }}"><i class="bx bx-edit-alt me-1"></i> Редагувати групу</a>
                                    <a class="dropdown-item" href="{{ route('admin.prices.create', ['group_id' => $group->id]) }}"><i class="bx bx-add-to-queue me-1"></i> Створити послугу</a>
                                </div>
                            </div>
                                <table class="table" id="list-{{ $group->id }}">
                                    <thead>
                                    <tr>
                                        <th>Назва</th>
                                        <th>Ціна</th>
                                        <th>Статус</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-3">
                                    @foreach($group->services as $service)
                                        <tr>
                                            <td>{{ $service->admin_translation('uk')->name }}</td>
                                            <td>{{ $service->price }}</td>
                                            <td>@if($service->is_visible == '1') <span class="text-green-600">Відображається</span>@endif @if($service->is_visible == '0') <span class="text-red-600">Не відображається</span>@endif </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('admin.prices.edit', ['id' => $service->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header text-center text-uppercase" style="font-size: 20px; font-weight: bold">
                            Відділення
                        </div>
                        <div class="card-body">
                            <ul class="list-style-none">
                                @foreach($categories as $category)
                                    <li class="text-uppercase mt-1"><a href="{{ route('admin.groups', ['slug' => $category->slug]) }}">{{ $category->admin_translation('uk')->name ?? '' }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        @foreach($groups as $group)
        $("#list-{{ $group->id }}").DataTable({
            paging: true,
            responsive: false,
            lengthMenu: [10, 50, 100, 200, 9999],
            pageLength: 50,
            order: [[0, 'asc']],
            scrollX: 400,
            language: {
                url: "/js/{{ app()->getLocale() }}.json"
            }
        });
        @endforeach
    });
</script>
@endsection
