@extends('admin.layouts.app')

@section('content')
<div class="px-6 py-6">
    <h1 class="text-2xl font-semibold text-[#74512D] mb-6">Kelola Kategori</h1>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 border border-green-200 rounded-md text-sm text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="mb-4 p-3 bg-red-100 border border-red-200 rounded-md text-sm text-red-700">
            <ul class="list-disc ml-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Daftar Kategori -->
        <div class="bg-white p-4 rounded-md border border-[#74512D]/20">
            <h2 class="text-xl font-semibold text-[#74512D] mb-4">Daftar Kategori</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-[#F2E7D8]">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#74512D] uppercase tracking-wider">#</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#74512D] uppercase tracking-wider">Nama</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#74512D] uppercase tracking-wider">Dibuat</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($categories as $category)
                            <tr>
                                <td class="px-4 py-3 text-sm text-slate-900">{{ $loop->iteration }}</td>
                                <td class="px-4 py-3 text-sm text-slate-900">{{ $category->name }}</td>
                                <td class="px-4 py-3 text-sm text-slate-600">{{ $category->created_at?->format('d M Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-4 py-6 text-center text-sm text-slate-500">Belum ada kategori.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tambah Kategori Baru -->
        <div id="add-category" class="bg-white p-4 rounded-md border border-[#74512D]/20">
            <h2 class="text-xl font-semibold text-[#74512D] mb-4">Tambah Kategori</h2>
            <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-[#74512D]">Nama Kategori</label>
                    <input type="text" name="name" id="name" class="mt-1 w-full border border-[#74512D]/30 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#8B5A2B]" placeholder="Misal: Fashion" required />
                </div>
                <button type="submit" class="px-4 py-2 bg-[#74512D] hover:bg-[#8B5A2B] text-white rounded-md">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection