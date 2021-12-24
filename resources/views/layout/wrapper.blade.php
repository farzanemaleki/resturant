<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Meta Tags -->
     <meta charset="utf-8">
     <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
     <!-- Author -->
     <meta name="author" content="Abusayed Shuvo">
     <!-- description -->
     <meta name="description" content="Shuvo is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
     <!-- keywords -->
     <meta name="keywords" content="Creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
     <!-- Page Title -->
     <title>Shuvo | Food Shop HTML5 Template</title>

    <!-- Favicon -->
    <link href={{ asset("/food-shop/img/favicon.ico") }} rel="icon">

    <!-- Bundle -->
    <link href={{ asset("/vendor/css/bundle.min.css") }} rel="stylesheet">
    <!-- Plugin Css -->
    <link href={{ asset("/food-shop/css/line-awesome.min.css") }} rel="stylesheet">
    <link href={{ asset("/vendor/css/revolution-settings.min.css") }} rel="stylesheet">
    <link href={{ asset("/vendor/css/jquery.fancybox.min.css") }} rel="stylesheet">
    <link href={{ asset("/vendor/css/owl.carousel.min.css") }} rel="stylesheet">
    <link href={{ asset("/vendor/css/cubeportfolio.min.css") }} rel="stylesheet">
    <link rel="stylesheet" href={{ asset("/vendor/css/LineIcons.min.css") }}>
    <link href={{ asset("/vendor/css/swiper.min.css") }} rel="stylesheet">
    <link href={{ asset("/food-shop/css/nouislider.min.css") }} rel="stylesheet">
    <link href={{ asset("/food-shop/css/range-slider.css") }} rel="stylesheet">
    <link href={{ asset("/vendor/css/wow.css") }} rel="stylesheet">
    <link href={{ asset("/food-shop/css/settings.css") }} rel="stylesheet">
    <link href={{ asset("/food-shop/css/blog.css") }} rel="stylesheet">
    <link href={{ asset("/food-shop/css/style.css") }} rel="stylesheet">
    @yield('styles')
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!-- Preloader -->
<div class="preloader">
    <div class="centrize full-width">
        <div class="vertical-center">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
</div>
<!-- Preloader End -->

<!--Header Start-->
@include('layout.header')
<!--Header End-->

<!--Main Start-->
@yield('main')
<!--Main End-->

<!--Footer Start-->
@include('layout.footer')
<!--Footer End-->


<!--Scroll Top Start-->
<span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
<!--Scroll Top End-->

<!--Shop card window Start-->
<section class="shop-card-window hidden" id="shop-card-window">
    <a href="#" id="close-card-window" class="close-card-window"><i class="las la-times"></i></a>
    <div class="shop-card-window-content">
        <h4 class="shop-card-heading">My Bag</h4>
        <div class="d-flex justify-content-center align-items-center">
        <div class="mini-bag">
            <div class="bag-item">
                <div class="item-img">
                    <img src="food-shop/img/item1.jpg" alt="">
                </div>
                <div class="item-details">
                    <h4 class="item-name">Product Name</h4>
                    <span class="item-qty">Qty: 2</span>
                    <span class="item-price">Price: $300</span>
                    <a href="#" class="basket"><i class="las la-trash"></i> </a>
                </div>
            </div>
            <div class="bag-item">
                <div class="item-img">
                    <img src="food-shop/img/item2.jpg" alt="">
                </div>
                <div class="item-details">
                    <h4 class="item-name">Product Name</h4>
                    <span class="item-qty">Qty: 2</span>
                    <span class="item-price">Price: $300</span>
                    <a href="#" class="basket"><i class="las la-trash"></i> </a>
                </div>
            </div>
            <div class="bag-item">
                <div class="item-img">
                    <img src="food-shop/img/item3.jpg" alt="">
                </div>
                <div class="item-details">
                    <h4 class="item-name">Product Name</h4>
                    <span class="item-qty">Qty: 2</span>
                    <span class="item-price">Price: $300</span>
                    <a href="#" class="basket"><i class="las la-trash"></i> </a>
                </div>
            </div>
            <div class="bag-item">
                <div class="item-img">
                    <img src="food-shop/img/item4.jpg" alt="">
                </div>
                <div class="item-details">
                    <h4 class="item-name">Product Name</h4>
                    <span class="item-qty">Qty: 2</span>
                    <span class="item-price">Price: $300</span>
                    <a href="#" class="basket"><i class="las la-trash"></i> </a>
                </div>
            </div>
        </div>
        </div>
        <div class="bag-btn">
            <h4 class="total"><span>Total: </span>100$</h4>
            <a href="#" class="btn web-dark-btn rounded-pill">View Bag </a>
            <a href="#" class="btn web-btn rounded-pill">Checkout </a>
        </div>
    </div>
</section>
<!--Shop card window  End-->

<!--Search modal window start-->
<div class="search_block">
    <div class="search_box animated wow fadeInUp d-flex justify-content-center align-items-center">
        <div class="inner">
            <input type="text" name="search" id="search" class="search_input" autocomplete="off" placeholder="Enter Your Keywords.." />
            <button class="search_icon glyphicon glyphicon-search"><i class="fas fa-search"></i> </button>
        </div>
    </div>
    <div class="search-overlay"></div>
</div>
<!--Search modal window end-->



<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
<script src={{ asset("/vendor/js/bundle.min.js") }}></script>

<!-- Plugin Js -->
<script src={{ asset("/vendor/js/jquery.appear.js") }}></script>
<script src={{ asset("/vendor/js/jquery.fancybox.min.js") }}></script>
<script src={{ asset("/vendor/js/owl.carousel.min.js") }}></script>
<script src={{ asset("/vendor/js/parallaxie.min.js") }}></script>
<script src={{ asset("/vendor/js/wow.min.js") }}></script>
<script src={{ asset("/vendor/js/stickyfill.min.js") }}></script>
<!-- REVOLUTION JS FILES -->
<script src={{ asset("/vendor/js/jquery.themepunch.tools.min.js") }}></script>
<script src={{ asset("/vendor/js/jquery.themepunch.revolution.min.js") }}></script>
<script src={{ asset("/vendor/js/jquery.cubeportfolio.min.js") }}></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src={{ asset("/vendor/js/extensions/revolution.extension.actions.min.js") }}></script>
<script src={{ asset("/vendor/js/extensions/revolution.extension.carousel.min.js") }}></script>
<script src={{ asset("/vendor/js/extensions/revolution.extension.kenburn.min.js") }}></script>
<script src={{ asset("/vendor/js/extensions/revolution.extension.layeranimation.min.js") }}></script>
<script src={{ asset("/vendor/js/extensions/revolution.extension.migration.min.js") }}></script>
<script src={{ asset("/vendor/js/extensions/revolution.extension.navigation.min.js") }}></script>
<script src={{ asset("/vendor/js/extensions/revolution.extension.parallax.min.js") }}></script>
<script src={{ asset("/vendor/js/extensions/revolution.extension.slideanims.min.js") }}></script>
<script src={{ asset("/vendor/js/extensions/revolution.extension.video.min.js") }}></script>

<script src={{ asset("/vendor/js/wow.min.js") }}></script>
<!-- google map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>
<script src={{ asset("/food-shop/js/map.js") }}></script>
<!--Tilt Js-->
<!-- custom script-->
<script src={{ asset("/food-shop/js/countdown.js") }}></script>
<script src={{ asset("/food-shop/js/script.js") }}></script>
<script src={{ asset("/vendor/js/bootstrap-input-spinner.js") }}></script>
<script src={{ asset("/vendor/js/swiper.min.js") }}></script>
<script src={{ asset("/food-shop/js/nouislider.min.js") }}></script>
@yield('scripts')
</body>
</html>

