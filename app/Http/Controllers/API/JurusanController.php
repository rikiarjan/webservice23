<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Validator;

class JurusanController extends Controller
{
    // tampil
    public function index()
    {
        $datas = Jurusan::all();
        return response()->json([
            'pesan' => 'Data Berhasil Ditemukan',
            'data' => $datas
        ], 200);
    }
    // tampil berdasarkan id
    public function show($id)
    {
        $data = Jurusan::find($id);
        if (empty($data)) {
            return response()->json(['pesan' => 'Data Tidak ditemukan', 'data' => ''], 404);
        }
        return response()->json(['pesan' => 'Data Berhasil Ditemukan', 'data' => $data], 200);
    }

    // create
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'id' => 'required|numeric',
            'nama' => 'required',
            'jenjang' => 'required|in:D3,S1'
        ]);
        if ($validasi->fails()) {
            return response()->json(['pesan' => 'data gagal ditambahkan', 'data' => $validasi->errors()->all()], 404);
        }
        $data = Jurusan::create($request->all());
        return response()->json(['pesan' => 'data berhasil ditambahkan', 'data' => $data], 200);
    }
    // update
    public function update(Request $request, $id)
    {
        $jurusans = Jurusan::find($id);
        if (empty($jurusans)) {
            return response()->json(['pesan' => 'data tidak ditemukan', 'data' => ''], 404);
        } else {
            $validasi = Validator::make($request->all(), [
                'id' => 'required|numeric',
                'nama' => 'required',
                'jenjang' => 'required|in:D3,S1'
            ]);
            if ($validasi->fails()) {
                return response()->json(['pesan' => 'Data Gagal diUpdate', 'data' => $validasi->errors()->all()], 404);
            }
            $jurusans->update($request->all());
            return response()->json(['pesan' => 'Data Berhasil disimpan', 'data' => $jurusans], 200);
        }
    }
    // Hapus
    public function destroy($id)
    {
        $jurusans = Jurusan::find($id);
        if (empty($jurusans)) {
            return response()->json(['pesan' => 'Data Tidak ditemukan', 'data' => ''], 404);
        }
        $jurusans->delete();
        return response()->json(['pesan' => 'Data Berhasil dihapus', 'data' => $jurusans]);
    }

    // relasi
    public function indexRelasi()
    {
        $jurusans = Jurusan::with('matakuliah')->get();
        return response()->json(['pesan' => 'Data Berhasil ditemukan', 'data' => $jurusans], 200);
    }

}