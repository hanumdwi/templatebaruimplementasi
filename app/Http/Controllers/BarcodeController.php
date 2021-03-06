<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use Milon\Barcode\DNS1D;
use DB;
use PDF;
use App\Imports\BarangImport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class BarcodeController extends Controller
{
    function barcode(){

        // $d = new DNS1D();
        // $d->setStorPath(__DIR__.'/cache/');
        // $barcode_data = $d->getBarcodeHTML('9780691147727', 'C128');
        $barang=DB::table('barang')->get();



        return view('barcode', ['barang' =>$barang]);

    }

    // public function printBarcode(){
    //     $barang = Barcode::get();
    //     $no = 1; 
    //     $paper_width = 793.7007874; // 21 cm
    //     $paper_height = 623.62204724; // 16.5 cm
    //     $paper_size = array(0, 0, $paper_width, $paper_height);
	// 	$pdf =  PDF::loadView  ('/barcode/barcode_pdf',  compact('barang', 'no')); 
	// 	$pdf->setPaper("f4"); 
	// 	return $pdf->stream(); 
    // }

    function pdf_barcode($id){
        $barang = DB::table('barang')->where('id_barang',$id)->get();
        $barang_id=$id;
        $pdf = PDF::loadview('/cetakbarcode',['barang'=>$barang,'barang_id'=>$barang_id])->setPaper('f4');
        
        // $paper = array(0, 0, 51,0236, 107,717);
        //  $pdf->setPaper($paper);
        // $pdf->setPaper($paper,'landscape');
        return $pdf->stream();
        // return view('/barcode/pdf-barcode',['barang'=>$barang,'barang_id'=>$barang_id]);
    }

    function test_barcode(){
        return view('test-barcode');
    }

    public function import(Request $request)
    {
        $barang=DB::table('barang')->get();
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = $file->hashName();

        //temporary file
        $path = $file->storeAs('public/excel/',$nama_file);

        // import data
        $import = Excel::import(new BarangImport(), storage_path('app/public/excel/'.$nama_file));
        
        //remove from server
        Storage::delete($path);

        if($import) {
            //redirect
            return view('barcode', ['barang' =>$barang])->with(['success' => 'Data Berhasil Diimport!']);
        } else {
            //redirect
            return view('barcode', ['barang' =>$barang])->with(['error' => 'Data Gagal Diimport!']);
        }
    }
}
