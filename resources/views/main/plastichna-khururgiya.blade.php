<x-app-layout>

    <main class="body-main plastica-banner-position">
        <div class="section-main">
            <div class="banner-main"
                 style="background-image: url('/images/banner (1).png');">
                <div class="page-content">
                    <div class="banner-main-hold">
                        <div class="banner-main-title">
                            <span>Пластична хірургія в медичному центрі "Докарт"</span>
                        </div>



                        <div class="banner-main-subtitle">
                            <span>Весь спектр пластичних операцій від досвідченого хірурга</span><br>
                            <span style="font-size: 28px">Консультація лікаря - усього за 1грн</span>
                        </div>

                        <div class="wr-banner-main-button">
                            <button class="open-modal button-main button-main_orange">Записатися на прийом</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main">
            <div class="page-content">
                <div class="box-info">
                    <div class="title-section">
                        <span>Навіща потрібна пластична хірургія?</span>
                    </div>

                    <div class="text-section">
                        <p>
                            <span class="text-section__strong">Пластична хірургія </span> несе в собі ціль усунути як вроджені так і набуті недоліки зовнішності людини, щоб покращити якість життя.
                        </p>

                        <p>
                            <span class="text-section__strong">Також вона несе в собі естетичну мету - корекція зовнішності людини, щоб отримати бажаний результат.</span>
                            <span class="text-section__mark"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main when-needed">
            <div class="page-content">
                <div class="title-section">
                    <span>Які види пластичних операцій ми пропонуємо Вам:</span>
                </div>

                <div class="advantage">
                    <div class="advantage-list">
                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-1.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>Блефаропластика</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span></span>
                            </div>
                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-2.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>Мастопексія</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span>(підтяжка молочних залоз без видалення тканини)</span>
                            </div>
                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-3.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>Редукційна мамопластика</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span>(підтяжка молочних залоз з видаленням тканини)</span>
                            </div>
                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-4.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>Аугментаційна мамопластика</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span>(збільшення молочних залоз за допомогою імплантів).</span>
                            </div>
                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-5.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>Абдомінопластика</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span>(пластика живота з пересадкою пупка)</span>
                            </div>
                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-6.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>Мініабдомінопластика</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span>(пластика живота)</span>
                            </div>
                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-6.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>Ліфтинг (підтяжка) м'яких тканин обличчя та шиї</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span></span>
                            </div>
                        </div>

                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-8.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>Отопластика</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span>(пластика вушних раковин)</span>
                            </div>
                        </div>
                        <div class="advantage-card">
                            <div class="advantage-card-ico">
                                <img src="/images/view-9.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-title">
                                <span>Ліпосакція</span>
                            </div>

                            <div class="advantage-card-descr">
                                <span></span>
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
                        document.getElementById("video_youtube").innerHTML = '<iframe width="100%" height="640" src="https://www.youtube.com/embed/B4oZ2SRP4h8?si=4jnKAQDAdcUtqfE5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                    }
                    if(screen.width < '768'){
                        document.getElementById("video_youtube").innerHTML = '<iframe width="100%" height="208" src="https://www.youtube.com/embed/B4oZ2SRP4h8?si=4jnKAQDAdcUtqfE5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
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
                        <span>Консультація - всього за 1 грн.</span>
                    </div>

                    <div class="banner-section-subtitle">
                        <span> <br><span class="text-strong"></span></span>
                    </div>

                    <div class="wr-banner-section-button">
                        <button class="open-modal button-main button-main_orange">Записатися на прийом</button>
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
                                <span>Якщо ви хочете вирішити питання з вродженими чи набутими дефектами</span>
                            </div>
                        </div>

                        <div class="advantage-card advantage-card_small">
                            <div class="advantage-card-ico">
                                <img src="/images/ico-2.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-descr advantage-card-descr_text-sm">
                                <span>Якщо ви хочете змінити деталі своєї зовнішності, які турбують</span>
                            </div>
                        </div>

                        <div class="advantage-card advantage-card_small">
                            <div class="advantage-card-ico">
                                <img src="/images/ico-3.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-descr advantage-card-descr_text-sm">
                                <span>Якщо засоби догляду допомагають в незначній мірі, а хочеться суттєвих змін та покращень.</span>
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
                        <span>Як відбувається процедура</span>
                    </div>

                    <div class="accordion-list">
                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">Консультація</span>

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
                                        <p>Ви консультуєтесь з хірургом з приводу питань, які вас цікавлять. Отримаєте вичерпні відповіді і індивідуальний розбір вашої ситуації.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">Огляд у фахівця</span>

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
                                        <p>Здаєте всі необхідні аналізи і, за потреби, проходите огляд у додаткових фахівців. Все індивідуально.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">Призначення дати операції</span>

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
                                        <p>Лікар призначає дату операції і дає вам пам'ятку передопераційної підготовки з необхідними медикаментами. Обов'язково дотримуйтеся інформації в пам'ятці, оскільки якість підготовки впливає на результат.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">Передопераційна підготовка</span>

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
                                        <p>У призначений день вам проводять передопераційну підготовку (необхідну розмітку та анестезіологічний супровід) і саму операцію. Операція триває від 40 хвилин до 3,5 годин</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">Спостереження</span>

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
                                        <p>Після операції, пацієнт залишається в клініці під наглядом лікаря на 1,5-2 години після блефаропластики, або на добу операцій проведених під загальним наркозом.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">Пам'ятка післяопераційного догляду</span>

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
                                        <p>Вам видадуть пам'ятку післяопераційного догляду й необхідні медикаменти. Для швидкого загоєння і кращого результату потрібно чітко дотримуватися всіх рекомендацій.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">Консультація хірурга після операції</span>

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
                                        <p>Після проведення операції хірург перевіряє ваш стан після операції та надає рекомендації</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">Зняття швів</span>

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
                                        <p>Після операції хірург знімає шви, залежності від виду операції це може бути або 5 день, абе третій тиждень.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-list-item">
                            <div class="accordion-list-item__inner">
                                <div class="accordion-title" data-button>
                                    <span class="accordion-title__text">Остаточне загоєння</span>

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
                                        <p>Після операції ми з пацієнтом знаходимося на постійному зв’язку, до остаточного загоєння.</p>
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
                            <p>Кожен етап може трохи відрізнятися за часом, оскільки все індивідуально і залежить від ваших особливостей. Лікар враховує саме вашу ситуацію під час огляду, лікування та відновлення. Завдяки персоналізованим, а не «шаблонним» методам ви можете бути впевнені в результаті.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-main">
            <div class="page-content">
                <div class="title-section">
                    <span>Спеціаліст</span>
                </div>
            </div>

            <div class="slider-main wr-slider-specialist">
                <div class="page-content wr-specialist-info">
                    <div class="specialist-card-box">
                        <div class="specialist-name">
                            <span>Кремінь Василь Олександрович</span>
                        </div>

                        <div class="specialist-specialization">
                            <div class="specialist-specialization-property">
                                <span>Спеціалізація</span>
                            </div>

                            <div class="specialist-specialization-title">
                                <span>Пластична хірургія</span>
                            </div>
                        </div>

                        <div class="specialist-info">
                            <p>Кандидат медичних наук. Член Всеукраїнської Асоціації пластичних, реконструктивних та естетичних хірургів. Співавтор ряду навчально-методичних посібників для лікарів-хірургів, комбустіологів та пластичних хірургів</p>
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
                    <span>Сертифікати</span>
                </div>

                <div class="list-box">
                    <div class="list-box__item">
                        <div class="wr-img">
                            <img src="/images/diplom_krem1-min.png" alt=""/>
                        </div>
                    </div>

                    <div class="list-box__item">
                        <div class="wr-img">
                            <img src="/images//diplom_krem2-min.png" alt=""/>
                        </div>
                    </div>
                    <div class="list-box__item">
                        <div class="wr-img">
                            <img src="/images/diplom_krem3-min.png" alt=""/>
                        </div>
                    </div>
                    <div class="list-box__item">
                        <div class="wr-img">
                            <img src="/images/diplom_krem4-min.png" alt=""/>
                        </div>
                    </div>
                    <div class="list-box__item">
                        <div class="wr-img">
                            <img src="/images/diplom_krem5-min.jpg" alt=""/>
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
                        <span>ЗАПИС НА ПЕРВИННУ КОНСУЛЬТАЦІЮ</span>
                    </div>

                    <div class="banner-section-subtitle">
                        <span>Дізнайтеся, який тип операції підійде саме вам</span>
                    </div>

                    <div class="wr-banner-section-button">
                        <button class="open-modal button-main button-main_orange">ЗАПИСАТИСЯ</button>
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
                                <span>Не конвеєрний підхід – індивідуальний підхід</span>
                            </div>
                        </div>

                        <div class="advantage-card advantage-card_small">
                            <div class="advantage-card-ico">
                                <img src="/images/ico-5.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-descr advantage-card-descr_text-sm">
                                <span>Найсучасніше обладнання</span>
                            </div>
                        </div>

                        <div class="advantage-card advantage-card_small">
                            <div class="advantage-card-ico">
                                <img src="/images/ico-6.svg" alt="ico"/>
                            </div>

                            <div class="advantage-card-descr advantage-card-descr_text-sm">
                                <span>Кожен етап операції супроводжує лікар-анестезіолог, що є запорукою комфорту пацієнта</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="section-main">
            <div class="page-content">
                <div class="equipment">
                    <div class="title-section">
                        <span>Обладнання</span>
                    </div>

                    <div class="equipment-card">
                        <div class="equipment-card-img">
                            <img src="/assets/images/services/plastychna/equipment.jpg" alt="equipment">

                            <div class="equipment-card-title equipment-card-title_mob">
                                <span>Valleylab Force FX</span>
                            </div>
                        </div>

                        <div class="equipment-card-block">
                            <div class="equipment-card-block__inner">
                                <div class="equipment-card-title equipment-card-title_desktop">
                                    <span>Valleylab Force FX</span>
                                </div>

                                <div class="equipment-card-year">
                                    <span class="equipment-card-year__property">Рік випуску</span>

                                    <span class="equipment-card-year__value">2020</span>
                                </div>

                                <div class="equipment-card-descr">
                                    <p>Ультразвуковий хірургічний ніж, який впливає тільки в точці прикладання і зберігає прилеглі клітини.</p>
                                </div>
                            </div>

                            <div class="equipment-card-addition">
                                <p>Операції проводить досвідчений офтальмохірург – 16 років стажу. Набряклість менше на 52 % у порівнянні з іншими клініками.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-section banner-section_bottom" id="banner-section-3">
                <div class="banner-section-bg">
                    <img src="/assets/images/services/plastychna/banner-section-3.jpg" alt="bg"/>
                </div>

                <div class="page-content">
                    <div class="banner-section-title">
                        <span>ЗАПИС НА ПЕРВИННУ КОНСУЛЬТАЦІЮ</span>
                    </div>

                    <div class="banner-section-subtitle">
                        <span>Отримайте розрахунок вартості операції</span>
                    </div>

                    <div class="wr-banner-section-button">
                        <button class="open-modal button-main button-main_orange">ЗАПИСАТИСЯ</button>
                    </div>
                </div>
            </div>
        </div>-->

        <div class="section-main">
            <div class="page-content">
                <div class="title-section">
                    <span>Відгуки клієнтів</span>
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
                       class="button-main button-main_blue button-more-recall">Більше відгуків</a>
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
                        <span>ГОТОВІ ВІДПОВІСТИ НА БУДЬ-ЯКІ ВАШІ ЗАПИТАННЯ І ПЕРЕТЕЛЕФОНУВАТИ ВАМ!</span>
                    </div>

                    <div class="banner-section-subtitle">
                        <span>Залиште заявку на безкоштовну консультацію менеджера.</span>
                    </div>

                    <div class="wr-banner-section-button">
                        <button class="open-modal-recall button-main button-main_orange">заявка на зворотній дзвінок</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
