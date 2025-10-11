<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;


class AdminController extends Controller
{
    /**
     * Display the admin dashboard with statistics.
     */
    public function index()
    {
        // Hitung statistik produk
        $totalProducts = Product::count();
        $activeProducts = Product::where('is_active', true)->count();
        $inactiveProducts = Product::where('is_active', false)->count();
        $lowStockProducts = Product::where('stock', '<', 10)->count();
        
        // Hitung produk berdasarkan kategori
        $fashionProducts = Product::whereHas('category', function($query) {
            $query->where('name', 'Fashion');
        })->count();
        
        // Toleransi data lama: hitung kategori "Alas Kaki" dan "Sepatu"
        $sepatuProducts = Product::whereHas('category', function($query) {
            $query->whereIn('name', ['Alas Kaki', 'Sepatu']);
        })->count();
        
        $tasProducts = Product::whereHas('category', function($query) {
            $query->where('name', 'Tas');
        })->count();

        // Ringkasan status pesanan
        $ordersDiproses = Order::where('status', 'diproses')->count();
        $ordersDikirim  = Order::where('status', 'dikirim')->count();
        $ordersSelesai  = Order::where('status', 'selesai')->count();
        $ordersBatal    = Order::where('status', 'batal')->count();
        $totalOrders    = Order::count();

        return view('admin.dashboard', compact(
            'totalProducts',
            'fashionProducts',
            'sepatuProducts',
            'tasProducts',
            'ordersDiproses',
            'ordersDikirim',
            'ordersSelesai',
            'ordersBatal',
            'totalOrders'
        ));
    }
}
