<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            ['nama_barang' => 'Laptop', 'harga' => 10000000, 'stok' => 10, 'kategori_id' => 1],
            ['nama_barang' => 'Buku', 'harga' => 20000, 'stok' => 50, 'kategori_id' => 2],
            ['nama_barang' => 'Kertas HVS', 'harga' => 5000, 'stok' => 100, 'kategori_id' => 3],
        ]);
    }
}
