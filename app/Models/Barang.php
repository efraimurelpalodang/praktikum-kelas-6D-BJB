<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';
    protected $fillable = [
        'nama_barang',
        'harga',
        'stok',
        'kategori_id',
        'supplier_id',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
