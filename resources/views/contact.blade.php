<!DOCTYPE html>
<html lang="en">

<head>
    <title>Maatha World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @livewire('headercss')

</head>

<body>

    <div class="site-wrap">

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
                        <a href="/" class="text-white mb-0"><img src="assets/images/maatha_logo.svg" alt="maatha world"
                                style="width: 25%"></a>
                    </div>
                    <div class="col-12 col-md-8 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="/"><span>Home</span></a></li>
                                <li><a href="/about"><span>About</span></a></li>
                                <li><a href="/project"><span>Projects</span></a></li>
                                <li><a href="/Accountability"><span>Transparency</span></a></li>
                                <li><a href="/mds"><span>MDS</span></a></li>
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
                            href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                                class="icon-menu h3"></span></a></div>

                </div>

            </div>

        </header>



        <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-10">

                        <div class="row justify-content-center mb-4">
                            <div class="col-md-10 text-center">
                                <h1 data-aos="fade-up" class="mb-5">Get <span class="typed-words"></span></h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mb-5" data-aos="fade">



                        <form action="#" class="p-5 bg-white" style="margin-top: -150px;">


                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="text-black" for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="email">Email</label>
                                    <input type="email" id="email" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="subject">Subject</label>
                                    <input type="subject" id="subject" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                                        placeholder="Write your notes or questions here..."></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Send Message"
                                        class="btn btn-pill btn-primary btn-md text-white">
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="col-md-5" data-aos="fade" data-aos-delay="100">

                        <div class="p-4 mb-3 bg-white">
                            <p class="mb-0 font-weight-bold">Address</p>
                            <p class="mb-4">Address: 634, Sama Mawatha 10120 Battaramulla, Sri Lanka.</p>

                            <p class="mb-0 font-weight-bold">Phone</p>
                            <p class="mb-4"><a href="#">+94 777352628</a></p>

                            <p class="mb-0 font-weight-bold">Email Address</p>
                            <p class="mb-0"><a href="#">info@maathaworld.org</a></p>

                        </div>

                        <!--div class="p-4 mb-3 bg-white">
                            <h3 class="h5 text-black mb-3">More Info</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia
                                architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur?
                                Fugiat quaerat eos qui, libero neque sed nulla.</p>
                            <p><a href="#" class="btn btn-primary px-4 py-2 text-white btn-pill btn-sm">Learn
                                    More</a></p>
                        </div-->

                    </div>
                </div>
            </div>
        </div>


        <!--div class="mt-5 block-cta-1 primary-overlay" style="background-image: url('images/hero_bg_2.jpg')">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <h2 class="mb-3 mt-0 text-white">Upto 30% Discount for The First Commers</h2>
                        <p class="mb-0 text-white lead">Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="col-lg-4">
                        <p class="mb-0"><a href="contact.html"
                                class="btn btn-outline-white text-white btn-md btn-pill px-5 font-weight-bold btn-block">Contact
                                Us</a></p>
                    </div>
                </div>
            </div>
        </div-->
    </div>
    @livewire('footer')
    <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i></button>

    @livewire('scripts')

    <script src="js/typed.js"></script>
    <script>
        var typed = new Typed('.typed-words', {
            strings: ["in touch with us"],
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
