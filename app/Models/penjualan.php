<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model    
{
    use HasFactory;
    protected $table = 'penjualan_konsumen';
    protected $primaryKey = 'id_penjualan';
    public $incrementing = true;
    protected $fillable = ['id_penjualan','id_karyawan','id_barang','jumlah','harga','total'];
    public $timestamps = false;
}
