<?php

namespace App\Http\Controllers;

use App\Models\barang;
use File;
use Illuminate\Http\Request;

class barangController extends Controller
{
    public function index()
    {
        $barang = barang::all();
        return view('barang.barang', compact('barang'));
    }

    public function create()
    {
        return view('barang.barang-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'jumlah_stock' => 'required',
        ]);

        

        barang::create([
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'jumlah_stock' => $request ->jumlah_stock,
        ]);

        return redirect('/barang');
    }

    public function edit($id_barang)
    {
        $barang = barang::find($id_barang);
        return view('barang.barang-edit', compact('barang'));
    }

    public function update(Request $request, $id_barang)
    {
        $this->validate($request, [
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'jumlah_stock' => 'required',
        ]);

        $barang = barang::find($id_barang);

        

        $barang->update([
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'jumlah_stock' => $request->jumlah_stock,
        ]);

        return redirect('/barang');
    }

    public function delete($id_barang)
    {
        $barang = barang::find($id_barang);
        return view('barang.barang-hapus', compact('barang'));
    }

    public function destroy($id_barang)
    {
        $barang = barang::find($id_barang);
        $barang->delete();
        return redirect('/barang');
    }
}
