<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Blog</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <h2 class="alert alert-info text-center">1901010236 / Riki Arjan</h2>

        <div class="alert alert-info text-center">Tambah Data</div>

        <div class="col-md-6">

                <div class="card card-body">

                    <form action="{{ route('blog.store') }}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="">Author</label>
                            <input type="text" name="author" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Body</label>
                            <input type="text" name="body" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Keyword</label>
                            <input type="text" name="keyword" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Created at</label>
                            <input type="datetime-local" name="create_at" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Updated at</label>
                            <input type="datetime-local" name="upload_at" class="form-control">
                        </div>

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        <a href="{{ url('blog') }}" class="btn btn-warning">Kembali</a>

                    </form>

                </div>

            </div>

        </div>
        
    </div>
</body>
</html>