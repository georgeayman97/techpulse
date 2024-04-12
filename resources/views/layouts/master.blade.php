<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:description" content="">
    <meta property="og:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:title" content="">
    <style>
        a.cta_button {
            -moz-box-sizing: content-box !important;
            -webkit-box-sizing: content-box !important;
            box-sizing: content-box !important;
            vertical-align: middle
        }

        .hs-breadcrumb-menu {
            list-style-type: none;
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px
        }

        .hs-breadcrumb-menu-item {
            float: left;
            padding: 10px 0px 10px 10px
        }

        .hs-breadcrumb-menu-divider:before {
            content: '›';
            padding-left: 10px
        }

        .hs-featured-image-link {
            border: 0
        }

        .hs-featured-image {
            float: right;
            margin: 0 0 20px 20px;
            max-width: 50%
        }

        @media (max-width: 568px) {
            .hs-featured-image {
                float: none;
                margin: 0;
                width: 100%;
                max-width: 100%
            }
        }

        .hs-screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            overflow: hidden;
            position: absolute !important;
            width: 1px
        }
    </style>

    <link rel="stylesheet"
          href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets/css/theme-overrides.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets/css/website-header.css') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        @media (max-width: 767px) {
            #hs_cos_wrapper_header-top-dnd_area_101-module-1 .focus_module_website_h,
            #hs_cos_wrapper_header-top-dnd_area_101-module-1 .focus_sticky_bar {
                display: none;
            }

            #hs_cos_wrapper_header-top-dnd_area_101-module-1 .focus_mobile_nav_container.open {
                display: flex;
            }
        }

        @media (min-width: 768px) {
            #hs_cos_wrapper_header-top-dnd_area_101-module-1 .focus_mobile_bar,
            #hs_cos_wrapper_header-top-dnd_area_101-module-1 .focus_mobile_nav_container {
                display: none;
            }
        }

    </style>
    <link rel="stylesheet"
          href="{{ asset('assets/css/hero-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cdn-splide.css') }}">
    <style>
        .clients {
            padding: 12px 0;
        }

        .clients #client-logos {
            display: flex;
            justify-content: space-around; /* Adjust alignment as needed */
            flex-wrap: wrap;
        }

        .clients img {
            width: 120px; /* Adjust logo width as needed */
            filter: grayscale(100%);
            transition: filter 0.3s ease-in-out;
        }

        .clients img:hover {
            filter: grayscale(0%);
        }
    </style>
    <style>
        #hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1 .focus_hero_slide_inner {
            padding: 0px 100px 0 100px;
            height: 650px;
        }

        @media (max-width: 1138px) {
            #hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1 .focus_hero_slide_inner {
                padding: 0 60px;
            }
        }

        @media (max-width: 767px) {
            #hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1 .focus_hero_slide_inner {
                padding: 0 30px;
            }
        }

    </style>
    <style>
        #hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1 .mhst1 {
            color: #FFFFFF;
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1 .mhsp1 {
            color: #FFFFFF;
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1 .mhsb1 {
            background-color: #37517e;
        }

    </style>
    <style>
        #hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1 .mhst2 {
            color: #FFF161;
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1 .mhsp2 {
            color: #FFFFFF;
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1 .mhsb2 {
            background-color: #37517e;
        }

    </style>
    <style>
        #hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1 .mhst3 {
            color: #000000;
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1 .mhsp3 {
            color: #000000;
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-1-module-1 .mhsb3 {
            background-color: #37517e;
        }

    </style>
    <link rel="stylesheet"
          href="{{ asset('assets/css/fancy-header.css') }}">
    <style>
        #hs_cos_wrapper_dnd_area_101-dnd_partial-3-module-2 .focus_module_fancy_header {
            color: #000000;
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-3-module-2 .focus_module_fancy_header:after {
            background-color: #000000;
        }

    </style>
    <link rel="stylesheet"
          href="{{ asset('assets/css/text-with-image.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets/css/number-counters.css') }}">
    <style>
        #hs_cos_wrapper_dnd_area_101-dnd_partial-5-module-2 .focus_module_fancy_header {
            color: #000000;
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-5-module-2 .focus_module_fancy_header:after {
            background-color: #000000;
        }

    </style>
    <link rel="stylesheet"
          href="{{ asset('assets/css/events.css') }}">
    <style>
        #hs_cos_wrapper_dnd_area_101-dnd_partial-5-module-3 .focus_grid-col:last-child .focus_module_calendar_item:after {
            display: none;
        }

    </style>
    <link rel="stylesheet"
          href="{{ asset('assets/css/quote.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets/css/single-letter-number.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets/css/section.css') }}">
    <style>
        #hs_cos_wrapper_dnd_area_101-dnd_partial-8-module-1 .focus_module_cta_section {
            background: #E24545;
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-8-module-1 .focus_module_cta_section-lens {
            background: #37517e;
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-8-module-1 .focus_module_cta_section-title {
            color: #FFFFFF;
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-8-module-1 .focus_module_cta_section-text {
            color: #FFFFFF;
        }

    </style>
    <link rel="stylesheet"
          href="{{ asset('assets/css/menu.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets/css/footer.css') }}">
    <style>
        @media (max-width: 767px) {
            #hs_cos_wrapper_footer-dnd_area_101-module-1 .mwf_row {
                flex-direction: column;
                align-items: flex-start;
                gap: 60px;
            }

            #hs_cos_wrapper_footer-dnd_area_101-module-1 .mwf_row_j_full,
            #hs_cos_wrapper_footer-dnd_area_101-module-1 .mwf_row_j_left,
            #hs_cos_wrapper_footer-dnd_area_101-module-1 .mwf_row_j_center,
            #hs_cos_wrapper_footer-dnd_area_101-module-1 .mwf_row_j_right {
                justify-content: flex-start;
            }

            #hs_cos_wrapper_footer-dnd_area_101-module-1 .mwf_col {
                flex-direction: column;
                align-items: flex-start;
                gap: 60px;
            }

            #hs_cos_wrapper_footer-dnd_area_101-module-1 .mwf_el_image,
            #hs_cos_wrapper_footer-dnd_area_101-module-1 .mwf_el_menus,
            #hs_cos_wrapper_footer-dnd_area_101-module-1 .mwf_el_social,
            #hs_cos_wrapper_footer-dnd_area_101-module-1 .mwf_el_text {
                flex-direction: column;
                align-items: flex-start;
                gap: 60px;
            }
        }

    </style>
    <style>
        @font-face {
            font-family: "Zen Kaku Gothic New";
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Outfit";
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
    </style>
    <!-- Editor Styles -->
    <style id="hs_editor_style" type="text/css">
        #hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-3 {
            display: block !important;
            margin-bottom: 40px !important
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-6 {
            display: block !important;
            margin-bottom: 40px !important
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-9 {
            display: block !important;
            margin-bottom: 40px !important
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-3 {
            display: block !important;
            margin-bottom: 40px !important
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-9 {
            display: block !important;
            margin-bottom: 40px !important
        }

        #hs_cos_wrapper_dnd_area_101-dnd_partial-2-module-6 {
            display: block !important;
            margin-bottom: 40px !important
        }

        .dnd_area_101-dnd_partial-1-row-0-force-full-width-section > .row-fluid {
            max-width: none !important;
        }

        .dnd_area_101-dnd_partial-2-module-9-flexbox-positioning {
            display: -ms-flexbox !important;
            -ms-flex-direction: column !important;
            -ms-flex-align: center !important;
            -ms-flex-pack: start;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: flex-start;
        }

        .dnd_area_101-dnd_partial-2-module-9-flexbox-positioning > div {
            max-width: 100%;
            flex-shrink: 0 !important;
        }

        .dnd_area_101-dnd_partial-2-module-6-flexbox-positioning {
            display: -ms-flexbox !important;
            -ms-flex-direction: column !important;
            -ms-flex-align: center !important;
            -ms-flex-pack: start;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: flex-start;
        }

        .dnd_area_101-dnd_partial-2-module-6-flexbox-positioning > div {
            max-width: 100%;
            flex-shrink: 0 !important;
        }

        .dnd_area_101-dnd_partial-2-module-3-flexbox-positioning {
            display: -ms-flexbox !important;
            -ms-flex-direction: column !important;
            -ms-flex-align: center !important;
            -ms-flex-pack: start;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: flex-start;
        }

        .dnd_area_101-dnd_partial-2-module-3-flexbox-positioning > div {
            max-width: 100%;
            flex-shrink: 0 !important;
        }

        .dnd_area_101-dnd_partial-3-row-0-background-color {
            background-color: rgba(245, 245, 245, 1) !important;
        }

        .dnd_area_101-dnd_partial-6-row-0-background-color {
            background-color: rgba(255, 209, 38, 1) !important;
        }

        .dnd_area_101-dnd_partial-7-module-13-flexbox-positioning {
            display: -ms-flexbox !important;
            -ms-flex-direction: column !important;
            -ms-flex-align: start !important;
            -ms-flex-pack: start;
            display: flex !important;
            flex-direction: column !important;
            align-items: flex-start !important;
            justify-content: flex-start;
        }

        .dnd_area_101-dnd_partial-7-module-13-flexbox-positioning > div {
            max-width: 100%;
            flex-shrink: 0 !important;
        }

        .dnd_area_101-dnd_partial-7-module-9-flexbox-positioning {
            display: -ms-flexbox !important;
            -ms-flex-direction: column !important;
            -ms-flex-align: start !important;
            -ms-flex-pack: start;
            display: flex !important;
            flex-direction: column !important;
            align-items: flex-start !important;
            justify-content: flex-start;
        }

        .dnd_area_101-dnd_partial-7-module-9-flexbox-positioning > div {
            max-width: 100%;
            flex-shrink: 0 !important;
        }

        .dnd_area_101-dnd_partial-7-module-5-flexbox-positioning {
            display: -ms-flexbox !important;
            -ms-flex-direction: column !important;
            -ms-flex-align: start !important;
            -ms-flex-pack: start;
            display: flex !important;
            flex-direction: column !important;
            align-items: flex-start !important;
            justify-content: flex-start;
        }

        .dnd_area_101-dnd_partial-7-module-5-flexbox-positioning > div {
            max-width: 100%;
            flex-shrink: 0 !important;
        }

        .dnd_area_101-dnd_partial-8-row-0-force-full-width-section > .row-fluid {
            max-width: none !important;
        }

        .dnd_area_101-row-0-force-full-width-section > .row-fluid {
            max-width: none !important;
        }

        .dnd_area_101-row-2-background-color {
            background-color: rgba(245, 245, 245, 1) !important;
        }

        .dnd_area_101-row-3-background-color {
            background-color: #37517e;
        }

        .dnd_area_101-row-5-background-color {
            background-color: rgba(255, 209, 38, 1) !important;
        }

        .dnd_area_101-row-7-force-full-width-section > .row-fluid {
            max-width: none !important;
        }

        /* HubSpot Styles (default) */
        .dnd_area_101-dnd_partial-1-row-0-padding {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .dnd_area_101-dnd_partial-2-column-8-padding {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .dnd_area_101-dnd_partial-2-column-5-padding {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .dnd_area_101-dnd_partial-2-column-2-padding {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .dnd_area_101-dnd_partial-3-row-0-padding {
            padding-top: 100px !important;
        }

        .dnd_area_101-dnd_partial-3-column-1-row-0-margin {
            margin-bottom: 100px !important;
        }

        .dnd_area_101-dnd_partial-3-column-1-row-1-margin {
            margin-bottom: 100px !important;
        }

        .dnd_area_101-dnd_partial-3-column-8-padding {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .dnd_area_101-dnd_partial-3-column-6-padding {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .dnd_area_101-dnd_partial-3-column-4-padding {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .dnd_area_101-dnd_partial-5-row-0-padding {
            padding-top: 100px !important;
        }

        .dnd_area_101-dnd_partial-5-column-1-row-0-margin {
            margin-bottom: 60px !important;
        }

        .dnd_area_101-dnd_partial-6-row-0-margin {
            margin-bottom: 100px !important;
        }

        .dnd_area_101-dnd_partial-6-row-0-padding {
            padding-top: 100px !important;
        }

        .dnd_area_101-dnd_partial-7-row-0-margin {
            margin-bottom: 100px !important;
        }

        .dnd_area_101-dnd_partial-7-column-10-padding {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .dnd_area_101-dnd_partial-7-column-10-row-0-margin {
            margin-bottom: 60px !important;
        }

        .dnd_area_101-dnd_partial-7-column-6-padding {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .dnd_area_101-dnd_partial-7-column-6-row-0-margin {
            margin-bottom: 60px !important;
        }

        .dnd_area_101-dnd_partial-7-column-2-padding {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .dnd_area_101-dnd_partial-7-column-2-row-0-margin {
            margin-bottom: 60px !important;
        }

        .dnd_area_101-dnd_partial-8-row-0-padding {
            padding-bottom: 0px !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .dnd_area_101-row-0-padding {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .dnd_area_101-row-2-padding {
            padding-top: 100px !important;
        }

        .dnd_area_101-row-3-padding {
            padding-top: 100px !important;
        }

        .dnd_area_101-row-4-padding {
            padding-top: 100px !important;
        }

        .dnd_area_101-row-5-margin {
            margin-bottom: 100px !important;
        }

        .dnd_area_101-row-5-padding {
            padding-top: 100px !important;
        }

        .dnd_area_101-row-6-margin {
            margin-bottom: 100px !important;
        }

        .dnd_area_101-row-7-padding {
            padding-bottom: 0px !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        /* HubSpot Styles (mobile) */
        @media (max-width: 767px) {
            .dnd_area_101-dnd_partial-2-column-5-margin {
                margin-bottom: 100px !important;
            }

            .dnd_area_101-dnd_partial-2-column-2-margin {
                margin-bottom: 100px !important;
            }

            .dnd_area_101-dnd_partial-3-column-6-margin {
                margin-bottom: 100px !important;
            }

            .dnd_area_101-dnd_partial-3-column-4-margin {
                margin-bottom: 100px !important;
            }

            .dnd_area_101-dnd_partial-7-column-6-margin {
                margin-bottom: 100px !important;
            }

            .dnd_area_101-dnd_partial-7-column-2-margin {
                margin-bottom: 100px !important;
            }
        }
    </style>

    <link href="{{ asset('assets/arsha/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/arsha/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
</head>

<body>
<div class="body-wrapper   hs-content-id-95807005900 hs-site-page page ">


    <x-topbar/>


    @yield('content')

    <x-footer/>
</div>
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const clientLogos = [
            'client-1.png',
            'client-2.png',
            'client-3.png',
            'client-4.png',
            'client-5.png',
            'client-6.png'
        ];

        const clientLogosContainer = document.getElementById('client-logos');

        clientLogos.forEach(function (logo) {
            const img = document.createElement('img');
            img.src = `assets/img/clients/${logo}`;
            clientLogosContainer.appendChild(img);
        });
    });
</script>
<script>
    var hsVars = hsVars || {};
    hsVars['language'] = 'en';
</script>
<script
    src="{{ asset('assets/js/menu.min.js') }}"></script>
<script
    src="{{ asset('assets/js/language.min.js') }}"></script>
<script src="{{ asset('assets/js/splide.min.js') }}"></script>
<script
    src="{{ asset('assets/js/slider.min.js') }}"></script>
<script
    src="{{ asset('assets/js/numbers-counters.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>


<!-- Vendor JS Files -->
<script src="{{ asset('assets/arsha/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/arsha/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/arsha/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/arsha/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/arsha/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/arsha/assets/js/main.js') }}"></script>

</body>
</html>
