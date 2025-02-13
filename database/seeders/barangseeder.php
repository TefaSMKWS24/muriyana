<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barangseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_barang' => 'B001',
                'nama_barang' => 'Beras',
                'harga' => '5000',
                'stok' => '100',
                'kode_kategori' => 'K001',
            ],
            [
                'kode_barang' => 'B002',
                'nama_barang' => 'Gula',
                'harga' => '5000',
                'stok' => '100',
                'kode_kategori' => 'K002',
            ],
        ];
        DB::table('barang')->insert($data);
    }
}
