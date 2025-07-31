@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">Підрозділи / Створення</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <form method="post" action="{{ route('admin.divisions.store') }}">
                        @csrf
                        <div>
                            <div class="nav-align-top nav-tabs-shadow mb-5">
                                <ul class="nav nav-tabs" role="tablist">
                                    @foreach(config('app.available_locales') as $lang)
                                        <li class="nav-item" role="presentation">
                                            <button type="button" class="nav-link @if($lang == 'uk') active  @endif" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-{{ $lang }}" aria-controls="navs-top-{{ $lang }}" aria-selected="true">{{ strtoupper($lang) }}</button>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content">
                                    @foreach(config('app.available_locales') as $lang)
                                        <div class="tab-pane fade @if($lang == 'uk') show active @endif" id="navs-top-{{ $lang }}" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="name_{{ $lang }}" class="form-label">Назва {{ $lang }}</label>
                                                    <input type="text" class="form-control" id="name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="name_{{ $lang }}" @if($lang == 'uk') required @endif/>
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
@endsection
