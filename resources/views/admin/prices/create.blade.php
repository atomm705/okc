@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">Послуги / Створення</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive text-nowrap">
                                <form method="post" action="{{ route('admin.prices.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-2">
                                                <label for="service_id">Група послуг</label>
                                                <select name="service_id" class="form-control">
                                                    @foreach($groups as $gr)
                                                        <option value="{{ $gr->id }}" @if($gr->id == $group->id) selected @endif>{{ $gr->admin_translation('uk')->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="is_visible">Відображати</label>
                                                <select name="is_visible" class="form-control">
                                                    <option value="1">Відображати</option>
                                                    <option value="0">Не відображати</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
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
                                                                    <input type="text" class="form-control" id="name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="name_{{ $lang }}" @if($lang == 'uk') required @endif/>
                                                                </div>
                                                            </div><div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="price_{{ $lang }}" class="form-label">Ціна {{ $lang }}</label>
                                                                    <input type="text" class="form-control" id="price_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="price_{{ $lang }}"/>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="price_promo_{{ $lang }}" class="form-label">Акційна ціна {{ $lang }}</label>
                                                                    <input type="text" class="form-control" id="price_promo_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="price_promo_{{ $lang }}"/>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="time_{{ $lang }}" class="form-label">Час {{ $lang }}</label>
                                                                    <input type="text" class="form-control" id="time_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="time_{{ $lang }}"/>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="note_{{ $lang }}" class="form-label">Опис {{ $lang }}</label>
                                                                    <textarea class="form-control" id="note_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="note_{{ $lang }}"></textarea>
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
                                    </div>
                                </form>
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
        @foreach(config('app.fallback_locale') as $lang)
        CKEDITOR.replace('note_{{ $lang }}');
        @endforeach
    </script>
@endsection
