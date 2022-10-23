@extends('layouts.home')

@section('title', 'Login')

@section('content')
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="index.html"><img src="{{ asset('img/logo.png') }}"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="search_icon">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <!-- header section end -->
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="costum_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h1 class="furniture_text">FURNITURE</h1>
                        <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some fo</p>
                        <div class="contact_bt_main">
                            <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="furniture_text">FURNITURE</h1>
                        <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some fo</p>
                        <div class="contact_bt_main">
                            <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="furniture_text">FURNITURE</h1>
                        <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some fo</p>
                        <div class="contact_bt_main">
                            <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
                    <i class=""><img src="{{ asset('img/left-arrow.png') }}"></i>
                </a>
                <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
                    <i class=""><img src="{{ asset('img/right-arrow.png') }}"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section end -->
    <!-- services section start -->

    <!-- services section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="about_text">About Us</h1>
                    <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look even
                        slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority
                        have able</p>
                    <div class="read_bt1"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-6">
                    <div class="image_1"><img src="{{ asset('img/img-1.png') }}"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- furnitures section start -->
    <div class="furnitures_section layout_padding">
        <div class="container">
            <h1 class="our_text">OUR furnitures</h1>
            <p class="ipsum_text">There are many variations of passages of Lorem Ipsum </p>
            <div class="furnitures_section2 layout_padding">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container_main">
                            <img src="{{ asset('img/img-2.png') }}" alt="Avatar" class="image">
                            <div class="overlay">
                                <a href="#" class="icon" title="User Profile">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <h3 class="temper_text">Tempor incididunt ut labore et dolore</h3>
                        <p class="dololr_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi </p>
                    </div>
                    <div class="col-md-6">
                        <div class="container_main">
                            <img src="{{ asset('img/img-3.png') }}" alt="Avatar" class="image">
                            <div class="overlay">
                                <a href="#" class="icon" title="User Profile">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <h3 class="temper_text">Tempor incididunt ut labore et dolore</h3>
                        <p class="dololr_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- furnitures section end -->
    <!-- who section start -->

    <!-- who section end -->
    <!-- projects section start -->

    <!-- projects section end -->
    <!-- client section start -->
    <!-- client section end -->
    <!-- contact section start -->

    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="fooer_logo"><img src="{{ asset('img/footer-logo.png') }}"></div>
                    <p class="footer_lorem_text">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">LET US HELP YOU</h1>
                    <p class="footer_lorem_text">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">INFORMATION</h1>
                    <p class="footer_lorem_text1">About Us<br>
                        Careers<br>
                        Sell on shopee<br>
                        Press & News<br>
                        Competitions<br>
                        Terms & Conditions
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">OUR Design</h1>
                    <p class="footer_lorem_text">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by
                    </p>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><a href="#">Subscribe</a></span>
                </div>
            </div>
        </div>
    </div>
    <!--  footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <div class="social_icon">
                <ul>
                    <li><a href="#"><img src="{{ asset('img/fb-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('img/twitter-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('img/instagram-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('img/linkedin-icon.png') }}"></a></li>
                </ul>
            </div>
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html
                    Templates</a></p>
        </div>
        <!-- copyright section end -->
        <!-- Javascript files-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
        <script src="{{ asset('js/plugin.js') }}"></script>
        <!-- sidebar -->
        <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <!-- javascript -->
        <script src="{{ asset('js/owl.carousel.js') }}"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    @endsection
