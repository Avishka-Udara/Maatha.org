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
            style="background-image: url(assets/images/ray-reyes-3xwrg7Vv6Ts-unsplash.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="text-center row align-items-center justify-content-center">
                    <div class="col-md-10">
                        <div class="mb-4 row justify-content-center">
                            <div class="text-center col-md-10">
                                <h1 data-aos="fade-up">Register</h1>
                                <span class="typed-words h1"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
        </div>


        <div>
            <div class="container">
                <div class="py-12">
                    <div class="mx-auto max-w-5xl sm:px-6 lg:px-8">
                        <h2 class="mb-4 text-2xl font-semibold">Create New MDS Entry</h2>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops! There were some problems with your input.</strong><br>
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <x-slot name="logo" class="pt-5">
                            <div style="padding-top: 60%; padding-bottom:30%;">
                                <div style=" padding-left:20%;">
                                    <x-authentication-card-logo />
                                </div>
                                <h1 class="m-5" style="color: #F5B324; font-size:25px;">
                                    Be a Mentor
                                </h1>
                            </div>
                        </x-slot>
                        <!-- paragraph describe the mentor -->
                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('We are welcome all well whishers to join as mentors for an GND Any individual person or an organization is eligible to be a mentor. A mentor should have following qualities') }}
                        </div>
                        <!-- list of qualities -->
                        <div class="mb-4 text-sm text-gray-600">
                            <ul>
                                <li>- Be honest</li>
                                <li>- Should not adhere to an existing political party actively</li>
                                <li>- Can allocate time to be a mentor to the liaise MDS team</li>
                                <li>- Have ability to help the programme by funding minimum of
                                    <br>&nbsp;&nbsp;US$1,000.00 (to
                                    be elaborately written by NG &MB)
                                </li>
                            </ul>
                        </div>
                        <!-- register information -->
                        <div class="mb-4 text-sm" style="color: #009491">
                            {{ __('If you wish to join with us and contribute your mother land as a Mentor, can you please fill the following information. With this registration, you can get the access for mentor dashboard with limited access. We will contact you soon to validate your information and give full permission.') }}
                        </div>

                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('register.mentor.submit') }}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="First name"
                                        aria-label="First name" id="name" name="name" :value="old('name')" required autofocus autocomplete="name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name"
                                        aria-label="Last name">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Email"
                                        aria-label="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="email">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <input type="profession" class="form-control" placeholder="profession"
                                        aria-label="profession" id="profession" name="profession" :value="old('profession')" required autofocus autocomplete="profession">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <label for="profile">profile </label>
                                    <textarea type="text" class="form-control" placeholder="profile"
                                        aria-label="profile" id="profile" name="profile" :value="old('profile')" required autofocus autocomplete="profile">
                                        </textarea>
                                </div>
                                <div class="col">
                                    <label for="strengths">strengths </label>
                                    <textarea type="text" class="form-control" placeholder="strengths"
                                        aria-label="strengths" id="strengths" name="strengths" :value="old('strengths')" required autofocus autocomplete="strengths">
                                    </textarea>
                                </div>
                            </div>


                            <div class="row mt-3">
                                <label class="input-group-text" for="inputGroupFile01">Upload your CV</label>
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />

                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms
                                                of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy
                                                Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </label>
                            </div>
                            @endif
                            
                            <div class=" mt-3 mb-5" >
                                <button class="btn btn-outline-primary  mx-auto" type="submit" style="padding-left: 47%;padding-right: 47%;">REGISTER</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @livewire('footer')
    <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i></button>

</body>

</html>