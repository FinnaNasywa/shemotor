<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{ 
    protected $fillable =[
        'nama', 'nopol','tipe', 'warna', 'tahun_motor', 'status_motor', 'merk_motor', 'harga_sewa'
    ];
}
