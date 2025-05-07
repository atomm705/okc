<x-app-layout>
<div id="app" class="app">

    <section class="section swiper-container swiper-slider height-swipe"  data-swiper='{"autoplay":{"delay":5000},"effect":"fade"}'>
        <div class="swiper-wrapper text-center ">
            <div class="swiper-slide " id="page-loader" data-slide-bg="/images/1549d8b2f585416ee85313fc51e63ef3.webp">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption slider-fade">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 section-slider-custom first-section-position-mobil">
                                    <div class="inset-xl-right-80 text-lg-start  swiper-slider-content-mt">
                                        <h2>@lang('frontend/oklens.slider.slide_1.title')
                                        </h2>
                                        <h5 class="d-none d-lg-block mw-400">@lang('frontend/oklens.slider.slide_1.description')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="main.appointment {{ route('main.timetable') }}">@lang('frontend/oklens.slider.slide_1.link')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slider-fade height-swipe" data-slide-bg="/images/7479920ff89386ac92a9419f07da0308.webp">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption slider-fade">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 section-slider-custom to-front first-section-position-mobil">
                                    <div class="text-lg-start swiper-slider-content-mt">
                                        <h2>@lang('frontend/oklens.slider.slide_2.title')
                                        </h2>
                                        <h5 class="d-none d-lg-block mw-400">@lang('frontend/oklens.slider.slide_2.description')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">@lang('frontend/oklens.slider.slide_2.link')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slider-fade height-swipe"  data-slide-bg="/images/2ebbb981858861962de32ac1b146339d.webp">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption slider-fade">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 section-slider-custom first-section-position-mobil" >
                                    <div class="text-lg-start swiper-slider-content-mt">
                                        <h2>@lang('frontend/oklens.slider.slide_3.title')</h2>
                                        <h5 class="d-none d-lg-block mw-400">@lang('frontend/oklens.slider.slide_3.description')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">@lang('frontend/oklens.slider.slide_3.link')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slider-fade height-swipe"  data-slide-bg="/images/32cbee805c52b9a7e02675477669a4cf.webp">
                <div class="swiper-caption">
                    <div class="swiper-slide-caption slider-fade">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 section-slider-custom first-section-position-mobil">
                                    <div class="text-lg-start swiper-slider-content-mt">
                                        <h2>@lang('frontend/oklens.slider.slide_4.title')</h2>
                                        <h5 class="d-none d-lg-block mw-400">@lang('frontend/oklens.slider.slide_4.description')</h5><a class="btn btn-ellipse btn-white offset-top-24" href="make-an-appointment.html">@lang('frontend/oklens.slider.slide_4.link')</a>
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
    <!--Sheldue-->

    <section class="with-icon" style="transform: translateY(0px); transition: 0.3s; opacity: 1;">
        <div class="additional">
            <div class="icon"><img src="/images/2cde28769923fd45b1e2f262351c9039.webp"></div>
        </div> <!---->
        <div class="content"><h3>@lang('frontend/oklens.orthokeratology.title')</h3>
            <p class="p-mobil">@lang('frontend/oklens.orthokeratology.description')</p> <!----></div>
    </section>

    <div class="parallax-container"  data-parallax-img="/images/53c7040420ca6f48cc5827f9addb9656.webp">
        <div class="parallax-content   parallax-container-bg section-98 section-sm-110 context-dark">
            <div class="additional">
                <div class="icon"><img src="/images/77775b5b7c04a94448c250ef94a2eea1.webp"></div>


            </div>
            <div class="hr-container">
                <hr class="line-paralax">
            </div>

            <div class="content"><h3 class="text-center content-title-position">@lang('frontend/oklens.surgery.title')</h3>
                <p class="text-center p-mobil-2">@lang('frontend/oklens.surgery.description')</p> <!---->
            </div>
        </div>
    </div>
    <section class="children tiles section-padding parallax "
             style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content"><h3>@lang('frontend/oklens.child.title')</h3>
            <p class="content-textx-color p-mobil-2 ">@lang('frontend/oklens.child.description')
            </p>
            <div class="slot section-mobil">
                <div class="tile">
                    <div class="header">
                        <div class="icon"><img src="/images/31350162dbb169b44f63f1ef56575df7.webp"></div>
                    </div>
                    <div class="body">@lang('frontend/oklens.child.tiles.tile_1.text')</div>
                    <div class="footer">
                        <button class="button-ellipse button-preset-white button-large">@lang('frontend/oklens.child.tiles.tile_1.link')</button>
                    </div>
                </div>
                <div class="tile">
                    <div class="header">
                        <div class="icon"><img src="/images/logo_lense-1.png"></div>
                    </div>
                    <div class="body">@lang('frontend/oklens.child.tiles.tile_2.text')</div>
                    <div class="footer">
                        <button class="button-ellipse button-preset-white button-large">@lang('frontend/oklens.child.tiles.tile_2.link')</button>
                    </div>
                </div>
                <div class="tile">
                    <div class="header">
                        <div class="icon"><img src="/images/7f60fbbdf5685051501baa68dc0c95a0.webp"></div>
                    </div>
                    <div class="body">@lang('frontend/oklens.child.tiles.tile_3.text')</div>
                    <div class="footer">
                        <button class="button-ellipse button-preset-white button-large">@lang('frontend/oklens.child.tiles.tile_3.link')</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class=" parallax-container section-mb with-icon light title-preset-2 section-image parallax section-full-width"
             data-parallax-img="/images/14d38b954dd0885672e150bede8effc2.webp">
        <div class="additional">
            <div class="icon"><img src="/images/369e03686d6ccde0cf9a2518fc6f4084.webp"></div>
        </div>

        <div class="content"><h3>@lang('frontend/oklens.lenses.title')</h3> <!----> <!----></div>
    </section>
    <section class="list" style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content"><h3>@lang('frontend/oklens.advantages.title')</h3> <!---->
            <div class="slot">
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/519a7f6e898a7630fb08c8eecee2d18d.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.advantages.items.item_1.title')
                        <div class="description">@lang('frontend/oklens.advantages.items.item_1.description')
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/519a7f6e898a7630fb08c8eecee2d18d.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.advantages.items.item_2.title')
                        <div class="description">@lang('frontend/oklens.advantages.items.item_2.description')
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/519a7f6e898a7630fb08c8eecee2d18d.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.advantages.items.item_3.title')
                        <div class="description">@lang('frontend/oklens.advantages.items.item_3.description')
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/519a7f6e898a7630fb08c8eecee2d18d.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.advantages.items.item_4.title')
                        <div class="description">@lang('frontend/oklens.advantages.items.item_4.description')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="with-icon  parallax-container section-mb  light title-preset-2 section-image parallax section-full-width"
             data-parallax-img="/images/ca664ef53b472650a9bfbc6cee904a56.webp">
        <div class="additional">
            <div class="icon"><img src="/images/0236bcbafe0233f8a286f57e3e111862.webp"></div>
        </div>

        <div class="content"><h3>  @lang('frontend/oklens.myopia_farsightedness.title')</h3> <!----> <!----></div>
    </section>
    <section class="list" style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content"><h3>@lang('frontend/oklens.indication.title')</h3>
            <p>@lang('frontend/oklens.indication.description')</p>
            <div class="slot">
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/50daa468cc52463afcbf90d20f841f92.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.indication.items.item_1.title')
                        <div class="description">  @lang('frontend/oklens.indication.items.item_1.description')</div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/7f60fbbdf5685051501baa68dc0c95a0.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.indication.items.item_2.title')
                        <div class="description"> @lang('frontend/oklens.indication.items.item_2.description')
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/68e66c10e5ac8334b8931a91eff08fe0.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.indication.items.item_3.title')
                        <div class="description"> @lang('frontend/oklens.indication.items.item_3.description')
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="icon"><img src="/images/369e03686d6ccde0cf9a2518fc6f4084.webp"></div>
                    <div class="text">
                        @lang('frontend/oklens.indication.items.item_4.title')
                        <div class="description">@lang('frontend/oklens.indication.items.item_4.description')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="consultation  parallax-container  light title-preset-2 section-image parallax section-full-width"
             data-parallax-img="/images/284a6148157fc353c372115e895e1426.webp"><!---->

        <div class="content"><h3>@lang('frontend/oklens.consultation.title')</h3>
            <p>@lang('frontend/oklens.consultation.description')</p> <!---->
        </div>
    </section>
    <section class="glasses light parallax-container title-preset-2 section-image parallax section-full-width"
             data-parallax-img="/images/745dd5ceb069591723c71d58437c508c.webp"><!---->

        <div class="content"><h3>@lang('frontend/oklens.discomfort.title')</h3>
            <!----> <!----></div>
    </section>
    <section class="timeline section-padding" style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!---->
        <!---->
        <div class="content section-mobil"><!----> <!---->
            <div class="slot"><h3>@lang('frontend/oklens.lenses_before_sleep.title')</h3>
                <div class="list">
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_1')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_2')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_3')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_4')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_5')</div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_6')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_7')</div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_8')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_before_sleep.items.item_9')
                    </div>
                    <div class="item">
                        @lang('frontend/oklens.lenses_before_sleep.items.item_10')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section  style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content section-title"><h3>@lang('frontend/oklens.contact_with_specialist_up_lens.title')</h3> <!---->
            <!----></div>
    </section>
    <section reverse="true" class="timeline section-padding "
             style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content section-mobil section-pt"><!----> <!---->
            <div class="slot"><h3 >@lang('frontend/oklens.lenses_after_sleep.title')</h3>
                <div class="list">
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_1')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_2')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_3')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_4')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_5')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_6')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_7')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_8')
                    </div>
                    <div class="item">@lang('frontend/oklens.lenses_after_sleep.items.item_9')</div>
                </div>
            </div>
        </div>
    </section>
    <section style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content section-title"><h3>@lang('frontend/oklens.contact_with_specialist_down_lens.title')</h3> <!---->
            <!----></div>
    </section>
    <section class="section-full-width section-flat-width section-flat-height"
             style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content"><!----> <!---->
            <div class="slot">
                <iframe width="100%" height="600px" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/c_Br0XtxKVI"></iframe>
            </div>
        </div>
    </section>
    <section class="section-full-width" style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----><!---->
        <div class="content section-title"><h3>@lang('frontend/oklens.contact_us.title')</h3> <!---->
            <div class="slot"><a href="/contacts" class="button button-ellipse button-preset-primary button-large">@lang('frontend/oklens.contact_us.link')</a></div>
        </div>
    </section>
    <section class="section-map section-full-width section-flat-width section-flat-height"
             style="transform: translateY(0px); transition: 0.3s; opacity: 1;"><!----> <!---->
        <div class="content"><!----> <!---->
            <div class="slot">
                <iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="allowfullscreen" width="100%" height="400px" frameborder="0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d453.2756506946719!2d36.245743173268586!3d50.00921300450467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0dbc8603d19%3A0x344aa3d3b44d1308!2z0YPQuy4g0JzQsNGP0LrQvtCy0YHQutC-0LPQviwgMjQsINCl0LDRgNGM0LrQvtCyLCDQpdCw0YDRjNC60L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2MTAwMA!5e0!3m2!1sru!2sua!4v1577399748711!5m2!1sru!2sua"></iframe>
            </div>
        </div>
    </section>



</div>


</x-app-layout>
