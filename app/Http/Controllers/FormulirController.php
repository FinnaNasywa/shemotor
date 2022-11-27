<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;
class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulir = Formulir::all();
        return response()->json([
            "message" => "Load data success",
            "data" => $formulir
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tabel = Formulir::create([
            "nama" => $request->nama,
            "no_ktp" => $request->no_ktp,
            "alamat" => $request->alamat,
            "no_telp" => $request->no_telp,
            "email" => $request->email,
            "tanggal_sewa" => $request->tanggal_sewa,
            "motor_sewa" => $request->motor_sewa,
            "kota_sewa" => $request->kota_sewa,
            "berapa_lama_sewa" => $request->berapa_lama_sewa,
            "harga" => $request->harga,
        ]);

        return response()->json([
            "message" => "Store success",
            "data" => $tabel
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
        $formulirid = Formulir::find($id);
        if ($formulirid) {
            return response()->json([
                'status' => 200,
                'data' => $formulirid
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
        $formulir = formulir::find($id);
        if($formulir){
            $formulir->nama = $request->nama ? $request->nama : $formulir->nama;
            $formulir->no_ktp = $request->no_ktp ? $request->no_ktp : $formulir->no_ktp;
            $formulir->alamat = $request->alamat ? $request->alamat : $formulir->alamat;
            $formulir->no_telp = $request->no_telp ? $request->no_telp : $formulir->no_telp;
            $formulir->email = $request->email ? $request->email : $formulir->email;
            $formulir->tanggal_sewa = $request->tanggal_sewa ? $request->tanggal_sewa : $formulir->tanggal_sewa;
            $formulir->motor_sewa = $request->motor_sewa ? $request->motor_sewa : $formulir->motor_sewa;
            $formulir->kota_sewa = $request->kota_sewa ? $request->kota_sewa : $formulir->kota_sewa;
            $formulir->berapa_lama_sewa = $request->berapa_lama_sewa ? $request->berapa_lama_sewa : $formulir->berapa_lama_sewa;
            $formulir->harga = $request->harga ? $request->harga : $formulir->harga;
            $formulir->save();

            
            return response()->json([
                'status' => 200,
                'data' => $formulir
            ],200);
        }else{
            return ["message" => "Data not found"];
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
        $formulir = Formulir::where('id',$id)->first();
        if ($formulir) {
            $formulir->delete();
            return response()->json([
                'status' => 200,
                'data' => $formulir
            ], 200);
        } else{
            return response()->json([
                'status' => 404,
                'message' => ' id ' . $id . ' tidak ditemukan '
            ], 404);
        }
    }
}

