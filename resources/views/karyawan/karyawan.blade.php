@extends('template')
@section('content')
	<h3>Data Karyawan</h3>
	
	<p>Cari Data Karyawan :</p>
	<form action="/karyawan/cari" method="GET">
		<input type="text" class="form-control w-50" name="cari" placeholder="Cari Karyawan .." value="{{ isset($cari) }}">
		<input type="submit" class="btn btn-primary" value="Cari">
	</form>
	<br/>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}  
        </div>
    @endif
	
	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Aksi</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
			<td>{{ strtoupper($k->namalengkap) }}</td>
			<td>{{ $k->divisi }}</td>
			<td>{{ strtolower($k->departemen) }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>
    {{ $karyawan->links() }}
@endsection
