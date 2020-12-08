<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class ApiController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
       //
    }

    public function insert(Request $request)
    {
        $barang =   new Barang;
        $barang->NAMA_BARANG = $request->NAMA_BARANG;
        $barang->STOCK_BARANG = $request->STOCK_BARANG;
        $barang->DESKRIPSI = $request->DESKRIPSI;
        $barang->save();
            return response()->json([
                "message" => "Barang berhasil di tambahkan!",
                "data"  =>  $barang
            ], 201);

    }

    public function show()
    {
        return response()->json(Barang::all(),200);
    }

    public function show1($id)
    {
        return response()->json(Barang::find($id),200);
    }

    public function update(Request $request, $id)
    {
        $cek_barang = Barang::firstwhere('ID_BARANG', $id);
        if($cek_barang){
            $barang = Barang::find($id);
            $barang->NAMA_BARANG = $request->NAMA_BARANG;
            $barang->STOCK_BARANG = $request->STOCK_BARANG;
            $barang->DESKRIPSI = $request->DESKRIPSI;
            $barang->save();
            return response()->json([
                "message" => "Barang berhasil di tambahkan!",
                "data"  =>  $barang
            ], 201);
        } else{
            return response()->json([
                "message" => "Barang tidak ditemukan!"
            ], 404);
        }
    }

}
