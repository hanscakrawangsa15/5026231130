@extends('template')
@section('content')
	<h3>Data Pegawai</h3>
	
	<a href="/index2/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>
	<p>Cari Data Pegawai :</p>
	<form action="/index2/cari" method="GET">
		<input type="text" class="form-control w-50" name="cari" placeholder="Cari Pegawai .." value="{{ isset($cari) }}">
		<input type="submit" class="btn btn-primary" value="Cari">
	</form>
		<br/>
	
		<table class="table table-striped table-hover">
			<tr>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Umur</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>
			@foreach($pegawai as $p)
			<tr>
				<td>{{ $p->pegawai_nama }}</td>
				<td>{{ $p->pegawai_jabatan }}</td>
				<td>{{ $p->pegawai_umur }}</td>
				<td>{{ $p->pegawai_alamat }}</td>
				<td>
					<a href="/index2/edit/{{ $p->pegawai_id }}" class="btn btn-success">Edit</a>
					<a href="/index2/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
				</td>
			</tr>
			@endforeach
		</table>
{{ $pegawai->links() }}
@endsection
