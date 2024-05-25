<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $primaryKey = 'id_karyawan';
    public $incrementing = true;
    protected $fillable = ['id_karyawan','nama', 'alamat','no_telp'];
    public $timestamps = false;
}
