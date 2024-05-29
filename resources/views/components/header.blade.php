@php use \Illuminate\Support\Facades\Request; @endphp
    <!-- Header start -->
<header id="header" class="navbar-fixed-top header4" role="banner">
    <div class="container">
        <div class="row">
            <!-- Logo start -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <a href="{{ LaravelLocalization::localizeURL(route('home')) }}">
                        <img class="img-responsive" src="{{ asset('assets2/images/logo-primary.png') }}" alt="logo"
                             width="300" height="100">
                    </a>
                </div>
            </div><!--/ Logo end -->
            <nav class="collapse navbar-collapse clearfix" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="@if(Request::url() == route('home')) active @endif">
                        <a href="{{ LaravelLocalization::localizeURL(route('home')) }}">Home</a>
                    </li>
                    <li class="dropdown @if(in_array(Request::url(),[route('about-us'),route('service')])) active @endif">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <i
                                class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="@if(Request::url() == route('about-us')) active @endif"><a
                                        href="{{ LaravelLocalization::localizeURL(route('about-us')) }}">About Us</a>
                                </li>
                                <li class="@if(Request::url() == route('service')) active @endif"><a
                                        href="{{ LaravelLocalization::localizeURL(route('service')) }}">Services</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="@if(Request::url() == route('projects')) active @endif">
                        <a href="{{ LaravelLocalization::localizeURL(route('projects')) }}">Our Projects</a>
                    </li>
                    <li class="@if(Request::url() == route('contact-us.create')) active @endif"><a
                            href="{{ LaravelLocalization::localizeURL(route('contact-us.create')) }}">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <i
                                class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li>
                                    <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale('en') }}">English</a>
                                </li>
                                <li>
                                    <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale('sw') }}">Swedish</a>
                                </li>
                                <li>
                                    <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale('sp') }}">Spanish</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav><!--/ Navigation end -->
        </div><!--/ Row end -->
    </div><!--/ Container end -->
</header>
<!--/ Header end -->
