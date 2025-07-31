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



</x-app-layout>
