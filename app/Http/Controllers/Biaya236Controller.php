<?php

namespace App\Http\Controllers;

use App\Models\Biaya236;
use Illuminate\Http\Request;

class Biaya236Controller extends Controller
{
    //
    public function index()
    {

        $data = Biaya236::all();
        // dd($data);

        return view('biaya.index', compact('data'));
    }

    public function create()
    {
        return view('biaya.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_konsumen' => 'required|min:5',
            'email_konsumen' => 'required|email',
            'jumlah_biaya' => 'required',
            'tanggal_transaksi' => 'required',
            'keterangan' => 'required'

        ]);

        // dd($request->all());
        $data = Biaya236::create($request->all());
        return redirect('biaya');
    }
    
    public function destroy(Biaya236 $id)
    {
        $id->delete();
        return redirect('biaya');

    }

    public function edit($id)
    {
        $data = Biaya236::find($id);
        return view('biaya.edit', compact('data'));
    }  

    public function update (Request $request, Biaya236 $biaya)
    {
        $validated = $request->validate([
            'nama_konsumen' => 'required|min:5',
            'email_konsumen' => 'required|email',
            'jumlah_biaya' => 'required',
            'tanggal_transaksi' => 'required',
            'keterangan' => 'required'

        ]);

        $biaya->update($request->all());
        return redirect('biaya');
    }
}
