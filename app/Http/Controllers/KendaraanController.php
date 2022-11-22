<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kendaraan::all();
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
        $table = Kendaraan::create([
            "nama" => $request->nama,
            "nopol" => $request->nopol,
            "tipe" => $request->tipe,
            "warna" => $request->warna,
            "tahun_motor" => $request->tahun_motor,
            "status_motor" => $request->status_motor,
            "merk_motor" => $request->merk_motor,
            "harga_sewa" => $request->harga_sewa
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
        $kendaraan = kendaraan::find($id);
        if ($kendaraan) {
            return response()->json([
                'status' => 200,
                'data' => $kendaraan
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
        $kendaraan = kendaraan::find($id);
        if($kendaraan){
            $kendaraan->nama = $request->nama ? $request ->nama : $kendaraan->nama;
            $kendaraan->nopol = $request->nopol ? $request->nopol : $kendaraan->nopol;
            $kendaraan->tipe = $request->tipe ? $request ->tipe : $kendaraan->tipe;
            $kendaraan->warna = $request->warna ? $request ->warna : $kendaraan->warna;
            $kendaraan->tahun_motor = $request->tahun_motor ? $request ->tahun_motor : $kendaraan->tahun_motor;
            $kendaraan->status_motor = $request->status_motor ? $request ->status_motor : $kendaraan->status_motor;
            $kendaraan->merk_motor = $request->merk_motor ? $request ->merk_motor : $kendaraan->merk_motor;
            $kendaraan->harga_sewa = $request->harga_sewa ? $request ->harga_sewa : $kendaraan->harga_sewa;
            $kendaraan->save();
            return response()->json([
                'status' => 200,
                'data' => $kendaraan
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
        $kendaraan = kendaraan::where('id',$id)->first();
        if ($kendaraan) {
            $kendaraan->delete();
            return response()->json([
                'status' => 200,
                'data' => $kendaraan
            ], 200);
        } else{
            return response()->json([
                'status' => 404,
                'message' => ' id ' . $id . ' tidak ditemukan '
            ], 404);
        }
    }
}