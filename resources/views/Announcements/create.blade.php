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
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

        <div class="row">
                    <div class="p-4 col-lg-12 margin-tb">
                            <a alt="back" href="{{ route('Announcements.index') }}"><i class="fa-solid fa-arrow-left"></i> &nbsp;&nbsp;Go back</a>
                    </div>
        </div>
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <!--show user-->
                <div class="container">
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

                    <form action="{{ route('Announcements.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="m-4 row">
                            <!--add title, details, image and submit button-->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title:</strong>
                                    <input type="text" name="title" class="form-control" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12  pt-3">
                                <div class="form-group">
                                    <strong>Detail:</strong>
                                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12  pt-3">
                                <div class="form-group">
                                    <strong>language:</strong>
                                    <!--chose language-->
                                    <select name="language" class="form-control">
                                        <option value="English">English</option>
                                        <option value="Sinhala">Sinhala</option>
                                        <option value="Tamil">Tamil</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                </div>
                            </div>
                            <div class="gap-2 py-2 d-grid pt-3">
                                <button type="submit" class="btn btn-outline-primary">Submit</button> 
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
