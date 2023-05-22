@extends('masterbiaya')

@section('title', 'Create Biaya')

@section('content')
        <div class="alert alert-info text-center">Create Biaya</div>

            <div class="col-md-6">

                <div class="card card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('biaya.store') }}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Konsumen</label>
                            <input type="text" name="nama_konsumen" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Email Konsumen</label>
                            <input type="email" name="email_konsumen" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Jumlah Biaya</label>
                            <input type="text" name="jumlah_biaya" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Tanggal Transaksi</label>
                            <input type="datetime-local" name="tanggal_transaksi" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control">
                        <div class="mb-2">
                            <label for="">Created at</label>
                            <input type="datetime-local" name="create_at" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Updated at</label>
                            <input type="datetime-local" name="upload_at" class="form-control">
                        </div>

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        <a href="{{ url('biaya') }}" class="btn btn-warning">Kembali</a>

                    </form>

                </div>

            </div>

        </div>
        
    </div>
@endsection