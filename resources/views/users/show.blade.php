<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="row">
                <div class="p-4 col-lg-12 margin-tb">
                        <a alt="back" href="{{ route('users.index') }}"><i class="fa-solid fa-arrow-left"></i> &nbsp;&nbsp;Go back</a>
                </div>
            </div>
            <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="row">
                <div class="p-3 mb-4 rounded shadow-sm bg-body">
                        <div class="ml-4">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="p-3 mb-4 rounded shadow-sm bg-body">
                        <div class="ml-4 form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                    </div>
                    <!--User Role-->
                    <div class="p-3 mb-4 rounded shadow-sm bg-body">
                        <strong class="ml-4">User Role:</strong>
                        @if($user->role==0)
                        User
                        @elseif($user->role==1)
                        Admin
                        @elseif($user->role==2)
                        Manager
                        @else
                        null
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
