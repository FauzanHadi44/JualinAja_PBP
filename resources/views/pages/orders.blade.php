@extends('layouts.master')

@section('title', 'Riwayat Transaksi')

@section('content')
<div class="max-w-5xl max-lg:max-w-2xl mx-auto p-4 pt-24">
    <div class="mb-4">
        <a href="{{ route('beranda') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-[#8B5A2B] text-white font-semibold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 group">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span>Kembali ke Beranda</span>
        </a>
    </div>
    <h1 class="text-3xl font-semibold text-[#74512D]">Riwayat Transaksi</h1>

    @if($orders->isEmpty())
        <div class="p-4 bg-yellow-50 border border-yellow-200 rounded-md text-sm text-yellow-800">
            Belum ada pesanan. <a href="{{ route('produk.indexsemua') }}" class="text-[#74512D] hover:text-[#8B5A2B] underline">Belanja sekarang</a>.
        </div>
    @else
        <div class="space-y-4">
            @foreach($orders as $order)
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm mt-6 mb-10">
                    <div class="bg-[#F2E7D8] px-4 py-3 flex items-center justify-between">
                        <div>
                            <p class="text-sm text-slate-600">Order #{{ $order->id }} • {{ $order->created_at->format('d M Y, H:i') }}</p>
                            <p class="text-sm text-slate-600">Total: <span class="font-semibold text-[#74512D]">Rp{{ number_format($order->total, 0, ',', '.') }}</span></p>
                        </div>
                        <span class="text-xs px-3 py-1 rounded-full
                            @if($order->status === 'diproses') bg-blue-100 text-blue-700 @endif
                            @if($order->status === 'dikirim') bg-yellow-100 text-yellow-700 @endif
                            @if($order->status === 'selesai') bg-green-100 text-green-700 @endif
                            @if($order->status === 'batal') bg-red-100 text-red-700 @endif">
                            {{ ucfirst($order->status) }}
                        </span>
                    </div>
                    <div class="p-4">
                        <ul class="divide-y divide-gray-200">
                            @foreach($order->items as $item)
                                <li class="py-3 flex items-center justify-between">
                                    <div>
                                        <p class="text-sm font-medium text-slate-900">{{ $item->product_name }}</p>
                                        <p class="text-xs text-slate-600">Ukuran: {{ $item->size ?? '-' }} • Qty: {{ $item->quantity }}</p>
                                    </div>
                                    <p class="text-sm font-semibold text-[#74512D]">Rp{{ number_format($item->price * $item->quantity, 0, ',', '.') }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection