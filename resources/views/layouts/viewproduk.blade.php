<div>
    <div class="grid items-start grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="top-0">
            <div class="overflow-hidden rounded-lg">
                <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}" class="w-full h-auto max-h-[600px] object-cover object-center shadow-lg hover:scale-[1.02] transition-all duration-300" />
            </div>
        </div>

        <div class="py-6 px-8 max-lg:max-w-2xl">
        <div>
            <h2 class="text-2xl font-semibold text-slate-900">{{ $product['name'] }}</h2>
        </div>

        <div class="mt-4">
            <div class="flex items-center flex-wrap gap-4">
                <p class="text-slate-900 text-4xl font-semibold">Rp{{ number_format($product['price'], 0, ',', '.') }}</p>
            </div>
        </div>

        @php
            $fashionCategories = ['baju', 'celana', 'jaket'];
            $shoeCategories = ['sepatu'];
            $bagCategories = ['tas'];
        @endphp

        @if(in_array($product['category'], $fashionCategories))
            <div class="mt-8">
                <h3 class="text-xl font-semibold text-slate-900">Choose a Size</h3>
                <div class="flex flex-wrap gap-4 mt-4" id="size-options">
                    <button type="button" data-size="S" class="size-btn px-3 py-2 text-sm bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors">S</button>
                    <button type="button" data-size="M" class="size-btn px-3 py-2 text-sm bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors">M</button>
                    <button type="button" data-size="L" class="size-btn px-3 py-2 text-sm bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors">L</button>
                    <button type="button" data-size="XL" class="size-btn px-3 py-2 text-sm bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors">XL</button>
                </div>
            </div>
        @elseif(in_array($product['category'], $shoeCategories))
            <div class="mt-8">
                <h3 class="text-xl font-semibold text-slate-900">Choose a Size</h3>
                <div class="flex flex-wrap gap-4 mt-4" id="size-options">
                    <button type="button" data-size="38" class="size-btn px-3 py-2 text-sm bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors">38</button>
                    <button type="button" data-size="39" class="size-btn px-3 py-2 text-sm bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors">39</button>
                    <button type="button" data-size="40" class="size-btn px-3 py-2 text-sm bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors">40</button>
                    <button type="button" data-size="41" class="size-btn px-3 py-2 text-sm bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors">41</button>
                    <button type="button" data-size="42" class="size-btn px-3 py-2 text-sm bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors">42</button>
                    <button type="button" data-size="43" class="size-btn px-3 py-2 text-sm bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors">43</button>
                </div>
            </div>
        @elseif(in_array($product['category'], $bagCategories))
            <div class="mt-8">
                <div class="bg-[#F2E7D8] border border-[#74512D]/30 rounded-lg p-4">
                    <p class="text-[#74512D] font-medium text-center">Produk ini tidak memerlukan pilihan ukuran</p>
                </div>
            </div>
        @endif

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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get selected size from URL parameter
    const urlParams = new URLSearchParams(window.location.search);
    const selectedSize = urlParams.get('size');
    
    // If there's a selected size from the product card, highlight it
    if (selectedSize) {
        const sizeButtons = document.querySelectorAll('.size-btn');
        sizeButtons.forEach(button => {
            if (button.getAttribute('data-size') === selectedSize) {
                // Apply selected styling with brown color
                button.classList.remove('bg-[#F2E7D8]', 'text-[#74512D]', 'border-[#D4AF37]/30');
                button.classList.add('bg-[#8B5A2B]', 'text-white', 'border-[#8B5A2B]');
            }
        });
    }
    
    // Add click event listeners to size buttons
    const sizeButtons = document.querySelectorAll('.size-btn');
    sizeButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove selected styling from all buttons
            sizeButtons.forEach(btn => {
                btn.classList.remove('bg-[#8B5A2B]', 'text-white', 'border-[#8B5A2B]');
                btn.classList.add('bg-[#F2E7D8]', 'text-[#74512D]', 'border-[#D4AF37]/30');
            });
            
            // Apply selected styling to clicked button with brown color
            this.classList.remove('bg-[#F2E7D8]', 'text-[#74512D]', 'border-[#D4AF37]/30');
            this.classList.add('bg-[#8B5A2B]', 'text-white', 'border-[#8B5A2B]');
        });
    });
});
</script>
