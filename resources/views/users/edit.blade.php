<x-app-layout>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
                            <form action="{{ route('users.update',$user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Name:</strong>
                                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <!--email-->
                                    <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Email:</strong>
                                            <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Enter the E-mail">
                                        </div>
                                    </div>
                                    <!--User Role-->
                                    <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>User Role:</strong>
                                            <select name="role" class="form-control">
                                                <option value="0" @if($user->role==0) selected @endif>User</option>
                                                <option value="1" @if($user->role==1) selected @endif>Admin</option>
                                                <option value="2" @if($user->role==2) selected @endif>Manager</option>
                                            </select>
                                        </div>
                                    </div>
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
