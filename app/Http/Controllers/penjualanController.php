<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use File;
use Illuminate\Http\Request;

class penjualanController extends Controller
{
    public function index()
    {
        $penjualan = penjualan::all();
        return view('penjualan.penjualan', compact('penjualan'));
    }

    public function create()
    {
        return view('penjualan.penjualan-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_penjualan' => 'required',
            'id_karyawan' => 'required',
            'id_barang' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'total' => 'required',
        ]);

        

        penjualan::create([
            'id_penjualan' => $request->id_penjualan,
            'id_karyawan' => $request->id_karyawan,
            'id_barang' => $request ->id_barang,
            'jumlah' => $request ->jumlah,
            'harga' => $request ->harga,
            'total' => $request ->total,
        ]);

        return redirect('/penjualan');
    }

    public function edit($id_penjualan)
    {
        $penjualan = penjualan::find($id_penjualan);
        return view('penjualan.penjualan-edit', compact('penjualan'));
    }

    public function update(Request $request, $id_penjualan)
    {
        $this->validate($request, [
            'id_penjualan' => 'required',
            'id_karyawan' => 'required',
            'id_barang' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'total' => 'required',
        ]);

        $penjualan = penjualan::find($id_penjualan);

        

        $penjualan->update([
            'id_penjualan' => $request->id_penjualan,
            'id_karyawan' => $request->id_karyawan,
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah,
            'harga' => $request ->harga,
            'total' => $request ->total,
        ]);

        return redirect('/penjualan');
    }

    public function delete($id_penjualan)
    {
        $penjualan = penjualan::find($id_penjualan);
        return view('penjualan.penjualan-hapus', compact('penjualan'));
    }

    public function destroy($id_penjualan)
    {
        $penjualan = penjualan::find($id_penjualan);
        $penjualan->delete();
        return redirect('/penjualan');
    }
}
