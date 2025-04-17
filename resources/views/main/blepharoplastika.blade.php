

<x-app-layout>


<div class="app color-main"  id="app">

    <div class="body-main ">
        <div class="section-main">
            <div class="banner-main mt-0"
                 style="background-image: url('/images/banner.png');">
                <div class="page-content">
                    <div class="banner-main-hold">
                        <div class="banner-main-title">
                            <span>@lang('frontend/blefaroplastika.slider.slide_1.title')</span>
                        </div>

                        <div class="banner-main-subtitle">
                            <span>@lang('frontend/blefaroplastika.slider.slide_1.description')</span><br>
                            <span style="font-size: 28px">@lang('frontend/blefaroplastika.slider.slide_1.description1')</span>
                        </div>

                        <div class="wr-banner-main-button">
                            <button class="open-modal button-main button-main_orange">@lang('frontend/blefaroplastika.slider.slide_1.link')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main">
            <div class="page-content">
                <div class="box-info">
                    <div class="title-section">
                        <span>@lang('frontend/blefaroplastika.whatas.title')</span>
                    </div>

                    <div class="text-section">
                        <p>
                            <span class="text-section__strong">@lang('frontend/blefaroplastika.whatas.description_1_1')</span>@lang('frontend/blefaroplastika.whatas.description_1_2')

                        <p>
                            <span class="text-section__strong">@lang('frontend/blefaroplastika.whatas.description_1_3')</span>
                            <span class="text-section__mark">@lang('frontend/blefaroplastika.whatas.description_1_4')</span> @lang('frontend/blefaroplastika.whatas.description_1_5')
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main when-needed">
            <div class="page-content">
                <div class="title-section">
                    <span>@lang('frontend/blefaroplastika.when.title')</span>
                </div>

                <div class="advantage">
                    <div class="advantage-list">
                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-1.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>@lang('frontend/blefaroplastika.when.slide_1_1')</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span>@lang('frontend/blefaroplastika.when.slide_1_2')</span>
                            </div>
                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-2.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>@lang('frontend/blefaroplastika.when.slide_2_1')</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span>@lang('frontend/blefaroplastika.when.slide_2_2')</span>
                            </div>
                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-3.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>@lang('frontend/blefaroplastika.when.slide_3_1')</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span>@lang('frontend/blefaroplastika.when.slide_3_2')</span>
                            </div>
                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-4.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>@lang('frontend/blefaroplastika.when.slide_4_1')</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span>@lang('frontend/blefaroplastika.when.slide_4_2')</span>
                            </div>
                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-5.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>@lang('frontend/blefaroplastika.when.slide_5_1')</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span>@lang('frontend/blefaroplastika.when.slide_5_2')</span>
                            </div>
                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-6.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>@lang('frontend/blefaroplastika.when.slide_6_1')</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span>@lang('frontend/blefaroplastika.when.slide_6_2')</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main section-main-first">
            <div class="page-content">
                <div id="video_youtube"></div>
                <script>
                    if(screen.width > '767'){
                        document.getElementById("video_youtube").innerHTML = '<iframe width="100%" height="640" src="https://www.youtube.com/embed/videoseries?list=PLJwatesN19cJKQw5XJi1yIhVsPg65t4H1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                    }
                    if(screen.width < '768'){
                        document.getElementById("video_youtube").innerHTML = '<iframe width="100%" height="208" src="https://www.youtube.com/embed/videoseries?list=PLJwatesN19cJKQw5XJi1yIhVsPg65t4H1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                    }
                </script>
            </div>
        </div>
        <div class="section-main section-main_first">
            <div class="banner-section banner-section_top" id="banner-section-1">
                <div class="banner-section-bg">
                    <img src="/images/60c7c9c66be72f8fbcdac32f0a3a99c6.webp" alt="bg"/>
                </div>

                <div class="page-content">
                    <div class="banner-section-title">
                        <span>@lang('frontend/blefaroplastika.akcia.title')</span>
                    </div>

                    <div class="banner-section-subtitle">
                        <span> <br><span class="text-strong"></span></span>
                    </div>

                    <div class="wr-banner-section-button">
                        <button class="open-modal button-main button-main_orange">@lang('frontend/blefaroplastika.akcia.link')</button>
                    </div>
                </div>
            </div>

            <div class="page-content">
                <div class="advantage">
                    <div class="advantage-list advantage-list_white">
                        <div class="advantage-card advantage-card_small">
                            <div class="advantage-card-ico">
                                <img src="/images/ico-1.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-descr advantage-card-descr_text-sm">
                                <span>@lang('frontend/blefaroplastika.if.slide_1')</span>
                            </div>
                        </div>

                        <div class="advantage-card advantage-card_small">
                            <div class="advantage-card-ico">
                                <img src="/images/ico-2.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-descr advantage-card-descr_text-sm">
                                <span>@lang('frontend/blefaroplastika.if.slide_2')</span>
                            </div>
                        </div>

                        <div class="advantage-card advantage-card_small">
                            <div class="advantage-card-ico">
                                <img src="/images/ico-3.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-descr advantage-card-descr_text-sm">
                                <span>@lang('frontend/blefaroplastika.if.slide_3')</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main section-main_second  section-main_change-mob">
            <div class="page-content">
                <div class="page-box-sm">
                    <div class="title-section">
                        <span>@lang('frontend/blefaroplastika.how.title')</span>
                    </div>

                    <div class="accordion-list">
                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text"> @lang('frontend/blefaroplastika.how.items.item_1.title')</span>

                                    <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0" y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="0" width="2" height="16" fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                </div>

                                <div class="accordion-descr" data-box-dropdown>
                                    <div class="accordion-descr__inner" data-box-inner>
                                        <p>@lang('frontend/blefaroplastika.how.items.item_1.description')</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">@lang('frontend/blefaroplastika.how.items.item_2.title')</span>

                                    <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                </div>

                                <div class="accordion-descr" data-box-dropdown>
                                    <div class="accordion-descr__inner" data-box-inner>
                                        <p>@lang('frontend/blefaroplastika.how.items.item_2.description')</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">@lang('frontend/blefaroplastika.how.items.item_3.title')</span>

                                    <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                </div>

                                <div class="accordion-descr" data-box-dropdown>
                                    <div class="accordion-descr__inner" data-box-inner>
                                        <p>@lang('frontend/blefaroplastika.how.items.item_3.description')</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">@lang('frontend/blefaroplastika.how.items.item_4.title')</span>

                                    <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                </div>

                                <div class="accordion-descr" data-box-dropdown>
                                    <div class="accordion-descr__inner" data-box-inner>
                                        <p>@lang('frontend/blefaroplastika.how.items.item_4.description')</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">@lang('frontend/blefaroplastika.how.items.item_5.title')</span>

                                    <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                </div>

                                <div class="accordion-descr" data-box-dropdown>
                                    <div class="accordion-descr__inner" data-box-inner>
                                        <p>@lang('frontend/blefaroplastika.how.items.item_5.description')</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">@lang('frontend/blefaroplastika.how.items.item_6.title')</span>

                                    <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                </div>

                                <div class="accordion-descr" data-box-dropdown>
                                    <div class="accordion-descr__inner" data-box-inner>
                                        <p>@lang('frontend/blefaroplastika.how.items.item_6.description')</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">@lang('frontend/blefaroplastika.how.items.item_7.title')</span>

                                    <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                </div>

                                <div class="accordion-descr" data-box-dropdown>
                                    <div class="accordion-descr__inner" data-box-inner>
                                        <p>@lang('frontend/blefaroplastika.how.items.item_7.description')</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">@lang('frontend/blefaroplastika.how.items.item_8.title')</span>

                                    <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                </div>

                                <div class="accordion-descr" data-box-dropdown>
                                    <div class="accordion-descr__inner" data-box-inner>
                                        <p>@lang('frontend/blefaroplastika.how.items.item_8.description')</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">@lang('frontend/blefaroplastika.how.items.item_9.title')</span>

                                    <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                </div>

                                <div class="accordion-descr" data-box-dropdown>
                                    <div class="accordion-descr__inner" data-box-inner>
                                        <p>@lang('frontend/blefaroplastika.how.items.item_9.description')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="attention-main">
                            <span class="attention-main__ico">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M29.3911 22.5353L18.7818 3.00376C17.981 1.65576 16.5668 0.850677 14.9989 0.850677C13.4309 0.850677 12.0167 1.65576 11.2159 3.00376C11.2099 3.01408 11.2048 3.02439 11.1988 3.0347L0.624693 22.5044C-0.193217 23.8808 -0.208686 25.5338 0.582564 26.9257C1.37563 28.3184 2.80438 29.1492 4.40674 29.1492H25.5324C27.1347 29.1492 28.6222 28.3184 29.4152 26.9257C30.2064 25.5339 30.191 23.8808 29.3911 22.5353ZM13.2393 9.79378C13.2393 8.82195 14.0271 8.03421 14.9989 8.03421C15.9707 8.03421 16.7584 8.82201 16.7584 9.79378V16.8321C16.7584 17.8038 15.9706 18.5917 14.9989 18.5917C14.0271 18.5917 13.2393 17.8038 13.2393 16.8321V9.79378ZM14.9989 25.6301C13.5434 25.6301 12.3594 24.4461 12.3594 22.9907C12.3594 21.5353 13.5434 20.3513 14.9989 20.3513C16.4543 20.3513 17.6382 21.5353 17.6382 22.9907C17.6383 24.4461 16.4543 25.6301 14.9989 25.6301Z"
                                          fill="#F37110"/>
                                </svg>
                            </span>

                        <div class="attention-main__text">
                            <p>@lang('frontend/blefaroplastika.how.alert')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main">
            <div class="page-content">
                <div class="title-section">
                    <span>@lang('frontend/blefaroplastika.specialist.title') </span>
                </div>
            </div>

            <div class="slider-main wr-slider-specialist">
                <div class="page-content wr-specialist-info">
                    <div class="specialist-card-box">
                        <div class="specialist-name">
                            <span>@lang('frontend/blefaroplastika.specialist.specialist')</span>
                        </div>

                        <div class="specialist-specialization">
                            <div class="specialist-specialization-property">
                                <span>@lang('frontend/blefaroplastika.specialist.specialisation')</span>
                            </div>

                            <div class="specialist-specialization-title">
                                <span>@lang('frontend/blefaroplastika.specialist.description.title')</span>
                            </div>
                        </div>

                        <div class="specialist-info">
                            <p>@lang('frontend/blefaroplastika.specialist.description.description')</p>
                        </div>
                    </div>
                </div>

                <div class="wr-slider-specialis__inner">
                    <div class="slider-specialist swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="specialist-card">
                                    <picture class="specialist-photo">
                                        <source srcset="/images/kremen.png"
                                                media="(min-width: 992px)"/>

                                        <img src="/images/kremen_mob.jpg"
                                             alt="specialist"/>
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-main-navigation" style="display: none">
                        <div class="slider-main-button slider-main-prev">
                            <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 2.35836L4.96156 10L13 17.6416L10.5193 20L-1.2319e-06 10L10.5193 5.42182e-07L13 2.35836Z"
                                      fill="white"/>
                            </svg>
                        </div>

                        <div class="slider-main-button slider-main-next">
                            <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.31342e-06 17.6416L8.03844 10L3.09261e-07 2.35836L2.48074 -3.25309e-07L13 10L2.48074 20L2.31342e-06 17.6416Z"
                                      fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main">
            <div class="page-content">
                <div class="title-section">
                    <span>@lang('frontend/blefaroplastika.sertificats.title')</span>
                </div>

                <div class="list-box">
                    <div class="list-box__item">
                        <div class="wr-img">
                            <img src="/images/diplom_krem1-min.png" alt=""/>
                        </div>
                    </div>

                    <div class="list-box__item">
                        <div class="wr-img">
                            <img src="/images/diplom_krem2-min.png" alt=""/>
                        </div>
                    </div>
                    <div class="list-box__item">
                        <div class="wr-img">
                            <img src="/images//diplom_krem3-min.png" alt=""/>
                        </div>
                    </div>
                    <div class="list-box__item">
                        <div class="wr-img">
                            <img src="/images//diplom_krem4-min.png" alt=""/>
                        </div>
                    </div>
                    <div class="list-box__item">
                        <div class="wr-img">
                            <img src="/images//diplom_krem5-min.jpg" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main">
            <div class="banner-section banner-section_top" id="banner-section-2">
                <div class="banner-section-bg">
                    <img src="/images/banner-section-2.jpg" alt="bg"/>
                </div>

                <div class="page-content">
                    <div class="banner-section-title">
                        <span>@lang('frontend/blefaroplastika.recording.title')</span>
                    </div>

                    <div class="banner-section-subtitle">
                        <span>@lang('frontend/blefaroplastika.recording.description')</span>
                    </div>

                    <div class="wr-banner-section-button">
                        <button class="open-modal button-main button-main_orange">@lang('frontend/blefaroplastika.recording.link')</button>
                    </div>
                </div>
            </div>

            <div class="page-content">
                <div class="advantage">
                    <div class="advantage-list advantage-list_white">
                        <div class="advantage-card advantage-card_small">
                            <div class="advantage-card-ico">
                                <img src="/images/ico-4.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-descr advantage-card-descr_text-sm">
                                <span>@lang('frontend/blefaroplastika.recording.items.item_1.title')</span>
                            </div>
                        </div>

                        <div class="advantage-card advantage-card_small">
                            <div class="advantage-card-ico">
                                <img src="/images/ico-5.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-descr advantage-card-descr_text-sm">
                                <span>@lang('frontend/blefaroplastika.recording.items.item_2.title')</span>
                            </div>
                        </div>

                        <div class="advantage-card advantage-card_small">
                            <div class="advantage-card-ico">
                                <img src="/images/ico-6.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-descr advantage-card-descr_text-sm">
                                <span>@lang('frontend/blefaroplastika.recording.items.item_3.title')</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main">
            <div class="page-content">
                <div class="equipment">
                    <div class="title-section">
                        <span>@lang('frontend/blefaroplastika.equipment.equipment')</span>
                    </div>

                    <div class="equipment-card">
                        <div class="equipment-card-img">
                            <img src="/images/equipment.jpg" alt="equipment">

                            <div class="equipment-card-title equipment-card-title_mob">
                                <span>@lang('frontend/blefaroplastika.equipment.title')</span>
                            </div>
                        </div>

                        <div class="equipment-card-block">
                            <div class="equipment-card-block__inner">
                                <div class="equipment-card-title equipment-card-title_desktop">
                                    <span>@lang('frontend/blefaroplastika.equipment.title')</span>
                                </div>

                                <div class="equipment-card-year">
                                    <span class="equipment-card-year__property">@lang('frontend/blefaroplastika.equipment.year_title')</span>

                                    <span class="equipment-card-year__value">@lang('frontend/blefaroplastika.equipment.year')</span>
                                </div>

                                <div class="equipment-card-descr">
                                    <p>@lang('frontend/blefaroplastika.equipment.description')</p>
                                </div>
                            </div>

                            <div class="equipment-card-addition">
                                <p>@lang('frontend/blefaroplastika.equipment.alert')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-section banner-section_bottom" id="banner-section-3">
                <div class="banner-section-bg">
                    <img src="/images/banner-section-3.jpg" alt="bg"/>
                </div>

                <div class="page-content">
                    <div class="banner-section-title">
                        <span>@lang('frontend/blefaroplastika.recording.title')</span>
                    </div>

                    <div class="banner-section-subtitle">
                        <span>@lang('frontend/blefaroplastika.recording.cost')</span>
                    </div>

                    <div class="wr-banner-section-button">
                        <button class="open-modal button-main button-main_orange">@lang('frontend/blefaroplastika.recording.link')</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main">
            <div class="page-content">
                <div class="title-section">
                    <span>@lang('frontend/blefaroplastika.reviews.title')</span>
                </div>

                <div class="list-box">
                    <div class="list-box__item">
                        <div class="review-box">
                            <!--<div class="review-title">
                                <span>Валерия М</span>
                            </div>

                            <div class="review-text">
                                <span>Благодарю Анну Васильевну за профессионализм и отличный результат. Обратилась к ней, так как провисала кожа на верхних веках. Долго сомневалась стоит ли делать. Все таки операция. Пробовала решить косметическим способом. Но ничего не помогало. Анну Васильевну мне посоветовала подруга. Сначала обратилась за консультацией. Она очень подробно объяснила как будет все будет проходить, ответила на все мои вопросы и опасения. Операция прошла достаточно быстро и безболезненно. А восстановление почти незаметно.</span>
                            </div>-->

                            <div class="recall-result">
                                <div class="recall-result-title">
                                    <span>Результат</span>
                                </div>

                                <div class="recall-result-box" id="resultRecall_1">
                                    <div class="recall-result-box__before">
                                        <div class="recall-result-box-img">
                                            <img src="/images/before-1.jpg"
                                                 alt="result">
                                        </div>

                                        <div class="recall-result-box-title">
                                            <span>До</span>
                                        </div>
                                    </div>

                                    <div class="recall-result-box__after divisorAfter">
                                        <div class="recall-result-box-img">
                                            <img src="/images/after-1.jpg"
                                                 alt="result">
                                        </div>

                                        <div class="recall-result-box-title" id="titleBefore">
                                            <span>После</span>
                                        </div>

                                        <div class="draggable">
                                                <span class="dr-btn">
                                                    <span class="dr-btn__left">
                                                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.79999 1.41501L2.97692 6L7.79999 10.585L6.31155 12L-1.21832e-05 6L6.31154 6.50619e-08L7.79999 1.41501Z"
                                                                  fill="#1D86BC"/>
                                                        </svg>
                                                    </span>

                                                    <span class="dr-btn__right">
                                                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.38805e-06 10.585L4.82307 6L1.85557e-07 1.41502L1.48844 -1.95186e-07L7.8 6L1.48844 12L1.38805e-06 10.585Z"
                                                                  fill="#1D86BC"/>
                                                        </svg>
                                                    </span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-box__item">
                        <div class="review-box">
                            <!--<div class="review-title">
                                <span>Диана Д</span>
                            </div>

                            <div class="review-text">
                                <span>Делала операцию месяц назад. Чувствую себя прекрасно. Благодарю Анну Васильевну. У нее золотые руки. Операция прошла быстро. Анна Васильевна говорила мне на каждом этапе операции что происходит, что все под контролем и это помогало мне чувствовать себя спокойно. Спасибо ей за то, что после операции связывалась со мной по скайпу и отвечала на все вопросы в телеграмм. Восстановление прошло очень быстро, всего 2 недели. Очень довольна результатом. Все как я и хотела!</span>
                            </div>-->

                            <div class="recall-result">
                                <div class="recall-result-title">
                                    <span>Результат</span>
                                </div>

                                <div class="recall-result-box" id="resultRecall_2">
                                    <div class="recall-result-box__before">
                                        <div class="recall-result-box-img">
                                            <img src="/images/before-2.jpg"
                                                 alt="result"/>
                                        </div>

                                        <div class="recall-result-box-title">
                                            <span>До</span>
                                        </div>
                                    </div>

                                    <div class="recall-result-box__after divisorAfter">
                                        <div class="recall-result-box-img">
                                            <img src="/images/after-2.jpg"
                                                 alt="result"/>
                                        </div>

                                        <div class="recall-result-box-title">
                                            <span>После</span>
                                        </div>

                                        <div class="draggable">
                                                <span class="dr-btn">
                                                    <span class="dr-btn__left">
                                                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.79999 1.41501L2.97692 6L7.79999 10.585L6.31155 12L-1.21832e-05 6L6.31154 6.50619e-08L7.79999 1.41501Z"
                                                                  fill="#1D86BC"/>
                                                        </svg>
                                                    </span>

                                                    <span class="dr-btn__right">
                                                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.38805e-06 10.585L4.82307 6L1.85557e-07 1.41502L1.48844 -1.95186e-07L7.8 6L1.48844 12L1.38805e-06 10.585Z"
                                                                  fill="#1D86BC"/>
                                                        </svg>
                                                    </span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recall-button">
                    <a href="https://www.okc.com.ua/ru/testimonials" target="_blank"
                       class="button-main button-main_blue button-more-recall">@lang('frontend/blefaroplastika.reviews.link')</a>
                </div>
            </div>
        </div>

        <div class="section-main section-main_m-n section-main_video" style="min-height: 320px; height:auto; max-height: 640px">

            <div class="banner-section banner-section_bottom" id="banner-section-4" style="margin-top: 70px">
                <div class="banner-section-bg">
                    <img src="/images/banner-section-4.jpg" alt="bg"/>
                </div>

                <div class="page-content">
                    <div class="banner-section-title">
                        <span>@lang('frontend/blefaroplastika.consultation.title')</span>
                    </div>

                    <div class="banner-section-subtitle">
                        <span>@lang('frontend/blefaroplastika.consultation.description')</span>
                    </div>

                    <div class="wr-banner-section-button">
                        <button class="open-modal-recall button-main button-main_orange">@lang('frontend/blefaroplastika.consultation.link')</button>
                    </div>
                </div>
            </div>
        </div>
    </div></div>

    <!--<appointment-modal locale="uk" :translations="{&quot;fatal_error&quot;:&quot;Фатальна помилка&quot;,&quot;title&quot;:&quot;Запис онлайн&quot;,&quot;selectizer&quot;:{&quot;title&quot;:&quot;Направлення&quot;,&quot;values&quot;:{&quot;value_1&quot;:&quot;Консультація лікаря&quot;,&quot;value_2&quot;:&quot;Лазерна корекція зору&quot;,&quot;value_3&quot;:&quot;Катаракта&quot;,&quot;value_4&quot;:&quot;Гінекологія&quot;,&quot;value_5&quot;:&quot;УЗ діагностика&quot;,&quot;value_6&quot;:&quot;Гастроентерологія&quot;,&quot;value_7&quot;:&quot;Дерматологія&quot;,&quot;value_8&quot;:&quot;Урологія\/Проктологія&quot;,&quot;value_9&quot;:&quot;Трихологія&quot;}},&quot;phone&quot;:{&quot;label&quot;:&quot;Ваш номер телефону&quot;,&quot;description&quot;:&quot;Формат: +380501023212&quot;},&quot;name&quot;:{&quot;label&quot;:&quot;Ваше ім&#039;я&quot;},&quot;additional&quot;:{&quot;label&quot;:&quot;Додаткова інформація&quot;},&quot;work&quot;:{&quot;title&quot;:&quot;Ми працюємо&quot;,&quot;value&quot;:&quot;ПН-СБ з 9:00 до 18:00&quot;},&quot;appointment&quot;:{&quot;title&quot;:&quot;Запис через соц. мережу&quot;,&quot;value&quot;:&quot;До 21:00&quot;},&quot;appointment_phone&quot;:{&quot;title&quot;:&quot;Запис по телефону&quot;,&quot;value&quot;:&quot;До 19:00&quot;},&quot;agreement&quot;:&quot;Заповнюючи дану форму, Ви погоджуєтеся з умовами обробки персональніх даних. Ми гарантуемо конфіденційність Вашого зверненя&quot;,&quot;discount&quot;:&quot;10% знижка за онлайн реєстрацію&quot;,&quot;buttons&quot;:{&quot;submit&quot;:&quot;Відправити&quot;,&quot;cancel&quot;:&quot;Відмінити&quot;}}"></appointment-modal>

    <page-sticky-menu-component :translations="{&quot;appointment&quot;:&quot;Записатися&quot;}">
    </page-sticky-menu-component>-->
</div>
















</x-app-layout>



