@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">Група послуг / Створення</h5>
                <div class="card-body">
                    <div>
                        <form method="post" action="{{ route('admin.groups.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="category_id">Категорія</label>
                                        <select name="category_id" class="form-control">
                                            @foreach($categories as $cat)
                                                <option value="{{ $cat->id }}" @if($cat->id == $category->id) selected @endif>{{ $cat->admin_translation('uk')->name }}</option>
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
                                    <div class="form-group mb-2">
                                        <label for="is_group">Відображати в меню</label>
                                        <select name="is_group" class="form-control">
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
                                                        <div class="col-md-12 mb-3">
                                                            <label for="name_{{ $lang }}" class="form-label">Назва {{ $lang }}</label>
                                                            <input type="text" class="form-control" id="name_{{ $lang }}" placeholder="" aria-describedby="defaultFormControlHelp" name="name_{{ $lang }}" @if($lang == 'uk') required @endif/>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="text_{{ $lang }}" class="form-label">Опис {{ $lang }}</label>
                                                            <textarea name="text_{{ $lang }}" id="text_{{ $lang }}" class="form-control" rows="10"></textarea>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="text_before_{{ $lang }}" class="form-label">Текст до {{ $lang }}</label>
                                                            <textarea name="text_before_{{ $lang }}" id="text_before_{{ $lang }}" class="form-control" rows="10"></textarea>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="text_after_{{ $lang }}" class="form-label">Текст після {{ $lang }}</label>
                                                            <textarea name="text_after_{{ $lang }}" id="text_after_{{ $lang }}" class="form-control" rows="10"></textarea>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="seo_title_{{ $lang }}" class="form-label">Свій СЕО title {{ $lang }}</label>
                                                            <textarea name="seo_title_{{ $lang }}" class="form-control" rows="5"></textarea>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="seo_description_{{ $lang }}" class="form-label">Свій СЕО description {{ $lang }}</label>
                                                            <textarea name="seo_description_{{ $lang }}" class="form-control" rows="5"></textarea>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="seo_keywords_{{ $lang }}" class="form-label">Свій СЕО keywords {{ $lang }}</label>
                                                            <textarea name="seo_keywords_{{ $lang }}" class="form-control" rows="5"></textarea>
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
        @endsection
        @section('script')
            <script>
                @foreach(config('app.fallback_locale') as $lang)
                tinymce.init({
                    selector: 'textarea#text_{{ $lang }}', // Replace this CSS selector to match the placeholder element for TinyMCE
                    plugins: 'code table lists',
                    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
                    license_key: 'gpl'
                });
                tinymce.init({
                    selector: 'textarea#text_before_{{ $lang }}', // Replace this CSS selector to match the placeholder element for TinyMCE
                    plugins: 'code table lists',
                    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
                    license_key: 'gpl'
                });
                tinymce.init({
                    selector: 'textarea#text_after_{{ $lang }}', // Replace this CSS selector to match the placeholder element for TinyMCE
                    plugins: 'code table lists',
                    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
                    license_key: 'gpl'
                });
                @endforeach
            </script>
@endsection
