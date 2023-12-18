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
            style="background-image: url('{{ asset('assets/images/hero_bg_1.jpg')}}');" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="text-center row align-items-center justify-content-center">

                    <div class="col-md-10">

                        <div class="mb-4 row justify-content-center">
                            <div class="text-center col-md-10">
                                <h1 data-aos="fade-up" class="mb-5">{{ __('mds.Thenetworkof')}}
                                    <br><span class="typed-words"></span>
                                </h1>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>





        <div class="site-section block-services-1">
            <div class="container">
                <div class="mb-5 row">
                    <div class="text-center col-md-12">
                        <h2 class="text-center text-black site-section-heading font-secondary" id="pavithramaatha">
                        {{ __('mds.header01')}}</h2>
                    </div>
                </div>

                @if ($mdss->isEmpty())
                    <div class="alert alert-danger" role="alert">
                        No Record available.
                    </div>
                @else
                <!--search bar-->
                <div class="row">
                    <div class="mt-2 col-lg-12">
                        <div class="my-2 d-flex justify-content-end">
                            <form action="{{ route('mds.network') }}" method="GET" role="search" class="d-flex">
                                <div class="input-group">
                                    <div class="m-3"><span class="fas fa-search me-1"></span> {{ __('mds.Search')}}</div>
                                    <input type="text" class="m-2 form-control me-2" name="term"
                                        placeholder="{{ __('mds.Search01')}}" id="term" value="{{ $term ?? '' }}">
                                    <a href="{{ route('mds.network') }}" title="Clear search" class="mt-3"><span class="fas fa-times-circle me-1"></span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--search bar-->

                <div class="row">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif 
                    <div class="py-12">
                        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <div class="container">
                                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                                    <div class="row">
                                            @foreach ($mdss as $mds)
                                                    <div class="m-4 card">
                                                        <div
                                                            class="card-header d-flex justify-content-between align-items-center">
                                                            <span>{{ $mds->District }}</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text">{{ __('mds.DivisionalSecretariat')}}
                                                                {{ $mds->Divisional_Secretariat }}
                                                            </p>
                                                            <p class="card-text">{{ __('mds.GND')}}
                                                                {{ $mds->Grama_Niladhari_Division }}
                                                            </p>
                                                            <a href="{{ route('mdsshow', $mds->id) }}"
                                                                class="btn btn-primary">{{ __('mds.ViewDetails')}}
                                                            </a>
                                                        </div>
                                                    </div>
                                            @endforeach
                                            {!! $mdss->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endif
            </div>
        </div>

    </div>
    @livewire('footer')
    <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i></button>

    @livewire('scripts')

    <script>
        var typed = new Typed('.typed-words', {
            strings: ["{{ __('mds.typedwords01')}}", "{{ __('mds.typedwords02')}}"],
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
