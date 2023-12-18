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
            style="background-image: url(assets/images/eranda-fernando-FnCudJgDWJM-unsplashcp.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="text-center row align-items-center justify-content-center">
                    <div class="col-md-10">
                        <div class="mb-4 row justify-content-center">
                            <div class="text-center col-md-10">
                                <h1 data-aos="fade-up" class="mb-5">The network of
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
                            MAATHA WORLD NEWS</h2>
                    </div>
                </div>

                @if ($news->isEmpty())
                    <div class="alert alert-danger" role="alert">
                        No Record available.
                    </div>
                @else
                <!--search bar-->
                <div class="row">
                    <div class="mt-2 col-lg-12">
                            <div class="p-4 col-lg-12 margin-tb">
                                    <a alt="back" href="{{ route('welcome') }}"><i class="fa-solid fa-arrow-left"></i> &nbsp;&nbsp;Go back</a>
                            </div>
                        <div class="my-2 d-flex justify-content-end">
                            
                            <form action="{{ route('news.all') }}" method="GET" role="search" class="d-flex">
                                <div class="input-group">
                                    <div class="m-3"><span class="fas fa-search me-1"></span> Search</div>
                                    <input type="text" class="m-2 form-control me-2" name="term"
                                        placeholder="Search Your News" id="term" value="{{ $term ?? '' }}">
                                    <a href="{{ route('news.all') }}" title="Clear search" class="mt-3"><span class="fas fa-times-circle me-1"></span></a>
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
                                        @foreach ($news as $item)
                                            <div class=" col-md-4">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <span>{{ $item->title }}</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <img src="{{ asset('images/news/' . $item->image) }}"
                                                            alt="{{ $item->title }}" class="img-fluid" style="height: 200px;width:auto;">
                                                        <p class="card-text">{{ substr($item->detail, 0, 80) }}...</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <a href="{{ route('news.show', $item->id) }}">See more >>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
            strings: ["Maatha Development Society", "MDS"],
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
