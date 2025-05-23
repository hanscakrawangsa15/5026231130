<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function home()
{
    return view('blog.home', [
        'title' => 'Home',
        'judul_halaman' => 'Halaman Blog Home'
    ]);
}

public function tentang()
{
    return view('blog.tentang', [
        'title' => 'Tentang Kami',
        'judul_halaman' => 'Tentang Kami'
    ]);
}

public function kontak()
{
    return view('blog.kontak', [
        'title' => 'Kontak',
        'judul_halaman' => 'Kontak Kami'
    ]);
}


}
