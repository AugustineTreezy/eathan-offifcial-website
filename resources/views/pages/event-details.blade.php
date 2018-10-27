@extends('layouts.app')

@section('nav')
    @include('layouts.inc.pages-nav')    
@endsection

@section('styles')    
    <!-- Countdown css-->
    <link rel="stylesheet" href="{{ asset('css/jquery.countdown.css') }}">
@endsection

@section('content')
    <div class="banner-area banner-area--events all-text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Events</h1>
                    <ul class="fund-breadcumb">
                        <li><a href="{{ route('home') }}">Home</a> </li>
                        <li><a href="{{ route('event-details', ['slug'=>$event->slug]) }}">Event details</a> </li>
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
                            <img src="{{ url('http://eathanadmin.site/storage/events-images/').$event->image_name}}" class="img-round" alt="Event image">
                        </div>
                        <h3 class="pdb10">{{$event->title}}</h3>
                        <ul class="event-detail-meta nv-color">
                            <li>
                                <span class="event-detail-meta__title"><i class="fa fa-calendar base-color icon"></i> Event Schedule</span>
                                <span class="desc">{{date("M j, Y g:i A", strtotime($event->starting))}} to {{date("M j, Y g:i A", strtotime($event->stoping))}} </span>
                            </li>
                            <li>
                                <span class="event-detail-meta__title"><i class="fa fa-map-marker base-color icon"></i> Location</span>
                                <span class="desc">{{$event->address}}</span>
                            </li> 
                        </ul>
                        <!-- Button code -->
                        <div title="Add to Calendar" class="addeventatc">
                            Add to Calendar
                            <span class="start">{{date("m/d/Y g:i A", strtotime($event->starting))}}</span>
                            <span class="end">{{date("m/d/Y g:i A", strtotime($event->stoping))}}</span>
                            <span class="timezone">America/Los_Angeles</span>
                            <span class="title">{{$event->title}}</span>
                            <span class="description">{{ str_limit(strip_tags($event->description), $limit = 250, $end = '...') }} {{'\nFor more info about the event view it on our website on the link below.\n'}} {{ route('event-details', ['slug'=>$event->slug]) }}</span>
                            <span class="location">{{$event->address}}</span>
                        </div>
                    </div>
                    <div class="mt50 mb30">
                        <p>{!! $event->description !!}</p>
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
                                <h4 class="widget__title">MORE <span class="base-color">EVENTS</span></h4>
                            </div>
                            <div class="widget__text-content">
                                <div class="upcomming-event-carousel" id="upcomming-event-carousel">
                                    @foreach ($events as $event)
                                    <div class="upcomming-event-carousel__item">
                                        <div class="image text-center">
                                            <a href="{{ route('event-details', ['slug'=>$event->slug]) }}"><img class="event-thumbnail" src="{{ url('http://eathanadmin.site/storage/events-images/').$event->image_name}}" alt="event image">
                                            <h4 class="upcomming-event-carousel__title">{{$event->title}}</h4></a>

                                        </div>
                                        <div class="event-counter text-center">
                                            <div id="event-counter-{{$event->id}}" class="musica-counter-active" data-value-year="{{date("Y", strtotime($event->starting))}}" data-value-month="{{date("n", strtotime($event->starting))}}" data-value-day="{{date("j", strtotime($event->starting))}}" data-value-zone="+10" ></div>
                                        </div>
                                    </div><!--/.upcomming-event-carousel__item-->    
                                    @endforeach 
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget__heading">
                                <h4 class="widget__title">LATEST <span class="base-color">NEWS</span></h4>
                            </div>
                            <div class="widget__text-content">
                                @foreach ($news as $item)
                                <div class="widget-latest-causes">
                                    <div class="widget-latest-causes__image-wrap">
                                        <a href="{{ route('news-details', ['slug'=>$item->slug]) }}"><img class="widget-latest-causes__thubnail" style="border-radius: 5px;" src="{{ url('http://eathanadmin.site/storage/news-images/').$item->image_name}}" alt=""></a>
                                    </div>
                                    <div class="widget-latest-causes__text-content">
                                        <h4 class="widget-latest-causes__title"><a href="{{ route('news-details', ['slug'=>$item->slug]) }}">{{ str_limit($item->title, $limit = 35, $end = '...') }}</a></h4>
                                        <div class="widget-latest-causes__time text-mute">
                                            {{date("M j, Y", strtotime($item->created_at))}}
                                        </div>
                                    </div>
                                </div><!--/.widget-more-news-->    
                                @endforeach                                
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="{{$event->latitude}}" id="latitude">
    <input type="hidden" value="{{$event->longitude}}" id="longitude">
@endsection

@section('scripts')
    <!-- == Counter == -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- == Countdown == -->
    <script src="{{ asset('js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
    <!-- == Google Maps == -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyBO5Else2rW4UNyXiCMp3y20JV7BseTMys"></script>
    <script src="{{ asset('js/jquery.mapit.min.js') }}"></script>
    <script src="{{ asset('js/map-init.js') }}"></script>
@endsection