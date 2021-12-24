@extends('layout.wrapper')

@section('main')


<!--slider sec strat-->
<section id="slider-sec" class="slider-sec parallax" style="background: url({{ asset('/food-shop/img/blogs/about-us-slider.jpg') }});">
    <div class="overlay text-center d-flex justify-content-center align-items-center">
        <div class="slide-contain">
            <h4>About Us</h4>
            <div class="crumbs">
                <nav aria-label="breadcrumb" class="breadcrumb-items">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index-film.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="single-blog.html">About Us</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--slider sec end-->

<!--mini services start-->
<section class="mini-services" id="mini-services">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-6 col-lg-3 text-center mini-s">
                <div class="mini-service-card">
                    <div class="service-icon"><i class="las la-paper-plane"></i></div>
                    <h4 class="mini-service-heading">FREE SHIPPING</h4>
                    <span class="small-des">ON $300 ABOVE ORDER</span>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center mini-s">
                <div class="mini-service-card">
                    <div class="service-icon"><i class="las la-headset"></i></div>
                    <h4 class="mini-service-heading">SUPPORT</h4>
                    <span class="small-des">ON $300 ABOVE ORDER</span>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center mini-s">
                <div class="mini-service-card">
                    <div class="service-icon"><i class="las la-globe-europe"></i></div>
                    <h4 class="mini-service-heading">FREE REFUND</h4>
                    <span class="small-des">ON $300 ABOVE ORDER</span>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center mini-s">
                <div class="mini-service-card">
                    <div class="service-icon"><i class="las la-phone"></i></div>
                    <h4 class="mini-service-heading">CONTACT US</h4>
                    <span class="small-des">ON $300 ABOVE ORDER</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--mini services end-->
@include('layout.about&comment')

<!--newsletter sec start-->
<section class="newsletter" id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 text-center text-md-left">
                <h4 class="newsletter-heading"><i class="las la-envelope"></i>Newsletter </h4>
                <p class="newsletter-text">Subscribe Us to for News and Advice.</p>
            </div>
            <div class="col-12 col-md-8">
                <form>
                    <div class="input-group">
                        <input class="form-control" placeholder="Enter Email">
                        <a href="#" class="btn news-btn">Subscribe</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--newsletter sec end-->


@endsection

