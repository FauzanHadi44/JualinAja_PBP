@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="container mx-auto px-4">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Dashboard Admin</h1>
            <p class="text-gray-600">Selamat datang di panel admin JualinAja. Kelola produk dan pantau statistik toko Anda.</p>
        </div>        

        <!-- Category Statistics -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <!-- Category Breakdown -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 flex items-center">
                        <i class="bi bi-pie-chart-fill text-indigo-600 mr-2"></i>
                        Produk per Kategori
                    </h3>
                    <span class="text-sm text-gray-600">Total Produk: <span class="font-semibold text-gray-800">{{ $totalProducts }}</span></span>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-purple-500 rounded-full mr-3"></div>
                            <span class="font-medium text-gray-700">Fashion</span>
                        </div>
                        <span class="text-2xl font-bold text-purple-600">{{ $fashionProducts }}</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-orange-500 rounded-full mr-3"></div>
                            <span class="font-medium text-gray-700">Alas Kaki</span>
                        </div>
                        <span class="text-2xl font-bold text-orange-600">{{ $sepatuProducts }}</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-teal-500 rounded-full mr-3"></div>
                            <span class="font-medium text-gray-700">Tas</span>
                        </div>
                        <span class="text-2xl font-bold text-teal-600">{{ $tasProducts }}</span>
                    </div>
                </div>
            </div>

            <!-- Status Pesanan Masuk -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 flex items-center">
                        <i class="bi bi-clipboard-check text-yellow-600 mr-2"></i>
                        Status Pesanan Masuk
                    </h3>
                    <span class="text-sm text-gray-600">Total Pesanan: <span class="font-semibold text-gray-800">{{ $totalOrders }}</span></span>
                </div>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <span class="w-4 h-4 bg-blue-500 rounded-full mr-3"></span>
                            <span class="font-medium text-gray-700">Diproses</span>
                        </div>
                        <span class="text-lg font-bold text-blue-600">{{ $ordersDiproses }}</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <span class="w-4 h-4 bg-indigo-500 rounded-full mr-3"></span>
                            <span class="font-medium text-gray-700">Dikirim</span>
                        </div>
                        <span class="text-lg font-bold text-indigo-600">{{ $ordersDikirim }}</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <span class="w-4 h-4 bg-green-500 rounded-full mr-3"></span>
                            <span class="font-medium text-gray-700">Selesai</span>
                        </div>
                        <span class="text-lg font-bold text-green-600">{{ $ordersSelesai }}</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <span class="w-4 h-4 bg-red-500 rounded-full mr-3"></span>
                            <span class="font-medium text-gray-700">Batal</span>
                        </div>
                        <span class="text-lg font-bold text-red-600">{{ $ordersBatal }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
