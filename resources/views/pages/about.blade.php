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
                    <span class="title-icon classic pull-left"><i class="fa fa-suitcase"></i></span>
                    <h2 class="title classic">Company Profile</h2>
                </div>
            </div><!-- Title row end -->

            <div class="row">
                <div class="landing-tab clearfix">
                    <ul class="nav nav-tabs nav-stacked col-md-3 col-sm-5">
                        <li class="active">
                            <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-info"></i></span>
                                <div class="tab-info">
                                    <h3>Who Are We</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-briefcase"></i></span>
                                <div class="tab-info">
                                    <h3>Our Company</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-android"></i></span>
                                <div class="tab-info">
                                    <h3>What We Do</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_d" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-pagelines"></i></span>
                                <div class="tab-info">
                                    <h3>Modern Design</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_e" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-support"></i></span>
                                <div class="tab-info">
                                    <h3>Dedicated Support</h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content col-md-9 col-sm-7">
                        <div class="tab-pane active animated fadeInRight" id="tab_a">
                            <i class="fa fa-trophy big"></i>
                            <h3>We Are Awwared Winning Company</h3>
                            <p>Over the year we have lots of experience in our field. In sit amet massa sapien.
                                Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit.
                                Duis lorem nulla, eleifend.</p>
                        </div>
                        <div class="tab-pane animated fadeInLeft" id="tab_b">
                            <i class="fa fa-briefcase big"></i>
                            <h3>We Have Worldwide Business</h3>
                            <p>Helvetica cold-pressed lomo messenger bag ugh. Vinyl jean shorts Austin pork belly PBR
                                retro, Etsy VHS kitsch actually messenger bag pug. Pbrb semiotics try-hard, Schlitz
                                occupy dreamcatcher master cleanse Marfa Vice tofu. </p>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_c">
                            <i class="fa fa-android big"></i>
                            <h3>We Build Readymade Applications</h3>
                            <p>Over the year we have lots of experience in our field. In sit amet massa sapien.
                                Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit.
                                Duis lorem nulla, eleifend.</p>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_d">
                            <i class="fa fa-pagelines big"></i>
                            <h3>Clean and Modern Design</h3>
                            <p>Over the year we have lots of experience in our field. In sit amet massa sapien.
                                Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit.
                                Duis lorem nulla, eleifend.</p>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_e">
                            <i class="fa fa-support big"></i>
                            <h3>24/7 Dedicated Support</h3>
                            <p>Occupy selfies Tonx, +1 Truffaut beard organic normcore tilde flannel artisan squid cray
                                single-origin coffee. Master cleanse vinyl Austin kogi, semiotics skateboard fap
                                wayfarers health goth. Helvetica cray church-key hashtag Carles. Four dollar toast
                                meggings seitan, Tonx pork belly VHS Bushwick. Chambray banh mi cornhole. Locavore
                                messenger bag seitan.</p>
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
