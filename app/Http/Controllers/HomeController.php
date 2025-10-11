<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil produk berdasarkan kategori dengan batasan jumlah
        $fashionProducts = Product::where('is_active', true)
            ->where('stock', '>', 0)
            ->whereHas('category', function($query) {
                $query->where('name', 'Fashion');
            })
            ->latest()
            ->take(4)
            ->get();

        $tasProducts = Product::where('is_active', true)
            ->where('stock', '>', 0)
            ->whereHas('category', function($query) {
                $query->where('name', 'Tas');
            })
            ->latest()
            ->take(2)
            ->get();

        $sepatuProducts = Product::where('is_active', true)
            ->where('stock', '>', 0)
            ->whereHas('category', function($query) {
                $query->where('name', 'Alas Kaki');
            })
            ->latest()
            ->take(2)
            ->get();

        // Gabungkan semua produk
        $products = $fashionProducts->concat($tasProducts)->concat($sepatuProducts);

        $categories = Category::all();

        return view('pages.beranda', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
