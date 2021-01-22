@extends('front.layouts.master')
@section('content')
    <main id="main">

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <br>
                    <p>Here is my some beautiful works. Hope you will like it.</p>
                </div>

                <br>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                           <a href="{{route('front.portfolio')}}" > <li data-filter="*" class="filter-active">All</li></a>
                            <!-- <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li> -->
                            <a href="{{route('front.portfolio')}}"><li   data-filter=".filter-web">Web</li></a>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($portfolios as $key=>$portfolio)
                    <div class="col-lg-6 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="{{route('front.portfolio.details',$portfolio->id)}}">
                                <img src="{{asset($portfolio->thumbnailImage)}}" class="img-fluid" alt="">
                            </a>
                            <div class="portfolio-info">
                                <h4>{{$portfolio->name}}</h4>
                                <p>{{$portfolio->category}}</p>
                                <div class="portfolio-links">
                                    <a href="{{asset($portfolio->thumbnailImage)}}" data-gall="portfolioGallery" class="venobox" title="{{$portfolio->category}}"><i class="bx bx-plus"></i></a>
                                    <a href="{{route( 'front.portfolio.details',$portfolio->id)}}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                    <a href="{{route( 'front.portfolio.details',$portfolio->id)}}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection
