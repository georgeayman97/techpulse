<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="author" content="George Ayman">
    <meta name="description" content="Techpulse - Solutions for Technology & IT Solutions">
    <meta name="keywords" content="Techpulse - Solutions Technology & IT Solutions Mobile and Web development">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
          href="{{ asset('assets/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/logo@2x.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicons/logo@2x.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/logo@2x.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-6/css/all.min.css') }}">
    {{--    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css') }}">
    <script src="https://kit.fontawesome.com/fc0d5b3ed1.js" crossorigin="anonymous"></script>


</head>
<body>
{{--<div class="cursor"></div>--}}
{{--<div class="cursor2"></div>--}}
{{--<div class="color-scheme-wrap active">--}}
{{--    <button class="switchIcon"><i class="fa-solid fa-palette"></i></button>--}}
{{--    <h4 class="color-scheme-wrap-title"><i class="far fa-palette me-2"></i>Style Swicher</h4>--}}
{{--    <div class="color-switch-btns">--}}
{{--        <button data-color="#3E66F3"><i class="fa-solid fa-droplet"></i></button>--}}
{{--        <button data-color="#684DF4"><i class="fa-solid fa-droplet"></i></button>--}}
{{--        <button data-color="#008080"><i class="fa-solid fa-droplet"></i></button>--}}
{{--        <button data-color="#323F7C"><i class="fa-solid fa-droplet"></i></button>--}}
{{--        <button data-color="#FC3737"><i class="fa-solid fa-droplet"></i></button>--}}
{{--        <button data-color="#8a2be2"><i class="fa-solid fa-droplet"></i></button>--}}
{{--    </div>--}}
{{--    <a href="https://themeforest.net/user/themeholy" class="th-btn text-center w-100"><i--}}
{{--            class="fa fa-shopping-cart me-2"></i> Purchase</a></div>--}}
{{--<div id="preloader" class="preloader">--}}
{{--    <button class="th-btn th-radius preloaderCls">Cancel Preloader</button>--}}
{{--    <div id="loader" class="th-preloader">--}}
{{--        <div class="animation-preloader">--}}
{{--            <div class="txt-loading"><span preloader-text="W" class="characters">W</span> <span preloader-text="E"--}}
{{--                                                                                                class="characters">E</span>--}}
{{--                <span preloader-text="B" class="characters">B</span> <span preloader-text="T"--}}
{{--                                                                           class="characters">T</span> <span--}}
{{--                    preloader-text="E" class="characters">E</span> <span preloader-text="C"--}}
{{--                                                                         class="characters">C</span> <span--}}
{{--                    preloader-text="K" class="characters">K</span></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="sidemenu-wrapper">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget woocommerce widget_shopping_cart"><h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget">
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i
                                class="far fa-times"></i></a> <a href="#"><img
                                src="{{ asset('assets/img/product/product_thumb_1_1.jpg') }}" alt="Cart Image">Gaming
                            Computer</a>
                        <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>940.00</span></span></li>
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i
                                class="far fa-times"></i></a> <a href="#"><img
                                src="{{ asset('assets/img/product/product_thumb_1_2.jpg') }}" alt="Cart Image">Smartphone
                            Vivo V9</a>
                        <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>899.00</span></span></li>
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i
                                class="far fa-times"></i></a> <a href="#"><img
                                src="{{ asset('assets/img/product/product_thumb_1_3.jpg') }}" alt="Cart Image">SanDisk
                            Flash Drive</a>
                        <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>756.00</span></span></li>
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i
                                class="far fa-times"></i></a> <a href="#"><img
                                src="{{ asset('assets/img/product/product_thumb_1_4.jpg') }}" alt="Cart Image">Smart
                            Power Bank</a>
                        <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>723.00</span></span></li>
                    <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#"
                                                                             class="remove remove_from_cart_button"><i
                                class="far fa-times"></i></a> <a href="#"><img
                                src="{{ asset('assets/img/product/product_thumb_1_5.jpg') }}" alt="Cart Image">Apple
                            Smartwatch</a>
                        <span
                            class="quantity">1 × <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>1080.00</span></span></li>
                </ul>
                <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span
                        class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4398.00</span>
                </p>
                <p class="woocommerce-mini-cart__buttons buttons btn-wrap"><a href="cart.html"
                                                                              class="th-btn wc-forward">View cart</a> <a
                        href="checkout.html" class="th-btn checkout wc-forward">Checkout</a></p></div>
        </div>
    </div>
</div>
<x-header/>

@yield('content')

<section class="bg-top-right overflow-hidden space" id="blog-sec"
         data-bg-src="{{ asset('assets/img/bg/blog_bg_1.png') }}">
    <div class="container">
        <div class="slider-area text-center">
            <div class="swiper th-slider"
                 data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"5"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-box"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/brand/brand_1_1.png"
                                alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/brand/brand_1_2.png"
                                alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/brand/brand_1_3.png"
                                alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/brand/brand_1_4.png"
                                alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/brand/brand_1_5.png"
                                alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/brand/brand_1_6.png"
                                alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/brand/brand_1_1.png"
                                alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/brand/brand_1_2.png"
                                alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/brand/brand_1_3.png"
                                alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/brand/brand_1_4.png"
                                alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/brand/brand_1_5.png"
                                alt="Brand Logo"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><img
                                src="https://html.themeholy.com/webteck/demo/assets/img/brand/brand_1_6.png"
                                alt="Brand Logo"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup" data-bottom="0" data-left="0">
        <div class="particle-2 small" id="particle-4"></div>
    </div>
</section>
<x-footer/>
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
              style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>
<script src="https://html.themeholy.com/webteck/demo/assets/js/vendor/jquery-3.7.1.min.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/swiper-bundle.min.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/bootstrap.min.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/jquery.magnific-popup.min.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/jquery.counterup.min.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/circle-progress.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/jquery-ui.min.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/isotope.pkgd.min.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/tilt.jquery.min.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/gsap.min.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/ScrollTrigger.min.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/smooth-scroll.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/particles.min.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/particles-config.js"></script>
<script src="https://html.themeholy.com/webteck/demo/assets/js/main.js"></script>
</body>
</html>
