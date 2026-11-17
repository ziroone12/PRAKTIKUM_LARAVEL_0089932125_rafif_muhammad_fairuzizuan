<?php

namespace App\Http\Controllers;

use App\Models\tb_pasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class petugasController extends Controller
{
    public function register(){
        
    }
    public function login(){
        return view('/login');
    }

    public function prosesLogin(Request $request){
        //validasi
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $ambildata=$request->only('email', ' password');

       if(Auth::attempt($ambildata)){
        redirect('dashboard')->with('pesan','Berhasil masuk');
       }else{
        return back()->with('email atau password salah');
       }


    }
}
