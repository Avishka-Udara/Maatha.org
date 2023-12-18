@extends('accounts.layout')

@section('content')
    <div class="container">
        <h2>Create New account Entry</h2>
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
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container">
                    <form action="{{ route('accounts.update', $account->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <!--amount, type, description-->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>type:</strong>
                                    <input type="text" name="type" class="form-control" placeholder="type" value="{{ $account->type }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>amount:</strong>
                                    <input type="text" name="amount" class="form-control" placeholder="amount" value="{{ $account->amount }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>description:</strong>
                                    <input type="text" name="description" class="form-control" placeholder="description" value="{{ $account->description }}">
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary-outline">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
