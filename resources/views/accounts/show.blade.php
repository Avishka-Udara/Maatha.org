@extends('accounts.layout')
@section('content')
<!--add back button-->


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>account Details</h2>
                        <a class="btn btn-primary" href="{{ route('accounts.index') }}">Back</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ $account->id }}<span>{{ $account->type }}</span>
                    </div>
                    <div class="card-body">
                        <h3>Amount :
                            {{ $account->amount }}
                        </h3>
                        <p class="card-text">Description:
                            {{ $account->description }}
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        create the record : {{ $account->created_at->diffForHumans() }}
                        @if ($account->updated_at != $account->created_at)
                        | updated : {{ $account->updated_at->diffForHumans() }}
                        @endif
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
