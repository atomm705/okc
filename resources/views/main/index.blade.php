<x-app-layout>
    <section class="section swiper-container swiper-slider " data-swiper='{"autoplay":{"delay":5000},"effect":"fade"}'>
        <div class="swiper-wrapper text-center ">
            <div class="swiper-slide slide-tablet" id="page-loader" data-slide-bg="images/bg-1.webp">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption slider-fade">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 section-slider-custom">
                                    <div class="inset-xl-right-80 text-lg-start ">
                                        <h2 class="swipe-title-size">{{ __('frontend/index.slider.slide_1.title') }} <br class="d-block">
                                        </h2>
                                        <h5 class="d-none d-lg-block mw-1000">{{ __('frontend/index.slider.slide_1.description') }}</h5><a class="btn btn-ellipse btn-white offset-top-24" href="{{ route('main.timetable') }}"> {{ __('frontend/index.slider.slide_1.link') }}</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slider-fade slide-tablet" data-slide-bg="images/bg-2.webp">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption slider-fade">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 section-slider-custom to-front">
                                    <div class="text-lg-start">
                                        <h2 class="swipe-title-size">{{ __('frontend/index.slider.slide_2.title') }}
                                        </h2>
                                        <h5 class="d-none d-lg-block mw-1000">{{ __('frontend/index.slider.slide_2.description') }}</h5><a class="btn btn-ellipse btn-white offset-top-24" href="{{ route('main.timetable') }}">{{ __('frontend/index.slider.slide_2.link') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slider-fade slide-tablet" data-slide-bg="images/bg-3.webp">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption slider-fade">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 section-slider-custom">
                                    <div class="text-lg-start">
                                        <h2 class="swipe-title-size">{{ __('frontend/index.slider.slide_3.title') }}</h2>
                                        <h5 class="d-none d-lg-block mw-1000">{{ __('frontend/index.slider.slide_3.description') }}</h5><a class="btn btn-ellipse btn-white offset-top-24" href="{{ route('main.timetable') }}">{{ __('frontend/index.slider.slide_3.link') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <section class="bg-default-liac bg-white-liac section section-md pt-xl-0">
        <div class="container section-top-34 section-lg-top-0">
            <div class="row g-0 justify-content-sm-center justify-content-xl-start offset-lg-top-34-negative sheldue text-sm-start to-front row-30">
                <div class="col-md-8 col-lg-5 col-xl-3">
                    <div class="sheldue-item first">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs mdi mdi-calendar-clock text-white-50"></div>
                            <h6 class="d-inline-block inset-left-10 text-white">@lang('frontend/index.blocks.time_to_work.title')</h6>
                            <hr>
                            <div class="row offset-top-24 justify-content-sm-between text-gray-light">
                                <div class="col-sm-4" style="width: 100%;"> <span style="white-space: nowrap; font-size: 17px; color: #fff;"><strong>Клініка</strong></span></div>
                                <div class="col-sm-4" style="width: 100%;"> <span style="white-space: nowrap; font-size: 14px;">@lang('frontend/index.blocks.time_to_work.body.clinic.time.title_1')</span><span style="white-space: nowrap; font-size: 14px; padding-left: 30px;">@lang('frontend/index.blocks.time_to_work.body.clinic.time.value_1')</span></div>
                                <div class="col-sm-4" style="width: 100%;"> <span style="white-space: nowrap; font-size: 14px;">@lang('frontend/index.blocks.time_to_work.body.clinic.time.title_2')</span><span style="white-space: nowrap; font-size: 14px; padding-left: 55px;">@lang('frontend/index.blocks.time_to_work.body.clinic.time.value_2')</span></div>
                               <!-- <div class="col-sm-7 offset-top-10 offset-xs-top-0 text-sm-end">@lang('frontend/index.blocks.time_to_work.body.clinic.time.value_1')</div
                                <div class="col-sm-4 offset-top-30 offset-xs-top-10">@lang('frontend/index.blocks.time_to_work.body.clinic.time.title_2')</div>
                                <div class="col-sm-7 offset-top-10 text-sm-end">@lang('frontend/index.blocks.time_to_work.body.clinic.time.value_2')</div>>
                                <div class="col-sm-4 offset-top-30 offset-xs-top-10">@lang('frontend/index.blocks.time_to_work.body.appointment.title')</div>-->
                                <div class="col-sm-4" style="width: 100%;"> <span style="white-space: nowrap; font-size: 17px; color: #fff;"><strong>Запис</strong></span></div>
                                <div class="offset-top-5 text-gray-light  "> @lang('frontend/index.blocks.time_to_work.body.appointment.time.title_1') <span style="padding-left: 10px;">@lang('frontend/index.blocks.time_to_work.body.appointment.time.value_1')</span></div>

                                <div class="offset-top-8 text-gray-light">
                                    <p>@lang('frontend/index.blocks.time_to_work.body.shedule_time.body')</p>
                                </div>
                            </div>
                        </div>
                        <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect" href="{{ route('main.timetable') }}">@lang('frontend/index.blocks.time_to_work.link')</a></div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-5 col-xl-3">
                    <div class="sheldue-item light">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs mdi mdi-calendar-today text-white-50"></div>
                            <h6 class="d-inline-block inset-left-10 text-white"><span style="font-size: 15px">@lang('frontend/index.blocks.schedule.title' )</span></h6>
                            <hr>
                            <div class="offset-top-24 text-gray-light">
                                <p>@lang('frontend/index.blocks.schedule.body')</p>
                            </div>
                        </div>
                        <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect" href="{{ route('main.timetable') }}">@lang('frontend/index.blocks.schedule.link')</a></div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-5 col-xl-3">
                    <div class="sheldue-item">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs mdi mdi-phone text-white-50"></div>
                            <h6 class="d-inline-block inset-left-10 text-white"><span style="font-size: 17px">@lang('frontend/index.blocks.appointment.title')</span></h6>
                            <hr>
                            <div class="offset-top-24 text-gray-light p-index">
                                <p>@lang('frontend/index.blocks.appointment.body')</p>
                            </div>
                        </div>
                        <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect" href="{{ route('main.contacts') }}">@lang('frontend/index.blocks.appointment.link')</a></div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-5 col-xl-3">
                    <div class="sheldue-item light last">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs icon-emergency-01 text-white-50"></div>
                            <h6 class="d-inline-block inset-left-10 text-white">@lang('frontend/index.blocks.phones.title')</h6>
                            <hr>
                            <div class="offset-top-24">
                                <p style="font-size: 17px"><a class="text-white" href="tel:#">0 (800) 317-317</a></p>
                                <p style="font-size: 17px"><a class="text-white" href="tel:#">+38 (057) 761-61-31</a></p>
                                <p style="font-size: 17px"><a class="text-white" href="tel:#">+38 (093) 761-61-31</a></p>
                                <p style="font-size: 17px"><a class="text-white" href="tel:#">+38 (099) 548-44-85</a></p>

                            </div>
                        </div>
                        <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect" href="{{ route('main.contacts') }}">@lang('frontend/index.blocks.phones.link')</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-lg bg-default-liac">
        <div class="container text-center">
            <h3>@lang('frontend/index.why_we.title')</h3>
            <div class="offset-top-41">
                <p class="custom-paragraph">@lang('frontend/index.why_we.description')</p>
            </div>
            <div class="row offset-top-60 row-50">
                <div class="col-md-6 col-lg-4">
                    <div class="icon icon-xlg icon-circle icon-default icon-pills-xl"></div>
                    <h5 class="font-weight-bold text-gray-darkest">@lang('frontend/index.why_we.columns.column_1.title')</h5>
                    <p>@lang('frontend/index.why_we.columns.column_1.description')</p>
                </div>
                <div class="col-md-6 col-lg-4 offset-md-top-0">
                    <div class="icon icon-xlg icon-circle icon-default icon-doctor-xl"></div>
                    <h5 class="font-weight-bold text-gray-darkest">@lang('frontend/index.why_we.columns.column_2.title')</h5>
                    <p>@lang('frontend/index.why_we.columns.column_2.description')</p>
                </div>
                <div class="col-md-6 col-lg-4 offset-md-top-0">
                    <div class="icon icon-xlg icon-circle icon-default icon-medical-car-xl"></div>
                    <h5 class="font-weight-bold text-gray-darkest">@lang('frontend/index.why_we.columns.column_3.title')</h5>
                    <p>@lang('frontend/index.why_we.columns.column_3.description')</p>
                </div>
            </div>
        </div>
    </section>

    <section class="parallax-container  "  data-parallax-img="images/bg-4.webp">
        <div class="parallax-content section-98 section-sm-110 context-dark">
            <div class="container text-start">
                <div class="row justify-content-sm-center justify-content-lg-start">
                    <div class="col-md-10 col-lg-8 col-xl-5">
                        <h2><br class="d-none d-xl-inline-block">@lang('frontend/index.laser_correction.title')</h2>
                        <p class="offset-top-30 text-white">@lang('frontend/index.laser_correction.description')</p>
                        <div class="offset-top-30"><a class="btn btn-ellipse btn-white" href="/uk/oftalmologiya/lazerna-korektsiya-zoru">@lang('frontend/index.laser_correction.link')</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-lg bg-default-liac">
        <div class="container text-center">
            <div ><h3 style="font-size: 2.60em; margin-top: 0px";>@lang('frontend/index.advantages_1.title')</h3>
                <p class="custom-paragraph">@lang('frontend/index.advantages_1.description')</p>
            </div>
        </div>
        <div class="div-telemed-link"><a href="https://uatelemd.com/okcentre/" class="btn btn-ellipse btn-primary ">@lang('frontend/index.advantages_1.link')</a>
        </div>
    </section>

    <section class="section section-lg p-md-0">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-end offset-top-0">
                <div class="col-sm-10 col-md-6 section-image-aside section-image-aside-left text-center text-md-start">
                    <div class="section-image-aside-img d-none d-md-block" style="background-image: url( {{ asset('images/170f76372caeaf65382417301b2dca09.webp') }})"></div>
                    <div class="section-image-aside-body offset-top-66 offset-sm-top-0 section-sm-bottom-66 section-sm-top-110 inset-lg-left-93">
                        <h3>@lang('frontend/index.ophthalmology.title')</h3>
                        <div class="offset-top-34 offset-md-top-60">
                            <p>@lang('frontend/index.ophthalmology.description')</p>
                        </div>
                        <div class="offset-top-30"><a class="btn btn-ellipse btn-primary" href="/uk/oftalmologiya">@lang('frontend/index.ophthalmology.link')</a></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-sm-center justify-content-md-start">
                <div class="col-sm-10 col-md-6 section-image-aside section-image-aside-right text-center text-md-start">
                    <div class="section-image-aside-img d-none d-md-block" style="background-image: url( {{ asset('images/9db2b605ab634c6b5e251e29d167a648.webp') }})"></div>
                    <div class="section-image-aside-body section-sm-bottom-66 section-sm-top-110 inset-lg-right-93">
                        <h3>@lang('frontend/index.surgery.title')</h3>
                        <div class="offset-top-34 offset-md-top-60">
                            <p>@lang('frontend/index.surgery.description')</p>

                        </div>
                        <div class="offset-top-30"><a class="btn btn-ellipse btn-primary" href="/uk/ambulatorna-khirurgiya">@lang('frontend/index.surgery.link')</a></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-sm-center justify-content-md-end offset-top-0">
                <div class="col-sm-10 col-md-6 section-image-aside section-image-aside-left text-center text-md-start">
                    <div class="section-image-aside-img d-none d-md-block" style="background-image: url( {{ asset('images/background-02-676x545.jpg') }})"></div>
                    <div class="section-image-aside-body offset-top-66 offset-sm-top-0 section-sm-bottom-66 section-sm-top-110 inset-lg-left-93">
                        <h3>@lang('frontend/index.diagnosis.title')</h3>
                        <div class="offset-top-34 offset-md-top-60">
                            <p>@lang('frontend/index.diagnosis.description')</p>
                        </div>
                        <div class="offset-top-30"><a class="btn btn-ellipse btn-primary" href="/uk/diagnostika">@lang('frontend/index.diagnosis.link')</a></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-sm-center justify-content-md-start">
                <div class="col-sm-10 col-md-6 section-image-aside section-image-aside-right text-center text-md-start">
                    <div class="section-image-aside-img d-none d-md-block" style="background-image: url('/images/banner (1).png');"></div>
                    <div class="section-image-aside-body section-sm-bottom-66 section-sm-top-110 inset-lg-right-93">
                        <h3>Пастична хірургія</h3>
                        <div class="offset-top-34 offset-md-top-60">
                            <p>Пластична хірургія несе в собі ціль усунути як вроджені так і набуті недоліки зовнішності людини, щоб покращити якість життя.</p>
                            <p>Також вона несе в собі естетичну мету - корекція зовнішності людини, щоб отримати бажаний результат.</p>
                        </div>
                        <div class="offset-top-30"><a class="btn btn-ellipse btn-primary" href="/uk/plastichna-khirurgiya">@lang('frontend/index.diagnosis.link')</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-lg bg-default-liac"><!----> <!---->
        <div class="container text-center"><!----> <!---->
            <div ><h3 style="font-size: 2.60em; margin-top: 0px";>@lang('frontend/index.advantages_2.title')</h3>
                <p class="custom-paragraph">@lang('frontend/index.advantages_2.description')</p>
            </div>
        </div>
        <div class="div-telemed-link"><a href="https://uatelemd.com/okcentre/" class="btn btn-ellipse btn-primary ">@lang('frontend/index.advantages_2.link')</a>
        </div>
    </section>

    <section class="section-lg bg-default section">
        <div class="container">
            <iframe class="height--phone" width="100%" height="600" src="https://www.youtube.com/embed/cOUYKMbttow?si=3y2RivY38F5Dv7VD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>

    <!-- testimonials-->
    <section class="section-lg bg-default-liac">
        <div class="container">
            <h3 class="text-center">@lang('frontend/index.testimonials.title')</h3>
            <div class="offset-top-66">
                <div class="owl-carousel owl-carousel-default owl-carousel-class-light" data-loop="false" data-items="1" data-dots="true" data-mouse-drag="false" data-lg-items="2" data-nav="false" data-owl="{&quot;dots&quot;:true,&quot;nav&quot;:false,&quot;autoplayTimeout&quot;:3500}">
                    <div class="item">
                        <blockquote class="quote quote-classic">
                            <div class="quote-body">
                                <p class="font-italic text-gray-dark">
                                    <q>Спасибо ОГРОМНОЕ - Николаю Николаевичу Ковшарь, за профессионализм и человеческое отношение, а также: его ассистентам и другим сотрудникам медцентра "Докарт"!!! Впечатление, от посещения медцентра,- самые положительные! Все на европейском уровне: начиная от порога-входа, сотрудника безопасности, ресепшен и заканчивая - санузлом; везде - уют, чистота и комфорт!!! Низкий поклон, всем - Вам!!!</q>
                                </p>
                                <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                    <div class="unit-left unit-item-narrow">
                                       <!-- <img class="rounded-circle quote-img" width="60" height="60" src="images/users/user-betty-wade-60x60.jpg" alt=""/>-->
                                    </div>
                                    <div class="unit-body unit-item-wide">
                                        <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                            <cite class="text-normal">Владимир</cite>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <div class="item">
                        <blockquote class="quote quote-classic">
                            <div class="quote-body">
                                <p class="font-italic text-gray-dark">
                                    <q>
                                        Добрий день))) Хочу подякувати персоналу клініки Докарт за уважне, чуйне ставлення саме до моєї тітки Анні Федорівні Паршиної) Слова подяки докторам Ковшар Миколі Миколайовичу,Симонову Максиму Євгеновичу,а також милим дівчаткам на рецепшені!-Ганна Федорівна почувається чудово-нічого в очах їй не заважає))) Бажаємо вам Здоров'я та процвітання)
                                    </q>
                                </p>
                                <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                    <div class="unit-left unit-item-narrow">
                                       <!-- <img class="rounded-circle quote-img" width="60" height="60" src="images/users/user-bryan-green-60x60.jpg" alt=""/>-->
                                    </div>
                                    <div class="unit-body unit-item-wide">
                                        <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                            <cite class="text-normal">Олена</cite>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <div class="item">
                        <blockquote class="quote quote-classic">
                            <div class="quote-body">
                                <p class="font-italic text-gray-dark">
                                    <q>
                                        Це найкраща та найсучасніша клініка у якій я був. Був приємно вражений кваліфікацією та чуйністю персоналу. Зробив корекцію зору,оперував Армен Тарасович, я щиро вдячний за якість виконаної роботи. Також хочу висловити подяку усім іншим працівникам,що супроводжували на усіх до і післяопераційних етапах ,ви найкращі!;)
                                    </q>
                                </p>
                                <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                    <div class="unit-left unit-item-narrow"></div>
                                        <!--<img class="rounded-circle quote-img" width="60" height="60" src="images/users/user-bryan-green-60x60.jpg" alt=""/></div>-->
                                    <div class="unit-body unit-item-wide">
                                        <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                            <cite class="text-normal">Ілля</cite>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <div class="item">
                        <blockquote class="quote quote-classic">
                            <div class="quote-body">
                                <p class="font-italic text-gray-dark">
                                    <q>
                                        Добрый день! Спасибо большое Армену Тарасовичу и всему коллективу ОК-центр за прекрасный настрой перед лазерной коррекцией :) Я ещё не очень чётко вижу вдаль, но мне уже легче смотреть без очков и линз вблизи, Вы мне не только улучшили зрение, но и сделали счастливее и увеличили любовь к жизни, спасибо большое!! 💗 Мирного неба Вам і Слава Україні! 🇺🇦
                                    </q>
                                </p>
                                <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                    <div class="unit-left unit-item-narrow">
                                     <!--   <img class="rounded-circle quote-img" width="60" height="60" src="images/users/user-betty-wade-60x60.jpg" alt=""/>-->
                                    </div>
                                    <div class="unit-body unit-item-wide">
                                        <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                            <cite class="text-normal">Дарья</cite>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="parallax-container" data-parallax-img="images/bg-5.webp">
        <div class="parallax-content section-98 section-sm-110 context-dark">
            <div class="container text-start">
                <div class="row justify-content-sm-center justify-content-lg-start">
                    <div class="col-md-10 col-lg-8 col-xl-5">
                        <h2 style=" white-space: nowrap;"> @lang('frontend/index.cataract.title')</h2>
                        <p class="offset-top-30 text-white">@lang('frontend/index.cataract.description')</p>
                        <div class="offset-top-30"><a class="btn btn-ellipse btn-white" href="/uk/oftalmologiya/likuvannya-katarakti">@lang('frontend/index.cataract.link')</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-98 section-sm-110">
        <div class="container">
            <h3 class="text-center text-lg-center">@lang('frontend/index.blog.title')</h3>
            <div class="row justify-content-sm-center offset-top-60">
                @foreach ($recentArticles as $recent)
                    <div class="col-md-8 col-lg-4" style="margin-bottom: 20px">
                        @php
                            $t = $recent->translation;
                            $date = \Carbon\Carbon::parse($recent->created_at);
                        @endphp

                        <article class="post post-modern post-modern-classic">

                            <div class="post-media">
                                <a class="link-image" href="{{ route('main.show', $t->slug) }}">
                                    <img class="img-responsive img-cover" width="370" height="240"
                                         src="{{ $t->image?->src ?? asset('images/no-photo-2-sq.webp') }}"
                                         alt="{{ $t->name }}">
                                </a>
                            </div>

                            <div class="post-content text-start">

                                <div class="post-title offset-top-8">
                                    <h5 class="font-weight-bold"> <a href="{{ route('main.show', $t->slug) }}">{{ $t->name }}</a> </h5>
                                </div>
                                <ul class="list-inline list-inline-dashed">
                                    <li>{{ $date->translatedFormat('F d, Y') }}</li>
                                    @if ($recent->categories->isNotEmpty())
                                        <li>

                                            <a class="text-primary"
                                               href="{{ route('blog.category', $recent->categories[0]->translation->slug) }}">
                                                {{ $recent->categories[0]->translation->name }}
                                            </a>

                                        </li>
                                    @endif
                                </ul>

                                <div class="post-body">
                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($t->text), 100) }}</p>
                                </div>
                                @if ($t->tags->count())
                                    <div class="tags group group-sm">
                                        @foreach ($t->tags as $tag)
                                            <a class="btn-tag btn btn-default"
                                               href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name ?? $tag->slug }}</a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-lg bg-default-liac"><!----> <!---->
        <div class="container text-center defolt-div" ><!----> <!---->
            <a class="link-discount" style=" background-image: url('{{ asset('images/218bbe9c38ffa59b6e99bf94428e4293.webp') }}') ; "  href="single-post.html">
                <div  style=" padding-right:10px ; padding-left: 10px;">
                    <p class="mt-0 mb-0">@lang('frontend/index.stocks.google.text_1') </p>
                    <p  class="mt-0 mb-0">@lang('frontend/index.stocks.google.text_2')</p>
               </div>
            </a>
        </div>
    </section>


    <section class="section">
        <div  data-center="Медицинский центр Докарт (клиника Ок Центр)" data-zoom="5" >
            <div class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.105976527954!2d36.24050249288963!3d50.00936884557607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0e56e275b2f%3A0x42bbbee2ee570576!2z0JzQtdC00LjRhtC40L3RgdC60LjQuSDRhtC10L3RgtGAINCU0L7QutCw0YDRgiAo0LrQu9C40L3QuNC60LAg0J7QuiDQptC10L3RgtGAKQ!5e0!3m2!1sru!2sua!4v1743058892159!5m2!1sru!2sua&gestureHandling=greedy"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <ul class="google-map-markers">
                <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
            </ul>
        </div>
    </section>
</x-app-layout>
