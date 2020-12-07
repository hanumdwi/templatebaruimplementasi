<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Customer;
use Illuminate\Http\Request;
use DB;
use Response;
use App\Imports\CustomerImport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class Data2Controller extends Controller
{
    public function getCountries()
    {
        $provinsi = DB::table('provinsi')->pluck("NAMA_PROVINSI","ID_PROVINSI");
        return view('dropdown',compact('provinsi'));
    }

    public function getStates($id) 
    {        
        $kota = DB::table("kota")->where("ID_PROVINSI",$id)->pluck("NAMA_KOTA","ID_KOTA");
        return json_encode($kota);
    }
    public function getKecamatan($id) 
    {        
        $kecamatan = DB::table("kecamatan")->where("ID_KOTA",$id)->pluck("NAMA_KECAMATAN","ID_KECAMATAN");
        return json_encode($kecamatan);
    }
    public function getKelurahan($id) 
    {        
        $kelurahan = DB::table("kelurahan")->where("ID_KECAMATAN",$id)->get();
        return json_encode($kelurahan);
    }
    public function getKodepos($id) 
    {        
        $kelurahan = DB::table("kelurahan")->where("ID_KELURAHAN",$id)->pluck("KODEPOS","ID_KELURAHAN");
        return json_encode($kelurahan);
    }

    public function customer_store1(Request $request)
    {
        //ID CUSTOMER BELUM AUTO INCREMENT
        DB::table('customer')->insert(['NAMA' => $request->nama,
        'ALAMAT' => $request->alamat,
        'FOTO' => $request->fotoo,
        'ID_KELURAHAN'=> $request->kelurahan,
        ]);
        return redirect('/dropdownlist');
    }

    public function customer_store2(Request $request)
    {
        $base64_str = substr($request->foto, strpos($request->foto, ",")+1);
        $foto = base64_decode($base64_str) ;
        $nama_foto = $request->nama_foto;
        $path = '/file_foto/foto_customer'.$nama_foto.'.png';
        Storage::put('/public'.$path,$foto);

        DB::table('customer')->insert(['NAMA' => $request->nama,
        'ALAMAT' => $request->alamat,
        'FILE_PATH' => '/storage'.$path,
        'ID_KELURAHAN'=> $request->kelurahan,
        ]);
        return redirect('/dropdownlist1');
    }

    public function getCountries1()
    {
        $provinsi = DB::table('provinsi')->pluck("NAMA_PROVINSI","ID_PROVINSI");
        return view('dropdown1',compact('provinsi'));
    }

    public function index()
    {
        $kelurahan = DB::table('kelurahan')->get();
        $customer = DB::table('customer')
        ->join('kelurahan', 'customer.ID_KELURAHAN', '=', 'kelurahan.ID_KELURAHAN')
        ->select('customer.ID_CUSTOMER', 'customer.NAMA', 'customer.ALAMAT', 
        'customer.FOTO', 'customer.FILE_PATH', 'kelurahan.KODEPOS')
        ->get();
        //dump($customer);
        return view ('indexdropdown',['customer' =>$customer, 'kelurahan' => $kelurahan]);
    }

    public function index1()
    {
        $customer = DB::table('customer')->get();
        //dump($customer);
        return view ('indexdropdown1',['customer' =>$customer]);
    }

    public function user_manual()
    {
       //PDF file is stored under project/public/download/info.pdf
    $file= public_path(). "/UTS_Implementasi_DS_151811513016.pdf";
    $headers = [
        'Content-Type' => 'application/pdf',
     ];

    return Response::download($file, 'UTS_Implementasi_DS_151811513016.pdf', $headers);
    }

    public function import_excel(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

            // try{
                $file = $request->file('file')->store('import');
                $import = new CustomerImport;
                $import->import($file);
                dump($import->failures());
            // }
            // catch(\Exception $e){
                // return redirect()->route('dropdownindex');
            // }
            if($import->failures()->isNotEmpty()){
                // return back()->withFailures($import->failures());
                echo "masuk pertama";
            }
            else{
                // return redirect()->route('dropdownindex');
                echo "masuk kedua";
            }
    }

    public function import(Request $request)
    {
        $rule = [
            'id_customer'       => 'required|unique:customer|min:4,',
            'nama'              => 'required|string',
            'alamat'            => 'required|string',
            'kodepos'           => 'required'
        ];

        $this->validate($request, [
            'file'              => 'required|mimes:csv,xls,xlsx',
            
        ], $rule);

        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = $file->hashName();

        //temporary file
        $path = $file->storeAs('public/excel/',$nama_file);

        // import data
        $import = Excel::import(new CustomerImport(), storage_path('app/public/excel/'.$nama_file));

        //remove from server
        Storage::delete($path);

        if($import) {
            //redirect
            return redirect()->route('dropdownindex')->with(['success' => 'Data Berhasil Diimport!']);
        } else {
            //redirect
            return redirect()->route('dropdownindex')->with(['error' => 'Data Gagal Diimport!']);
        }
    }

}
