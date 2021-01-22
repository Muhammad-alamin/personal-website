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
    <!-- favicon icon link -->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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

    <!-- =======================================================
    * Template Name: Kelly - v2.0.0
    * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    <main id="main">
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row">

                    @foreach($eachData as $eachPortfolio)
                    <div class="col-lg-8">
                        <h3 class="portfolio-title">Portfolio details</h3>

                        @php($slider = json_decode($eachPortfolio->sliderImage))
                            <div class="owl-carousel portfolio-details-carousel">
                            @foreach($slider as $eachSlider)

                                    <img src="{{asset('images/sliders/'.$eachSlider)}}" class="img-fluid" alt="">

                            @endforeach
                            </div>
                    </div>

                    <div class="col-lg-4 portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: {{$eachPortfolio->category}}</li>
                            <li><strong>Client</strong>: {{$eachPortfolio->client}}</li>
                            <li><strong>Project date</strong>:{{$eachPortfolio->created_at}}</li>
                            <li><strong>Project URL</strong>: <a href="{{$eachPortfolio->Project_url}}">{{$eachPortfolio->Project_url}}</a></li>
                        </ul>

                        <p>
                            {{$eachPortfolio->description}}
                        </p>
                    </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

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
