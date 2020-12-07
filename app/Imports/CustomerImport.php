<?php

    namespace App\Imports;
    
    use App\Customer;
    use Maatwebsite\Excel\Concerns\ToModel;
    
    class CustomerImport implements ToModel
    {
        /**
        * @param array $row
        *
        * @return \Illuminate\Database\Eloquent\Model|null
        */
        public function model(array $row)
        {
            return new Customer([
            'ID_CUSTOMER'       => $row[0],
            'NAMA'              => $row[1],
            'ALAMAT'            => $row[2],
            'ID_KELURAHAN'      => $row[3]
            ]);
        }
    }
    
