@extends('layouts.main')
@section('content')
    <h2 class="mt-5 mb-4">
        @isset($kategori)
            Edit Kategori
        @else
            Tambah Kategori
        @endisset
    </h2>

    <form
        action="@isset($kategori){{ route('kategori.update', $kategori->id) }}@else{{ route('kategori.store') }}@endisset"
        method="POST" class="mt-4">
        @csrf
        @isset($kategori)
            @method('PUT')
        @endisset

        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="nama_kategori"
                class="form-control @error('nama_kategori') is-invalid @enderror"
                value="{{ old('nama_kategori', isset($kategori) ? $kategori->nama_kategori : '') }}"
                placeholder="Masukkan nama kategori">
            @error('nama_kategori')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-primary">
                @isset($kategori)
                    Perbarui
                @else
                    Simpan
                @endisset
            </button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
@endsection
