<!-- Products Section -->
<div class="px-4 py-4">
    <div class="flex justify-between items-center mb-8">
        <div class="text-left">
            <nav aria-label="Breadcrumb" class="mb-8">
                <ol class="flex items-center gap-1 text-sm text-[#74512D]">
                    <li>
                        <a href="/" class="block transition-colors text-[#74512D] hover:text-[#8B5A2B]" aria-label="Home">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </a>
                    </li>
                    <li class="rtl:rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </li>
                    <li>
                        <span class="block text-[#8B5A2B] font-medium">Produk</span>
                    </li>
                </ol>
            </nav>
            <h2 class="text-3xl font-bold text-[#8B5A2B] mb-2 md:text-4xl lg:text-5xl">Produk Kami</h2>
            <div class="w-20 h-1 bg-[#8B5A2B] rounded-full"></div>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <!-- Product Card 1: Kaos Polos Premium -->
        <a href="{{ route('produk.detail', 1) }}" data-category="baju" data-size="M,L,XL" data-price="75000" data-brand="premium" class="product-card flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden block">
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
        <a href="{{ route('produk.detail', 2) }}" data-category="celana" data-size="S,M,L,XL" data-price="150000" data-brand="jeans" class="product-card flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden block">
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
        <a href="{{ route('produk.detail', 3) }}" data-category="jaket" data-size="M,L,XL" data-price="200000" data-brand="hoodie" class="product-card flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden block">
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
        <a href="{{ route('produk.detail', 4) }}" data-category="tas" data-size="" data-price="200000" data-brand="ransel" class="product-card flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden block">
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
    </div>
</div>

<script>
// Global filter state
let currentFilters = {
    categories: ['semua'],
    sizes: [],
    minPrice: 0,
    maxPrice: 200000,
    brandSearch: ''
};

// Apply all filters
function applyFilters() {
    const productCards = document.querySelectorAll('.product-card');
    
    productCards.forEach(card => {
        let shouldShow = true;
        
        // Category filter
        if (!currentFilters.categories.includes('semua')) {
            const cardCategory = card.getAttribute('data-category');
            if (!currentFilters.categories.includes(cardCategory)) {
                shouldShow = false;
            }
        }
        
        // Size filter
        if (currentFilters.sizes.length > 0) {
            const cardSizes = card.getAttribute('data-size').toLowerCase().split(',');
            const hasMatchingSize = currentFilters.sizes.some(size => 
                cardSizes.includes(size.toLowerCase())
            );
            if (!hasMatchingSize) {
                shouldShow = false;
            }
        }
        
        // Price filter
        const cardPrice = parseInt(card.getAttribute('data-price'));
        if (cardPrice < currentFilters.minPrice || cardPrice > currentFilters.maxPrice) {
            shouldShow = false;
        }
        
        // Brand search filter
        if (currentFilters.brandSearch) {
            const cardBrand = card.getAttribute('data-brand').toLowerCase();
            const cardTitle = card.querySelector('h3').textContent.toLowerCase();
            if (!cardBrand.includes(currentFilters.brandSearch.toLowerCase()) && 
                !cardTitle.includes(currentFilters.brandSearch.toLowerCase())) {
                shouldShow = false;
            }
        }
        
        card.style.display = shouldShow ? 'block' : 'none';
    });
}

// Category filter function (for button clicks)
function filterProducts(category) {
    const categoryButtons = document.querySelectorAll('.category-btn');
    
    // Remove active class from all buttons
    categoryButtons.forEach(btn => {
        btn.classList.remove('bg-[#8B5A2B]', 'text-white');
        btn.classList.add('bg-white', 'text-[#8B5A2B]');
    });
    
    // Add active class to clicked button
    if (event && event.target) {
        event.target.classList.remove('bg-white', 'text-[#8B5A2B]');
        event.target.classList.add('bg-[#8B5A2B]', 'text-white');
    }
    
    // Update filter state
    currentFilters.categories = [category];
    applyFilters();
}

// Listen for filter events from parent page
document.addEventListener('DOMContentLoaded', function() {
    // Initialize filters on page load
    applyFilters();
    // Listen for category filter changes
    document.addEventListener('categoryFilterChanged', function(e) {
        currentFilters.categories = e.detail.categories;
        applyFilters();
    });
    
    // Listen for size filter changes
    document.addEventListener('sizeFilterChanged', function(e) {
        currentFilters.sizes = e.detail.sizes;
        applyFilters();
    });
    
    // Listen for price filter changes
    document.addEventListener('priceFilterChanged', function(e) {
        currentFilters.minPrice = e.detail.minPrice;
        currentFilters.maxPrice = e.detail.maxPrice;
        applyFilters();
    });
    
    // Listen for brand search changes
    document.addEventListener('brandSearchChanged', function(e) {
        currentFilters.brandSearch = e.detail.searchTerm;
        applyFilters();
    });
    
    // Listen for clear all filters
    document.addEventListener('clearAllFilters', function() {
        currentFilters = {
            categories: ['semua'],
            sizes: [],
            minPrice: 0,
            maxPrice: 200000,
            brandSearch: ''
        };
        applyFilters();
    });
});
</script>