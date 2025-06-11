<x-app-layout>

    <section class="breadcrumbs-custom bg-image context-dark slider-page" style="background-image: url({{ asset('images/bg-6.webp ') }}); " data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">@lang('global.pages.services')</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li>@lang('global.pages.services')</li>
                <li>{{ $category->name }}</li>
            </ul>
        </div>
    </section>

    <section class="section-lg section bg-default">
        <div class="container container-2">
            <div class="row">
                <div class="col-lg-3">
                    <div class="isotope-filters isotope-filters-vertical">
                        <ul class="list-inline list-inline-sm service-select-mobil">
                            <li class="d-xl-none service-select-mobil">
                                <p>{{ __('global.Choose your category') }}:</p>
                                <select id="category" class="form-control service-select-mobil  " >
                                    <option value="{{ $category->slug }}" >{{ $category->name }}</option>
                                    @foreach($category->category->articles as $article)
                                        <option value="/{{ app()->getLocale() }}/{{ $category->slug }}/{{ $article->translation->slug }}">
                                            {{ $article->translation->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </li>
                            <li class="section-relative">
                                <ul class="list-sm-inline isotope-filters-list">
                                    <li>
                                        <a class="isotope-filter active text-" href="{{ route('main.category', ['category_slug' => $category->slug]) }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                    @foreach($category->category->articles as $article)
                                        <li>
                                            <a class="isotope-filter" href="{{ route('main.service', [
                                                'slug' => $article->translation->slug,
                                                'category_slug' => $category->slug
                                            ]) }}">
                                                {{ $article->translation->name }}
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
                        <div class="col-lg-12 isotope-item services-item">
                           <!-- <h3>{{ $category->name }}</h3>-->
                            {!! $category->text !!}
                        </div>
                        @if(isset($category->category->serviceCategory))
                            <div class="responsive-tabs responsive-tabs-classic tabs-custom" data-type="horizontal">
                            <div class="col-lg-12 isotope-item price-item">
                                <ul class="resp-tabs-list tabs-1 text-center tabs-group-default" data-group="tabs-group-default">
                                    @foreach($category->category->serviceCategory->groups as $group)
                                        @if(isset($group->translation->name))
                                            <li>{{ $group->translation->name }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                                <div class="resp-tabs-container text-start tabs-group-default" data-group="tabs-group-default">
                                    @foreach($category->category->serviceCategory->groups as $group)
                                        @if(isset($group->translation->name) && $group->services)
                                            <div>
                                                <table class="table table-custom table-fixed table-hover-rows table-3-col" data-responsive="true">
                                                    <thead>
                                                    <th>@lang('global.service')</th>
                                                    <th>{{ __('global.price') }}</th>
                                                    <th>{{ __('global.time_m') }}</th>
                                                    <th>{{ __('global.description') }}</th>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($group->services as $service)
                                                        @if(isset($service->translations()->name))
                                                            <tr>
                                                                <td>{{ $service->translations()->name }}</td>
                                                                <td>{{ $service->price }}</td>
                                                                <td>{{ $service->time }}</td>
                                                                <td>{!! $service->translations()->note !!}</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
