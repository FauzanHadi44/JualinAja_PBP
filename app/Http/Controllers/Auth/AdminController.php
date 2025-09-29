<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard');
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
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'nullable|integer|min:0',
            'category_id' => 'nullable|exists:categories,id',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_active'   => 'required|boolean',
        ]);

        $product = new Product();
        $product->name = $validated['name'];
        $product->description = $validated['description'] ?? null;
        $product->price = $validated['price'];
        $product->stock = $validated['stock'] ?? 0;
        $product->category_id = $validated['category_id'] ?? null;
        $product->is_active = $validated['is_active'];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public'); // simpan di storage/app/public/products
            $product->image = $path;
        }

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
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
