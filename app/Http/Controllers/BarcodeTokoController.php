<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Milon\Barcode\DNS1D;
use DB;
use PDF;

class BarcodeTokoController extends Controller
{
    function barcode(){

        // $d = new DNS1D();
        // $d->setStorPath(__DIR__.'/cache/');
        // $barcode_data = $d->getBarcodeHTML('9780691147727', 'C128');
        // $barang=DB::table('barang')->get();



        $lokasi_toko=DB::table('lokasi_toko')->get();



        return view('barcodetoko', ['lokasi_toko' =>$lokasi_toko]);

    }

    function insert(Request $request){
        DB::table('lokasi_toko')->insert(['NAMA_TOKO' => $request->namatoko,
        'LATITUDE' => $request->latitude,
        'LONGITUDE' => $request->longitude,
        'ACCURACY'=> $request->accuracy,
        ]);
        return redirect('/geolocation');
    }

    function pdf_barcode($id){
        $lokasi_toko = DB::table('lokasi_toko')->where('barcode',$id)->get();
        $barcode=$id;
        $pdf = PDF::loadview('/cetakbarcodetoko',['lokasi_toko'=>$lokasi_toko,'barcode'=>$barcode])->setPaper('f4');
        
        // $paper = array(0, 0, 51,0236, 107,717);
        //  $pdf->setPaper($paper);
        // $pdf->setPaper($paper,'landscape');
        return $pdf->stream();
        // return view('/barcode/pdf-barcode',['barang'=>$barang,'barang_id'=>$barang_id]);
    }

    function test_barcode(){
        return view('scanbarcodetoko');
    }

    function getBarcode($id){
        $databarcode = DB::table("lokasi_toko")->where("BARCODE",$id)->get();
        return json_encode($databarcode);
    }
}
