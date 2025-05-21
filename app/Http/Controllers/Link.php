<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Link extends Controller
{
    //
    public function helloworld()
    {
        return view('blog');
    }
    public function index(){
        $nama = "Siapa hayo?!?!?!?";
        $umur = 45;
        $alamat = "dimana mana";
        $pelajaran = ["Alprog", "Kalkulus", "Pweb"];
    	return view('biodata', ['nama'=>$nama, 'usia'=>$umur, 'alamat'=> $alamat, 'matkul'=>$pelajaran]);
    }
}
