<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Transaksi::all();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = Transaksi::create([
            "nama_cust" => $request->nama_cust,
            "email" => $request->email,
            "tanggal_penyewaan" => $request->tanggal_penyewaan,
            "harga_sewa" => $request->harga_sewa,
            "berapa_lama_sewa" => $request->berapa_lama_sewa,
            "deposit" => $request->deposit,
            "jumlah" => $request->jumlah,
            "metode_pembayaraan" => $request->metode_pembayaraan,
            "kode_booking" => $request->kode_booking
            
        ]);

        return response()->json([
            'success' => 201,
            'message' => 'data berhasil disimpan',
            'data' => $table
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = transaksi::find($id);
        if ($transaksi) {
            return response()->json([
                'status' => 200,
                'data' => $transaksi
            ], 200);
        } else{
            return response()->json([
                'status' => 404,
                'message' => ' id atas ' . $id . ' tidak ditemukan '
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaksi = transaksi::find($id);
        if($transaksi){
            $transaksi->nama_cust = $request->nama_cust ? $request ->nama_cust : $transaksi->nama_cust;
            $transaksi->email = $request->email ? $request->email : $transaksi->email;
            $transaksi->tanggal_penyewaan = $request->tanggal_penyewaan ? $request ->tanggal_penyewaan : $transaksi->tanggal_penyewaan;
            $transaksi->harga_sewa = $request->harga_sewa ? $request ->harga_sewa : $transaksi->harga_sewa;
            $transaksi->berapa_lama_sewa = $request->berapa_lama_sewa ? $request ->berapa_lama_sewa : $transaksi->berapa_lama_sewa;
            $transaksi->deposit = $request->deposit ? $request ->deposit : $transaksi->deposit;
            $transaksi->jumlah = $request->jumlah ? $request ->jumlah : $transaksi->jumlah;
            $transaksi->metode_pembayaraan = $request->metode_pembayaraan ? $request ->metode_pembayaraan : $transaksi->metode_pembayaraan;
            $transaksi->kode_booking = $request->kode_booking ? $request ->kode_booking : $transaksi->kode_booking;
            $transaksi->save();
            return response()->json([
                'status' => 200,
                'data' => $transaksi
            ],200);

        }else{
            return response()->json([
                'status'=>404,
                'message'=> $id . " tidak ditemukan"
            ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = transaksi::where('id',$id)->first();
        if ($transaksi) {
            $transaksi->delete();
            return response()->json([
                'status' => 200,
                'data' => $transaksi
            ], 200);
        } else{
            return response()->json([
                'status' => 404,
                'message' => ' id ' . $id . ' tidak ditemukan '
            ], 404);
        }
    }
}