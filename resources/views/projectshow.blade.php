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
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-10">

                        <div class="row justify-content-center mb-4">
                            <div class="col-md-10 text-center">
                                <h1 data-aos="fade-up" class="mb-5">Pojects
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
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <h2 class="site-section-heading text-center font-secondary text-black" id="pavithramaatha">Projects</h2>
                    </div>
                </div>
                <div class="row mb-4" id="prj">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>Project Details</h2>
                            <a class="btn btn-primary btn-sm" href="{{ route('project') }}">Back</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <p><strong>Project Name:</strong> {{ $project->name }}</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-header">
                                            <p>Project Description</p>
                                        </div>
                                        <div class="card-body" style="color: #009491 !important;">
                                            <p>{{ $project->detail }}</p>
                                        </div>
                                        <div class="card-header">
                                            <p>Project Location</p>
                                        </div>
                                        <div class="card-body" style="color: #009491 !important;">
                                            <p>{{ $project->location }}</p>
                                        </div>
                                        <div class="card-header">
                                            <p>Project Progress</p>
                                        </div>
                                        <div class="card-body" style="color: #009491 !important;">
                                            <p>{{ $project->status }}</p>
                                        </div>
                                        <div class="card-header">
                                            <p>Project Start Date</p>
                                        </div>
                                        <div class="card-body" style="color: #009491 !important;">
                                            <p>{{ $project->start_date }}</p>
                                        </div>
                                        <div class="card-header">
                                            <p>Project End Date</p>
                                        </div>
                                        <div class="card-body" style="color: #009491 !important;">
                                            <p>{{ $project->end_date }}</p>
                                        </div>
                                        <div class="card-header">
                                            <p>Project Created At</p>

                                            <p style="color: #333">{{ $project->created_at }}</p>
                                        </div>
                                        <div class="card-header">
                                            <p>Project Updated At</p>

                                            <p style="color: #333">{{ $project->updated_at }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="{{ asset('uploads/project/' . $project->image1) }}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="{{ asset('uploads/project/' . $project->image2) }}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="{{ asset('uploads/project/' . $project->image3) }}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="{{ asset('uploads/project/' . $project->image4) }}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="{{ asset('uploads/project/' . $project->image5) }}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
            strings: ["Pavithra Maatha", "Sashreeka maatha"],
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
