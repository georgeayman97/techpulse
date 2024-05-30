@php use App\Enum\MediaCollection;use Illuminate\Support\Str; @endphp
@extends('layouts.main')
@section('content')
    <!-- Slider start -->
    <section id="home" class="no-padding">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">
            <div class="overlay"></div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol><!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="{{ asset('assets2/images/slider2/bg1.png') }}" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated2">
                                @lang('lang.Innovative Solutions for Your Business')
                            </h2>
                            <h3 class="animated3">
                                @lang('lang.Empowering Growth with Cutting-Edge Technology')
                            </h3>
                            <div>
                                <a class="animated4 slider btn btn-primary btn-min-block white"
                                   href="#">@lang('lang.Explore Our Services')</a><a
                                    class="animated4 slider btn btn-primary btn-min-block solid"
                                    href="#">@lang('lang.Get a Free Quote')</a>
                            </div>
                        </div>
                    </div>
                </div><!--/ Carousel item end -->
                <div class="item">
                    <img class="img-responsive" src="{{ asset('assets2/images/slider2/bg2.png') }}" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated4">
                                @lang('lang.Web & Mobile Excellence')
                            </h2>
                            <h3 class="animated5">
                                @lang('lang.Creating Engaging Digital Experiences')
                            </h3>
                            <p class="animated6"><a href="#"
                                                    class="slider btn btn-primary white">@lang('lang.View Our Portfolio')</a>
                            </p>
                        </div>
                    </div>
                </div><!--/ Carousel item end -->
                <div class="item">
                    <img class="img-responsive" src="{{ asset('assets2/images/slider2/bg3.png') }}" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated7">
                                @lang('lang.Comprehensive IT Solutions')
                            </h2>
                            <h3 class="animated8">
                                @lang('lang.From ERP Systems to E-Commerce, Weve Got You Covered')
                            </h3>
                            <div class="">
                                <a class="animated4 slider btn btn-primary btn-min-block white"
                                   href="#">@lang('lang.Learn More')</a><a
                                    class="animated4 slider btn btn-primary btn-min-block solid"
                                    href="#">@lang('lang.Contact Us')</a>
                            </div>
                        </div>
                    </div>
                </div><!--/ Carousel item end -->
            </div><!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div><!-- /carousel -->
    </section>
    <!--/ Slider end -->

    <section class="call-to-action dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>@lang('lang.Give Your Website a Brand New Look')</h3>
                    <a href="#" class="pull-right btn btn-primary solid">@lang('lang.Revamp Now')</a>
                    <a href="#" class="pull-right btn btn-primary white">@lang('lang.See Our Work')</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features start -->
    <section id="service" class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                    <div class="service-content">
                        <span class="service-image"><img class="img-responsive"
                                                         src="{{ asset('assets2/images/pages/service-1.png') }}"
                                                         alt=""/></span>
                        <h3>@lang('lang.Modern Websites')</h3>
                        <p>@lang('lang.Stunning, responsive websites that reflect your brand’s identity, engaging users with every click.')</p>
                    </div>
                </div><!--/ End first service -->

                <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".8s">
                    <div class="service-content">
                        <span class="service-image"><img class="img-responsive"
                                                         src="{{ asset('assets2/images/pages/service2.png') }}"
                                                         alt=""/></span>
                        <h3>@lang('lang.Innovative Mobile Apps')</h3>
                        <p>@lang('lang.High-performance mobile apps for iOS and Android, designed to provide an exceptional user experience.')</p>
                    </div>

                </div><!--/ End Second features -->

                <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
                    <div class="service-content">
                        <span class="service-image"><img class="img-responsive"
                                                         src="{{ asset('assets2/images/pages/service-3.png') }}"
                                                         alt=""/></span>
                        <h3>@lang('lang.Comprehensive ERP Systems')</h3>
                        <p>@lang('lang.Streamline your business operations with our robust and customizable ERP solutions, built for efficiency.')</p>
                    </div>
                </div><!--/ End Third features -->

            </div><!-- Content Row end -->
        </div><!--/ Container end -->
    </section><!--/ Features end -->


    <!-- Portfolio start -->
    <section id="portfolio" class="portfolio portfolio-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 heading text-center">
                    <span class="icon-pentagon wow bounceIn"><i class="fa fa-suitcase"></i></span>
                    <h2 class="title2">Project Completed
                        <span class="title-desc">A Quality Experience Team with 4 years experience</span>
                    </h2>
                </div>
            </div> <!-- Title row end -->

            <!--Isotope filter start -->
            <div class="row text-center">
                <div class="isotope-nav" data-isotope-nav="isotope">
                    <ul>
                        <li><a href="#" class="active" data-filter="*">All</a></li>
                        @foreach($categories as $category)
                            <li><a href="#" data-filter=".{{ $category->slug }}">{{ $category->name_en }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div><!-- Isotope filter end -->

            <div class="row">
                <div id="isotope" class="isotope">
                    @foreach($categories as $category)
                        @foreach($category->deployedProjects as $project)
                            <div class="col-sm-3 {{ $category->slug }} isotope-item">
                                <div class="grid">
                                    <figure class="effect-oscar">
                                        <img
                                            src="{{ $project?->getFirstMediaUrl(MediaCollection::PROJECT_HOME_IMAGE->value) }}"
                                            alt="">
                                        <figcaption>
                                            <h3>{{ Str::limit(getColumn($project,'title'), 20) }}</h3>
                                            <a class="link icon-pentagon"
                                               href="{{ route('projects.show',[$project->slug]) }}"><i
                                                    class="fa fa-link"></i></a>
                                            <a class="view icon-pentagon" data-rel="prettyPhoto"
                                               href="{{ $project?->getFirstMediaUrl(MediaCollection::PROJECT_HOME_IMAGE->value) }}">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <!-- Isotope item end -->
                        @endforeach
                    @endforeach
                </div><!-- Isotope content end -->
            </div><!-- Content row end -->
        </div><!-- Container end -->
    </section><!-- Portfolio end -->

    <!-- About tab start -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 heading text-center">
                    <span class="icon-pentagon wow bounceIn"><i class="fa fa-meh-o"></i></span>
                    <h2 class="title2">@lang('lang.Know About Our Company')
                        <span class="title-desc">@lang('lang.A Quality Experience Team with 4 years experience')</span>
                    </h2>
                </div>
            </div> <!-- Title row end -->

            <div class="row">
                <div class="featured-tab clearfix">
                    <ul class="nav nav-tabs nav-stacked col-md-3 col-sm-5">
                        <li class="active">
                            <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-bank"></i></span>
                                <div class="tab-info"><h3>@lang('lang.Who are we')</h3></div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-database"></i></span>
                                <div class="tab-info"><h3>@lang('lang.Our company')</h3></div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-android"></i></span>
                                <div class="tab-info"><h3>@lang('lang.What we do')</h3></div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_d" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-language"></i></span>
                                <div class="tab-info"><h3>@lang('lang.Why choose us')</h3></div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_e" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-coffee"></i></span>
                                <div class="tab-info"><h3>@lang('lang.Save time with us')</h3></div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content col-md-9 col-sm-7">
                        <div class="tab-pane active animated fadeInRight" id="tab_a">
                            <img class="img-responsive pull-left" src="images/tab/featured-tab1.png" alt="">
                            <h3>@lang('lang.TechPulse Solutions: Your Technology Partner')</h3>
                            <p>@lang("lang.At TechPulse Solutions, we're more than just a software company – we're your technology partner. With over two years of experience serving clients in the Middle East, Europe, and the US, we've earned a reputation for excellence and innovation. Lorem ipsum dolor sit amet, consectetur adipiscing elit.")</p>
                            <ul class="check-list">
                                <li>
                                    <i class="fa fa-arrow-circle-right"></i> @lang("lang.We design and develop with your business goals in mind.")
                                </li>
                                <li>
                                    <i class="fa fa-arrow-circle-right"></i> @lang('lang.Our passion for design shines through in every project.')
                                </li>
                                <li>
                                    <i class="fa fa-arrow-circle-right"></i> @lang('lang.We strive to exceed your expectations and deliver results.')
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane animated fadeInLeft" id="tab_b">
                            <img class="img-responsive pull-right" src="images/tab/featured-tab2.png" alt="">
                            <h3>@lang('lang.About TechPulse Solutions')</h3>
                            <p>@lang('lang.TechPulse Solutions is a leading software company specializing in website and mobile application development, ERP systems, and e-commerce solutions. With a talented team of over 40 professionals spread across Egypt, Dubai, the US, and Sweden, we leverage the latest technologies and best practices to deliver high-quality, scalable solutions to clients worldwide.')</p>
                            <ul class="check-list">
                                <li>
                                    <i class="fa fa-check"></i> @lang('lang.We have a proven track record of delivering successful projects.')
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> @lang('lang.Our commitment to excellence is evident in every aspect of our work.')
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> @lang('lang.We prioritize clean, efficient code and adhere to industry standards.')
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_c">
                            <h3 class="text-center">@lang('lang.Our Services')</h3>
                            <p>@lang('lang.At TechPulse Solutions, we offer a comprehensive range of services to meet your business needs. Whether you need a custom website, a mobile app, an ERP system, or an e-commerce platform, we have the expertise to bring your vision to life.')</p>
                            <img class="img-responsive" src="images/tab/featured-tab3.png" alt="">
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_d">
                            <h3>@lang('lang.Why Choose Us?')</h3>
                            <p>@lang('lang.Choosing TechPulse Solutions means choosing a reliable partner dedicated to your success. Here are just a few reasons to work with us:')</p>
                            <ul class="check-list">
                                <li>
                                    <i class="fa fa-check"></i> @lang('lang.We prioritize customer satisfaction and strive to exceed your expectations.')
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> @lang('lang.We stay up-to-date with the latest technologies and best practices to deliver cutting-edge solutions.')
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> @lang('lang.Our experienced team ensures timely delivery and seamless project execution.')
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_e">
                            <i class="fa fa-coffee pull-left big"></i>
                            <h3>@lang('lang.Save Time and Effort with TechPulse Solutions')</h3>
                            <p>@lang("lang.At TechPulse Solutions, we understand the importance of efficiency and productivity. Our streamlined processes and agile methodologies allow us to deliver projects on time and within budget, saving you time and effort. Whether you're a startup or a large enterprise, we have the expertise and resources to help you succeed.")</p>
                        </div>
                    </div><!-- tab content -->
                </div><!-- Featured tab end -->
            </div><!-- Content row end -->
        </div><!-- Container end -->
    </section><!--




    <!-- Counter Strat -->
    <section class="ts_counter no-padding">
        <div class="container-fluid">
            <div class="row facts-wrapper wow fadeInLeft text-center">
                <div class="facts one col-md-3 col-sm-6">
                    <span class="facts-icon"><i class="fa fa-user"></i></span>
                    <div class="facts-num">
                        <span class="counter">1200</span>
                    </div>
                    <h3>Clients</h3>
                </div>

                <div class="facts two col-md-3 col-sm-6">
                    <span class="facts-icon"><i class="fa fa-institution"></i></span>
                    <div class="facts-num">
                        <span class="counter">1277</span>
                    </div>
                    <h3>Item Sold</h3>
                </div>

                <div class="facts three col-md-3 col-sm-6">
                    <span class="facts-icon"><i class="fa fa-suitcase"></i></span>
                    <div class="facts-num">
                        <span class="counter">869</span>
                    </div>
                    <h3>Projects</h3>
                </div>

                <div class="facts four col-md-3 col-sm-6">
                    <span class="facts-icon"><i class="fa fa-trophy"></i></span>
                    <div class="facts-num">
                        <span class="counter">76</span>
                    </div>
                    <h3>Awwards</h3>
                </div>

            </div>
        </div><!--/ Container end -->
    </section><!--/ Counter end -->


    <section id="featured-video" class="featured-video">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="video-embed wow fadeIn" data-wow-duration="1s">
                        <!-- Change the url -->
                        <iframe
                            src="//player.vimeo.com/video/72266001?title=0&amp;byline=0&amp;portrait=0&amp;color=8aba56"
                            width="500" height="281" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video-block-head">
                        <h3>The MultiPurpose Theme</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                            nibh id elit. Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed
                            lorem quis bibendum auctor.
                        </p>
                    </div>

                    <div class="video-block-content">
                        <span class="feature-icon pull-left"><i class="fa fa-bicycle"></i></span>
                        <div class="feature-content">
                            <h3>Tons of Features</h3>
                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div><!--/ End 1st block -->

                    <div class="video-block-content">
                        <span class="feature-icon pull-left"><i class="fa fa-diamond"></i></span>
                        <div class="feature-content">
                            <h3>PowerPack Theme</h3>
                            <p>Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
                        </div>

                        <a href="#" class="btn btn-primary solid">See More Video</a>
                    </div><!--/ End 1st block -->

                </div>
            </div>
        </div>
    </section>


    <!-- Parallax 2 start -->
    <section class="parallax parallax1">
        <div class="parallax-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Are You Ready to Buy This Template!</h2>
                    <h3>Just Click Button and Use Your Own</h3>
                    <p>
                        <a href="#" class="btn btn-primary white">Purchase Now</a>
                        <a href="#" class="btn btn-primary solid">Get In Touch</a>
                    </p>
                </div>
            </div>
        </div><!-- Container end -->
    </section><!-- Parallax 2 end -->



    <!-- Newsletter start -->
    <section id="newsletter" class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 heading text-center">
                    <span class="icon-pentagon wow bounceIn animated"><i class="fa fa-envelope"></i></span>
                    <h2 class="title2">Subscribe With Us
                        <span class="title-desc">We Love to Work with Passion</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="{{ route('follower.store') }}" method="POST" id="newsletter-form"
                          class="newsletter-form wow bounceIn"
                          data-wow-duration=".8s">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" id="newsletter-form-email"
                                   class="form-control form-control-lg" placeholder="Enter your email address"
                                   autocomplete="off" required>
                            <button class="btn btn-primary solid" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section><!-- Newsletter end -->


    <!-- Map start here -->
    {{--    <section id="map-wrapper" class="no-padding">--}}
    {{--        <div class="container">--}}
    {{--            <div class="contact-info-inner">--}}
    {{--                <h3>Contact Info</h3>--}}
    {{--                <div><i class="fa fa-map-marker pull-left"></i>--}}
    {{--                    <p><strong>Address</strong>1102 Saint Marys, Junction City, KS</p>--}}
    {{--                </div>--}}
    {{--                <div><i class="fa fa-phone pull-left"></i>--}}
    {{--                    <p><strong>Phone</strong>+(785) 238-4131</p>--}}
    {{--                </div>--}}
    {{--                <div><i class="fa fa-envelope-o pull-left"></i>--}}
    {{--                    <p><strong>Email</strong>info@bizcraft.com</p>--}}
    {{--                </div>--}}
    {{--                <div><i class="fa fa-compass pull-left"></i>--}}
    {{--                    <p><strong>Office Hours</strong>Mon - Friday, 9:00 - 5:00</p>--}}
    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="map" id="map"></div>--}}
    {{--    </section>--}}
    <!--/ Map end here -->
@endsection
