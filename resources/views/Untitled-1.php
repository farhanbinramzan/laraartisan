<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('teamcss/style.css') }}">
</head>

<body>
    <section id="team" class="team section p-5" style="background: #8daadf">
        <div class="container section-title" data-aos="fade-up">
            <h2 class="text-center py-3 text-white">Our Team</h2>
        </div>
        <div class="container">
            <div class="row g-4">
                @foreach ($teams as $item)
                    <div class="team2 col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
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
                                                                <a href="{{ $account['account'] }}" target="_blank" class="text-decoration-none">
                                                                    @if ($account['platform']==='twitter')
                                                                    <i class="fa-brands fa-square-x-twitter"></i>
                                                                    @elseif ($account['platform']==='facebook')
                                                                    <i class="fa-brands fa-square-facebook"></i>
                                                                    @elseif ($account['platform']==='instagram')
                                                                    <i class="fa-brands fa-square-instagram"></i>
                                                                    @elseif ($account['platform']==='linkedin')
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
                        <div class="member-info text-center pt-2">
                            <h4>{{ $item->name }}</h4>
                            <span>{{ $item->desigination }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>

</body>

</html>
