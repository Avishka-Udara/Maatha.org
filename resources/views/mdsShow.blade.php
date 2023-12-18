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
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-10">

                        <div class="row justify-content-center mb-4">
                            <div class="col-md-10 text-center">
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
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <h2 class="site-section-heading text-center font-secondary text-black" id="pavithramaatha">{{ __('mds.header01')}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>{{ __('mds.MDSDetails')}}</h2>
                            <a class="btn btn-primary" href="{{ route('mds.network') }}">{{ __('mds.Back')}}</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                {{ __('mds.District') }}
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ __('mds.divsec ')}}{{ $mds->Divisional_Secretariat }}</p>
                                <p class="card-text">{{ __('mds.gnd') }}{{ $mds->Grama_Niladhari_Division }}</p>
                                <p class="card-text">{{ __('mds.gndn') }} {{ $mds->Grama_Niladhari_Division_Number }}</p>
                                <p class="card-text">{{ __('mds.village') }} {{ $mds->Village }}</p>
                                <p class="card-text">{{ __('mds.officeaddress') }} {{ $mds->Office_Address }}</p>
                                <p class="card-text">{{ __('mds.prioritizedprojpro') }} {{ $mds->Prioritized_project_proposal }}</p>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header">
                                {{ __('mds.boardmembers') }}
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ __('mds.president') }} {{ $mds->President }}</p>
                                <p class="card-text">{{ __('mds.secretary') }} {{ $mds->Secretary }}</p>
                                <p class="card-text">{{ __('mds.treasurer') }}{{ $mds->Treasurer }}</p>
                                <p class="card-text">{{ __('mds.assistanttresurer') }} {{ $mds->Assistant_treasurer }}</p>
                                <p class="card-text">{{ __('mds.agricoordinat') }} {{ $mds->Agriculture_Coordinator }}</p>
                                <p class="card-text">{{ __('mds.vocationaltraining') }} {{ $mds->Vocational_Training_and_Entrepreneurship_Coordinator }}</p>
                                <p class="card-text">{{ __('mds.englishedu') }} {{ $mds->English_language_and_Education_Coordinator }}</p>
                                <p class="card-text">{{ __('mds.mandit') }} {{ $mds->mitcordinator }}</p>
                                <p class="card-text">{{ __('mds.entandreconcoodinator') }} {{ $mds->Entertainment_and_Reconciliation_Coordinator }}</p>
                                <p class="card-text">{{ __('mds.healthpromo') }} {{ $mds->Health_Promotion_Coordinator }}</p>
                                <p class="card-text">{{ __('mds.womenaffaires') }} {{ $mds->Women_affaires_and_child_development_Coordinator }}</p>
                                <!--p class="card-text">Coordinator: {{ $mds->Coordinator }}</p-->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                {{ __('mds.image') }}
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <img src="{{ asset('images/' . $mds->image) }}" alt="MDS Image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header">
                                {{ __('mds.religiousauthority') }}
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="{{ asset('uploads/mdsra/' . $mds->Religious_Authority) }}" target="_blank" class="btn btn-primary">{{ __('mds.viewfile') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header">
                                {{ __('mds.gn') }}
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="{{ asset('uploads/mdsgn/' . $mds->Grama_Niladhari) }}" target="_blank" class="btn btn-primary">{{ __('mds.viewfile') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header">
                                {{ __('mds.memberssignature') }}
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="{{ asset('uploads/mdsmm/' . $mds->Minutes_with_members_signature_list) }}" target="_blank" class="btn btn-primary">{{ __('mds.viewfile') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header">
                                {{ __('mds.projectproposal') }}
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="{{ asset('uploads/mdspp/' . $mds->Prioritized_project_proposal) }}" target="_blank" class="btn btn-primary">{{ __('mds.viewfile') }}</a>
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
