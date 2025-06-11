<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class KaryawanController extends Controller
{
    // Fungsi untuk generate kode pegawai (contoh: P0001)
    private function generateKodePegawai()
    {
        $lastKaryawan = DB::table('karyawan')
            ->orderBy('kodepegawai', 'desc')
            ->first();

        if ($lastKaryawan) {
            $lastNumber = (int) substr($lastKaryawan->kodepegawai, 1);
            $newNumber = $lastNumber + 1;
            return 'P' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
        }

        return 'P0001';
    }

    public function index()
    {
        $karyawan = DB::table('karyawan')->paginate(10);
        return view('karyawan/karyawan', ['karyawan' => $karyawan]);
    }

    public function tambah()
    {
        return view('karyawan/tambahkaryawan');
    }

    public function store(Request $request)
    {
        Log::info('Input yang diterima:', $request->all());
        
        // Validasi input
        $validator = Validator::make($request->all(), [
            'namalengkap' => 'required|string|max:100',
            'divisi' => 'required|string|max:50',
            'departemen' => 'required|string|max:50',
        ], [
            'namalengkap.required' => 'Nama lengkap wajib diisi',
            'divisi.required' => 'Divisi wajib diisi',
            'departemen.required' => 'Departemen wajib diisi',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            Log::error('Validasi gagal:', $validator->errors()->toArray());
            return redirect('karyawan/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        try {
            // Generate kode pegawai baru
            $kodePegawai = $this->generateKodePegawai();
            
            // Data yang akan disimpan
            $dataToInsert = [
                'kodepegawai' => $kodePegawai,
                'namalengkap' => $request->namalengkap,
                'divisi' => $request->divisi,
                'departemen' => $request->departemen,
            ];
            
            Log::info('Mencoba menyimpan data:', $dataToInsert);
            
            // Simpan data ke database
            $inserted = DB::table('karyawan')->insert($dataToInsert);
            
            if ($inserted) {
                Log::info('Data berhasil disimpan dengan kode: ' . $kodePegawai);
                return redirect('karyawan')
                    ->with('success', 'Data karyawan berhasil ditambahkan. Kode: ' . $kodePegawai);
            } else {
                Log::error('Gagal menyimpan data ke database');
                throw new \Exception('Gagal menyimpan data ke database');
            }
            
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan data: ' . $e->getMessage());
            Log::error('Trace: ' . $e->getTraceAsString());
            
            return redirect('karyawan/tambah')
                        ->with('error', 'Gagal menambahkan data: ' . $e->getMessage())
                        ->withInput();
        }
    }

    public function edit($id)
    {
        $karyawan = DB::table('karyawan')->where('kodepegawai', $id)->first();
        return view('karyawan/editkaryawan', ['karyawan' => $karyawan]);
    }

    public function update(Request $request)
    {
        DB::table('karyawan')
            ->where('kodepegawai', $request->kodepegawai)
            ->update([
                'namalengkap' => $request->namalengkap,
                'divisi' => $request->divisi,
                'departemen' => $request->departemen,
            ]);
        
        return redirect('karyawan');
    }

    public function hapus($id)
    {
        DB::table('karyawan')->where('kodepegawai', $id)->delete();
        return redirect('karyawan');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $karyawan = DB::table('karyawan')
            ->where('namalengkap', 'like', "%{$cari}%")
            ->paginate(10);
            
        return view('karyawan/karyawan', [
            'karyawan' => $karyawan,
            'cari' => $cari
        ]);
    }
}