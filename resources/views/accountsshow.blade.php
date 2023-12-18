<!DOCTYPE html>
<html lang="en">

<head>
    <title>Maatha World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @livewire('headercss')

</head>

<body>

    @livewire('gestnav')
    <div class="site-wrap">


        <div class="site-blocks-cover overlay"
            style="background-image: url({{ asset('assets/images/ray-reyes-3xwrg7Vv6Ts-unsplash.jpg') }});" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-10">

                        <div class="row justify-content-center mb-4">
                            <div class="col-md-10 text-center">
                                <h1 data-aos="fade-up">{{ __('accounting.Accounting')}}</h1>
                                <span class="typed-words h1"></span>
                                <br><br>
                                <p data-aos="fade-up" data-aos-delay="100"><a href="#table"
                                        class="btn btn-primary btn-pill">{{ __('accounting.Inqury')}}</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>





        <div class="site-section">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center">
                            <a class="btn btn-primary btn-sm " href="{{ route('Accountability') }}"><i
                                    class="fa-solid fa-arrow-left" style="color: #ffffff;"></i></a>
                            <h2 class="ml-4">{{ __('accounting.accountDetails')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ $account->id }}<span>
                            <div class="btn btn-primary btn-sm btn-pill">{{ $account->type }}</div>
                        </span>
                    </div>
                    <div class="card-body">
                        <h3>{{ __('accounting.Amount')}}
                            {{ $account->amount }}
                        </h3>
                        <p class="card-text">{{ __('accounting.Description')}}
                            {{ $account->description }}
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        {{ __('accounting.createtherecord')}} {{ $account->created_at->diffForHumans() }}
                        @if ($account->updated_at != $account->created_at)
                            | updated : {{ $account->updated_at->diffForHumans() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    @livewire('footer')
    <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i></button>

    @livewire('scripts')
    <script>
        var typed = new Typed('.typed-words', {
            strings: ["{{ __('accounting.typedwords01')}}", "{{ __('accounting.typedwords02')}}", "{{ __('accounting.typedwords03')}}", "{{ __('accounting.typedwords04')}}"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: false,
            showCursor: true
        });
    </script>

</body>

</html>
