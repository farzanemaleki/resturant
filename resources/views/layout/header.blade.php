<header id="header">
    <div class="upper-nav">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mt-auto mb-auto">
                    <ul class="d-flex mb-0 top-info">
                        <li class="c-links d-none d-lg-block"><span><i class="lab la-whatsapp"></i></span><a href="#">+(34)609 331754</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 mt-auto mb-auto d-lg-flex justify-content-center justify-content-lg-end">
                    <ul class="shop-details d-flex">
                        <li>
                            <a href="javascript:void(0)" class="open_search"><i class="las la-search"></i></a>
                        </li>
                        <li><a href="javascript:void(0)" id="open-shop-card"><i class="las la-shopping-bag"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <a class="navbar-brand" href="/"><img src={{ asset("/food-shop/img/logo.png") }} alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container">
        <div class="row no-gutters w-100">
            <div class="col-6 col-lg-3 offset-3 offset-lg-0">
                <a href="/" title="Logo" class="logo fixed-nav-items">
                    <!--Logo Default-->
                    <img src={{ asset("/food-shop/img/logo-black.png") }} alt="logo" class="logo-dark">
                </a>
            </div>
            <!--Nav Links-->
            <div class="col-6 d-none d-lg-flex justify-content-lg-center align-items-lg-center">
                <div class="collapse navbar-collapse" id="Shuvo">
                    <ul class="navbar-nav ml-auto mr-auto">
                        <li><a class="nav-link active" href={{ route('home') }}>Home</a></li>
                        <li><a class="nav-link" href={{ route('aboutUs') }}>About Us</a></li>
                        <li><a class="nav-link" href={{ route('productDetail') }}>Product</a></li>
                        <li><a class="nav-link" href={{ route('shop') }}>Shop</a></li>
                        <li><a class="nav-link" href={{ route('blog') }}>Blogs</a></li>
                        <li><a class="nav-link" href={{ route('contact') }}>Contact</a></li>
                    </ul>
                </div>
            </div>
            <!--Side Menu Button-->
            <div class="col-3 d-flex justify-content-end align-items-center">

                <ul class="shop-details fixed-nav-items">
                    <li>
                        <a href="javascript:void(0)" class="open_search"><i class="las la-search"></i></a>
                    </li>
                    <li><a href="javascript:void(0)" id="open-shop-card1"><i class="las la-shopping-bag"></i></a></li>
                </ul>
            </div>
        </div>
        </div>
    </nav>

    <svg id="header-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="60" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C40 0 60 0 100 100 Z"/>
    </svg>
    <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
        <span></span>
        <span></span>
        <span></span>
    </a>
</header>

<!--Side Nav-->
<div class="side-menu hidden">
    <div class="inner-wrapper">
        <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
        <nav class="side-nav w-100">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href={{ route('home') }}>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('aboutUs') }}>About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('productDetail') }}>Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('shop') }}>Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('blog') }}>Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ asset('contact') }}>Contact Us</a>
                </li>
            </ul>
        </nav>

        <div class="side-footer w-100">
            <ul class="social-icons-simple">
                <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
            </ul>
            <p class="text-dark">&copy; 2021 Shuvo. Made With Love by Abusayed Shuvo</p>
        </div>
    </div>
</div>
<a id="close_side_menu" href="javascript:void(0);"></a>
<!-- End side menu -->
