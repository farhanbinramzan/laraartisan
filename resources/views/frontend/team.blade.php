@extends('layout.layout')
@section('content')
 <!-- Team Section -->
 <section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>our Team</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">
            @foreach ($teams as $item)
                <div class="team2 col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('images/' . $item->image) }}" alt=""
                                class="img-fluid">
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
@endsection