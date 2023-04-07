<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>

<body>

<div class="container">

<h2 class="alert alert-info text-center">1901010236 / Riki Arjan</h2>

    <div class="alert alert-info text-center">Data Blog</div>

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
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>