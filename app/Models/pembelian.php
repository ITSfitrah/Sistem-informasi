<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model    
{
    use HasFactory;
    protected $table = 'pembelian_supplier';
    protected $primaryKey = 'id_pembelian';
    public $incrementing = true;
    protected $fillable = ['id_pembelian','id_supplier','id_barang','jumlah','total_biaya'];
    public $timestamps = false;
}
