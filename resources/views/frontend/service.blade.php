@extends('layout.layout')
@section('content') 
 
 <!-- Services Section -->
 <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Check our Services</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">
            @foreach ($services as $item)
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
@endsection