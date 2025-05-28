<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //there is a function with parameter
    public function index($nama){ 
        return "<h1>". $nama . "</h1>"; 
   }
   public function formulir(){
    return view('formulir');
   }   
    public function proses(Request $request){
        $nama = $request->input('nama'); //parse variable name
        $alamat = $request->input('alamat');
        return "Nama : ".$nama.
        "<br> Alamat : ".$alamat.
        "<br> Aslinya : ".$request;
        
    }
   
}