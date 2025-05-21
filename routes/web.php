<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;


Route::get('/', function () { ## / : published url, function : controller
    return view('Frontend');
});

Route::get('halo', function () { ## / : published url, function : controller
    return "<h2>Selamat Datang di Laravel www.malasngoding.com</www></h2>";
});

Route::get('blog', [Link::class, 'helloworld']);

Route::get('pertama', function () {
    return view('pertama');
});
Route::get('index', function () {
    return view('index');
});
Route::get('tugaslinktree', function () {
    return view('tugaslinktree');
});
Route::get('pertemuan7', function () {
    return view('pertemuan7');
});
Route::get('pertemuan7-2', function () {
    return view('pertemuan7-2');
});
Route::get('pseudo-code', function () {
    return view('pseudo-code');
});
Route::get('cssgrid', function () {
    return view('cssgrid');
});
Route::get('cobasaratoga', function () {
    return view('cobasaratoga');
});
Route::get('latihansoal', function () {
    return view('latihansoal');
});

Route::get('dosen', [Link::class,'index']);

//Route Formulir
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

//Route Blog
Route::get('blog', [BlogController::class,'home']);
Route::get('blog/tentang', [BlogController::class,'tentang']);
Route::get('blog/kontak', [BlogController::class,'kontak']);