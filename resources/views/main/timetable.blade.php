<x-app-layout>


    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark slider-page"
             style="background-image: url({{ asset('images/bg-6.webp') }});"
             data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">
                {{ $department ? ucfirst(str_replace('-', ' ', $department)) . ' Schedule' : 'Timetable' }}
            </h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li><a href="{{ route('main.timetable') }}">@lang('global.pages.schedule')</a></li>
                @if($department)
                    <li class="active">{{ ucfirst(str_replace('-', ' ', $department)) }}</li>
                @endif
            </ul>
        </div>
    </section>
    <!-- Timetable-->
    <section class="section-98 section-sm-110">
        <div class="container">

            <!-- Responsive-tabs-->
            <div class="responsive-tabs responsive-tabs-classic tabs-custom" data-type="horizontal">
                <div class="defolt-div" style="margin-top: 10px">
                    <div class="tabs-mobile md:hidden">
                        <button onclick="toggleDropdown()" class="dropdown-toggle">
                            {{ $department ? ucfirst(str_replace('-', ' ', $department)) : 'All Departments' }}
                        </button>
                        <ul id="dropdown-menu" class="dropdown-menu hidden-list">
                            <li><a href="{{ route('main.timetable') }}">All Departments</a></li>
                            <li><a href="{{ route('main.timetable', 'mit') }}">MIT</a></li>
                            <li><a href="{{ route('main.timetable', 'x-ray') }}">X-Ray</a></li>
                            <li><a href="{{ route('main.timetable', 'clinical-lab') }}">Clinical Lab</a></li>
                            <li><a href="{{ route('main.timetable', 'ct-imaging') }}">CT Imaging</a></li>
                            <li><a href="{{ route('main.timetable', 'ecg') }}">ECG</a></li>
                        </ul>
                    </div>



                    <ul class="list-timetable tabs-desktop hidden md:flex">
                                <li class="list-timetable-item">
                                    <a href="{{ route('main.timetable') }}" class="{{ $department === null ? 'active' : '' }}">
                                        All Departments
                                    </a>
                                </li>

                                <li class="list-timetable-item">
                                    <a href="{{ route('main.timetable', 'mit') }}" class="{{ $department === 'mit' ? 'active' : '' }}">
                                        MIT
                                    </a>
                                </li>

                                <li class="list-timetable-item">
                                    <a href="{{ route('main.timetable', 'x-ray') }}" class="{{ $department === 'x-ray' ? 'active' : '' }}">
                                        X-Ray
                                    </a>
                                </li>

                                <li class="list-timetable-item">
                                    <a href="{{ route('main.timetable', 'clinical-lab') }}" class="{{ $department === 'clinical-lab' ? 'active' : '' }}">
                                        Clinical Laboratory
                                    </a>
                                </li>
                                <li class="list-timetable-item">
                                    <a href="{{ route('main.timetable', 'ct-imaging') }}" class="{{ $department === 'ct-imaging' ? 'active' : '' }}">
                                        CT Imaging
                                    </a>
                                </li>
                                <li class="list-timetable-item">
                                    <a href="{{ route('main.timetable', 'ecg') }}" class="{{ $department === 'ecg' ? 'active' : '' }}">
                                        ECG
                                    </a>
                                </li>
                    </ul>
                </div>

                <div class="resp-tabs-container text-start tabs-group-default" data-group="tabs-group-default">

                    @if ($department === null)
                    <div>
                        <div class="calendar-responsive-mod-1 offset-top-30">
                            <table class="calendar-variant-2">
                                <thead>
                                <tr>
                                    <th class="hours"><span class="d-none d-lg-inline">Hours</span></th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="text-gray-darker">8:00am<span class="d-none d-xl-inline">-</span><br class="d-xl-none">9:00am</span></td>
                                    <td>
                                        <div class="fc-event" style="height:403%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-carmine">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-05-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Jane Fowler</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">Clinical Laboratory Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">9:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">10:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-carmine">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-05-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Jane Fowler</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">Clinical Laboratory Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">10:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">11:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">11:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">12:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:404%;">
                                            <div class="fc-event-wrap bg-carmine">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-05-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Jane Fowler</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">Clinical Laboratory Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">12:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">1:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">1:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">2:00pm</span></td>
                                    <td>
                                        <div class="fc-event" style="height:504%;">
                                            <div class="fc-event-wrap bg-java">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">2:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">3:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:404%;">
                                            <div class="fc-event-wrap bg-java">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">3:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">4:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">4:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">5:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">5:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">6:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @elseif ($department === 'mit')
                    <div>
                        <div class="calendar-responsive-mod-1 offset-top-30">
                            <table class="calendar-variant-2">
                                <thead>
                                <tr>
                                    <th class="hours"><span class="d-none d-lg-inline">Hours</span></th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="text-gray-darker">8:00am<span class="d-none d-xl-inline">-</span><br class="d-xl-none">9:00am</span></td>
                                    <td>
                                        <div class="fc-event" style="height:403%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">9:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">10:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">10:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">11:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">11:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">12:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:404%;">
                                            <div class="fc-event-wrap bg-carmine">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-05-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Jane Fowler</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">Clinical Laboratory Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">12:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">1:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">1:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">2:00pm</span></td>
                                    <td>
                                        <div class="fc-event" style="height:504%;">
                                            <div class="fc-event-wrap bg-java">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}g" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">2:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">3:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:404%;">
                                            <div class="fc-event-wrap bg-java">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}g" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">3:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">4:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @elseif($department === 'x-ray')
                    <div>
                        <div class="calendar-responsive-mod-1 offset-top-30">
                            <table class="calendar-variant-2">
                                <thead>
                                <tr>
                                    <th class="hours"><span class="d-none d-lg-inline">Hours</span></th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="text-gray-darker">8:00am<span class="d-none d-xl-inline">-</span><br class="d-xl-none">9:00am</span></td>
                                    <td>
                                        <div class="fc-event" style="height:606%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-carmine">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">9:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">10:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">10:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">11:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">11:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">12:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">12:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">1:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">1:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">2:00pm</span></td>
                                    <td>
                                        <div class="fc-event" style="height:504%;">
                                            <div class="fc-event-wrap bg-java">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">2:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">3:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:404%;">
                                            <div class="fc-event-wrap bg-java">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">3:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">4:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @elseif($department === 'clinical-lab')
                    <div>
                        <div class="calendar-responsive-mod-1 offset-top-30">
                            <table class="calendar-variant-2">
                                <thead>
                                <tr>
                                    <th class="hours"><span class="d-none d-lg-inline">Hours</span></th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="text-gray-darker">8:00am<span class="d-none d-xl-inline">-</span><br class="d-xl-none">9:00am</span></td>
                                    <td>
                                        <div class="fc-event" style="height:403%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">9:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">10:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">10:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">11:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">11:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">12:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:404%;">
                                            <div class="fc-event-wrap bg-carmine">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-05-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Jane Fowler</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">Clinical Laboratory Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">12:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">1:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">1:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">2:00pm</span></td>
                                    <td>
                                        <div class="fc-event" style="height:504%;">
                                            <div class="fc-event-wrap bg-java">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">2:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">3:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:404%;">
                                            <div class="fc-event-wrap bg-java">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">3:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">4:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @elseif($department === 'ct-imaging')
                    <div>
                        <div class="calendar-responsive-mod-1 offset-top-30">
                            <table class="calendar-variant-2">
                                <thead>
                                <tr>
                                    <th class="hours"><span class="d-none d-lg-inline">Hours</span></th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="text-gray-darker">8:00am<span class="d-none d-xl-inline">-</span><br class="d-xl-none">9:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">9:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">10:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">10:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">11:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:505%;">
                                            <div class="fc-event-wrap bg-accent">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">11:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">12:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">12:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">1:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">1:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">2:00pm</span></td>
                                    <td>
                                        <div class="fc-event" style="height:504%;">
                                            <div class="fc-event-wrap bg-java">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">2:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">3:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:404%;">
                                            <div class="fc-event-wrap bg-java">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">3:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">4:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @elseif($department === 'ecg')
                    <div>
                        <div class="calendar-responsive-mod-1 offset-top-30">
                            <table class="calendar-variant-2">
                                <thead>
                                <tr>
                                    <th class="hours"><span class="d-none d-lg-inline">Hours</span></th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="text-gray-darker">8:00am<span class="d-none d-xl-inline">-</span><br class="d-xl-none">9:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">9:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">10:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">10:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">11:00am</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">11:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">12:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:404%;">
                                            <div class="fc-event-wrap bg-carmine">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-05-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Jane Fowler</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">Clinical Laboratory Technologist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">12:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">1:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">1:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">2:00pm</span></td>
                                    <td>
                                        <div class="fc-event" style="height:504%;">
                                            <div class="fc-event-wrap bg-java">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">2:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">3:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="fc-event" style="height:404%;">
                                            <div class="fc-event-wrap bg-java">
                                                <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                    <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                    <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="text-gray-darker">3:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">4:00pm</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
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
                                     <li class="list-timetable-item">
                                        <a href="{{ route('main.timetable') }}" class="{{ $department === null ? 'active' : '' }}">
                                            All Departments
                                        </a>
                                    </li>

                                    <li class="list-timetable-item">
                                        <a href="{{ route('main.timetable', 'mit') }}" class="{{ $department === 'mit' ? 'active' : '' }}">
                                            MIT
                                        </a>
                                    </li>

                                    <li class="list-timetable-item">
                                        <a href="{{ route('main.timetable', 'x-ray') }}" class="{{ $department === 'x-ray' ? 'active' : '' }}">
                                            X-Ray
                                        </a>
                                    </li>

                                    <li class="list-timetable-item">
                                        <a href="{{ route('main.timetable', 'clinical-lab') }}" class="{{ $department === 'clinical-lab' ? 'active' : '' }}">
                                            Clinical Laboratory
                                        </a>
                                    </li>
                                    <li class="list-timetable-item">
                                        <a href="{{ route('main.timetable', 'ct-imaging') }}" class="{{ $department === 'ct-imaging' ? 'active' : '' }}">
                                            CT Imaging
                                        </a>
                                    </li>
                                    <li class="list-timetable-item">
                                        <a href="{{ route('main.timetable', 'ecg') }}" class="{{ $department === 'ecg' ? 'active' : '' }}">
                                            ECG
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 offset-lg-top-0 offset-top-34">
                    <div class="row text-md-start isotope isotope-style-1" data-isotope-layout="fitRows" data-column-class=".col-1" data-lightgallery="group" data-lg-animation="lg-slide-circular" data-isotope-group="gallery">
                        <div class="col-1 isotope-item isotope-sizer"></div>

                        @if ($department === null)
                        <div class="col-lg-12 isotope-item" data-filter="Diagnostic Imaging">
                            <div>
                                <div class="calendar-responsive-mod-1 offset-top-30">
                                    <table class="calendar-variant-2">
                                        <thead>
                                        <tr>
                                            <th class="hours"><span class="d-none d-lg-inline">Hours</span></th>
                                            <th>Monday</th>
                                            <th>Tuesday</th>
                                            <th>Wednesday</th>
                                            <th>Thursday</th>
                                            <th>Friday</th>
                                            <th>Saturday</th>
                                            <th>Sunday</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><span class="text-gray-darker">8:00am<span class="d-none d-xl-inline">-</span><br class="d-xl-none">9:00am</span></td>
                                            <td>
                                                <div class="fc-event" style="height:403%;">
                                                    <div class="fc-event-wrap bg-accent">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="fc-event" style="height:505%;">
                                                    <div class="fc-event-wrap bg-carmine">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-05-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Jane Fowler</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">Clinical Laboratory Technologist</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="fc-event" style="height:505%;">
                                                    <div class="fc-event-wrap bg-accent">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">9:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">10:00am</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="fc-event" style="height:505%;">
                                                    <div class="fc-event-wrap bg-carmine">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-05-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Jane Fowler</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">Clinical Laboratory Technologist</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">10:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">11:00am</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="fc-event" style="height:505%;">
                                                    <div class="fc-event-wrap bg-accent">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">11:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">12:00pm</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="fc-event" style="height:404%;">
                                                    <div class="fc-event-wrap bg-carmine">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-05-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Jane Fowler</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">Clinical Laboratory Technologist</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">12:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">1:00pm</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">1:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">2:00pm</span></td>
                                            <td>
                                                <div class="fc-event" style="height:504%;">
                                                    <div class="fc-event-wrap bg-java">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td>
                                                <div class="fc-event" style="height:505%;">
                                                    <div class="fc-event-wrap bg-accent">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">2:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">3:00pm</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="fc-event" style="height:404%;">
                                                    <div class="fc-event-wrap bg-java">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">3:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">4:00pm</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">4:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">5:00pm</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">5:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">6:00pm</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @elseif ($department === 'mit')
                        <div class="col-lg-12 isotope-item" data-filter="Ultrasound diagnostics">
                            <div>
                                <div class="calendar-responsive-mod-1 offset-top-30">
                                    <table class="calendar-variant-2">
                                        <thead>
                                        <tr>
                                            <th class="hours"><span class="d-none d-lg-inline">Hours</span></th>
                                            <th>Monday</th>
                                            <th>Tuesday</th>
                                            <th>Wednesday</th>
                                            <th>Thursday</th>
                                            <th>Friday</th>
                                            <th>Saturday</th>
                                            <th>Sunday</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><span class="text-gray-darker">8:00am<span class="d-none d-xl-inline">-</span><br class="d-xl-none">9:00am</span></td>
                                            <td>
                                                <div class="fc-event" style="height:403%;">
                                                    <div class="fc-event-wrap bg-accent">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="fc-event" style="height:505%;">
                                                    <div class="fc-event-wrap bg-accent">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">9:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">10:00am</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">10:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">11:00am</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="fc-event" style="height:505%;">
                                                    <div class="fc-event-wrap bg-accent">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">11:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">12:00pm</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="fc-event" style="height:404%;">
                                                    <div class="fc-event-wrap bg-carmine">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-05-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Jane Fowler</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">Clinical Laboratory Technologist</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">12:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">1:00pm</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">1:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">2:00pm</span></td>
                                            <td>
                                                <div class="fc-event" style="height:504%;">
                                                    <div class="fc-event-wrap bg-java">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}g" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td>
                                                <div class="fc-event" style="height:505%;">
                                                    <div class="fc-event-wrap bg-accent">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">2:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">3:00pm</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="fc-event" style="height:404%;">
                                                    <div class="fc-event-wrap bg-java">
                                                        <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}g" width="270" height="270" alt=""/>
                                                            <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                            <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span class="text-gray-darker">3:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">4:00pm</span></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @elseif($department === 'x-ray')
                        <div class="col-lg-12 isotope-item" data-filter="X-ray diagnostics">
                            <div class="calendar-responsive-mod-1 offset-top-30">
                                <table class="calendar-variant-2">
                                    <thead>
                                    <tr>
                                        <th class="hours"><span class="d-none d-lg-inline">Hours</span></th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                        <th>Sunday</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><span class="text-gray-darker">8:00am<span class="d-none d-xl-inline">-</span><br class="d-xl-none">9:00am</span></td>
                                        <td>
                                            <div class="fc-event" style="height:606%;">
                                                <div class="fc-event-wrap bg-accent">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td>
                                            <div class="fc-event" style="height:505%;">
                                                <div class="fc-event-wrap bg-carmine">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">9:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">10:00am</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">10:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">11:00am</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">11:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">12:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">12:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">1:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">1:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">2:00pm</span></td>
                                        <td>
                                            <div class="fc-event" style="height:504%;">
                                                <div class="fc-event-wrap bg-java">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">2:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">3:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="fc-event" style="height:404%;">
                                                <div class="fc-event-wrap bg-java">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">3:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">4:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @elseif($department === 'clinical-lab')
                        <div class="col-lg-12 isotope-item" data-filter="Pediatrics">
                            <div class="calendar-responsive-mod-1 offset-top-30">
                                <table class="calendar-variant-2">
                                    <thead>
                                    <tr>
                                        <th class="hours"><span class="d-none d-lg-inline">Hours</span></th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                        <th>Sunday</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><span class="text-gray-darker">8:00am<span class="d-none d-xl-inline">-</span><br class="d-xl-none">9:00am</span></td>
                                        <td>
                                            <div class="fc-event" style="height:403%;">
                                                <div class="fc-event-wrap bg-accent">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="fc-event" style="height:505%;">
                                                <div class="fc-event-wrap bg-accent">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">9:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">10:00am</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">10:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">11:00am</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="fc-event" style="height:505%;">
                                                <div class="fc-event-wrap bg-accent">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">11:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">12:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="fc-event" style="height:404%;">
                                                <div class="fc-event-wrap bg-carmine">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-05-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Jane Fowler</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">Clinical Laboratory Technologist</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">12:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">1:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">1:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">2:00pm</span></td>
                                        <td>
                                            <div class="fc-event" style="height:504%;">
                                                <div class="fc-event-wrap bg-java">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td>
                                            <div class="fc-event" style="height:505%;">
                                                <div class="fc-event-wrap bg-accent">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">2:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">3:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="fc-event" style="height:404%;">
                                                <div class="fc-event-wrap bg-java">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">3:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">4:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @elseif($department === 'ct-imaging')
                        <div class="col-lg-12 isotope-item" data-filter="Laboratory Services">
                            <div class="calendar-responsive-mod-1 offset-top-30">
                                <table class="calendar-variant-2">
                                    <thead>
                                    <tr>
                                        <th class="hours"><span class="d-none d-lg-inline">Hours</span></th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                        <th>Sunday</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><span class="text-gray-darker">8:00am<span class="d-none d-xl-inline">-</span><br class="d-xl-none">9:00am</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="fc-event" style="height:505%;">
                                                <div class="fc-event-wrap bg-accent">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">9:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">10:00am</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">10:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">11:00am</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="fc-event" style="height:505%;">
                                                <div class="fc-event-wrap bg-accent">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-06-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Eric Snyder</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">MRI Technologist</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">11:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">12:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">12:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">1:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">1:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">2:00pm</span></td>
                                        <td>
                                            <div class="fc-event" style="height:504%;">
                                                <div class="fc-event-wrap bg-java">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">2:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">3:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="fc-event" style="height:404%;">
                                                <div class="fc-event-wrap bg-java">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">3:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">4:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @elseif($department === 'ecg')
                        <div class="col-lg-12 isotope-item" data-filter="Pregnancy Services">
                            <div class="calendar-responsive-mod-1 offset-top-30">
                                <table class="calendar-variant-2">
                                    <thead>
                                    <tr>
                                        <th class="hours"><span class="d-none d-lg-inline">Hours</span></th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                        <th>Sunday</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><span class="text-gray-darker">8:00am<span class="d-none d-xl-inline">-</span><br class="d-xl-none">9:00am</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">9:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">10:00am</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">10:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">11:00am</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">11:00am<span class="d-none d-xl-inline">–</span><br class="d-xl-none">12:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="fc-event" style="height:404%;">
                                                <div class="fc-event-wrap bg-carmine">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-05-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Jane Fowler</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">Clinical Laboratory Technologist</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">12:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">1:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">1:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">2:00pm</span></td>
                                        <td>
                                            <div class="fc-event" style="height:504%;">
                                                <div class="fc-event-wrap bg-java">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">2:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">3:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="fc-event" style="height:404%;">
                                                <div class="fc-event-wrap bg-java">
                                                    <div class="fc-event-inner"><img class="img-responsive img-circle" src="{{ asset('images/our-team-02-270x270.jpg ') }}" width="270" height="270" alt=""/>
                                                        <div class="text-white font-weight-bold offset-top-10">Dr. Martha Schmidt</div>
                                                        <p class="font-italic offset-top-4" style="color: rgba(255,255,255, .4)">ECG Technician</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-gray-darker">3:00pm<span class="d-none d-xl-inline">–</span><br class="d-xl-none">4:00pm</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>



