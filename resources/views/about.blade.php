<!DOCTYPE html>
<html lang="en">

<head>
    <title>Maatha World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    @livewire('headercss')


    <style>
        /* Custom styles for hover effects */
        .mission-card:hover,
        .vision-card:hover {
            /* Increase size on hover and make it smother when mouse point get rid of it*/
            transform: scale(1.1);
            transition: transform 0.5s ease-in-out;
        }

        .mission-card,
        .vision-card {
            cursor: pointer;
            /* Change cursor on hover */
        }
    </style>
</head>

<body>

    @livewire('gestnav')
    <div class="site-wrap">


        <div class="site-blocks-cover overlay" style="background-image: url({{ asset('assets/images/about.jpg') }});" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-10">

                        <div class="row justify-content-center mb-4">
                            <div class="col-md-10 text-center">
                                <h1 data-aos="fade-up">{{ __('about.header1')}}</h1>
                                <span class="typed-words h1"></span>
                                <br><br>
                                <p data-aos="fade-up" data-aos-delay="100"><a href="/join"
                                        class="btn btn-primary btn-pill">{{ __('welcome.joinwithus')}}</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>





        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="padding-top:10%;">
                        <img src="{{ asset('assets/images/maatha_logo.svg') }}" alt="Image" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 ml-auto mt-5">
                        <h2 class="text-primary mb-3 mt-5">{{ __('about.header2')}}</h2>
                        <p class="lead mt-5">{{ __('about.Description')}} </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-5 block-cta-1 primary-overlay" style="background-image: url('assets/images/hero_bg_2.jpg')">
            <div class="container">
                <div class="row">
                    <!-- Vision Card -->
                    <div class="col-md-6">
                        <div class="card vision-card  m-4">
                            <div class="card-body">
                                <h3 class="card-title">{{ __('about.header3')}}</h3>
                                <p class="card-text">{{ __('about.Description1')}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Mission Card -->
                    <div class="col-md-6">
                        <div class="card mission-card m-4">
                            <div class="card-body">
                                <h3 class="card-title">{{ __('about.header4')}}</h3>
                                <p class="card-text">{{ __('about.Description2')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center">
                        <h2 class="text-primary mb-3">{{ __('about.header5')}}</h2>
                        <p>{{ __('about.Description5')}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center">
                        <p class="text-primary">{{ __('about.header6')}}</p>
                        <p>{{ __('about.Description6')}}</p>
                        <hr>
                        <p class="text-primary">{{ __('about.header7')}}</p>
                        <p>{{ __('about.Description7')}}</p>
                        <hr>
                        <p class="text-primary">{{ __('about.header8')}}</p>
                        <p>{{ __('about.Description8')}}</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center">
                        <h2 class="text-primary mb-3">{{ __('about.header9')}}</h2>
                        <p>{{ __('about.Description9')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center">
                        <h2 class="text-primary mb-3">{{ __('about.header10')}}</h2>
                        <p>{{ __('about.Description10')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center">
                        <h2 class="text-primary mb-3">{{ __('about.header11')}}</h2>
                        <p>{{ __('about.Description11')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center">
                        <h2 class="text-primary mb-3">{{ __('about.header12')}}</h2>
                        <p>{{ __('about.Description12')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    @livewire('footer')

    <button id="scrollToTopButton">
        <i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i>
    </button>
    @livewire('scripts')
    <script>
        var typed = new Typed('.typed-words', {
            strings: ["{{ __('about.typedwords1')}}",
                " {{ __('about.typedwords2')}}", "{{ __('about.typedwords3')}}"
            ],
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
