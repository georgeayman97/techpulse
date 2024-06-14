@extends('layouts.master')
@section('title','Services')
@section('content')
    <div class="breadcumb-area" style="background: url({{ asset('assets/media/breadcumb-bg.png') }});
            background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-area inner-style">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title center inner-style">
                        <h4>What We Provides?</h4>
                        <h1>Provide Interective IT Solution</h1>
                        <h1>Business Services</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/service-inner/service-icon-1.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4>Cloud Services</h4>
                            <p>Monotonectal grants to business visualize provid solution services business provid
                                done</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/service-inner/service-icon-2.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4>IT Management</h4>
                            <p>Monotonectal grants to business visualize provid solution services business provid
                                done</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/service-inner/service-icon-3.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4>Software Renew</h4>
                            <p>Monotonectal grants to business visualize provid solution services business provid
                                done</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/service-inner/service-icon-4.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4>Machine Learning</h4>
                            <p>Monotonectal grants to business visualize provid solution services business provid
                                done</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/service-inner/service-icon-5.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4>Digital Marketing</h4>
                            <p>Monotonectal grants to business visualize provid solution services business provid
                                done</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/service-inner/service-icon-6.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4>Web Development</h4>
                            <p>Monotonectal grants to business visualize provid solution services business provid
                                done</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/service-inner/service-icon-7.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4>Cyber Security</h4>
                            <p>Monotonectal grants to business visualize provid solution services business provid
                                done</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/service-inner/service-icon-8.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4>Data Analytic</h4>
                            <p>Monotonectal grants to business visualize provid solution services business provid
                                done</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="subscribe-area style-three" style="
    background: url({{ asset('assets/media/subscribe-bg.jpg') }});
    background-position-x: 0%;
    background-position-y: 0%;
    object-fit: cover;
    background-size: auto;
    margin-bottom: 130px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title left inner-style">
                        <h1>Get Latest Update from Toptech</h1>
                        <h1>Stay Connect with Us</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="#">
                        <div class="single-subscribe-box">
                            <input type="text" name="Email" placeholder="Enter your Email" required>
                            <button type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="process-area style-three inner">
        <div class="container">
            <div class="row add-bg" style="
                background: url({{ asset('assets/media/process-bg.jpg') }});
                background-repeat: no-repeat;
                background-size: cover;
                object-fit: cover;
                background-position: center center;">
                <div class="col-lg-4 col-md-6">
                    <div class="single-process-box">
                        <div class="process-icon">
                            <img src="{{ asset('assets/images/home-3/process-1.png') }}" alt="">
                        </div>
                        <div class="process-content">
                            <h4>Account Register</h4>
                            <p>Opportunities before extensible market Dramatically pursue us</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process-box">
                        <div class="process-icon">
                            <img src="{{ asset('assets/images/home-3/process-2.png') }}" alt="">
                        </div>
                        <div class="process-content">
                            <h4>Add New Card</h4>
                            <p>Opportunities before extensible market Dramatically pursue us</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process-box">
                        <div class="process-icon">
                            <img src="{{ asset('assets/images/home-3/process-3.png') }}" alt="">
                        </div>
                        <div class="process-content">
                            <h4>Varyfied Account</h4>
                            <p>Opportunities before extensible market Dramatically pursue us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="brand-area style-two" style="background: url({{ asset('assets/media/brand-bg.png') }});">
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
