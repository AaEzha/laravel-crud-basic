@extends('master')

@section('content')
@if (session('status'))
<div class="row mb-3">
    <div class="col">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        </div>
    </div>
@endif
<div class="row mb-3">
    <div class="col">
        <a name="" id="" class="btn btn-primary" href="{{ route('tambah') }}" role="button">Tambah Produk</a>
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Qty</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $prod)
                <tr>
                    <td scope="row">{{ $prod->kode }}</td>
                    <td>{{ $prod->nama }}</td>
                    <td>{{ number_format($prod->qty, 0, ',', '.') }}</td>
                    <td>{{ $prod->jenis }}</td>
                    <td>Rp {{ number_format($prod->harga, 0, ',', '.') }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('ubah', $prod->id) }}" role="button">Ubah</a>
                        <a class="btn btn-danger btn-sm" href="{{ route('hapus', $prod->id) }}" role="button" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td scope="row" colspan="6">Produk masih kosong</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
