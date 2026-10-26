<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- title -->
    <title>@yield('title', 'BIG Screen Events LLC')</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>

    <!-- header area -->
    <header class="header">
        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrap">
                    <div class="row align-items-center justify-content-end">
                        <div class="col-xl-8 col-lg-8 col-md-7">
                            <div class="header-top-left">
                                <div class="header-top-contact">
                                    <ul>
                                        <li><a href="#"><i class="far fa-location-dot"></i>
                                                Shop No 3 Al Munthasir Street Ras al Khaimah </a></li>
                                        <li><a href="mailto:info@bseventsllc.com"><i class="far fa-envelopes"></i>
                                                <span class="__cf_email__"
                                                    data-cfemail="8de4e3ebe2cde8f5ece0fde1e8a3eee2e0">
                                                    info@bseventsllc.com
                                                </span></a>
                                        </li>
                                        <li><a href="tel:+971504508113"><i class="far fa-phone-volume"></i> +971 504 50
                                                81 13 </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-5">
                            <div class="header-top-right">
                                <div class="header-top-social">
                                    <span>Follow Us:</span>
                                    <a href="https://www.facebook.com/bigscreenevent" target="_blank"><i
                                            class="fab fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/bseventsllc" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/company/big-screen-events-llc" target="_blank"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="https://www.youtube.com/@bseventsllc" target="_blank"><i
                                            class="fab fa-youtube"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=+971504508113&text=ðŸ‘‹ Welcome to BIG Screen Events LLC! How may we assist you today."
                                        target="_blank"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a href="{{ route('home') }}" class="navbar-brand">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"> Home </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}"> About Us </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('services') }}"> Services </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}"> Gallery </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('careers') }}"> Career </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}"> Contact Us </a></li>
                        </ul>



                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header area end -->




    
@if (session('status'))
    <div class="container alert alert-success mt-3">{{ session('status') }}</div>
@endif
@yield('content')
<!-- footer area -->
    <footer class="footer-area">
        <div class="footer-shape">
            <img src="{{ asset('assets/img/shape/01.png') }}" alt="">
        </div>
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="{{ asset('assets/img/logo/logo-light.png') }}" alt="">
                            </a>
                            <p class="mb-3">
                               Every event is an opportunity to inspire, connect, and create lasting memoriesâ€”we bring your vision to life with experiences that are truly larger than life.
                               
                            </p>
                            <div class="footer-newsletter">
                                <p> Our Social Links</p>
                                <div class="subscribe-form">
                                    <ul class="footer-list social">
                                        <li><a href="https://www.facebook.com/bigscreenevent" target="_blank"><i
                                                    class="fab fa-facebook"></i> </a></li>
                                        <li><a href="https://www.instagram.com/bseventsllc" target="_blank"><i
                                                    class="fab fa-instagram"></i> </a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i> </a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=+971504508113&text=ðŸ‘‹ Welcome to BIG Screen Events LLC! How may we assist you today."
                                                target="_blank"><i class="fab fa-whatsapp"></i> </a></li>
                                        <li><a href="https://www.linkedin.com/company/big-screen-events-llc/"
                                                target="_blank"><i class="fab fa-linkedin-in"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-0"></div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="{{ route('home') }}"><i class="fas fa-caret-right"></i> Home </a></li>
                                <li><a href="{{ route('about') }}"><i class="fas fa-caret-right"></i> About Us</a></li>
                                <li><a href="{{ route('services') }}"><i class="fas fa-caret-right"></i> Services </a></li>
                                <li><a href="{{ route('contact') }}"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Get In Touch</h4>
                            <ul class="footer-contact">

                                <li><i class="far fa-map-marker-alt"></i> Shop No 3 Al Munthasir Street <br>
                                    Ras al Khaimah <br> United Arab Emirates </li>
                                <li><a href="tel:+971504508113"><i class="far fa-mobile"></i> +971 504 50 81 13 </a></li>
                                <li><a href="tel:+971528051501"><i class="far fa-phone"></i> +971 52 805 1501 </a></li>
                                <li><a href="mailto:info@bseventsllc.com"><i class="far fa-envelope"></i><span
                                            class="__cf_email__" data-cfemail="f1989f979eb19489909c819d94df929e9c">
                                            info@bseventsllc.com </span></a>
                                </li>
                            </ul>
                            <div class="footer-request">
                                <a href="{{ route('contact') }}" class="theme-btn"> Contact Us <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="https://bseventsllc.com" target="_blank">
                                BIG Screen Events LLC
                            </a> All Rights
                            Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-menu">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
    <!-- scroll-top end -->


    <!-- js -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter-up.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>
</html>

