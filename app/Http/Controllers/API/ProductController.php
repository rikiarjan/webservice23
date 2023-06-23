<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    // tampil
    public function index()
    {
        // $datas = Product::all();
        $datas = Product::with('category')->get();
        $data = ProductResource::collection($datas);

        return response()->json([
            'pesan' => 'Data Berhasil Ditemukan',
            'data' => $data
        ], 200);
    }
    // tampil berdasarkan id
    public function show($id)
    {
        $data = Product::find($id);
        if (empty($data)) {
            return response()->json(['pesan' => 'Data Tidak ditemukan', 'data' => ''], 404);
        }
        return response()->json(['pesan' => 'Data Berhasil Ditemukan', 'data' => $data], 200);
    }

    // public function show($id)
    // {
    //     $data = Product::where('id', $id)->first();
    //     if (empty($data)) {
    //         return response()->json([
    //             'pesan' => 'Data tidak ditemukan',
    //             'data' => $data
    //         ], 404);
    //     }

    //     return response()->json([
    //         'pesan' => 'Data ditemukan',
    //         'data' => $data
    //     ], 200);
    // }

    // create
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric'
        ]);
        if ($validasi->fails()) {
            return response()->json(['pesan' => 'data gagal ditambahkan', 'data' => $validasi->errors()->all()], 404);
        }
        $data = Product::create($request->all());
        return response()->json(['pesan' => 'data berhasil ditambahkan', 'data' => $data], 200);
    }

    // public function store(Request $request)
    // {
    //     // proses validasi
    //     $validate = Validator::make($request->all(), [
    //         'name' => 'required|min:4',
    //         'description' => 'required|min:10',
    //         'price' => 'required|numeric',
    //         'category_id' => 'required|integer',
    //     ]);

    //     if ($validate->fails()) {
    //         return $validate->errors();
    //     }

    //     // proses simpan data
    //     $data = Product::create($request->all());
    //     return response()->json([
    //         'pesan' => 'Data berhasil disimpan',
    //         'data' => $data
    //     ], 201);
    // }

    // update
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        if (empty($products)) {
            return response()->json(['pesan' => 'data tidak ditemukan', 'data' => ''], 404);
        } else {
            $validasi = Validator::make($request->all(), [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required|numeric',
                'category_id' => 'required|numeric'
            ]);
            if ($validasi->fails()) {
                return response()->json(['pesan' => 'Data Gagal diUpdate', 'data' => $validasi->errors()->all()], 404);
            }
            $products->update($request->all());
            return response()->json(['pesan' => 'Data Berhasil disimpan', 'data' => $products], 200);
        }
    }
    // Hapus
    public function destroy($id)
    {
        $products = Product::find($id);
        if (empty($products)) {
            return response()->json(['pesan' => 'Data Tidak ditemukan', 'data' => ''], 404);
        }
        $products->delete();
        return response()->json(['pesan' => 'Data Berhasil dihapus', 'data' => $products]);
    }

    // // tes relasi
    // public function indexRelasi()
    // {
    //     $products = Product::with('category')->get();
    //     return response()->json(['pesan' => 'Data Berhasil ditemukan', 'data' => $products], 200);
    // }

}