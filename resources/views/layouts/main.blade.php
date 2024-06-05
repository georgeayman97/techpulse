<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons
    ================================================== -->
    <link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css') }}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="{{ asset('assets2/css/responsive.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('assets2/css/font-awesome.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('assets2/css/animate.css') }}">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="{{ asset('assets2/css/prettyPhoto.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets2/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/owl.theme.css') }}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{ asset('assets2/css/flexslider.css') }}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{ asset('assets2/css/cd-hero.css') }}">
    <!-- Style Swicther -->
    <link id="style-switch" href="{{ asset('assets2/css/presets/preset3.css') }}" media="screen" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" href="{{ asset('assets2/css/custom-styles.css') }}">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets2/js/html5shiv.js') }}"></script>
    <script src="{{ asset('assets2/js/respond.min.js') }}"></script>
    <![endif]-->

</head>

<body>

<div class="body-inner">
    <x-header/>

    @yield('content')

    <x-footer/>

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="{{ asset('assets2/js/jquery.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="{{ asset('assets2/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset('assets2/js/owl.carousel.js') }}"></script>
    <!-- PrettyPhoto -->
    <script type="text/javascript" src="{{ asset('assets2/js/jquery.prettyPhoto.js') }}"></script>
    <!-- Bxslider -->
    <script type="text/javascript" src="{{ asset('assets2/js/jquery.flexslider.js') }}"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset('assets2/js/cd-hero.js') }}"></script>
    <!-- Isotope -->
    <script type="text/javascript" src="{{ asset('assets2/js/isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets2/js/ini.isotope.js') }}"></script>
    <!-- Wow Animation -->
    <script type="text/javascript" src="{{ asset('assets2/js/wow.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script type="text/javascript" src="{{ asset('assets2/js/smoothscroll.js') }}"></script>
    <!-- Eeasing -->
    <script type="text/javascript" src="{{ asset('assets2/js/jquery.easing.1.3.js') }}"></script>
    <!-- Counter -->
    <script type="text/javascript" src="{{ asset('assets2/js/jquery.counterup.min.js') }}"></script>
    <!-- Waypoints -->
    <script type="text/javascript" src="{{ asset('assets2/js/waypoints.min.js') }}"></script>

    <!-- Google Map API Key Source -->
    <script type="text/javascript"
            src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
    <!-- Doc https://developers.google.com/maps/documentation/javascript/get-api-key -->
    <script type="text/javascript" src="{{ asset('assets2/js/gmap3.js') }}"></script>

    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

    <!-- Template custom -->
    <script type="text/javascript" src="{{ asset('assets2/js/custom.js') }}"></script>
</div>
<!-- Body inner end -->
</body>
</html>
