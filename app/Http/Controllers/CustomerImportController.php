<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CustomerrrImport;
use Illuminate\Http\Request;
use DB;
use Session;

class CustomerImportController extends Controller
{
    public function show()
    {
        $customer=DB::table('customer')->get();

        return view('customer');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        try {
       
            $file = $request->file('file')->store('import');
            $import = new CustomerrrImport;
            $import->import($file);

        //dd($import->failures());
        } 
        catch (\ValidationException $e){
            $failures = $e->failures();

            foreach ($failures as $failure){
                $failure->row();
                $failure->attribute();
                $failure->errors();
                $failure->values();
        }
            return back()->withFailures($failures);

        }   catch (\ErrorException $e){

            return back()->withErrors('data tidak sesuai');
        }
        
            if ($import->failures()->isNotEmpty()) {
                return back()->withFailures($import->failures());
            }

            Session::flash('success', 'Data Anda Berhasil di Import!');

            return redirect()->route('dropdownindex');
        
    }
}