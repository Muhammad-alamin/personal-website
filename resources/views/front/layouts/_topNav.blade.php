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
