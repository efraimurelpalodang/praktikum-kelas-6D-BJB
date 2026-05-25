@extends('layouts.admin')
@section('content_header')
    @isset($barang)
        <h1>Edit Barang</h1>
    @else
        <h1>Tambah Barang</h1>
    @endisset
@endsection
@section('content')
    <form
        action="@isset($barang){{ route('barang.update', $barang->id) }}@else{{ route('barang.store') }}@endisset"
        method="POST" class="mt-4">
        @csrf
        @isset($barang)
            @method('PUT')
        @endisset

        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang"
                class="form-control @error('nama_barang') is-invalid @enderror"
                value="{{ old('nama_barang', isset($barang) ? $barang->nama_barang : '') }}">
            @error('nama_barang')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror"
                value="{{ old('harga', isset($barang) ? $barang->harga : '') }}">
            @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror"
                value="{{ old('stok', isset($barang) ? $barang->stok : '') }}">
            @error('stok')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            <select name="kategori_id" id="kategori_id" class="form-control @error('kategori_id') is-invalid @enderror">
                <option value="">-- Pilih Kategori --</option>
                @foreach ($kategori as $k)
                    <option value="{{ $k->id }}" @selected(old('kategori_id', isset($barang) ? $barang->kategori_id : '') == $k->id)>
                        {{ $k->nama_kategori }}
                    </option>
                @endforeach
            </select>
            @error('kategori_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-primary">
                @isset($barang)
                    Perbarui
                @else
                    Simpan
                @endisset
            </button>
            <a href="{{ route('barang.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
@endsection
