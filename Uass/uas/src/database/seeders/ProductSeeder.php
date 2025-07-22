<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            [
                'nama_sayur' => 'Bayam',
                'harga' => 5000,
                'stok' => 50,
                'deskripsi' => 'Bayam segar kaya vitamin.',
                'gambar' => 'images/bayam.jpg'
            ],
            [
                'nama_sayur' => 'Sawi Hijau',
                'harga' => 4000,
                'stok' => 40,
                'deskripsi' => 'Sawi hijau segar dari kebun.',
                'gambar' => 'images/sawi.jpg'
            ]
        ];
        foreach ($products as $p) {
            \App\Models\Product::create($p);
        }
    }
}    