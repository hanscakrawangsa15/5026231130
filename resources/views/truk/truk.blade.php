@extends('template')

@section('content')
<div class="container">
    <h3>Data Truk</h3>
    
    <a href="/truk/tambah" class="btn btn-primary mb-3">+ Tambah Truk Baru</a>

    <div class="card mb-4">
        <div class="card-body">
            <form action="/truk/cari" method="GET" class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control" name="cari" placeholder="Cari Merk Truk..." value="{{ request('cari') }}">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Cari</button>
            </form>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Merk</th>
                    <th>Harga</th>
                    <th>Tersedia</th>
                    <th>Berat (kg)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($truk as $t)
                <tr>
                    <td>{{ $t->merktruk }}</td>
                    <td>Rp {{ number_format($t->hargatruk, 0, ',', '.') }}</td>
                    <td>
                        <span class="badge {{ $t->tersedia == 'ya' ? 'bg-success' : 'bg-danger' }}">
                            {{ ucfirst($t->tersedia) }}
                        </span>
                    </td>
                    <td>{{ number_format($t->berat, 2, ',', '.') }}</td>
                    <td>
                        <a href="/truk/edit/{{ $t->ID }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/truk/hapus/{{ $t->ID }}" class="btn btn-sm btn-danger" 
                           onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data truk</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-3">
        {{ $truk->links() }}
    </div>
</div>
@endsection