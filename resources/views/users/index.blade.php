<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Users') }}
        </h2>
    </x-slot>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <!--search bar-->
            <div class="row">
                <div class="mt-2 col-lg-12">
                    <div class="my-2 d-flex justify-content-end">
                        <form action="{{ route('users.index') }}" method="GET" role="search" class="d-flex">
                            <div class="input-group">
                                <div class="m-3"><span class="fas fa-search me-1"></span> Search</div>
                                <input type="text" class="m-2 form-control me-2" name="term"
                                    placeholder="Search Your MDS" id="term" value="{{ $term ?? '' }}">
                                <a href="{{ route('users.index') }}" title="Clear search" class="mt-3"><span
                                        class="fas fa-times-circle me-1"></span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--search bar-->

            <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <!--show user-->
                <div class=" col-lg-12">
                    <div class="my-2 d-flex justify-content-between">
                        <a class="btn btn-outline-success me-2" href="{{ route('users.create') }}"><span
                                class="fas fa-plus me-1"></span>Create New User</a>
                    </div>
                </div>
                <div class="container">
                    <!--add error message -->
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($users->isEmpty())
                        <div class="m-4 alert alert-info">
                            <p>No record found.</p>
                        </div>
                    @else
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <!--if role = 0 => role name=> user/ role = 1 => role name => admin/ role =2 => role name => manager-->
                                            @if ($user->role == 0)
                                                User
                                            @elseif($user->role == 1)
                                                Admin
                                            @elseif($user->role == 2)
                                                Manager
                                            @elseif($user->role == 3)
                                                Mentor
                                            @else
                                                Null
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                <a class="btn btn-outline-info"
                                                    href="{{ route('users.show', $user->id) }}">Show</a>
                                                <a class="btn btn-outline-primary"
                                                    href="{{ route('users.edit', $user->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                        <!--end show user-->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $users->links() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
