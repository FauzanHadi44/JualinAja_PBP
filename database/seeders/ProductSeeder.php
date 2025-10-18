<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fashionCategory = Category::where('name', 'Fashion')->first();
        $tasCategory = Category::where('name', 'Tas')->first();
        $alasKakiCategory = Category::where('name', 'Alas Kaki')->first();

        // Data produk Fashion
        $fashionProducts = [
            [
                'name' => 'Kemeja Casual Pria',
                'description' => 'Kemeja casual yang nyaman untuk aktivitas sehari-hari',
                'price' => 150000,
                'stock' => 25,
                'category_id' => $fashionCategory->id,
                'is_active' => true,
            ],
            [
                'name' => 'Dress Wanita Elegan',
                'description' => 'Dress elegan untuk acara formal dan semi-formal',
                'price' => 250000,
                'stock' => 15,
                'category_id' => $fashionCategory->id,
                'is_active' => true,
            ],
            [
                'name' => 'Jaket Denim Unisex',
                'description' => 'Jaket denim berkualitas tinggi untuk pria dan wanita',
                'price' => 300000,
                'stock' => 20,
                'category_id' => $fashionCategory->id,
                'is_active' => true,
            ],
        ];

        // Data produk Tas
        $tasProducts = [
            [
                'name' => 'Tas Ransel Laptop',
                'description' => 'Tas ransel dengan kompartemen khusus laptop hingga 15 inci',
                'price' => 200000,
                'stock' => 30,
                'category_id' => $tasCategory->id,
                'is_active' => true,
            ],
            [
                'name' => 'Handbag Kulit Premium',
                'description' => 'Handbag kulit asli dengan desain elegan dan mewah',
                'price' => 450000,
                'stock' => 12,
                'category_id' => $tasCategory->id,
                'is_active' => true,
            ],
            [
                'name' => 'Tas Selempang Casual',
                'description' => 'Tas selempang praktis untuk aktivitas sehari-hari',
                'price' => 120000,
                'stock' => 40,
                'category_id' => $tasCategory->id,
                'is_active' => true,
            ],
        ];

        // Data produk Alas Kaki
        $alasKakiProducts = [
            [
                'name' => 'Sneakers Sport',
                'description' => 'Sepatu sneakers untuk olahraga dan aktivitas casual',
                'price' => 350000,
                'stock' => 18,
                'category_id' => $alasKakiCategory->id,
                'is_active' => true,
            ],
            [
                'name' => 'Sepatu Formal Pria',
                'description' => 'Sepatu formal kulit untuk acara resmi dan kantor',
                'price' => 400000,
                'stock' => 22,
                'category_id' => $alasKakiCategory->id,
                'is_active' => true,
            ],
            [
                'name' => 'Sandal Wanita Casual',
                'description' => 'Sandal casual yang nyaman untuk aktivitas santai',
                'price' => 180000,
                'stock' => 35,
                'category_id' => $alasKakiCategory->id,
                'is_active' => true,
            ],
        ];

        // Insert semua produk
        foreach ($fashionProducts as $product) {
            Product::create($product);
        }

        foreach ($tasProducts as $product) {
            Product::create($product);
        }

        foreach ($alasKakiProducts as $product) {
            Product::create($product);
        }
    }
}
