<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['nama','no_req','ke_rek','jumlah','tgl_transaksi',];
}
