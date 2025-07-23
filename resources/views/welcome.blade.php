@extends('layout.layout')
@section('content')
    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                @if ($about)
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="{{ asset('images/about/' . $about->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 content">
                        <h3>{{ $about->title }}</h3>
                        {!! $about->description !!}
                    </div>
                @endif
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                <div class="swiper-wrapper align-items-center">
                    @foreach ($imgSlides as $item)
                        <div class="swiper-slide"><img src="{{ asset('images/imgSlide/' . $item->image) }}"
                                class="img-fluid" alt=""></div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Check our Services</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                @foreach ($services->take(3) as $item)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="{{ $item->icons }}"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>{{ $item->title }}</h3>
                            </a>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div><!-- End Service Item -->
                @endforeach

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="assets/img/cta-bg.jpg" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    @if ($callAction)
                        <div class="text-center">
                            <h3>{{ $callAction->title }}</h3>
                            <p>{{ $callAction->description }}</p>
                            <a class="cta-btn" href="#">Call To Action</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Check our Portfolio</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach ($categories as $category)
                        <li data-filter=".filter-{{ strtolower($category->name) }}" class="filter-active">
                            {{ $category->name }}
                        </li>
                    @endforeach
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($portfolios as $portfolio)
                        <div
                            class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower($portfolio->category->name) }}">
                            <img src="{{ asset('images/portfolio/' . $portfolio->image) }}" class="img-fluid"
                                alt=""> yes

                            <div class="portfolio-info">
                                <h4>{{ $portfolio->title }}</h4>
                                <p>{{ $portfolio->description }}</p>
                                <a href="{{ asset('images/portfolio/' . $portfolio->image) }}"
                                    title="{{ $portfolio->title }}" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="{{ $portfolio->link }}" target="_blank" title="More Details"
                                    class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach

                </div>
                <!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            @if ($status)
                <div class="row gy-4 align-items-center justify-content-between">

                    <div class="col-lg-5">
                        <img src="{{ asset('images/status/' . $status->image) }}" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6">

                        <h3 class="fw-bold fs-2 mb-3">{{ $status->title }}</h3>
                        <p>
                            {{ $status->description }}
                        </p>

                        <div class="row gy-4">

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-emoji-smile flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0"
                                            data-purecounter-end="{{ $status->no_of_client }}"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>{{ $status->client_title }}</strong>
                                            <span>{{ $status->client_desc }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-journal-richtext flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0"
                                            data-purecounter-end="{{ $status->no_of_project }}"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>{{ $status->project_title }}</strong>
                                            <span>{{ $status->project_desc }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-headset flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0"
                                            data-purecounter-end="{{ $status->no_of_hours }}"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>{{ $status->hours_title }}</strong>
                                            <span>{{ $status->hours_desc }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-people flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0"
                                            data-purecounter-end="{{ $status->no_of_workers }}"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>{{ $status->worker_title }}</strong>
                                            <span>{{ $status->worker_desc }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                        </div>

                    </div>

                </div>
            @endif
        </div>

    </section><!-- /Stats Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

        <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                <div class="swiper-wrapper">
                    @foreach ($testimonials as $item)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('images/testimonial/' . $item->image) }}" class="testimonial-img"
                                    alt="">
                                <h3>{{ $item->name }}</h3>
                                <h4>{{ $item->designation }}</h4>
                                <div class="stars">
                                        <li>
                                            <span class="stars">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <i
                                                        class="bi {{ $i <= $item->rating ? 'bi-star-fill' : 'bi-star' }}"></i>
                                                @endfor
                                            </span>
                                        </li>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>{{ $item->description }}</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- /Testimonials Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>our Team</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                @foreach ($teams->take(4) as $item)
                    <div class="team2 col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('images/' . $item->image) }}" alt="" class="img-fluid">
                                <div class="social">
                                    @if ($item->social_accounts && is_array(json_decode($item->social_accounts, true)))
                                        @php
                                            $socialAccounts = json_decode($item->social_accounts, true);
                                        @endphp
                                        <td>
                                            @foreach ($socialAccounts as $account)
                                                <a href="{{ $account['account'] }}" target="_blank"
                                                    class="text-decoration-none">
                                                    @if ($account['platform'] === 'twitter')
                                                        <i class="fa-brands fa-square-x-twitter"></i>
                                                    @elseif ($account['platform'] === 'facebook')
                                                        <i class="fa-brands fa-square-facebook"></i>
                                                    @elseif ($account['platform'] === 'instagram')
                                                        <i class="fa-brands fa-square-instagram"></i>
                                                    @elseif ($account['platform'] === 'linkedin')
                                                        <i class="fa-brands fa-linkedin"></i>
                                                    @endif
                                                </a>
                                            @endforeach
                                        </td>
                                    @else
                                        <td colspan="2">No record</td>
                                    @endif
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $item->name }}</h4>
                                <span>{{ $item->desigination }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section><!-- /Team Section -->

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
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
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
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.778673141686!2d74.25520277612475!3d31.44775955072508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919010ece983199%3A0x660e88adb41d1723!2sHOMIEZ!5e0!3m2!1sen!2s!4v1734559633919!5m2!1sen!2s"
                        width="100%" height="270px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->
            </div>

        </div>

    </section><!-- /Contact Section -->

    </main>
@endsection
