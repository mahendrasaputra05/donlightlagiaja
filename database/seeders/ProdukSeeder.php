<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        Produk::create([
            'nama_produk' => 'Lampu Donlight A',
            'harga' => 150000,
            'stock' => 10
        ]);

        Produk::create([
            'nama_produk' => 'Lampu Donlight B',
            'harga' => 200000,
            'stock' => 5
        ]);
    }
}
