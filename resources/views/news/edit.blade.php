<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
                    <div class="p-4 col-lg-12 margin-tb">
                            <a alt="back" href="{{ route('news.index') }}"><i class="fa-solid fa-arrow-left"></i> &nbsp;&nbsp;Go back</a>
                    </div>
        </div>

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

    <form action="{{ route('news.update',$news->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>title:</strong>
                    <input type="text" name="title" value="{{ $news->title }}" class="form-control" placeholder="title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $news->detail }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                
                <img src="/images/news/{{ $news->image }}" width="300px">

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

</x-app-layout>