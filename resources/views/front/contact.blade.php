@extends('front.layouts.master')
@section('content')
    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <br>
                </div>
                <br>
                <div>
                    <iframe  style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.500175971481!2d90.35306311429724!3d23.765196894129325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c09f9a67012f%3A0x7c7abe0037517750!2sMohammadpur%20Housing%20Society!5e0!3m2!1sen!2sbd!4v1610139876761!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>Mohammadpur, Dhaka, Bangladesh</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>alamin.softdevloper@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>+880-1633-037007</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="{{route('front.contact.store')}}" class="bg-white p-5 contact-form" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                                @error('name') <i class="text-danger">{{$message}}</i> @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                @error('email') <i class="text-danger">{{$message}}</i> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                                @error('subject') <i class="text-danger">{{$message}}</i> @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="description" id="description" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                @error('description') <i class="text-danger">{{$message}}</i> @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" value="Send Message" class="btn btn-primary py-3 px-5">Send Message</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
