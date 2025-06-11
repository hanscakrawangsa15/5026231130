@extends('template')
@section('content')
<h3>Data Karyawan</h3>
 
    <a href="/karyawan" class="btn btn-info"> Kembali</a>
    
    <br/>
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

    @if ($errors->any())
        <div class="alert alert-danger  mb-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <form action="/karyawan/store" method="post">
        @csrf
        <div class="row">
            <div class="col-3">
                Nama Lengkap 
            </div>
            <div class="col-8">
                <input type="text" name="namalengkap" class="form-control" value="{{ old('namalengkap') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Divisi 
            </div>
            <div class="col-8">
                <input type="text" name="divisi" class="form-control" value="{{ old('divisi') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Departemen 
            </div>
            <div class="col-8">
                <input type="text" name="departemen" class="form-control" value="{{ old('departemen') }}">
            </div>
        </div>
        <br>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection