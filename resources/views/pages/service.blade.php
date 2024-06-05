@extends('layouts.main')
@section('content')
    <div id="banner-area">
        <img src="{{ asset('assets2/images/banner/banner2.jpg') }}" alt=""/>
        <div class="parallax-overlay"></div>
        <!-- Subpage title start -->
        <div class="banner-title-content">
            <div class="text-center">
                <h2>Services</h2>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Company</li>
                    <li>Services</li>
                </ul>
            </div>
        </div><!-- Subpage title end -->
    </div><!-- Banner area end -->

    <!-- Main container start -->

    <section id="main-container" class="service-section">
        <div class="container">

            <!-- Services -->

            <div class="row">
                <div class="col-md-12 heading">
                    <span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
                    <h2 class="title classic">Our Services</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="-8 0 40 24"
                                     stroke-width="1.5" stroke="currentColor"
                                     class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"/>
                                </svg>
                            </span>
                            <h3>@lang('lang.Custom Software Development')</h3>
                            <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid
                                befor</p>
                        </div>
                    </div><!--/ End first service -->

                    <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
                            <h3>Apps Development</h3>
                            <p>Food truck master cleanse mixtape minim Portland, cardigan stumptown chambray swag</p>
                        </div>

                    </div><!--/ End Second service -->

                    <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-10 0 45 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-6">
                                  <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"/>
                                </svg>
                            </span>
                            <h3>eCommerce Websites</h3>
                            <p>Neutra Thundercats craft beer, listicle meggings bicycle rights 90's XOXO beard
                                cardiga</p>
                        </div>
                    </div><!--/ End Third service -->

                    <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
                            <h3>Design for Startups</h3>
                            <p>We design beautiful modern engaging websites that always latest responsive
                                technologies.</p>
                        </div>
                    </div><!--/ End 4th service -->
                </div>
            </div><!-- Content 1st row end -->

            <div class="gap-40"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-bar-chart"></i></span>
                            <h3>SEO Service</h3>
                            <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid
                                befor</p>
                        </div>
                    </div><!--/ End first service -->

                    <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-bicycle"></i></span>
                            <h3>Startup Idea</h3>
                            <p>Food truck master cleanse mixtape minim Portland, cardigan stumptown chambray swag</p>
                        </div>

                    </div><!--/ End Second service -->

                    <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-comments"></i></span>
                            <h3>Consultation</h3>
                            <p>Neutra Thundercats craft beer, listicle meggings bicycle rights 90's XOXO beard
                                cardiga</p>
                        </div>
                    </div><!--/ End Third service -->

                    <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-dollar"></i></span>
                            <h3>Croud Funding</h3>
                            <p>We design beautiful modern engaging websites that always latest responsive
                                technologies.</p>
                        </div>
                    </div><!--/ End 4th service -->
                </div>
            </div><!-- Content 2nd row end -->

            <!-- Services end -->


        </div><!--/ 1st container end -->


        <div class="gap-60"></div>


        <!-- Testimonial start-->
        <div class="testimonial parallax parallax3">
            <div class="parallax-overlay"></div>
            <div class="container">
                <div class="row">
                    <div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
                        <div class="item">
                            <div class="testimonial-thumb">
                                <img src="images/team/testimonial1.jpg" alt="testimonial">
                            </div>
                            <div class="testimonial-content">
                                <p class="testimonial-text">
                                    Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover
                                    many web sites still in their infancy. Various versions have evolved over the years,
                                    sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to
                                    using.
                                </p>
                                <h3 class="name">Sarah Arevik<span>Chief Executive</span></h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-thumb">
                                <img src="images/team/testimonial2.jpg" alt="testimonial">
                            </div>
                            <div class="testimonial-content">
                                <p class="testimonial-text">
                                    Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover
                                    many web sites still in their infancy. Various versions have evolved over the years,
                                    sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to
                                    using.
                                </p>
                                <h3 class="name">Narek Bedros<span>Sr. Manager</span></h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-thumb">
                                <img src="images/team/testimonial3.jpg" alt="testimonial">
                            </div>
                            <div class="testimonial-content">
                                <p class="testimonial-text">
                                    Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover
                                    many web sites still in their infancy. Various versions have evolved over the years,
                                    sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to
                                    using.
                                </p>
                                <h3 class="name">Taline Lucine<span>Sales Manager</span></h3>
                            </div>
                        </div>
                    </div><!--/ Testimonial carousel end-->
                </div><!--/ Row end-->
            </div><!--/  Container end-->
        </div><!--/ Testimonial end-->
        <section class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Join with BizCraft and Give Your Website a Brand New Look</h3>
                        <a href="#" class="pull-right btn btn-primary white">Purchase Now</a>
                    </div>
                </div>
            </div>
        </section>

    </section><!--/ Main container end -->

@endsection
