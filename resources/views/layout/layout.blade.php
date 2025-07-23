<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>LaraArtisan</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" style="mix-blend-mode: difference;">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('teamcss/style.css') }}">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('view') }}" class="logo d-flex align-items-center me-auto me-lg-0">

                <h1 class="sitename"><img src="./assets/img/LaraArtisan.png" alt=""></h1>

            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('view') }}"
                            class="{{ request()->routeIs('view') ? 'active' : '' }}">Home<br></a></li>
                    <li><a href="{{ route('about-us') }}"
                            class="{{ request()->routeIs('about-us') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('services') }}"
                            class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                    <li><a href="{{ route('portfolio') }}"
                            class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a></li>
                    <li><a href="{{ route('teams') }}"
                            class="{{ request()->routeIs('teams') ? 'active' : '' }}">Team</a></li>
                    <li><a href="{{ route('contact-us') }}"
                            class="{{ request()->routeIs('contact-us') ? 'active' : '' }}">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{route('view')}}">Get Started</a>

        </div>
    </header>
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            @if ($heroSection)
                <img src="{{ asset('images/hero/' . $heroSection->image) }}" alt="" data-aos="fade-in">

                <div class="container">

                    <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-xl-6 col-lg-8">
                            <h2>{{ $heroSection->title }}<span>.</span></h2>
                            <p>{{ $heroSection->description }}</p>
                        </div>
                    </div>
            @endif
            <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                @foreach ($heros->take(4) as $item)
                    <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <i class=" {{ $item->icon }}"></i>
                            <h3><a href="{{ $item->link }}" target="_blank">{{ $item->title }}</a></h3>
                        </div>
                    </div>
                @endforeach
            </div>

            </div>

        </section><!-- /Hero Section -->

        @yield('content')


        <footer id="footer" class="footer dark-background">

            <div class="footer-top">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-6 footer-about">
                            <a href="{{ route('view') }}" class="logo d-flex align-items-center">
                                <span class="sitename">LaraArtisan</span>
                            </a>
                            <div class="footer-contact pt-3">
                                @if ($contact)
                                    <p>{{ $contact->address }}</p>
                                    <p class="mt-3"><strong>Phone:</strong> <span>{{ $contact->phone }}</span></p>
                                    <p><strong>Email:</strong> <span>{{ $contact->email }}</span></p>
                                @endif
                            </div>
                            <div class="social-links d-flex mt-4">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4>Useful Links</h4>
                            @foreach ($footers as $item)
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <a href="{{ $item->usefull_links }}">
                                            {{ $item->name }}</a></li>
                                </ul>
                            @endforeach

                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4>Our Services</h4>
                            @foreach ($footerservice as $item)
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <a href="{{ $item->service_links }}">
                                            {{ $item->service_name }}</a></li>
                                </ul>
                            @endforeach
                        </div>

                        <div class="col-lg-4 col-md-12 footer-newsletter">
                            <h4>Our Newsletter</h4>
                            <p>Subscribe to our newsletter and receive the latest news about our products and services!
                            </p>
                            <form action="forms/newsletter.php" method="post" class="php-email-form">
                                <div class="newsletter-form"><input type="email" name="email"><input
                                        type="submit" value="Subscribe"></div>
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="copyright">
                <div class="container text-center">
                    <p>© <span>Copyright</span> <span>All Rights
                            Reserved</span><strong class="px-1 sitename">by <a
                                href="{{ route('view') }}">LaraArtisan</a></strong> </p>
                </div>
            </div>

        </footer>

        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

        <script src="assets/js/main.js"></script>

</body>

</html>
