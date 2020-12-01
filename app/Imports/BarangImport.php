<?php

namespace App\Imports;

use App\Barang;
use Maatwebsite\Excel\Concerns\ToModel;

class BarangImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Barang([
            'NAMA_BARANG'   => $row[0],
            'STOCK_BARANG'  => $row[1],
            'DESKRIPSI'     => $row[2],
        ]);
    }
}
