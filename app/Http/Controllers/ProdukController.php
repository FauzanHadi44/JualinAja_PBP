<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('pages.produk');
    }

    public function show($id)
    {
        // Data produk dummy - nanti bisa diganti dengan database
        $products = [
            1 => [
                'id' => 1,
                'name' => 'Kaos Polos Premium',
                'price' => 75000,
                'image' => 'hero1.jpg',
                'description' => 'Kaos polos berkualitas tinggi dengan bahan combed yang nyaman digunakan sehari-hari. Tersedia dalam berbagai ukuran dan warna.',
                'features' => [
                    'Bahan 100% Cotton Combed',
                    'Jahitan rapi dan kuat',
                    'Nyaman digunakan',
                    'Tahan lama'
                ],
                'category' => 'baju'
            ],
            2 => [
                'id' => 2,
                'name' => 'Celana Jeans Denim Stretch',
                'price' => 75000,
                'image' => 'hero1.jpg',
                'description' => 'Celana jeans premium dengan teknologi stretch yang memberikan kenyamanan maksimal dan fleksibilitas gerak sepanjang hari.',
                'features' => [
                    'Bahan 100% Cotton Combed',
                    'Jahitan rapi dan kuat',
                    'Nyaman digunakan',
                    'Tahan lama'
                ],
                'category' => 'celana'
            ],
            3 => [
                'id' => 3,
                'name' => 'Jaket Hoodie Casual',
                'price' => 200000,
                'image' => 'hero3.png',
                'description' => 'Jaket hoodie dengan desain casual yang cocok untuk cuaca dingin dan gaya santai.',
                'features' => [
                    'Bahan Fleece Hangat',
                    'Hood dengan Drawstring',
                    'Kantong Depan',
                    'Desain Casual'
                ],
                'category' => 'jaket'
            ],
            4 => [
                'id' => 4,
                'name' => 'Tas Ransel Laptop',
                'price' => 250000,
                'image' => 'hero5.png',
                'description' => 'Tas ransel dengan kompartemen khusus laptop dan desain ergonomis untuk kenyamanan maksimal.',
                'features' => [
                    'Kompartemen Laptop 15 inch',
                    'Bahan Tahan Air',
                    'Desain Ergonomis',
                    'Multiple Pockets'
                ],
                'category' => 'tas'
            ],
            5 => [
                'id' => 5,
                'name' => 'Sepatu Sneakers Premium',
                'price' => 350000,
                'image' => 'hero5.png',
                'description' => 'Sepatu sneakers dengan teknologi cushioning terbaru, bahan breathable, dan desain modern. Nyaman untuk aktivitas sehari-hari.',
                'features' => [
                    'Teknologi Cushioning',
                    'Bahan Breathable',
                    'Desain Modern',
                    'Sole Anti-Slip'
                ],
                'category' => 'sepatu'
            ]
        ];

        // Cek apakah produk dengan ID tersebut ada
        if (!isset($products[$id])) {
            abort(404, 'Produk tidak ditemukan');
        }

        $product = $products[$id];
        
        return view('pages.detail-produk', compact('product'));
    }
}