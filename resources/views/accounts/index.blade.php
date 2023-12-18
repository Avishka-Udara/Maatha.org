<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('account MANAGEMENT') }}
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
            <div class="container">
                <div class="row">
                    <div class="mt-2 col-lg-12">
                        <div class="my-2 d-flex justify-content-between">
                            <a class="btn btn-success me-2" href="{{ route('accounts.create') }}"><span
                                    class="fas fa-plus me-1"></span>Create New Record</a>
                            <form action="{{ route('accounts.index') }}" method="GET" role="search" class="d-flex">
                                <div class="input-group">
                                    <input type="text" class="form-control me-2" name="term"
                                        placeholder="Search projects" id="term" value="{{ $term ?? '' }}">
                                    <button class="btn btn-info me-2" type="submit" title="Search projects"><span
                                            class="fas fa-search me-1"></span>Search</button>
                                    <a href="{{ route('accounts.index') }}" class="btn btn-danger"
                                        title="Clear search"><span class="fas fa-times-circle me-1"></span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <div class="container">
                        @if ($accounts->isEmpty())
                            <div class="m-4 alert alert-info">
                                <p>No record found.</p>
                            </div>
                        @else
                            @foreach ($accounts as $account)
                                <div class="m-4 col-md-4">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <span>{{ $account->id }}</span> <!--edit button-->
                                            <div>
                                                <a href="{{ route('accounts.edit', $account->id) }}"
                                                    class="btn btn-primary"><span class="fas fa-edit"></span></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="{{ route('accounts.show', $account->id) }}"
                                                class="btn btn-primary">{{ $account->amount }}</a>
                                        </div>
                                        <div class="card-footer text-muted">
                                            create the record : {{ $account->created_at->diffForHumans() }}
                                            @if ($account->updated_at != $account->created_at)
                                            <br>updated : {{ $account->updated_at->diffForHumans() }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {!! $accounts->links() !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
