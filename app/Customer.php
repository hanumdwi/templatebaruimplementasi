<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;

    // protected $primaryKey = 'ID_CUSTOMER';

    protected $table = 'customer';

    protected $fillable = 
    [
        'ID_CUSTOMER',
        'ID_KELURAHAN',
        'NAMA',
        'ALAMAT'
    ];
}
