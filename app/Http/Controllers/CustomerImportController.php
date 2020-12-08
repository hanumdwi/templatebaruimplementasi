<?php

namespace App\Http\Controllers;

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
       
        $file = $request->file('file')->store('import');

        $import = new CustomerrrImport;
        $import->import($file);

        if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }

       
        Session::flash('success', 'Data Anda Berhasil di Import!');

        return back();
        
    }
}