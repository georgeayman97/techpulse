@extends('layouts.master')
@section('title','TechPulse Solutions')
@section('content')
    <div class="th-hero-wrapper hero-4" id="hero">
        <div class="body-particle" id="body-particle"></div>
        <div class="hero-img tilt-active"><img src="{{ asset('assets/img/hero/hero_img_4_1.png') }}" alt="Hero Image">
        </div>
        <div class="container">
            <div class="hero-style4">
                <div class="ripple-shape"><span class="ripple-1"></span><span class="ripple-2"></span><span
                        class="ripple-3"></span><span class="ripple-4"></span><span class="ripple-5"></span><span
                        class="ripple-6"></span></div>
                <span class="hero-subtitle">Best Software Services</span>
                <h1 class="hero-title">Make The Easiest</h1>
                <h1 class="hero-title">Solution For You</h1>
                <p class="hero-text">Empower Your Vision with Our Expertise Transform your ideas into digital realities
                    with our innovative solutions.</p>
                <div class="btn-group"><a href="{{ route('about-us') }}" class="th-btn">ABOUT US<i
                            class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="triangle-1"></div>
        <div class="triangle-2"></div>
        <div class="hero-shape2"><img src="{{ asset('assets/img/hero/hero_shape_2_2.png') }}" alt="shape"></div>
        <div class="hero-shape3"><img src="{{ asset('assets/img/hero/hero_shape_2_3.png') }}" alt="shape"></div>
    </div>
    {{--    <section class="space-top">--}}
    {{--        <div class="container z-index-common">--}}
    {{--            <div class="title-area text-center"><span class="sub-title">--}}
    {{--                    <div class="icon-masking me-2">--}}
    {{--                        <span class="mask-icon"--}}
    {{--                              data-mask-src="{{ asset('assets/img/theme-img/title_shape_1.svg') }}"></span>--}}
    {{--                        <img src="https://html.themeholy.com/webteck/demo/assets/img/theme-img/title_shape_1.svg"--}}
    {{--                             alt="shape">OUR TECHNOLOGIES--}}
    {{--                    </div>--}}
    {{--                </span>--}}

    {{--                <div class="slider-area">--}}
    {{--                    <div class="swiper th-slider has-shadow"--}}
    {{--                         data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>--}}
    {{--                        <div class="swiper-wrapper">--}}
    {{--                            <div class="swiper-slide">--}}
    {{--                                <div class="service-featured">--}}
    {{--                                    <div class="service-featured_content">--}}
    {{--                                        <div class="shape-icon"><img--}}
    {{--                                                src="https://html.themeholy.com/webteck/demo/assets/img/icon/service_featured_1.svg"--}}
    {{--                                                alt="Icon"> <span class="dots"></span></div>--}}
    {{--                                        <h3 class="box-title"><a href="{{ route('service') }}">Python</a></h3>--}}
    {{--                                        <a href="{{ route('service') }}"--}}
    {{--                                           class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a></div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="swiper-slide">--}}
    {{--                                <div class="service-featured">--}}
    {{--                                    <div class="service-featured_content">--}}
    {{--                                        <div class="shape-icon"><img--}}
    {{--                                                src="https://html.themeholy.com/webteck/demo/assets/img/icon/service_featured_2.svg"--}}
    {{--                                                alt="Icon"> <span class="dots"></span></div>--}}
    {{--                                        <h3 class="box-title"><a href="service-details.html">Laravel</a></h3>--}}
    {{--                                        <a href="service-details.html" class="icon-btn">--}}
    {{--                                            <i class="fa-regular fa-arrow-right"></i></a></div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="swiper-slide">--}}
    {{--                                <div class="service-featured">--}}
    {{--                                    <div class="service-featured_content">--}}
    {{--                                        <div class="shape-icon"><img--}}
    {{--                                                src="https://html.themeholy.com/webteck/demo/assets/img/icon/service_featured_3.svg"--}}
    {{--                                                alt="Icon"> <span class="dots"></span></div>--}}
    {{--                                        <h3 class="box-title"><a href="service-details.html">Node Js</a></h3>--}}
    {{--                                        <a href="service-details.html" class="icon-btn">--}}
    {{--                                            <i class="fa-regular fa-arrow-right"></i></a></div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="swiper-slide">--}}
    {{--                                <div class="service-featured">--}}
    {{--                                    <div class="service-featured_content">--}}
    {{--                                        <div class="shape-icon"><img--}}
    {{--                                                src="https://html.themeholy.com/webteck/demo/assets/img/icon/service_featured_4.svg"--}}
    {{--                                                alt="Icon"> <span class="dots"></span>--}}
    {{--                                        </div>--}}
    {{--                                        <h3 class="box-title"><a href="service-details.html">.Net</a></h3>--}}
    {{--                                        <a href="service-details.html" class="icon-btn">--}}
    {{--                                            <i class="fa-regular fa-arrow-right"></i></a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="swiper-slide">--}}
    {{--                                <div class="service-featured">--}}
    {{--                                    <div class="service-featured_content">--}}
    {{--                                        <div class="shape-icon"><img--}}
    {{--                                                src="https://html.themeholy.com/webteck/demo/assets/img/icon/service_featured_4.svg"--}}
    {{--                                                alt="Icon"> <span class="dots"></span>--}}
    {{--                                        </div>--}}
    {{--                                        <h3 class="box-title"><a href="service-details.html">React Js</a></h3>--}}
    {{--                                        <a href="service-details.html" class="icon-btn">--}}
    {{--                                            <i class="fa-regular fa-arrow-right"></i></a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="swiper-slide">--}}
    {{--                                <div class="service-featured">--}}
    {{--                                    <div class="service-featured_content">--}}
    {{--                                        <div class="shape-icon"><img--}}
    {{--                                                src="https://html.themeholy.com/webteck/demo/assets/img/icon/service_featured_4.svg"--}}
    {{--                                                alt="Icon"> <span class="dots"></span>--}}
    {{--                                        </div>--}}
    {{--                                        <h3 class="box-title"><a href="service-details.html">Angular</a></h3>--}}
    {{--                                        <a href="service-details.html" class="icon-btn">--}}
    {{--                                            <i class="fa-regular fa-arrow-right"></i></a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="swiper-slide">--}}
    {{--                                <div class="service-featured">--}}
    {{--                                    <div class="service-featured_content">--}}
    {{--                                        <div class="shape-icon"><img--}}
    {{--                                                src="https://html.themeholy.com/webteck/demo/assets/img/icon/service_featured_4.svg"--}}
    {{--                                                alt="Icon"> <span class="dots"></span>--}}
    {{--                                        </div>--}}
    {{--                                        <h3 class="box-title"><a href="service-details.html">Vue Js</a></h3>--}}
    {{--                                        <a href="service-details.html" class="icon-btn">--}}
    {{--                                            <i class="fa-regular fa-arrow-right"></i></a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="swiper-slide">--}}
    {{--                                <div class="service-featured">--}}
    {{--                                    <div class="service-featured_content">--}}
    {{--                                        <div class="shape-icon"><img--}}
    {{--                                                src="https://html.themeholy.com/webteck/demo/assets/img/icon/service_featured_4.svg"--}}
    {{--                                                alt="Icon"> <span class="dots"></span>--}}
    {{--                                        </div>--}}
    {{--                                        <h3 class="box-title"><a href="service-details.html">Flutter</a></h3>--}}
    {{--                                        <a href="service-details.html" class="icon-btn">--}}
    {{--                                            <i class="fa-regular fa-arrow-right"></i></a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="swiper-slide">--}}
    {{--                                <div class="service-featured">--}}
    {{--                                    <div class="service-featured_content">--}}
    {{--                                        <div class="shape-icon"><img--}}
    {{--                                                src="https://html.themeholy.com/webteck/demo/assets/img/icon/service_featured_4.svg"--}}
    {{--                                                alt="Icon"> <span class="dots"></span>--}}
    {{--                                        </div>--}}
    {{--                                        <h3 class="box-title"><a href="service-details.html">Android</a></h3>--}}
    {{--                                        <a href="service-details.html" class="icon-btn">--}}
    {{--                                            <i class="fa-regular fa-arrow-right"></i></a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="swiper-slide">--}}
    {{--                                <div class="service-featured">--}}
    {{--                                    <div class="service-featured_content">--}}
    {{--                                        <div class="shape-icon"><img--}}
    {{--                                                src="https://html.themeholy.com/webteck/demo/assets/img/icon/service_featured_4.svg"--}}
    {{--                                                alt="Icon"> <span class="dots"></span>--}}
    {{--                                        </div>--}}
    {{--                                        <h3 class="box-title"><a href="service-details.html">IOS</a></h3>--}}
    {{--                                        <a href="service-details.html" class="icon-btn">--}}
    {{--                                            <i class="fa-regular fa-arrow-right"></i></a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <div class="space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/normal/about_1_1.png"
                                alt="About"></div>
                        {{--                        <div class="shape1">--}}
                        {{--                            <img src="https://html.themeholy.com/webteck/demo/assets/img/normal/about_shape_1.png" alt="shape">--}}
                        {{--                        </div>--}}
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
    <section class="service-sec space" id="service-sec" data-bg-src="{{ asset('assets/media/service_bg_1.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-7 col-sm-10 px-xl-4">
                    <div class="title-area text-center"><span class="sub-title"><div class="icon-masking me-2"><span
                                    class="mask-icon"
                                    data-mask-src="{{ asset('assets/img/theme-img/title_shape_1.svg') }}"></span> <img
                                    src="https://html.themeholy.com/webteck/demo/assets/img/theme-img/title_shape_1.svg"
                                    alt="shape"></div>OUR SERVICES</span>
                        <h2 class="sec-title">We Provide Exclusive <span class="text-theme">Service</span> For Your
                            Business
                        </h2></div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">01</div>
                        <div class="shape-icon"><img src="{{ asset('assets/img/icon/service_card_1.svg') }}" alt="Icon">
                            <span
                                class="dots"></span></div>
                        <h3 class="box-title"><a href="service-details.html">Web Development</a></h3>
                        <p class="service-card_text">Crafting digital landscapes that elevate your brand and engage your
                            audience using different technologies as your desire.</p>
                        <a href="{{ route('service') }}" class="th-btn">Read More
                            <i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>
                        <div class="bg-shape"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/bg/service_card_bg.png"
                                alt="bg">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">02</div>
                        <div class="shape-icon"><img src="{{ asset('assets/img/icon/service_card_2.svg') }}" alt="Icon">
                            <span
                                class="dots"></span></div>
                        <h3 class="box-title"><a href="service-details.html">UI/UX Design</a></h3>
                        <p class="service-card_text">Designing intuitive interfaces that make navigating your digital
                            world effortless, based on your brand identity.</p>
                        <a href="{{ route('service') }}" class="th-btn">Read More
                            <i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>
                        <div class="bg-shape"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/bg/service_card_bg.png"
                                alt="bg">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">03</div>
                        <div class="shape-icon"><img src="{{ asset('assets/img/icon/service_card_3.svg') }}" alt="Icon">
                            <span
                                class="dots"></span></div>
                        <h3 class="box-title"><a href="service-details.html">Mobile App Development</a></h3>
                        <p class="service-card_text">Bringing your ideas to life on mobile, connecting you with
                            customers wherever they are.</p>
                        <a href="{{ route('service') }}" class="th-btn">Read More
                            <i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>
                        <div class="bg-shape"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/bg/service_card_bg.png"
                                alt="bg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5"><a href="{{ route('service') }}" class="th-btn">VIEW ALL SERVICES<i
                        class="fa-regular fa-arrow-right ms-2"></i></a></div>
        </div>
    </section>
    <section class="bg-bottom-right position-relative" data-bg-src="{{ asset('assets/img/bg/cta_bg_1.png') }}"
             data-bg-color="#080E1C">
        <div class="img-half img-left"><img
                src="https://html.themeholy.com/webteck/demo/assets/img/normal/cta_1.jpg" alt="video"> <a
                href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"></a>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-5 space">
                    <div class="title-area mb-35"><span class="sub-title"><div class="icon-masking me-2"><span
                                    class="mask-icon"
                                    data-mask-src="{{ asset('assets/img/theme-img/title_shape_1.svg') }}"></span> <img
                                    src="https://html.themeholy.com/webteck/demo/assets/img/theme-img/title_shape_1.svg"
                                    alt="shape"></div>UNLOCK BEST SOFTWARE SERVICES 2024</span>
                        <h2 class="sec-title text-white">We're Here to <span
                                class="text-theme">Elevate Your Business</span>
                        </h2></div>
                    <p class="mt-n2 mb-30 text-white">Imagine having a team that crafts smart, user-friendly solutions
                        right off the bat, ready to tackle your biggest challenges head-on. <br> That's exactly what we
                        do –
                        we don't just build models we create game-changers that fit perfectly into your strategy.

                        Ready to see how we can dramatically boost your business? Let's dive in</p><a
                        href="{{ route('about-us') }}"
                        class="th-btn style3">DISCOVER
                        MORE TOGETHER<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
            </div>
        </div>
        <div class="shape-mockup" data-bottom="0" data-right="0">
            <div class="particle-1" id="particle-1"></div>
        </div>
    </section>
    <div class="space-top" data-bg-src="{{ asset('assets/media/why_bg_1-1.png') }}">
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
                                <li><i class="fal fa-check"></i> Quick Efficient Delivery</li>
                                <li><i class="fal fa-check"></i> 24/7 Online Support</li>
                                <li><i class="fal fa-check"></i> Business Improvement</li>
                            </ul>
                        </div>
                        <div class="checklist style2">
                            <ul>
                                <li><i class="fal fa-check"></i> High Quality Security</li>
                                <li><i class="fal fa-check"></i> 24/7 Support Team</li>
                                <li><i class="fal fa-check"></i> Easy Solutions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space" id="project-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-5 mb-n2 mb-lg-0">
                    <div class="title-area text-center text-lg-start"><span class="sub-title"><div
                                class="icon-masking me-2"><span class="mask-icon"
                                                                data-mask-src="{{ asset('assets/img/theme-img/title_shape_1.svg') }}"></span> <img
                                    src="https://html.themeholy.com/webteck/demo/assets/img/theme-img/title_shape_1.svg"
                                    alt="shape"></div>LATEST PROJECT</span>
                        <h2 class="sec-title">See We Have Solution<br>Done <span
                                class="text-theme">Software Projects</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="projectSlider1"
                     data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        @foreach($categories as $category)
                            @foreach($category->deployedProjects as $project)
                                <div class="swiper-slide">
                                    <div class="project-card">
                                        <div class="project-img"><img
                                                src="{{ $project->getFirstMediaUrl(\App\Enum\MediaCollection::PROJECT_HOME_IMAGE->value) }}"
                                                alt="project image"></div>
                                        <div class="project-content-wrap">
                                            <div class="project-content">
                                                <div class="box-particle" id="project-p1"></div>
                                                <h3 class="box-title"><a
                                                        href="{{ route('projects.show',$project->slug) }}">{{ getColumn($project,'title') }}</a>
                                                </h3>
                                                <p class="project-subtitle">{{ getColumn($category,'name') }}</p><a
                                                    href="{{ $project->getFirstMediaUrl(\App\Enum\MediaCollection::PROJECT_HOME_IMAGE->value) }}"
                                                    class="icon-btn popup-image"><i class="fal fa-plus"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
                <button data-slider-prev="#projectSlider1" class="slider-arrow style3 slider-prev"><i
                        class="fal fa-arrow-left"></i></button>
                <button data-slider-next="#projectSlider1" class="slider-arrow style3 slider-next"><i
                        class="fal fa-arrow-right"></i></button>
            </div>
            <div class="text-center mt-5"><a href="{{ route('projects') }}" class="th-btn">VIEW ALL PROJECTS<i
                        class="fa-regular fa-arrow-right ms-2"></i></a></div>
        </div>
        <div class="shape-mockup" data-top="0%" data-right="0%"><img
                src="https://html.themeholy.com/webteck/demo/assets/img/shape/tech_shape_1.png" alt="shape"></div>
        <div class="shape-mockup" data-bottom="0%" data-left="0%"><img
                src="https://html.themeholy.com/webteck/demo/assets/img/shape/tech_shape_2.png" alt="shape"></div>
    </section>

    <section class="overflow-hidden space" data-bg-src="{{ asset('assets/media/testi_bg_1-1.jpg') }}"
             data-overlay="overlay1"
             data-opacity="9">
        <div class="container z-index-common">
            <div class="row">
                <div class="col-xl-6 pe-xxl-5 mb-40 mb-xl-0">
                    <div class="title-area mb-35 text-xl-start text-center"><span class="sub-title"><div
                                class="icon-masking me-2"><span class="mask-icon"
                                                                data-mask-src="{{ asset('assets/img/theme-img/title_shape_1.svg') }}"></span> <img
                                    src="https://html.themeholy.com/webteck/demo/assets/img/theme-img/title_shape_1.svg"
                                    alt="shape"></div>APPOINTMENT NOW</span>
                        <h2 class="sec-title consultation-title-color">We're Ready to Talk About Your <span
                                class="text-theme">Opportunities</span>
                        </h2></div>
                    <p class="mt-n2 mb-30 text-xl-start text-center">Progressively morph principle-centered e-markets
                        without an expanded array of opportunities. Conveniently incubate e-tailers for extensive
                        leadership
                        skills. Holisticly extend leading-edge vortals vis-a-vis 24/7 e-markets. Appropriately evolve
                        efficient functionalities with installed base relationships.</p>
                    <div class="contact-feature-wrap">
                        <div class="contact-feature">
                            <div class="icon-btn"><i class="fa-solid fa-phone"></i></div>
                            <div class="media-body"><p class="contact-feature_label">Call Us On:</p><a
                                    href="tel:+971582374123" class="contact-feature_link">+971 582374123</a></div>
                        </div>
                        <div class="contact-feature">
                            <div class="icon-btn"><i class="fa-solid fa-envelope"></i></div>
                            <div class="media-body"><p class="contact-feature_label">Quick Mail Us:</p><a
                                    href="mailto:sales@techpulse-solutions.com" class="contact-feature_link">sales@techpulse-solutions.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 ps-xl-4">
                    <h3 class="h4 mt-n2 mb-30 text-center consultation-title-color">Make An Appointment</h3>
                    <form action="{{ route('contact-us.store') }}" method="POST"
                          class="appoitment-form ajax-contact">
                        @csrf
                        <div class="row">
                            <div class="form-group col-sm-6"><input type="text" class="form-control" name="name"
                                                                    id="name"
                                                                    placeholder="Enter Your Name"></div>
                            <div class="form-group col-sm-6"><input type="email" class="form-control" name="email"
                                                                    id="email" placeholder="Enter Your Email"></div>
                            <div class="form-group col-sm-6"><select name="subject" id="subject" class="form-select">
                                    <option value="" disabled="disabled" selected="selected" hidden>Select Subject
                                    </option>
                                    <option value="IT Consult">IT Consult</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Branding Solution">Branding Solution</option>
                                    <option value="Product Marketing">Product Marketing</option>
                                </select></div>
                            <div class="form-group col-sm-6"><input type="tel" class="form-control" name="number"
                                                                    id="number" placeholder="Phone Number"></div>
                            <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                                                                     class="form-control"
                                                                     placeholder="Write Your Message"></textarea></div>
                            <div class="form-btn col-12">
                                <button class="th-btn w-100">MAKE AN APPOINTMENT</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p></form>
                </div>
            </div>
        </div>
    </section>
@endsection
