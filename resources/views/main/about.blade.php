<!-- Breadcrumbs-->
<x-app-layout>
    <section class="breadcrumbs-custom bg-image context-dark slider-page breadcrumbs-desktop-mt"  style="background-image: url({{ asset('images/bg-6.webp') }});" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container " >
            <h2 class="breadcrumbs-custom-title">@lang('global.pages.about')</h2>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                    <li class="active"><a href="{{ route('main.about') }}">@lang('global.pages.about')</a></li>
                </ul>
        </div>
    </section>
    <section class="section-lg bg-default text-start section">
        <div class="container">
            <div class="row justify-content-sm-center row-30">
                <div class="col-sm-10 col-lg-8">
                    <h3 class="about-title-mobil" style="font-size: 1.80em; ">@lang('frontend/about.article.title')</h3>
                    <div class="offset-top-20 ">
                        <p class="gray">@lang('frontend/about.article.texts.text_1')</p>
                        <p class="gray">@lang('frontend/about.article.texts.text_2')</p>
                        <p class="gray">@lang('frontend/about.article.texts.text_3')</p>
                    </div>
                </div>
                <div class="col-sm-10 col-lg-4">
                    <h6 style="color: #767676;">@lang('frontend/about.heart.title')</h6>
                    <hr class="text-subline">
                    <div class="offset-top-30">
                        <div class="unit flex-xxl-row flex-xl-row flex-lg-column flex-md-row flex-sm-row unit-spacing-sm">
                            <div class="unit-left"><img class="img-responsive" src="/assets/images/uploads/14b0c14a8626d74b72f14c61d5aadb67.webp" width="110" height="110" alt="" style="width: 110px">
                            </div>
                            <div class="unit-body">
                                <h6 class="font-weight-bold text-primary">Армен Прокипец</h6>
                                <p class="font-italic offset-top-0 gray">@lang('frontend/about.heart.position')</p>
                                <a  href="/{{ app()->getLocale() }}/doctors/prokipets-armen-tarasovich">@lang('frontend/about.heart.more')</a>
                            </div>
                        </div>
                        <p class="gray">@lang('frontend/about.heart.text')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-lg ">
        <div class="container ">
            <div ><h3 style="font-size: 1.80em; margin-top: 0px; margin-bottom: 33px; " class="text-center about-title-mobil">@lang('frontend/about.mission.title') </h3>
                <p class="text-left gray">@lang('frontend/about.mission.texts.text_1')</p>
                <ul class="list-marked" style="text-align: left;">
                    <li class="gray">@lang('frontend/about.mission.list.item_1')</li>
                    <li class="gray">@lang('frontend/about.mission.list.item_2')</li>
                    <li class="gray">@lang('frontend/about.mission.list.item_3')</li>
                </ul>
                <p class="text-left gray">@lang('frontend/about.mission.texts.text_2')</p>
            </div>
        </div>
    </section>

    <div class="specialist-card-box block-hiden">
    </div>
</x-app-layout>
