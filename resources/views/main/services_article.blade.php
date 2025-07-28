<x-app-layout>
    <section class="breadcrumbs-custom bg-image context-dark slider-page breadcrumbs-desktop-mt" style="background-image: url({{ asset('images/bg-6.webp ') }}); " data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">@lang('global.pages.services')</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li  class="white">@lang('global.pages.services')</li>
                <li><a href="{{ route('main.category', ['category_slug' => $group->category->slug]) }}">{{ $group->category->translation->name }}</a></li>
                <li  class="white">{{ $group->translation->name }}</li>
            </ul>
        </div>
    </section>

    <section class="section-lg section bg-default">
        <div class="container container-2">
            <div class="row">
                <div class="col-lg-3">
                    <div class="isotope-filters isotope-filters-vertical">
                        <ul class="list-inline list-inline-sm service-select-mobil" >
                            <li class="d-xl-none service-select-mobil"  >
                                <p class="gray">{{ __('global.Choose your category') }}:</p>
                                <select id="category" class="form-control service-select-mobil" >
                                    <option value="{{ $group->category->slug }}">{{ $group->category->translation->name }} </option>
                                    @foreach($group->category->menu_groups as $gr)
                                        <option  value="/{{ app()->getLocale() }}/{{ $gr->category->slug }}/{{ $gr->slug }}" @if($group->slug == $gr->slug) selected @endif >
                                            {{ $gr->translation->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </li>
                            <li class="section-relative">
                                <ul class="list-sm-inline isotope-filters-list">
                                    <li>
                                        <a class="isotope-filter active text-[20px]" href="{{ route('main.category', ['category_slug' => $group->category->slug]) }}">
                                            {{ $group->category->translation->name }}
                                        </a>
                                    </li>
                                    @foreach($group->category->menu_groups as $gr)
                                        <li>
                                            <a class="isotope-filter @if($group->slug == $gr->slug) active @endif" href="{{ route('main.service', [
                                                'slug' => $gr->slug,
                                                'category_slug' => $group->category->slug
                                            ]) }}">
                                                {{ $gr->translation->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 offset-lg-top-0 offset-top-34">
                    <div class="row text-md-start isotope isotope-style-1">
                        <div class="col-1 isotope-item isotope-sizer"></div>
                        <div class="col-lg-12 isotope-item services-item">
                        <!-- <h3>{{ $group->translation->name }}</h3>-->
                            {!! $group->translation->text !!}
                        </div>
                        <div>
                            @if(isset($group->services))
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
                                                <td>{{ $service->translation->time }}</td>
                                                <td class="note-item">{!! $service->translation->note !!}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="text_after-item"> {!! $group->translation->text_after !!}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="specialist-card-box block-hiden">
    </div>
</x-app-layout>
