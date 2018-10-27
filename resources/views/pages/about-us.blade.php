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
                        <h2 class="section-title">Welcome to  <span class="base-color">EATHAN</span> </h2>
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
                        <p><b>EATHAN – East Africa Trans Health & Advocacy Network</b> was formed in July 2016 after being conceptualized a year earlier at the 5th Changing Faces Changing Spaces Conference in June 2015. EATHAN was formed to fill the gap of regional trans health advocacy work in East Africa, to provide an East African voice for the trans movement in the region and most importantly to provide necessary support to East African trans individuals and organisations in terms of capacity building, income generating solutions as well as HIV/AIDS and STI access and research.</p>
                        
                        <h4 style="margin-bottom: 5px;">Our Mission</h4>
                        <p>Our mission is to equip and enable East African trans* diverse individuals and institutions, to organise and advocate for the improvement of their health, the recognition of their gender, and the protection of their human rights; utilising informed research and documentation, particularly on health and HIV, and by enhancing their livelihoods through capacity strengthening and empowerment.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>Our Vission</h4>
                    <p>We envision a world where all trans* humans live their lives free from stigma and discrimination.</p>
                    <h4>Membership</h4>
                    <p>Ours is a collective of trans* individuals and organisations in East Africa.</p>
                </div>
            </div>
        </div>
    </section>
    

    <section class="volunteer-section section-padding white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title">Steering <span class="base-color">Committee</span> </h2>
                        <span class="section-sub-title">EATHAN is governed by a Steering Committee consisting of 5 East African trans*diverse persons; each representing their country and their community. They are:</span>
                        <div class="section-heading-separator"></div>
                    </div>
                </div>
            </div>
            <div class="row row-eq-rs-height">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="fund-volunteer text-center">
                        <div class="fund-volunteer__photo-wrap">
                            <img src="images/about/female.png" class="img-circle fund-volunteer__photo" alt="volunteer">
                        </div>
                        <div class="fund-volunteer__text-content">
                            <h3 class="fund-volunteer__name">Maya Ingabire</h3>
                            <div class="section-heading-separator section-heading-separator--small"></div>
                            <h5><i class="fa fa-universal-access"></i> TIA – Transgender & Intersex in Action <br>
                                <i class="fa fa-map-marker"></i> Burundi
                            </h5>
                            <p>Maya is a trans*diverse woman from Burundi (to be updated)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="fund-volunteer text-center">
                        <div class="fund-volunteer__photo-wrap">
                            <img src="images/about/male.png" class="img-circle fund-volunteer__photo" alt="volunteer">
                        </div>
                        <div class="fund-volunteer__text-content">
                            <h3 class="fund-volunteer__name">Jay Mulucha</h3>
                            <div class="section-heading-separator section-heading-separator--small"></div>
                            <h5><i class="fa fa-universal-access"></i> FEMA – Fem Alliance Uganda<br>
                                <i class="fa fa-map-marker"></i> Uganda
                            </h5>
                            <p>Jay is a trans*diverse man from Uganda (to be updated)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="fund-volunteer text-center">
                        <div class="fund-volunteer__photo-wrap">
                            <img src="images/about/male.png" class="img-circle fund-volunteer__photo" alt="volunteer">
                        </div>
                        <div class="fund-volunteer__text-content">
                            <h3 class="fund-volunteer__name">Madoxy Madine</h3>
                            <div class="section-heading-separator section-heading-separator--small"></div>
                            <h5><i class="fa fa-universal-access"></i> RIFA – Rights For All <br>
                                <i class="fa fa-map-marker"></i> Rwanda
                            </h5>
                            <p>Madoxy is a trans*diverse man from Rwanda (to be updated)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="fund-volunteer text-center">
                        <div class="fund-volunteer__photo-wrap">
                            <img src="images/about/male.png" class="img-circle fund-volunteer__photo" alt="volunteer">
                        </div>
                        <div class="fund-volunteer__text-content">
                            <h3 class="fund-volunteer__name">Arnest Thiaya</h3>
                            <div class="section-heading-separator section-heading-separator--small"></div>
                            <h5><i class="fa fa-universal-access"></i> Jinsiangu & TEA – Transgender Education & Advocacy <br>
                                <i class="fa fa-map-marker"></i> Kenya
                            </h5>
                            <p>Thiaya is a trans*diverse man from Kenya (to be updated)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="fund-volunteer text-center">
                        <div class="fund-volunteer__photo-wrap">
                            <img src="images/about/female.png" class="img-circle fund-volunteer__photo" alt="volunteer">
                        </div>
                        <div class="fund-volunteer__text-content">
                            <h3 class="fund-volunteer__name">Marvelous Moffat</h3>
                            <div class="section-heading-separator section-heading-separator--small"></div>
                            <h5><i class="fa fa-universal-access"></i> HEAT – House of Empowerment and Awareness in Tanzania<br>
                                <i class="fa fa-map-marker"></i> Tanzania
                            </h5>
                            <p>Marvelous is a trans*diverse woman from Tanzania (to be updated)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="volunteer-section section-padding ash-white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title">Staff</h2>
                        <div class="section-heading-separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>Barbra Wangare Muruga | Executive Director</h4>
                    <p>Barbra is a queer African feminist social justice worker and activist from Kenya, East Africa. She is the Executive Director of EATHAN – East Africa Trans Health & Advocacy Network; a network of intersex, trans* and gender non-conforming (ITGNC) individuals and organisations in East Africa. She has over 7 years of experience working on and with intersex, trans* and gender non-conforming individuals and organisations across the African continent and has been instrumental in the growth of the movement. Her passion towards improving the livelihoods of all ITGNC persons in the region is what drives her.</p>
                    <h4>Dalziel Leone | Programme Director</h4>
                    <h4>J Tichie Tirop | Programme Manager</h4>
                    <h4>Brandy Akoth | Admin Assistant</h4>
                    <h4>Sidney Etemesi | Intersex Programme Assistant</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="sponser-section section-padding white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title">OUr  <span class="base-color">Sponsors</span> </h2>
                        <div class="section-heading-separator"></div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="client-carusel">
                        <div class="carusel-item">
                            <img src="images/about/hivalliance-logo.png" alt="hivalliance-logo">
                        </div>
                        <div class="carusel-item">
                            <img src="images/about/uhai-logo.png" alt="uhai-logo">
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