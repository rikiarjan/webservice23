@extends('masterblog')

@section('title', 'Edit Blog')

@section('content')
        <div class="alert alert-info text-center">Edit Blog</div>

        <div class="col-md-6">

                <div class="card card-body">

                    <form action="{{ route('blog.update', $data->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="mb-2">
                            <label for="">Author</label>
                            <input type="text" name="author" class="form-control" value="{{ $data->author }}">
                        </div>
                        <div class="mb-2">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $data->title }}">
                        </div>
                        <div class="mb-2">
                            <label for="">Body</label>
                            <input type="text" name="body" class="form-control" value="{{ $data->body }}">
                        </div>
                        <div class="mb-2">
                            <label for="">Keyword</label>
                            <input type="text" name="keyword" class="form-control" value="{{ $data->keyword }}">
                        </div>
                        <div class="mb-2">
                            <label for="">Created at</label>
                            <input type="datetime-local" name="create_at" class="form-control" value="{{ $data->created_at }}">
                        </div>
                        <div class="mb-2">
                            <label for="">Updated at</label>
                            <input type="datetime-local" name="upload_at" class="form-control" value="{{ $data->updated_at }}">
                        </div>

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        <a href="{{ url('blog') }}" class="btn btn-warning">Kembali</a>

                    </form>

                </div>

            </div>

        </div>
        
    </div>
@endsection