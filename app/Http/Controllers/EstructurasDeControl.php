<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstructurasDeControl extends Controller
{
    public function  welcome(){
        return redirect()->action('EstructurasDeControl@login');
    }

    public function inicio (){
        return view('admon.dashboard');
    }

    public function pintor1 (){
        return view('pintor1');
    }

    public function pintor2(){
    return view('pintor2');
    }

    public function pintor3(){
        return view('pintor3');
    }

    public function pintor4(){
        return view('pintor4');
    }

    public function validar(Request $request){
        $user=$request->input('LaChavel');
        $pass=$request->input('210418');
        if ($user==='LaChavel'){$url='admon.dashboard';}
        else{$url='admon.login';}

        return view('admon.dashboard',['user'=>$request->input('user')]);
    }

    public function login(){
        return view('admon.login');
    }

}
