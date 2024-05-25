<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\keuangan;
use File;
use Illuminate\Http\Request;

class keuanganController extends Controller
{
    public function index()
    {
        $keuangan = keuangan::all();
        return view('keuangan.keuangan', compact('keuangan'));
    }

    public function create()
    {
        return view('keuangan.keuangan-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_keuangan' => 'required',
            'id_penjualan' => 'required',
            'id_pembelian' => 'required',
            'uang_masuk' => 'required',
            'uang_keluar' => 'required',
        ]);

        

        keuangan::create([
            'id_keuangan' => $request->id_keuangan,
            'id_penjualan' => $request->id_penjualan,
            'id_pembelian' => $request->id_pembelian,
            'uang_masuk' => $request->uang_masuk,
            'uang_keluar' => $request->uang_keluar,
        ]);

        return redirect('/keuangan');
    }

    public function edit($id_keuangan)
    {
        $keuangan = keuangan::find($id_keuangan);
        return view('keuangan.keuangan-edit', compact('keuangan'));
    }

    public function update(Request $request, $id_keuangan)
    {
        $this->validate($request, [
            'id_keuangan' => 'required',
            'id_penjualan' => 'required',
            'id_pembelian' => 'required',
            'uang_masuk' => 'required',
            'uang_keluar' => 'required',
        ]);

        $keuangan = keuangan::find($id_keuangan);

        

        $keuangan->update([
            'id_keuangan' => $request->id_keuangan,
            'id_penjualan' => $request->id_penjualan,
            'id_pembelian' => $request->id_pembelian,
            'uang_masuk' => $request->uang_masuk,
            'uang_keluar' => $request->uang_keluar,
        ]);

        return redirect('/keuangan');
    }

    public function delete($id_keuangan)
    {
        $keuangan = keuangan::find($id_keuangan);
        return view('keuangan.keuangan-hapus', compact('keuangan'));
    }

    public function destroy($id_keuangan)
    {
        $keuangan = keuangan::find($id_keuangan);
        $keuangan->delete();
        return redirect('/keuangan');
    }

    public function cetak()
    {
        $keuangan = keuangan::all();
        $pdf = Pdf::loadview('keuangan.keuangan-cetak', compact('keuangan'));
        return $pdf->download('laporan-keuangan.pdf');
    }


    
}


