@extends('layouts.main')
@section('content')
    <h1>Detail Barang</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $barang['nama_barang'] }}</h5>
            <p class="card-text">Harga: {{ $barang['harga'] }}</p>
            <p class="card-text">Stok: {{ $barang['stok'] }}</p>
        </div>
    </div>
@endsection