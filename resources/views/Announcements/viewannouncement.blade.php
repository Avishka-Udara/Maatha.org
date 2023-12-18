<!DOCTYPE html>
<html lang="en">

<head>
    <title>Maatha World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @livewire('headercss')
</head>

<body>
    <div class="site-mobile-menu" >
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">

        <div class="container pb-5">
            <div class="row align-items-center">

                <div class="col-11 col-xl-4">
                    <a href="/" class="text-white mb-0"><img src="{{ asset('assets/images/maatha_logo.svg') }}" alt="maatha world"
                            style="width: 25%"></a>
                </div>
                <div class="col-12 col-md-8 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block ">
                            <li><a style="color: #333" href="/"><span>Home</span></a></li>
                            <li><a style="color: #333" href="/about"><span>About</span></a></li>
                            <li><a style="color: #333" href="/project"><span>Projects</span></a></li>
                            <li><a style="color: #333" href="/Accountability"><span>Transparency</span></a></li>
                            <li><a style="color: #333" href="/mds"><span>MDS</span></a></li>
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item "><a class="nav-link" href="{{ url('/dashboard') }}"
                                            style="color: #009491">Dashboard</a></li>
                                @else
                                    <a href="/join" class="btn btn-primary btn-pill btn-sm">Join With Us</a>
                                    <li class="ml-3 ">
                                        <a href="{{ route('login') }}" style="color: #009491">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <style>
                                                    svg {
                                                        fill: #009491
                                                    }
                                                </style>
                                                <path
                                                    d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                                            </svg>
                                        </a>
                                    </li>
                                @endauth
                            @endif
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle"><span
                            class="icon-menu h3"></span></a></div>

            </div>

        </div>

    </header>

    <div class="site-wrap" >
        <div class="site-section block-services-1">
            <div class="container" style="padding-top: 10%;">
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center">
                            <a class="btn btn-primary btn-sm " href="{{ route('Announcements.index') }}"><i
                                    class="fa-solid fa-arrow-left" style="color: #ffffff;"></i></a>
                            <h2 class="ml-4"> Maatha World Announcements</h2>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card mb-3" style="display: flex;">
                    <div class="row g-0">
                        <div class="col-md-4" style="overflow: hidden;">
                            <a href="{{ asset('images/' . $Announcement->image) }}" target="_blank">
                                <img src="{{ asset('images/' . $Announcement->image)}}" alt="{{ $Announcement->title }}" style="max-height: 100%; width: auto;">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $Announcement->name }}</h5>
                                <p class="card-text">{{ $Announcement->detail }}</p>
                                <p class="card-text"><small class="text-muted">{{ $Announcement->created_at }}</small></p>
                            </div>
                        </div>
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
