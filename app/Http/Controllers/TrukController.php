<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrukController extends Controller
{
    public function index()
    {
        $truk = DB::table('truk')->paginate(10);
        return view('truk/truk', ['truk' => $truk]);
    }

    public function tambah()
    {
        return view('truk/tambahtruk');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'merk' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'tersedia' => 'required|in:ya,tidak',
            'berat' => 'required|numeric|min:0'
        ], [
            'tersedia.in' => 'Pilih status ketersediaan yang valid (ya/tidak)'
        ]);

        DB::table('truk')->insert([
            'merktruk' => $validated['merk'],
            'hargatruk' => $validated['harga'],
            'tersedia' => $validated['tersedia'],
            'berat' => $validated['berat']
        ]);
        
        return redirect('truk');
    }

    public function edit($id)
    {
        $truk = DB::table('truk')->where('ID', $id)->first();
        return view('truk/edittruk', ['truk' => $truk]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:truk,ID',
            'merk' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'tersedia' => 'required|in:ya,tidak',
            'berat' => 'required|numeric|min:0'
        ], [
            'tersedia.in' => 'Pilih status ketersediaan yang valid (ya/tidak)',
            'id.exists' => 'Data truk tidak ditemukan'
        ]);

        DB::table('truk')
            ->where('ID', $validated['id'])
            ->update([
                'merktruk' => $validated['merk'],
                'hargatruk' => $validated['harga'],
                'tersedia' => $validated['tersedia'],
                'berat' => $validated['berat']
            ]);
        
        return redirect('truk');
    }

    public function hapus($id)
    {
        DB::table('truk')->where('ID', $id)->delete();
        return redirect('truk');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $truk = DB::table('truk')
            ->where('merktruk', 'like', "%{$cari}%")
            ->paginate(10);
            
        return view('truk/truk', [
            'truk' => $truk,
            'cari' => $cari
        ]);
    }
}