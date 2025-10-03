<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', true)
            ->where('stock', '>', 0)
            ->latest()
            ->get();

        return view('layouts.produk', compact('products'));
    }

    public function show($id)
    {
        $product = Product::where('is_active', true)->findOrFail($id);
        return view('layouts.viewproduk', compact('product'));
    }
}
