@extends('layouts.main')
@section('content')
    <h1>Daftar Kategori</h1>

    <div class="mb-3">
        <a href="{{ route('kategori.create') }}" class="btn btn-success">Tambah Kategori</a>
    </div>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_kategori as $k)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $k->nama_kategori }}</td>
                    <td>{{ $k->barangs_count }}</td>
                    <td>
                        <a href="{{ route('kategori.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kategori.destroy', $k->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
