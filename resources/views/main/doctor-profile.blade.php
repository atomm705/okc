<x-app-layout>
    <section class="breadcrumbs-custom bg-image context-dark breadcrumbs-creative slider-page" style="background-image: url({{ asset('images/bg-6.webp') }});" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Team Member Profile</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">Home</a></li>
                <li><a>Pages</a></li>
                <li class="active">Team Member Profile</li>
            </ul>
        </div>
    </section>
    <!-- team member section-->
    <section class="section-lg section bg-default">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-sm-10 col-lg-4">
                    <!-- Member block type 5-->
                    <div class="member-block-type-5 inset-lg-right-20"><img class="img-responsive center-block" src="{{ asset('images/user-scott-riley-320x320.jpg ') }}" width="320" height="320" alt=""/>
                        <div class="member-block-body"><a class="btn-ellipse btn-primary btn" href="make-an-appointment.html">make an appointment</a>
                            <address class="contact-info offset-top-20 offset-sm-top-24">
                                <ul class="list-unstyled p">
                                    <li><span class="icon icon-xxxs text-middle text-primary mdi mdi-phone"></span><a class="text-middle d-inline-block text-gray-darker" href="tel:1-800-1234-567">1-800-1234-567</a></li>
                                    <li><span class="icon icon-xxxs text-middle text-primary mdi mdi-email-open"></span><a class="text-middle d-inline-block" href="mailto:mail@demolink.org">mail@demolink.org</a></li>
                                </ul>
                            </address>
                            <div class="offset-top-24">
                                <ul class="list-inline list-inline-xs">
                                    <li><a class="icon icon-xxs icon-circle icon-gray-light fa-facebook" href="#"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-gray-light fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-gray-light fa-google-plus" href="#"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-gray-light fa-rss" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="offset-top-34 text-md-start inset-lg-right-20">
                        <h6 class="text-start">certificates</h6>
                        <hr class="text-subline">
                        <div class="row justify-content-sm-center justify-content-md-start offset-top-24 row-certificates" data-lightgallery="group">
                            <div class="col-sm-8 col-md-4"><a class="thumbnail-classic" data-lightgallery="item" data-size="700x970" href=" {{ asset('images/certifications/certificate-01-700x970.jpg') }}">
                                    <figure><img width="100" height="138" src=" {{ asset('images/certifications/certificate-01-100x138.jpg') }}" alt=""/>
                                    </figure></a>
                            </div>
                            <div class="col-sm-8 col-md-4 offset-top-20 offset-sm-top-0"><a class="thumbnail-classic" data-lightgallery="item" data-size="700x970" href="{{ asset('images/certifications/certificate-01-700x970.jpg') }}">
                                    <figure><img width="100" height="138" src="{{ asset('images/certifications/certificate-01-100x138.jpg') }}" alt=""/>
                                    </figure></a>
                            </div>
                            <div class="col-sm-8 col-md-4 offset-top-20 offset-sm-top-0"><a class="thumbnail-classic" data-lightgallery="item" data-size="700x970" href="{{ asset('images/certifications/certificate-01-700x970.jpg') }}">
                                    <figure><img width="100" height="138" src="{{ asset('images/certifications/certificate-01-100x138.jpg') }}" alt=""/>
                                    </figure></a>
                            </div>
                            <div class="col-sm-8 col-md-4 offset-top-20"><a class="thumbnail-classic" data-lightgallery="item" data-size="700x970" href="{{ asset('images/certifications/certificate-01-700x970.jpg') }}">
                                    <figure><img width="100" height="138" src="{{ asset('images/certifications/certificate-01-100x138.jpg') }}" alt=""/>
                                    </figure></a>
                            </div>
                            <div class="col-sm-8 col-md-4 offset-top-20"><a class="thumbnail-classic" data-lightgallery="item" data-size="700x970" href="{{ asset('images/certifications/certificate-01-700x970.jpg') }}">
                                    <figure><img width="100" height="138" src="{{ asset('images/certifications/certificate-01-100x138.jpg') }}" alt=""/>
                                    </figure></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-lg-8 text-lg-start offset-top-60 offset-md-top-0">
                    <div class="row">
                        <div class="col-md-5">
                            <div>Position</div>
                            <h5 class="font-weight-bold">CMO, Pathologist</h5>
                        </div>
                        <div class="col-md-7 offset-top-41 offset-sm-top-0">
                            <div>Education</div>
                            <h5 class="font-weight-bold">Perelman School of Medicine at the University of Pennsylvania (1987)</h5>
                        </div>
                    </div>
                    <div class="offset-top-66 text-start">
                        <h6>the heart of medical center</h6>
                        <hr class="text-subline">
                        <p>Nullam non odio vitae velit volutpat vulputate tempor eu sapien. Phasellus porttitor diam in tellus semper, ut elementum arcu eleifend. Nullam in posuere orci, ac congue augue. Sed varius massa et tortor fermentum, a dapibus ligula varius. Duis nec elementum ante, non imperdiet libero. Sed nec ornare justo, quis vehicula mauris. Nam ornare dui vitae ex congue interdum. Donec luctus dignissim est at ultricies. Sed ullamcorper posuere leo vitae suscipit. Suspendisse ac sem at nulla pellentesque rutrum a vel diam. Morbi pretium interdum lorem nec faucibus.</p>
                        <p>Aenean ac ex nunc. Phasellus tincidunt tempus enim. Sed elementum volutpat libero at pellentesque. Vestibulum interdum, dolor eget tristique dignissim, augue diam viverra ex, non malesuada ipsum mauris volutpat nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam efficitur accumsan condimentum.</p>
                    </div>
                    <div class="offset-top-66">
                        <h6 class="text-start">skills</h6>
                        <hr class="text-subline">
                        <div class="offset-top-30">
                            <!-- Linear progress bar-->
                            <div class="progress-linear">
                                <div class="progress-header">
                                    <h6 class="text-gray-dark pull-left">Dedication</h6>
                                    <h6 class="text-primary offset-top-0 pull-right progress-value progress-linear-counter">50</h6>
                                </div>
                                <div class="progress-bar-linear-wrap progress-linear-body">
                                    <div class="progress-linear-bar progress-bar-linear bg-accent"></div>
                                </div>
                            </div>
                            <div class="offset-top-60">
                                <!-- Linear progress bar-->
                                <div class="progress-linear">
                                    <div class="progress-header">
                                        <h6 class="text-gray-dark pull-left">problem Solving</h6>
                                        <h6 class="text-primary offset-top-0 pull-right progress-value progress-linear-counter">20</h6>
                                    </div>
                                    <div class="progress-bar-linear-wrap progress-linear-body">
                                        <div class="progress-linear-bar progress-bar-linear bg-accent"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-60">
                                <!-- Linear progress bar-->
                                <div class="progress-linear">
                                    <div class="progress-header">
                                        <h6 class="text-gray-dark pull-left">professionalism</h6>
                                        <h6 class="text-primary offset-top-0 pull-right progress-value progress-linear-counter">87</h6>
                                    </div>
                                    <div class="progress-bar-linear-wrap progress-linear-body">
                                        <div class="progress-linear-bar progress-bar-linear bg-accent"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-60">
                                <!-- Linear progress bar-->
                                <div class="progress-linear">
                                    <div class="progress-header">
                                        <h6 class="text-gray-dark pull-left">Decision-making</h6>
                                        <h6 class="text-primary offset-top-0 pull-right progress-value progress-linear-counter">37</h6>
                                    </div>
                                    <div class="progress-bar-linear-wrap progress-linear-body">
                                        <div class="progress-linear-bar progress-bar-linear bg-accent"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dr. Scott Riley’s blog posts-->
    <section class="section-lg section bg-default-liac">
        <div class="container">
            <h3>Scott Riley’s Blog Posts</h3>
            <div class="row justify-content-sm-center row-40">
                <div class="col-sm-10 col-md-8 col-lg-4">
                    <!-- Post Modern-->
                    <article class="post post-modern post-modern-classic">
                        <!-- Post media-->
                        <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src=" {{ asset('images/post-13-370x250.jpg') }}" alt=""/></a>
                        </div>
                        <!-- Post content-->
                        <div class="post-content text-start">
                            <!-- Post Title-->
                            <div class="post-title offset-top-8">
                                <h5 class="font-weight-bold"><a href="single-post.html">Reasons to Visit a Breast Specialist</a></h5>
                            </div>
                            <ul class="list-inline list-inline-dashed">
                                <li>June 21, 2023 at 8:12pm</li>
                                <li><a class="text-primary text-primary" href="single-post.html">News</a></li>
                            </ul>
                            <!-- Post Body-->
                            <div class="post-body">
                                <div class="offset-top-14">
                                    <p>There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the importance of visiting...</p>
                                </div>
                            </div>
                            <div class="tags group group-sm">
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-4">
                    <!-- Post Modern-->
                    <article class="post post-modern post-modern-classic">
                        <!-- Post media-->
                        <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src="{{ asset('images/post-14-370x250.jpg') }}" alt=""/></a>
                        </div>
                        <!-- Post content-->
                        <div class="post-content text-start">
                            <!-- Post Title-->
                            <div class="post-title offset-top-8">
                                <h5 class="font-weight-bold"><a href="single-post.html">Picking the Right Diagnostic Services for Efficient Results</a></h5>
                            </div>
                            <ul class="list-inline list-inline-dashed">
                                <li>June 21, 2023 at 8:12pm</li>
                                <li><a class="text-primary text-primary" href="single-post.html">News</a></li>
                            </ul>
                            <!-- Post Body-->
                            <div class="post-body">
                                <div class="offset-top-14">
                                    <p>There have been a lot of cases in which people were not provided with accurate reports that eventually affected their medical treatment. There is always...</p>
                                </div>
                            </div>
                            <div class="tags group group-sm">
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-4">
                    <!-- Post Modern-->
                    <article class="post post-modern post-modern-classic">
                        <!-- Post media-->
                        <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src="{{ asset('images/post-15-370x250.jpg') }}" alt=""/></a>
                        </div>
                        <!-- Post content-->
                        <div class="post-content text-start">
                            <!-- Post Title-->
                            <div class="post-title offset-top-8">
                                <h5 class="font-weight-bold"><a href="single-post.html">Preparing for an ECG in 8 Easy Steps: Tips From Our Diagnosticians</a></h5>
                            </div>
                            <ul class="list-inline list-inline-dashed">
                                <li>June 21, 2023 at 8:12pm</li>
                                <li><a class="text-primary text-primary" href="single-post.html">News</a></li>
                            </ul>
                            <!-- Post Body-->
                            <div class="post-body">
                                <div class="offset-top-14">
                                    <p>An ECG stands for an "electrocardiogram," which is a test that measures and records the electrical activity of the heart. It is used by doctors to obtain...</p>
                                </div>
                            </div>
                            <div class="tags group group-sm">
                            </div>
                        </div>
                    </article>
                </div>
            </div><a class="btn btn-ellipse btn-primary offset-top-41 offset-md-top-60" href="blog-masonry.html">view all blog posts</a>
        </div>
    </section>
</x-app-layout>
