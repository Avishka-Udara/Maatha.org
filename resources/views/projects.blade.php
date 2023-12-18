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
            style="background-image: url({{ asset('assets/images/eranda-fernando-FnCudJgDWJM-unsplashcp.jpg') }});" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="text-center row align-items-center justify-content-center">

                    <div class="col-md-10">

                        <div class="mb-4 row justify-content-center">
                            <div class="text-center col-md-10">
                                <h1 data-aos="fade-up" class="mb-5">{{ __('project.Pojects')}}
                                    <br><span class="typed-words"></span>
                                </h1>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>




        @if ($projectsPM->isEmpty())
            <div class="alert alert-danger" role="alert">
                No Record available about Pavithra Maatha.
            </div>
        @else
        <div class="site-section block-services-1">
            <div class="container">
                <div class="mb-5 row">
                    <div class="text-center col-md-12">
                        <h2 class="text-center text-black site-section-heading font-secondary" id="pavithramaatha">
                        {{ __('project.header01')}}</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($projectsPM as $projectPM)
                        <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
                            <div class="block-service-1-card">
                                <a href="#" class="mb-4 thumbnail-link d-block"><img
                                        src="{{ asset('uploads/project/' . $projectPM->image1) }}" alt="Image"
                                        class="img-fluid"></a>
                                <h3 class="mb-3 block-service-1-heading"><a href="#">{{ $projectPM->name }}</a>
                                </h3>
                                <div class="block-service-1-excerpt">
                                    <p>{{ $projectPM->detail }}</p>
                                </div>
                                <p>
                                    <a href="{{ route('projectshow', $projectPM->id) }}" class="d-inline-flex align-items-center block-service-1-more">
                                        <span>{{ __('project.Findoutmore01')}}</span>
                                        <span class="icon-keyboard_arrow_right icon"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                    {!! $projectsPM->links() !!}
                </div>
            </div>
        </div>

        <div class="mt-5 block-half-content-1 d-block d-lg-flex">
            <div class="block-half-content-img"
                style="background-image: url({{ asset('assets/images/tim-mossholder-xDwEa2kaeJA-unsplash.jpg') }});">

            </div>
            <div class="block-half-content-text bg-primary">
                <div class="block-half-content-text-inner">
                    <h2 class="mb-4 block-half-content-heading" id="Sashreekamaatha">{{ __('project.header02')}}</h2>
                    <div class="block-half-content-excerpt">
                        <p class="lead">{{ __('project.description01')}}</p>
                    </div>
                </div>

                <div class="block-counter-1 section-counter">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="counter">
                                <div class="number-wrap">
                                    <span class="block-counter-1-number" data-number="3">0</span><span
                                        class="append"></span>
                                </div>
                                <span class="block-counter-1-caption">{{ __('project.MonthsCompleates01')}}</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter">
                                <div class="number-wrap">
                                    <span class="block-counter-1-number" data-number="7">0</span><span
                                        class="append"></span>
                                </div>
                                <span class="block-counter-1-caption">{{ __('project.InitiationProjects01')}}</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter">
                                <div class="number-wrap">
                                    <span class="block-counter-1-number" data-number="100">0</span><span
                                        class="append">%</span>
                                </div>
                                <span class="block-counter-1-caption">{{ __('project.Successrate01')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if ($projectsSM->isEmpty())
            <div class="alert alert-danger" role="alert">
                No Record available about Sashreeka Maatha.
            </div>
        @else

        <!--Sashreeka maatha------------------->


        <div class="site-section block-services-1">
            <div class="container">
                <div class="mb-5 row">
                    <div class="text-center col-md-12">
                        <h2 class="text-center text-black site-section-heading font-secondary" id="pavithramaatha">
                        {{ __('project.header03')}}</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($projectsSM as $projectSM)
                        <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">
                            <div class="block-service-1-card">
                                <a href="#" class="mb-4 thumbnail-link d-block"><img
                                        src="{{ asset('uploads/project/' . $projectSM->image1) }}" alt="Image"
                                        class="img-fluid"></a>
                                <h3 class="mb-3 block-service-1-heading"><a href="#">{{ $projectSM->name }}</a>
                                </h3>
                                <div class="block-service-1-excerpt">
                                    <p>{{ $projectSM->detail }}</p>
                                </div>
                                <p><a href="{{ route('projectshow', $projectSM->id) }}"
                                        class="d-inline-flex align-items-center block-service-1-more"><span>{{ __('project.Findoutmore01')}}</span> <span class="icon-keyboard_arrow_right icon"></span></a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                    {!! $projectsSM->links() !!}
                </div>
            </div>
        </div>

        <div class="mt-5 block-half-content-1 d-block d-lg-flex">
            <div class="block-half-content-img"
                style="background-image: url({{ asset('assets/images/tim-mossholder-xDwEa2kaeJA-unsplash.jpg') }});">

            </div>
            <div class="block-half-content-text bg-primary">
                <div class="block-half-content-text-inner">
                    <h2 class="mb-4 block-half-content-heading" id="Sashreekamaatha">{{ __('project.header04')}}</h2>
                    <div class="block-half-content-excerpt">
                        <p class="lead">{{ __('project.description02')}}</p>
                    </div>
                </div>

                <div class="block-counter-1 section-counter">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="counter">
                                <div class="number-wrap">
                                    <span class="block-counter-1-number" data-number="3">0</span><span
                                        class="append"></span>
                                </div>
                                <span class="block-counter-1-caption">{{ __('project.MonthsCompleates01')}}</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter">
                                <div class="number-wrap">
                                    <span class="block-counter-1-number" data-number="7">0</span><span
                                        class="append"></span>
                                </div>
                                <span class="block-counter-1-caption">{{ __('project.InitiationProjects01')}}</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter">
                                <div class="number-wrap">
                                    <span class="block-counter-1-number" data-number="100">0</span><span
                                        class="append">%</span>
                                </div>
                                <span class="block-counter-1-caption">{{ __('project.Successrate01')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <br>
        
    </div>
    @livewire('footer')
    <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i></button>

    @livewire('scripts')
    <script>
        var typed = new Typed('.typed-words', {
            strings: ["{{ __('project.typedwords01')}}", "{{ __('project.typedwords02')}}"],
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
