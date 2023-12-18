<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Announcements') }}
        </h2>
    </x-slot>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="mb-3">Announcements</h2>
                    </div>
                    <div class="col-md-4 text-end">
                        <a class="btn btn-success" href="{{ route('Announcements.create') }}">
                            <span class="fas fa-plus me-1"></span>Create New Announcement
                        </a>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <form action="{{ route('Announcements.index') }}" method="GET" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control me-2" name="term" placeholder="Search announcements"
                                    id="term" value="{{ $term ?? '' }}">
                                <button class="btn btn-info me-2" type="submit" title="Search announcements">
                                    <span class="fas fa-search me-1"></span>Search
                                </button>
                                <a href="{{ route('Announcements.index') }}" class="btn btn-danger" title="Clear search">
                                    <span class="fas fa-times-circle me-1"></span>
                                </a>
                            </div>
                        </form>
                    </div> 
                </div>

                <div class="row mt-4">
                    @forelse ($Announcements as $Announcement)
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">{{ $Announcement->title }}</h5>
                                        <form action="{{ route('Announcements.destroy', $Announcement->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="Delete" class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash me-1"></i>
                                            </button>
                                        </form>
                                    </div>

                                    <div class="col-md-4">
                                        <a href="{{ asset('images/' . $Announcement->image) }}" target="_blank">
                                            <img src="/images/{{ $Announcement->image }}" class="img-fluid" alt="Announcement Image">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <p class="card-text">{{ substr($Announcement->detail, 0, 100) }}</p>
                                            <small class="text-muted">
                                                Created at: {{ $Announcement->created_at }}
                                            </small>
                                            <br>
                                            <small class="text-muted">
                                                Updated at: {{ $Announcement->updated_at }}
                                            </small>
                                            <br>
                                            <hr>
                                            <div class="text-end"> <!-- Align buttons to the right -->
                                                <a href="{{ route('Announcements.show', $Announcement->id) }}" class="btn btn-outline-info mt-2">Show</a>
                                                <a href="{{ route('Announcements.edit', $Announcement->id) }}" class="btn btn-outline-primary mt-2">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <div class="alert alert-info">
                                <p>No records found.</p>
                            </div>
                        </div>
                    @endforelse
                </div>
                {!! $Announcements->links() !!}
            </div>
        </div>
    </div>

</x-app-layout>
