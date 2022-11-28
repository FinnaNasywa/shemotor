<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{ 
    protected $fillable =[        'nama_cust', 'email', 'tanggal_penyewaan', 'harga_sewa', 'berapa_lama_sewa', 'deposit', 'jumlah', 'metode_pembayaraan', 'kode_booking'
    ];
}
