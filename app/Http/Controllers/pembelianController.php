<?php

namespace App\Http\Controllers;

use App\Models\pembelian;
use File;
use Illuminate\Http\Request;

class pembelianController extends Controller
{
    public function index()
    {
        $pembelian = pembelian::all();
        return view('pembelian.pembelian', compact('pembelian'));
    }

    public function create()
    {
        return view('pembelian.pembelian-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_pembelian' => 'required',
            'id_supplier' => 'required',
            'id_barang' => 'required',
            'jumlah' => 'required',
            'total_biaya' => 'required',
        ]);

        

        pembelian::create([
            'id_pembelian' => $request->id_pembelian,
            'id_supplier' => $request->id_supplier,
            'id_barang' => $request ->id_barang,
            'jumlah' => $request ->jumlah,
            'total_biaya' => $request ->total_biaya,
        ]);

        return redirect('/pembelian');
    }

    public function edit($id_pembelian)
    {
        $pembelian = pembelian::find($id_pembelian);
        return view('pembelian.pembelian-edit', compact('pembelian'));
    }

    public function update(Request $request, $id_pembelian)
    {
        $this->validate($request, [
            'id_pembelian' => 'required',
            'id_supplier' => 'required',
            'id_barang' => 'required',
            'jumlah' => 'required',
            'total_biaya' => 'required',
        ]);

        $pembelian = pembelian::find($id_pembelian);

        

        $pembelian->update([
            'id_pembelian' => $request->id_pembelian,
            'id_supplier' => $request->id_supplier,
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah,
            'total_biaya' => $request ->total_biaya,
        ]);

        return redirect('/pembelian');
    }

    public function delete($id_pembelian)
    {
        $pembelian = pembelian::find($id_pembelian);
        return view('pembelian.pembelian-hapus', compact('pembelian'));
    }

    public function destroy($id_pembelian)
    {
        $pembelian = pembelian::find($id_pembelian);
        $pembelian->delete();
        return redirect('/pembelian');
    }
}
