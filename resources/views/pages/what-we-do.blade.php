@extends('layouts.app')

@section('nav')
    @include('layouts.inc.pages-nav')    
@endsection

@section('styles')
    <!-- Countdown css-->
    <link rel="stylesheet" href="{{ asset('css/jquery.countdown.css') }}">
    <style>
    .achievements ul,
    .achievements li {
    padding: 0;
    margin: 0;
    list-style: none;
    }

    .achievements ul {
    margin: 2em 0;
    }

    .achievements li {
    margin: 1em;
    margin-left: 3em;
    }

    .achievements li:before {
    content: '\f006';
    font-family: 'FontAwesome';
    float: left;
    margin-left: -1.5em;
    color: #AA00FF;
    }

    .sub li:before {
    content: '\f105';
    font-family: 'FontAwesome';
    float: left;
    margin-left: -1.5em;
    color: #AA00FF;
    }

    .achievements .link {
    font-size: 0.45em;
    }
    .content{
        margin-left: 55px;
    }
    .content-sub{
        margin-left: 25px;
    }
    </style>
    @endsection

@section('content')
   <div class="banner-area banner-area--blog all-text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">WHAT WE DO</h1>
                    <ul class="fund-breadcumb">
                        <li><a href="{{ route('home') }}">Home</a> </li>
                        <li><a href="{{ route('news-home') }}">What we do</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="section-padding feature-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title wow fadeInUpXsd" data-wow-duration=".7s" data-wow-delay=".1s">What we<span class="base-color"> do</span> </h2>
                        <div class="section-heading-separator wow fadeInUpXsd" data-wow-duration="1.1s" data-wow-delay=".1s"></div>
                    </div>
                </div>
            </div>
            <div class="row row-eq-rs-height">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-item wow fadeInUpSmd" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="feature-item__icon-wrap">
                            <i class="feature-item__icon fa fa-book"></i>
                        </div>
                        <h4 class="feature-item__title heading-label-four">REASERCH</h4>
                        <p>To provide an easily accessible body of knowledge on ITGNC people and issues in East Africa </p>
                    </div><!--/.feature-item-->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-item wow fadeInUpSmd" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="feature-item__icon-wrap">
                            <i class="feature-item__icon fa fa-cutlery"></i>
                        </div>
                        <h4 class="feature-item__title heading-label-four">CAPACITY STRENGTHENING</h4>
                        <p>To provide capacity strengthening and support to member organisations on advocacy and organisational management, growth and development </p>
                    </div><!--/.feature-item-->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-item wow fadeInUpSmd" data-wow-duration="1.5s" data-wow-delay=".6s">
                        <div class="feature-item__icon-wrap">
                            <i class="feature-item__icon fa fa-home"></i>
                        </div>
                        <h4 class="feature-item__title heading-label-four">REGIONAL HEALTH ADVOCACY</h4>
                        <p>To advocate for the availability of and access to health services and meaningful HIV programming for ITGNC persons in East Africa </p>
                    </div><!--/.feature-item-->
                </div>  
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="feature-item wow fadeInUpSmd" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="feature-item__icon-wrap">
                            <i class="feature-item__icon fa fa-sun-o"></i>
                        </div>
                        <h4 class="feature-item__title heading-label-four">REGIONAL ITGNC ADVOCACY</h4>
                        <p>To advocate for and create awareness on ITGNC issues, in collaboration with our members and focussing primarily on regional and continental platforms </p>
                    </div><!--/.feature-item-->
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="feature-item wow fadeInUpSmd" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="feature-item__icon-wrap">
                            <i class="feature-item__icon fa fa-gift"></i>
                        </div>
                        <h4 class="feature-item__title heading-label-four">REGIONAL MOVEMENT BUILDINGS</h4>
                        <p>To strengthen, mobilise and empower trans* diverse persons and organisations across the region towards growing a strong and responsive regional movement </p>
                    </div><!--/.feature-item-->
                </div>              
            </div>
        </div>
    </section>

    <section class="section-padding feature-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title wow fadeInUpXsd" data-wow-duration=".7s" data-wow-delay=".1s">Key<span class="base-color"> Achievements</span> </h2>                        
                        
                        <div class="section-heading-separator wow fadeInUpXsd" data-wow-duration="1.1s" data-wow-delay=".1s"></div>
                        <p>
                            Since inception in July 2016, EATHAN has seen tremendous growth in conducting and achieving its mandate. Some of our key achievements are:
                        </p>
                    </div>
                </div>
                <div class="col-md-12 achievements">
                <ul>
                    <h4><li>Developing of operating manual, policies and procedures </li></h4>
                    <p class="content">The purpose was to ultimately have operating manuals, policies and procedures that govern the way we do our work. The target population is the staff members and steering committee members who are all ITGNC. The results are that we now have working policies that govern our work and the impact is that we forsee a better work culture and environment that has less management struggles.</p>
                    <h4><li>Strategic planning </li></h4>
                    <p class="content"> We carried out a strategic planning process and meeting this year and the purpose was to come up with a strategic plan for the period of July 2017 to December 2020. The target population is again, our staff members and steering committee members who are all ITGNC. The outcome of this process was the strategic plan and the impact is that we forsee a future where we have accomplished what we were formed to do and ultimately contributed towards improving the livelihoods of ITGNC persons in East Africa. </p>
                    <h4><li>Access to Health & HIV Needs Assessment </li></h4>
                    <p class="content"> We have just received funding to conduct our first needs assessment test as is stipulated in our strategic plan. The needs assessment will look into how safety, security and other existential issues affect the ability to access HIV and health services for ITGNC persons in East Africa. The target population is about 200 ITGNC persons span across East Africa. The intended outcome is that we will have a report that will highlight these issues and will inform our programming as well as provide a baseline for future research projects. The envisioned impact is that we will be able to programme better for our community and ensure that our work is as connected to the community as possible. </p>
                    <h4><li>Beginning of RFSL Programme </li></h4>
                    <p class="content"> This year we have began implementing the RFSL Programme. The overall objective is “ITGNC individuals and organisations in East Africa are strengthened, mobilised and empowered towards growing a strong and responsive regional movement.” The funds will go towards strengthening the network’s ability to better perform its functions. It will mainly go towards local & international travel costs, internship, staff development, administration & personnel costs. The programme will run from 2018 to 2019.</p>
                    <h4><li>Continuous member engagement & technical assistance </li></h4>
                    <p class="content"> We continue to engage with our members through online platforms such as WhatsApp, Facebook, email and our website (www.eathan.org). We also continue to provide technical assistance using these platforms such as assisting new members in applying for funding, coming up with structures for better organisational management and assistance in providing letters of recommendation both to individuals and member organisations.</p>
                    <h4><li>Participation at Forums/Meetings/Trainings/Conferences </li></h4>
                    <p class="content"> Since inception, we have participated at several key events such as: 
                        <div class="content">
                            <b><li>2016</li></b>
                            <div class="content-sub sub">
                                <li>AIDS conference in July</li>
                                <li>Astraea CommsLabs in July</li>
                                <li>AWID Forum in September</li>
                                <li>AMSHeR Meeting in November</li>
                                <li>Iranti Meeting in November</li>
                                <li>ILGA World Conference in Dec</li>
                            </div>
                            <b><li>2017</li></b>
                            <div class="content-sub sub">
                                <li>3rd Africa Trans Conference in February</li>
                                <li>ESA Regional Combination Prevention Forum in March</li>
                                <li>KNCHR KP Convening in May</li>
                                <li>KNCHR SOGIE Forum in May</li>
                                <li>IRGT TEACH ToT in July</li>
                                <li>ARASA ARD in August</li>
                                <li>AKPEG Meeting in August</li>
                                <li>PTHC in September </li>
                            </div>
                            <b><li>2018</li></b>
                            <div class="content-sub sub">
                                <li>Gender & Sexual Diversity Training in January</li>
                                <li>1st Eastern Africa Harm Reduction Conference in February/March</li>
                            </div>
                        </div>
                    </p>
                
                </ul>
                </div>
            </div>
        </div>
    </section>
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