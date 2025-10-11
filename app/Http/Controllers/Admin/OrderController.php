<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Daftar seluruh pesanan untuk admin
     */
    public function index()
    {
        $orders = Order::with('user', 'items.product')->latest()->get();
        return view('admin.pages.orders', compact('orders'));
    }

    /**
     * Ubah status pesanan (diproses, dikirim, selesai, batal)
     */
    public function updateStatus(Request $request, Order $order)
    {
        $validated = $request->validate([
            'status' => 'required|in:diproses,dikirim,selesai,batal'
        ]);

        $order->update(['status' => $validated['status']]);

        return redirect()->back()->with('success', 'Status pesanan berhasil diperbarui');
    }
}