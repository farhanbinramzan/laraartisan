@extends('layout.layout')
@section('content') 
 
     <!-- Contact Section -->
     <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">



            <div class="row gy-4">

                <div class="col-lg-4">
                    @if ($contact)
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>

                            <div>
                                <h3>Address</h3>
                                <p>{{ $contact->address }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>{{ $contact->phone }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>{{ $contact->email }}</p>
                            </div>
                        </div><!-- End Info Item -->
                    @endif
                </div>

                <div class="col-lg-8">
                    <form action="{{ route('contact.send') }}" method="post" data-aos="fade-up">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control"
                                    placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email"
                                    placeholder="Your Email" required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-danger">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div><!-- End Contact Form -->
                <div class="mb-4" data-aos-delay="100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.778673141686!2d74.25520277612475!3d31.44775955072508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919010ece983199%3A0x660e88adb41d1723!2sHOMIEZ!5e0!3m2!1sen!2s!4v1734559633919!5m2!1sen!2s" width="100%" height="270px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->
            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection