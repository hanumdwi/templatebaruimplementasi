<?php

namespace App\Imports;
    
use App\Customer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Validators\Failure;
use Throwable;

class CustomerrrImport implements
    ToModel,
    WithHeadingRow,
    WithValidation,
    WithChunkReading,
    ShouldQueue,
    WithEvents
{
    use Importable, RegistersEventListeners;


    public function model(array $row)
    {
        return new Customer([
            'ID_CUSTOMER'       => $row['id_customer'],
            'NAMA'              => $row['nama'] ?? $row['nama_lengkap'],
            'ALAMAT'            => $row['alamat'],
            'ID_KELURAHAN'      => $row['kodepos']
        ]);
       
    }

    public function rules(): array
    {
        return [
            '*.id_customer' => ['unique:customer,ID_CUSTOMER']
        ];
    }


    public function chunkSize(): int
    {
        return 1000;
    }

    public static function afterImport(AfterImport $event)
    {
    }

    public function onFailure(Failure ...$failure)
    {
    }
}
    
