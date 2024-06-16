@extends('layouts.master')
@section('title','About')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/media/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content"><h1 class="breadcumb-title">About Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/normal/about_1_1.png"
                                alt="About"></div>
                        <div class="shape1"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/normal/about_shape_1.png"
                                alt="shape"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xxl-4 ms-xl-3">
                        <div class="title-area mb-35"><span class="sub-title"><div class="icon-masking me-2"><span
                                        class="mask-icon"
                                        data-mask-src="{{ asset('assets/img/theme-img/title_shape_1.svg') }}"></span> <img
                                        src="https://html.themeholy.com/webteck/demo/assets/img/theme-img/title_shape_1.svg"
                                        alt="shape"></div>About Us</span>
                            <h2 class="sec-title">We're excited about <br> boosting business success through
                                leading-edge
                                <span class="text-theme">Software Solutions</span>
                            </h2></div>
                        <p class="mt-n2 mb-25">We believe in the power of collaboration to create user-friendly systems
                            that streamline operations across different units. Our mission is simple: We want to help
                            your business stand out and work better together. We're all about giving you the edge you
                            need and making sure every part of your organization is aligned and working towards the same
                            goals. we're not just building websites we're crafting the future of your business, one
                            digital solution at a time.</p>
                        <div class="about-feature-wrap">
                            <div class="about-feature">
                                <div class="about-feature_icon"><img
                                        src="https://html.themeholy.com/webteck/demo/assets/img/icon/about_feature_1_1.svg"
                                        alt="Icon"></div>
                                <div class="media-body"><h3 class="about-feature_title">Certified Company</h3>
                                    <p class="about-feature_text">Best Provide Skills Services</p></div>
                            </div>
                            <div class="about-feature">
                                <div class="about-feature_icon"><img
                                        src="https://html.themeholy.com/webteck/demo/assets/img/icon/about_feature_1_2.svg"
                                        alt="Icon"></div>
                                <div class="media-body"><h3 class="about-feature_title">Talented Team</h3>
                                    <p class="about-feature_text">100% Expert Team</p></div>
                            </div>
                        </div>
                        <div class="btn-group"><a href="{{ route('contact-us.create') }}" class="th-btn">Lets Connect<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                            <div class="call-btn">
                                <a href="tel:+971582374123">
                                    <div class="play-btn"><i class="fas fa-phone"></i></div>
                                </a>
                                <div class="media-body"><span class="btn-text">Call Us On:</span> <a
                                        href="tel:+971582374123"
                                        class="btn-title">+971 &nbsp; 582 374 123</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-theme space-extra" data-bg-src="{{ asset('assets/img/bg/counter_bg_1.png') }}">
        <div class="container py-2">
            <div class="row gy-40 justify-content-between">
                <div class="col-6 col-lg-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="assets/img/icon/counter_1_1.svg" alt="Icon"></div>
                        <div class="media-body"><h2 class="counter-card_number"><span class="counter-number">986</span>+
                            </h2>
                            <p class="counter-card_text">Finished Project</p></div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="assets/img/icon/counter_1_2.svg" alt="Icon"></div>
                        <div class="media-body"><h2 class="counter-card_number"><span class="counter-number">896</span>+
                            </h2>
                            <p class="counter-card_text">Happy Clients</p></div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="assets/img/icon/counter_1_3.svg" alt="Icon"></div>
                        <div class="media-body"><h2 class="counter-card_number"><span class="counter-number">396</span>+
                            </h2>
                            <p class="counter-card_text">Skilled Experts</p></div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/icon/counter_1_4.svg"
                                alt="Icon">
                        </div>
                        <div class="media-body"><h2 class="counter-card_number"><span class="counter-number">496</span>+
                            </h2>
                            <p class="counter-card_text">Honorable Awards</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space" data-bg-src="{{ asset('assets/img/bg/why_bg_1.png') }}">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-xxl-7 col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box2">
                        <div class="img1"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/normal/why_1_1.jpg"
                                alt="Why"></div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-6">
                    <div class="title-area mb-35"><span class="sub-title"><div class="icon-masking me-2"><span
                                    class="mask-icon"
                                    data-mask-src="{{ asset('assets/img/theme-img/title_shape_1.svg') }}"></span> <img
                                    src="https://html.themeholy.com/webteck/demo/assets/img/theme-img/title_shape_1.svg"
                                    alt="shape"></div>WHY CHOOSE US</span>
                        <h2 class="sec-title">We Deal With The Aspects Professional <span
                                class="text-theme">Software Services</span></h2></div>
                    <p class="mt-n2 mb-30">Collaboratively envision user-friendly supply chains and cross unit
                        imperative. Authoritatively fabricate competitive resource and holistic.</p>
                    <div class="two-column">
                        <div class="checklist style2">
                            <ul>
                                <li><i class="far fa-check"></i> Quick Efficient Delivery</li>
                                <li><i class="far fa-check"></i> 24/7 Online Support</li>
                                <li><i class="far fa-check"></i> Business Improvement</li>
                            </ul>
                        </div>
                        <div class="checklist style2">
                            <ul>
                                <li><i class="far fa-check"></i> High Quality Security</li>
                                <li><i class="far fa-check"></i> 24/7 Support Team</li>
                                <li><i class="far fa-check"></i> Easy Solutions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-top-center space" data-bg-src="{{ asset('assets/media/testi_bg_3.jpg') }}">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><div class="icon-masking me-2">
                        <span class="mask-icon"
                              data-mask-src="{{ asset('assets/img/theme-img/title_shape_2.svg') }}"></span> <img
                            src="{{ asset('assets/img/theme-img/title_shape_2.svg') }}" alt="shape"></div>CUSTOMER FEEDBACK</span>
                <h2 class="sec-title text-white">What Happy Clients Says<br><span class="text-theme">About Us?</span>
                </h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="testiSlider3"
                     data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_content"><p class="testi-grid_text">Objectively visualize
                                        error-free
                                        technology for B2B alignment. Monotonectally harness an expanded array of models
                                        via
                                        effective collaboration. Globally synergize resource sucking value via
                                        cutting-edge.</p>
                                    <h3 class="box-title">David Farnandes</h3>
                                    <p class="testi-grid_desig">CEO at Anaton</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_content"><p class="testi-grid_text">Objectively visualize
                                        error-free
                                        technology for B2B alignment. Monotonectally harness an expanded array of models
                                        via
                                        effective collaboration. Globally synergize resource sucking value via
                                        cutting-edge.</p>
                                    <h3 class="box-title">Jackline Techie</h3>
                                    <p class="testi-grid_desig">CEO at Kormola</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_content"><p class="testi-grid_text">Objectively visualize
                                        error-free
                                        technology for B2B alignment. Monotonectally harness an expanded array of models
                                        via
                                        effective collaboration. Globally synergize resource sucking value via
                                        cutting-edge.</p>
                                    <h3 class="box-title">Abraham Khalil</h3>
                                    <p class="testi-grid_desig">CEO at Anatora</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_content"><p class="testi-grid_text">Objectively visualize
                                        error-free
                                        technology for B2B alignment. Monotonectally harness an expanded array of models
                                        via
                                        effective collaboration. Globally synergize resource sucking value via
                                        cutting-edge.</p>
                                    <h3 class="box-title">Abraham Khalil</h3>
                                    <p class="testi-grid_desig">CEO at Anatora</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_content"><p class="testi-grid_text">Objectively visualize
                                        error-free
                                        technology for B2B alignment. Monotonectally harness an expanded array of models
                                        via
                                        effective collaboration. Globally synergize resource sucking value via
                                        cutting-edge.</p>
                                    <h3 class="box-title">Abraham Khalil</h3>
                                    <p class="testi-grid_desig">CEO at Anatora</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_content"><p class="testi-grid_text">Objectively visualize
                                        error-free
                                        technology for B2B alignment. Monotonectally harness an expanded array of models
                                        via
                                        effective collaboration. Globally synergize resource sucking value via
                                        cutting-edge.</p>
                                    <h3 class="box-title">Abraham Khalil</h3>
                                    <p class="testi-grid_desig">CEO at Anatora</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_content"><p class="testi-grid_text">Objectively visualize
                                        error-free
                                        technology for B2B alignment. Monotonectally harness an expanded array of models
                                        via
                                        effective collaboration. Globally synergize resource sucking value via
                                        cutting-edge.</p>
                                    <h3 class="box-title">Abraham Khalil</h3>
                                    <p class="testi-grid_desig">CEO at Anatora</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-slider-prev="#testiSlider3" class="slider-arrow style3 slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#testiSlider3" class="slider-arrow style3 slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
@endsection
