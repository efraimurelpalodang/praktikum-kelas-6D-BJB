@extends('layouts.main')
@section('content')
    <h1>
        Daftar Barang @if (isset($kategori))
            Kategori {{ $kategori->nama_kategori }}
        @endif
    </h1>
    @if (isset($total_stok))
        <p class="mb-3">Total Stok Seluruh Barang: <strong>{{ $total_stok }}</strong></p>
    @endif
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_barang as $b)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $b['nama_barang'] }}</td>
                    <td>Rp {{ number_format($b['harga'], 0, ',', '.') }}</td>
                    <td>{{ $b['stok'] }}</td>
                    <td>
                        @if ($b['stok'] > 0)
                            <span class="badge bg-success">Tersedia</span>
                        @else
                            <span class="badge bg-danger">Habis</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('barang.detail', ['id' => $b['id']]) }}" class="btn btn-info btn-sm">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
