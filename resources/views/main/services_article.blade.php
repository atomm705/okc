<x-app-layout>
    <section class="breadcrumbs-custom bg-image context-dark slider-page" style="background-image: url({{ asset('images/bg-6.webp ') }}); " data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">@lang('global.pages.services')</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li>@lang('global.pages.services')</li>
                <li><a href="{{ route('main.category', ['category_slug' => $article->article->category->translation->slug]) }}">{{ $article->article->category->translation->name }}</a></li>
                <li>{{ $article->name }}</li>
            </ul>
        </div>
    </section>

    <section class="section-lg section bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="isotope-filters isotope-filters-vertical">
                        <ul class="list-inline list-inline-sm">
                            <li class="d-xl-none">
                                <p>{{ __('global.Choose your category') }}:</p>
                                <select id="category" class="form-control">
                                    <option value="{{ $article->article->category->translation->slug }}">{{ $article->article->category->translation->name }}</option>
                                    @foreach($article->article->category->articles as $articl)
                                        <option value="/{{ app()->getLocale() }}/{{ $article->article->category->translation->slug }}/{{ $articl->translation->slug }}" @if($article->slug == $articl->slug) selected @endif>
                                            {{ $articl->translation->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </li>
                            <li class="section-relative">
                                <ul class="list-sm-inline isotope-filters-list">
                                    <li>
                                        <a class="isotope-filter active text-[20px]" href="{{ route('main.category', ['category_slug' => $article->article->category->translation->slug]) }}">
                                            {{ $article->article->category->translation->name }}
                                        </a>
                                    </li>
                                    @foreach($article->article->category->articles as $articl)
                                        <li>
                                            <a class="isotope-filter @if($article->slug == $articl->translation->slug) active @endif" href="{{ route('main.service', [
                                                'slug' => $articl->translation->slug,
                                                'category_slug' => $article->article->category->translation->slug
                                            ]) }}">
                                                {{ $articl->translation->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 offset-lg-top-0 offset-top-34">
                    <div class="row text-md-start isotope isotope-style-1" data-isotope-layout="fitRows" data-column-class=".col-1" data-lightgallery="group" data-lg-animation="lg-slide-circular" data-isotope-group="gallery">
                        <div class="col-1 isotope-item isotope-sizer"></div>
                        <div class="col-lg-12 isotope-item" data-filter="Diagnostic Imaging">
                            <h3>{{ $article->name }}</h3>
                            {!! $article->text !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>>
