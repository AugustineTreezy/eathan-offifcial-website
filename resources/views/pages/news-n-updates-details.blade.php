@extends('layouts.app')

@section('nav')
    @include('layouts.inc.pages-nav')    
@endsection

@section('styles')
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5b94e42e91dd550011906420&product=sticky-share-buttons' async='async'></script>
@endsection

@section('content')
   <div class="banner-area banner-area--blog all-text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">BLOG DETAILS</h1>
                    <ul class="fund-breadcumb">
                        <li><a href="index.html">Home</a> </li>
                        <li><a href="blog-details.html">Blog details</a> </li>
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
                                <img src="{{$newz->ratio_image_url}}" width="750" style="border-top-left-radius: 10px; border-top-right-radius: 10px" alt="blog details">
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
                                <a href="#" class="previous-post">Previous Post</a>
                                <a href="#" class="next-post pull-right" >Next Post</a>
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
                                        <a href="{{ url('/news-and-updates/') }}/{{$item->slug}}"><img class="widget-latest-causes__thubnail" style="border-radius: 5px;" src="{{$item->forced_image_url}}" alt=""></a>
                                    </div>
                                    <div class="widget-latest-causes__text-content">
                                        <h4 class="widget-latest-causes__title"><a href="{{ url('/news-and-updates/') }}/{{$item->slug}}">{{ str_limit($item->title, $limit = 35, $end = '...') }}</a></h4>
                                        <div class="widget-latest-causes__time text-mute">
                                            10 Minutes Ago
                                        </div>
                                    </div>
                                </div><!--/.widget-more-news-->    
                                @endforeach                                
                            </div>
                        </div>
                        <div class="widget widget--category">
                            <div class="widget__heading">
                                <h4 class="widget__title">CATAGORY</h4>
                            </div>
                            <div class="widget__text-content">
                                <ul>
                                    <li><a href="#" class="pdr10">Africa</a><span class="post-count">4</span></li>
                                    <li><a href="#" class="pdr10">East Africa</a><span class="post-count">7</span></li>
                                    <li><a href="#" class="pdr10">International</a><span class="post-count">2</span></li>
                                    <li><a href="#" class="pdr10">Kenya</a><span class="post-count">5</span></li>
                                    <li><a href="#" class="pdr10">Lesotho</a><span class="post-count">3</span></li>
                                    <li><a href="#" class="pdr10">South Africa </a><span class="post-count">2</span></li>
                                    <li><a href="#" class="pdr10">Tanzania</a><span class="post-count">3</span></li>
                                    <li><a href="#" class="pdr10">Uganda</a><span class="post-count">3</span></li>
                                </ul>

                            </div>
                        </div>
                        
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
                        <div class="widget widget--tags">
                            <div class="widget__heading">
                                <h4 class="widget__title">TAG</h4>
                            </div>
                            <div class="widget__text-content">
                                <a href="#">Charity</a>
                                <a href="#">Helth</a>
                                <a href="#">Hospital</a>
                                <a href="#">iOS</a>
                                <a href="#">Doctor</a>
                                <a href="#">Donat</a>
                                <a href="#">Medical</a>
                                <a href="#">Children</a>
                                <a href="#">Clinic</a>
                                <a href="#">Helping</a>
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
                    this.page.url = "{{ url('/news-and-updates') }}";  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = "{{$page_url}}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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