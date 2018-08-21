@extends('layouts.app')

@section('nav')
    @include('layouts.inc.pages-nav')    
@endsection

@section('content')
    <div class="banner-area banner-area--about-us all-text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">About Us</h1>
                    <ul class="fund-breadcumb">
                        <li><a href="index.html">Home</a> </li>
                        <li><a href="about-us.html">About</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="body-overlay"></div>
    <section class="section-padding ash-white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title">Welcome to  <span class="base-color">The Fund</span> </h2>
                        <span class="section-sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span>
                        <div class="section-heading-separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us-carousel mb30">
                        <div>
                            <img src="images/about/carousel1.jpg" alt="">
                        </div>
                        <div>
                            <img src="images/about/carousel2.jpg" alt="">
                        </div>
                        <div>
                            <img src="images/about/carousel3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-us-text-content mb30">
                        <h4>WE ARE NON PROFIT TEAM</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="fund-arrow-left-list pdb10">
                            <li>Charity sees the need not the cause</li>
                            <li>Be devoted to one another in brotherly love</li>
                            <li>Feed the hungry, and help those in trouble</li>
                            <li>Distributing to the necessity of saints given to hospitality</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        <a href="#" class="btn base-bg">Donet Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="counter-section all-text-white section-padding">
        <div class="container">
            <div class="row pdt15">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-item">
                        <div class="counter-item__icon-wrap">
                            <img src="images/about/icon-maney.png" class="counter-item__icon" alt="">
                            <span class="counter-item__label">Donation</span>
                        </div>
                        <div class="counter-item__count-wrap">
                            $ <span class="counter-item__count">1700</span>K
                        </div>
                    </div><!--/.counter-item-->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-item">
                        <div class="counter-item__icon-wrap">
                            <img src="images/about/icon-hand.png" class="counter-item__icon" alt="">
                            <span class="counter-item__label">Volunteers</span>
                        </div>
                        <div class="counter-item__count-wrap">
                            <span class="counter-item__count">250</span>+
                        </div>
                    </div><!--/.counter-item-->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-item">
                        <div class="counter-item__icon-wrap">
                            <img src="images/about/icon-man.png" class="counter-item__icon" alt="">
                            <span class="counter-item__label">Helped People</span>
                        </div>
                        <div class="counter-item__count-wrap">
                            <span class="counter-item__count">4000</span>+
                        </div>
                    </div><!--/.counter-item-->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-item">
                        <div class="counter-item__icon-wrap">
                            <img src="images/about/icon-country.png" class="counter-item__icon" alt="">
                            <span class="counter-item__label">Countries</span>
                        </div>
                        <div class="counter-item__count-wrap">
                            <span class="counter-item__count">20</span>+
                        </div>
                    </div><!--/.counter-item-->
                </div>
            </div>
        </div>
    </section>
    <section class="volunteer-section section-padding ash-white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title">Our <span class="base-color">VOLUNTEERS</span> </h2>
                        <span class="section-sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span>
                        <div class="section-heading-separator"></div>
                    </div>
                </div>
            </div>
            <div class="row row-eq-rs-height">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="fund-volunteer text-center">
                        <div class="fund-volunteer__photo-wrap">
                            <img src="images/home/vol-1.jpg" class="img-circle fund-volunteer__photo" alt="volunteer">
                        </div>
                        <div class="fund-volunteer__text-content">
                            <h3 class="fund-volunteer__name">PETERSON SMITH</h3>
                            <div class="section-heading-separator section-heading-separator--small"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur the and adipiscing elit, sed do eiusmod temp  labore et dolore magna aliqua for</p>
                            <ul class="list-inline round-social-icons mb30">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div><!--/.fund-volunteer-->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="fund-volunteer text-center">
                        <div class="fund-volunteer__photo-wrap">
                            <img src="images/home/vol-2.jpg" class="img-circle fund-volunteer__photo" alt="volunteer">
                        </div>
                        <div class="fund-volunteer__text-content">
                            <h3 class="fund-volunteer__name">SERENA SANION</h3>
                            <div class="section-heading-separator section-heading-separator--small"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur the and adipiscing elit, sed do eiusmod temp  labore et dolore magna aliqua for</p>
                            <ul class="list-inline round-social-icons mb30">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div><!--/.fund-volunteer-->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="fund-volunteer text-center">
                        <div class="fund-volunteer__photo-wrap">
                            <img src="images/home/vol-3.jpg" class="img-circle fund-volunteer__photo" alt="volunteer">
                        </div>
                        <div class="fund-volunteer__text-content">
                            <h3 class="fund-volunteer__name">PETERSON SMITH</h3>
                            <div class="section-heading-separator section-heading-separator--small"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur the and adipiscing elit, sed do eiusmod temp  labore et dolore magna aliqua for</p>
                            <ul class="list-inline round-social-icons mb30">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div><!--/.fund-volunteer-->
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title">WHAT PEOPLE  <span class="base-color">SAY</span> </h2>
                        <span class="section-sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span>
                        <div class="section-heading-separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="fund-testimonial-carousel">
                        <div class="fund-testimonial">
                            <div class="fund-testimonial__quote base-bg">
                                Lorem ipsum dolor sit amet, consectetur adipi is scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim  minim veniam, quis nostrud exercitation.
                            </div>
                            <div class="fund-testimonial__author">
                                <div class="fund-testimonial__author-image">
                                    <img src="images/home/testimonial-1.jpg" alt="">
                                </div>
                                <div class="fund-testimonial__author-text">
                                    <h4 class="fund-testimonial__author-name">JAMES WATSON</h4>
                                    <span class="fund-testimonial__designation">Donator</span>
                                </div>
                            </div>
                        </div>
                        <div class="fund-testimonial">
                            <div class="fund-testimonial__quote base-bg">
                                Lorem ipsum dolor sit amet, consectetur adipi is scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim  minim veniam, quis nostrud exercitation.
                            </div>
                            <div class="fund-testimonial__author">
                                <div class="fund-testimonial__author-image">
                                    <img src="images/home/testimonial-2.jpg" alt="">
                                </div>
                                <div class="fund-testimonial__author-text">
                                    <h4 class="fund-testimonial__author-name">DELAINE FEGLEY</h4>
                                    <span class="fund-testimonial__designation">Donator</span>
                                </div>
                            </div>
                        </div>
                        <div class="fund-testimonial">
                            <div class="fund-testimonial__quote base-bg">
                                Lorem ipsum dolor sit amet, consectetur adipi is scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim  minim veniam, quis nostrud exercitation.
                            </div>
                            <div class="fund-testimonial__author">
                                <div class="fund-testimonial__author-image">
                                    <img src="images/home/testimonial-3.jpg" alt="">
                                </div>
                                <div class="fund-testimonial__author-text">
                                    <h4 class="fund-testimonial__author-name">TONI MARSAL</h4>
                                    <span class="fund-testimonial__designation">Donator</span>
                                </div>
                            </div>
                        </div>
                        <div class="fund-testimonial">
                            <div class="fund-testimonial__quote base-bg">
                                Lorem ipsum dolor sit amet, consectetur adipi is scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim  minim veniam, quis nostrud exercitation.
                            </div>
                            <div class="fund-testimonial__author">
                                <div class="fund-testimonial__author-image">
                                    <img src="images/home/testimonial-1.jpg" alt="">
                                </div>
                                <div class="fund-testimonial__author-text">
                                    <h4 class="fund-testimonial__author-name">JAMES WATSON</h4>
                                    <span class="fund-testimonial__designation">Donator</span>
                                </div>
                            </div>
                        </div>
                        <div class="fund-testimonial">
                            <div class="fund-testimonial__quote base-bg">
                                Lorem ipsum dolor sit amet, consectetur adipi is scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim  minim veniam, quis nostrud exercitation.
                            </div>
                            <div class="fund-testimonial__author">
                                <div class="fund-testimonial__author-image">
                                    <img src="images/home/testimonial-2.jpg" alt="">
                                </div>
                                <div class="fund-testimonial__author-text">
                                    <h4 class="fund-testimonial__author-name">TONI MARSAL</h4>
                                    <span class="fund-testimonial__designation">Donator</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sponser-section section-padding ash-white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title">OUr  <span class="base-color">Sponsors</span> </h2>
                        <span class="section-sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span>
                        <div class="section-heading-separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="client-carusel">
                        <div class="carusel-item">
                            <img src="images/home/client1.png" alt="">
                        </div>
                        <div class="carusel-item">
                            <img src="images/home/client2.png" alt="">
                        </div>
                        <div class="carusel-item">
                            <img src="images/home/client3.png" alt="">
                        </div>
                        <div class="carusel-item">
                            <img src="images/home/client4.png" alt="">
                        </div>
                        <div class="carusel-item">
                            <img src="images/home/client5.png" alt="">
                        </div>
                        <div class="carusel-item">
                            <img src="images/home/client6.png" alt="">
                        </div>
                        <div class="carusel-item">
                            <img src="images/home/client2.png" alt="">
                        </div>
                        <div class="carusel-item">
                            <img src="images/home/client1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- == Counter == -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
@endsection