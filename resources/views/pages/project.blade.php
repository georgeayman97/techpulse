@extends('layouts.arsha')
@section('title','project')
@section('content')
    <div
        class="row-fluid-wrapper row-depth-1 row-number-1 dnd_area_101-dnd_partial-1-row-0-background-color dnd-section dnd_area_101-dnd_partial-1-row-0-padding">
        <div class="row-fluid ">
            <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                 data-widget-type="custom_widget" data-x="0" data-w="12">
                <div id="hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1"
                     class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""
                     data-hs-cos-general-type="widget" data-hs-cos-type="module">
                    <div class="focus_module_fancy_header_container focus_centered">
                        <h1 class="focus_module_fancy_header huge">Project</h1>
                    </div>
                </div>
            </div>
            <!--end widget-span -->
        </div>
        <!--end row-->
    </div>
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('assets/arsha/assets/img/portfolio/portfolio-1.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('assets/arsha/assets/img/portfolio/portfolio-2.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('assets/arsha/assets/img/portfolio/portfolio-3.jpg') }}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: Web design</li>
                            <li><strong>Client</strong>: ASU Company</li>
                            <li><strong>Project date</strong>: 01 March, 2020</li>
                            <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>This is an example of portfolio detail</h2>
                        <p>
                            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore
                            quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim.
                            Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi
                            nulla at esse enim cum deserunt eius.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Details Section -->
@endsection
