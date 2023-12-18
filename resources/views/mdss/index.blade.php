<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('MDS MANAGEMENT') }}
        </h2>
    </x-slot>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">
                    <div class="mt-2 col-lg-12">
                        <div class="my-2 d-flex justify-content-between">
                            <a class="btn btn-success me-2" href="{{ route('mdss.create') }}"><span
                                    class="fas fa-plus me-1"></span>Create New Record</a>
                            <form action="{{ route('mdss.index') }}" method="GET" role="search" class="d-flex">
                                <div class="input-group">
                                    <input type="text" class="form-control me-2" name="term"
                                        placeholder="Search projects" id="term" value="{{ $term ?? '' }}">
                                    <button class="btn btn-info me-2" type="submit" title="Search projects"><span
                                            class="fas fa-search me-1"></span>Search</button>
                                    <a href="{{ route('mdss.index') }}" class="btn btn-danger"
                                        title="Clear search"><span class="fas fa-times-circle me-1"></span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <div class="container">
                        @if ($mdss->isEmpty())
                            <div class="m-4 alert alert-info">
                                <p>No record found.</p>
                            </div>
                        @else
                            @foreach ($mdss as $mds)
                                <div class="m-4 col-md-4">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <span>{{ $mds->District }}</span>
                                            <form action="{{ route('mdss.destroy', $mds->id) }}" method="POST">

                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Divisional Secretariat:
                                                {{ $mds->Divisional_Secretariat }}
                                            </p>
                                            <a href="{{ route('mdss.show', $mds->id) }}" class="btn btn-primary">View
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {!! $mdss->links() !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
