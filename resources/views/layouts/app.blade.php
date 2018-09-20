<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>East Africa Trans Health & Advocacy Network</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ================= Favicon ================== -->
    <link rel="icon" sizes="72x72" href="{{asset('images/favicon-96x96.png')}}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900%7COpen+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Font Awesome css-->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Bootsrap css-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Magnific Popup-->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
    <!-- REVOLUTION SLIDER STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/navigation.css')}}">
    <!-- Animate css-->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Style-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Modernizr-->
    <script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>

    @yield('styles')
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="preloader">
        <div class="loader-inner ball-scale-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
  
    <header class="fund-header">
        <div class="top-bar base-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-6 text-xs-center">
                        <div class="top-bar__contact">
                            <i class="fa fa-envelope"></i> <span class="pdl5">info@eathan.com</span>
                            <span class="pdl15 pdr15">|</span>
                            <i class="fa fa-phone-square"></i> <span class="pdl5">+880 1234 2547 89</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 text-right text-xs-center">
                        <div class="social-icons ">
                            <ul class="list-inline pdl20">
                                <li><a href="#"><i class="fa fa-facebook"></i> </a> </li>
                                <li><a href="#"><i class="fa fa-twitter"></i> </a> </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> </a> </li>
                                <li><a href="#"><i class="fa fa-instagram"></i> </a> </li>
                                <li><a href="#"><i class="fa fa-vk"></i> </a> </li>
                                <li><a href="#"><i class="fa fa-pinterest"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="mobile-background-nav">
        <div class="mobile-inner">
            <span class="mobile-menu-close"><i class="icon-icomooon-close"></i></span>
            <ul class="menu-accordion">
                <li><a href="/">Home </a></li>
                <li><a href="/news-and-updates" class="has-submenu">News & Updates<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="/News-and-updates/internationl">Interntional</a></li>
                        <li><a href="/News-and-updates/africa">Africa</a></li>
                    </ul>
                </li>
                <li><a href="/what-we-do">What we do</a></li>
                <li><a href="/downloads">Downloads</a></li>
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/contact">Contact</a></li>
           </ul>
        </div>
    </nav>
    @yield('nav') 
    @yield('content')

    <footer class="fund-footer">
        <div class="main-footer all-text-white section-padding">
            <div class="container">
                <div class="row row-eq-rs-height">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="widget widget--footer widget--userfull-link">
                            <div class="widget__heading">
                                <h4 class="widget__title">USEFULL LINKS</h4>
                            </div>
                            <div class="widget__text-content">
                                <ul>
                                    <li>Join our volunteer team.</li>
                                    <li>Read our Letest News.</li>
                                    <li>Check the upcoming Events.</li>
                                    <li>Watch Our Mission.</li>
                                    <li>Privacy & cookies policy.</li>
                                </ul>
                            </div>
                        </div><!--/.widget-->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="widget widget--footer widget--contact">
                            <div class="widget__heading">
                                <h4 class="widget__title">QUICK CONTACT</h4>
                            </div>
                            <div class="widget__text-content">
                                <div class="contact-way">
                                    <span class="base-bg contact-icon"><i class="fa fa-location-arrow"></i></span>
                                    <span class="contact-text">310, Fleischmanns, NY, 12430</span>
                                </div>
                                <div class="contact-way">
                                    <span class="base-bg contact-icon"><i class="fa fa-phone"></i></span>
                                    <span class="contact-text">+8801 2345 12456</span>
                                </div>
                                <div class="contact-way">
                                    <span class="base-bg contact-icon"><i class="fa fa-envelope-o"></i></span>
                                    <span class="contact-text">info@eathan.com</span>
                                </div>
                                <div class="social-icons pdt5">
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
                            </div>
                        </div><!--/.widget-->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="widget widget--footer widget--userfull-link">
                            <div class="widget__heading">
                                <h4 class="widget__title">NEWSLETTERS</h4>
                            </div>
                            <div class="widget__text-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicingse elit do eiusmod.</p>
                                <form class="newsletter-form">
                                    <input type="email" placeholder="Your email address" class="form-control newsletter-form__input" />
                                    <input type="submit"  value="JOIN US" class="btn base-bg newsletter-form__submit">
                                </form>
                            </div>
                        </div><!--/.widget-->
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area all-text-white pdt25 pdb25">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="copyright-text text-xs-center">
                            Copyright &copy; 2018. All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <ul class="footer-menu text-xs-center">
                            <li><a href="/about-us">About</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" id="toTop" class="cd-top"><i class="fa fa-angle-up"></i></a>
    </footer>
    <!-- // End Footer  -->
    <!-- == jQuery Librery == -->
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <!-- == Bootsrap js File == -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- == mixitup == -->
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <!-- == Select 2 == -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <!-- == Color box == -->
    <script src="{{asset('js/jquery.colorbox-min.js')}}"></script>
    <!-- == Slick == -->
    <script src="{{asset('js/slick.min.js')}}"></script>    
    @yield('scripts')    
    <!-- == custom Js File == -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>