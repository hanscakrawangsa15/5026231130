@extends('template')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Edit Data Truk</h3>
        </div>
        <div class="card-body">
            <a href="/truk" class="btn btn-secondary mb-3">Kembali</a>
            
            @if($truk)
            <form action="/truk/update" method="post" class="mt-4">
                @csrf
                <input type="hidden" name="id" value="{{ $truk->ID }}">
                
                <div class="form-group row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk Truk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="merk" name="merk" 
                               value="{{ old('merk', $truk->merktruk) }}" required>
                    </div>
                </div>
                
                <div class="form-group row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="harga" name="harga" 
                                   value="{{ old('harga', $truk->hargatruk) }}" min="0" required>
                        </div>
                    </div>
                </div>
                
                <div class="form-group row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="tersedia" name="tersedia" required>
                            <option value="ya" {{ old('tersedia', $truk->tersedia) == 'ya' ? 'selected' : '' }}>Ya</option>
                            <option value="tidak" {{ old('tersedia', $truk->tersedia) == 'tidak' ? 'selected' : '' }}>Tidak</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row mb-3">
                    <label for="berat" class="col-sm-2 col-form-label">Berat (kg)</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="berat" name="berat" 
                               step="0.01" min="0" value="{{ old('berat', $truk->berat) }}" required>
                        <small class="text-muted">Contoh: 4.5</small>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
            @else
                <div class="alert alert-danger">Data truk tidak ditemukan</div>
            @endif
        </div>
    </div>
</div>
@endsection