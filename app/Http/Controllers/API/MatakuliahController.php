<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Matakuliah;
use Illuminate\Support\Facades\Validator;

class MatakuliahController extends Controller
{
    // tampil
    public function index()
    {
        $datas = Matakuliah::all();
        return response()->json([
            'pesan' => 'Data Berhasil Ditemukan',
            'data' => $datas
        ], 200);
    }
    // tampil berdasarkan id
    public function show($id)
    {
        $data = Matakuliah::find($id);
        if (empty($data)) {
            return response()->json(['pesan' => 'Data Tidak ditemukan', 'data' => ''], 404);
        }
        return response()->json(['pesan' => 'Data Berhasil Ditemukan', 'data' => $data], 200);
    }

    // create
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama' => 'required',
            'semester' => 'required|numeric',
            'sks_teori' => 'required|numeric',
            'sks_praktikum' => 'required|numeric',
            'jurusan_id' => 'required|numeric'
        ]);
        if ($validasi->fails()) {
            return response()->json(['pesan' => 'data gagal ditambahkan', 'data' => $validasi->errors()->all()], 404);
        }
        $data = Matakuliah::create($request->all());
        return response()->json(['pesan' => 'data berhasil ditambahkan', 'data' => $data], 200);
    }
    // update
    public function update(Request $request, $id)
    {
        $matakulias = Matakuliah::find($id);
        if (empty($matakulias)) {
            return response()->json(['pesan' => 'data tidak ditemukan', 'data' => ''], 404);
        } else {
            $validasi = Validator::make($request->all(), [
                'nama' => 'required',
                'semester' => 'required|numeric',
                'sks_teori' => 'required|numeric',
                'sks_praktikum' => 'required|numeric',
                'jurusan_id' => 'required|numeric'
            ]);
            if ($validasi->fails()) {
                return response()->json(['pesan' => 'Data Gagal diUpdate', 'data' => $validasi->errors()->all()], 404);
            }
            $matakulias->update($request->all());
            return response()->json(['pesan' => 'Data Berhasil disimpan', 'data' => $matakulias], 200);
        }
    }
    // Hapus
    public function destroy($id)
    {
        $matakulias = Matakuliah::find($id);
        if (empty($matakulias)) {
            return response()->json(['pesan' => 'Data Tidak ditemukan', 'data' => ''], 404);
        }
        $matakulias->delete();
        return response()->json(['pesan' => 'Data Berhasil dihapus', 'data' => $matakulias]);
    }

    // relasi
    public function indexRelasi()
    {
        $matakulias = Matakuliah::with('jurusan')->get();
        return response()->json(['pesan' => 'Data Berhasil ditemukan', 'data' => $matakulias], 200);
    }

}