<div>
    <div class="grid items-start grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="top-0">
            <div class="overflow-hidden rounded-lg">
                <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}" class="w-full h-auto max-h-[600px] object-cover object-center shadow-lg hover:scale-[1.02] transition-all duration-300" />
            </div>
        </div>

        <div class="py-6 px-8 max-lg:max-w-2xl">
        <div>
            <h2 class="text-xl font-semibold text-slate-900">{{ $product['name'] }}</h2>
            <p class="text-sm text-slate-500 mt-2">{{ $product['brand'] }}</p>
        </div>

        <div class="mt-8">
            <div class="flex items-center flex-wrap gap-4">
                <p class="text-slate-900 text-4xl font-semibold">Rp{{ number_format($product['price'], 0, ',', '.') }}</p>
            </div>
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-semibold text-slate-900">Choose a Size</h3>
            <div class="flex flex-wrap gap-4 mt-4">
                <button type="button" class="w-10 h-10 cursor-pointer border hover:border-[#74512D] hover:bg-[#F2E7D8] border-gray-300 font-semibold text-[#74512D] text-sm rounded-full flex items-center justify-center shrink-0 transition-all duration-200">S</button>
                <button type="button" class="w-10 h-10 cursor-pointer border hover:border-[#74512D] border-[#74512D] bg-[#F2E7D8] font-semibold text-[#74512D] text-sm rounded-full flex items-center justify-center shrink-0 transition-all duration-200">M</button>
                <button type="button" class="w-10 h-10 cursor-pointer border hover:border-[#74512D] hover:bg-[#F2E7D8] border-gray-300 font-semibold text-[#74512D] text-sm rounded-full flex items-center justify-center shrink-0 transition-all duration-200">L</button>
                <button type="button" class="w-10 h-10 cursor-pointer border hover:border-[#74512D] hover:bg-[#F2E7D8] border-gray-300 font-semibold text-[#74512D] text-sm rounded-full flex items-center justify-center shrink-0 transition-all duration-200">XL</button>
            </div>
        </div>

        <div class="mt-8 space-y-4">
            <button type="button" class="w-full px-4 py-2.5 cursor-pointer border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] text-sm font-medium rounded-md transition-all duration-200">Add to cart</button>
            <button type="button" class="w-full px-4 py-2.5 cursor-pointer border border-[#74512D] bg-[#74512D] hover:bg-[#8B5A2B] text-white text-sm font-medium rounded-md transition-all duration-200">Buy now</button>
        </div>

        <div class="mt-8">
            <div>
            <h3 class="text-xl font-semibold text-slate-900">Product Description</h3>
            <p class="text-sm text-slate-500 mt-4">{{ $product['description'] }}</p>
            </div>
            <ul class="space-y-3 list-disc mt-6 pl-4 text-sm text-slate-500">
                @foreach($product['features'] as $feature)
                <li>{{ $feature }}</li>
                @endforeach
            </ul>
        </div>
        </div>
    </div>
</div>