<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.layouts._head')
</head>

<body>

<!-- ======= Header ======= -->
    @include('front.layouts._topNav')

<!-- ======= Hero Section ======= -->

    @yield('content')


    @include('front.layouts._footer')


<div id="preloader"></div>
<a href="{{route('front.home')}}" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

    @include('sweetalert::alert')

    @include('front.layouts._js')

</body>

</html>
