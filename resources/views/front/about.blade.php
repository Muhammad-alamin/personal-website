@extends('front.layouts.master')
@section('content')
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <p>I am Alamin. I am a experienced Web Developer
                        in designing and developing user interfaces, testing, debugging, and training
                        staff within eCommerce technologies. Proven ability in optimizing
                        web functionality that improve data retrieval and workflow efficiencies.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{asset('assets/front/assets/img/my_pic.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>PHP &amp; Laravel Developer</h3>
                        <p class="font-italic">
                            Developed dynamic and interactive website that ensured high traffic, page views, and User Experience, resulting in 40% increase in sales revenue.
                        </p>
                        <div class="row">
                            <div class="col-lg-6 icofont-1x">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 10 Oct 1994</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> 0163-3037007 / 0176-4442804</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Dhaka, Bangladesh</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 icofont-1x">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 27</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Bachelor</li>
                                    <li><i class="icofont-rounded-right" ></i> <strong>Email:</strong> alamin.softdevloper@gmail.com</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Laravel <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Facts Section ======= -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                </div>

                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item">
                        <img src="{{asset('assets/front/assets/img/testimonials/nirjhor_sir.jpg')}}" class="testimonial-img" alt="">
                        <h3>Nirjhor Anjum</h3>
                        <h4>Head of Engineering & Operations
                            ADN Telecom Limited</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            It has been a real pleasure to teaching with Alamin.
                            He has been very kindful and very clear in all communications, which I appreciate.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="{{asset('assets/front/assets/img/testimonials/arman_sir.jpg')}}" class="testimonial-img" alt="">
                        <h3>Arman Hakim Sagar</h3>
                        <h4>Trainer of PeopleNTech</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            My experience with Alamin is great. He is a conscientious, hard-working student.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="{{asset('assets/front/assets/img/testimonials/hamid_sir.jpg')}}" class="testimonial-img" alt="">
                        <h3>Abdul Hamid</h3>
                        <h4>Admin of PeopleNTech</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Be strong as you fight your way to success, the difficulty you face is nothing compared to the joy of success.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->
@endsection
