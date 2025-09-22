<!-- Products Section -->
<div id="produk-kami" class="max-w-7xl mx-auto px-4 py-4 mt-8 mb-20">
    <div class="flex justify-between items-center mb-8">
        <div class="text-left">
            <h2 class="text-3xl font-bold text-[#8B5A2B] mb-2 md:text-4xl lg:text-5xl">Produk Kami</h2>
            <div class="w-20 h-1 bg-[#8B5A2B] rounded-full"></div>
        </div>
        <a href="/produk" class="text-[#74512D] hover:text-[#8B5A2B] font-medium text-sm transition-colors duration-300 flex items-center gap-1">
            Lihat Semua
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </a>
    </div>
    
    <!-- Category Buttons -->
    <div class="flex flex-wrap justify-center gap-4 mb-8">
        <button onclick="filterProducts('semua')" class="category-btn px-6 py-3 bg-[#8B5A2B] text-white font-medium rounded-full hover:bg-[#74512D] transition-colors duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 active">
            Semua
        </button>
        <button onclick="filterProducts('baju')" class="category-btn px-6 py-3 bg-white text-[#8B5A2B] font-medium rounded-full border-2 border-[#8B5A2B] hover:bg-[#8B5A2B] hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
            Baju
        </button>
        <button onclick="filterProducts('celana')" class="category-btn px-6 py-3 bg-white text-[#8B5A2B] font-medium rounded-full border-2 border-[#8B5A2B] hover:bg-[#8B5A2B] hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
            Celana
        </button>
        <button onclick="filterProducts('jaket')" class="category-btn px-6 py-3 bg-white text-[#8B5A2B] font-medium rounded-full border-2 border-[#8B5A2B] hover:bg-[#8B5A2B] hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
            Jaket
        </button>
        <button onclick="filterProducts('tas')" class="category-btn px-6 py-3 bg-white text-[#8B5A2B] font-medium rounded-full border-2 border-[#8B5A2B] hover:bg-[#8B5A2B] hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
            Tas
        </button>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 justify-items-center">
        <!-- Product Card 1: Kaos Polos Premium -->
        <a href="{{ route('produk.detail', 1) }}" data-category="baju" class="product-card flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden block">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Kaos Polos Premium" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="font-semibold text-[#74512D] mb-3 text-xl leading-tight">Kaos Polos Premium</h3>
                <div class="space-y-2 mb-8">
                    <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                        Kaos polos berkualitas tinggi dengan bahan cotton combed yang nyaman dan tidak mudah luntur.
                    </p>
                    <p class="text-[#FF6B6B] font-bold text-lg">Rp 75.000</p>
                </div>
                <div class="flex gap-2">
                    <button class="flex-[2] bg-[#8B5A2B] hover:bg-[#74512D] text-white font-medium py-2.5 px-5 rounded-lg transition-colors duration-200">
                        Buy Now
                    </button>
                    <button class="flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </a>

        <!-- Product Card 2: Celana Jeans Slim Fit -->
        <a href="{{ route('produk.detail', 2) }}" data-category="celana" class="product-card flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden block">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Celana Jeans Slim Fit" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="font-semibold text-[#74512D] mb-3 text-xl leading-tight">Celana Jeans Slim Fit</h3>
                <div class="space-y-2 mb-8">
                    <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                        Celana jeans dengan model slim fit yang trendy dan nyaman untuk aktivitas sehari-hari.
                    </p>
                    <p class="text-[#FF6B6B] font-bold text-lg">Rp 150.000</p>
                </div>
                <div class="flex gap-2">
                    <button class="flex-[2] bg-[#8B5A2B] hover:bg-[#74512D] text-white font-medium py-2.5 px-5 rounded-lg transition-colors duration-200">
                        Buy Now
                    </button>
                    <button class="flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </a>

        <!-- Product Card 3: Jaket Hoodie Casual -->
        <a href="{{ route('produk.detail', 3) }}" data-category="jaket" class="product-card flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden block">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Jaket Hoodie Casual" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="font-semibold text-[#74512D] mb-3 text-xl leading-tight">Jaket Hoodie Casual</h3>
                <div class="space-y-2 mb-8">
                    <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                        Jaket hoodie dengan desain casual yang cocok untuk cuaca dingin dan gaya santai.
                    </p>
                    <p class="text-[#FF6B6B] font-bold text-lg">Rp 200.000</p>
                </div>
                <div class="flex gap-2">
                    <button class="flex-[2] bg-[#8B5A2B] hover:bg-[#74512D] text-white font-medium py-2.5 px-5 rounded-lg transition-colors duration-200">
                        Buy Now
                    </button>
                    <button class="flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </a>

        <!-- Product Card 4: Tas Ransel Laptop -->
        <a href="{{ route('produk.detail', 4) }}" data-category="tas" class="product-card flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden block">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Tas Ransel Laptop" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="font-semibold text-[#74512D] mb-3 text-xl leading-tight">Tas Ransel Laptop</h3>
                <div class="space-y-2 mb-8">
                    <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                        Tas ransel dengan kompartemen khusus laptop dan desain ergonomis untuk kenyamanan maksimal.
                    </p>
                    <p class="text-[#FF6B6B] font-bold text-lg">Rp 250.000</p>
                </div>
                <div class="flex gap-2">
                    <button class="flex-[2] bg-[#8B5A2B] hover:bg-[#74512D] text-white font-medium py-2.5 px-5 rounded-lg transition-colors duration-200">
                        Buy Now
                    </button>
                    <button class="flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </a>
    </div>
</div>

<script>
function filterProducts(category) {
    // Get all product cards
    const productCards = document.querySelectorAll('.product-card');
    
    // Get all category buttons
    const categoryButtons = document.querySelectorAll('.category-btn');
    
    // Remove active class from all buttons
    categoryButtons.forEach(btn => {
        btn.classList.remove('bg-[#8B5A2B]', 'text-white');
        btn.classList.add('bg-white', 'text-[#8B5A2B]');
    });
    
    // Add active class to clicked button
    event.target.classList.remove('bg-white', 'text-[#8B5A2B]');
    event.target.classList.add('bg-[#8B5A2B]', 'text-white');
    
    // Show/hide products based on category
    productCards.forEach(card => {
        if (category === 'semua') {
            card.style.display = 'block';
        } else {
            const cardCategory = card.getAttribute('data-category');
            if (cardCategory === category) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        }
    });
}
</script>