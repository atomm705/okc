<x-app-layout>



    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark slider-page" style="background-image: url({{ asset('images/bg-6.webp ') }}); " data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Services</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">Services</li>
            </ul>
        </div>
    </section>
    <section class="section-lg section bg-default">
        <div class="container">
            <div class="row isotope-wrap">
                <div class="col-lg-3">
                    <div class="isotope-filters isotope-filters-vertical">
                        <h4 class="text-uppercase isotope-filters-title offset-top-34"></h4>
                        <ul class="list-inline list-inline-sm">
                            <li class="d-xl-none">
                                <p>Choose your category:</p>
                            </li>
                            <li class="section-relative">
                                <button class="isotope-filters-toggle btn btn-sm btn-default" data-custom-toggle="#isotope-1" data-custom-toggle-disable-on-blur="true" data-custom-toggle-hide-on-blur="true">Filter<span class="caret"></span></button>
                                <ul class="list-sm-inline isotope-filters-list" id="isotope-1">
                                    <li><a class="isotope-filter active" data-isotope-filter="Diagnostic Imaging" href="#">Diagnostic Imaging</a></li>
                                    <li><a class="isotope-filter" data-isotope-filter="Ultrasound diagnostics" href="#">Ultrasound diagnostics</a></li>
                                    <li><a class="isotope-filter" data-isotope-filter="X-ray diagnostics" href="#">X-ray diagnostics</a></li>
                                    <li><a class="isotope-filter" data-isotope-filter="Pediatrics" href="#">Pediatrics</a></li>
                                    <li><a class="isotope-filter" data-isotope-filter="Laboratory Services" href="#">Laboratory Services</a></li>
                                    <li><a class="isotope-filter" data-isotope-filter="Pregnancy Services" href="#">Pregnancy Services</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 offset-lg-top-0 offset-top-34">
                    <div class="row text-md-start isotope isotope-style-1" data-isotope-layout="fitRows" data-column-class=".col-1" data-lightgallery="group" data-lg-animation="lg-slide-circular" data-isotope-group="gallery">
                        <div class="col-1 isotope-item isotope-sizer"></div>
                        <div class="col-lg-12 isotope-item" data-filter="Diagnostic Imaging">
                            <h3>Diagnostic Imaging</h3>
                            <div class="offset-top-60"><img class="img-responsive" src="{{ asset('images/services-06-870x440.jpg ') }}" width="870" height="440" alt="">
                                <div class="offset-top-30">
                                    <p>Phasellus rhoncus felis ut justo laoreet, ac suscipit purus sagittis. Nulla volutpat, leo nec tempor tincidunt, metus sem sodales massa, nec ultricies dui justo a elit. Sed libero risus, vestibulum in purus ac, viverra sollicitudin massa. Sed tristique est quis urna sodales congue. In sit amet pretium erat, et suscipit mauris. Morbi nec tempor risus. Nullam tempus elementum lacus, id tincidunt dolor blandit non. Praesent bibendum ac diam varius consequat.</p>
                                    <ul class="list-marked list">
                                        <li>Mauris sem</li>
                                        <li>Viverra nisl</li>
                                        <li>Condimentum urna</li>
                                        <li>Phasellus id</li>
                                        <li>Viverra erat</li>
                                    </ul>
                                </div>
                                <div class="offset-top-30"><a class="btn btn-ellipse btn-primary" href="make-an-appointment.html">Make an appointment</a></div>
                            </div>
                        </div>
                        <div class="col-lg-12 isotope-item" data-filter="Ultrasound diagnostics">
                            <h3>Ultrasound Diagnostics</h3>
                            <div class="offset-top-60"><img class="img-responsive" src="{{ asset('images/services-05-870x440.jpg ') }}" width="870" height="440" alt="">
                                <div class="offset-top-30">
                                    <p>Vivamus sed laoreet neque. Suspendisse vel eros nibh. Suspendisse potenti. Sed non viverra orci, eu volutpat diam.</p>
                                    <p>Fusce consequat pretium augue, scelerisque maximus eros commodo vel. Mauris vitae nisl quis odio semper rutrum vel quis est. Curabitur ac luctus metus.</p>
                                    <p>Cras fermentum justo massa, at rhoncus risus vulputate ut. Quisque molestie varius lacus.</p>
                                    <p>Donec mattis nisi nisi, a aliquam mi pulvinar sit amet. Mauris at scelerisque lectus. Sed tincidunt malesuada vestibulum. Proin ante diam, ultrices eu.</p>
                                </div>
                                <div class="offset-top-30"><a class="btn btn-ellipse btn-primary" href="make-an-appointment.html">Make an appointment</a></div>
                            </div>
                        </div>
                        <div class="col-lg-12 isotope-item" data-filter="X-ray diagnostics">
                            <h3>X-ray diagnostics</h3>
                            <div class="offset-top-60"><img class="img-responsive" src="{{ asset('images/services-04-870x440.jpg ') }}" width="870" height="440" alt="">
                                <div class="offset-top-30">
                                    <p>Aenean ac ex nunc. Phasellus tincidunt tempus enim. Pellentesque habitant morbi tristique senectus et.</p>
                                    <p>Sed elementum volutpat libero at pellentesque. Vestibulum interdum, dolor eget tristique dignissim.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 isotope-item" data-filter="Pediatrics">
                            <h3>Pediatrics</h3>
                            <div class="offset-top-60"><img class="img-responsive" src="{{ asset('images/services-03-870x440.jpg ') }}" width="870" height="440" alt="">
                                <div class="offset-top-30">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit:</p>
                                    <ul class="list-marked list">
                                        <li>Etiam rhoncus</li>
                                        <li>Pellentesque ve</li>
                                        <li>Praesent leo es</li>
                                        <li>Tincidunt, metus sem</li>
                                        <li>Donec maximus</li>
                                        <li>Velit vel dui</li>
                                        <li>Nulla venenatis</li>
                                        <li>Libero ligula,</li>
                                        <li>Convallis pretium</li>
                                    </ul>
                                </div>
                                <div class="offset-top-30"><a class="btn btn-ellipse btn-primary" href="make-an-appointment.html">Make an appointment</a></div>
                            </div>
                        </div>
                        <div class="col-lg-12 isotope-item" data-filter="Laboratory Services">
                            <h3>Laboratory Services</h3>
                            <div class="offset-top-60"><img class="img-responsive" src="{{ asset('images/services-02-870x440.jpg ') }}" width="870" height="440" alt="">
                                <div class="offset-top-30">
                                    <p>Aenean ac ex nunc. Phasellus tincidunt tempus enim. Sed elementum volutpat libero at pellentesque. Vestibulum interdum, dolor eget tristique dignissim, augue diam viverra ex, non malesuada ipsum mauris volutpat nibh.</p>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam efficitur accumsan condimentum. Suspendisse non leo ut nulla maximus blandit at ac ante. Donec volutpat sit amet elit non ultricies.</p>
                                    <p>Nulla a imperdiet odio. Duis interdum eget dui id elementum. Duis quis ornare nunc. Integer at volutpat augue. Donec ornare molestie elit eget imperdiet. Mauris vel felis ac neque egestas condimentum at consectetur turpis.</p>
                                </div>
                                <div class="offset-top-30"><a class="btn btn-ellipse btn-primary" href="make-an-appointment.html">Make an appointment</a></div>
                            </div>
                        </div>
                        <div class="col-lg-12 isotope-item" data-filter="Pregnancy Services">
                            <h3>Pregnancy Services</h3>
                            <div class="offset-top-60"><img class="img-responsive" src="{{ asset('images/services-01-870x440.jpg ') }}" width="870" height="440" alt="">
                                <div class="offset-top-30">
                                    <p>Etiam efficitur accumsan condimentum. Suspendisse non leo ut nulla maximus blandit at ac ante. Donec volutpat sit amet elit non ultricies. Nulla a imperdiet odio.</p>
                                    <p>Donec ornare molestie elit eget imperdiet. Vivamus sed laoreet neque.<a href="make-an-appointment.html">tincidunt sit amet tellus</a> mauris vitae nisl quis odio semper rutrum vel quis est. Curabitur ac.</p>
                                </div>
                            </div>
                            <div class="offset-top-66">
                                <h3>Team of Doctors</h3>
                            </div>
                            <div class="offset-top-60">
                                <div class="row text-sm-start">
                                    <div class="col-lg-5 inset-lg-right-30">
                                        <div class="unit flex-xxl-row flex-xl-row flex-lg-row flex-md-row flex-sm-row unit-spacing-sm">
                                            <div class="unit-left"><img class="img-responsive" src=" {{ asset('images/user-scott-riley-110x110.jpg') }}" width="110" height="110" alt=""></div>
                                            <div class="unit-body">
                                                <h5 class="font-weight-bold text-primary">Dr. Scott Riley</h5>
                                                <p class="font-italic offset-top-0">CMO, Pathologist</p>
                                                <div class="d-inline-block">
                                                    <div class="p unit unit-spacing-xxs flex-row">
                                                        <div class="unit-left"><span class="icon icon-xs mdi mdi-phone text-primary"></span></div>
                                                        <div class="unit-body"><a class="h6" href="tel:#">1-800-1234-567</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Cras fermentum justo massa, at rhoncus risus vulputate ut. Quisque molestie varius lacus, eu feugiat diam ultrices at.</p><a class="btn btn-primary btn-ellipse" href="team-member.html">Learn more</a>
                                    </div>
                                    <div class="col-lg-5 offset-top-41 offset-md-top-0 inset-lg-right-30">
                                        <div class="unit flex-xxl-row flex-xl-row flex-lg-row flex-md-row flex-sm-row unit-spacing-sm">
                                            <div class="unit-left"><img class="img-responsive" src="{{ asset('images/user-johnny-fowler-110x110.jpg') }}" width="110" height="110" alt=""></div>
                                            <div class="unit-body">
                                                <h5 class="font-weight-bold text-primary">Dr. Eric Snyder</h5>
                                                <p class="font-italic offset-top-0">MRI Technologist</p>
                                                <div class="d-inline-block">
                                                    <div class="p unit unit-spacing-xxs flex-row">
                                                        <div class="unit-left"><span class="icon icon-xs mdi mdi-phone text-primary"></span></div>
                                                        <div class="unit-body"><a class="h6" href="tel:#">1-800-1234-567</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Donec mattis nisi nisi, a aliquam mi pulvinar sit amet. Mauris at scelerisque lectus. Sed tincidunt malesuada vestibulum.</p><a class="btn btn-primary btn-ellipse" href="team-member.html">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Footer-->







</x-app-layout>>
