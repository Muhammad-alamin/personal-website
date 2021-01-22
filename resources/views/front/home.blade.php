<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$title}}</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/230e98b440.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- favicon icon link -->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- Favicons -->
    <link href="{{asset('assets/front/assets/img/favicon.ico')}}" rel="icon">
    <link href="{{asset('assets/front/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/front/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/assets/fontawesome/css/all.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/front/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Kelly - v2.0.0
    * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

</head>

<body>

<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <h1 class="logo"><a href="{{route('front.home')}}">Alamin</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{route('front.home')}}">Home</a></li>
                <li><a href="{{route('front.about')}}">About</a></li>
                <li><a href="{{route('front.resume')}}">Resume</a></li>
                <li><a href="{{route('front.service')}}">Services</a></li>
                <li><a href="{{route('front.portfolio')}}">Portfolio</a></li>
                <li><a href="{{route('front.contact')}}">Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->

        <div class="header-social-links">
            <a href="{{route('front.home')}}" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="{{route('front.home')}}" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="{{route('front.home')}}" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="{{route('front.home')}}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>

    </div>

</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section class=" mb-sm-auto mb-lg-auto mb-md-auto mb-xl-auto align-items-center">
    <div class="splash">
        <div class="splash_logo">
            Hi!
        </div>
        <div class="splash_svg">
            <svg width="100%" height="100%">
                <rect width="100%" height="100%" ></rect>
            </svg>
        </div>
        <div class="splash_minimize">
            <svg width="100%" height="100%">
                <rect width="100%" height="100%" ></rect>
            </svg>
        </div>
    </div>

    <div class="hero">
        <p class="xyz">I'm Alamin.</p>
        <p>I'm a professional PHP/Laravel Developer</p>
        <a href="{{route('front.about')}}"><button>About Me</button></a>
        <div class="bg mb-sm-auto mb-lg-auto mb-md-auto mb-xl-auto align-items-center"></div>
        <div class="bg bg2 mb-sm-auto mb-lg-auto mb-md-auto mb-xl-auto align-items-center"></div>
        <div class="bg bg3 mb-sm-auto mb-lg-auto mb-md-auto mb-xl-auto align-items-center"></div>
    </div>

</section>

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/front/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/front/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/front/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/front/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/front/assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('assets/front/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/front/assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('assets/front/assets/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/front/assets/js/main.js')}}"></script>

</body>

</html>
