@extends('template')
@section('content')
<h3>Data Pegawai</h3>
 
	<a href="/index2" class="btn btn-info"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/index2/store" method="post">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-3">
				Nama 
			</div>
			<div class="col-8">
				<input type="text" name="nama" required class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				Jabatan 
			</div>
			<div class="col-8">
				<input type="text" name="jabatan" required class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				Umur 
			</div>
			<div class="col-8">
				<input type="number" name="umur" required class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				Alamat 
			</div>
			<div class="col-8">
				<textarea name="alamat" required class="form-control"></textarea>
			</div>
		</div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection