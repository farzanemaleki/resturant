@extends('layout.wrapper')

@section('main')

<!--Slider Start-->
<section id="slider-sec" class="slider-sec parallax" style="background: url({{ asset('/food-shop/img/product-listing-banner.jpg') }});">
    <div class="overlay text-center d-flex justify-content-center align-items-center">
        <div class="slide-contain">
            <h4>Product Listing</h4>
            <div class="crumbs">
                <nav aria-label="breadcrumb" class="breadcrumb-items">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="product-listing.html">Product Listing</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--slider sec end-->


<!--Product Line Up Start -->
<div class="product-listing">
    <div class="container">
        <div class="row no-gutters">

            <!-- START STICKY NAV -->
            <div class="col-12 col-lg-4 order-2 order-lg-1 sticky">
                <div id="product-filter-nav" class="product-filter-nav mb-3">
                    <div class="product-category">
                        <h5 class="filter-heading  text-center text-lg-left">Category</h5>
                        <ul>
                            <li><a href="#">June </a><span>(2)</span></li>
                            <li><a href="#">July </a><span>(4)</span></li>
                            <li><a href="#">Augest </a><span>(2)</span></li>
                            <li><a href="#">March </a><span>(7)</span></li>
                            <li><a href="#">May </a><span>(9)</span></li>
                        </ul>
                    </div>
                    <div class="product-price mt-1">
                        <h5 class="filter-heading">Shop By</h5>
                        <div id="slider-range"></div>
                        <p class="price-num" style="color: #0b2e13;">Price: <span id="min-p"></span>  <span id="max-p"></span></p>
                    </div>
                    <button class="btn web-btn rounded-pill mt-1">Filter</button>

                </div>
            </div>
            <!-- END STICKY NAV -->

            <!-- START PRODUCT COL 8 -->
            <div class="col-md-12 col-lg-8 order-1 order-lg-2">
                <div class="row">

                    <!-- START LISTING HEADING -->
                    <div class="col-12 product-listing-heading">
                        <p class="para_text text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. tellus lacus faucibus lectus, sed cursused eros ligula non odio.</p>
                    </div>
                    <!-- END LISTING HEADING -->

                    <!-- START PRODUCT LISTING SECTION -->
                    <div class="col-12 product-listing-products">
                        <!--featured item sec start-->
                        <section class="featured-items padding-bottom" id="featured-items">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4 text-center">
                                        <div class="featured-item-card">
                                            <div class="item-img">
                                                <img src={{ asset("/food-shop/img/item8.jpg") }} alt="">
                                                <div class="item-overlay">
                                                    <div class="item-btns">
                                                        <a href="#" class="btn btn-view"><i class="las la-shopping-bag"></i></a>
                                                        <a href="#" class="btn btn-view"><i class="las la-heart"></i></a>
                                                        <a href="product-detail.html" class="btn btn-view"><i class="las la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h4 class="item-name">Oranges</h4>
                                                <ul class="reviews">
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                </ul>
                                                <p class="item-price">$20</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 text-center">
                                        <div class="featured-item-card">
                                            <div class="item-img">
                                                <img src={{ asset("/food-shop/img/item9.jpg") }} alt="">
                                                <div class="item-overlay">
                                                    <div class="item-btns">
                                                        <a href="#" class="btn btn-view"><i class="las la-shopping-bag"></i></a>
                                                        <a href="#" class="btn btn-view"><i class="las la-heart"></i></a>
                                                        <a href="product-detail.html" class="btn btn-view"><i class="las la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h4 class="item-name">Grapes</h4>
                                                <ul class="reviews">
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                </ul>
                                                <p class="item-price">$30</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 text-center">
                                        <div class="featured-item-card">
                                            <div class="item-img">
                                                <img src={{ asset("/food-shop/img/item10.jpg") }} alt="">
                                                <div class="item-overlay">
                                                    <div class="item-btns">
                                                        <a href="#" class="btn btn-view"><i class="las la-shopping-bag"></i></a>
                                                        <a href="#" class="btn btn-view"><i class="las la-heart"></i></a>
                                                        <a href="product-detail.html" class="btn btn-view"><i class="las la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h4 class="item-name">Bananas</h4>
                                                <ul class="reviews">
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                </ul>
                                                <p class="item-price">$40</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 text-center">
                                        <div class="featured-item-card">
                                            <div class="item-img">
                                                <img src={{ asset("/food-shop/img/item11.jpg") }} alt="">
                                                <div class="item-overlay">
                                                    <div class="item-btns">
                                                        <a href="#" class="btn btn-view"><i class="las la-shopping-bag"></i></a>
                                                        <a href="#" class="btn btn-view"><i class="las la-heart"></i></a>
                                                        <a href="product-detail.html" class="btn btn-view"><i class="las la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h4 class="item-name">Kiwi</h4>
                                                <ul class="reviews">
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                </ul>
                                                <p class="item-price">$10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 text-center">
                                        <div class="featured-item-card">
                                            <div class="item-img">
                                                <img src={{ asset("/food-shop/img/item7.jpg") }} alt="">
                                                <div class="item-overlay">
                                                    <div class="item-btns">
                                                        <a href="#" class="btn btn-view"><i class="las la-shopping-bag"></i></a>
                                                        <a href="#" class="btn btn-view"><i class="las la-heart"></i></a>
                                                        <a href="product-detail.html" class="btn btn-view"><i class="las la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h4 class="item-name">Strawberries</h4>
                                                <ul class="reviews">
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                </ul>
                                                <p class="item-price">$20</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 text-center">
                                        <div class="featured-item-card">
                                            <div class="item-img">
                                                <img src={{ asset("/food-shop/img/item5.jpg") }} alt="">
                                                <div class="item-overlay">
                                                    <div class="item-btns">
                                                        <a href="#" class="btn btn-view"><i class="las la-shopping-bag"></i></a>
                                                        <a href="#" class="btn btn-view"><i class="las la-heart"></i></a>
                                                        <a href="product-detail.html" class="btn btn-view"><i class="las la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h4 class="item-name">Cherries</h4>
                                                <ul class="reviews">
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                </ul>
                                                <p class="item-price">$30</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 text-center">
                                        <div class="featured-item-card">
                                            <div class="item-img">
                                                <img src={{ asset("/food-shop/img/item8.jpg") }} alt="">
                                                <div class="item-overlay">
                                                    <div class="item-btns">
                                                        <a href="#" class="btn btn-view"><i class="las la-shopping-bag"></i></a>
                                                        <a href="#" class="btn btn-view"><i class="las la-heart"></i></a>
                                                        <a href="product-detail.html" class="btn btn-view"><i class="las la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h4 class="item-name">Oranges</h4>
                                                <ul class="reviews">
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                </ul>
                                                <p class="item-price">$20</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 text-center">
                                        <div class="featured-item-card">
                                            <div class="item-img">
                                                <img src={{ asset("/food-shop/img/item9.jpg") }} alt="">
                                                <div class="item-overlay">
                                                    <div class="item-btns">
                                                        <a href="#" class="btn btn-view"><i class="las la-shopping-bag"></i></a>
                                                        <a href="#" class="btn btn-view"><i class="las la-heart"></i></a>
                                                        <a href="product-detail.html" class="btn btn-view"><i class="las la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h4 class="item-name">Grapes</h4>
                                                <ul class="reviews">
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                </ul>
                                                <p class="item-price">$30</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 text-center">
                                        <div class="featured-item-card">
                                            <div class="item-img">
                                                <img src={{ asset("/food-shop/img/item10.jpg") }} alt="">
                                                <div class="item-overlay">
                                                    <div class="item-btns">
                                                        <a href="#" class="btn btn-view"><i class="las la-shopping-bag"></i></a>
                                                        <a href="#" class="btn btn-view"><i class="las la-heart"></i></a>
                                                        <a href="product-detail.html" class="btn btn-view"><i class="las la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h4 class="item-name">Bananas</h4>
                                                <ul class="reviews">
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                    <li><i class="las la-star"></i></li>
                                                </ul>
                                                <p class="item-price">$40</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                        <!--featured item sec end-->
                    </div>
                    <!-- END PRODUCT LISTING SECTION -->
                </div>
            </div>
            <!-- END PRODUCT COL 8 -->
        </div>
    </div>
</div>
<!--Product Line Up End-->

@endsection
