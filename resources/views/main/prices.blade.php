<x-app-layout>
    <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{ asset('images/bg-6.webp') }});"  data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
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
            <div class="row isotope-wrap">
                <div class="col-lg-3">
                    <div class="isotope-filters isotope-filters-vertical">
                        <h4 class="text-uppercase isotope-filters-title offset-top-34"></h4>
                        <ul class="list-inline list-inline-sm">
                            <li class="d-xl-none">
                                <p>Choose your category:</p>
                            </li>
                            <li class="section-relative">
                                @if(!$category)
                                    @php $category = 'oftalmologiya'; @endphp
                                @endif
                                <button class="isotope-filters-toggle btn btn-sm btn-default" data-custom-toggle="#isotope-1" data-custom-toggle-disable-on-blur="true" data-custom-toggle-hide-on-blur="true">Filter<span class="caret"></span></button>
                                <ul class="list-sm-inline isotope-filters-list" id="isotope-1">
                                    <li><a href="{{ route('prices.category', 'oftalmologiya') }}">oftalmologiya</a></li>
                                    <li><a href="{{ route('prices.category', 'ginekologiya') }}">ginekologiya</a></li>
                                    <li><a href="{{ route('prices.category', 'ultrazvukova-diagnostika') }}">ultrazvukova-diagnostika</a></li>
                                    <li><a href="{{ route('prices.category', 'dermatologiya') }}">dermatologiya</a></li>
                                    <li><a href="{{ route('prices.category', 'gastroenterologiya') }}">gastroenterologiya</a></li>
                                    <li><a href="{{ route('prices.category', 'endoskopiya') }}">endoskopiya</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 offset-lg-top-0 offset-top-34">
                    <div class="row text-md-start isotope isotope-style-1" data-isotope-layout="fitRows" data-column-class=".col-1" data-lightgallery="group" data-lg-animation="lg-slide-circular" data-isotope-group="gallery">
                        @if($category)
                        <div class="col-1 isotope-item isotope-sizer"></div>

                        <div class="col-lg-12 isotope-item" data-filter="oftalmologiya">
                            @if($category === 'oftalmologiya')
                            <h3>oftalmologiya</h3>
                                <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                                    <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                                        <li  class="acordion-title">Can I track my order?</li>
                                        <li  class="text-[#868686]">How can I change something in my order?</li>
                                        <li>How can I pay for my order?</li>
                                        <li>How long will my order take to be delivered?</li>
                                    </ul>
                                    <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                                        <div>
                                            <table class="table table-custom table-fixed table-hover-rows table-3-col" data-responsive="true">
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
                                        <div>If you need to change something in your order, please contact us immediately. We usually process orders within 30 minutes, and once we have processed your order, we will be unable to make any changes.</div>
                                        <div>We accept Visa, MasterCard, and American Express credit and debit cards for your convenience.</div>
                                        <div>Delivery times will depend on your location. Once payment is confirmed your order will be packaged. Delivery can be expected within a day.</div>
                                    </div>
                                </div>
                        </div>

                        <div class="col-lg-12 isotope-item" data-filter="ginekologiya">
                            @elseif($category === 'ginekologiya')
                            <h3>ginekologiya</h3>
                                <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                                    <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                                        <li>Can I track my order?</li>
                                        <li>How can I change something in my order?</li>
                                        <li>How can I pay for my order?</li>
                                        <li>How long will my order take to be delivered?</li>
                                    </ul>
                                    <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                                        <div>Yes, you can! After placing your order you will receive an order confirmation via email. Each order starts production 15 minutes after your order is placed. Within a few hours of you placing your order, you will receive an expected delivery time. When the order will be ready for delivery, you will receive another email with the tracking number and a link to trace the order online with the courier.</div>
                                        <div>If you need to change something in your order, please contact us immediately. We usually process orders within 30 minutes, and once we have processed your order, we will be unable to make any changes.</div>
                                        <div>We accept Visa, MasterCard, and American Express credit and debit cards for your convenience.</div>
                                        <div>Delivery times will depend on your location. Once payment is confirmed your order will be packaged. Delivery can be expected within a day.</div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-12 isotope-item" data-filter="ultrazvukova-diagnostika">
                            @elseif($category === 'ultrazvukova-diagnostika')
                            <h3>ultrazvukova-diagnostika</h3>
                                <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                                    <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                                        <li>Can I track my order?</li>
                                        <li>How can I change something in my order?</li>
                                        <li>How can I pay for my order?</li>
                                        <li>How long will my order take to be delivered?</li>
                                    </ul>
                                    <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                                        <div>Yes, you can! After placing your order you will receive an order confirmation via email. Each order starts production 15 minutes after your order is placed. Within a few hours of you placing your order, you will receive an expected delivery time. When the order will be ready for delivery, you will receive another email with the tracking number and a link to trace the order online with the courier.</div>
                                        <div>If you need to change something in your order, please contact us immediately. We usually process orders within 30 minutes, and once we have processed your order, we will be unable to make any changes.</div>
                                        <div>We accept Visa, MasterCard, and American Express credit and debit cards for your convenience.</div>
                                        <div>Delivery times will depend on your location. Once payment is confirmed your order will be packaged. Delivery can be expected within a day.</div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-12 isotope-item" data-filter="dermatologiya">
                            @elseif($category === 'dermatologiya')
                            <h3>dermatologiya</h3>
                                <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                                    <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                                        <li>Can I track my order?</li>
                                        <li>How can I change something in my order?</li>
                                        <li>How can I pay for my order?</li>
                                        <li>How long will my order take to be delivered?</li>
                                    </ul>
                                    <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                                        <div>Yes, you can! After placing your order you will receive an order confirmation via email. Each order starts production 15 minutes after your order is placed. Within a few hours of you placing your order, you will receive an expected delivery time. When the order will be ready for delivery, you will receive another email with the tracking number and a link to trace the order online with the courier.</div>
                                        <div>If you need to change something in your order, please contact us immediately. We usually process orders within 30 minutes, and once we have processed your order, we will be unable to make any changes.</div>
                                        <div>We accept Visa, MasterCard, and American Express credit and debit cards for your convenience.</div>
                                        <div>Delivery times will depend on your location. Once payment is confirmed your order will be packaged. Delivery can be expected within a day.</div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-12 isotope-item" data-filter="gastroenterologiya">
                            @elseif($category === 'gastroenterologiya')
                            <h3>gastroenterologiya</h3>
                                <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                                    <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                                        <li>Can I track my order?</li>
                                        <li>How can I change something in my order?</li>
                                        <li>How can I pay for my order?</li>
                                        <li>How long will my order take to be delivered?</li>
                                    </ul>
                                    <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                                        <div>Yes, you can! After placing your order you will receive an order confirmation via email. Each order starts production 15 minutes after your order is placed. Within a few hours of you placing your order, you will receive an expected delivery time. When the order will be ready for delivery, you will receive another email with the tracking number and a link to trace the order online with the courier.</div>
                                        <div>If you need to change something in your order, please contact us immediately. We usually process orders within 30 minutes, and once we have processed your order, we will be unable to make any changes.</div>
                                        <div>We accept Visa, MasterCard, and American Express credit and debit cards for your convenience.</div>
                                        <div>Delivery times will depend on your location. Once payment is confirmed your order will be packaged. Delivery can be expected within a day.</div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-12 isotope-item" data-filter="endoskopiya">
                            @elseif($category === 'endoskopiya')
                            <h3>endoskopiya</h3>
                                <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                                    <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                                        <li>Can I track my order?</li>
                                        <li>How can I change something in my order?</li>
                                        <li>How can I pay for my order?</li>
                                        <li>How long will my order take to be delivered?</li>
                                    </ul>
                                    <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                                        <div>Yes, you can! After placing your order you will receive an order confirmation via email. Each order starts production 15 minutes after your order is placed. Within a few hours of you placing your order, you will receive an expected delivery time. When the order will be ready for delivery, you will receive another email with the tracking number and a link to trace the order online with the courier.</div>
                                        <div>If you need to change something in your order, please contact us immediately. We usually process orders within 30 minutes, and once we have processed your order, we will be unable to make any changes.</div>
                                        <div>We accept Visa, MasterCard, and American Express credit and debit cards for your convenience.</div>
                                        <div>Delivery times will depend on your location. Once payment is confirmed your order will be packaged. Delivery can be expected within a day.</div>
                                    </div>
                                </div>
                            </div>
                            @else
                                <p>Category not found.</p>
                            @endif
                        </div>
                        @else
                            <h3>Please select a category</h3>
                            <p>Click on a category to see the prices.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>





</x-app-layout>




