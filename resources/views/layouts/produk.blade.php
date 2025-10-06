<!-- Products Section -->
<div id="produk-kami" class="max-w-7xl mx-auto px-4 py-4 mt-3 mb-20">
    <div class="flex justify-between items-start mb-8">
        <div class="text-left flex-1">
            <!-- Title Section -->
            <div class="bg-gradient-to-r from-[#8B5A2B]/5 to-[#74512D]/5 rounded-2xl p-6 border border-[#8B5A2B]/20">
                <h2 class="text-3xl font-bold text-[#8B5A2B] mb-3 md:text-4xl lg:text-5xl flex items-center gap-3">
                    <svg class="w-8 h-8 md:w-10 md:h-10 lg:w-12 lg:h-12 text-[#8B5A2B]" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    Koleksi Terbaik Kami
                </h2>
                <p class="text-[#74512D] text-lg mb-4 font-medium">Temukan produk berkualitas tinggi dengan harga
                    terjangkau</p>
            </div>
        </div>
        <div class="ml-6 flex-shrink-0">
            <a href="{{ route('produk.indexsemua') }}"
                class="inline-flex items-center gap-3 px-6 py-3 bg-[#8B5A2B] text-white font-semibold rounded-xl hover:from-[#74512D] hover:to-[#8B5A2B] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 group">
                <span>Lihat Semua</span>
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m-7-7h18"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- Category Buttons -->
    <div class="flex flex-wrap justify-start gap-4 mb-8">
        <button onclick="filterProducts('semua')"
            class="category-btn px-8 py-2 bg-[#8B5A2B] text-white font-medium rounded-lg border-2 border-[#8B5A2B] hover:bg-[#74512D] hover:border-[#74512D] transition-colors duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 active">
            Semua
        </button>

        @foreach ($categories as $category)
            <button onclick="filterProducts('{{ strtolower($category->name) }}')"
                class="category-btn px-8 py-2 bg-white text-[#8B5A2B] font-medium rounded-lg border-2 border-[#8B5A2B] hover:bg-[#8B5A2B] hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                {{ $category->name }}
            </button>
        @endforeach
    </div>


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 justify-items-center">
        <!-- Product Card 1: Kaos Premium Cotton Combed -->
        @forelse ($products as $product)
            <div class="product-card flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full"
                data-category="{{ strtolower($product->category->name) }}" data-id="{{ $product->id }}">
                <!-- Card decoration -->
                <a href="{{ route('produk.show', $product->id) }}">
                    <div
                        class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl">
                    </div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <h3 class="font-semibold text-[#74512D] mb-3 text-xl leading-tight h-14 flex items-center">
                            {{ $product->name }}</h3>
                        <div class="flex-grow">
                            <p class="text-sm text-gray-600 mb-3 line-clamp-2 h-10">{{ $product->description }}
                            </p>
                            <!-- Size Options for Fashion Items -->
                            <div class="mb-3">
                                <p class="text-xs text-[#74512D] font-medium mb-2">Ukuran:</p>
                                <div class="flex gap-1">
                                    <span
                                        class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors"
                                        data-size="S">S</span>
                                    <span
                                        class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors"
                                        data-size="M">M</span>
                                    <span
                                        class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors"
                                        data-size="L">L</span>
                                    <span
                                        class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors"
                                        data-size="XL">XL</span>
                                </div>
                            </div>
                            <p class="text-[#FF6B6B] font-bold text-lg mb-4">Rp
                                {{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>
                        <div class="flex gap-2 mt-auto">
                            <button
                                class="flex-[2] bg-[#8B5A2B] hover:bg-[#74512D] text-white font-medium py-2.5 px-5 rounded-lg transition-colors duration-200">
                                Beli Sekarang
                            </button>
                            <button
                                class="flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
<<<<<<< HEAD
                    <p class="text-[#FF6B6B] font-bold text-lg mb-4">Rp 75.000</p>
                </div>
                <div class="flex gap-2 mt-auto">
                    <button class="flex-[2] bg-[#8B5A2B] hover:bg-[#74512D] text-white font-medium py-2.5 px-5 rounded-lg transition-colors duration-200">
                        Beli Sekarang
                    </button>
                    <button class="add-to-cart-btn flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center" 
                            data-product-id="2" 
                            data-product-name="Kaos Polos Premium" 
                            data-product-price="75000" 
                            data-product-description="Kaos polos berkualitas tinggi dengan bahan cotton combed yang nyaman dan tahan lama" 
                            data-product-image="{{ asset('images/hero5.png') }}"
                            onclick="event.stopPropagation(); addToCartFromCard(this);">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 2: Celana Jeans Denim Stretch -->
        <div class="product-card flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full" data-category="fashion" data-category="fashion" data-id="2" onclick="goToProductDetail(2)">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10 flex flex-col h-full">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Celana Jeans Denim Stretch" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="font-semibold text-[#74512D] mb-3 text-xl leading-tight h-14 flex items-center">Celana Jeans Denim Stretch</h3>
                <div class="flex-grow">
                    <p class="text-sm text-gray-600 mb-3 line-clamp-2 h-10">
                        Celana jeans premium dengan teknologi stretch yang memberikan kenyamanan maksimal dan fleksibilitas gerak sepanjang hari.
                    </p>
                    <!-- Size Options for Fashion Items -->
                    <div class="mb-3">
                        <p class="text-xs text-[#74512D] font-medium mb-2">Ukuran:</p>
                        <div class="flex gap-1">
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="S">S</span>
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="M">M</span>
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="L">L</span>
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="XL">XL</span>
                        </div>
                    </div>
                    <p class="text-[#FF6B6B] font-bold text-lg mb-4">Rp 150.000</p>
                </div>
                <div class="flex gap-2 mt-auto">
                    <button class="flex-[2] bg-[#8B5A2B] hover:bg-[#74512D] text-white font-medium py-2.5 px-5 rounded-lg transition-colors duration-200">
                        Beli Sekarang
                    </button>
                    <button class="add-to-cart-btn flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center" 
                            data-product-id="3" 
                            data-product-name="Jaket Hoodie Fleece Premium" 
                            data-product-price="200000" 
                            data-product-description="Jaket hoodie dengan bahan fleece premium yang hangat dan nyaman untuk cuaca dingin" 
                            data-product-image="{{ asset('images/hero5.png') }}"
                            onclick="event.stopPropagation(); addToCartFromCard(this);">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 3: Jaket Hoodie Casual -->
        <div class="product-card flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full" data-category="fashion" data-id="3" onclick="goToProductDetail(3)">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10 flex flex-col h-full">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Jaket Hoodie Fleece Premium" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="font-semibold text-[#74512D] mb-3 text-xl leading-tight h-14 flex items-center">Jaket Hoodie Fleece Premium</h3>
                <div class="flex-grow">
                    <p class="text-sm text-gray-600 mb-3 line-clamp-2 h-10">
                        Jaket hoodie berbahan fleece berkualitas tinggi dengan lapisan dalam yang hangat dan lembut. Cocok untuk cuaca dingin dan gaya kasual.
                    </p>
                    <!-- Size Options for Fashion Items -->
                    <div class="mb-3">
                        <p class="text-xs text-[#74512D] font-medium mb-2">Ukuran:</p>
                        <div class="flex gap-1">
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="S">S</span>
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="M">M</span>
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="L">L</span>
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="XL">XL</span>
                        </div>
                    </div>
                    <p class="text-[#FF6B6B] font-bold text-lg mb-4">Rp 200.000</p>
                </div>
                <div class="flex gap-2 mt-auto">
                    <button class="flex-[2] bg-[#8B5A2B] hover:bg-[#74512D] text-white font-medium py-2.5 px-5 rounded-lg transition-colors duration-200">
                        Beli Sekarang
                    </button>
                    <button class="add-to-cart-btn flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center" 
                            data-product-id="4" 
                            data-product-name="Tas Ransel Multifungsi Pro" 
                            data-product-price="300000" 
                            data-product-description="Tas ransel dengan desain multifungsi dan bahan berkualitas tinggi untuk kebutuhan sehari-hari" 
                            data-product-image="{{ asset('images/hero5.png') }}"
                            onclick="event.stopPropagation(); addToCartFromCard(this);">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 4: Tas Kulit Vintage -->
        <div class="product-card flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full" data-category="tas" data-id="4" onclick="goToProductDetail(4)">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10 flex flex-col h-full">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Tas Ransel Multifungsi Pro" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="font-semibold text-[#74512D] mb-3 text-xl leading-tight h-14 flex items-center">Tas Ransel Multifungsi Pro</h3>
                <div class="flex-grow">
                    <p class="text-sm text-gray-600 mb-3 line-clamp-2 h-10">
                        Tas ransel premium dengan 15+ kompartemen, anti air, dan desain ergonomis. Dilengkapi port USB untuk charging.
                    </p>
                    <!-- No Size Options for Bags -->
                    <div class="mb-3">
                        <p class="text-xs text-[#74512D] font-medium mb-2">Ukuran:</p>
                        <p class="text-xs text-gray-500 italic">Tidak ada ukuran</p>
                    </div>
                    <p class="text-[#FF6B6B] font-bold text-lg mb-4">Rp 250.000</p>
                </div>
                <div class="flex gap-2 mt-auto">
                    <button class="flex-[2] bg-[#8B5A2B] hover:bg-[#74512D] text-white font-medium py-2.5 px-5 rounded-lg transition-colors duration-200">
                        Beli Sekarang
                    </button>
                    <button class="add-to-cart-btn flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center" 
                            data-product-id="5" 
                            data-product-name="Sepatu Sneakers Sport" 
                            data-product-price="350000" 
                            data-product-description="Sepatu sneakers dengan teknologi terbaru untuk kenyamanan maksimal saat berolahraga" 
                            data-product-image="{{ asset('images/hero5.png') }}"
                            onclick="event.stopPropagation(); addToCartFromCard(this);">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 5: Sepatu Sneakers Modern -->
        <div class="product-card flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full" data-category="sepatu" data-size="38,39,40,41,42,43" data-price="350000" data-brand="sneakers" data-id="5" onclick="goToProductDetail(5)">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10 flex flex-col h-full">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Sepatu Sneakers Premium" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="font-semibold text-[#74512D] mb-3 text-xl leading-tight h-14 flex items-center">Sepatu Sneakers Premium</h3>
                <div class="flex-grow">
                    <p class="text-sm text-gray-600 mb-3 line-clamp-2 h-10">
                        Sepatu sneakers dengan teknologi cushioning terbaru, bahan breathable, dan desain modern. Nyaman untuk aktivitas sehari-hari.
                    </p>
                    <!-- Size Options for Shoes -->
                    <div class="mb-3">
                        <p class="text-xs text-[#74512D] font-medium mb-2">Ukuran:</p>
                        <div class="flex gap-1 flex-wrap">
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="38">38</span>
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="39">39</span>
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="40">40</span>
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="41">41</span>
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="42">42</span>
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="43">43</span>
                        </div>
                    </div>
                    <p class="text-[#FF6B6B] font-bold text-lg mb-4">Rp 350.000</p>
                </div>
                <div class="flex gap-2 mt-auto">
                    <button class="flex-[2] bg-[#8B5A2B] hover:bg-[#74512D] text-white font-medium py-2.5 px-5 rounded-lg transition-colors duration-200">
                        Beli Sekarang
                    </button>
                    <button class="flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
=======
                </a>
            </div>
        @empty
            <p class="text-center text-gray-500">Belum ada produk tersedia.</p>
        @endforelse
>>>>>>> 3e16c815c426d18232ef866f9545c1a2388e3962
    </div>
</div>

<script>
    // Global variable to store selected sizes for each product
    let selectedSizes = {};

    function filterProducts(category) {
        const productCards = document.querySelectorAll('.product-card');
        const categoryButtons = document.querySelectorAll('.category-btn');

        // Update tombol aktif
        categoryButtons.forEach(btn => {
            btn.classList.remove('bg-[#8B5A2B]', 'text-white', 'active');
            btn.classList.add('bg-white', 'text-[#8B5A2B]');
        });
        event.target.classList.remove('bg-white', 'text-[#8B5A2B]');
        event.target.classList.add('bg-[#8B5A2B]', 'text-white', 'active');

        // Tampilkan/hide produk
        productCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category').toLowerCase();

            if (category === 'semua' || cardCategory === category) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
<<<<<<< HEAD
    });
}
</script>

<script>
// Function to handle size selection
function selectSize(element, productId) {
    const productCard = element.closest('.product-card');
    const selectedSize = element.getAttribute('data-size');
    
    // Check if this size is already selected
    const isCurrentlySelected = element.classList.contains('bg-[#8B5A2B]');
    
    // Remove selected class from all size options in this product card
    const sizeOptions = productCard.querySelectorAll('.size-option');
    sizeOptions.forEach(option => {
        option.classList.remove('bg-[#8B5A2B]', 'text-white');
        option.classList.add('bg-[#F2E7D8]', 'text-[#74512D]');
    });
    
    if (isCurrentlySelected) {
        // If clicking the same size again, unselect it
        delete selectedSizes[productId];
        console.log(`Unselected size for product ${productId}`);
    } else {
        // Select the new size
        element.classList.remove('bg-[#F2E7D8]', 'text-[#74512D]');
        element.classList.add('bg-[#8B5A2B]', 'text-white');
        selectedSizes[productId] = selectedSize;
        console.log(`Selected size ${selectedSize} for product ${productId}`);
=======
    }

    // Function to handle size selection
    function selectSize(element, productId) {
        const productCard = element.closest('.product-card');
        const selectedSize = element.getAttribute('data-size');

        // Check if this size is already selected
        const isCurrentlySelected = element.classList.contains('bg-[#8B5A2B]');

        // Remove selected class from all size options in this product card
        const sizeOptions = productCard.querySelectorAll('.size-option');
        sizeOptions.forEach(option => {
            option.classList.remove('bg-[#8B5A2B]', 'text-white');
            option.classList.add('bg-[#F2E7D8]', 'text-[#74512D]');
        });

        if (isCurrentlySelected) {
            // If clicking the same size again, unselect it
            delete selectedSizes[productId];
            console.log(`Unselected size for product ${productId}`);
        } else {
            // Select the new size
            element.classList.remove('bg-[#F2E7D8]', 'text-[#74512D]');
            element.classList.add('bg-[#8B5A2B]', 'text-white');
            selectedSizes[productId] = selectedSize;
            console.log(`Selected size ${selectedSize} for product ${productId}`);
        }

        // Store in localStorage for persistence
        localStorage.setItem('selectedSizes', JSON.stringify(selectedSizes));
>>>>>>> 3e16c815c426d18232ef866f9545c1a2388e3962
    }

    function goToProductDetail(productId) {
        // Get selected size for this product
        const selectedSize = selectedSizes[productId] || null;

        // Create URL with size parameter if size is selected
        let url = `/produk/${productId}`;
        if (selectedSize) {
            url += `?size=${selectedSize}`;
        }

        // Navigate to product detail page
        window.location.href = url;
    }

    // Initialize size selection functionality when page loads
    document.addEventListener('DOMContentLoaded', function() {
        // Load selected sizes from localStorage
        const storedSizes = localStorage.getItem('selectedSizes');
        if (storedSizes) {
            selectedSizes = JSON.parse(storedSizes);
        }

        // Add click event listeners to all size options
        document.querySelectorAll('.size-option').forEach(option => {
            option.addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent card click event
                const productCard = this.closest('.product-card');
                const productId = productCard.getAttribute('data-id');
                selectSize(this, productId);
            });
        });

        // Restore selected sizes from localStorage
        Object.keys(selectedSizes).forEach(productId => {
            const productCard = document.querySelector(`[data-id="${productId}"]`);
            if (productCard) {
                const selectedSize = selectedSizes[productId];
                const sizeOption = productCard.querySelector(`[data-size="${selectedSize}"]`);
                if (sizeOption) {
                    sizeOption.classList.remove('bg-[#F2E7D8]', 'text-[#74512D]');
                    sizeOption.classList.add('bg-[#8B5A2B]', 'text-white');
                }
            }
        });
    });
<<<<<<< HEAD
    
    // Restore selected sizes from localStorage
    Object.keys(selectedSizes).forEach(productId => {
        const productCard = document.querySelector(`[data-id="${productId}"]`);
        if (productCard) {
            const selectedSize = selectedSizes[productId];
            const sizeOption = productCard.querySelector(`[data-size="${selectedSize}"]`);
            if (sizeOption) {
                sizeOption.classList.remove('bg-[#F2E7D8]', 'text-[#74512D]');
                sizeOption.classList.add('bg-[#8B5A2B]', 'text-white');
            }
        }
    });
});
</script>

<script>
// Add JavaScript function for adding to cart from card
function addToCartFromCard(button) {
    // Get selected size for this product if available
    const productCard = button.closest('.product-card');
    const productId = button.dataset.productId;
    const selectedSizeElement = productCard.querySelector('.size-option.bg-\\[\\#8B5A2B\\]');
    const selectedSize = selectedSizeElement ? selectedSizeElement.dataset.size : '';
    
    // Check if size is required but not selected
    const sizeOptions = productCard.querySelectorAll('.size-option');
    if (sizeOptions.length > 0 && !selectedSize) {
        showNotification('Silakan pilih ukuran terlebih dahulu!', 'error');
        return;
    }
    
    const productData = {
        name: button.dataset.productName,
        price: button.dataset.productPrice,
        description: button.dataset.productDescription,
        image: button.dataset.productImage,
        quantity: 1,
        size: selectedSize
    };

    const formData = new FormData();
    formData.append('product_name', productData.name);
    formData.append('product_price', productData.price);
    formData.append('product_description', productData.description);
    formData.append('product_image', productData.image);
    formData.append('quantity', productData.quantity);
    formData.append('size', productData.size);
    formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

    fetch('/cart/add', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showNotification('Produk berhasil ditambahkan ke keranjang!', 'success');
            updateCartBadge(data.cartCount);
        } else {
            if (data.redirect) {
                showNotification(data.message || 'Anda harus login terlebih dahulu untuk menambahkan produk ke keranjang!', 'error');
                setTimeout(() => {
                    window.location.href = data.redirect;
                }, 2000);
            } else {
                showNotification(data.message || 'Gagal menambahkan produk ke keranjang', 'error');
            }
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('Terjadi kesalahan saat menambahkan produk ke keranjang', 'error');
    });
}
=======
</script>
>>>>>>> 3e16c815c426d18232ef866f9545c1a2388e3962
