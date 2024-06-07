@extends('layouts.master')
@section('title','About')
@section('content')

    <div class="breadcumb-area" style="background: url({{ asset('assets/media/breadcumb-bg.jpg') }});
            background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h4>About Us</h4>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-area inner-style-two" style="
    background: url({{ asset('assets/images/about-inner/about-bg.jpg') }});
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: no-repeat;
    background-size: auto;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left">
                        <div class="about-thumb">
                            <img src="{{ asset('assets/media/about-thumb-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="abour-right">
                        <div class="section-title left inner-style">
                            <h4>IT Support for Business</h4>
                            <h1>About is Over 291+ Company</h1>
                            <h1>Business Solution.</h1>
                            <p class="section-desc">Monotonectaly provede granular markets and front markets dream it
                                company in
                                visualize strategic infomediaries am multimedia based models clean calender
                                task state of the art infrastructures for about business.</p>
                        </div>
                        <div class="about-single-box">
                            <div class="about-icon">
                                <img src="{{ asset('assets/images/about-inner/about-icon.png') }}" alt="">
                            </div>
                            <div class="about-box-content">
                                <h4>IT Management</h4>
                                <p>Proved granular markets dream team more based models clean.</p>
                            </div>
                        </div>
                        <div class="about-single-box">
                            <div class="about-icon">
                                <img src="{{ asset('assets/images/about-inner/about-icon.png') }}" alt="">
                            </div>
                            <div class="about-box-content">
                                <h4>IT Management</h4>
                                <p>Proved granular markets dream team more based models clean.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-single-button">
                        <a href="#">Our Services</a>
                    </div>
                    <div class="about-single-button">
                        <a href="#">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-area-info style-three" style="background: url({{ asset('assets/media/contact-bg.jpg') }}); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-icon">
                        <img src="{{ asset('assets/images/home-3/contact-icon.png') }}" alt="">
                    </div>
                    <div class="contact-content">
                        <h6>Call Us Anytime</h6>
                        <h1>+980 123 (4567) 890</h1>
                        <p>Professionally optimize interdependent intellectual interoperable
                            best practices. Progressively fabricate</p>
                    </div>
                    <div class="toptech-button inner-style">
                        <a href="#">Let’s Talk<i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-right">
                        <div class="contact-thumb">
                            <img src="{{ asset('assets/media/contact-thumb.png') }}" alt="">
                        </div>
                        <div class="contact-shape">
                            <img src="{{ asset('assets/images/home-3/contact-shape.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="feature-area style-three">
        <div class="container">
            <div class="row margin-top">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature-box">
                        <div class="feature-icon">
                            <img src="{{ asset('assets/images/home-3/feature-icon-1.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Business Growth</h4>
                            <p>Completely fashion reliable more products grow business</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature-box">
                        <div class="feature-icon">
                            <img src="{{ asset('assets/images/home-3/feature-icon-2.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>eCommerce</h4>
                            <p>Completely fashion reliable more products grow business</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature-box">
                        <div class="feature-icon">
                            <img src="{{ asset('assets/images/home-3/feature-icon-3.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Secure Database</h4>
                            <p>Completely fashion reliable more products grow business</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature-box">
                        <div class="feature-icon">
                            <img src="{{ asset('assets/images/home-3/feature-icon-4.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Audinece Growth</h4>
                            <p>Completely fashion reliable more products grow business</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-us-area inner-style"
         style="background: url({{ asset('assets/media/choose-us-bg.jpg') }}); margin-top: -160px;">
        <div class="container">
            <div class="row align-items-center" style="padding-top: 100px">
                <div class="col-lg-6">
                    <div class="choose-us-thumb">
                        <img src="{{ asset('assets/media/choose-us-thumb.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us-box">
                        <div class="choose-us-icon">
                            <img src="{{ asset('assets/media/choose-us-icon-1.png') }}" alt="">
                        </div>
                        <div class="choose-us-content">
                            <h4>Data Security</h4>
                            <p>Monotonectally synergize granular to front markets task state data security
                                semper maecenas ferform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us-box">
                        <div class="choose-us-icon">
                            <img src="{{ asset('assets/media/choose-us-icon-2.png') }}" alt="">
                        </div>
                        <div class="choose-us-content">
                            <h4>IT Services</h4>
                            <p>Monotonectally synergize granular to front markets task state data security
                                semper maecenas ferform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us-box">
                        <div class="choose-us-icon">
                            <img src="{{ asset('assets/media/choose-us-icon-3.png') }}" alt="">
                        </div>
                        <div class="choose-us-content">
                            <h4>Data Security</h4>
                            <p>Monotonectally synergize granular to front markets task state data security
                                semper maecenas ferform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us-box">
                        <div class="choose-us-icon">
                            <img src="{{ asset('assets/media/choose-us-icon-4.png') }}" alt="">
                        </div>
                        <div class="choose-us-content">
                            <h4>People</h4>
                            <p>Monotonectally synergize granular to front markets task state data security
                                semper maecenas ferform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="brand-area style-two" style="background: url({{ asset('assets/media/brand-bg.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="brand-list-1 owl-carousel">
                    <div class="col-lg-12">
                        <div class="single-brand-box">
                            <div class="brand-thumb">
                                <img src="{{ asset('assets/images/home-2/brand-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-box">
                            <div class="brand-thumb">
                                <img src="{{ asset('assets/images/home-2/brand-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-box">
                            <div class="brand-thumb">
                                <img src="{{ asset('assets/images/home-2/brand-3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-box">
                            <div class="brand-thumb">
                                <img src="{{ asset('assets/images/home-2/brand-4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-box">
                            <div class="brand-thumb">
                                <img src="{{ asset('assets/images/home-2/brand-5.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
