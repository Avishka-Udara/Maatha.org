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


        <div class="site-blocks-cover overlay" style="background-image: url(assets/images/marshall-williams-E0HJTToJ--U-unsplash.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-10">

                        <div class="row justify-content-center mb-4">
                            <div class="col-md-10 text-center">
                                <h1 data-aos="fade-up">Join with Us as</h1>
                                <span class="typed-words h1"></span>
                                <br><br>
                                <p data-aos="fade-up" data-aos-delay="100"><a href="#"
                                    class="btn btn-primary btn-pill m-4">Join with MVN</a><a href="#"
                                    class="btn btn-primary btn-pill m-4">Form a MDS</a></p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>





        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/images/maatha_logo.svg" alt="Image" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 ml-auto mt-5">
                        <h2 class="text-primary mb-3 mt-5">Join Us</h2>
                        <p class="lead mt-5">
                            Maatha World Foundation id formed to join with all Sri Lankan and even living in to build this beautiful motherland.  It is our duty to contribute on the development of motherland. It is not the politician neither administrative officers whom ruled this country destroyed this country. It is US. All of US. So, we will join together to build our motherland.
                        </p>
                    </div>
                </div>
            </div>
        </div>
            <!-- Join Us Section -->
    <section class="site-section">
        <div class="container">
            <div class="row">
                <!-- Mentor Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Join as a Mentor</h5>
                            <p class="card-text">You may be looking to contribute to the development of the motherland. If so, this is the best place to invest in. Join as a Mentor and contribute to Maatha Development Society in your preferred area.</p>
                            <a href="/register/mentor" class="btn btn-primary btn-sm">Be a Mentor
                                <i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- MDS Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form a Maatha Development Society (MDS)</h5>
                            <p class="card-text">Maatha Development Society is a Grama Niladhari Division-based voluntary organization supervised by Maatha World Foundation. Villagers can form MDS in their Grama Niladhari division to contribute to the development of the division and the country.</p>
                            <a href="/mds/form" class="btn btn-primary btn-sm">Form a MDS
                                <i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- MVN Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Join with Maatha Volunteer Network (MVN)</h5>
                            <p class="card-text">If you are capable of contributing your skills, join the Maatha Volunteer Network. Whether in IT, Media, Agriculture, Music, Entrepreneurship, or any other field, you can volunteer to uplift the people of Sri Lanka.</p>
                            <a href="/register/mentor" class="btn btn-primary btn-sm">Join to MVN
                                <i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        @livewire('footer')
    </div>
    <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i></button>

    @livewire('scripts')
    <script>
        var typed = new Typed('.typed-words', {
            strings: ["mentor", "Valentier",
                "MDS"
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
