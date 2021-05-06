@extends('master')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header bg-primary text-white">
                {{ $title }}
            </div>
            <div class="card-body">
                <form action="{{ route('simpan') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="kode" class="col-sm-2 col-form-label">Kode Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode" name="kode" maxlength="25" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" maxlength="255" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="qty" class="col-sm-2 col-form-label">Qty Produk</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="qty" name="qty" max="999999" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-2 col-form-label">Jenis Produk</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jenis" id="jenis" required>
                                @foreach ($kinds as $jenis)
                                <option value="{{ $jenis }}">{{ $jenis }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga Produk</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="harga" name="harga" max="99999999" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-default" href="{{ route('tampil') }}" role="button">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
