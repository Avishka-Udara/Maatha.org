<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('PROJECT MANAGEMENT') }}
        </h2>
    </x-slot>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <!--add error message -->
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container-fluid">
                <div class="row">
                    <div class="mt-2 col-lg-12">
                        <div class="my-2 d-flex justify-content-between">
                            <a class="btn btn-success me-2" href="{{ route('projects.create') }}"><span
                                    class="fas fa-plus me-1"></span>Create New Record</a>
                            <form action="{{ route('projects.index') }}" method="GET" role="search" class="d-flex">
                                <div class="input-group">
                                    <input type="text" class="form-control me-2" name="term"
                                        placeholder="Search projects" id="term" value="{{ $term ?? '' }}">
                                    <button class="btn btn-info me-2" type="submit" title="Search projects"><span
                                            class="fas fa-search me-1"></span>Search</button>
                                    <a href="{{ route('projects.index') }}" class="btn btn-danger"
                                        title="Clear search"><span class="fas fa-times-circle me-1"></span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <div class="container">
                        @if ($projects->isEmpty())
                            <div class="m-4 alert alert-info">
                                <p>No record found.</p>
                            </div>
                        @else
                            @foreach ($projects as $project)
                                <div class="col-md-4">
                                    <div class="m-3 card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <span>{{ $project->id }}</span>
                                            <a
                                                href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a>
                                            <div>
                                                <a href="{{ route('projects.edit', $project->id) }}"
                                                    class="btn btn-primary">
                                                    <span class="fas fa-edit"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="card-body
                                            @if ($project->status === 'ongoing') bg-ongoing
                                            @elseif ($project->status === 'completed')
                                            bg-completed
                                            @endif">
                                            <a href="{{ route('projects.show', $project->id) }}"><b>Project
                                                    :</b>{{ $project->name }}</a>
                                            <p><b>Location :</b> {{ $project->location }}</p>
                                            <p><b>Type :</b> {{ $project->type }}</p>
                                            <p>
                                                <b>Status :</b>
                                                {{ $project->status }}
                                            </p>
                                        </div>
                                        <div
                                            class="card-footer text-muted d-flex justify-content-between align-items-center">
                                            {{ $project->created_at->diffForHumans() }}
                                            <a href="{{ route('projects.show', $project->id) }}"
                                                class="btn btn-primary">More details ></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="mt-4 mb-4">
                                {{ $projects->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
