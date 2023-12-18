<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar" role="banner">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-11 col-xl-4">
                <a href="/" class="text-white mb-0"><img src="{{ asset('assets/images/maatha_logo.svg') }}" alt="maatha world"
                        style="width: 25%"></a>
            </div>
            <div class="col-12 col-md-8 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    
                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="/"><span>{{ __('navbar.Home')}}</span></a></li>
                        <li><a href="/about"><span>{{ __('navbar.About')}}</span></a></li>
                        <li><a href="/project"><span>{{ __('navbar.Projects')}}</span></a></li>
                        <li><a href="/Accountability"><span>{{ __('navbar.Transparency')}}</span></a></li>
                        <li><a href="/mds"><span>{{ __('navbar.MDS')}}</span></a></li>
                        <!--language dropdown-->
                        <li class="has-children">
                            <a href="#"><span>{{ __('navbar.Language')}}</span></a>
                            <ul class="dropdown arrow-top">
                                <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a></li>
                                <li><a href="{{ LaravelLocalization::getLocalizedURL('si') }}">සිංහල</a></li>
                                <li><a href="{{ LaravelLocalization::getLocalizedURL('ta') }}">தமிழ்</a></li>
                            </ul>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item ">
                                    <a class="nav-link" href="/dashboard">
                                        <i class="fa-solid fa-table-columns" style="color: #009491;"></i>
                                    </a>
                                </li>
                            @else
                                <!--<a href="/join" class="btn btn-primary btn-pill btn-sm">Join With Us</a>-->
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
                    href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                        class="icon-menu h3"></span></a></div>

        </div>

    </div>

</header>
