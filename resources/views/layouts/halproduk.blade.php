<!-- Products Section -->
<div class="px-4 py-4">
    <div class="flex justify-between items-start mb-8">
        <div class="text-left flex-1">
            <!-- Back to Home Button -->
            <div class="mb-6">
                <a href="/" class="inline-flex items-center gap-3 px-6 py-3 bg-[#8B5A2B] text-white font-semibold rounded-xl hover:from-[#74512D] hover:to-[#8B5A2B] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 group">
                    <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    <span>Kembali ke Home</span>
                </a>
            </div>
            
            <!-- Breadcrumb -->
            <nav aria-label="Breadcrumb" class="mb-4">
                <ol class="flex items-center gap-2 text-sm text-[#74512D]">
                    <li>
                        <a href="/" class="flex items-center gap-1 transition-colors text-[#74512D] hover:text-[#8B5A2B] font-medium" aria-label="Home">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="rtl:rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#8B5A2B]/50" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </li>
                    <li>
                        <span class="flex items-center gap-1 text-[#8B5A2B] font-semibold">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                            <span>Produk</span>
                        </span>
                    </li>
                </ol>
            </nav>
            
            <!-- Title Section -->
            <div class="bg-gradient-to-r from-[#8B5A2B]/5 to-[#74512D]/5 rounded-2xl p-6 border border-[#8B5A2B]/20">
                <h2 class="text-3xl font-bold text-[#8B5A2B] mb-3 md:text-4xl lg:text-5xl flex items-center gap-3">
                    <svg class="w-8 h-8 md:w-10 md:h-10 lg:w-12 lg:h-12 text-[#8B5A2B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    Produk Kami
                </h2>
                <p class="text-[#74512D] text-lg mb-4 font-medium">Temukan produk berkualitas tinggi dengan harga terjangkau</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <!-- Product Card 1: Kaos Polos Premium -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full" data-category="fashion" data-size="M,L,XL" data-price="75000" data-brand="premium" data-id="1" onclick="goToProductDetail(1)">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Kaos Polos Premium" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="h-14 flex items-center font-semibold text-[#74512D] mb-3 text-xl leading-tight">Kaos Polos Premium</h3>
                <div class="flex-grow">
                    <p class="h-10 text-sm text-gray-600 mb-3 line-clamp-2">
                        Kaos polos berkualitas tinggi dengan bahan cotton combed yang nyaman dan tidak mudah luntur.
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
                    <p class="text-[#FF6B6B] font-bold text-lg mb-4">Rp 75.000</p>
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

        <!-- Product Card 2: Celana Jeans Slim Fit -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full" data-category="fashion" data-size="S,M,L,XL" data-price="150000" data-brand="jeans" data-id="2" onclick="goToProductDetail(2)">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Celana Jeans Slim Fit" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="h-14 flex items-center font-semibold text-[#74512D] mb-3 text-xl leading-tight">Celana Jeans Denim Stretch</h3>
                <div class="flex-grow">
                    <p class="h-10 text-sm text-gray-600 mb-3 line-clamp-2">
                        Celana jeans premium dengan bahan denim stretch yang nyaman dan fleksibel untuk aktivitas sehari-hari.
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
                    <button class="flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 3: Jaket Hoodie Casual -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full" data-category="fashion" data-size="M,L,XL" data-price="200000" data-brand="hoodie" data-id="3" onclick="goToProductDetail(3)">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Jaket Hoodie Casual" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="h-14 flex items-center font-semibold text-[#74512D] mb-3 text-xl leading-tight">Jaket Hoodie Fleece Premium</h3>
                <div class="flex-grow">
                    <p class="h-10 text-sm text-gray-600 mb-3 line-clamp-2">
                        Jaket hoodie premium dengan bahan fleece berkualitas tinggi, hangat dan nyaman untuk cuaca dingin.
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
                    <button class="flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 4: Tas Ransel Laptop -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full" data-category="tas" data-size="" data-price="200000" data-brand="ransel" data-id="4" onclick="goToProductDetail(4)">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Tas Ransel Laptop" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="h-14 flex items-center font-semibold text-[#74512D] mb-3 text-xl leading-tight">Tas Ransel Multifungsi Pro</h3>
                <div class="flex-grow">
                    <p class="h-10 text-sm text-gray-600 mb-3 line-clamp-2">
                        Tas ransel multifungsi dengan kompartemen laptop dan desain ergonomis untuk profesional.
                    </p>
                    <!-- No Size Options for Bags -->
                    <div class="mb-3">
                        <p class="text-xs text-[#74512D] font-medium mb-2">Ukuran:</p>
                        <p class="text-xs text-gray-500 italic">Tidak ada ukuran</p>
                    </div>
                    <p class="text-[#FF6B6B] font-bold text-lg mb-4">Rp 200.000</p>
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

        <!-- Product Card 5: Kemeja Formal Premium -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full" data-category="fashion" data-size="S,M,L,XL" data-price="180000" data-brand="formal" data-id="1" onclick="goToProductDetail(1)">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Kemeja Formal Premium" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="h-14 flex items-center font-semibold text-[#74512D] mb-3 text-xl leading-tight">Kemeja Formal Premium</h3>
                <div class="flex-grow">
                    <p class="h-10 text-sm text-gray-600 mb-3 line-clamp-2">
                        Kemeja formal berkualitas tinggi dengan bahan katun premium, cocok untuk acara formal dan bisnis.
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
                    <p class="text-[#FF6B6B] font-bold text-lg mb-4">Rp 180.000</p>
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

        <!-- Product Card 6: Tas Selempang Kulit Premium -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full" data-category="tas" data-size="" data-price="250000" data-brand="kulit" data-id="6" onclick="goToProductDetail(4)">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Tas Selempang Kulit Premium" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="h-14 flex items-center font-semibold text-[#74512D] mb-3 text-xl leading-tight">Tas Selempang Kulit Premium</h3>
                <div class="flex-grow">
                    <p class="h-10 text-sm text-gray-600 mb-3 line-clamp-2">
                        Tas selempang kulit asli dengan desain elegan dan kualitas premium untuk gaya hidup modern.
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
                    <button class="flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 7: Sepatu Sneakers Casual -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full" data-category="sepatu" data-size="38,39,40,41,42,43,44" data-price="300000" data-brand="sneakers" data-id="7" onclick="goToProductDetail(5)">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Sepatu Sneakers Casual" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="h-14 flex items-center font-semibold text-[#74512D] mb-3 text-xl leading-tight">Sepatu Sneakers Casual</h3>
                <div class="flex-grow">
                    <p class="h-10 text-sm text-gray-600 mb-3 line-clamp-2">
                        Sepatu sneakers casual dengan desain modern dan bahan berkualitas tinggi untuk kenyamanan maksimal.
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
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="44">44</span>
                        </div>
                    </div>
                    <p class="text-[#FF6B6B] font-bold text-lg mb-4">Rp 300.000</p>
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

        <!-- Product Card 8: Sepatu Formal Kulit Premium -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full" data-category="sepatu" data-size="38,39,40,41,42,43,44" data-price="450000" data-brand="formal" data-id="8" onclick="goToProductDetail(5)">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Sepatu Formal Kulit Premium" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="h-14 flex items-center font-semibold text-[#74512D] mb-3 text-xl leading-tight">Sepatu Formal Kulit Premium</h3>
                <div class="flex-grow">
                    <p class="h-10 text-sm text-gray-600 mb-3 line-clamp-2">
                        Sepatu formal kulit asli dengan desain klasik dan kualitas premium untuk acara formal dan bisnis.
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
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="44">44</span>
                        </div>
                    </div>
                    <p class="text-[#FF6B6B] font-bold text-lg mb-4">Rp 450.000</p>
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

        <!-- Product Card 9: Sepatu Olahraga Running Pro -->
        <div class="product-card bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden flex flex-col h-full" data-category="sepatu" data-size="38,39,40,41,42,43,44" data-price="400000" data-brand="running" data-id="9" onclick="goToProductDetail(5)">
            <!-- Card decoration -->
            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
            <div class="relative z-10">
                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero5.png') }}" alt="Sepatu Olahraga Running Pro" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                </div>
                <h3 class="h-14 flex items-center font-semibold text-[#74512D] mb-3 text-xl leading-tight">Sepatu Olahraga Running Pro</h3>
                <div class="flex-grow">
                    <p class="h-10 text-sm text-gray-600 mb-3 line-clamp-2">
                        Sepatu olahraga profesional dengan teknologi cushioning terdepan untuk performa lari maksimal.
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
                            <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="44">44</span>
                        </div>
                    </div>
                    <p class="text-[#FF6B6B] font-bold text-lg mb-4">Rp 400.000</p>
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
    </div>
</div>

<script>
// Global filter state
let currentFilters = {
    categories: ['semua'],
    sizes: [],
    minPrice: 0,
    maxPrice: 500000,
    brandSearch: ''
};

// Apply all filters
function applyFilters() {
    const productCards = document.querySelectorAll('.product-card');
    let visibleCount = 0;
    
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
        
        card.style.display = shouldShow ? '' : 'none';
        if (shouldShow) visibleCount++;
    });
    
    // Update product count display
    const productCountElement = document.getElementById('product-count');
    if (productCountElement) {
        productCountElement.textContent = `${visibleCount} Produk`;
    }
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
            maxPrice: 500000,
            brandSearch: ''
        };
        applyFilters();
    });
    
    // Initialize size selection functionality
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

// Global variable to store selected sizes for each product
let selectedSizes = {};

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
}

// Function to navigate to product detail page
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
</script>