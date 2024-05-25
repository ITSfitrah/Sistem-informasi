<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use File;
use Illuminate\Http\Request;

class supplierController extends Controller
{
    public function index()
    {
        $supplier = supplier::all();
        return view('supplier.supplier', compact('supplier'));
    }

    public function create()
    {
        return view('supplier.supplier-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_supplier' => 'required',
            'id_barang' => 'required',
            'nama_perusahaan' => 'required',
            'nama_barang' => 'required',
            'no_telp' => 'required',
        ]);

        

        supplier::create([
            'id_supplier' => $request->id_supplier,
            'id_barang' => $request->id_barang,
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_barang' => $request->nama_barang,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('/supplier');
    }

    public function edit($id_supplier)
    {
        $supplier = supplier::find($id_supplier);
        return view('supplier.supplier-edit', compact('supplier'));
    }

    public function update(Request $request, $id_supplier)
    {
        $this->validate($request, [
            'id_supplier' => 'required',
            'id_barang' => 'required',
            'nama_perusahaan' => 'required',
            'nama_barang' => 'required',
            'no_telp' => 'required',
        ]);

        $supplier = supplier::find($id_supplier);

        

        $supplier->update([
            'id_supplier' => $request->id_supplier,
            'id_barang' => $request->id_barang,
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_barang' => $request->nama_barang,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('/supplier');
    }

    public function delete($id_supplier)
    {
        $supplier = supplier::find($id_supplier);
        return view('supplier.supplier-hapus', compact('supplier'));
    }

    public function destroy($id_supplier)
    {
        $supplier = supplier::find($id_supplier);
        $supplier->delete();
        return redirect('/supplier');
    }
}


