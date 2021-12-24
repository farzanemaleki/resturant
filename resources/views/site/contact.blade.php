@extends('layout.wrapper')

@section('main')
    <!--slider sec strat-->
<section id="slider-sec" class="slider-sec parallax" style="background: url({{ asset('/food-shop/img/blogs/contact-slider.jpg') }});">
    <div class="overlay text-center d-flex justify-content-center align-items-center">
        <div class="slide-contain">
            <h4>Contact Us</h4>
            <div class="crumbs">
                <nav aria-label="breadcrumb" class="breadcrumb-items">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index-film.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="single-blog.html">Contact Us</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--slider sec end-->


<!-- Contact Us Start -->
<section class="contact-sec" id="contact-sec">

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 contact-description wow slideInLeft" data-wow-delay=".8s">
                <div class="contact-detail wow fadeInLeft">
                    <div class="ex-detail">
                        <span class="fly-text">CONTACT US</span>
                        <h4 class="large-heading">
                            <span class="heading-1">Get</span>
                            <span class="heading-2">In Touch</span>
                        </h4>
                    </div>
                    <p class="small-text text-center text-md-left">
                        Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.
                    </p>
                    <div class="row location-details text-center text-md-left">
                        <div class="col-12 col-md-6 country-1">
                            <h4 class="heading-text text-left">United States</h4>
                            <ul>
                                <li><i class="fas fa-mobile-alt"></i><a href="#">+(34) 609 33 17 54</a></li>
                                <li><i class="fas fa-envelope"></i><a href="#">example@website.com</a></li>
                                <li><i class="fas fa-map-marker"></i><a href="#">6271, Charghat, Rajshahi, BD </a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 couuntry-1">
                            <h4 class="heading-text text-left">Australia</h4>
                            <ul>
                                <li><i class="fas fa-mobile-alt"></i><a href="#">+(34) 609 33 17 54</a></li>
                                <li><i class="fas fa-envelope"></i><a href="#">example@website.com</a></li>
                                <li><i class="fas fa-map-marker"></i><a href="#">6271, Charghat, Rajshahi, BD </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 contact-box text-center text-md-left wow slideInRight" data-wow-delay=".8s">
                <div class="c-box wow fadeInRight">
                    <h4 class="small-heading">Leave Message</h4>
                    <div class="form-shuvo">
                        <form class="contact-form wow fadeInLeft" id="reused_form" action="POST">
                            <div class="row my-form">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your Email*" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row my-form">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject.." required="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row my-form">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-form">
                                <div class="col-lg-12 text-left">
                                    <button type="submit" class="btn web-btn user-contact rounded-pill contact_btn">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="success_message" style="display:none; " class="col-md-12 text-success">
                        <h3>Your message submit successfully!</h3>
                    </div>
                    <div id="error_message" style="display:none; " class="col-md-12">
                        <h3>Error</h3> Sorry there was an error sending your form.
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us End -->

<!--Slider Start-->
<div class="map-sec" id="map-sec">
    <div class="row no-gutters">
        <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58144.530471756334!2d88.57099635846347!3d24.38015002622808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefa96a38d031%3A0x10f93a950ed6f410!2sRajshahi!5e0!3m2!1sen!2sbd!4v1624639018854!5m2!1sen!2sbd" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
<!--Slider End-->
@endsection
