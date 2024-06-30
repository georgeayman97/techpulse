@php
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
@endphp
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo"><a class="icon-masking" href="{{ route('home') }}">
                <img class="logo-techpulse"
                     src="{{ asset('assets/media/header no fill@2x.png') }}"
                     alt="TechPulse Solutions"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="{{ route('home') }}">@lang('lang.Home')</a></li>
                <li><a href="{{ route('about-us') }}">@lang('lang.About Us')</a></li>
                <li><a href="{{ route('service') }}">@lang('lang.Services')</a></li>
                <li><a href="{{ route('projects') }}">@lang('lang.Projects')</a></li>
                @if(LaravelLocalization::getCurrentLocale() == "en")
                    <li class="menu-item-has-children"><a>@lang('lang.ENGLISH')</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ LaravelLocalization::getLocalizedURL("sw", null, [], true) }}">@lang('lang.SWEDISH')</a>
                            </li>
                            <li>
                                <a href="{{ LaravelLocalization::getLocalizedURL("sp", null, [], true) }}">@lang('lang.SPANISH')</a>
                            </li>
                        </ul>
                    </li>
                @elseif(LaravelLocalization::getCurrentLocale() == "sw")
                    <li class="menu-item-has-children"><a>@lang('lang.SWEDISH')</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ LaravelLocalization::getLocalizedURL("en", null, [], true) }}">@lang('lang.ENGLISH')</a>
                            </li>
                            <li>
                                <a href="{{ LaravelLocalization::getLocalizedURL("sp", null, [], true) }}">@lang('lang.SPANISH')</a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="menu-item-has-children"><a>@lang('lang.SPANISH')</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ LaravelLocalization::getLocalizedURL("en", null, [], true) }}">@lang('lang.ENGLISH')</a>
                            </li>
                            <li>
                                <a href="{{ LaravelLocalization::getLocalizedURL("sw", null, [], true) }}">@lang('lang.SWEDISH')</a>
                            </li>
                        </ul>
                    </li>
                @endif
                <li><a href="contact.html">@lang('lang.Contact')</a></li>
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
                        <div class="header-logo"><a class="icon-masking" href="{{ route('home') }}">
                                <img class="logo-techpulse"
                                     src="{{ asset('assets/media/header no fill@2x.png') }}"
                                     alt="TechPulse Solutions"></a></div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="{{ route('home') }}">@lang('lang.Home')</a></li>
                                <li><a href="{{ route('about-us') }}">@lang('lang.About Us')</a></li>
                                <li><a href="{{ route('service') }}">@lang('lang.Services')</a></li>
                                <li><a href="{{ route('projects') }}">@lang('lang.Projects')</a></li>
                                @if(LaravelLocalization::getCurrentLocale() == "en")
                                    <li class="menu-item-has-children"><a>@lang('lang.ENGLISH')</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ LaravelLocalization::getLocalizedURL("sw", null, [], true) }}">@lang('lang.SWEDISH')</a>
                                            </li>
                                            <li>
                                                <a href="{{ LaravelLocalization::getLocalizedURL("sp", null, [], true) }}">@lang('lang.SPANISH')</a>
                                            </li>
                                        </ul>
                                    </li>
                                @elseif(LaravelLocalization::getCurrentLocale() == "sw")
                                    <li class="menu-item-has-children"><a>@lang('lang.SWEDISH')</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ LaravelLocalization::getLocalizedURL("en", null, [], true) }}">@lang('lang.ENGLISH')</a>
                                            </li>
                                            <li>
                                                <a href="{{ LaravelLocalization::getLocalizedURL("sp", null, [], true) }}">@lang('lang.SPANISH')</a>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="menu-item-has-children"><a>@lang('lang.SPANISH')</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ LaravelLocalization::getLocalizedURL("en", null, [], true) }}">@lang('lang.ENGLISH')</a>
                                            </li>
                                            <li>
                                                <a href="{{ LaravelLocalization::getLocalizedURL("sw", null, [], true) }}">@lang('lang.SWEDISH')</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
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
