<footer class="section-relative section-top-66 section-bottom-34 page-footer bg-accent context-dark footer-classic">
    <div class="container">
        <div class="row justify-content-md-center text-xl-start">
            <div class="col-md-8 col-lg-12">
                <div class="row justify-content-sm-center row-40">
                    <div class="col-sm-10 col-lg-4 text-start order-lg-3 inset-lg-left-50">
                        <h6>@lang('footer.newsletter.title')</h6>
                        <hr class="text-subline">
                        <p class="text-white-70">@lang('footer.newsletter.description')</p>
                    </div>
                    <div class="col-sm-10 text-sm-start col-lg-4 order-lg-2">
                        <h6>@lang('footer.contacts.title')</h6>
                        <hr class="text-subline">
                        <div class="text-center text-xl-start">
                            <address class="contact-info d-md-inline-block text-start">
                                <div class="p unit unit-spacing-xxs flex-row">
                                    <div class="unit-left"><span class="icon icon-xxs mdi mdi-phone text-white"></span></div>
                                    <div class="unit-body"> <a class="text-white-70" href="tel:#"> (057) 761-61-31</a> <span class="text-white-70">, </span> <a class="text-white-70" href="tel:#"> (093) 761-61-31</a> <span class="text-white-70">, </span> <a class="text-white-70" href="tel:#"> (099) 548-44-85</a> <span class="text-white-70">, </span> <a class="text-white-70" href="tel:#"> (097) 318-67-58</a> </div>
                                </div>
                                <div class="p unit flex-row unit-spacing-xxs">
                                    <div class="unit-left"><span class="icon icon-xxs mdi mdi-map-marker text-white"></span></div>
                                    <div class="unit-body"><a class="text-white-70" href="#">@lang('footer.contacts.address')</a></div>
                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-10 col-lg-4 order-lg-1 text-center text-lg-start">
                        <!--Brand--><a class="brand" href="{{ route('main.index') }}"><img class="brand-logo-dark" src="{{ asset('images/logo-brand.webp') }}"  alt="" width="77" height="26"/><img class="brand-logo-light" src=" {{ asset('images/logo-brand.webp') }}" alt="" width="77" height="26"/></a>
                        <div class="offset-top-30">
                            <ul class="list-inline">
                                <li><a class="icon fa fa-facebook icon-xxs icon-circle icon-white" href="#"></a></li>
                                <li><a class="icon fa fa-twitter icon-xxs icon-circle icon-white" href="#"></a></li>
                                <li><a class="icon fa fa-google-plus icon-xxs icon-circle icon-white" href="#"></a></li>
                                <li><a class="icon fa fa-rss icon-xxs icon-circle icon-white" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal appointment-modal" style="" id="modal">
    <div class="content" style="">
        <h4>{{ __('global.Registration online') }}</h4>
        <form action="/appointment" method="POST" class="accept-preset-blue">
            <div class="error" style="height: 0px;">
                <div class="text">&nbsp;</div>
            </div>
            @csrf
            <div class="error" style="height: 0px;">
                <div class="text">&nbsp;</div>
            </div>
            <div class="form-group required">
                <label for="appointment-phone">{{ __('global.Your phone number') }}</label>
                <input type="text" name="phone" id="appointment-phone">
                <div class="description">{{ __('global.Format: +380501023212') }}</div>
                <div class="error" style="height: 0px;">
                    <div class="text">
                    </div>
                </div>
            </div>
            <div class="form-group required">
                <label for="appointment-name">{{ __('global.your name') }}</label>
                <input type="text" name="name" id="appointment-name">
                <div class="error" style="height: 0px;">
                    <div class="text">&nbsp;</div>
                </div>
            </div>
            <div class="personal-agreement">
                <span class="mdi mdi-shield"></span>
                <div class="value">{{ __('global.appointment_text') }}</div>
            </div>
            <div class="buttons">
                <button type="button" class="button-preset-cancel">{{ __('global.cancel') }}</button>
                <button class="button-preset-submit" type="submit">{{ __('global.send') }}</button></div>
        </form>
    </div>
</div>
<div class="page-sticky-menu-component"><!---->
    <div class="container appointment-up">
        <div class="appointment">
            <button class="online" type="button" data-toggle="modal" data-target="#modal">{{ __('global.sticky_menu.appointment') }}</button>
            <a href="#tlcallback" class="button recall mt-0">
                <i class="fa fa-phone" style="display: inline-block !important;"></i>
            </a>
        </div>
    </div>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('blepharoplastika-js/simpleParallax.js') }}" defer></script>
<script src="{{ asset('blepharoplastika-js/app-b.js') }}" defer></script>
<script src="{{ asset('js/custom.js') }}"></script>
