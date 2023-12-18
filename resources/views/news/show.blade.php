<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
                    <div class="p-4 col-lg-12 margin-tb">
                            <a alt="back" href="{{ route('news.index') }}"><i class="fa-solid fa-arrow-left"></i> &nbsp;&nbsp;Go back</a>
                    </div>
        </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="card-header">
                                {{ $news->title }}
                            </div>
                        </div>
                        <div class="card-body">
                            {{ $news->detail }}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('images/news/' . $news->image) }}" class="img-fluid rounded-start" alt="{{ $news->title }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
