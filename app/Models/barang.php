<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    public $incrementing = true;
    protected $fillable = ['id_barang','nama_barang', 'jumlah_stock'];
    public $timestamps = false;
}
