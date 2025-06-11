@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">Ціни / Редагування</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive text-nowrap">
                                <form method="post" action="{{ route('admin.prices.update', ['slug' => $category->translation('uk')->slug]) }}">
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
                                                                <input type="text" class="form-control" id="name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="name_{{ $lang }}" @if($lang == 'uk') required @endif value="{{ $category->name ?? '' }}"/>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="description_{{ $lang }}" class="form-label">Опис {{ $lang }}</label>
                                                                <textarea class="form-control" id="name_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="description_{{ $lang }}">{{ $category->description ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="page_text_before_{{ $lang }}" class="form-label">Текст перед: {{ $lang }}</label>
                                                                <textarea class="form-control" id="page_text_before_{{ $lang }}" name="page_text_before_{{ $lang }}" @if($lang == 'uk') @endif>{{ $category->page_text_before ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="page_text_after_{{ $lang }}" class="form-label">Текст після: {{ $lang }}</label>
                                                                <textarea class="form-control" id="page_text_after_{{ $lang }}" aria-describedby="defaultFormControlHelp" name="page_text_after_{{ $lang }}">{{ $category->page_text_after ?? ''}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                    <div class="form-group">
                                                        <label for="category" class="form-label">Зв'язати з категорією</label>
                                                        <select name="category" class="form-control">
                                                            <option value="">-- Оберіть категорію --</option>
                                                            @foreach($categories as $category_article)
                                                                <option value="{{ $category_article->category_id }}" @if(
                                                                    isset($category_article->serviceCategory) &&
                                                                    $category_article->serviceCategory->category_id == $category->category_id
                                                                     ) selected @endif>
                                                                    {{ $category_article->translation->name ?? ''}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="is_visible" class="form-label">Відображення: </label>
                                                        <select name="is_visible" class="form-control">
                                                            <option value="1">Відображати</option>
                                                            <option value="0">Не відображати</option>
                                                        </select>
                                                    </div>
                                                </div>
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
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        @foreach(config('app.fallback_locale') as $lang)
        CKEDITOR.replace('description_{{ $lang }}');
        CKEDITOR.replace('page_text_before_{{ $lang }}');
        CKEDITOR.replace('page_text_after_{{ $lang }}');
        @endforeach
     </script>
@endsection
