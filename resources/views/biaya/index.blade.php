@extends('masterbiaya')

@section('title', 'Biaya')

@section('content')
    <div class="alert alert-info text-center">Biaya</div>

    <a href="{{ route('biaya.create') }}" class="btn btn-primary float-end">Tambah Data</a>

    <br> <br>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Konsumen</th>
                <th>Email Konsumen</th>
                <th>Jumlah Biaya</th>
                <th>Tanggal Transaksi</th>
                <th>Keterangan</th>
                <th>Create at</th>
                <th>Update at</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->nama_konsumen }}</td>
                <td>{{ $row->email_konsumen }}</td>
                <td>{{ $row->jumlah_biaya }}</td>
                <td>{{ $row->tanggal_transaksi }}</td>
                <td>{{ $row->keterangan }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td>
                    <form action="{{ route('biaya.delete', $row->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                    <a href="{{ route('biaya.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection