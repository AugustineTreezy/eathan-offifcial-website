@extends('layouts.app')

@section('nav')
    @include('layouts.inc.pages-nav')    
@endsection

@section('styles')
    <!-- Countdown css-->
    <link rel="stylesheet" href="{{ asset('css/jquery.countdown.css') }}">
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5b94e42e91dd550011906420&product=sticky-share-buttons' async='async'></script>
    <style>
        .sharethis-inline-share-buttons{
            margin-left: 0;
            padding-block-start: 0;
            padding-left: 0;
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
                        <li><a href="{{ route('news-home') }}">News</a> </li>
                        <li>News details </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-details">
                        <div class="blog-details-top mb40">
                            <div class="blog-details-image mb10">
                                <img src="{{ url('http://eathanadmin.site/storage/news-images/').'/'.$newz->image_name}}" width="750" style="border-top-left-radius: 10px; border-top-right-radius: 10px" alt="blog details">
                            </div>
                            <div class="blog-details-top__text-content">
                                <h3 class="blog-details__title">{{$newz->title}}</h3>
                                <div class="blog-details__meta">
                                    <div class="blog-details__meta-item base-color"><i class="fa fa-calendar pdr5"></i>{{date("jS F", strtotime($newz->created_at))}}</div>
                                    <div class="blog-details__meta-item base-color"><i class="fa fa-comments-o pdr5"></i><a href="#disqus_thread" class="base-color">0 comments</a></div>
                                </div><br>
                                <div class="sharethis-inline-share-buttons"></div>
                            </div>
                        </div>
                        {!! $newz->body !!}
                        <br><br>
                        <div class="social-icons ">
                            <span>Follow Us On : </span>
                            <ul class="list-inline pdl20">
                                <li><a href="#"><i class="fa fa-facebook"></i> </a> </li>
                                <li><a href="#"><i class="fa fa-twitter"></i> </a> </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> </a> </li>
                                <li><a href="#"><i class="fa fa-instagram"></i> </a> </li>
                                <li><a href="#"><i class="fa fa-vk"></i> </a> </li>
                                <li><a href="#"><i class="fa fa-pinterest"></i> </a> </li>
                            </ul>
                        </div>
                        <div class="blog-details-bottom mt40">
                            <div class="blog-details-navigation mt35 mb50">
                                @if ($previous==NULL)
                                <a href="javascript:void(0)" class="previous-post">Previous Post</a>                                    
                                @else
                                <a href="{{ route('news-details', ['slug'=>$previous->slug]) }}" class="previous-post">Previous Post</a>                                    
                                @endif  
                                
                                @if ($next==NULL)
                                <a href="javascript:void(0)" class="next-post pull-right" >Next Post</a>                              
                                @else
                                <a href="{{ route('news-details', ['slug'=>$next->slug]) }}" class="next-post pull-right" >Next Post</a>                                    
                                @endif                                                                      
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <aside class="sidebar">
                        <div class="widget">
                            <div class="widget__heading">
                                <h4 class="widget__title">MORE <span class="base-color">NEWS</span></h4>
                            </div>
                            <div class="widget__text-content">
                                @foreach ($more_newz as $item)
                                <div class="widget-latest-causes">
                                    <div class="widget-latest-causes__image-wrap">
                                        <a href="{{ route('news-details', ['slug'=>$item->slug]) }}"><img class="widget-latest-causes__thubnail" height="90" style="border-radius: 5px;" src="{{ url('http://eathanadmin.site/storage/news-images/').'/'.$item->image_name}}" alt=""></a>
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
                        @if ($events)
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
                        @endif                                    
                        
                        <div class="widget widget--tags">
                            <div class="widget__heading">
                                <h4 class="widget__title">TAGS</h4>
                            </div>
                            <div class="widget__text-content">
                                @foreach ($newz->tagged as $tag)
                                <a href="{{ route('news-tags', ['tag'=>$tag->tag_slug]) }}">{{$tag->tag_name}}</a>                                    
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div id="disqus_thread"></div>
                    <script>

                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    */
                    var disqus_config = function () {
                    this.page.url = "{{ route('news-home') }}";  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = "{{ route('news-details', ['slug'=>$item->slug]) }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://eathan.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script id="dsq-count-scr" src="//eathan.disqus.com/count.js" async></script>
    <!-- == Counter == -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- == Countdown == -->
    <script src="{{ asset('js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
@endsection