@extends('masterblog')

@section('title', 'Edit Biaya')

@section('content')
        <div class="alert alert-info text-center">Edit Biaya</div>

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

                    <form action="{{ route('biaya.update', $data->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="mb-2">
                            <label for="">Nama Konsumen</label>
                            <input type="text" name="nama_konsumen" class="form-control" value="{{ $data->nama_konsumen }}">
                        </div>
                        <div class="mb-2">
                            <label for="">Email Konsumen</label>
                            <input type="text" name="title" class="form-control" value="{{ $data->email_konsumen }}">
                        </div>
                        <div class="mb-2">
                            <label for="">Jumlah Biaya</label>
                            <input type="email_konsumen" name="jumlah_biaya" class="form-control" value="{{ $data->jumlah_biaya }}">
                        </div>
                        <div class="mb-2">
                            <label for="">Tanggal Transaksi</label>
                            <input type="datetime-local" name="upload_at" class="form-control" value="{{ $data->updated_at }}">
                        </div>
                        <div class="mb-2">
                            <label for="">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="{{ $data->keterangan }}">
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
                        <a href="{{ url('biaya') }}" class="btn btn-warning">Kembali</a>

                    </form>

                </div>

            </div>

        </div>
        
    </div>
@endsection