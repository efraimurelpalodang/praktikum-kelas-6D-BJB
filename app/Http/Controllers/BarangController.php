<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Support\Facades\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data_barang = Barang::with('kategori')->latest()->get();
        $total_stok = Barang::sum('stok');

        return view('barang.index', compact('data_barang', 'total_stok'));
    }

    public function kategori(int $id)
    {
        $kategori = Kategori::findOrFail($id);
        $data_barang = $kategori->barangs()->with('kategori')->latest()->get();

        return view('barang.index', compact('data_barang', 'kategori'));
    }

    public function detail(int $id)
    {
        $barang = Barang::with('kategori')->findOrFail($id);
        return view('barang.detail', compact('barang'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('barang.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_barang' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori_id' => 'required|integer',
        ]);

        Barang::create($data);
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambah');
    }

    public function edit(int $id)
    {
        $barang = Barang::findOrFail($id);
        $kategori = Kategori::all();
        return view('barang.create', compact('barang', 'kategori'));
    }

    public function update(int $id, Request $request)
    {
        $barang = Barang::findOrFail($id);

        $data = $request->validate([
            'nama_barang' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori_id' => 'required|integer',
        ]);

        $barang->update($data);
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diupdate');
    }

    public function destroy(int $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect('/barang')->with('success', 'Barang berhasil dihapus!');
    }
}
