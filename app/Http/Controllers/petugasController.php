<?php

namespace App\Http\Controllers;

use App\Models\tb_pasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class petugasController extends Controller
{
    public function register(){
        return view('/register');
        
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

    public function prosesregister(Required $request){
        
    }

   
}
