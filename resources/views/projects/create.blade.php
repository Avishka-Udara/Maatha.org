<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CREATE NEW PROJECT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2>Add New Project</h2>
                                    <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                @if ($message = Session::get('error'))
                                    <div class="alert alert-danger">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif

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

                                <form action="{{ route('projects.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                                                <div class="form-group">
                                                    <strong>name:</strong>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="name">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                                                <div class="form-group">
                                                    <strong>location:</strong>
                                                    <input type="text" name="location" class="form-control"
                                                        placeholder="location">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                                                <div class="form-group">
                                                    <strong>type:</strong>
                                                    <select name="type" class="form-control">
                                                        <option value="Pavithra_Maatha">Pavithra Maatha</option>
                                                        <option value="Sashreeka_Maatha">Sashreeka Maatha</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                                <div class="form-group">
                                                    <strong>Status:</strong>
                                                    <select name="status" class="form-control">
                                                        <option value="ongoing">Ongoing</option>
                                                        <option value="completed">Completed</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                                                <div class="form-group">
                                                    <strong>start_date:</strong>
                                                    <input type="date" name="start_date" class="form-control"
                                                        placeholder="start_date">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                                                <div class="form-group">
                                                    <strong>end_date:</strong>
                                                    <input type="date" name="end_date" class="form-control"
                                                        placeholder="end_date">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                                                <div class="form-group">
                                                    <strong>detail:</strong>
                                                    <input type="text" name="detail" class="form-control"
                                                        placeholder="detail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12  mt-2">
                                                    <div class="form-group">
                                                        <label for="image1" class="form-label"><strong>Image 1:</strong></label>
                                                        <input type="file" name="image1" class="form-control" id="image1">
                                                        <img id="image1-preview" src="#" alt="Image 1 Preview" style="display: none; max-width: 100%; height: auto;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12  mt-4">
                                                    <div class="form-group">
                                                        <label for="image2" class="form-label"><strong>Image 2:</strong></label>
                                                        <input type="file" name="image2" class="form-control" id="image2">
                                                    </div>
                                                </div>
                                                <div class="col-md-12  mt-4">
                                                    <div class="form-group">
                                                        <label for="image3" class="form-label"><strong>Image 3:</strong></label>
                                                        <input type="file" name="image3" class="form-control" id="image3">
                                                    </div>
                                                </div>
                                                <div class="col-md-12  mt-4">
                                                    <div class="form-group">
                                                        <label for="image4" class="form-label"><strong>Image 4:</strong></label>
                                                        <input type="file" name="image4" class="form-control" id="image4">
                                                    </div>
                                                </div>
                                                <div class="col-md-12  mt-4">
                                                    <div class="form-group">
                                                        <label for="image5" class="form-label"><strong>Image 5:</strong></label>
                                                        <input type="file" name="image5" class="form-control" id="image5">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mt-3">
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
