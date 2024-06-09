@extends('layouts.master')
@section('title','Contact Us')
@section('content')

    <div class="breadcumb-area" style="background: url({{ asset('assets/media/breadcumb-bg.png') }});
            background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h4>Contact Us</h4>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-area style-three inner">
        <div class="container">
            <div class="row add-white-bg align-items-center">
                <div class="col-lg-8 col-md-12">
                    <div class="single-contact-box">
                        <div class="contact-contetn">
                            <h4>Write to Us Anytime</h4>
                        </div>
                        <form action="{{ route('contact-us.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-input-box">
                                        <input type="text" name="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-input-box">
                                        <input type="text" name="email" placeholder="Enter E-Mail" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-input-box">
                                        <input type="text" name="phone" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-input-box">
                                        <input type="text" name="company_name" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-input-box">
                                        <input type="text" name="company_field" placeholder="Company Field">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-input-box">
                                        <input type="text" name="country" placeholder="Country" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-input-box">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-input-box">
                                        <textarea name="message" id="massage" placeholder="Write Massage"
                                                  required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="massage-sent-button">
                                        <button type="submit">Send Massage</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="single-contact-info-box" style="
                                background: url({{ asset('assets/media/contact-info-box-bg.png') }});
                                background-position-x: 0%;
                                background-position-y: 0%;
                                background-repeat: no-repeat;
                                background-size: auto;">
                        <div class="info-content">
                            <h4>Don’t Forget to Contact Us</h4>
                        </div>
                        <div class="contact-info-box">
                            <div class="contact-info-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="contact-info-content">
                                <p>Call Us</p>
                                <h4>+980 123 (4567) 890</h4>
                            </div>
                        </div>
                        <div class="contact-info-box">
                            <div class="contact-info-icon">
                                <i class="bi bi-envelope-open-fill"></i>
                            </div>
                            <div class="contact-info-content">
                                <p>Send E-Mail</p>
                                <h4>example@gmail.com</h4>
                            </div>
                        </div>
                        <div class="contact-info-box">
                            <div class="contact-info-icon">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <div class="contact-info-content">
                                <p>Office Hours</p>
                                <h4>8.00 AM to 5.00 PM</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.325396876019!2d90.36098897592879!3d23.80702538659894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c105f81691d5%3A0x4aa9bd97de918f7b!2sSher-E-Bangla%20National%20Cricket%20Stadium!5e0!3m2!1sen!2sbd!4v1715077171980!5m2!1sen!2sbd"></iframe>
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
