<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Menampilkan halaman keranjang
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk melihat keranjang');
        }

        $cartItems = Cart::with('product.category')
            ->where('user_id', Auth::id())
            ->get();

        return view('pages.keranjang', compact('cartItems'));
    }

    /**
     * Menambah produk ke keranjang
     */
    public function store(Request $request)
    {
        // Cek apakah user sudah login
        if (!Auth::check()) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak bisa menambahkan ke keranjang. Anda harus login terlebih dahulu!'
            ], 401);
        }

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'size' => 'nullable|string',
            'quantity' => 'integer|min:1'
        ]);

        $product = Product::findOrFail($request->product_id);
        
        // Cek apakah item sudah ada di keranjang
        $existingCart = Cart::where([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'size' => $request->size
        ])->first();

        if ($existingCart) {
            // Update quantity jika item sudah ada
            $existingCart->quantity += $request->quantity ?? 1;
            $existingCart->save();
        } else {
            // Buat item baru di keranjang
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'size' => $request->size,
                'quantity' => $request->quantity ?? 1
            ]);
        }

        // Get updated cart count
        $cartCount = Cart::where('user_id', Auth::id())->sum('quantity');

        return response()->json([
            'success' => true,
            'message' => 'Barang Anda sudah ditambahkan ke keranjang!',
            'cartCount' => $cartCount
        ]);
    }

    /**
     * Update quantity item di keranjang
     */
    public function update(Request $request, Cart $cart)
    {
        if ($cart->user_id !== Auth::id()) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 403);
        }

        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cart->update(['quantity' => $request->quantity]);

        // Calculate cart summary
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        $subtotal = $cartItems->sum(function($item) {
            return $item->product->price * $item->quantity;
        });
        $shipping = 15000; // Fixed shipping cost
        $tax = $subtotal * 0.1; // 10% tax
        $total = $subtotal + $shipping + $tax;

        // Get cart count
        $cartCount = Cart::where('user_id', Auth::id())->sum('quantity');

        return response()->json([
            'success' => true,
            'message' => 'Quantity berhasil diupdate',
            'cartSummary' => [
                'subtotal' => $subtotal,
                'shipping' => $shipping,
                'tax' => $tax,
                'total' => $total
            ],
            'cartCount' => $cartCount,
            'itemTotal' => $cart->product->price * $cart->quantity
        ]);
    }

    /**
     * Hapus item dari keranjang
     */
    public function destroy(Cart $cart)
    {
        if ($cart->user_id !== Auth::id()) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 403);
        }

        $cart->delete();

        // Calculate cart summary after deletion
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        $subtotal = $cartItems->sum(function($item) {
            return $item->product->price * $item->quantity;
        });
        $shipping = $subtotal > 0 ? 15000 : 0; // No shipping if cart is empty
        $tax = $subtotal * 0.1; // 10% tax
        $total = $subtotal + $shipping + $tax;

        // Get cart count
        $cartCount = Cart::where('user_id', Auth::id())->sum('quantity');

        return response()->json([
            'success' => true,
            'message' => 'Item berhasil dihapus dari keranjang',
            'cartSummary' => [
                'subtotal' => $subtotal,
                'shipping' => $shipping,
                'tax' => $tax,
                'total' => $total
            ],
            'cartCount' => $cartCount
        ]);
    }

    /**
     * Menghitung total item di keranjang untuk badge
     */
    public function getCartCount()
    {
        if (!Auth::check()) {
            return response()->json(['count' => 0]);
        }

        $count = Cart::where('user_id', Auth::id())->sum('quantity');
        
        return response()->json(['count' => $count]);
    }
}
