<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\keuanganController;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\pembelianController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('dashboard', function () {
    return view('dashboard');
});

/* rute barang*/
Route::get('/barang', [barangController::class, 'index'])->name('karyawan.index');
Route::get('/barang/tambah', [barangController::class, 'create']);
Route::post('/barang/store', [barangController::class, 'store'])->name('barang.store');
Route::get('/barang/edit/{id}', [barangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/update/{id}', [barangController::class, 'update'])->name('barang.update');
Route::get('/barang/hapus/{id}', [barangController::class, 'delete']);
Route::get('/barang/destroy/{id}', [barangController::class, 'destroy']);

/* rute karyawan */
Route::get('/karyawan', [karyawanController::class, 'index'])->name('karyawan.index');
Route::get('/karyawan/tambah', [karyawanController::class, 'create']);
Route::post('/karyawan/store', [karyawanController::class, 'store'])->name('karyawan.store');
Route::get('/karyawan/edit/{id}', [karyawanController::class, 'edit'])->name('karyawan.edit');
Route::put('/karyawan/update/{id}', [karyawanController::class, 'update'])->name('karyawan.update');
Route::get('/karyawan/hapus/{id}', [karyawanController::class, 'delete']);
Route::get('/karyawan/destroy/{id}', [karyawanController::class, 'destroy']);

/* rute supplier */
Route::get('/supplier', [supplierController::class, 'index'])->name('supplier.index');
Route::get('/supplier/tambah', [supplierController::class, 'create']);
Route::post('/supplier/store', [supplierController::class, 'store'])->name('.store');
Route::get('/supplier/edit/{id}', [supplierController::class, 'edit'])->name('.edit');
Route::put('/supplier/update/{id}', [supplierController::class, 'update'])->name('.update');
Route::get('/supplier/hapus/{id}', [supplierController::class, 'delete']);
Route::get('/supplier/destroy/{id}', [supplierController::class, 'destroy']);

/* rute keuangan */
Route::get('/keuangan', [keuanganController::class, 'index'])->name('keuangan.index');
Route::get('/keuangan/tambah', [keuanganController::class, 'create']);
Route::post('/keuangan/store', [keuanganController::class, 'store'])->name('.store');
Route::get('/keuangan/edit/{id}', [keuanganController::class, 'edit'])->name('.edit');
Route::put('/keuangan/update/{id}', [keuanganController::class, 'update'])->name('.update');
Route::get('/keuangan/hapus/{id}', [keuanganController::class, 'delete']);
Route::get('/keuangan/destroy/{id}', [keuanganController::class, 'destroy']);
Route::get('/keuangan/cetak',[keuanganController::class, 'cetak']);

/* rute penjualan */
Route::get('/penjualan', [penjualanController::class, 'index'])->name('penjualan.index');
Route::get('/penjualan/tambah', [penjualanController::class, 'create']);
Route::post('/penjualan/store', [penjualanController::class, 'store'])->name('.store');
Route::get('/penjualan/edit/{id}', [penjualanController::class, 'edit'])->name('.edit');
Route::put('/penjualan/update/{id}', [penjualanController::class, 'update'])->name('.update');
Route::get('/penjualan/hapus/{id}', [penjualanController::class, 'delete']);
Route::get('/penjualan/destroy/{id}', [penjualanController::class, 'destroy']);

/* rute pembelian */
Route::get('/pembelian', [pembelianController::class, 'index'])->name('pembelian.index');
Route::get('/pembelian/tambah', [pembelianController::class, 'create']);
Route::post('/pembelian/store', [pembelianController::class, 'store'])->name('.store');
Route::get('/pembelian/edit/{id}', [pembelianController::class, 'edit'])->name('.edit');
Route::put('/pembelian/update/{id}', [pembelianController::class, 'update'])->name('.update');
Route::get('/pembelian/hapus/{id}', [pembelianController::class, 'delete']);
Route::get('/pembelian/destroy/{id}', [pembelianController::class, 'destroy']);