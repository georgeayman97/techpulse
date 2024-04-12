@extends('layouts.master')
@section('title','TechPulse Solutions')
@section('content')
    <main id="main-content" class="body-container-wrapper">
        <div class=" body-container body-container--home">
            <div class="row-fluid-wrapper">
                <div class="row-fluid">
                    <div class="span12 widget-span widget-type-cell " style="" data-widget-type="cell" data-x="0"
                         data-w="12">
                        <div
                            class="row-fluid-wrapper row-depth-1 row-number-1 dnd_area_101-dnd_partial-1-row-0-force-full-width-section dnd-section dnd_area_101-dnd_partial-1-row-0-padding">
                            <div class="row-fluid ">
                                <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                     data-widget-type="custom_widget" data-x="0" data-w="12">
                                    <div id="hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1"
                                         class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                         style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                        <section class="focus_module_hero">
                                            <div class="splide focus_splide">
                                                <div class="splide__arrows">
                                                    <button class="splide__arrow splide__arrow--prev"> <span
                                                            id="hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1_"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_icon"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="icon">
                 <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"
                      aria-labelledby="arrow-right12" role="img">
                  <title id="arrow-right12">Previous slide</title>
                  <g id="arrow-right12_layer">
                   <path
                       d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/>
                  </g>
                 </svg></span></button>
                                                    <button class="splide__arrow splide__arrow--next"> <span
                                                            id="hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1_"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_icon"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="icon">
                 <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"
                      aria-labelledby="arrow-right13" role="img">
                  <title id="arrow-right13">Next slide</title>
                  <g id="arrow-right13_layer">
                   <path
                       d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/>
                  </g>
                 </svg></span></button>
                                                </div>
                                                <div class="splide__track">
                                                    <div class="splide__list">
                                                        <div class="splide__slide">
                                                            <div class="focus_hero_slide mhsb1">
                                                                <div class="focus_hero_lens"></div>
                                                                <div class="content-wrapper">
                                                                    <div class="focus_hero_slide_inner">
                                                                        <div class="focus_hero_slide_inner-text">
                                                                            <h1 class="focus_hero_title mhst1">We Are
                                                                                Developers</h1>
                                                                            <p class="mhsp1">At TechPulse Solutions, we
                                                                                are passionate developers crafting
                                                                                innovative solutions. Our expertise
                                                                                drives technological advancements to
                                                                                propel your business forward.</p>
                                                                            <div class="hero-buttons">
                                                                                <a class="button focus_primary_button"
                                                                                   href="{{ route('about-us') }}">
                                                                                    Discover </a>
                                                                            </div>
                                                                        </div>
                                                                        <img class="focus_hero_slide-image"
                                                                             src="{{ asset('assets/img/slide1.png') }}"
                                                                             alt="img-001" loading="lazy" width="400"
                                                                             height="348">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="splide__slide">
                                                            <div class="focus_hero_slide mhsb1">
                                                                <div class="focus_hero_lens"></div>
                                                                <div class="content-wrapper">
                                                                    <div class="focus_hero_slide_inner">
                                                                        <div class="focus_hero_slide_inner-text">
                                                                            <h1 class="focus_hero_title mhst1">We Are
                                                                                Creative</h1>
                                                                            <p class="mhsp1">At TechPulse Solutions,
                                                                                creativity drives our innovation. We
                                                                                specialize in creating captivating
                                                                                digital experiences that resonate with
                                                                                your audience.</p>
                                                                            <div class="hero-buttons">
                                                                                <a class="button focus_primary_button"
                                                                                   href="{{ route('about-us') }}">
                                                                                    Discover </a>
                                                                            </div>
                                                                        </div>
                                                                        <img class="focus_hero_slide-image"
                                                                             src="{{ asset('assets/img/slide2.png') }}"
                                                                             alt="img-001" loading="lazy" width="400"
                                                                             height="348">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="splide__slide">
                                                            <div class="focus_hero_slide mhsb1">
                                                                <div class="focus_hero_lens"></div>
                                                                <div class="content-wrapper">
                                                                    <div class="focus_hero_slide_inner">
                                                                        <div class="focus_hero_slide_inner-text">
                                                                            <h1 class="focus_hero_title mhst1">We Are
                                                                                Flexible</h1>
                                                                            <p class="mhsp1">At TechPulse Solutions,
                                                                                flexibility is key to our success. We
                                                                                adapt to your needs, ensuring seamless
                                                                                collaboration and delivering tailored
                                                                                solutions on time, every time.</p>
                                                                            <div class="hero-buttons">
                                                                                <a class="button focus_primary_button"
                                                                                   href="{{ route('about-us') }}">
                                                                                    Discover </a>
                                                                            </div>
                                                                        </div>
                                                                        <img class="focus_hero_slide-image"
                                                                             src="{{ asset('assets/img/slide3.png') }}"
                                                                             alt="img-001" loading="lazy" width="400"
                                                                             height="348">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="splide__slide">
                                                            <div class="focus_hero_slide mhsb1">
                                                                <div class="focus_hero_lens"></div>
                                                                <div class="content-wrapper">
                                                                    <div class="focus_hero_slide_inner">
                                                                        <div class="focus_hero_slide_inner-text">
                                                                            <h1 class="focus_hero_title mhst1">Crafting
                                                                                Engaging Apps</h1>
                                                                            <p class="mhsp1">At TechPulse Solutions, we
                                                                                specialize in creating dynamic websites
                                                                                and mobile apps. Let us transform your
                                                                                ideas into innovative digital solutions
                                                                                that captivate your audience.</p>
                                                                            <div class="hero-buttons">
                                                                                <a class="button focus_primary_button"
                                                                                   href="{{ route('about-us') }}">
                                                                                    Discover </a>
                                                                            </div>
                                                                        </div>
                                                                        <img class="focus_hero_slide-image"
                                                                             src="{{ asset('assets/img/slide4.png') }}"
                                                                             alt="img-001" loading="lazy" width="400"
                                                                             height="348">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <!--end widget-span -->
                            </div>
                            <!--end row-->
                            <!-- ======= Clients Section ======= -->
                            <section id="clients" class="clients section-bg">
                                <div class="container">

                                    <div class="row" id="client-logos">
                                        <!-- Client logos will be dynamically added here -->
                                    </div>

                                </div>
                            </section>
                            <!-- End Clients Section -->
                        </div>

                        <!--end row-wrapper -->
                        <div class="row-fluid-wrapper row-depth-1 row-number-1 dnd-section">
                            <div class="row-fluid ">
                                <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                     data-widget-type="cell" data-x="0" data-w="12">
                                    <div class="row-fluid-wrapper row-depth-1 row-number-2 dnd-row">
                                        <div class="row-fluid ">
                                            <div
                                                class="span4 widget-span widget-type-cell dnd_area_101-dnd_partial-2-column-2-margin dnd_area_101-dnd_partial-2-column-2-padding dnd-column"
                                                style="" data-widget-type="cell" data-x="0" data-w="4">
                                                <div class="row-fluid-wrapper row-depth-1 row-number-3 dnd-row">
                                                    <div class="row-fluid ">
                                                        <div
                                                            class="span12 widget-span widget-type-custom_widget dnd_area_101-dnd_partial-2-module-3-flexbox-positioning dnd-module"
                                                            style="" data-widget-type="custom_widget" data-x="0"
                                                            data-w="12">
                                                            <div id="hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-3"
                                                                 class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module focus_linked_image widget-type-linked_image"
                                                                 style="" data-hs-cos-general-type="widget"
                                                                 data-hs-cos-type="module">
                                                                <span
                                                                    id="hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-3_"
                                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_linked_image"
                                                                    style="" data-hs-cos-general-type="widget"
                                                                    data-hs-cos-type="linked_image"><img
                                                                        src="https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-802.png?width=270&amp;name=img-802.png"
                                                                        class="hs-image-widget "
                                                                        style="width:270px;border-width:0px;border:0px;"
                                                                        width="270" alt="Image 001" title="Image 001"
                                                                        srcset="https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-802.png?width=135&amp;name=img-802.png 135w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-802.png?width=270&amp;name=img-802.png 270w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-802.png?width=405&amp;name=img-802.png 405w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-802.png?width=540&amp;name=img-802.png 540w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-802.png?width=675&amp;name=img-802.png 675w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-802.png?width=810&amp;name=img-802.png 810w"
                                                                        sizes="(max-width: 270px) 100vw, 270px"></span>
                                                            </div>
                                                        </div>
                                                        <!--end widget-span -->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <!--end row-wrapper -->
                                                <div class="row-fluid-wrapper row-depth-1 row-number-4 dnd-row">
                                                    <div class="row-fluid ">
                                                        <div
                                                            class="span12 widget-span widget-type-custom_widget dnd-module"
                                                            style="" data-widget-type="custom_widget" data-x="0"
                                                            data-w="12">
                                                            <div id="hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-4"
                                                                 class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                                 style="" data-hs-cos-general-type="widget"
                                                                 data-hs-cos-type="module">
                                                                <span
                                                                    id="hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-4_"
                                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                    style="" data-hs-cos-general-type="widget"
                                                                    data-hs-cos-type="rich_text"><h4>Analyzing your marketing requirements</h4> <p>Far far away, behind the word mountains, far from the countries <a
                                                                            href="#">Vokalia and Consonantia</a>, there live the blind texts and more.</p></span>
                                                            </div>
                                                        </div>
                                                        <!--end widget-span -->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <!--end row-wrapper -->
                                            </div>
                                            <!--end widget-span -->
                                            <div
                                                class="span4 widget-span widget-type-cell dnd_area_101-dnd_partial-2-column-5-padding dnd-column dnd_area_101-dnd_partial-2-column-5-margin"
                                                style="" data-widget-type="cell" data-x="4" data-w="4">
                                                <div class="row-fluid-wrapper row-depth-1 row-number-5 dnd-row">
                                                    <div class="row-fluid ">
                                                        <div
                                                            class="span12 widget-span widget-type-custom_widget dnd_area_101-dnd_partial-2-module-6-flexbox-positioning dnd-module"
                                                            style="" data-widget-type="custom_widget" data-x="0"
                                                            data-w="12">
                                                            <div id="hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-6"
                                                                 class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module focus_linked_image widget-type-linked_image"
                                                                 style="" data-hs-cos-general-type="widget"
                                                                 data-hs-cos-type="module">
                                                                <span
                                                                    id="hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-6_"
                                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_linked_image"
                                                                    style="" data-hs-cos-general-type="widget"
                                                                    data-hs-cos-type="linked_image"><img
                                                                        src="https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-803a.png?width=270&amp;name=img-803a.png"
                                                                        class="hs-image-widget "
                                                                        style="width:270px;border-width:0px;border:0px;"
                                                                        width="270" alt="Image 002" title="Image 002"
                                                                        srcset="https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-803a.png?width=135&amp;name=img-803a.png 135w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-803a.png?width=270&amp;name=img-803a.png 270w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-803a.png?width=405&amp;name=img-803a.png 405w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-803a.png?width=540&amp;name=img-803a.png 540w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-803a.png?width=675&amp;name=img-803a.png 675w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-803a.png?width=810&amp;name=img-803a.png 810w"
                                                                        sizes="(max-width: 270px) 100vw, 270px"></span>
                                                            </div>
                                                        </div>
                                                        <!--end widget-span -->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <!--end row-wrapper -->
                                                <div class="row-fluid-wrapper row-depth-1 row-number-6 dnd-row">
                                                    <div class="row-fluid ">
                                                        <div
                                                            class="span12 widget-span widget-type-custom_widget dnd-module"
                                                            style="" data-widget-type="custom_widget" data-x="0"
                                                            data-w="12">
                                                            <div id="hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-7"
                                                                 class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                                 style="" data-hs-cos-general-type="widget"
                                                                 data-hs-cos-type="module">
                                                                <span
                                                                    id="hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-7_"
                                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                    style="" data-hs-cos-general-type="widget"
                                                                    data-hs-cos-type="rich_text"><h4>Planning the steps that will rocket your business stuff</h4> <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli.</p></span>
                                                            </div>
                                                        </div>
                                                        <!--end widget-span -->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <!--end row-wrapper -->
                                            </div>
                                            <!--end widget-span -->
                                            <div
                                                class="span4 widget-span widget-type-cell dnd_area_101-dnd_partial-2-column-8-padding dnd-column"
                                                style="" data-widget-type="cell" data-x="8" data-w="4">
                                                <div class="row-fluid-wrapper row-depth-1 row-number-7 dnd-row">
                                                    <div class="row-fluid ">
                                                        <div
                                                            class="span12 widget-span widget-type-custom_widget dnd_area_101-dnd_partial-2-module-9-flexbox-positioning dnd-module"
                                                            style="" data-widget-type="custom_widget" data-x="0"
                                                            data-w="12">
                                                            <div id="hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-9"
                                                                 class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module focus_linked_image widget-type-linked_image"
                                                                 style="" data-hs-cos-general-type="widget"
                                                                 data-hs-cos-type="module">
                                                                <span
                                                                    id="hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-9_"
                                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_linked_image"
                                                                    style="" data-hs-cos-general-type="widget"
                                                                    data-hs-cos-type="linked_image"><img
                                                                        src="https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-804.png?width=270&amp;name=img-804.png"
                                                                        class="hs-image-widget "
                                                                        style="width:270px;border-width:0px;border:0px;"
                                                                        width="270" alt="Image 003" title="Image 003"
                                                                        srcset="https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-804.png?width=135&amp;name=img-804.png 135w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-804.png?width=270&amp;name=img-804.png 270w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-804.png?width=405&amp;name=img-804.png 405w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-804.png?width=540&amp;name=img-804.png 540w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-804.png?width=675&amp;name=img-804.png 675w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-804.png?width=810&amp;name=img-804.png 810w"
                                                                        sizes="(max-width: 270px) 100vw, 270px"></span>
                                                            </div>
                                                        </div>
                                                        <!--end widget-span -->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <!--end row-wrapper -->
                                                <div class="row-fluid-wrapper row-depth-1 row-number-8 dnd-row">
                                                    <div class="row-fluid ">
                                                        <div
                                                            class="span12 widget-span widget-type-custom_widget dnd-module"
                                                            style="" data-widget-type="custom_widget" data-x="0"
                                                            data-w="12">
                                                            <div
                                                                id="hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-10"
                                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                                style="" data-hs-cos-general-type="widget"
                                                                data-hs-cos-type="module">
                                                                <span
                                                                    id="hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-10_"
                                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                    style="" data-hs-cos-general-type="widget"
                                                                    data-hs-cos-type="rich_text"><h4>Our work is not finished until we report it nicely</h4> <p>On the skyline of her <a
                                                                            href="#">hometown</a> Bookmarks grove, the headline of Alphabet Village and the subline of her own road she had a last view with her eyes.</p></span>
                                                            </div>
                                                        </div>
                                                        <!--end widget-span -->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <!--end row-wrapper -->
                                            </div>
                                            <!--end widget-span -->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end row-wrapper -->
                                </div>
                                <!--end widget-span -->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end row-wrapper -->

                        <div
                            class="row-fluid-wrapper row-depth-1 row-number-1 dnd-section dnd_area_101-row-3-background-color dnd_area_101-row-3-padding">
                            <div class="row-fluid ">
                                <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                     data-widget-type="custom_widget" data-x="0" data-w="12">
                                    <div id="hs_cos_wrapper_dnd_area_101-module-4"
                                         class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                         style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                        <div
                                            class="focus_grid-container focus_module_number_counters mat_pri_bor mat_pri_cor mat_pri_sha"
                                            data-speed="3">
                                            <section class="focus_grid-inner">
                                                <div class="focus_grid-col focus_grid--3col mgi-col1">
                                                    <div class="focus_grid-content focus_grid-content--3col">
                                                        <div class="focus_module_number_counters-top">
                 <span id="hs_cos_wrapper_dnd_area_101-module-4_"
                       class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_icon counter_icon" style=""
                       data-hs-cos-general-type="widget" data-hs-cos-type="icon">
                  <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" aria-hidden="true">
                   <g id="heart14_layer">
                    <path
                        d="M257.3 475.4L92.5 313.6C85.4 307 24 248.1 24 174.8 24 84.1 80.8 24 176 24c41.4 0 80.6 22.8 112 49.8 31.3-27 70.6-49.8 112-49.8 91.7 0 152 56.5 152 150.8 0 52-31.8 103.5-68.1 138.7l-.4.4-164.8 161.5a43.7 43.7 0 0 1-61.4 0zM125.9 279.1L288 438.3l161.8-158.7c27.3-27 54.2-66.3 54.2-104.8C504 107.9 465.8 72 400 72c-47.2 0-92.8 49.3-112 68.4-17-17-64-68.4-112-68.4-65.9 0-104 35.9-104 102.8 0 37.3 26.7 78.9 53.9 104.3z"/>
                   </g>
                  </svg></span>
                                                            <div class="focus_module_number_counter" data-target="24">
                                                                0
                                                            </div>
                                                            <div class="focus_module_number_counters_text">
                                                                happy customers.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="focus_grid-col focus_grid--3col mgi-col2">
                                                    <div class="focus_grid-content focus_grid-content--3col">
                                                        <div class="focus_module_number_counters-top">
                 <span id="hs_cos_wrapper_dnd_area_101-module-4_"
                       class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_icon counter_icon" style=""
                       data-hs-cos-general-type="widget" data-hs-cos-type="icon">
                  <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" aria-hidden="true">
                   <g id="check15_layer">
                    <path
                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/>
                   </g>
                  </svg></span>
                                                            <div class="focus_module_number_counter" data-target="597">
                                                                0
                                                            </div>
                                                            <div class="focus_module_number_counters_text">
                                                                completed projects.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="focus_grid-col focus_grid--3col mgi-col3">
                                                    <div class="focus_grid-content focus_grid-content--3col">
                                                        <div class="focus_module_number_counters-top">
                 <span id="hs_cos_wrapper_dnd_area_101-module-4_"
                       class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_icon counter_icon" style=""
                       data-hs-cos-general-type="widget" data-hs-cos-type="icon">
                  <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" aria-hidden="true">
                   <g id="clock16_layer">
                    <path
                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/>
                   </g>
                  </svg></span>
                                                            <div class="focus_module_number_counter" data-target="1776">
                                                                0
                                                            </div>
                                                            <div class="focus_module_number_counters_text">
                                                                working hours.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                <!--end widget-span -->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end row-wrapper counter-->

                        <div
                            class="row-fluid-wrapper row-depth-1 row-number-1 dnd-section dnd_area_101-dnd_partial-3-row-0-background-color dnd_area_101-dnd_partial-3-row-0-padding">
                            <div class="row-fluid ">
                                <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                     data-widget-type="cell" data-x="0" data-w="12">
                                    <div
                                        class="row-fluid-wrapper row-depth-1 row-number-2 dnd_area_101-dnd_partial-3-column-1-row-0-margin dnd-row">
                                        <div class="row-fluid ">
                                            <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                 style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                                <div id="hs_cos_wrapper_dnd_area_101-dnd_partial-3-module-2"
                                                     class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                     style="" data-hs-cos-general-type="widget"
                                                     data-hs-cos-type="module">
                                                    <div class="focus_module_fancy_header_container focus_centered">
                                                        <h2 class="focus_module_fancy_header huge">Our Work</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end widget-span -->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end row-wrapper -->

                                    <div class="container">
                                        <div class="row">

                                            <!-- First column -->
                                            <div class="col-md-4 p-3">

                                                <!-- Card -->
                                                <div class="card">
                                                    <div class="bg-image hover-overlay" data-mdb-ripple-init
                                                         data-mdb-ripple-color="light">
                                                        <a href="{{ route('projects') }}">
                                                            <img
                                                                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp"
                                                                class="img-fluid" alt=""/>
                                                        </a>
                                                        <a href="#!">
                                                            <div class="mask"
                                                                 style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                        </a>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the
                                                            card title and make up the bulk of the card's
                                                            content.</p>
                                                        {{--                                                        <a href="#!" class="btn btn-primary">Button</a>--}}
                                                    </div>
                                                </div>
                                                <!-- Card -->

                                            </div>
                                            <!-- First column -->

                                            <!-- Second column -->
                                            <div class="col-md-4 p-3">

                                                <!-- Card -->
                                                <div class="card">
                                                    <div class="bg-image hover-overlay" data-mdb-ripple-init
                                                         data-mdb-ripple-color="light">
                                                        <img
                                                            src="https://mdbcdn.b-cdn.net/img/new/standard/nature/112.webp"
                                                            class="img-fluid"/>
                                                        <a href="#!">
                                                            <div class="mask"
                                                                 style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                        </a>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the
                                                            card title and make up the bulk of the card's
                                                            content.</p>
                                                        {{--                                                        <a href="#!" class="btn btn-primary">Button</a>--}}
                                                    </div>
                                                </div>
                                                <!-- Card -->

                                            </div>
                                            <!-- Second column -->

                                            <!-- Third column -->
                                            <div class="col-md-4 p-3">

                                                <!-- Card -->
                                                <div class="card">
                                                    <div class="bg-image hover-overlay" data-mdb-ripple-init
                                                         data-mdb-ripple-color="light">
                                                        <img
                                                            src="https://mdbcdn.b-cdn.net/img/new/standard/nature/113.webp"
                                                            class="img-fluid"/>
                                                        <a href="#!">
                                                            <div class="mask"
                                                                 style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                        </a>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the
                                                            card title and make up the bulk of the card's
                                                            content.</p>
                                                        {{--                                                        <a href="#!" class="btn btn-primary">Button</a>--}}
                                                    </div>
                                                </div>
                                                <!-- Card -->

                                            </div>
                                            <!-- Third column -->

                                            <!-- Third column -->
                                            <div class="col-md-4 p-3">

                                                <!-- Card -->
                                                <div class="card">
                                                    <div class="bg-image hover-overlay" data-mdb-ripple-init
                                                         data-mdb-ripple-color="light">
                                                        <img
                                                            src="https://mdbcdn.b-cdn.net/img/new/standard/nature/113.webp"
                                                            class="img-fluid"/>
                                                        <a href="#!">
                                                            <div class="mask"
                                                                 style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                        </a>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the
                                                            card title and make up the bulk of the card's
                                                            content.</p>
                                                        {{--                                                        <a href="#!" class="btn btn-primary">Button</a>--}}
                                                    </div>
                                                </div>
                                                <!-- Card -->

                                            </div>
                                            <!-- Third column -->
                                            <!-- Third column -->
                                            <div class="col-md-4 p-3">

                                                <!-- Card -->
                                                <div class="card">
                                                    <div class="bg-image hover-overlay" data-mdb-ripple-init
                                                         data-mdb-ripple-color="light">
                                                        <img
                                                            src="https://mdbcdn.b-cdn.net/img/new/standard/nature/113.webp"
                                                            class="img-fluid"/>
                                                        <a href="#!">
                                                            <div class="mask"
                                                                 style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                        </a>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the
                                                            card title and make up the bulk of the card's
                                                            content.</p>
                                                        {{--                                                        <a href="#!" class="btn btn-primary">Button</a>--}}
                                                    </div>
                                                </div>
                                                <!-- Card -->

                                            </div>
                                            <!-- Third column -->
                                            <!-- Third column -->
                                            <div class="col-md-4 p-3">

                                                <!-- Card -->
                                                <div class="card">
                                                    <div class="bg-image hover-overlay" data-mdb-ripple-init
                                                         data-mdb-ripple-color="light">
                                                        <img
                                                            src="https://mdbcdn.b-cdn.net/img/new/standard/nature/113.webp"
                                                            class="img-fluid"/>
                                                        <a href="#!">
                                                            <div class="mask"
                                                                 style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                        </a>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the
                                                            card title and make up the bulk of the card's
                                                            content.</p>
                                                        {{--                                                        <a href="#!" class="btn btn-primary">Button</a>--}}
                                                    </div>
                                                </div>
                                                <!-- Card -->

                                            </div>
                                            <!-- Third column -->
                                        </div>
                                    </div>
                                </div>
                                <!--end widget-span -->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end row-wrapper work -->

                        <div
                            class="row-fluid-wrapper row-depth-1 row-number-1 dnd-section dnd_area_101-dnd_partial-8-row-0-force-full-width-section dnd_area_101-dnd_partial-8-row-0-padding">
                            <div class="row-fluid ">
                                <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                     data-widget-type="custom_widget" data-x="0" data-w="12">
                                    <div id="hs_cos_wrapper_dnd_area_101-dnd_partial-8-module-1"
                                         class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                         style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                        <div class="focus_module_cta_section">
                                            <div class="focus_module_cta_section-lens"></div>
                                            <div class="focus_module_cta_section-inner content-wrapper">
                                                <div class="focus_module_cta_section-content">
                                                    <img class="cta_section-icon"
                                                         src="https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-005.png?width=600&amp;height=496&amp;name=img-005.png"
                                                         alt="cta-section-image" loading="lazy" width="600" height="496"
                                                         srcset="https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-005.png?width=300&amp;height=248&amp;name=img-005.png 300w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-005.png?width=600&amp;height=496&amp;name=img-005.png 600w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-005.png?width=900&amp;height=744&amp;name=img-005.png 900w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-005.png?width=1200&amp;height=992&amp;name=img-005.png 1200w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-005.png?width=1500&amp;height=1240&amp;name=img-005.png 1500w, https://19808513.fs1.hubspotusercontent-na1.net/hub/19808513/hubfs/focus-demo/img-005.png?width=1800&amp;height=1488&amp;name=img-005.png 1800w"
                                                         sizes="(max-width: 600px) 100vw, 600px">
                                                    <h2 class="focus_module_cta_section-title">Ask for a free
                                                        Consultation now!</h2>
                                                    <p class="focus_module_cta_section-text">This is the last call for
                                                        big chances and discounted prices. Get the most out of Focus
                                                        theme today.</p>
                                                </div>
                                                <div class="focus_module_cta_section-ctas">
                                                    <div class="button-wrapper focus_module_container">
                                                        <a class="button focus_primary_button"
                                                           href="{{ route('contact-us.create') }}"> Learn More </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end widget-span -->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end row-wrapper -->
                    </div>
                    <!--end widget-span -->
                </div>
            </div>
        </div>
    </main>
@endsection
