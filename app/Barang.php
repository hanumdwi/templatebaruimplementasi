<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_BARANG';
    protected $table = 'barang';
    protected $fillable = 
    [
        'NAMA_BARANG',
        'STOCK_BARANG',
        'DESKRIPSI'
    ];
}
