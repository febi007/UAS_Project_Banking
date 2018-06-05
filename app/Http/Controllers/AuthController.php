<?php

namespace App\Http\Controllers;

use App\Auth;
use Illuminate\Http\Request; 
use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
class AuthController extends Controller
{

    function index()
    {
        return view('auth.login');
    }
   function login(request $request)
   {
        $username = $request->username;
        $password = $request->password;
        $data = Auth::where('username',$username,'password',$password);
        if($data){ //apakah email tersebut ada atau tidak
            /*if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('username',$data->username);
                Session::put('login',TRUE);*/
                return redirect('dashboard');
            /*}
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !'.Hash::check($password,$data->password));
            }*/
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salahaa!');
        }
    }

    public function create()
    {
    	return view('auth.register');
    }
    function store(request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'username' => 'required',
            'no_rek' => 'required',
            'password' => 'required',
            ]);

        $data =  new Auth();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->no_rek = $request->no_rek;
        $data->password = $request->password;
        $data->save();
        return redirect('/home');
    }
}
