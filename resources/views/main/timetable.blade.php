<x-app-layout>


    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{ asset('images/background-breadcrumbs-01-1920x345.jpg') }}); " data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Timetable</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">Timetable</li>
            </ul>
        </div>
    </section>
    <!-- Timetable-->
    <section class="section-98 section-sm-110">
        <div class="container">
            <!-- Responsive-tabs-->
            <div class="responsive-tabs responsive-tabs-classic tabs-custom" data-type="horizontal">
                <ul class="resp-tabs-list tabs-1 text-center tabs-group-default" data-group="tabs-group-default">
                    <li>All Departments</li>
                    <li>MIT</li>
                    <li>X-Ray</li>
                    <li>Clinical Laboratory</li>
                    <li>CT Imaging</li>
                    <li>ECG</li>
                </ul>
                <div class="resp-tabs-container text-start tabs-group-default" data-group="tabs-group-default">
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
                </div>
            </div>
        </div>
    </section>

    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</x-app-layout>



