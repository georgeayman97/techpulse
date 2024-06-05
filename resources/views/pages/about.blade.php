@extends('layouts.main')
@section('title','About')
@section('content')
    <div id="banner-area">
        <img src="{{ asset('assets2/images/banner/banner1.jpg') }}" alt=""/>
        <div class="parallax-overlay"></div>
        <!-- Subpage title start -->
        <div class="banner-title-content">
            <div class="text-center">
                <h2>About Us</h2>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Company</li>
                    <li>About Us</li>
                </ul>
            </div>
        </div><!-- Subpage title end -->
    </div><!-- Banner area end -->

    <!-- Main container start -->

    <section id="main-container">
        <div class="container">

            <!-- Company Profile -->
            <div class="row">
                <div class="col-md-12 heading">
                    <span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
                    <h2 class="title classic">TechPulse Solutions</h2>
                </div>
            </div><!-- Title row end -->

            <div class="row">
                <div class="landing-tab clearfix">
                    <ul class="nav nav-tabs nav-stacked col-md-3 col-sm-5">
                        <li class="active">
                            <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-info-circle"></i></span>
                                <div class="tab-info">
                                    <h3>About Us</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-laptop-code"></i></span>
                                <div class="tab-info">
                                    <h3>Services</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-map-marker-alt"></i></span>
                                <div class="tab-info">
                                    <h3>Locations</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_d" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-users"></i></span>
                                <div class="tab-info">
                                    <h3>Team</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_e" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-globe-europe"></i></span>
                                <div class="tab-info">
                                    <h3>Serving Regions</h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content col-md-9 col-sm-7">
                        <div class="tab-pane active animated fadeInRight" id="tab_a">
                            <i class="fa fa-building big"></i>
                            <h3>Established Software House</h3>
                            <p>TechPulse Solutions is a dynamic software development company specializing in web and
                                mobile application development, ERP systems, and e-commerce solutions. With a talented
                                team of over 40 professionals, we leverage cutting-edge technologies such as Laravel,
                                PHP, Node.js, Python, React, Bootstrap, Tailwind, Angular, Flutter, Swift, Kotlin,
                                Shopify, WordPress, AWS, and Azure to deliver high-quality software solutions.</p>
                        </div>
                        <div class="tab-pane animated fadeInLeft" id="tab_b">
                            <i class="fa fa-tools big"></i>
                            <h3>Comprehensive Services</h3>
                            <p>We offer a wide range of services including website development, mobile app creation, ERP
                                system implementation, and e-commerce platform setup. Our expertise spans across various
                                technologies and platforms, ensuring that we can cater to a broad spectrum of client
                                needs.</p>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_c">
                            <i class="fa fa-map-markers-alt big"></i>
                            <h3>Global Presence</h3>
                            <p>With offices in Egypt, Dubai, and the United States, and serving clients throughout
                                Europe, the Middle East, and the US, TechPulse Solutions has a strong global presence.
                                Our team is committed to delivering top-notch software solutions tailored to meet the
                                unique requirements of businesses worldwide.</p>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_d">
                            <i class="fa fa-users big"></i>
                            <h3>Diverse & Talented Team</h3>
                            <p>Our team comprises over 40 skilled professionals who are passionate about technology and
                                dedicated to excellence. We pride ourselves on being highly scalable, allowing us to
                                quickly adapt and grow our team to meet the demands of our expanding client base.</p>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_e">
                            <i class="fa fa-globe-europe big"></i>
                            <h3>Wide Reach</h3>
                            <p>From Europe to the US and across the Middle East, TechPulse Solutions supports businesses
                                in their digital transformation journey. Our extensive reach allows us to serve clients
                                effectively, regardless of their location, ensuring they receive the highest quality
                                software solutions.</p>
                        </div>
                    </div><!-- tab content -->
                </div><!-- Overview tab end -->
            </div><!--/ Content row end -->

            <!-- Company Profile -->

        </div><!--/ 1st container end -->


        <div class="gap-60"></div>


        <!-- Counter Strat -->
        <div class="ts_counter_bg parallax parallax2">
            <div class="parallax-overlay"></div>
            <div class="container">
                <div class="row wow fadeInLeft text-center">
                    <div class="facts col-md-3 col-sm-6">
                        <span class="facts-icon"><i class="fa fa-user"></i></span>
                        <div class="facts-num">
                            <span class="counter">1200</span>
                        </div>
                        <h3>Clients</h3>
                    </div>

                    <div class="facts col-md-3 col-sm-6">
                        <span class="facts-icon"><i class="fa fa-institution"></i></span>
                        <div class="facts-num">
                            <span class="counter">1277</span>
                        </div>
                        <h3>Item Sold</h3>
                    </div>

                    <div class="facts col-md-3 col-sm-6">
                        <span class="facts-icon"><i class="fa fa-suitcase"></i></span>
                        <div class="facts-num">
                            <span class="counter">869</span>
                        </div>
                        <h3>Projects</h3>
                    </div>

                    <div class="facts col-md-3 col-sm-6">
                        <span class="facts-icon"><i class="fa fa-trophy"></i></span>
                        <div class="facts-num">
                            <span class="counter">76</span>
                        </div>
                        <h3>Awwards</h3>
                    </div>

                    <div class="gap-40"></div>

                    <div><a href="#" class="btn btn-primary solid">See Our Portfolio</a></div>

                </div><!--/ row end -->
            </div><!--/ Container end -->
        </div><!--/ Counter end -->

        <div class="gap-60"></div>


        <div class="container">

            <!-- Company Profile -->

            <div class="row">
                <div class="col-md-12 heading text-center">
                    <h2 class="title2">About Our Company
                        <span class="title-desc">A Quality Experience Team with 4 years experience</span>
                    </h2>
                </div>
            </div><!-- Title row end -->

            <div class="row about-wrapper-top">
                <div class="col-md-6 ts-padding about-message">
                    <h3>Who We Are</h3>
                    <p>"Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis
                        euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed
                        posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla. Lorem
                        ipsum dolor sit amet mattis ut consequat mauris cursus.</p>
                    <p>Curabitur metus felis, venenatis eu ultricies vel, vehicula eu urna. Phasellus eget augue id est
                        fringilla feugiat id a tellus. Sed hendrerit quam sed ante euismod posuere element ante."</p>
                </div><!--/ About message end -->
                <div class="col-md-6 ts-padding about-img"
                     style="height:374px;background:url('{{ asset('assets2/images/pages/about-1.jpg') }}') 50% 50% / cover no-repeat;">
                </div><!--/ About image end -->
            </div><!--/ Content row end -->

            <div class="row about-wrapper-bottom">
                <div class="col-md-6 ts-padding about-img"
                     style="height:374px;background:url('{{ asset('assets2/images/pages/about-2.jpg') }}') 50% 50% / cover no-repeat;">
                </div><!--/ About image end -->
                <div class="col-md-6 ts-padding about-message">
                    <h3>What We Do</h3>
                    <p>"Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis
                        euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed
                        posuere consectetur est at lobortis.</p>
                    <ul class="unstyled arrow">
                        <li><a href="#">Etiam porta sem malesuada</a></li>
                        <li><a href="#">Pellentesque ornare sem lacinia</a></li>
                        <li><a href="#">Cras mattis consectetur purus</a></li>
                        <li><a href="#">Sed hendrerit quam sed ante</a></li>
                    </ul>
                </div><!--/ About message end -->
            </div><!--/ Content row end -->

            <!-- Company Profile -->

        </div>
    </section><!--/ Main container end -->



    <div class="gap-40"></div>

@endsection
