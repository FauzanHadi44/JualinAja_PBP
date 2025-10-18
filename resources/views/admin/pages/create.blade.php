@extends('admin.layouts.app')

@section('title', 'Create Product')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-semibold mb-4">Create New Product</h1>

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-6 rounded-lg shadow-md">
            @csrf

            <div class="grid grid-cols-2 gap-6 items-start">
                <div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Product Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg 
                                      focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('name')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                        <textarea name="description" id="description" rows="4"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg 
                                         focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 font-semibold mb-2">Price</label>
                        <input type="number" name="price" id="price" step="0.01" value="{{ old('price') }}"
                            required
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg 
                                      focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('price')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center w-full">
                    <div class="mb-4 w-full">
                        <label for="category_id" class="block text-gray-700 font-semibold mb-2">Category</label>
                        <select name="category_id" id="category_id"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg 
                                       focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">-- Select Category --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full mb-4">
                        <label for="image" class="text-base text-slate-900 font-medium mb-3 block">Upload Image</label>
                        <input type="file" name="image" id="image"
                            class="w-full text-slate-500 font-medium text-sm bg-white border 
                            file:cursor-pointer cursor-pointer file:border-0 
                            file:py-3 file:px-4 file:mr-4 file:bg-gray-100 
                            file:hover:bg-gray-200 file:text-slate-500 rounded" />
                        <p class="text-xs text-slate-500 mt-2">PNG, JPG, JPEG, WEBP, and GIF are allowed.</p>

                        @error('image')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full grid grid-cols-2 gap-4 mb-4 mt-4">
                        <div>
                            <label for="stock" class="block text-gray-700 font-semibold mb-2">Stock</label>
                            <input type="number" name="stock" id="stock" value="{{ old('stock', 0) }}" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg 
                                          focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('stock')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="is_active" class="block text-gray-700 font-semibold mb-2">Is Active</label>
                            <select name="is_active" id="is_active"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg 
                                           focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="1" {{ old('is_active') == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('is_active')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <div class="m-4 space-x-2">
                    <a href="{{ route('admin.products.index') }}"
                        class="inline-flex items-center px-5 py-2.5 bg-white text-black text-sm font-medium 
                   rounded-lg shadow-md hover:bg-white-700 focus:outline-none focus:ring-2 
                   focus:ring-white-500 focus:ring-offset-1 transition duration-300 ease-in-out">
                        Kembali
                    </a>
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 bg-blue-600 text-white text-sm font-medium 
                       rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 
                       focus:ring-blue-500 focus:ring-offset-1 transition duration-300 ease-in-out">
                        Create Product
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
