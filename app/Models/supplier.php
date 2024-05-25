<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';
    protected $primaryKey = 'id_supplier';
    public $incrementing = true;
    protected $fillable = ['id_supplier','id_barang', 'nama_perusahaan','nama_barang','no_telp'];
    public $timestamps = false;
}
