@extends('layouts.app')

@section('nav')
    @include('layouts.inc.pages-nav')    
@endsection

@section('content')
    <div class="banner-area banner-area--contact all-text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">CONTACT US</h1>
                    <ul class="fund-breadcumb">
                        <li><a href="{{ route('home') }}">Home</a> </li>
                        <li><a href="{{ route('contact') }}">Contact Us</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

   <div class="body-overlay"></div>
    <section class="section-padding">
        <div class="col-md-12">
            <div class="section-heading text-center">
                <h2 class="section-title">Get in <span class="base-color">touch</span> </h2>
                <span class="section-sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span>
                <div class="section-heading-separator"></div>
            </div>
        </div>
        <div class="container no-padding">
            <div class="main-contact">
                <form class="contact-form">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" name="name" placeholder="Name" class="input-group__input form-control" required/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="email" name="email" placeholder="email" class="input-group__input form-control" required/>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="text"  name="subject"  placeholder="Subject" class="input-group__input form-control" required/>
                    </div>
                    <div class="input-group">
                        <textarea  name="message"  class="input-group__textarea form-control" placeholder="Message" rows="8" cols="80"></textarea>
                    </div>
                    <input type="submit" class="btn base-bg" value="Submit">
                    <span class="text-mute pdl15">* All fields are mandatory</span>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- == Google Maps == -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyBO5Else2rW4UNyXiCMp3y20JV7BseTMys"></script>
    <script src="{{ asset('js/jquery.mapit.min.js') }}"></script>
    <script src="{{ asset('js/map-init.js') }}"></script>
@endsection