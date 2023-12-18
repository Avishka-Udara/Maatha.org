<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Project') }}
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
                                    <h2>Edit Project</h2>
                                    <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>
                                </div>
                            </div>
                            <div class="card-body">
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

                                <form action="{{ route('projects.update', $project->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                                                <div class="form-group">
                                                    <strong>name:</strong>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="name" value="{{ $project->name }}">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                                                <div class="form-group">
                                                    <strong>location:</strong>
                                                    <input type="text" name="location" class="form-control"
                                                        placeholder="location" value="{{ $project->location }}">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                                                <div class="form-group">
                                                    <strong>type:</strong>
                                                    <input type="text" name="type" class="form-control"
                                                        placeholder="type" value="{{ $project->type }}">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                                                <div class="form-group">
                                                    <strong>status:</strong>
                                                    <input type="text" name="status" class="form-control"
                                                        placeholder="status" value="{{ $project->status }}">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                                                <div class="form-group">
                                                    <strong>start_date:</strong>
                                                    <input type="date" name="start_date" class="form-control"
                                                        placeholder="start_date" value="{{ $project->start_date }}">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                                                <div class="form-group">
                                                    <strong>end_date:</strong>
                                                    <input type="date" name="end_date" class="form-control"
                                                        placeholder="end_date" value="{{ $project->end_date }}">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                                                <div class="form-group">
                                                    <strong>detail:</strong>
                                                    <input type="text" name="detail" class="form-control"
                                                        placeholder="detail" value="{{ $project->detail }}">
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
                                                        <img id="image1-preview" src="{{ asset($project->image1) }}" alt="Image 1 Preview"
                                                            style="max-width: 100%; height: auto;">
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
                                            <button type="submit" class="btn btn-outline-primary">Update</button>
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

    @section('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function readURL(input, previewId) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $(previewId).attr('src', e.target.result).show();
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#image1").change(function () {
                readURL(this, '#image1-preview');
            });

            // ... (similar functions for other image inputs)
        </script>
    @endsection
</x-app-layout>
