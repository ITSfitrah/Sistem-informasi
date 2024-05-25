<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use File;
use Illuminate\Http\Request;

class karyawanController extends Controller
{
    public function index()
    {
        $karyawan = karyawan::all();
        return view('karyawan.karyawan', compact('karyawan'));
    }

    public function create()
    {
        return view('karyawan.karyawan-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_karyawan' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        

        karyawan::create([
            'id_karyawan' => $request->id_karyawan,
            'nama' => $request->nama,
            'alamat' => $request ->alamat,
            'no_telp' => $request ->no_telp,
        ]);

        return redirect('/karyawan');
    }

    public function edit($id_karyawan)
    {
        $karyawan = karyawan::find($id_karyawan);
        return view('karyawan.karyawan-edit', compact('karyawan'));
    }

    public function update(Request $request, $id_karyawan)
    {
        $this->validate($request, [
            'id_karyawan' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $karyawan = karyawan::find($id_karyawan);

        

        $karyawan->update([
            'id_karyawan' => $request->id_karyawan,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('/karyawan');
    }

    public function delete($id_karyawan)
    {
        $karyawan = karyawan::find($id_karyawan);
        return view('karyawan.karyawan-hapus', compact('karyawan'));
    }

    public function destroy($id_karyawan)
    {
        $karyawan = karyawan::find($id_karyawan);
        $karyawan->delete();
        return redirect('/karyawan');
    }
}
