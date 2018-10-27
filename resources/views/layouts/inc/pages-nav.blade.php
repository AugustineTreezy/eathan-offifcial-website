    <nav class="mobile-background-nav">
        <div class="mobile-inner">
            <span class="mobile-menu-close"><i class="icon-icomooon-close"></i></span>
            <ul class="menu-accordion">
                <li><a href="{{ route('home') }}">Home </a></li>
                <li><a href="{{ route('news-home') }}" class="has-submenu">News & Updates<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="{{ route('news-category', ['category'=>'international']) }}">International</a></li>
                        <li><a href="{{ route('news-category', ['category'=>'africa']) }}">Africa</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('what-we-do') }}">What we do</a></li>
                <li><a href="/downloads">Downloads</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
           </ul>
        </div>
    </nav>
    <div class="main-menu-area">
        <div class="container">
            <div class="menu-logo">
                <div class="logo">
                    <a href="{{ route('home') }}" class="logo-index"><img src="{{ asset('images/logo.png') }}" alt="logo" width="150"/></a>
                </div>
                <nav id="easy-menu">
                    <ul class="menu-list">
                        <li><a href="{{ route('home') }}">Home </a></li>
                        <li><a href="{{ route('news-home') }}" class="has-submenu">News & Updates<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown">
                                <li><a href="{{ route('news-category', ['category'=>'international']) }}">International</a></li>
                                <li><a href="{{ route('news-category', ['category'=>'africa']) }}">Africa</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('what-we-do') }}">What we do</a></li>
                        <li><a href="/downloads">Downloads</a></li>
                        <li class="active"><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
                <div class="donate-button-wrap">
                    <a href="#" class="hidden-lg hidden-md" id="humbarger-icon"><i class="fa fa-bars"></i> </a>
                </div>
            </div>
        </div>
    </div>