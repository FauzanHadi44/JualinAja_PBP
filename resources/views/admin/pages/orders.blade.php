@extends('admin.layouts.app')

@section('content')
<div class="px-6 py-6">
    <h1 class="text-2xl font-semibold text-[#74512D] mb-6">Daftar Pesanan</h1>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 border border-green-200 rounded-md text-sm text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-[#F2E7D8]">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-[#74512D] uppercase tracking-wider">Order</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-[#74512D] uppercase tracking-wider">User</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-[#74512D] uppercase tracking-wider">Total</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-[#74512D] uppercase tracking-wider">Status</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-[#74512D] uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($orders as $order)
                    <tr>
                        <td class="px-4 py-3 text-sm text-slate-900">#{{ $order->id }}<br><span class="text-xs text-slate-600">{{ $order->created_at->format('d M Y, H:i') }}</span></td>
                        <td class="px-4 py-3 text-sm text-slate-900">{{ $order->user->name ?? 'User' }}<br><span class="text-xs text-slate-600">{{ $order->email }}</span></td>
                        <td class="px-4 py-3 text-sm font-semibold text-[#74512D]">Rp{{ number_format($order->total, 0, ',', '.') }}</td>
                        <td class="px-4 py-3">
                            <span class="text-xs px-3 py-1 rounded-full
                                @if($order->status === 'diproses') bg-blue-100 text-blue-700 @endif
                                @if($order->status === 'dikirim') bg-yellow-100 text-yellow-700 @endif
                                @if($order->status === 'selesai') bg-green-100 text-green-700 @endif
                                @if($order->status === 'batal') bg-red-100 text-red-700 @endif">
                                {{ ucfirst($order->status) }}
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <form method="POST" action="{{ route('admin.orders.updateStatus', $order) }}" class="flex items-center gap-2">
                                @csrf
                                <div class="relative">
                                    <select name="status" class="text-sm border border-gray-300 rounded-md pl-3 pr-10 py-1.5 min-w-[140px] bg-white focus:outline-none focus:ring-1 focus:ring-[#74512D]">
                                        <option value="diproses" @selected($order->status==='diproses')>Diproses</option>
                                        <option value="dikirim" @selected($order->status==='dikirim')>Dikirim</option>
                                        <option value="selesai" @selected($order->status==='selesai')>Selesai</option>
                                        <option value="batal" @selected($order->status==='batal')>Batal</option>
                                    </select>
                                </div>
                                <button type="submit" class="px-3 py-1.5 bg-[#74512D] hover:bg-[#8B5A2B] text-white rounded-md text-sm">Update</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-6 text-center text-sm text-slate-500">Belum ada pesanan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection