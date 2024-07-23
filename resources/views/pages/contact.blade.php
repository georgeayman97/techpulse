@extends('layouts.master')
@section('title','Contact Us')
@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/media/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content"><h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="space">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class="fas fa-location-dot"></i></div>
                        <div class="media-body"><h4 class="box-title">Our Locations</h4><span
                                class="contact-info_text">Al Furjan -
                                        Dubai <br> Stockholm, Sweden</span></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class="fas fa-phone"></i></div>
                        <div class="media-body"><h4 class="box-title">Call Us Anytime</h4><span
                                class="contact-info_text"><a
                                    href="tel:+971582374123">+971 582374123</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class="fas fa-envelope"></i></div>
                        <div class="media-body"><h4 class="box-title">Send An Email</h4>
                            <span class="contact-info_text">
                                <a href="mailto:sales@techpulse-solutions.com">sales@techpulse-solutions.com</a>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-smoke space" data-bg-src="{{ asset('assets/media/contact_bg_1.png') }}" id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="title-area mb-35 text-xl-start text-center">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon"
                                      data-mask-src="{{ asset('assets/img/theme-img/title_shape_2.svg') }}"></span>
                                <img src="{{ asset('assets/img/theme-img/title_shape_2.svg') }}" alt="shape">
                            </div>
                            contact with us!
                        </span>
                        <h2 class="sec-title">Have Any Questions?</h2>
                        <p class="sec-text">Enthusiastically disintermediate one-to-one leadership via business
                            e-commerce.
                            Dramatically reintermediate compelling process improvements rather than empowered
                            relationships.</p></div>
                    <form action="{{ route('contact-us.store') }}" method="POST" class="contact-form ajax-contact">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="name"
                                       id="name"
                                       placeholder="Your Name" required>
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="email" class="form-control" name="email"
                                       id="email" placeholder="Email Address" required>
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="tel" class="form-control" name="number"
                                       id="number" placeholder="Phone Number" required>
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="company_name"
                                       id="company_name"
                                       placeholder="Company Name">
                                <i class="fal fa-building"></i>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="company_field"
                                       id="company_field"
                                       placeholder="Company Field">
                                <i class="fal fa-building"></i>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="country"
                                       id="country"
                                       placeholder="Country" required>
                                <i class="fal fa-globe"></i>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="subject"
                                       id="subject"
                                       placeholder="Subject" required>
                                <i class="fal fa-envelope-open"></i>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3"
                                          class="form-control"
                                          placeholder="Your Message"></textarea>
                                <i class="fal fa-comment"></i>
                            </div>
                            <div class="form-btn text-xl-start text-center col-12">
                                <button class="th-btn">Send Message<i class="fa-regular fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map-sec">

        {{--        <iframe--}}
        {{--            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sThemeholy!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"--}}
        {{--            allowfullscreen="" loading="lazy"></iframe>--}}
    </div>

@endsection
