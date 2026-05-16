<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris')->insert([
            ['nama_kategori' => 'Elektronik'],
            ['nama_kategori' => 'Alat Tulis'],
            ['nama_kategori' => 'Kebutuhan Kantor'],
        ]);
    }
}
