<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="py-12">
                    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                            <div class="col">
                                <div class="shadow-xl card">
                                    <div class="card-body">
                                        <p class="card-text">Number of users registered in the system</p>
                                        <a href="{{ route('users.index') }}" class="btn btn-primary">{{ $usersCount }} users</a>
                                        <h5 class="card-title"></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="shadow-xl card">
                                    <div class="card-body">
                                        <p class="card-text">Number of Announsments on the system</p>
                                        <a href="{{ route('Announcements.index') }}" class="btn btn-primary">{{ $announcementCounts }} announcement</a>
                                        <h5 class="card-title"></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="shadow-xl card">
                                    <div class="card-body">
                                        <p class="card-text">Number of Maatha Development
                                            Society's on the system</p>
                                        <a href="{{ route('mdss.index') }}" class="btn btn-primary">{{ $mdsCount }} mds</a>
                                        <h5 class="card-title"></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="shadow-xl card">
                                    <div class="card-body">
                                        <p class="card-text">Number of Transparency Records on the system</p>
                                        <a href="{{ route('accounts.index') }}" class="btn btn-primary">{{ $accountsCount }} Transperancy Records</a>
                                        <h5 class="card-title"></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="shadow-xl card">
                                    <div class="card-body">
                                        <p class="card-text">Number of Sponsors shows on the system</p>
                                        <a href="{{ route('oursponsors.index') }}" class="btn btn-primary">{{ $sponsorsCount }} Sponsor Records</a>
                                        <h5 class="card-title"></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="shadow-xl card">
                                    <div class="card-body">
                                        <p class="card-text">Number of News on the system</p>
                                        <a href="{{ route('news.index') }}" class="btn btn-primary">{{ $newsCount }} News</a>
                                        <h5 class="card-title"></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="shadow-xl card">
                                    <div class="card-body">
                                        <p class="card-text">Number of Sashrika Matha projects on the system</p>
                                        <a href="{{ route('projects.index') }}" class="btn btn-primary">{{ $sashrika_mathaCount }} projects</a>
                                        <h5 class="card-title"></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="shadow-xl card">
                                    <div class="card-body">
                                        <p class="card-text">Number of Pavithra Matha projects on the system</p>
                                        <a href="{{ route('projects.index') }}" class="btn btn-primary">{{ $Pavithra_MaathaCount }} projects</a>
                                        <h5 class="card-title"> </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
