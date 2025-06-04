@extends('template')
@section('content')
<h3>Data Truk</h3>
 
	<a href="/truk" class="btn btn-info"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/truk/store" method="post">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-3">
				Merk 
			</div>
			<div class="col-8">
				<input type="text" name="merk" required class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				Harga 
			</div>
			<div class="col-8">
				<input type="text" name="harga" required class="form-control">
			</div>
		</div>  
		<div class="row">
			<div class="col-3">
			Tersedia
			</div>
			<div class="col-8">
				<select class="form-control" id="tersedia" name="tersedia" required>
					<option value="ya">Ya</option>
					<option value="tidak">Tidak</option>
				</select> 
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				Berat (kg)
			</div>
			<div class="col-8">
				<input type="number" name="berat" step="0.01" min="0" required class="form-control" placeholder="Contoh: 4.5">
			</div>
		</div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection