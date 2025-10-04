<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', true)
            ->where('stock', '>', 0)
            ->latest()
            ->get();

        $categories = Category::all();

        return view('layouts.produk', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product = Product::with('category')
            ->where('is_active', true)
            ->findOrFail($id);

        $categories = Category::orderBy('name')->get();
        return view('pages.detail-produk', compact('product', 'categories'));
    }
    public function indexsemua()
    {
        $products = Product::where('is_active', true)
            ->where('stock', '>', 0)
            ->latest()
            ->get();

        $categories = Category::all();

        return view('pages.produk', compact('products', 'categories'));
    }
}
