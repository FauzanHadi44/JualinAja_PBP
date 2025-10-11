<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use App\Models\OrderItem;

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
    public function indexsemua(Request $request)
    {
        $search = trim($request->input('q', ''));

        $productsQuery = Product::where('is_active', true)
            ->where('stock', '>', 0);

        if ($search !== '') {
            $productsQuery->where(function($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                  ->orWhere('description', 'like', "%$search%")
                  ->orWhereHas('category', function($qc) use ($search) {
                      $qc->where('name', 'like', "%$search%");
                  });
            });
        }

        $products = $productsQuery->latest()->get();

        $categories = Category::all();

        return view('pages.produk', compact('products', 'categories'));
    }

    /**
     * Tampilkan halaman checkout dengan item dari keranjang user
     */
    public function checkout()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk checkout');
        }

        $cartItems = Cart::with('product.category')
            ->where('user_id', Auth::id())
            ->get();

        // Hitung ringkasan
        $subtotal = $cartItems->sum(function($item) {
            return $item->product->price * $item->quantity;
        });
        $shipping = $subtotal > 0 ? 15000 : 0; // biaya pengiriman
        $tax = $subtotal * 0.1; // pajak 10%
        $total = $subtotal + $shipping + $tax;

        return view('pages.checkout', compact('cartItems', 'subtotal', 'shipping', 'tax', 'total'));
    }

    /**
     * Proses checkout sederhana: validasi, lalu kosongkan keranjang
     */
    public function processCheckout(Request $request)
    {
        if (!Auth::check()) {
            if ($request->expectsJson()) {
                return response()->json(['success' => false, 'message' => 'Anda harus login untuk checkout'], 401);
            }
            return redirect()->route('login')->with('error', 'Anda harus login untuk checkout');
        }

        // Pastikan masih ada item di keranjang
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        if ($cartItems->isEmpty()) {
            if ($request->expectsJson()) {
                return response()->json(['success' => false, 'message' => 'Keranjang kosong. Tambahkan produk terlebih dahulu.'], 400);
            }
            return redirect()->route('keranjang')->with('error', 'Keranjang kosong. Tambahkan produk terlebih dahulu.');
        }

        // Validasi berdasarkan field pada form checkout
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'province' => 'required|string|max:255',
            'regency' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'village' => 'required|string|max:255',
            'terms' => 'required'
        ]);

        if ($validator->fails()) {
            if ($request->expectsJson()) {
                return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Di sini biasanya dibuat Order. Untuk sederhana, kita kosongkan keranjang.
        // Buat Order dan OrderItem dari isi keranjang
        // Hitung ringkasan
        $subtotal = $cartItems->sum(function($item) {
            return $item->product->price * $item->quantity;
        });
        $shipping = $subtotal > 0 ? 15000 : 0;
        $tax = (int) round($subtotal * 0.1);
        $total = $subtotal + $shipping + $tax;

        $order = Order::create([
            'user_id' => Auth::id(),
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'province' => $request->input('province'),
            'regency' => $request->input('regency'),
            'district' => $request->input('district'),
            'village' => $request->input('village'),
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'tax' => $tax,
            'total' => $total,
            'status' => 'diproses',
        ]);

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product->id,
                'product_name' => $item->product->name,
                'price' => $item->product->price,
                'quantity' => $item->quantity,
                'size' => $item->size,
            ]);
        }

        // Kosongkan keranjang setelah membuat order
        Cart::where('user_id', Auth::id())->delete();

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'order_id' => $order->id]);
        }

        return redirect()->route('beranda')->with('success', 'Checkout berhasil! Pesanan akan diproses.');
    }
}
