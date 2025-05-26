<x-app-layout>

    <main class="body-main">
        <div class="section-main">
            <div class="banner-main"
                 style="background-image: url('/images/services/checkup/banner.jpg');">
                <div class="page-content " style="margin-top: 40px">
                    <div class="banner-main-hold">
                        <div class="banner-main-title">
                            <span style="color: #294481;">@lang('frontend/checkUp.slider.slide_1.title')</span>
                        </div>

                        <div class="banner-main-subtitle">
                            <span style="color: #294481">@lang('frontend/checkUp.slider.slide_1.description')</span>
                        </div>

                        <div class="wr-banner-main-button">
                            <button class="open-modal button-main button-main_orange">@lang('frontend/checkUp.slider.slide_1.link')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main">
            <div class="page-content">
                <div class="box-info">
                    <div class="title-section">
                        <span>@lang('frontend/checkUp.whatas.title')</span>
                    </div>

                    <div class="text-section">
                        <p>
                            <span class="text-section__strong">@lang('frontend/checkUp.whatas.description_1_1')</span> @lang('frontend/checkUp.whatas.description_1_2')
                        </p>

                        <p>
                            <span class="text-section__strong">@lang('frontend/checkUp.whatas.description_1_3')</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main section-main_m-n section-main_video padding--phone">
            <div class="page-content">
                <iframe class="height--phone" width="100%" height="617" src="https://www.youtube.com/embed/videoseries?list=PLJwatesN19cLJWXfGyMNreC42M2SjaLWf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="section-main when-needed after-video-padding">
            <div class="page-content">
                <div class="title-section">
                    <span>@lang('frontend/checkUp.when.title')</span>
                </div>

                <div class="advantage">
                    <div class="advantage-list">
                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/services/checkup/no_tabs.jpg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>@lang('frontend/checkUp.when.slide_1_1')</span>
                            </div>

                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/services/checkup/health_man.jpg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>@lang('frontend/checkUp.when.slide_2_1')</span>
                            </div>

                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/services/checkup/no_time.jpg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>@lang('frontend/checkUp.when.slide_3_1')</span>
                            </div>

                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/services/checkup/fatigue.jpg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>@lang('frontend/checkUp.when.slide_4_1')</span>
                            </div>

                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/services/checkup/megopolis.jpg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>@lang('frontend/checkUp.when.slide_5_1')</span>
                            </div>

                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/services/checkup/body.jpg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>@lang('frontend/checkUp.when.slide_6_1')</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main section-main_second  section-main_change-mob positio-section-mob">
            <div class="page-content">
                <div class="equipment">
                    <div class="page-box-sm">
                        <div class="title-section">
                            <span class="title-color-mob">@lang('frontend/checkUp.how.title')</span>
                        </div>

                        <div class="accordion-list">
                            <div class="accordion-list-item">
                                <div class="accordion-list-item__inner">
                                    <div class="accordion-title" data-button>
                                        <span class="accordion-title__text">@lang('frontend/checkUp.how.items.item_1.title')</span>

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
                                            <p>@lang('frontend/checkUp.how.items.item_1.description_1')</p>
                                            <p>@lang('frontend/checkUp.how.items.item_1.description_2')</p>
                                            <p>@lang('frontend/checkUp.how.items.item_1.description_3')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-list-item">
                                <div class="accordion-list-item__inner">
                                    <div class="accordion-title" data-button>
                                        <span class="accordion-title__text">@lang('frontend/checkUp.how.items.item_2.title')</span>

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
                                            <p>@lang('frontend/checkUp.how.items.item_2.description_1')</p>
                                            <p>@lang('frontend/checkUp.how.items.item_2.description_2')</p>
                                            <p>@lang('frontend/checkUp.how.items.item_2.description_3')</p>
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
                                <p>@lang('frontend/checkUp.how.alert')</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="banner-section banner-section_bottom" id="banner-section-3">
                <div class="banner-section-bg" style="background: rgb(0,115,255)">
                    <img src="/images/services/checkup/record_background.jpg" alt="bg" style="opacity: 0.8"/>
                </div>

                <div class="page-content">
                    <div class="banner-section-title">
                        <span>@lang('frontend/checkUp.recording.title')</span>
                    </div>

                    <div class="banner-section-subtitle">
                        <span>@lang('frontend/checkUp.recording.cost')</span>
                    </div>

                    <div class="wr-banner-section-button">
                        <button class="open-modal button-main button-main_orange">@lang('frontend/checkUp.recording.link')</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main section-main_second  section-main_change-mob positio-section-mob">
            <div class="page-content">
                <div class="equipment">
                    <div class="page-box-sm">
                        <div class="title-section">
                            <span class="title-color-mob">@lang('frontend/checkUp.variant.title')</span>
                        </div>

                        <div class="accordion-list">
                            <div class="accordion-list-item">
                                <div class="accordion-list-item__inner">
                                    <div class="accordion-title" data-button>
                                        <span class="accordion-title__text">@lang('frontend/checkUp.variant.items.item_6.title_1')</span>

                                        <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="accordion-title">
                                        <p class="accordion-descr__inner" style="font-size: 14px">@lang('frontend/checkUp.variant.items.item_6.title_2') </p>
                                    </div>

                                    <div class="accordion-descr" data-box-dropdown>
                                        <div class="accordion-descr__inner" data-box-inner>
                                            <p>@lang('frontend/checkUp.variant.items.item_6.description_1')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_6.description_2')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_6.description_3')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_6.description_4')</p>
                                            <p>&nbsp;</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_6.description_6')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_6.description_7')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_6.description_8')</p>
                                            <p>&nbsp;</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_6.description_9')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_6.description_10')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_6.description_11')</p>
                                            <p>&nbsp;</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_6.description_12')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-list-item">
                                <div class="accordion-list-item__inner">
                                    <div class="accordion-title" data-button>
                                        <span class="accordion-title__text">@lang('frontend/checkUp.variant.items.item_7.title_1') </span></span>

                                        <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="accordion-title">
                                        <p class="accordion-descr__inner" style="font-size: 14px">@lang('frontend/checkUp.variant.items.item_7.title_2')</p>
                                    </div>

                                    <div class="accordion-descr" data-box-dropdown>
                                        <div class="accordion-descr__inner" data-box-inner>
                                            <p>@lang('frontend/checkUp.variant.items.item_7.description_1')</p>
                                            <p>&nbsp;</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_7.description_6')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_7.description_7')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_7.description_8')</p>
                                            <p>&nbsp;</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_7.description_9')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_7.description_10')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_7.description_11')</p>
                                            <p>&nbsp;</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_7.description_12')</p>
                                            <p>&nbsp;</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_7.description_13')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-list-item">
                                <div class="accordion-list-item__inner">
                                    <div class="accordion-title" data-button>
                                        <span class="accordion-title__text">@lang('frontend/checkUp.variant.items.item_1.title_1')</span>

                                        <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0" y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="0" width="2" height="16" fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="accordion-title">
                                        <p class="accordion-descr__inner" style="font-size: 14px">@lang('frontend/checkUp.variant.items.item_1.title_2')</p>
                                    </div>

                                    <div class="accordion-descr" data-box-dropdown>
                                        <div class="accordion-descr__inner" data-box-inner>
                                            <p>@lang('frontend/checkUp.variant.items.item_1.description_1')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_1.description_2')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_1.description_3')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_1.description_4')</p>
                                            <p>&nbsp;</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_1.description_5')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_1.description_6')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_1.description_7')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_1.description_8')</p>
                                            <p>&nbsp;</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_1.description_9')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-list-item">
                                <div class="accordion-list-item__inner">
                                    <div class="accordion-title" data-button>
                                        <span class="accordion-title__text">@lang('frontend/checkUp.variant.items.item_2.title_1')</span>

                                        <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="accordion-title">
                                        <p class="accordion-descr__inner" style="font-size: 14px">@lang('frontend/checkUp.variant.items.item_2.title_2')</p>
                                    </div>

                                    <div class="accordion-descr" data-box-dropdown>
                                        <div class="accordion-descr__inner" data-box-inner>
                                            <p>@lang('frontend/checkUp.variant.items.item_2.description_1')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_2.description_2')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_2.description_3')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_2.description_4')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_2.description_5')</p>
                                            <p>&nbsp;</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_2.description_6')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_2.description_7')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_2.description_8')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_2.description_9')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_2.description_10')</p>
                                            <p>  @lang('frontend/checkUp.variant.items.item_2.description_11')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_2.description_12')</p>
                                            <p>&nbsp;</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_2.description_13')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-list-item">
                                <div class="accordion-list-item__inner">
                                    <div class="accordion-title" data-button>
                                        <span class="accordion-title__text">@lang('frontend/checkUp.variant.items.item_3.title_1')</span>

                                        <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="accordion-title">
                                        <p class="accordion-descr__inner" style="font-size: 14px">@lang('frontend/checkUp.variant.items.item_3.title_2')</p>
                                    </div>

                                    <div class="accordion-descr" data-box-dropdown>
                                        <div class="accordion-descr__inner" data-box-inner>
                                            <p>@lang('frontend/checkUp.variant.items.item_3.description_1')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_3.description_2')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_3.description_3')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_3.description_4')</p>
                                            <p>&nbsp;</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_3.description_5')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_3.description_6')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_3.description_7')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_3.description_8')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_3.description_9')</p>
                                            <p>&nbsp;</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_3.description_10')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-list-item">
                                <div class="accordion-list-item__inner">
                                    <div class="accordion-title" data-button>
                                        <span class="accordion-title__text">@lang('frontend/checkUp.variant.items.item_4.title_1')</span>

                                        <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="accordion-title">
                                        <p class="accordion-descr__inner" style="font-size: 14px">@lang('frontend/checkUp.variant.items.item_4.title_2')</p>
                                    </div>

                                    <div class="accordion-descr" data-box-dropdown>
                                        <div class="accordion-descr__inner" data-box-inner>
                                            <p>@lang('frontend/checkUp.variant.items.item_4.description_1')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_4.description_2')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_4.description_3')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_4.description_4')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_4.description_5')</p>
                                            <p>&nbsp;</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_4.description_6')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_4.description_7')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_4.description_8')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_4.description_9')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_4.description_10')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_4.description_11')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_4.description_12')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_4.description_13')</p>
                                            <p>&nbsp;</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_4.description_14')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-list-item">
                                <div class="accordion-list-item__inner">
                                    <div class="accordion-title" data-button>
                                        <span class="accordion-title__text">@lang('frontend/checkUp.variant.items.item_8.title_1')</span>

                                        <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="accordion-title">
                                        <p class="accordion-descr__inner" style="font-size: 14px">@lang('frontend/checkUp.variant.items.item_8.title_2')               </p>
                                    </div>

                                    <div class="accordion-descr" data-box-dropdown>
                                        <div class="accordion-descr__inner" data-box-inner>
                                            <p>@lang('frontend/checkUp.variant.items.item_8.description_1')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_8.description_2')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_8.description_3')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_8.description_4')</p>
                                            <p>&nbsp;</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_8.description_6')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-list-item">
                                <div class="accordion-list-item__inner">
                                    <div class="accordion-title" data-button>
                                        <span class="accordion-title__text">@lang('frontend/checkUp.variant.items.item_5.title_1')</span></span>

                                        <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="accordion-title">
                                        <p class="accordion-descr__inner" style="font-size: 14px">@lang('frontend/checkUp.variant.items.item_5.title_2')   </p>
                                    </div>

                                    <div class="accordion-descr" data-box-dropdown>
                                        <div class="accordion-descr__inner" data-box-inner>
                                            <p>@lang('frontend/checkUp.variant.items.item_5.description_1')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_5.description_2')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_5.description_3')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_5.description_4')</p>
                                            <p>&nbsp;</p>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                            <p>&nbsp;</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_5.description_9')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-list-item">
                                <div class="accordion-list-item__inner">
                                    <div class="accordion-title" data-button>
                                        <span class="accordion-title__text">Пакет <span style="color:#F37110">@lang('frontend/checkUp.variant.items.item_9.title_1')</span></span>

                                        <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="accordion-title">
                                        <p class="accordion-descr__inner" style="font-size: 14px">@lang('frontend/checkUp.variant.items.item_9.title_2')</p>
                                    </div>

                                    <div class="accordion-descr" data-box-dropdown>
                                        <div class="accordion-descr__inner" data-box-inner>
                                            <p>@lang('frontend/checkUp.variant.items.item_9.description_1')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_9.description_2')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_9.description_3')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_9.description_4')</p>
                                            <p></p>
                                            <p>@lang('frontend/checkUp.variant.items.item_9.description_6')</p>
                                            <p>&nbsp;</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_9.description_7')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-list-item">
                                <div class="accordion-list-item__inner">
                                    <div class="accordion-title" data-button>
                                        <span class="accordion-title__text">@lang('frontend/checkUp.variant.items.item_10.title_1')</span>

                                        <span class="accordion-title__indicator" data-indicator>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect y="7" width="16" height="2" fill="#1D86BC"/>
                                                <rect x="7" y="16" width="16" height="2" transform="rotate(-90 7 16)"
                                                      fill="#1D86BC"/>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="accordion-title">
                                        <p class="accordion-descr__inner" style="font-size: 14px">@lang('frontend/checkUp.variant.items.item_10.title_2')                                    </p>
                                    </div>

                                    <div class="accordion-descr" data-box-dropdown>
                                        <div class="accordion-descr__inner" data-box-inner>
                                            <p>@lang('frontend/checkUp.variant.items.item_10.description_1')</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_10.description_2')</p>
                                            <p> @lang('frontend/checkUp.variant.items.item_10.description_3')</p>
                                            <p></p>
                                            <p></p>
                                            <p> @lang('frontend/checkUp.variant.items.item_10.description_6')</p>
                                            <p>&nbsp;</p>
                                            <p>@lang('frontend/checkUp.variant.items.item_10.description_7')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-section banner-section_bottom" id="banner-section-3">
                <div class="banner-section-bg" style="background: rgb(0,115,255)">
                    <img src="/images/services/checkup/v266.jpg" alt="bg" style="opacity: 0.8"/>
                </div>

                <div class="page-content">
                    <div class="banner-section-title">
                        <span>@lang('frontend/checkUp.recording.title')</span>
                    </div>

                    <div class="banner-section-subtitle">
                        <span>@lang('frontend/checkUp.recording.cost')</span>
                    </div>

                    <div class="wr-banner-section-button">
                        <button href="#resultRecall_1" class="open-modal button-main button-main_orange">@lang('frontend/checkUp.recording.link')</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main section-main_m-n section-main_video">
            <div class="page-content">
                <div class="title-section">
                    <span>@lang('frontend/checkUp.specialist.title')</span>
                </div>
                <div class="slider-main wr-slider-video">
                    <div class="slider-video swiper-container">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="page-content wr-specialist-info">
                                    <div class="specialist-card-box specialist-card-box-position">
                                        <div class="specialist-name">
                                            <span>@lang('frontend/checkUp.specialist.specialist_5')</span>
                                        </div>

                                        <div class="specialist-specialization">
                                            <div class="specialist-specialization-property">
                                                <span>@lang('frontend/checkUp.specialist.specialisation')</span>
                                            </div>

                                            <div class="specialist-specialization-title">
                                                <span>@lang('frontend/checkUp.specialist.description.title_5') </span>
                                            </div>
                                        </div>

                                        <div class="specialist-info">
                                            <a style="text-decoration: underline; color: #0d47a1;" href="/ru/doctors/tsivenko-viktoriya-nikolaevna">@lang('frontend/checkUp.specialist.description.link')</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="wr-slider-specialis__inner">
                                    <div class="slider-specialist swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="specialist-card specialist-card-bg" >
                                                    <picture class="specialist-photo2 specialist-photo-checup">
                                                        <source srcset="/images/services/checkup/tsivenko.jpg"
                                                                media="(min-width: 992px)"/>

                                                        <div class="specialist-tablet"><img src="/images/services/checkup/tsivenko.jpg"
                                                                  alt="specialist" style="height: 415px; "/></div>
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="page-content wr-specialist-info">
                                    <div class="specialist-card-box specialist-card-box-position">
                                        <div class="specialist-name">
                                            <span>@lang('frontend/checkUp.specialist.specialist_2')</span>
                                        </div>

                                        <div class="specialist-specialization">
                                            <div class="specialist-specialization-property">
                                                <span>@lang('frontend/checkUp.specialist.specialisation')</span>
                                            </div>

                                            <div class="specialist-specialization-title">
                                                <span>@lang('frontend/checkUp.specialist.description.title_2') </span>
                                            </div>
                                        </div>

                                        <div class="specialist-info">
                                            <a style="text-decoration: underline; color: #0d47a1;" href="/ru/doctors/mikheev-eduard-aleksandrovich">@lang('frontend/checkUp.specialist.description.link')</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="wr-slider-specialis__inner">
                                    <div class="slider-specialist swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="specialist-card specialist-card-bg" >
                                                    <picture class="specialist-photo2 specialist-photo-checup" style="width: 450px">
                                                        <source srcset="/images/services/checkup/mikheev.jpg"
                                                                media="(min-width: 992px)"/>

                                                        <div class="specialist-tablet"><img src="/images/services/checkup/mikheev.jpg"
                                                                  alt="specialist" style="height: 550px;"/></div>
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="page-content wr-specialist-info">
                                    <div class="specialist-card-box specialist-card-box-position">
                                        <div class="specialist-name">
                                            <span>@lang('frontend/checkUp.specialist.specialist_7')</span>
                                        </div>

                                        <div class="specialist-specialization">
                                            <div class="specialist-specialization-property">
                                                <span>@lang('frontend/checkUp.specialist.specialisation')</span>
                                            </div>

                                            <div class="specialist-specialization-title">
                                                <span>@lang('frontend/checkUp.specialist.description.title_7') </span>
                                            </div>
                                        </div>

                                        <div class="specialist-info">
                                            <a style="text-decoration: underline; color: #0d47a1;" href="/ru/doctors/vitokhina-lesnaya-tatyana-petrovna">@lang('frontend/checkUp.specialist.description.link')</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="wr-slider-specialis__inner">
                                    <div class="slider-specialist swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="specialist-card specialist-card-bg">
                                                    <picture class="specialist-photo2 specialist-photo-checup" style="width: 440px;" >
                                                        <source srcset="/images/services/checkup/vitohina.jpg"
                                                                media="(min-width: 992px)"/>

                                                       <div class="specialist-tablet">
                                                           <img src="/images/services/checkup/vitohina.jpg"
                                                                alt="specialist"/>
                                                       </div>
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="swiper-slide">

                                <div class="page-content wr-specialist-info">
                                    <div class="specialist-card-box">
                                        <div class="specialist-name">
                                            <span>Іпішина Яна анатоліївна</span>
                                        </div>

                                        <div class="specialist-specialization">
                                            <div class="specialist-specialization-property">
                                                <span>Спеціалізації</span>
                                            </div>

                                            <div class="specialist-specialization-title">
                                                <span>Офтальмолог, лікар вищої категорії</span>
                                            </div>
                                        </div>

                                        <div class="specialist-info">
                                            <a style="text-decoration: underline; color: #0d47a1;" href="/ru/doctors/lyashenko-yana-anatolevna">Детальніше про лікаря</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="wr-slider-specialis__inner">
                                    <div class="slider-specialist swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="specialist-card">
                                                    <picture class="specialist-photo">
                                                        <source srcset="/images/services/checkup/lyashenko.jpg"
                                                                media="(min-width: 992px)"/>

                                                        <img src="/images/services/checkup/lyashenko.jpg"
                                                             alt="Ляшенко Яна анатольевна"/>
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>-->

                            <div class="swiper-slide">
                                <div class="page-content wr-specialist-info">
                                    <div class="specialist-card-box specialist-card-box-position">
                                        <div class="specialist-name">
                                            <span>@lang('frontend/checkUp.specialist.specialist_3')</span>
                                        </div>

                                        <div class="specialist-specialization">
                                            <div class="specialist-specialization-property">
                                                <span>@lang('frontend/checkUp.specialist.specialisation')</span>
                                            </div>

                                            <div class="specialist-specialization-title">
                                                <span>@lang('frontend/checkUp.specialist.description.title_3') </span>
                                            </div>
                                        </div>

                                        <div class="specialist-info">
                                            <a style="text-decoration: underline; color: #0d47a1;" href="/ru/doctors/pogrebnyak-anna-aleksandrovna">@lang('frontend/checkUp.specialist.description.link')</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="wr-slider-specialis__inner">
                                    <div class="slider-specialist swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="specialist-card specialist-card-bg" >
                                                    <picture class="specialist-photo2 specialist-photo-checup" >
                                                        <source srcset="/images/services/checkup/pogrebnyak.jpg"
                                                                media="(min-width: 992px)"/>

                                                        <div class="specialist-tablet">

                                                            <img src="/images/services/checkup/pogrebnyak.jpg"
                                                                 alt="specialist"/>

                                                        </div>
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="page-content wr-specialist-info">
                                    <div class="specialist-card-box specialist-card-box-position">
                                        <div class="specialist-name">
                                            <span>@lang('frontend/checkUp.specialist.specialist_4')</span>
                                        </div>

                                        <div class="specialist-specialization">
                                            <div class="specialist-specialization-property">
                                                <span>@lang('frontend/checkUp.specialist.specialisation')</span>
                                            </div>

                                            <div class="specialist-specialization-title">
                                                <span>@lang('frontend/checkUp.specialist.description.title_4') </span>
                                            </div>
                                        </div>

                                        <div class="specialist-info">
                                            <a style="text-decoration: underline; color: #0d47a1;" href="/ru/doctors/trofimova-ekaterina-aleksandrovna">@lang('frontend/checkUp.specialist.description.link')</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="wr-slider-specialis__inner">
                                    <div class="slider-specialist swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="specialist-card specialist-card-bg" >
                                                    <picture class="specialist-photo2 specialist-photo-checup" >
                                                        <source srcset="/images/services/checkup/trofimova.jpg"
                                                                media="(min-width: 992px)"/>

                                                       <div class="specialist-tablet"><img src="/images/services/checkup/trofimova.jpg"
                                                                 alt="specialist"/></div>
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="swiper-slide">
                                <div class="page-content wr-specialist-info">
                                    <div class="specialist-card-box specialist-card-box-position">
                                        <div class="specialist-name">
                                            <span>@lang('frontend/checkUp.specialist.specialist_6')</span>
                                        </div>

                                        <div class="specialist-specialization">
                                            <div class="specialist-specialization-property">
                                                <span>@lang('frontend/checkUp.specialist.specialisation')</span>
                                            </div>

                                            <div class="specialist-specialization-title">
                                                <span>@lang('frontend/checkUp.specialist.description.title_6') </span>
                                            </div>
                                        </div>

                                        <div class="specialist-info">
                                            <a style="text-decoration: underline; color: #0d47a1;" href="/ru/doctors/danilenko-svetlana-vitalevna">@lang('frontend/checkUp.specialist.description.link')</a>
                                        </div>
                                    </div>
                                </div>

                               <div class="wr-slider-specialis__inner">
                                    <div class="slider-specialist swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="specialist-card specialist-card-bg">
                                                    <picture class="specialist-photo2 specialist-photo-checup" style="width: 450px; ">
                                                        <source srcset="/images/services/checkup/a2f6efeab4e089eab6d81b0bcbbeb0ba.webp"
                                                                media="(min-width: 992px)"/>

                                                       <div class="specialist-tablet">
                                                           <img src="/images/services/checkup/a2f6efeab4e089eab6d81b0bcbbeb0ba.webp"
                                                                alt="specialist" style="height: 450px"/>
                                                       </div>
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->

                        </div>
                    </div>

                    <div class="slider-main-navigation">
                        <div class="slider-main-button slider-main-prev" id="slider-video-button-prev">
                            <svg width="13" height="20" viewBox="0 0 13 20" fill="black"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 2.35836L4.96156 10L13 17.6416L10.5193 20L-1.2319e-06 10L10.5193 5.42182e-07L13 2.35836Z"
                                      fill="black"/>
                            </svg>
                        </div>

                        <div class="slider-main-button slider-main-next" id="slider-video-button-next">
                            <svg width="13" height="20" viewBox="0 0 13 20" fill="black"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.31342e-06 17.6416L8.03844 10L3.09261e-07 2.35836L2.48074 -3.25309e-07L13 10L2.48074 20L2.31342e-06 17.6416Z"
                                      fill="black"/>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <div class="banner-section banner-section_bottom" id="banner-section-4">
                <div class="banner-section-bg">
                    <img src="/images/banner-section-4.jpg" alt="bg"/>
                </div>

                <div class="page-content">
                    <div class="banner-section-title">
                        <span>@lang('frontend/checkUp.consultation.title')</span>
                    </div>

                    <div class="banner-section-subtitle">
                        <span>@lang('frontend/checkUp.consultation.description')</span>
                    </div>

                    <div class="wr-banner-section-button">
                        <button class="open-modal-recall button-main button-main_orange">@lang('frontend/checkUp.consultation.link')</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main section-main_m-n section-main_video padding--phone after-video-padding" style="padding-bottom: 60px">
            <div class="page-content">
                <div class="title-section">
                    <span>@lang('frontend/checkUp.reviews.video')</span>
                </div>
                <iframe class="height--phone"  width="100%" height="617" src="https://www.youtube.com/embed/videoseries?list=PLJwatesN19cLJWXfGyMNreC42M2SjaLWf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <!--<div class="section-main">
            <div class="page-content" style="display: none">
                <div class="title-section">
                    <span>Відгуки клієнтів</span>
                </div>

                <div class="list-box">
                    <div class="list-box__item">
                        <div class="review-box">
                            <div class="review-title">
                                <span>Виктория Л.</span>
                            </div>

                            <div class="review-text">
                                <span>В подростковом возрасте сильно страдала от акне и как следствие остались рубцы на лице. С помощью лазера CO2RE наконец-то удалось избавиться от них. Спасибо, Елене Анатольевне, что помогла решить эту проблему.</span>
                            </div>
                            <div class="recall-result">
                                <div class="recall-result-title">
                                    <span>Результат(после 1 процедуры)</span>
                                </div>

                                <div class="recall-result-box" id="resultRecall_2">
                                    <div class="recall-result-box__before">
                                        <div class="recall-result-box-img">
                                            <img src="/images/services/slide_2_before.jpg"
                                                 alt="result">
                                        </div>

                                        <div class="recall-result-box-title">
                                            <span>До</span>
                                        </div>
                                    </div>

                                    <div class="recall-result-box__after divisorAfter">
                                        <div class="recall-result-box-img">
                                            <img src="/images/services/slide_2_after.jpg"
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
                            <div class="review-title">
                                <span>Екатерина В.</span>
                            </div>

                            <div class="review-text">
                                <span>Делала уже несколько процедур с помощью лазера CO2RE. Так как после 30 лет кожа стала стремительно терять упругость. Очень довольна! Кожа подтянулась, стала более гладенькой и свежей! Спасибо за чуткий подход специалистов! Обязательно приду еще)))</span>
                            </div>
                            <div class="recall-result">
                                <div class="recall-result-title">
                                    <span>Результат(после 1 процедуры)</span>
                                </div>
                                <div class="recall-result-box" id="resultRecall_1">
                                    <div class="recall-result-box__before">
                                        <div class="recall-result-box-img">
                                            <img src="/images/services/slide_1_before.jpg"
                                                 alt="result">
                                        </div>

                                        <div class="recall-result-box-title">
                                            <span>До</span>
                                        </div>
                                    </div>

                                    <div class="recall-result-box__after divisorAfter">
                                        <div class="recall-result-box-img">
                                            <img src="/images/services/slide_1_after.jpg"
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
                </div>

            </div>
        </div>-->




    </main>


</x-app-layout>
