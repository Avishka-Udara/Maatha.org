<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('sponsors') }}
        </h2>
    </x-slot>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="row">
                <div class="mt-2 col-lg-12">
                    <div class="my-2 d-flex justify-content-between">
                        <a class="btn btn-success me-2" href="{{ route('oursponsors.create') }}"><span
                                class="fas fa-plus me-1"></span>Add New Sponsor</a>
                        <form action="{{ route('oursponsors.index') }}" method="GET" role="search" class="d-flex">
                            <div class="input-group">
                                <input type="text" class="form-control me-2" name="term"
                                    placeholder="Search projects" id="term" value="{{ $term ?? '' }}">
                                <button class="btn btn-info me-2" type="submit" title="Search projects"><span
                                        class="fas fa-search me-1"></span>Search</button>
                                <a href="{{ route('oursponsors.index') }}" class="btn btn-danger"
                                    title="Clear search"><span class="fas fa-times-circle me-1"></span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <!--show user-->
                <div class="container">
                    @if ($sponsors->isEmpty())
                        <div class="m-4 alert alert-info">
                            <p>No record found.</p>
                        </div>
                    @else
                        <div class="row justify-content-around">
                            @foreach ($sponsors as $sponsor)
                                <div class="mb-3 card" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4 d-none d-md-block" style="height:100%;">
                                            <img src="/sponsors/{{ $sponsor->logo }}" class="pt-2 pb-2 img-fluid"
                                                alt="sponsor logo" style="height:100%">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $sponsor->name }}</h5>
                                                <p class="card-text">{{ substr($sponsor->detail, 0, 100) }}</p>
                                                <p class="card-text"><small class="text-muted">Created at :
                                                        {{ $sponsor->created_at }}</small></p>
                                                <p class="card-text"><small class="text-muted">Update at :
                                                        {{ $sponsor->updated_at }}</small></p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="{{ route('oursponsors.show', $sponsor->id) }}"
                                                    class="btn btn-info">Show</a>
                                                <a href="{{ route('oursponsors.edit', $sponsor->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form action="{{ route('oursponsors.destroy', $sponsor->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <!--delete button with icon-->
                                                    <button type="submit" title="delete"
                                                        style="border: none; background-color:transparent;">
                                                        <i class="fas fa-trash fa-lg text-danger"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        {!! $sponsors->links() !!}

                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
