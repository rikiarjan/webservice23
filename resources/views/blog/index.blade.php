@extends('masterblog')

@section('title', 'Blog')

@section('content')
    <div class="alert alert-info text-center">Blog</div>

    <a href="{{ route('blog.create') }}" class="btn btn-primary float-end">Tambah Data</a>

    <br> <br>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Author</th>
                <th>Title</th>
                <th>Body</th>
                <th>Keyword</th>
                <th>Create at</th>
                <th>Update at</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->author }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->body }}</td>
                <td>{{ $row->keyword }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td>
                    <form action="{{ route('blog.delete', $row->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                    <a href="{{ route('blog.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection