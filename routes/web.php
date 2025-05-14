<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;

Route::get('/', function () { ## / : published url, function : controller
    return view('welcome');
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