@extends('layouts.app')

@section('nav')
    @include('layouts.inc.pages-nav')    
@endsection

@section('styles')
    <!-- Countdown css-->
    <link rel="stylesheet" href="{{ asset('css/jquery.countdown.css') }}">
    <style>
        .pagination>li>a,
        .pagination>li>span {
        border: 1px solid purple;
        color: purple;
        }
        .pagination>li.active>span {
        background: purple;
        color: #fff;
        }
    </style>
    @endsection

@section('content')
   <div class="banner-area banner-area--blog all-text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">NEWS AND UPDATES</h1>
                    <ul class="fund-breadcumb">
                        <li><a href="{{ route('home') }}">Home</a> </li>
                        <li><a href="{{ route('news-home') }}">News and Updates</a> </li>
                        @isset($link)                            
                        <li>{{$link}} </li>
                        @endisset
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row row-eq-rs-height">
                        @foreach ($news as $item)
                        <div class="col-sm-6 col-xs-12">
                            <div class="blog-post">
                                <div class="blog-post__thumbnail-wrap">
                                    <img src="{{ url('http://eathanadmin.site/storage/news-images/').'/'.$item->image_name}}" height="240" alt="blog">
                                    <div class="blog-post__like-comment">
                                    <span><i class="fa fa-comments"></i><a style="text-decoration: none; color:#fff" href="{{ route('news-details', ['slug'=>$item->slug]) }}#disqus_thread">0 Comments</a></span>
                                    </div>
                                </div>
                                <div class="blog-post__text-content">
                                    <h4 class="blog-post__title heading-label-four"><a href="{{ route('news-details', ['slug'=>$item->slug]) }}">{{ str_limit(strip_tags($item->title), $limit = 80, $end = '...') }}</a></h4>
                                    <div class="blog-post__meta-info">
                                <span class="small-text"><i class="fa fa-calendar base-color"></i>{{date("M j, Y", strtotime($item->created_at))}}</span>
                                </div>
                                <p>{{ str_limit(strip_tags($item->body), $limit = 155, $end = '...') }}</p>
                                <a href="{{ route('news-details', ['slug'=>$item->slug]) }}" class="btn">Read More</a>
                                </div>
                            </div><!--/.blog-post-->
                        </div>   
                        @endforeach
                        
                    </div>
                    {{$news->links()}}
                </div>
                <div class="col-md-4">
                    <aside class="sidebar">
                        <div class="widget">
                        <div class="fb-page" 
                        data-href="https://www.facebook.com/eastafricatrans"
                        data-width="380" 
                        data-hide-cover="false"
                        data-show-facepile="false"></div>
                        </div>
                        <div class="widget">
                            <div class="widget__heading">
                                <h4 class="widget__title">UPCOMING <span class="base-color">EVENTS</span></h4>
                            </div>
                            <div class="widget__text-content">
                                <div class="upcomming-event-carousel" id="upcomming-event-carousel">
                                    @foreach ($events as $event)
                                    <div class="upcomming-event-carousel__item">
                                        <div class="image text-center">
                                            <a href="{{ route('event-details', ['slug'=>$event->slug]) }}"><img class="event-thumbnail" height="180" src="{{ url('http://eathanadmin.site/storage/events-images/').$event->image_name}}" alt="event image">
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
                        <div class="widget widget--category">
                            <div class="widget__heading">
                                <h4 class="widget__title">CATEGORY</h4>
                            </div>
                            <div class="widget__text-content">
                                <ul>
                                    @foreach ($categories as $category)
                                    <li><a href="{{ route('news-category', ['category'=>$category->slug]) }}" class="pdr10">{{$category->category}}</a><span class="post-count">{{$category->total}}</span></li>                                                                            
                                    @endforeach
                                </ul>

                            </div>
                        </div>  
                        <div class="widget widget--tags">
                            <div class="widget__heading">
                                <h4 class="widget__title">POPULAR TAGS</h4>
                            </div>
                            <div class="widget__text-content">
                                @foreach ($popular_tags as $popular_tag)
                                <a href="{{ route('news-tags', ['tagged'=>$popular_tag->slug]) }}">{{$popular_tag->name}}</a>                                    
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=2132071700377039&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- == Counter == -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- == Countdown == -->
    <script src="{{ asset('js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
@endsection