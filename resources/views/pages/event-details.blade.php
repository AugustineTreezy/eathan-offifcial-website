@extends('layouts.app')

@section('nav')
    @include('layouts.inc.pages-nav')    
@endsection

@section('content')
    <div class="banner-area banner-area--events all-text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Events</h1>
                    <ul class="fund-breadcumb">
                        <li><a href="index.html">Home</a> </li>
                        <li><a href="evetns.html">Events</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="event-detial-wrap">
                        <div class="image-wrap mb40">
                            <img src="images/events/event-details.jpg" class="img-round" alt="">
                        </div>
                        <h3 class="pdb10">GET VOLUNTEER IDEA FESTIVAL 2018</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <ul class="event-detail-meta nv-color">
                            <li>
                                <span class="event-detail-meta__title"><i class="fa fa-calendar base-color icon"></i> Event Schedule</span>
                                <span class="desc">Feb 11, 2018 08:00 AM to Jun 25, 2018 12:00 PM</span>
                            </li>
                            <li>
                                <span class="event-detail-meta__title"><i class="fa fa-map-marker base-color icon"></i> Location</span>
                                <span class="desc">South Africa</span>
                            </li>
                            <li>
                                <span class="event-detail-meta__title"><i class="fa fa-ticket base-color icon"></i> Price</span>
                                <span class="desc">From <span class="base-color">$80</span> </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt50 mb30">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="event-details-location-wrap mt40 pdt50">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="mapContainer"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <aside class="sidebar">
                        <form class="search-form widget">
                            <input type="search" placeholder="Search" class="form-control search-form__input" />
                            <button type="submit" class="search-form__submit"><i class="fa fa-search base-color"></i> </button>
                        </form>
                        <div class="widget">
                            <div class="widget__heading">
                                <h4 class="widget__title">UPCOMING <span class="base-color">EVENTS</span></h4>
                            </div>
                            <div class="widget__text-content">
                                <div class="upcomming-event-carousel" id="upcomming-event-carousel">
                                    <div class="upcomming-event-carousel__item">
                                        <div class="image text-center">
                                            <a href="#"><img class="event-thumbnail" src="images/sidebar/upcomming-event1.jpg" alt="up">
                                            <h4 class="upcomming-event-carousel__title">Finding Time in Nature</h4></a>

                                        </div>
                                        <div class="event-counter">
                                            <div id="event-counter-one" class="musica-counter-active" data-value-year="2018" data-value-month="9" data-value-day="28" data-value-zone="+10" ></div>
                                        </div>
                                    </div><!--/.upcomming-event-carousel__item-->
                                    <div class="upcomming-event-carousel__item">
                                        <div class="image text-center">
                                            <a href="#"><img class="event-thumbnail" src="images/sidebar/upcomming-event1.jpg" alt="up">
                                            <h4 class="upcomming-event-carousel__title">Finding Time in Nature</h4></a>

                                        </div>
                                        <div class="event-counter">
                                            <div id="event-counter-two" class="musica-counter-active" data-value-year="2018" data-value-month="9" data-value-day="28" data-value-zone="+10" ></div>
                                        </div>
                                    </div><!--/.upcomming-event-carousel__item-->
                                    <div class="upcomming-event-carousel__item">
                                        <div class="image text-center">
                                            <a href="#"><img class="event-thumbnail" src="images/sidebar/upcomming-event1.jpg" alt="up">
                                            <h4 class="upcomming-event-carousel__title">Finding Time in Nature</h4></a>

                                        </div>
                                        <div class="event-counter">
                                            <div id="event-counter-three" class="musica-counter-active" data-value-year="2018" data-value-month="9" data-value-day="28" data-value-zone="+10" ></div>
                                        </div>
                                    </div><!--/.upcomming-event-carousel__item-->
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget__heading">
                                <h4 class="widget__title">LATEST <span class="base-color">CAUSES</span></h4>
                            </div>
                            <div class="widget__text-content">
                                <div class="widget-latest-causes">
                                    <div class="widget-latest-causes__image-wrap">
                                        <a href="#"><img class="widget-latest-causes__thubnail" src="images/sidebar/latest-causes1.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-latest-causes__text-content">
                                        <h4 class="widget-latest-causes__title"><a href="#">Cause Title Gose here</a></h4>
                                        <div class="widget-latest-causes__admin small-text">
                                            <i class="base-color fa fa-user widget-latest-causes__admin-icon"></i>
                                            by <a href="#">Admin</a>
                                        </div>
                                        <div class="widget-latest-causes__time text-mute">
                                            10 Minutes Ago
                                        </div>
                                    </div>
                                </div><!--/.widget-latest-causes-->
                                <div class="widget-latest-causes">
                                    <div class="widget-latest-causes__image-wrap">
                                        <a href="#"><img class="widget-latest-causes__thubnail" src="images/sidebar/latest-causes2.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-latest-causes__text-content">
                                        <h4 class="widget-latest-causes__title"><a href="#">Cause Title Gose here</a></h4>
                                        <div class="widget-latest-causes__admin small-text">
                                            <i class="base-color fa fa-user widget-latest-causes__admin-icon"></i>
                                            by <a href="#">Admin</a>
                                        </div>
                                        <div class="widget-latest-causes__time text-mute">
                                            10 Minutes Ago
                                        </div>
                                    </div>
                                </div><!--/.widget-latest-causes-->
                                <div class="widget-latest-causes">
                                    <div class="widget-latest-causes__image-wrap">
                                        <a href="#"><img class="widget-latest-causes__thubnail" src="images/sidebar/latest-causes3.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-latest-causes__text-content">
                                        <h4 class="widget-latest-causes__title"><a href="#">Cause Title Gose here</a></h4>
                                        <div class="widget-latest-causes__admin small-text">
                                            <i class="base-color fa fa-user widget-latest-causes__admin-icon"></i>
                                            by <a href="#">Admin</a>
                                        </div>
                                        <div class="widget-latest-causes__time text-mute">
                                            10 Minutes Ago
                                        </div>
                                    </div>
                                </div><!--/.widget-latest-causes-->
                                <div class="widget-latest-causes">
                                    <div class="widget-latest-causes__image-wrap">
                                        <a href="#"><img class="widget-latest-causes__thubnail" src="images/sidebar/latest-causes4.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-latest-causes__text-content">
                                        <h4 class="widget-latest-causes__title"><a href="#">Cause Title Gose here</a></h4>
                                        <div class="widget-latest-causes__admin small-text">
                                            <i class="base-color fa fa-user widget-latest-causes__admin-icon"></i>
                                            by <a href="#">Admin</a>
                                        </div>
                                        <div class="widget-latest-causes__time text-mute">
                                            10 Minutes Ago
                                        </div>
                                    </div>
                                </div><!--/.widget-latest-causes-->
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- == Counter == -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- == Countdown == -->
    <script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <!-- == Google Maps == -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyBO5Else2rW4UNyXiCMp3y20JV7BseTMys"></script>
    <script src="js/jquery.mapit.min.js"></script>
    <script src="js/map-init.js"></script>
@endsection