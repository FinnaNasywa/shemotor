<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    protected $fillable = ['nama', 'no_ktp', 'alamat', 'no_telp', 'email', 'tanggal_sewa', 'motor_sewa', 'kota_sewa', 'berapa_lama_sewa', 'harga', 'order_code'];
}
