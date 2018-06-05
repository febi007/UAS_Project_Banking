<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;
use DB;
class TransaksiController extends Controller
{
    function create()
    {
    	/*$nama = transaksi::nama('auths');
    	$data = array(
    		'nama' => $nama
    		);*/
    	return view('transaksi.create');
    }
}
