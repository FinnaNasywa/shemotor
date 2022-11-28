<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_cust'); 
            $table->string("email") ;
            $table->string("tanggal_penyewaan");
            $table->string("harga_sewa");
            $table->string("berapa_lama_sewa" );
            $table->string("deposit" );
            $table->string("jumlah" );
            $table->string("metode_pembayaraan" );
            $table->string("kode_booking");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
