@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">Підрозділи / Редагування</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <form method="post" action="{{ route('admin.divisions.update', ['id' => $division->id]) }}">
                            @csrf
                            <div>
                                <div class="nav-align-top nav-tabs-shadow mb-5">
                                    <ul class="nav nav-tabs" role="tablist">
                                        @foreach(config('app.fallback_locale') as $lang)
                                            <li class="nav-item" role="presentation">
                                                <button type="button" class="nav-link @if($lang == 'uk') active  @endif" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-{{ $lang }}" aria-controls="navs-top-{{ $lang }}" aria-selected="true">{{ strtoupper($lang) }}</button>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="tab-content">
                                        @foreach(config('app.fallback_locale') as $lang)
                                            <div class="tab-pane fade @if($lang == 'uk') show active @endif" id="navs-top-{{ $lang }}" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="name_{{ $lang }}" class="form-label">Назва {{ $lang }}</label>
                                                        <input type="text" class="form-control" id="name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="name_{{ $lang }}" @if($lang == 'uk') required @endif value="{{ $division->admin_translation($lang)->title }}"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="description_{{ $lang }}" class="form-label">Опис {{ $lang }}</label>
                                                        <textarea class="form-control" id="name_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="description_{{ $lang }}">{{ $division->admin_translation($lang)->description }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="inner_title_{{ $lang }}" class="form-label">Своя СЕО назва {{ $lang }}</label>
                                                        <input type="text" class="form-control" id="inner_title_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="inner_title_{{ $lang }}" @if($lang == 'uk') required @endif value="{{ $division->admin_translation($lang)->inner_title }}"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="inner_description_{{ $lang }}" class="form-label">Свій СЕО опис {{ $lang }}</label>
                                                        <textarea class="form-control" id="inner_description_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="inner_description_{{ $lang }}">{{ $division->admin_translation($lang)->inner_description }}</textarea>
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
                <div class="card-body mt-2">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" id="category_add">
                                @csrf
                                <div class="form-group">
                                    <label for="category" class="form-label">Категорія</label>
                                    <select name="category" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->category_id }}">{{ $category->translation->name ?? ''}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <button class="btn btn-primary" type="submit">Додати</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div id="category_result">
                                <table class="table">
                                    <thead>
                                        <th>#</th>
                                        <th>Категорія</th>
                                        <th>Дії</th>
                                    </thead>
                                    <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($division->categories as $category)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $category->category->translation->name }}</td>
                                            <td></td>
                                        </tr>
                                        @php $i++; @endphp
                                    @endforeach
                                    </tbody>
                                </table>
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
            $("#category_add").submit(function(e){
               e.preventDefault();
                let form = this;
                let formData = new FormData(form);

               $.ajax({
                   url: "{{ route('admin.divisions.category_add', ['id' => $division->id]) }}",
                   type: "POST",
                   data: formData,
                   processData: false,
                   contentType: false,
                   success: function(response){
                        $("#category_result").html(response)
                   }
               });
            });
        });
    </script>
@endsection
