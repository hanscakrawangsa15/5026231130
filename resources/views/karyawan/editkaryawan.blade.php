@extends('template')
@section('content')
	<h3>Edit Karyawan</h3>
 
	<a href="/karyawan"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($karyawan as $k)
	<form action="/karyawan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $k->kodepegawai }}"> <br/>
		Nama Lengkap <input type="text" required="required" name="nama" value="{{ $k->namalengkap }}"> <br/>
		Divisi <input type="text" required="required" name="jabatan" value="{{ $k->divisi }}"> <br/>
		Departemen <input type="number" required="required" name="umur" value="{{ $k->departemen }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection