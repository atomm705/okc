<x-app-layout>
    <section class="breadcrumbs-custom bg-image context-dark slider-page"
             style="background-image: url({{ asset('images/bg-6.webp') }}); "
             data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">@lang('global.pages.testimonials')</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li><a href="{{ route('main.testimonials') }}"> @lang('global.pages.testimonials')</a></li>

            </ul>
        </div>
    </section>

    <section class="section-lg section bg-default">
        <div class="slider-video-container">
            <h3 class="text-center">@lang('frontend/testimonials.video.title')</h3>
            <div class="offset-top-66">
                <div class="owl-carousel-middle">
                    <!-- owl carousel-->
                    <div class="owl-carousel owl-2 owl-carousel-default owl-carousel-class-light owl-carousel-middle slide-video"
                         data-loop="false" data-items="1" data-sm-items="2" data-dots="true" data-mouse-drag="false"
                         data-lg-items="5"
                         data-owl="{&quot;dots&quot;:true,&quot;nav&quot;:false,&quot;autoplayTimeout&quot;:3500}">
                        <a
                            class="text-center" href="https://youtu.be/EJGBeL5vNng"><img
                                src="https://i.ytimg.com/vi/EJGBeL5vNng/hqdefault.jpg"
                                alt="" width="365" height="274" />
                        </a>
                        <a
                            href="https://youtu.be/tCqJfCOzP3E"><img
                                class="d-inline-block "
                                src="https://i.ytimg.com/vi/tCqJfCOzP3E/hqdefault.jpg"
                                alt="" width="365" height="274"/>
                        </a>
                        <a class="text-center" href="https://youtu.be/FuRRxFJXjMA"><img
                                class="d-inline-block "
                                src="https://i.ytimg.com/vi/FuRRxFJXjMA/hqdefault.jpg"
                                alt="" width="365" height="274"/>
                        </a>
                        <a class="text-center" href="https://youtu.be/r9p-qcjo4c8"><img
                                class="d-inline-block "
                                src="https://i.ytimg.com/vi/r9p-qcjo4c8/hqdefault.jpg"
                                alt="" width="365" height="274"/></a>
                        <a class="text-center" href="https://youtu.be/vM-KZv-sFls"><img
                                class="d-inline-block "
                                src="https://i.ytimg.com/vi/vM-KZv-sFls/hqdefault.jpg"
                                alt="" width="365" height="274"/></a>
                        <a class="text-center" href="https://youtu.be/L6KlYL27kNo"><img
                                class="d-inline-block "
                                src="https://i.ytimg.com/vi/L6KlYL27kNo/hqdefault.jpg"
                                alt="" width="365" height="274"/></a>
                        <a class="text-center" href="https://youtu.be/BFTGttBfehA"><img
                                class="d-inline-block "
                                src="https://i.ytimg.com/vi/BFTGttBfehA/hqdefault.jpg"
                                alt="" width="365" height="274"/></a>
                        <a class="text-center" href="https://youtu.be/J7RxOhMSFKo"><img
                                class="d-inline-block "
                                src="https://i.ytimg.com/vi/J7RxOhMSFKo/hqdefault.jpg"
                                alt="" width="365" height="274"/></a>
                        <a class="text-center" href="https://youtu.be/exE6RxpcXsA"><img
                                class="d-inline-block "
                                src="https://i.ytimg.com/vi/exE6RxpcXsA/hqdefault.jpg"
                                alt="" width="365" height="274"/></a>
                        <a class="text-center" href="https://youtu.be/HYKcQcdxDxw"><img
                                class="d-inline-block "
                                src="https://i.ytimg.com/vi/HYKcQcdxDxw/hqdefault.jpg"
                                alt="" width="365" height="274"/>
                        </a>
                        <a class="text-center" href="https://youtu.be/_6iFnaOe03k"><img
                                class="d-inline-block "
                                src=" https://i.ytimg.com/vi/_6iFnaOe03k/hqdefault.jpg"
                                alt="" width="365" height="274"/>
                        </a>
                        <a class="text-center" href="https://youtu.be/GuBJvElbDyg"><img
                                class="d-inline-block "
                                src=" https://i.ytimg.com/vi/GuBJvElbDyg/hqdefault.jpg"
                                alt="" width="365" height="274"/>
                        </a>
                        <a class="text-center" href="https://youtu.be/fVUt3viHT-8"><img
                                class="d-inline-block "
                                src="https://i.ytimg.com/vi/fVUt3viHT-8/hqdefault.jpg"
                                alt="" width="365" height="274"/>
                        </a>
                        <a class="text-center" href="https://youtu.be/yPYtDKQjmdQ"><img
                                class="d-inline-block "
                                src="https://i.ytimg.com/vi/yPYtDKQjmdQ/hqdefault.jpg"
                                alt="" width="365" height="274"/>
                        </a>
                        <a class="text-center" href=" https://youtu.be/FhKQ9ZPc6Ys"><img
                                class="d-inline-block "
                                src=" https://i.ytimg.com/vi/FhKQ9ZPc6Ys/hqdefault.jpg"
                                alt="" width="365" height="274"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-lg bg-default-liac section">
        <div class="container">
            <h3 class="text-center">@lang('frontend/testimonials.title')</h3>
            <div class="offset-top-66">
                <div class="owl-carousel owl-carousel-default owl-carousel-class-light" data-loop="false" data-items="1"
                     data-dots="true" data-mouse-drag="false" data-lg-items="2" data-nav="false"
                     data-owl="{&quot;dots&quot;:true,&quot;nav&quot;:false,&quot;autoplayTimeout&quot;:3500}">
                    <div class="item">
                        <blockquote class="quote quote-classic">
                            <div class="quote-body">
                                <p class="font-italic text-gray-dark">
                                    <q class="gray testimitionals-size">
                                        Спасибо ОГРОМНОЕ - Николаю Николаевичу Ковшарь, за профессионализм и
                                        человеческое
                                        отношение, а также: его ассистентам и другим сотрудникам медцентра "Докарт"!!!
                                        Впечатление, от посещения медцентра,- самые положительные! Все на европейском
                                        уровне:
                                        начиная от порога-входа, сотрудника безопасности, ресепшен и заканчивая -
                                        санузлом;
                                        везде - уют, чистота и комфорт!!! Низкий поклон, всем - Вам!!!
                                    </q>

                                </p>
                                <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                    <div class="unit-left unit-item-narrow"><!--<img class="rounded-circle quote-img"
                                                                                 width="60" height="60"
                                                                                 src=" {{ asset('images/users/user-betty-wade-60x60.jpg') }}"
                                                                                 alt=""/>--></div>
                                    <div class="unit-body unit-item-wide">
                                        <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                            <cite class="text-normal testimitionals-size"> Владимир</cite>
                                        </h5>
                                        <p class="quote-desc text-capitalize text-gray font-italic">Пацієнт</p>
                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <div class="item">
                        <blockquote class="quote quote-classic">
                            <div class="quote-body">
                                <p class="font-italic text-gray-dark">
                                    <q class="gray testimitionals-size">
                                        Добрий день)))
                                        Хочу подякувати персоналу клініки Докарт за уважне, чуйне ставлення саме до моєї
                                        тітки
                                        Анні Федорівні Паршиної)
                                        Слова подяки докторам Ковшар Миколі Миколайовичу,Симонову Максиму Євгеновичу,а
                                        також
                                        милим дівчаткам на рецепшені!-Ганна Федорівна почувається чудово-нічого в очах
                                        їй не
                                        заважає)))
                                        Бажаємо вам Здоров'я та процвітання)
                                    </q>
                                </p>
                                <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                    <div class="unit-left unit-item-narrow"><!--<img class="rounded-circle quote-img"
                                                                                 width="60" height="60"
                                                                                 src="{{ asset('images/users/user-betty-wade-60x60.jpg') }} "
                                                                                 alt=""/>--></div>
                                    <div class="unit-body unit-item-wide">
                                        <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                            <cite class="text-normal testimitionals-size">Олена</cite>
                                        </h5>
                                        <p class="quote-desc text-capitalize text-gray font-italic">Пацієнт</p>
                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <div class="item">
                        <blockquote class="quote quote-classic">
                            <div class="quote-body">
                                <p class="font-italic text-gray-dark">
                                    <q class="gray testimitionals-size">
                                        Це найкраща та найсучасніша клініка у якій я був. Був приємно вражений
                                        кваліфікацією та
                                        чуйністю персоналу.
                                        Зробив корекцію зору,оперував Армен Тарасович, я щиро вдячний за якість
                                        виконаної
                                        роботи.
                                        Також хочу висловити подяку усім іншим працівникам,що супроводжували на усіх до
                                        і
                                        післяопераційних етапах ,ви найкращі!;)
                                    </q>
                                </p>
                                <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                    <div class="unit-left unit-item-narrow"><!--<img class="rounded-circle quote-img"
                                                                                 width="60" height="60"
                                                                                 src="{{ asset('images/users/user-betty-wade-60x60.jpg') }}"
                                                                                 alt=""/>--></div>
                                    <div class="unit-body unit-item-wide">
                                        <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                            <cite class="text-normal testimitionals-size"> Ілля</cite>
                                        </h5>
                                        <p class="quote-desc text-capitalize text-gray font-italic">Пацієнт</p>
                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <div class="item">
                        <blockquote class="quote quote-classic">
                            <div class="quote-body">
                                <p class="font-italic text-gray-dark">
                                    <q class="gray testimitionals-size">
                                        Добрый день! Спасибо большое Армену Тарасовичу и всему коллективу ОК-центр за
                                        прекрасный
                                        настрой перед лазерной коррекцией :)
                                        Я ещё не очень чётко вижу вдаль, но мне уже легче смотреть без очков и линз
                                        вблизи, Вы
                                        мне не только улучшили зрение, но и сделали счастливее и увеличили любовь к
                                        жизни,
                                        спасибо большое!! 💗
                                        Мирного неба Вам і Слава Україні! 🇺🇦
                                    </q>
                                </p>
                                <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                    <div class="unit-left unit-item-narrow"><!--<img class="rounded-circle quote-img"
                                                                                 width="60" height="60"
                                                                                 src="{{ asset('images/users/user-betty-wade-60x60.jpg') }}"
                                                                                 alt=""/>--></div>
                                    <div class="unit-body unit-item-wide">
                                        <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                            <cite class="text-normal testimitionals-size">Дарья</cite>
                                        </h5>
                                        <p class="quote-desc text-capitalize text-gray font-italic">Пацієнт</p>
                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                <!--<div class="item">
                    <blockquote class="quote quote-classic">
                        <div class="quote-body">
                            <p class="font-italic text-gray-dark">
                                <q>
                                    Всем искренне рекомендую офтальмолога Олейник Татьяну Васильевну!
                                    Человек, который несёт в себе Знания, Свет, Позитив, Добро. Я в восторге! Таких людей
                                    реально мало на планете 🙂

                                    Для меня подбор очков это всегда мука, т.к. большая степень астигматизма, фокус зрения
                                    постоянно меняется. Ранее, чтобы определить необходимые диоптрии требовалось до трёх
                                    часов времени...

                                    С Татьяной Васильевной всё прошло на одном дыхании. За 15 минут я получила точный рецепт
                                    очков, в которых мои глаза чувствуют себя комфортно.

                                    Спасибо Вам, Олейник Татьяна Васильевна! Здоровья Вам и процветания!

                                    С уважением, Мария
                                </q>
                            </p>
                            <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="60" height="60" src="{{ asset('images/users/user-betty-wade-60x60.jpg') }}" alt=""/></div>
                                <div class="unit-body unit-item-wide">
                                    <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                        <cite class="text-normal">Мария</cite>
                                    </h5>
                                    <p class="quote-desc text-capitalize text-gray font-italic">Пацієнт</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>-->
                    <div class="item">
                        <blockquote class="quote quote-classic">
                            <div class="quote-body">
                                <p class="font-italic text-gray-dark">
                                    <q class="gray testimitionals-size">
                                        Спасибо за сервис и за процедуру которую вчера прошёл в клинике !
                                        Сервис огонь 🔥 чисто , девочки красивые и приветливые , мед сестрички профи и
                                        тоже
                                        красивые ) доктор молодец профи и с чувством юмора Николай Николаевич ! Приятно
                                        было все
                                        пройти и осталось самые лучшие впечатления ! Спасибо и уверен что с таким
                                        подходом это
                                        будет номер один в Харькове ! Молодцы 👏
                                    </q>
                                </p>
                                <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                    <div class="unit-left unit-item-narrow"><!--<img class="rounded-circle quote-img"
                                                                                 width="60" height="60"
                                                                                 src="{{ asset('images/users/user-betty-wade-60x60.jpg') }}"
                                                                                 alt=""/>--></div>
                                    <div class="unit-body unit-item-wide">
                                        <h5 class="quote-author text-capitalize font-weight-bold text-primary">
                                            <cite class="text-normal testimitionals-size"> Денис Портер</cite>
                                        </h5>
                                        <p class="quote-desc text-capitalize text-gray font-italic">Пацієнт</p>
                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
