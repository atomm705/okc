<x-app-layout>
    <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{ asset('images/background-breadcrumbs-01-1920x345.jpg') }});"  data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Prices</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">Prices</li>
            </ul>
        </div>
    </section>


    <section class="section-lg section bg-default">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-md-8">
                    @php
                        $activeTab = isset($tab) ? $tab : 'x-ray';
                    @endphp

                    <div class="offset-sm-top-60 text-start">
                        <div class="tabs-custom tabs-vertical tabs-corporate" id="tabs-2">

                            <ul class="nav nav-tabs">
                                @foreach ($tabs as $slug => $name)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link {{ $activeTab === $slug ? 'active' : '' }}"
                                           href="{{ route('prices.' . $slug, ['locale' => app()->getLocale()]) }}">
                                            {{ __($name) }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>


                            <div class="tab-content">
                                @foreach ($tabs as $slug => $name)
                                    <div class="tab-pane fade {{ $activeTab === $slug ? 'show active' : '' }}" id="tabs-{{ $slug }}">
                                        <h3 class="text-start">{{ $name }}</h3>
                                        <table class="table table-custom table-fixed table-hover-rows table-3-col" data-responsive="true">
                                            <tr>
                                                <th>Service</th>
                                                <th>Time (min)</th>
                                                <th>Price, $</th>
                                            </tr>

                                            @foreach ($dataForTab as $data)
                                                @if($slug == $tab)
                                                    <tr>
                                                        <td>{{ $data['service'] }}</td>
                                                        <td>{{ $data['time'] }}</td>
                                                        <td>{{ $data['price'] }}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </table>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Patient Pricing Information-->
    <!--<section class="section-lg bg-default">
        <div class="container text-md-start">
            <div class="row justify-content-sm-center justify-content-lg-start">
                <div class="col-md-10 col-lg-8">
                    <h3>Patient Pricing Information</h3>
                    <div class="offset-top-34 offset-sm-top-60">
                        <p>Aenean ac ex nunc. Phasellus tincidunt tempus enim. Sed elementum volutpat libero at pellentesque. Vestibulum interdum, dolor eget tristique dignissim, augue diam viverra ex, non malesuada ipsum mauris volutpat nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam efficitur accumsan condimentum. Suspendisse non leo ut nulla maximus blandit at ac ante. Donec volutpat sit amet elit non ultricies. Nulla a imperdiet odio. Duis interdum eget dui id elementum. Duis quis ornare nunc. Integer at volutpat augue.</p>
                    </div>
                    <div class="offset-top-60">
                        <h6>Regular Diagnostic and Health Care Services — Per Day Charges</h6>
                        <div class="offset-top-10">
                            <hr class="text-subline">
                        </div>
                        <div class="offset-top-10">-->
                            <!-- Classic Responsive Table-->
                           <!-- <table class="table table-custom table-fixed table-hover-rows table-3-col" data-responsive="true">
                                <tr>
                                    <th>#</th>
                                    <th>Service</th>
                                    <th>Price, $</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>X-ray</td>
                                    <td>6,160.00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Magnetic Resonance Imaging</td>
                                    <td>2,575.00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Computer Tomography</td>
                                    <td>2,120.00</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Laboratory Tests</td>
                                    <td>4,765.00</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Ultrasound Imaging</td>
                                    <td>4,785.00</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Pregnancy Care  Services</td>
                                    <td>5,030.00</td>
                                </tr>
                            </table>
                        </div>
                        <div class="offset-top-66">
                            <h6>Emergency Department Charges</h6>
                            <div class="offset-top-10">
                                <hr class="text-subline">
                            </div>
                            <div class="offset-top-10">-->
                                <!-- Classic Responsive Table-->
                             <!--   <table class="table table-custom table-fixed table-hover-rows table-3-col" data-responsive="true">
                                    <tr>
                                        <th>#</th>
                                        <th>Service</th>
                                        <th>Price, $</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Level 1</td>
                                        <td>290.00</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Level 2</td>
                                        <td>476.00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Level 3</td>
                                        <td>912.00</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Level 4</td>
                                        <td>1,246.00</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Level 5</td>
                                        <td>2,306.00</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Critical tests</td>
                                        <td>3,439.00</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>CT &amp; Ultrasound Diagnostics</td>
                                        <td>8,050.00</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>MRI &amp; X-ray </td>
                                        <td>5,750.00</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Become a Partner-->
    <section class="section-lg bg-default-liac">
        <div class="container">
            <h3 class="text-center">Diagnostic Services Pricing</h3>
            <div class="row g-0 justify-content-lg-center offset-top-66">
                <div class="col-sm-8 offset-sm-2 col-lg-3 offset-lg-0 col-xl-3 offset-md-right-negative-6">
                    <!-- Planning Box type 2-->
                    <div class="box-planning box-planning-type-2">
                        <div class="icon icon-sm text-primary fa-star-o"></div>
                        <div class="offset-top-14">
                            <h5 class="text-primary font-weight-bold">Starter</h5>
                        </div>
                        <div class="offset-top-41">
                            <ul class="list-separated list-unstyled">
                                <li><span class="text-gray-darker">CT Scan</span></li>
                                <li><span class="text-gray-darker">Radiography</span></li>
                                <li><span class="text-strike text-gray">Ultrasound</span></li>
                                <li><span class="text-strike text-gray">Mammography</span></li>
                                <li><span class="text-strike text-gray">Nuclear Medicine</span></li>
                            </ul>
                        </div><a class="btn btn-ellipse btn-primary" href="#">buy now</a>
                    </div>
                </div>
                <div class="col-sm-8 offset-sm-2 col-lg-4 offset-lg-0 offset-top-50 offset-md-top-0 to-front">
                    <!-- Planning Box type 2-->
                    <div class="box-planning box-planning-type-2 active">
                        <div class="icon icon-sm text-primary fa-star-half-empty"></div>
                        <div class="offset-top-14">
                            <h5 class="text-primary font-weight-bold">Business</h5>
                        </div>
                        <div class="offset-top-41">
                            <ul class="list-separated list-unstyled">
                                <li><span class="text-gray-darker">CT Scan</span></li>
                                <li><span class="text-gray-darker">Radiography</span></li>
                                <li><span class="text-gray-darker">Ultrasound</span></li>
                                <li><span class="text-strike text-gray">Mammography</span></li>
                                <li><span class="text-strike text-gray">Nuclear Medicine</span></li>
                            </ul>
                        </div><a class="btn btn-ellipse btn-primary" href="#">buy now</a>
                    </div>
                </div>
                <div class="col-sm-8 offset-sm-2 col-lg-3 offset-lg-0 offset-top-50 offset-md-top-0 offset-md-left-negative-6">
                    <!-- Planning Box type 2-->
                    <div class="box-planning box-planning-type-2">
                        <div class="icon icon-sm text-primary fa-star"></div>
                        <div class="offset-top-14">
                            <h5 class="text-primary font-weight-bold">Ultimate</h5>
                        </div>
                        <div class="offset-top-41">
                            <ul class="list-separated list-unstyled">
                                <li><span class="text-gray-darker">CT Scan</span></li>
                                <li><span class="text-gray-darker">Radiography</span></li>
                                <li><span class="text-gray-darker">Ultrasound</span></li>
                                <li><span class="text-gray-darker">Mammography</span></li>
                                <li><span class="text-gray-darker">Nuclear Medicine</span></li>
                            </ul>
                        </div><a class="btn btn-ellipse btn-primary" href="#">buy now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-app-layout>
