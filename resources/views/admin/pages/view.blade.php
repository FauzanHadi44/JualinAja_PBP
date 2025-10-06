@extends('admin.layouts.app')

@section('title', 'Home')

@section('content')
    <div class="p-6">
        <div class="mb-4 flex justify-end">
            <a href="{{ route('admin.products.create') }}"
                class="text-sm cursor-pointer relative px-6 py-2.5 text-blue-600 font-semibold border border-blue-600 rounded-lg overflow-hidden group">
                <span
                    class="absolute left-0 top-0 w-full h-full bg-blue-600 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 ease-in-out z-0"></span>
                <span class="relative z-10 group-hover:text-white transition-colors duration-300">Tambah Produk</span>
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-50 whitespace-nowrap">
                    <tr>
                        <th class="pl-4 w-8">
                            <input id="checkbox" type="checkbox" class="hidden peer" />
                            <label for="checkbox"
                                class="relative flex items-center justify-center p-0.5 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer bg-blue-500 border border-gray-400 rounded overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-full fill-white" viewBox="0 0 520 520">
                                    <path
                                        d="M79.423 240.755a47.529 47.529 0 0 0-36.737 77.522l120.73 147.894a43.136 43.136 0 0 0 36.066 16.009c14.654-.787 27.884-8.626 36.319-21.515L486.588 56.773a6.13 6.13 0 0 1 .128-.2c2.353-3.613 1.59-10.773-3.267-15.271a13.321 13.321 0 0 0-19.362 1.343q-.135.166-.278.327L210.887 328.736a10.961 10.961 0 0 1-15.585.843l-83.94-76.386a47.319 47.319 0 0 0-31.939-12.438z"
                                        data-name="7-Check" data-original="#000000" />
                                </svg>
                            </label>
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-slate-600">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-gray-500 inline mr-2"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M337.711 241.3a16 16 0 0 0-11.461 3.988c-18.739 16.561-43.688 25.682-70.25 25.682s-51.511-9.121-70.25-25.683a16.007 16.007 0 0 0-11.461-3.988c-78.926 4.274-140.752 63.672-140.752 135.224v107.152C33.537 499.293 46.9 512 63.332 512h385.336c16.429 0 29.8-12.707 29.8-28.325V376.523c-.005-71.552-61.831-130.95-140.757-135.223zM446.463 480H65.537V376.523c0-52.739 45.359-96.888 104.351-102.8C193.75 292.63 224.055 302.97 256 302.97s62.25-10.34 86.112-29.245c58.992 5.91 104.351 50.059 104.351 102.8zM256 234.375a117.188 117.188 0 1 0-117.188-117.187A117.32 117.32 0 0 0 256 234.375zM256 32a85.188 85.188 0 1 1-85.188 85.188A85.284 85.284 0 0 1 256 32z"
                                        data-original="#000000"></path>
                                </svg>
                                Nama
                            </div>
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-slate-600">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-gray-500 inline mr-2"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M467 76H45C20.238 76 0 96.149 0 121v270c0 24.86 20.251 45 45 45h422c24.762 0 45-20.149 45-45V121c0-24.857-20.248-45-45-45zm-6.91 30L267.624 299.094c-5.864 5.882-17.381 5.886-23.248 0L51.91 106h408.18zM30 385.485v-258.97L159.065 256 30 385.485zM51.91 406l128.334-128.752 42.885 43.025c17.574 17.631 48.175 17.624 65.743 0l42.885-43.024L460.09 406H51.91zM482 385.485 352.935 256 482 126.515v258.97z"
                                        data-original="#000000" />
                                </svg>
                                Deskripsi
                            </div>
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-slate-600">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-gray-500 inline mr-2"
                                    fill-rule="evenodd" viewBox="0 0 24 24">
                                    <g transform="matrix(1.08 0 0 1.08 -.96 -.96)">
                                        <path
                                            d="M11.5 20.263H2.95a.2.2 0 0 1-.2-.2v-1.45c0-.831.593-1.563 1.507-2.185 1.632-1.114 4.273-1.816 7.243-1.816a.75.75 0 0 0 0-1.5c-3.322 0-6.263.831-8.089 2.076-1.393.95-2.161 2.157-2.161 3.424v1.451a1.7 1.7 0 0 0 1.7 1.7h8.55a.75.75 0 1 0 0-1.5zm0-19.013C8.464 1.25 6 3.714 6 6.75s2.464 5.5 5.5 5.5S17 9.786 17 6.75s-2.464-5.5-5.5-5.5zm0 1.5c2.208 0 4 1.792 4 4s-1.792 4-4 4-4-1.792-4-4 1.792-4 4-4zm5.25 14.75V20a.75.75 0 0 0 1.5 0v-2.5a.75.75 0 0 0-1.5 0z"
                                            data-original="#000000" />
                                        <circle cx="17.5" cy="15.25" r="1" data-original="#000000" />
                                        <path
                                            d="M17.5 12.25c-2.898 0-5.25 2.352-5.25 5.25s2.352 5.25 5.25 5.25 5.25-2.352 5.25-5.25-2.352-5.25-5.25-5.25zm0 1.5c2.07 0 3.75 1.68 3.75 3.75s-1.68 3.75-3.75 3.75-3.75-1.68-3.75-3.75 1.68-3.75 3.75-3.75z"
                                            data-original="#000000" />
                                    </g>
                                </svg>
                                Harga
                            </div>
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-slate-600">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-gray-500 inline mr-2"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M15.24 23.61H8.76c-5.864 0-8.37-2.506-8.37-8.37V8.76C.39 2.896 2.896.39 8.76.39h6.48c5.864 0 8.37 2.506 8.37 8.37v6.48c0 5.864-2.506 8.37-8.37 8.37zM8.76 2.01c-4.979 0-6.75 1.771-6.75 6.75v6.48c0 4.979 1.771 6.75 6.75 6.75h6.48c4.979 0 6.75-1.771 6.75-6.75V8.76c0-4.979-1.771-6.75-6.75-6.75z"
                                        data-original="#000000" />
                                    <path
                                        d="M6.956 15.5a.795.795 0 0 1-.496-.174.809.809 0 0 1-.152-1.134l2.57-3.337c.314-.4.757-.659 1.264-.723a1.886 1.886 0 0 1 1.404.388l1.977 1.556a.23.23 0 0 0 .205.054c.043 0 .119-.022.184-.108l2.494-3.219a.8.8 0 0 1 1.134-.14c.357.27.422.777.14 1.134l-2.494 3.218c-.313.4-.756.659-1.264.713a1.873 1.873 0 0 1-1.404-.389l-1.976-1.555a.238.238 0 0 0-.205-.054c-.043 0-.119.022-.184.108l-2.57 3.337a.732.732 0 0 1-.627.324z"
                                        data-original="#000000" />
                                </svg>
                                Category
                            </div>
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-slate-600">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-gray-500 inline mr-2"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M15.24 23.61H8.76c-5.864 0-8.37-2.506-8.37-8.37V8.76C.39 2.896 2.896.39 8.76.39h6.48c5.864 0 8.37 2.506 8.37 8.37v6.48c0 5.864-2.506 8.37-8.37 8.37zM8.76 2.01c-4.979 0-6.75 1.771-6.75 6.75v6.48c0 4.979 1.771 6.75 6.75 6.75h6.48c4.979 0 6.75-1.771 6.75-6.75V8.76c0-4.979-1.771-6.75-6.75-6.75z"
                                        data-original="#000000" />
                                    <path
                                        d="M6.956 15.5a.795.795 0 0 1-.496-.174.809.809 0 0 1-.152-1.134l2.57-3.337c.314-.4.757-.659 1.264-.723a1.886 1.886 0 0 1 1.404.388l1.977 1.556a.23.23 0 0 0 .205.054c.043 0 .119-.022.184-.108l2.494-3.219a.8.8 0 0 1 1.134-.14c.357.27.422.777.14 1.134l-2.494 3.218c-.313.4-.756.659-1.264.713a1.873 1.873 0 0 1-1.404-.389l-1.976-1.555a.238.238 0 0 0-.205-.054c-.043 0-.119.022-.184.108l-2.57 3.337a.732.732 0 0 1-.627.324z"
                                        data-original="#000000" />
                                </svg>
                                Gambar
                            </div>
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-slate-600">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-gray-500 inline mr-2"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M15.24 23.61H8.76c-5.864 0-8.37-2.506-8.37-8.37V8.76C.39 2.896 2.896.39 8.76.39h6.48c5.864 0 8.37 2.506 8.37 8.37v6.48c0 5.864-2.506 8.37-8.37 8.37zM8.76 2.01c-4.979 0-6.75 1.771-6.75 6.75v6.48c0 4.979 1.771 6.75 6.75 6.75h6.48c4.979 0 6.75-1.771 6.75-6.75V8.76c0-4.979-1.771-6.75-6.75-6.75z"
                                        data-original="#000000" />
                                    <path
                                        d="M6.956 15.5a.795.795 0 0 1-.496-.174.809.809 0 0 1-.152-1.134l2.57-3.337c.314-.4.757-.659 1.264-.723a1.886 1.886 0 0 1 1.404.388l1.977 1.556a.23.23 0 0 0 .205.054c.043 0 .119-.022.184-.108l2.494-3.219a.8.8 0 0 1 1.134-.14c.357.27.422.777.14 1.134l-2.494 3.218c-.313.4-.756.659-1.264.713a1.873 1.873 0 0 1-1.404-.389l-1.976-1.555a.238.238 0 0 0-.205-.054c-.043 0-.119.022-.184.108l-2.57 3.337a.732.732 0 0 1-.627.324z"
                                        data-original="#000000" />
                                </svg>
                                Stock
                            </div>
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-slate-600">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-gray-500 inline mr-2"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M15.24 23.61H8.76c-5.864 0-8.37-2.506-8.37-8.37V8.76C.39 2.896 2.896.39 8.76.39h6.48c5.864 0 8.37 2.506 8.37 8.37v6.48c0 5.864-2.506 8.37-8.37 8.37zM8.76 2.01c-4.979 0-6.75 1.771-6.75 6.75v6.48c0 4.979 1.771 6.75 6.75 6.75h6.48c4.979 0 6.75-1.771 6.75-6.75V8.76c0-4.979-1.771-6.75-6.75-6.75z"
                                        data-original="#000000" />
                                    <path
                                        d="M6.956 15.5a.795.795 0 0 1-.496-.174.809.809 0 0 1-.152-1.134l2.57-3.337c.314-.4.757-.659 1.264-.723a1.886 1.886 0 0 1 1.404.388l1.977 1.556a.23.23 0 0 0 .205.054c.043 0 .119-.022.184-.108l2.494-3.219a.8.8 0 0 1 1.134-.14c.357.27.422.777.14 1.134l-2.494 3.218c-.313.4-.756.659-1.264.713a1.873 1.873 0 0 1-1.404-.389l-1.976-1.555a.238.238 0 0 0-.205-.054c-.043 0-.119.022-.184.108l-2.57 3.337a.732.732 0 0 1-.627.324z"
                                        data-original="#000000" />
                                </svg>
                                Tersedia?
                            </div>
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-slate-600">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-gray-500 inline mr-2"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 23.5C5.675 23.5.5 18.325.5 12S5.675.5 12 .5c.69 0 1.15.46 1.15 1.15S12.69 2.8 12 2.8c-5.06 0-9.2 4.14-9.2 9.2s4.14 9.2 9.2 9.2 9.2-4.14 9.2-9.2c0-.69.46-1.15 1.15-1.15s1.15.46 1.15 1.15c0 6.325-5.175 11.5-11.5 11.5z"
                                        data-original="#000000" />
                                    <path
                                        d="M12 18.325c-3.45 0-6.325-2.875-6.325-6.325S8.55 5.675 12 5.675c.69 0 1.15.46 1.15 1.15s-.46 1.15-1.15 1.15c-2.185 0-4.025 1.84-4.025 4.025s1.84 4.025 4.025 4.025 4.025-1.84 4.025-4.025c0-.69.46-1.15 1.15-1.15s1.15.46 1.15 1.15c0 3.45-2.875 6.325-6.325 6.325z"
                                        data-original="#000000" />
                                    <path
                                        d="M12 13.15c-.345 0-.575-.115-.805-.345-.46-.46-.46-1.15 0-1.61l3.68-3.68c.46-.46 1.15-.46 1.61 0s.46 1.15 0 1.61l-3.565 3.68c-.345.23-.575.345-.92.345z"
                                        data-original="#000000" />
                                    <path
                                        d="M19.245 9.585h-3.68c-.69 0-1.15-.46-1.15-1.15v-3.68c0-.345.115-.575.345-.805L17.865.845c.345-.345.805-.46 1.265-.23s.69.575.69 1.035v2.415h2.53c.46 0 .92.23 1.035.69.23.46.115.92-.23 1.265L20.05 9.24c-.23.115-.46.345-.805.345zm-2.53-2.3h1.955l.805-.805h-.805c-.69 0-1.15-.46-1.15-1.15v-.92l-.805.805z"
                                        data-original="#000000" />
                                </svg>
                                Action
                            </div>
                        </th>
                    </tr>
                </thead>

                <tbody class="whitespace-nowrap divide-y divide-gray-200">

                    @foreach ($products as $product)
                        <tr>
                            <td class="pl-4 w-8">
                                <input id="checkbox-{{ $product->id }}" type="checkbox" class="hidden peer" />
                                <label for="checkbox-{{ $product->id }}"
                                    class="relative flex items-center justify-center p-0.5 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer bg-blue-500 border border-gray-400 rounded overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full fill-white" viewBox="0 0 520 520">
                                        <path
                                            d="M79.423 240.755a47.529 47.529 0 0 0-36.737 77.522l120.73 147.894a43.136 43.136 0 0 0 36.066 16.009c14.654-.787 27.884-8.626 36.319-21.515L486.588 56.773a6.13 6.13 0 0 1 .128-.2c2.353-3.613 1.59-10.773-3.267-15.271a13.321 13.321 0 0 0-19.362 1.343q-.135.166-.278.327L210.887 328.736a10.961 10.961 0 0 1-15.585.843l-83.94-76.386a47.319 47.319 0 0 0-31.939-12.438z"
                                            data-name="7-Check" data-original="#000000" />
                                    </svg>
                                </label>
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-900 font-medium">
                                <div class="flex items-center cursor-pointer w-max">
                                    <div class="ml-2">
                                        <p>{{ $product->name }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-600 font-medium max-w-xs">
                                {{ Str::limit($product->description, 50, '...') }}
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-600 font-medium">
                                {{ $product->price }}
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-600 font-medium max-w-xs">
                                {{ $product->category->name }}
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-600 font-medium">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Preview"
                                    class="w-20 h-20 object-cover rounded">

                            </td>
                            <td class="px-4 py-3 text-sm text-slate-600 font-medium">
                                {{ $product->stock }}
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-600 font-medium">
                                <span class="inline-flex items-center border border-gray-200 gap-2 px-2 py-1 rounded-lg">
                                    <span
                                        class="w-2 h-2 rounded-full {{ $product->is_active ? 'bg-green-600' : 'bg-red-600' }}"></span>
                                    {{ $product->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>

                            <td class="flex gap-3 px-4 py-3 text-sm font-medium ">
                                <a href="{{ route('admin.products.edit', $product->id) }}"
                                    class="flex items-center gap-2 rounded-lg text-blue-600 bg-blue-50 border border-gray-200 px-3 py-1 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current inline"
                                        viewBox="0 0 64 64">
                                        <path
                                            d="M11.105 43.597a2 2 0 0 1-1.414-3.414L40.945 8.929a2 2 0 1 1 2.828 2.828L12.519 43.011c-.39.39-.902.586-1.414.586z"
                                            data-original="#000000" />
                                        <path
                                            d="M8.017 58a2 2 0 0 1-1.957-2.42l3.09-14.403a2 2 0 1 1 3.911.839l-3.09 14.403A2 2 0 0 1 8.017 58zm14.401-3.09a2 2 0 0 1-1.414-3.414l31.254-31.253a2 2 0 1 1 2.828 2.828L23.833 54.324a1.994 1.994 0 0 1-1.415.586z"
                                            data-original="#000000" />
                                        <path
                                            d="M8.013 58a2.001 2.001 0 0 1-.418-3.956l14.403-3.09a2 2 0 0 1 .839 3.911l-14.403 3.09a1.958 1.958 0 0 1-.421.045zm40.002-28.687a1.99 1.99 0 0 1-1.414-.586L35.288 17.414a2 2 0 1 1 2.828-2.828l11.313 11.313a2 2 0 0 1-1.414 3.414zm5.657-5.656a2 2 0 0 1-1.415-3.415c1.113-1.113 1.726-2.62 1.726-4.242s-.613-3.129-1.726-4.242c-1.114-1.114-2.621-1.727-4.243-1.727s-3.129.613-4.242 1.727a2 2 0 1 1-2.829-2.829c1.868-1.869 4.379-2.898 7.071-2.898 2.691 0 5.203 1.029 7.071 2.898 1.869 1.868 2.898 4.379 2.898 7.071s-1.029 5.203-2.898 7.071a1.99 1.99 0 0 1-1.413.586z"
                                            data-original="#000000" />
                                    </svg>
                                </a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin hapus produk ini?')"
                                        class="flex items-center gap-2 rounded-lg text-red-600 bg-red-50 border border-gray-200 px-3 py-1 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current inline"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M424 64h-88V48c0-26.467-21.533-48-48-48h-64c-26.467 0-48 21.533-48 48v16H88c-22.056 0-40 17.944-40 40v56c0 8.836 7.164 16 16 16h8.744l13.823 290.283C87.788 491.919 108.848 512 134.512 512h242.976c25.665 0 46.725-20.081 47.945-45.717L439.256 176H448c8.836 0 16-7.164 16-16v-56c0-22.056-17.944-40-40-40zM208 48c0-8.822 7.178-16 16-16h64c8.822 0 16 7.178 16 16v16h-96zM80 104c0-4.411 3.589-8 8-8h336c4.411 0 8 3.589 8 8v40H80zm313.469 360.761A15.98 15.98 0 0 1 377.488 480H134.512a15.98 15.98 0 0 1-15.981-15.239L104.78 176h302.44z"
                                                data-original="#000000" />
                                            <path
                                                d="M256 448c8.836 0 16-7.164 16-16V224c0-8.836-7.164-16-16-16s-16 7.164-16 16v208c0 8.836 7.163 16 16 16zm80 0c8.836 0 16-7.164 16-16V224c0-8.836-7.164-16-16-16s-16 7.164-16 16v208c0 8.836 7.163 16 16 16zm-160 0c8.836 0 16-7.164 16-16V224c0-8.836-7.164-16-16-16s-16 7.164-16 16v208c0 8.836 7.163 16 16 16z"
                                                data-original="#000000" />
                                        </svg>
                                    </button>
                                </form>
                                <a href="#"
                                    class="flex items-center gap-2 rounded-lg text-blue-600 bg-blue-50 border border-gray-200 px-3 py-1 cursor-pointer">

                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="md:flex m-4">
                <p class="text-sm text-slate-600 flex-1">Showind 1 to 10 of 100 entries</p>

                <div class="flex items-center max-md:mt-4">
                    <p class="text-sm text-slate-600">Display</p>
                    <select class="text-sm text-slate-900 border border-gray-300 rounded-md h-9 mx-4 px-1 outline-none">
                        <option>10</option>
                        <option>20</option>
                        <option>50</option>
                        <option>100</option>
                    </select>

                    <ul class="flex space-x-3 justify-center">
                        <li class="flex items-center justify-center shrink-0 bg-gray-100 w-9 h-9 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400"
                                viewBox="0 0 55.753 55.753">
                                <path
                                    d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
                                    data-original="#000000" />
                            </svg>
                        </li>
                        <li
                            class="flex items-center justify-center shrink-0 bg-blue-500  border hover:border-blue-500 border-blue-500 cursor-pointer text-sm font-medium text-white px-[13px] h-9 rounded-md">
                            1
                        </li>
                        <li
                            class="flex items-center justify-center shrink-0 border border-gray-300 hover:border-blue-500 cursor-pointer text-sm font-medium text-slate-900 px-[13px] h-9 rounded-md">
                            2
                        </li>
                        <li
                            class="flex items-center justify-center shrink-0 border border-gray-300 hover:border-blue-500 cursor-pointer text-sm font-medium text-slate-900 px-[13px] h-9 rounded-md">
                            3
                        </li>
                        <li
                            class="flex items-center justify-center shrink-0 border border-gray-300 hover:border-blue-500 cursor-pointer text-sm font-medium text-slate-900 px-[13px] h-9 rounded-md">
                            4
                        </li>
                        <li
                            class="flex items-center justify-center shrink-0 border border-gray-300 hover:border-blue-500 cursor-pointer w-9 h-9 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400 rotate-180"
                                viewBox="0 0 55.753 55.753">
                                <path
                                    d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
                                    data-original="#000000" />
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
