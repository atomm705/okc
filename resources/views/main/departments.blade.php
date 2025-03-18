<x-app-layout>

        <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{ asset('images/background-breadcrumbs-01-1920x345.jpg') }}); " data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Departments</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">Home</a></li>
                <li class="active">Departments</li>
            </ul>
        </div>
    </section>
        <!-- Page Content-->
        <section class="section section-lg p-md-0">
            <div class="container">
                <div class="row justify-content-sm-center justify-content-md-start">
                    <div class="col-sm-10 col-md-6 section-image-aside section-image-aside-right text-center text-md-start">
                        <div class="section-image-aside-img d-none d-md-block" style="background-image: url( {{ asset('images/departments-01-960-611.jpg') }})"></div>
                        <div class="section-image-aside-body section-sm-bottom-66 section-sm-top-110 inset-lg-right-93">
                            <h3>Clinical Laboratory</h3>
                            <div class="offset-top-34 offset-md-top-60">
                                <p>Sed rutrum, mi sit amet fringilla feugiat, nunc magna ullamcorper lectus, ac congue nisi est ac orci.</p>
                                <p>Curabitur ultrices, nunc eu maximus tristique, purus ex ullamcorper lacus, vel scelerisque lectus libero sit amet odio. Duis vel enim in erat vulputate tincidunt eu sed nisi. Aenean vehicula, dui at convallis laoreet.</p>
                            </div>
                            <div class="offset-top-30"><a class="btn btn-ellipse btn-primary" href="#">Learn more</a></div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-sm-center justify-content-md-end offset-top-0">
                    <div class="col-sm-10 col-md-6 section-image-aside section-image-aside-left text-center text-md-start">
                        <div class="section-image-aside-img d-none d-md-block" style="background-image: url( {{ asset('images/departments-02-960-611.jpg') }})"></div>
                        <div class="section-image-aside-body offset-top-66 offset-sm-top-0 section-sm-bottom-66 section-sm-top-110 inset-lg-left-93">
                            <h3>Best Equipment</h3>
                            <div class="offset-top-34 offset-md-top-60">
                                <p>Aenean ut felis risus. Suspendisse sed eros urna. Cras euismod vel pretium. Phasellus tincidunt sit amet tellus eu gravida. Cras tempor, justo non lacinia laoreet, lorem orci facilisis sem, ac tristique eros metus sit amet nulla. Praesent ultricies nunc neque, quis fermentum velit hendrerit id.</p>
                            </div>
                            <div class="offset-top-30"><a class="btn btn-ellipse btn-primary" href="#">Learn more</a></div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-sm-center justify-content-md-start offset-top-0">
                    <div class="col-sm-10 col-md-6 section-image-aside section-image-aside-right text-center text-md-start">
                        <div class="section-image-aside-img d-none d-md-block" style="background-image: url( {{ asset('images/departments-03-960-611.jpg') }})"></div>
                        <div class="section-image-aside-body offset-top-66 offset-sm-top-0 section-sm-bottom-66 section-sm-top-110 inset-lg-right-93">
                            <h3>Nuclear Medicine &<br class="d-none d-lg-block"> Radiology
                            </h3>
                            <div class="offset-top-34 offset-md-top-60">
                                <p>Sed rutrum, mi sit amet fringilla feugiat, nunc magna ullamcorper lectus, ac congue nisi est ac orci. Integer posuere scelerisque efficitur. Curabitur ultrices, nunc eu maximus tristique.</p>
                            </div>
                            <div class="offset-top-30"><a class="btn btn-ellipse btn-primary" href="#">Learn more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <div class="snackbars" id="form-output-global"></div>

    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</x-app-layout>
