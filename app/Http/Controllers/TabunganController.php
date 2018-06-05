<?php

namespace App\Http\Controllers;

use App\Tabungan;
use Validator;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    function index(){
        $nama = nama::ALL();
        $tabungan = DB::table('tabungans')
                ->join('auth.nama','=','tabungan.nama')->get();
                
                
        $data = array(
            'tabungan'     => $tabungan,
            'no'           => 1
        );
        return view('tabungan.index',$data);
    }
    function create()
    {
    	return view('tabungan.create');
    }
    function store()
    {
    	Tabungan::create([
    		'saldo' => request('saldo'),
    		]);
    	return redirect('tabungan.index');
    }
}