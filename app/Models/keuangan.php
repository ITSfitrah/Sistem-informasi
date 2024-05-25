<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model    
{
    use HasFactory;
    protected $table = 'keuangan';
    protected $primaryKey = 'id_keuangan';
    public $incrementing = true;
    protected $fillable = ['id_keuangan','id_penjualan','id_pembelian','uang_masuk','uang_keluar'];
    public $timestamps = false;
}
