<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/fav-icon/icon.png') }}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" media="all">
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animated-text.css') }}" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{ asset('venobox/venobox.css') }}" type="text/css" media="all">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}" type="text/css" media="all">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" media="all">
    <!-- Coustom Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/coustom-animation.css') }}" type="text/css" media="all">
    <!-- modernizr js -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>

<body>

<!-- loder -->
<div class="loader-wrapper">
    <span class="loader"></span>
    <div class="loder-section left-section"></div>
    <div class="loder-section right-section"></div>
</div>

<x-header/>

@yield('content')

<x-footer/>


<div class="prgoress_indicator active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
              style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 212.78;"></path>
    </svg>
</div>


<!-- jquery js -->
<script src="{{ asset('assets/js/vendor/jquery-3.6.2.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- carousel js -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- animated-text js -->
<script src="{{ asset('assets/js/animated-text.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('assets/js/wow.js') }}"></script>
<!-- ajax-mail js -->
<script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
<!-- imagesloaded js -->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- venobox js -->
<script src="{{ asset('venobox/venobox.js') }}"></script>
<!--  animated-text js -->
<script src="{{ asset('assets/js/animated-text.js') }}"></script>
<!-- venobox min js -->
<script src="{{ asset('venobox/venobox.min.js') }}"></script>
<!-- jquery meanmenu js -->
<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
<!-- theme js -->
<script src="{{ asset('assets/js/theme.js') }}"></script>
<!-- Cousom carousel js -->
<script src="{{ asset('assets/js/coustom-carousel.js') }}"></script>
<script src="{{ asset('assets/js/scroll-up.js') }}"></script>

</body>
</html>
