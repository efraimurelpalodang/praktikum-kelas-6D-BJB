<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;

class BarangController extends Controller
{
    public function index()
    {
        $data_barang = Barang::with('kategori')->latest()->get();
        $total_stok = Barang::sum('stok');

        return view('barang.index', compact('data_barang', 'total_stok'));
    }

    public function kategori($id)
    {
        $kategori = Kategori::findOrFail($id);
        $data_barang = $kategori->barangs()->with('kategori')->latest()->get();

        return view('barang.index', compact('data_barang', 'kategori'));
    }

    public function detail($id)
    {
        $barang = Barang::with('kategori')->findOrFail($id);
        return view('barang.detail', compact('barang'));
    }
}
