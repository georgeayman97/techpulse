<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo"><a class="icon-masking" href="index.html"><span
                    data-mask-src="{{ asset('assets/img/logo.svg') }}"
                    class="mask-icon"></span><img
                    src="{{ asset('assets/img/logo.svg') }}" alt="Webteck"></a></div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="{{ route('home') }}">@lang('lang.Home')</a></li>
                <li><a href="{{ route('about-us') }}">@lang('lang.About Us')</a></li>
                <li><a href="{{ route('service') }}">@lang('lang.Services')</a></li>
                <li><a href="{{ route('projects') }}">@lang('lang.Projects')</a></li>
                <li class="menu-item-has-children"><a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="th-header header-layout1">
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo"><a class="icon-masking" href="index.html"><span
                                    data-mask-src="{{ asset('assets/img/logo.svg') }}" class="mask-icon"></span><img
                                    src="{{ asset('assets/img/logo.svg') }}" alt="Webteck"></a></div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="{{ route('home') }}">@lang('lang.Home')</a></li>
                                <li><a href="{{ route('about-us') }}">@lang('lang.About Us')</a></li>
                                <li><a href="{{ route('service') }}">@lang('lang.Services')</a></li>
                                <li><a href="{{ route('projects') }}">@lang('lang.Projects')</a></li>
                                <li class="menu-item-has-children"><a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-button">
                            <a href="{{ route('contact-us.create') }}"
                               class="th-btn style3 shadow-none">@lang('lang.Make Appointment')<i
                                    class="fas fa-arrow-right ms-1"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
</header>
