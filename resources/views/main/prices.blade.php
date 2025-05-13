<x-app-layout>

    <section class="breadcrumbs-custom bg-image context-dark slider-page"
             style="background-image: url({{ asset('images/bg-6.webp') }});"
             data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">
            @lang('global.pages.prices')
            </h2>
            <ul class="breadcrumbs-custom-path">
                <li ><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li class="active"><a  href="{{ route('main.index') }}">@lang('global.pages.prices')</a></li>
                    <li class="active">{{ ucfirst(str_replace('-', ' ', $category_active->name ?? '')) }}</li>
            </ul>
        </div>
    </section>

    <section class="section-lg section bg-default" style="margin-bottom: 70px;">
        <div class="container">
            <div class="row isotope-wrap">
                <div class="col-lg-3">
                    <div class="isotope-filters isotope-filters-vertical">
                        <h4 class="text-uppercase isotope-filters-title offset-top-34"></h4>
                        <ul class="list-inline list-inline-sm">
                            <li class="d-xl-none">
                                <p>Choose your category:</p>
                            </li>
                            <li class="section-relative">
                                <button class="isotope-filters-toggle btn btn-sm btn-default" data-custom-toggle="#isotope-1" data-custom-toggle-disable-on-blur="true" data-custom-toggle-hide-on-blur="true">Filter<span class="caret"></span></button>

                                <ul class="list-sm-inline isotope-filters-list" id="isotope-1">
                                    @foreach($categories as $category)
                                        @if(isset($category->translation->slug))
                                            <li><a href="{{ route('prices.category', ['category' => $category->translation->slug]) }}"  @if(isset($category_active->slug) && $category_active->slug == $category->translation->slug) class="active" @endif>{{ $category->translation->name }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 offset-lg-top-0 offset-top-34">
                    <div class="row text-md-start isotope isotope-style-1" data-isotope-layout="fitRows" data-column-class=".col-1" data-lightgallery="group" data-lg-animation="lg-slide-circular" data-isotope-group="gallery">
                        <div class="col-1 isotope-item isotope-sizer"></div>

                        @if(isset($category_active->slug))
                        <div class="col-lg-12 isotope-item">
                            <h3>{{ $category_active->name }}</h3>
                                <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                                    <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                                        @foreach($category_active->category->groups as $group)
                                            @if(isset($group->translation->name))<li  class="acordion-title">{{ $group->translation->name }}</li>@endif
                                        @endforeach
                                    </ul>
                                    <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                                        @foreach($category_active->category->groups as $group)
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




