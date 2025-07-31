<x-app-layout>

    <section class="breadcrumbs-custom bg-image context-dark slider-page breadcrumbs-desktop-mt" style="background-image: url({{ asset('images/bg-6.webp ') }}); " data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">@lang('global.not found')</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li class="white">404</li>
            </ul>
        </div>
    </section>
    <section class="section-sm-110">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="alert alert-blog-mb alert-warning ">
                        @lang('global.no_translations_404')
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
