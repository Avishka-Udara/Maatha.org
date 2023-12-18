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
            style="background-image: url(assets/images/sander-don-sGg_8msiIt0-unsplash.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="text-center row align-items-center justify-content-center">

                    <div class="col-md-10">

                        <div class="mb-4 row justify-content-center">
                            <div class="text-center col-md-10">
                                <h1 data-aos="fade-up" class="mb-5">{{ __('welcome.header1')}}<br><span
                                        class="typed-words"></span></h1>

                                <p data-aos="fade-up" data-aos-delay="100"><a href="/join"
                                        class="btn btn-primary btn-pill">{{ __('welcome.joinwithus')}}</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="mt-0 block-half-content-1 d-block d-lg-flex">
            <div class="block-half-content-img bg-primary">
                <iframe id="video" width="100%" height="100%"
                src="https://www.youtube.com/embed/-lc8IijG2SA"
                title="The Inspiring Story of Damayanthi and Her Team"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="block-half-content-text bg-primary">
                <div class="block-half-content-text-inner">
                    <h2 class="mb-4 block-half-content-heading">{{ __('welcome.abouttitle')}}</h2>
                    <div class="block-half-content-excerpt">
                        <p class="lead">
                            {{ __('welcome.aboutdescription')}}
                        </p>
                    </div>
                </div>

                <div class="block-counter-1 section-counter">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="counter">
                                <div class="number-wrap">
                                    <span class="block-counter-1-number" data-number="3">0</span><span
                                        class="append">K</span>
                                </div>
                                <span class="block-counter-1-caption">Enroled Volunteers</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter">
                                <div class="number-wrap">
                                    <span class="block-counter-1-number" data-number="7">0</span><span
                                        class="append"></span>
                                </div>
                                <span class="block-counter-1-caption">MDS Branchs</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter">
                                <div class="number-wrap">
                                    <span class="block-counter-1-number" data-number="96">0</span><span
                                        class="append">%</span>
                                </div>
                                <span class="block-counter-1-caption">Succes Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vcard">
            <div class="vcard-play">
                <div class="vcard-video">

                </div>
            </div>
        </div>

        <div class="py-5 mt-4 block-services-1">
            <div class="container">
                <div class="row">
                    <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                        <h3 class="mb-3">{{ __('welcome.LatestNews')}}</h3>
                        <p>{{ __('welcome.LNewsDescription')}}</p>
                        <p>
                            <!-- link for all news -->
                            <a href="news/all" class="d-inline-flex align-items-center block-service-1-more">
                                <span>
                                    {{ __('welcome.SeeallNews')}}
                                </span>
                                <span class="icon-keyboard_arrow_right icon"></span>
                            </a>
                        </p>
                    </div>
                    @if (count($news) > 0)
                        <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                            <div class="block-service-1-card">
                                <a href="{{ route('news.show', $news[0]->id) }}" class="mb-4 thumbnail-link d-block"><img src="{{ asset('images/news/' . $news[0]->image) }}"
                                        alt="Image" class="img-fluid" style="width: 250px; height: 150px;"></a>
                                <h3><a href="{{ route('news.show', $news[0]->id) }}">{{ substr($news[0]->title, 0, 50) }}</a></h3>
                                <div class="block-service-1-excerpt">
                                    <p>{{ substr($news[0]->detail, 0, 150) }}...</p>
                                </div>
                                <p><a href="{{ route('news.show', $news[0]->id) }}" class="d-inline-flex align-items-center block-service-1-more"><span>Find
                                            out more</span> <span class="icon-keyboard_arrow_right icon"></span></a></p>
                            </div>
                        </div>

                        @if (isset($news[1]))
                            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                                <div class="block-service-1-card">
                                    <a href="{{ route('news.show', $news[1]->id) }}" class="mb-4 thumbnail-link d-block"><img src="{{ asset('images/news/' . $news[1]->image) }}"
                                            alt="Image" class="img-fluid" style="width: 250px; height: 150px;"></a>
                                    <h3><a href="{{ route('news.show', $news[1]->id) }}">{{ substr($news[1]->title, 0, 50) }}</a></h3>
                                    <div class="block-service-1-excerpt">
                                        <p>{{ substr($news[1]->detail, 0, 150) }}...</p>
                                    </div>
                                    <p><a href="{{ route('news.show', $news[1]->id) }}" class="d-inline-flex align-items-center block-service-1-more"><span>Find
                                                out more</span> <span class="icon-keyboard_arrow_right icon"></span></a></p>
                                </div>
                            </div>
                        @else
                            ---
                        @endif

                        @if (isset($news[2]))
                            <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                                <div class="block-service-1-card">
                                    <a href="{{ route('news.show', $news[2]->id) }}" class="mb-4 thumbnail-link d-block"><img src="{{ asset('images/news/' . $news[2]->image) }}"
                                            alt="Image" class="img-fluid" style="width: 250px; height: 150px;"></a>
                                    <h3><a href="{{ route('news.show', $news[2]->id) }}">{{ substr($news[2]->title, 0, 50) }}</a></h3>
                                    <div class="block-service-1-excerpt">
                                        <p>{{ substr($news[2]->detail, 0, 150) }}...</p>
                                    </div>
                                    <p><a href="{{ route('news.show', $news[2]->id) }}" class="d-inline-flex align-items-center block-service-1-more"><span>Find
                                                out more</span> <span class="icon-keyboard_arrow_right icon"></span></a></p>
                                </div>
                            </div>
                        @else
                            ---
                        @endif

                    @else
                        <div class="alert alert-danger" role="alert">
                            No News available yet. Stay tuned!
                        </div>
                    @endif

                </div>
            </div>
        </div>



        @php
            $announcements = \App\Models\Announcement::latest()
                ->take(4)
                ->get();
        @endphp

        <div class="site-section bg-light">
            <hr>
            <div class="container">
                <div class="mb-5 row">
                    <div class="text-center col-md-12">
                        <h2 class="text-center site-section-heading font-secondary">{{ __('welcome.Announcements')}}</h2>
                    </div>
                </div>
            </div>

            <div class="container">
                @if (count($announcements) > 0)
                    <div class="d-block d-lg-flex">
                        <div class="half-wrap d-block d-md-flex m-2">
                            <div class="bg-white half d-block d-md-flex arrow-right">
                                <div class="text">
                                    <h2>{{ substr($announcements[0]->title, 0, 50) }}</h2>
                                    <p>{{ substr($announcements[0]->detail, 0, 100) }}...</p>
                                    <p><a href="{{ route('Announcements.show', $announcements[0]->id) }}"
                                            class="btn btn-primary btn-sm btn-pill">Read More</a>
                                    </p>
                                </div>
                            </div>
                            <div class="half bg-img img"
                                style="background-image: url('{{ asset('images/' . $announcements[0]->image) }}');"></div>
                        </div>
                        @if (isset($announcements[1]))
                        <div class="half-wrap d-block d-md-flex m-2">
                            <div class="half bg-white d-block d-md-flex arrow-right">
                                <div class="text">
                                    <h2>{{ substr($announcements[1]->title, 0, 50) }}</h2>
                                    <p>{{ substr($announcements[1]->detail, 0, 100) }}...</p>
                                    <p><a href="{{ route('Announcements.show', $announcements[1]->id) }}"
                                            class="btn btn-primary btn-sm btn-pill">Read More</a></p>
                                </div>
                            </div>
                            <div class="m-1 half bg-img img"
                                style="background-image: url('{{ asset('images/' . $announcements[1]->image) }}');"></div>
                        </div>
                        @else
                            ---
                        @endif
                    </div>

                    <div class="d-block d-lg-flex">
                        @if (isset($announcements[2]))
                        <div class="half-wrap d-block d-md-flex m-2">
                            <div class="half bg-white  d-block d-md-flex arrow-left order-md-2">
                                <div class="text">
                                    <h2>{{ substr($announcements[2]->title, 0, 50) }}</h2>
                                    <p>{{ substr($announcements[2]->detail, 0, 100) }}...</p>
                                    <p><a href="{{ route('Announcements.show', $announcements[2]->id) }}"
                                            class="btn btn-primary btn-sm btn-pill">Read More</a></p>
                                </div>
                            </div>
                            <div class="half bg-img img"
                                style="background-image: url('{{ asset('images/' . $announcements[2]->image) }}');"></div>
                        </div>
                        @else
                            ---
                        @endif

                        @if (isset($announcements[3]))
                        <div class="half-wrap d-block d-md-flex m-2">
                            <div class="half bg-white d-block d-md-flex arrow-left order-md-2">
                                <div class="text">
                                    <h2>{{ substr($announcements[3]->title, 0, 50) }}</h2>
                                    <p>{{ substr($announcements[3]->detail, 0, 100) }}...</p>
                                    <p><a href="{{ route('Announcements.show', $announcements[3]->id) }}"
                                            class="btn btn-primary btn-sm btn-pill">Read More</a></p>
                                </div>
                            </div>
                            <div class="m-1 half bg-img img"
                                style="background-image: url('{{ asset('images/' . $announcements[3]->image) }}');"></div>
                        </div>
                        @else
                            ---
                        @endif
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        No announcements available.
                    </div>
                @endif
            </div>
        </div>
        
        <!--Board of Directors-->
        <div class="site-section bg-primary">
            <div class="container">
                <div class="mb-5 row">
                    <div class="text-center col-md-12" >
                        <h2 class="text-center site-section-heading" style="color:#fff;">{{ __('welcome.BoardofDirectors')}}</h2>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12">

                        <div class="owl-carousel-2 owl-carousel">

                            <div class="mx-auto text-center d-block ">
                                <div class="mx-auto mb-4 person">
                                    <img src="assets/images/Mr. Mahendra Amarasuriya.jpeg" alt="Image"
                                        class="mx-auto mb-3 img-fluid rounded-circle w-50"
                                        style="width: 100%; height:100%">
                                </div>
                                <div style="color:#fff;">
                                    <h2 class="mb-4 h5">{{ __('welcome.director01')}}</h2>
                                    <blockquote>&ldquo;{{ __('welcome.directordescription01')}}&rdquo;</blockquote>
                                </div>
                            </div>

                            <div class="mx-auto text-center d-block">
                                <div class="mx-auto mb-4 person">
                                    <img src="assets/images/Mr. Navin Gooneratne.jpg" alt="Image"
                                        class="mx-auto img-fluid rounded-circle w-50">
                                </div>
                                <div style="color:#fff;">
                                    <h2 class="mb-4 h5">{{ __('welcome.director02')}}</h2>
                                    <blockquote>&ldquo;{{ __('welcome.directordescription02')}}&rdquo;</blockquote>
                                </div>
                            </div>

                            <div class="mx-auto text-center d-block">
                                <div class="mx-auto mb-4 person">
                                    <img src="assets/images/Prof. Sanath Lamabadusuriya.jpg" alt="Image"
                                        class="mx-auto img-fluid rounded-circle w-50">
                                </div>
                                <div style="color:#fff;">
                                    <h2 class="mb-4 h5">{{ __('welcome.director03')}}</h2>
                                    <blockquote>&ldquo;{{ __('welcome.directordescription03')}}&rdquo;</blockquote>
                                </div>
                            </div>

                            <div class="mx-auto text-center d-block">
                                <div class="mx-auto mb-4 person">
                                    <img src="assets/images/Dr. Ms. Premila Senanayake.jpg" alt="Image"
                                        class="mx-auto img-fluid rounded-circle w-50">
                                </div>
                                <div style="color:#fff;">
                                    <h2 class="mb-4 h5">{{ __('welcome.director04')}}</h2>
                                    <blockquote>&ldquo;{{ __('welcome.directordescription04')}}&rdquo;</blockquote>
                                </div>
                            </div>

                            <div class="mx-auto text-center d-block">
                                <div class="mx-auto mb-4 person">
                                    <img src="assets/images/Dr. Mass R. Usuf.jpg" alt="Image"
                                        class="mx-auto img-fluid rounded-circle w-50">
                                </div>
                                <div style="color:#fff;">
                                    <h2 class="mb-4 h5">{{ __('welcome.director05')}}</h2>
                                    <blockquote>&ldquo;{{ __('welcome.directordescription05')}}&rdquo;</blockquote>
                                </div>
                            </div>

                            <div class="mx-auto text-center d-block">
                                <div class="mx-auto mb-4 person">
                                    <img src="assets/images/Mr. Sidath Wettimuny.png" alt="Image"
                                        class="mx-auto img-fluid rounded-circle w-50">
                                </div>
                                <div style="color:#fff;">
                                    <h2 class="mb-4 h5">{{ __('welcome.director06')}}</h2>
                                    <blockquote>&ldquo;{{ __('welcome.directordescription06')}}&rdquo;</blockquote>
                                </div>
                            </div>

                            <div class="mx-auto text-center d-block">
                                <div class="mx-auto mb-4 person">
                                    <img src="assets/images/Mr. Kumar Nadesan.jpg" alt="Image"
                                        class="mx-auto img-fluid rounded-circle w-50">
                                </div>
                                <div style="color:#fff;">
                                    <h2 class="mb-4 h5">{{ __('welcome.director07')}}</h2>
                                    <blockquote>&ldquo;{{ __('welcome.directordescription07')}}&rdquo;</blockquote>
                                </div>
                            </div>

                            <div class="mx-auto text-center d-block">
                                <div class="mx-auto mb-4 person">
                                    <img src="assets/images/Mrs.Mala Weerasekara.jpeg" alt="Image"
                                        class="mx-auto img-fluid rounded-circle w-50">
                                </div>
                                <div style="color:#fff;">
                                    <h2 class="mb-4 h5">{{ __('welcome.director08')}}</h2>
                                    <blockquote>&ldquo;{{ __('welcome.directordescription08')}}&rdquo;</blockquote>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>

        <hr>
        <!--sponsors slider section-->
        <div class="site-section">
            <div class="container">
                <div class="mb-5 row">
                    <div class="text-center col-md-12">
                        <h2 class="text-center site-section-heading font-secondary">Our Corporates</h2>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-12">
                        @if (count($sponsors) > 0)
                        <div class="owl-carousel-2 owl-carousel">
                            @foreach ($sponsors as $sponsor)
                            <div class="item">
                                <div class="mx-auto text-center d-block block-testimony">
                                    <div class="mx-auto mb-4 person" style="max-height: 100px;">
                                        <img src="{{ asset('sponsors/' . $sponsor->logo) }}" alt="Image" class="mx-auto img-fluid" style="height: 100px; width: auto;">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @else
                            <div class="alert alert-danger" role="alert">
                                No Corporates available.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!--sponsors slider section END-->
        @livewire('footer')
        <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i></button>

        @livewire('scripts')


        <script>
            var typed = new Typed('.typed-words', {
                strings: ["{{ __('welcome.typeword1')}}", "{{ __('welcome.typeword2')}}", " {{ __('welcome.typeword3')}}", "{{ __('welcome.typeword4')}}", "{{ __('welcome.typeword5')}}", "{{ __('welcome.typeword6')}}"],
                typeSpeed: 80,
                backSpeed: 80,
                backDelay: 4000,
                startDelay: 1000,
                loop: true,
                showCursor: true
            });

        </script>
</body>

</html>
