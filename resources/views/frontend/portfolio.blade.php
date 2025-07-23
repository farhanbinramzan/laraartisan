@extends('layout.layout')
@section('content')
 <!-- Team Section -->
 <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Check our Portfolio</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
            data-sort="original-order">

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
                            alt="">

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
@endsection