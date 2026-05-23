<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
  public function index()
  {
    $data_kategori = Kategori::withCount('barangs')->latest()->get();
    return view('kategori.index', compact('data_kategori'));
  }

  public function create()
  {
    return view('kategori.create');
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'nama_kategori' => 'required|string|min:3|unique:kategoris',
    ]);

    Kategori::create($data);
    return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambah');
  }

  public function edit(int $id)
  {
    $kategori = Kategori::findOrFail($id);
    return view('kategori.create', compact('kategori'));
  }

  public function update(int $id, Request $request)
  {
    $kategori = Kategori::findOrFail($id);

    $data = $request->validate([
      'nama_kategori' => 'required|string|min:3|unique:kategoris,nama_kategori,' . $id,
    ]);

    $kategori->update($data);
    return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diupdate');
  }

  public function destroy(int $id)
  {
    $kategori = Kategori::findOrFail($id);
    $kategori->delete();
    return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus');
  }
}
