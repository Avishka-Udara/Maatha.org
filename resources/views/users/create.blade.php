<x-app-layout>
<!--add new user-->

    <!--show error-->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
    @endif
    <!--form-->
    <!--add new user by filling name,password, email and temporary password, user role(0=>manager, 1=>admin, 2=> manager)-->

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="row">
                    <div class="p-4 col-lg-12 margin-tb">
                            <a alt="back" href="{{ route('users.index') }}"><i class="fa-solid fa-arrow-left"></i> &nbsp;&nbsp;Go back</a>
                    </div>
                </div>
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-10">
                    <div class="container">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <!--email-->
                            <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="email" name="email" class="form-control" placeholder="Enter the E-mail">
                                </div>
                            </div>
                            <!--User Role-->
                            <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>User Role:</strong>
                                    <select name="role" class="form-control">
                                        <option value="0">User</option>
                                        <!--show admin option only for admin-->
                                        @if(Auth::user()->role=='1')
                                        <option value="1">Admin</option>
                                        @endif
                                        <option value="2">Manager</option>
                                    </select>
                                </div>
                            </div>

                            <!--Temporary Password
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Password:</strong>
                                    <input type="password" name="password" class="form-control" placeholder="Enter the Temporary Password">
                                </div>
                            </div>-->

                            <div class="gap-2 py-2 d-grid">
                                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
