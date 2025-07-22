<x-app-layout>

    <section class="breadcrumbs-custom bg-image context-dark slider-page" style="background-image: url({{ asset('images/bg-6.webp ') }}); " data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">@lang('global.pages.services')</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li class="white">@lang('global.pages.services')</li>
                <li class="white">{{ $category->name }}</li>
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
                                <p class="gray">{{ __('global.Choose your category') }}:</p>
                                <select id="category" class="form-control service-select-mobil  " >
                                    <option value="{{ $category->slug }}" >{{ $category->translation->name }}</option>
                                    @foreach($category->groups as $group)
                                        <option value="/{{ app()->getLocale() }}/{{ $category->slug }}/{{ $group->slug }}">
                                            {{ $group->translation->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </li>
                            <li class="section-relative">
                                <ul class="list-sm-inline isotope-filters-list">
                                    <li>
                                        <a class="isotope-filter active text-" href="{{ route('main.category', ['category_slug' => $category->slug]) }}">
                                            {{ $category->translation->name }}
                                        </a>
                                    </li>
                                    @foreach($category->groups as $group)
                                        <li>
                                            <a class="isotope-filter" href="{{ route('main.service', [
                                                'slug' => $group->slug,
                                                'category_slug' => $category->slug
                                            ]) }}">
                                                {{ $group->translation->name }}
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
                           <!-- <h3>{{ $category->translation->name }}</h3>-->
                            {!! $category->translation->text !!}
                        </div>
                        @if(isset($category->groups))
                            <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                                <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                                    @foreach($category->groups as $group)
                                        @if(isset($group->translation->name))
                                            <li>{{ $group->translation->name }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                                <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                                    @foreach($category->groups as $group)
                                        @if(isset($group->translation->name) && $group->services)
                                            <div>
                                                <table class="table table-custom table-fixed table-hover-rows table-3-col" data-responsive="true">
                                                    <thead>
                                                    <th class="title-th-m">@lang('global.service')</th>
                                                    <th class="title-th-m">{{ __('global.price') }}</th>
                                                    <th class="title-th-m">{{ __('global.time_m') }}</th>
                                                    <th class="title-th-m">{{ __('global.description') }}</th>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($group->services as $service)
                                                        @if(isset($service->translation->name))
                                                            <tr>
                                                                <td>{{ $service->translation->name }}</td>
                                                                <td>{{ $service->translation->price }}</td>
                                                                <td>{{ $service->time }}</td>
                                                                <td class="note-item"> {!! $service->translation->note !!}</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <div class="text_after-item"> {!! $group->translation->text_after !!}</div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
