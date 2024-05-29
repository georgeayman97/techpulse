@php use App\Enum\MediaCollection; @endphp
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
                                Need To Invent The Future!
                            </h2>
                            <h3 class="animated3">
                                We Making Difference To Great Things Possible
                            </h3>
                        </div>
                    </div>
                </div><!--/ Carousel item end -->
                <div class="item">
                    <img class="img-responsive" src="{{ asset('assets2/images/slider2/bg2.png') }}" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated4">
                                How Big Can You Dream?
                            </h2>
                            <h3 class="animated5">
                                We are here to make it happen
                            </h3>
                            <p class="animated6"><a href="#" class="slider btn btn-primary white">Buy Now</a></p>
                        </div>
                    </div>
                </div><!--/ Carousel item end -->
                <div class="item">
                    <img class="img-responsive" src="{{ asset('assets2/images/slider2/bg3.png') }}" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated7">
                                Your Challenge is Our Progress
                            </h2>
                            <h3 class="animated8">
                                So, You Don't Need to Go Anywhere Today
                            </h3>
                            <div class="">
                                <a class="animated4 slider btn btn-primary btn-min-block white" href="#">Get Now</a><a
                                    class="animated4 slider btn btn-primary btn-min-block solid" href="#">Live Demo</a>
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
                    <h3>Give Your Website a Brand New Look</h3>
                    <a href="#" class="pull-right btn btn-primary solid">Learn More</a>
                    <a href="#" class="pull-right btn btn-primary white">Buy Now</a>
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
                                                         src="{{ asset('assets2/images/pages/service-1.jpg') }}"
                                                         alt=""/></span>
                        <h3>Multipurpose Concept</h3>
                        <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor
                            sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</p>
                    </div>
                </div><!--/ End first service -->

                <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".8s">
                    <div class="service-content">
                        <span class="service-image"><img class="img-responsive"
                                                         src="{{ asset('assets2/images/pages/service-2.jpg') }}"
                                                         alt=""/></span>
                        <h3>Parallax Section</h3>
                        <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor
                            sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</p>
                    </div>

                </div><!--/ End Second features -->

                <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
                    <div class="service-content">
                        <span class="service-image"><img class="img-responsive"
                                                         src="{{ asset('assets2/images/pages/service-3.jpg') }}"
                                                         alt=""/></span>
                        <h3>Light wight Performance</h3>
                        <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor
                            sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</p>
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
                                            <h3>{{ \Illuminate\Support\Str::limit(getColumn($project,'title'), 20) }}</h3>
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
                    <h2 class="title2">Know About Our Company
                        <span class="title-desc">A Quality Experience Team with 4 years experience</span>
                    </h2>
                </div>
            </div> <!-- Title row end -->

            <div class="row">
                <div class="featured-tab clearfix">
                    <ul class="nav nav-tabs nav-stacked col-md-3 col-sm-5">
                        <li class="active">
                            <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-bank"></i></span>
                                <div class="tab-info"><h3>Who are we</h3></div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-database"></i></span>
                                <div class="tab-info"><h3>Our company</h3></div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-android"></i></span>
                                <div class="tab-info"><h3>What we do</h3></div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_d" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-language"></i></span>
                                <div class="tab-info"><h3>Why choose us</h3></div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_e" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-coffee"></i></span>
                                <div class="tab-info"><h3>Save time with us</h3></div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content col-md-9 col-sm-7">
                        <div class="tab-pane active animated fadeInRight" id="tab_a">
                            <img class="img-responsive pull-left" src="images/tab/featured-tab1.png" alt="">
                            <h3>We are awwared winning company</h3>
                            <p>Over the year we have lots of experience in our field. In sit amet massa sapien.
                                Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit.
                                Duis lorem nulla, eleifend.</p>
                            <ul class="check-list">
                                <li><i class="fa fa-arrow-circle-right"></i> We design to keep in mind business</li>
                                <li><i class="fa fa-arrow-circle-right"></i> Love design to keep in mind business</li>
                                <li><i class="fa fa-arrow-circle-right"></i> Hope design to keep in mind business</li>
                            </ul>
                        </div>
                        <div class="tab-pane animated fadeInLeft" id="tab_b">
                            <img class="img-responsive pull-right" src="images/tab/featured-tab2.png" alt="">
                            <h3>We are awwared winning company</h3>
                            <p>Helvetica cold-pressed lomo messenger bag ugh. Vinyl jean shorts Austin pork belly PBR
                                retro, Etsy VHS kitsch actually messenger bag pug. Pbrbp semiotics try-hard, Schlitz
                                occupy dreamcatcher master cleanse Marfa Vice tofu. </p>
                            <ul class="check-list">
                                <li><i class="fa fa-check"></i> Duis autem vel eum iriure</li>
                                <li><i class="fa fa-check"></i> vulputate molestie consequat</li>
                                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                <li><i class="fa fa-check"></i> Typi non habent claritatem insitam</li>
                                <li><i class="fa fa-check"></i> Nam liber tempor cum soluta nobi</li>
                            </ul>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_c">
                            <h3 class="text-center">We Build Ready made Web Applications for You</h3>
                            <img class="img-responsive" src="images/tab/featured-tab3.png" alt="">
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_d">
                            <h3>We Build Ready made Web Applications for You</h3>
                            <ul class="check-list">
                                <li><i class="fa fa-check"></i> Duis autem vel eum iriure</li>
                                <li><i class="fa fa-check"></i> vulputate molestie consequat</li>
                                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                <li><i class="fa fa-check"></i> Typi non habent claritatem insitam</li>
                                <li><i class="fa fa-check"></i> Nam liber tempor cum soluta nobi</li>
                                <li><i class="fa fa-check"></i> Nam liber tempor cum soluta nobi</li>
                                <li><i class="fa fa-check"></i> Typi non habent claritatem insitam</li>
                                <li><i class="fa fa-check"></i> vulputate molestie consequat</li>
                            </ul>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_e">
                            <i class="fa fa-coffee pull-left big"></i>
                            <h3>Easy Solution on Every Project</h3>
                            <p>Occupy selfies Tonx, +1 Truffaut beard organic normcore tilde flannel artisan squid cray
                                single-origin coffee. Master cleanse vinyl Austin kogi, semiotics skateboard fap
                                wayfarers health goth. Helvetica cray church-key hashtag Carles. Four dollar toast
                                meggings seitan, Tonx pork belly VHS Bushwick. Chambray banh mi cornhole. Locavore
                                messenger bag seitan.</p>
                            <p>Helvetica cold-pressed lomo messenger bag ugh. Vinyl jean shorts Austin pork belly PBR
                                retro, Etsy VHS kitsch actually messenger bag pug. semiotics try-hard, Schlitz occupy
                                dreamcatcher master cleanse Marfa Vice tofu. </p>
                        </div>
                    </div><!-- tab content -->
                </div><!-- Featured tab end -->
            </div><!-- Content row end -->
        </div><!-- Container end -->
    </section><!-- About end -->


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
