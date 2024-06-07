@php
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
@endphp

<div class="header-area @if(!Route::is('home')) inner-style @endif" id="sticky-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="header-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-1.png') }}" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="header-menu">
                    <ul>
                        <li class="@if(Route::is('home')) active @endif"><a
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li><a href="{{ route('about-us') }}">About</a></li>
                        <li><a href="{{ route('service') }}">Services</a></li>
                        <li><a href="{{ route('projects') }}">Our Work</a></li>
                        @if(LaravelLocalization::getCurrentLocale() == "en")
                            <li class="menu-item-has-children"><a
                                    href="{{ LaravelLocalization::getLocalizedUrl("en",null,[],true) }}">English<i
                                        class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ LaravelLocalization::getLocalizedUrl("sw",null,[],true) }}">Swedish</a>
                                    </li>
                                    <li>
                                        <a href="{{ LaravelLocalization::getLocalizedUrl("sp",null,[],true) }}">Spanish</a>
                                    </li>
                                </ul>
                            </li>
                        @elseif(LaravelLocalization::getCurrentLocale() == "sw")
                            <li class="menu-item-has-children"><a
                                    href="{{ LaravelLocalization::getLocalizedUrl("sw",null,[],true) }}">Swedish<i
                                        class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ LaravelLocalization::getLocalizedUrl("en",null,[],true) }}">English</a>
                                    </li>
                                    <li>
                                        <a href="{{ LaravelLocalization::getLocalizedUrl("sp",null,[],true) }}">Spanish</a>
                                    </li>
                                </ul>
                            </li>
                        @elseif(LaravelLocalization::getCurrentLocale() == "sp")
                            <li class="menu-item-has-children"><a
                                    href="{{ LaravelLocalization::getLocalizedUrl("sp",null,[],true) }}">Spanish<i
                                        class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ LaravelLocalization::getLocalizedUrl("en",null,[],true) }}">English</a>
                                    </li>
                                    <li>
                                        <a href="{{ LaravelLocalization::getLocalizedUrl("sw",null,[],true) }}">Swedish</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                    <div class="header-button">
                        <a href="{{ route('contact-us.create') }}">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
    <div class="mobile-menu">
        <nav class="header-menu">
            <ul class="nav_scroll">
                <li class="@if(Request::url() == route('home')) active @endif"><a href="{{ route('home') }}">Home</a>
                </li>
                <li><a href="{{ route('about-us') }}">About</a></li>
                <li><a href="{{ route('service') }}">Services</a></li>
                <li><a href="{{ route('projects') }}">Our Work</a></li>
                <li class="menu-item-has-children"><a href="#">English<i class="fas fa-chevron-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="blog-grid.html">Arabic</a></li>
                        <li><a href="blog-details.html">Spanish</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact-us.create') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
