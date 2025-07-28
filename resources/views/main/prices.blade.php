<x-app-layout>

    <section class="breadcrumbs-custom bg-image context-dark slider-page breadcrumbs-desktop-mt"
             style="background-image: url({{ asset('images/bg-6.webp') }});"
             data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">
            @lang('global.pages.prices')
            </h2>
            <ul class="breadcrumbs-custom-path">
                <li ><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li class="active"><a  href="{{ route('main.index') }}">@lang('global.pages.prices')</a></li>
                    <li class="active white">{{ ucfirst(str_replace('-', ' ', $category_active->translation()->name ?? '')) }}</li>
            </ul>
        </div>
    </section>

    <section class="section-lg section bg-default" style="margin-bottom: 70px;">
        <div class="container">
            <div class="row ">
                <div class="col-lg-3">
                    <div class="isotope-filters isotope-filters-vertical">
                        <h4 class="text-uppercase isotope-filters-title offset-top-34"></h4>
                        <ul class="list-inline list-inline-sm">
                            <li class="d-xl-none">
                                <p class="gray">{{ __('global.Choose your category') }}:</p>
                            </li>
                            <li class="section-relative">
                                <button class="isotope-filters-toggle btn btn-sm btn-default" data-custom-toggle="#isotope-1" data-custom-toggle-disable-on-blur="true" data-custom-toggle-hide-on-blur="true">{{ __('global.Choose your category') }}<span class="caret"></span></button>

                                <ul class="list-sm-inline isotope-filters-list" id="isotope-1">
                                    @foreach($categories as $category)
                                        @if($category->translation)
                                            @if(isset($category->slug))
                                                <li><a href="{{ route('prices.category', ['category' => $category->slug]) }}"  @if(isset($category_active->slug) && $category_active->slug == $category->slug) class="active" @endif>{{ $category->translation->name }}</a></li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 offset-lg-top-0 offset-top-34 ">
                    <h3 class="text-md-start">{{ $category_active->translation->name }}</h3>
                    <div class="offset-sm-top-30 text-start">
                        @if(isset($category_active->slug))
                        <div class="responsive-tabs responsive-tabs-classic tabs-custom" data-type="horizontal">
                            <ul class="resp-tabs-list tabs-1 text-center tabs-group-default" data-group="tabs-group-default">
                                @foreach($category_active->groups as $group)
                                    @if(isset($group->translation->name)  && $group->services->first())
                                        <li>{{ $group->translation->name }}</li>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="resp-tabs-container text-start tabs-group-default" data-group="tabs-group-default">
                                @foreach($category_active->groups as $group)
                                    @if(isset($group->translation->name) && $group->services->first())
                                        <div>
                                            <table class="table table-custom table-fixed table-hover-rows table-3-col">
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

    <div class="specialist-card-box block-hiden">
    </div>
</x-app-layout>
<script type="text/javascript">
    $(document).ready(function () {
        const isMobile = window.innerWidth <= 768;

        if (isMobile) {
            $('.resp-accordion').removeClass('resp-tab-active');
            $('.resp-tab-content').removeClass('resp-tab-content-active');
            $('.resp-tab-content').css('display', 'none');
        }
    });
</script>



