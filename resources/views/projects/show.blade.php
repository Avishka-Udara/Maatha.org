<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mt-4 mb-4">
                            <a href="{{ route('projects.index') }}"><i class="fa-solid fa-arrow-left"></i> Back to
                                projects</a>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h2>{{ $project->name }}</h2>
                                <form action="{{ route('projects.destroy', ['project' => $project->id]) }}"
                                    method="POST" class="mt-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"
                                            style="color: #a60004;"></i></button>
                                </form>
                            </div>
                            <div class="card-body">
                                <p><strong>Location:</strong> {{ $project->location }}</p>
                                <p><strong>Type:</strong> {{ $project->type }}</p>
                                <p><strong>Status:</strong> {{ $project->status }}</p>
                                <p><strong>Start Date:</strong> {{ $project->start_date }}</p>
                                <p><strong>End Date:</strong> {{ $project->end_date }}</p>
                                <p><strong>Detail:</strong> {{ $project->detail }}</p>
                                <div class="row justify-content-center">
                                    @foreach (range(1, 5) as $i)
                                        @if ($project->{'image' . $i})
                                            <div class="col-4 m-4">
                                                <a href="{{ asset('uploads/project/' . $project->{'image' . $i}) }}"
                                                    target="_blank">
                                                    <img src="{{ asset('uploads/project/' . $project->{'image' . $i}) }}"
                                                        alt="Image {{ $i }}" class="card-img-top">
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
