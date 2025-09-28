<div class="min-h-100 py-8 px-4 flex">
    <div class="max-w-7xl mx-auto w-full">
        <div class="rounded-3xl p-8 mb-3 mt-6 min-h-[450px] relative overflow-hidden transform hover:scale-[1.01] transition-all duration-700 shadow-2xl" 
            style="background: linear-gradient(135deg, #FDFAF6 0%, #F5F1E8 25%, #FFFFFF 50%, #F5F1E8 75%, #FDFAF6 100%); box-shadow: 0px 25px 50px 0px rgba(116, 81, 45, 0.15), 0px 0px 0px 1px rgba(212, 175, 55, 0.1), inset 0px 1px 0px rgba(255, 255, 255, 0.8); border: 2px solid rgba(212, 175, 55, 0.2);">
            
            <!-- Animated gradient overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-[#D4AF37]/5 via-transparent to-[#D4AF37]/5 animate-pulse rounded-3xl"></div>
            
            <!-- Background decoration -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FFD700]/10 to-[#F4E976]/10 rounded-full blur-2xl"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-[#D4AF37]/10 to-[#B8860B]/10 rounded-full blur-xl"></div>
            <!-- Judul Flash Sale dan Timer di pojok kiri atas -->
            <div class="mb-8 flex items-center justify-between relative z-20">
                <div class="flex items-center gap-3">
                    <div>
                        <h2 class="font-bold leading-tight text-[#8B5A2B] text-3xl md:text-4xl lg:text-5xl">
                            MEGA FLASH SALE 
                        </h2>
                        <p class="text-[#8B5A2B] text-sm font-medium mt-1 animate-bounce">Diskon Gila-Gilaan! Buruan Sebelum Kehabisan!</p>
                        <div class="flex items-center gap-2 mt-2">
                            <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full font-bold animate-pulse">TERBATAS</span>
                            <span class="bg-yellow-500 text-white text-xs px-2 py-1 rounded-full font-bold">HEMAT 70%</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-3 bg-white/80 backdrop-blur-sm rounded-2xl px-4 py-3 shadow-lg border border-[#D4AF37]/20">
                    <span class="text-sm md:text-base text-[#74512D] font-semibold">Berakhir dalam:</span>
                    <div id="countdown-timer" class="flex space-x-1 text-[#FF6B6B] font-bold">
                        <div class="px-3 py-2 rounded-lg text-sm md:text-base min-w-[40px] text-center text-[#FF6B6B] shadow-md" id="hours">09</div>
                        <span class="text-[#FF6B6B] font-bold text-lg">:</span>
                        <div class="px-3 py-2 rounded-lg text-sm md:text-base min-w-[40px] text-center text-[#FF6B6B] shadow-md" id="minutes">59</div>
                        <span class="text-[#FF6B6B] font-bold text-lg">:</span>
                        <div class="px-3 py-2 rounded-lg text-sm md:text-base min-w-[40px] text-center text-[#FF6B6B] shadow-md" id="seconds">28</div>
                    </div>
                </div>
            </div>
            
            <!-- Container untuk produk flash sale di bawah judul -->
            <!-- Product Slider -->
            <div class="relative z-10">
                <!-- Navigation Buttons -->
                <button id="prevBtn" class="absolute left-2 top-1/2 transform -translate-y-1/2 z-30 bg-gradient-to-br from-[#74512D] to-[#8B5A2B] text-[#8B5A2B] shadow-2xl rounded-full p-4 hover:from-[#8B5A2B] hover:to-[#74512D] transition-all duration-300 hover:scale-110 border-2 border-white/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button id="nextBtn" class="absolute right-2 top-1/2 transform -translate-y-1/2 z-30 bg-gradient-to-br from-[#74512D] to-[#8B5A2B] text-[#8B5A2B] shadow-2xl rounded-full p-4 hover:from-[#8B5A2B] hover:to-[#74512D] transition-all duration-300 hover:scale-110 border-2 border-white/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <!-- Slider Container -->
                <div class="overflow-hidden mx-12">
                    <div id="productSlider" class="flex transition-transform duration-300 ease-in-out" style="gap: 16px;">
                        <!-- Produk flash sale akan ditampilkan di sini -->
                        <div class="flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden">
                            <!-- Card decoration -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
                            <div class="relative z-10">
                                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                                    <img src="{{ asset('images/hero5.png') }}" alt="Produk" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                                </div>
                                <h3 class="font-semibold text-gray-800 mb-3 text-lg group-hover:text-blue-600 transition-colors duration-300">Nama Produk 1</h3>
                                <div class="space-y-2 mb-8">
                                    <p class="text-red-500 font-bold text-xl">Rp 59.000</p>
                                    <p class="text-gray-400 line-through text-base">Rp 100.000</p>
                                </div>
                                <button class="w-full bg-[#8B5A2B] hover:bg-[#74512D] text-white font-semibold py-3 px-4 rounded-xl text-base transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Buy Now
                                </button>
                             </div>
                        </div>
                        <div class="flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden">
                            <!-- Card decoration -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
                            <div class="relative z-10">
                                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                                    <img src="{{ asset('images/hero5.png') }}" alt="Produk" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                                </div>
                                <h3 class="font-semibold text-gray-800 mb-3 text-lg group-hover:text-blue-600 transition-colors duration-300">Nama Produk 2</h3>
                                <div class="space-y-2 mb-8">
                                    <p class="text-red-500 font-bold text-xl">Rp 59.000</p>
                                    <p class="text-gray-400 line-through text-base">Rp 100.000</p>
                                </div>
                                <button class="w-full bg-[#8B5A2B] hover:bg-[#74512D] text-white font-semibold py-3 px-4 rounded-xl text-base transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Buy Now
                                </button>
                            </div>
                        </div>
                        <div class="flex-shrink-0 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden">
                            <!-- Card decoration -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
                            <div class="relative z-10">
                                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                                    <img src="{{ asset('images/hero5.png') }}" alt="Produk" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                                </div>
                                <h3 class="font-semibold text-gray-800 mb-3 text-lg group-hover:text-blue-600 transition-colors duration-300">Nama Produk 3</h3>
                                <div class="space-y-2 mb-8">
                                    <p class="text-red-500 font-bold text-xl">Rp 59.000</p>
                                    <p class="text-gray-400 line-through text-base">Rp 100.000</p>
                                </div>
                                <button class="w-full bg-[#8B5A2B] hover:bg-[#74512D] text-white font-semibold py-3 px-4 rounded-xl text-base transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Buy Now
                                </button>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-72 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden">
                            <!-- Card decoration -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>
                            <div class="relative z-10">
                                <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                                    <img src="{{ asset('images/hero5.png') }}" alt="Produk" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                                </div>
                                <h3 class="font-semibold text-gray-800 mb-3 text-lg group-hover:text-blue-600 transition-colors duration-300">Nama Produk 4</h3>
                                <div class="space-y-2 mb-8">
                                    <p class="text-red-500 font-bold text-xl">Rp 59.000</p>
                                    <p class="text-gray-400 line-through text-base">Rp 100.000</p>
                                </div>
                                <button class="w-full bg-[#8B5A2B] hover:bg-[#74512D] text-white font-semibold py-3 px-4 rounded-xl text-base transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Buy Now
                                </button>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-72 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden">
                            <!-- Card decoration -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>                            
                            <div class="relative z-10">
                                <div class="aspect-square rounded-xl mb-4 overflow-hidden group-hover:scale-105 transition-transform duration-500">
                                    <img src="{{ asset('images/hero5.png') }}" alt="Produk" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-semibold text-gray-800 mb-3 text-lg group-hover:text-blue-600 transition-colors duration-300">Nama Produk 5</h3>
                                <div class="space-y-2 mb-8">
                                    <p class="text-red-500 font-bold text-xl">Rp 59.000</p>
                                    <p class="text-gray-400 line-through text-base">Rp 100.000</p>
                                </div>
                                <button class="w-full bg-[#8B5A2B] hover:bg-[#74512D] text-white font-semibold py-3 px-4 rounded-xl text-base transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Buy Now
                                </button>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-72 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden">
                            <!-- Card decoration -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>                            
                            <div class="relative z-10">
                                <div class="aspect-square rounded-xl mb-4 overflow-hidden group-hover:scale-105 transition-transform duration-500">
                                    <img src="{{ asset('images/hero5.png') }}" alt="Produk" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-semibold text-gray-800 mb-3 text-lg group-hover:text-blue-600 transition-colors duration-300">Nama Produk 6</h3>
                                <div class="space-y-2 mb-8">
                                    <p class="text-red-500 font-bold text-xl">Rp 59.000</p>
                                    <p class="text-gray-400 line-through text-base">Rp 100.000</p>
                                </div>
                                <button class="w-full bg-[#8B5A2B] hover:bg-[#74512D] text-white font-semibold py-3 px-4 rounded-xl text-base transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Buy Now
                                </button>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-72 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden">
                            <!-- Card decoration -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>                            
                            <div class="relative z-10">
                                <div class="aspect-square rounded-xl mb-4 overflow-hidden group-hover:scale-105 transition-transform duration-500">
                                    <img src="{{ asset('images/hero5.png') }}" alt="Produk" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-semibold text-gray-800 mb-3 text-lg group-hover:text-blue-600 transition-colors duration-300">Nama Produk 7</h3>
                                <div class="space-y-2 mb-8">
                                    <p class="text-red-500 font-bold text-xl">Rp 59.000</p>
                                    <p class="text-gray-400 line-through text-base">Rp 100.000</p>
                                </div>
                                <button class="w-full bg-[#8B5A2B] hover:bg-[#74512D] text-white font-semibold py-3 px-4 rounded-xl text-base transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Buy Now
                                </button>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-72 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden">
                            <!-- Card decoration -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>                            
                            <div class="relative z-10">
                                <div class="aspect-square rounded-xl mb-4 overflow-hidden group-hover:scale-105 transition-transform duration-500">
                                    <img src="{{ asset('images/hero5.png') }}" alt="Produk" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-semibold text-gray-800 mb-3 text-lg group-hover:text-blue-600 transition-colors duration-300">Nama Produk 8</h3>
                                <div class="space-y-2 mb-8">
                                    <p class="text-red-500 font-bold text-xl">Rp 59.000</p>
                                    <p class="text-gray-400 line-through text-base">Rp 100.000</p>
                                </div>
                                <button class="w-full bg-[#8B5A2B] hover:bg-[#74512D] text-white font-semibold py-3 px-4 rounded-xl text-base transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Buy Now
                                </button>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-72 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden">
                            <!-- Card decoration -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>                            
                            <div class="relative z-10">
                                <div class="aspect-square rounded-xl mb-4 overflow-hidden group-hover:scale-105 transition-transform duration-500">
                                    <img src="{{ asset('images/hero5.png') }}" alt="Produk" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-semibold text-gray-800 mb-3 text-lg group-hover:text-blue-600 transition-colors duration-300">Nama Produk 9</h3>
                                <div class="space-y-2 mb-8">
                                    <p class="text-red-500 font-bold text-xl">Rp 59.000</p>
                                    <p class="text-gray-400 line-through text-base">Rp 100.000</p>
                                </div>
                                <button class="w-full bg-[#8B5A2B] hover:bg-[#74512D] text-white font-semibold py-3 px-4 rounded-xl text-base transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Buy Now
                                </button>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-72 bg-white/90 backdrop-blur-sm rounded-2xl p-6 border-2 border-[#D4AF37]/20 cursor-pointer hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:border-[#D4AF37]/40 relative overflow-hidden">
                            <!-- Card decoration -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl"></div>                            
                            <div class="relative z-10">
                                <div class="aspect-square rounded-xl mb-4 overflow-hidden group-hover:scale-105 transition-transform duration-500">
                                    <img src="{{ asset('images/hero5.png') }}" alt="Produk" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-semibold text-gray-800 mb-3 text-lg group-hover:text-blue-600 transition-colors duration-300">Nama Produk 10</h3>
                                <div class="space-y-2 mb-8">
                                    <p class="text-red-500 font-bold text-xl">Rp 59.000</p>
                                    <p class="text-gray-400 line-through text-base">Rp 100.000</p>
                                </div>
                                <button class="w-full bg-[#8B5A2B] hover:bg-[#74512D] text-white font-semibold py-3 px-4 rounded-xl text-base transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Buy Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Slider -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.getElementById('productSlider');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const products = slider.children;
        const totalProducts = products.length;
        let currentIndex = 0;
        
        // Set initial product width
        function setProductWidth() {
            const containerWidth = slider.parentElement.offsetWidth;
            let productsPerView;
            
            if (window.innerWidth >= 1280) productsPerView = 4; // xl screens
            else if (window.innerWidth >= 1024) productsPerView = 3.5; // lg screens
            else if (window.innerWidth >= 768) productsPerView = 2.5; // md screens
            else if (window.innerWidth >= 640) productsPerView = 2; // sm screens
            else productsPerView = 1.2; // mobile - show 1 full + peek of next
            
            const gapSize = window.innerWidth < 640 ? 8 : 16; // responsive gap
            const productWidth = (containerWidth - (productsPerView - 1) * gapSize) / productsPerView;
            
            // Set gap dynamically
            slider.style.gap = gapSize + 'px';
            
            Array.from(products).forEach(product => {
                product.style.minWidth = productWidth + 'px';
                product.style.maxWidth = productWidth + 'px';
                product.style.width = productWidth + 'px';
            });
            
            return productsPerView;
        }
        
        function updateSlider() {
            const productsPerView = setProductWidth();
            // Calculate max index based on products per view
            const maxIndex = Math.max(0, totalProducts - Math.floor(productsPerView));
            currentIndex = Math.min(currentIndex, maxIndex);
            
            const productWidth = products[0].offsetWidth;
            const gapSize = window.innerWidth >= 640 ? 16 : 8;
            const translateX = currentIndex * (productWidth + gapSize);
            slider.style.transform = `translateX(-${translateX}px)`;
            
            // Update button states
            prevBtn.style.opacity = currentIndex === 0 ? '0.5' : '1';
            nextBtn.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
        }
        
        prevBtn.addEventListener('click', function() {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });
        
        nextBtn.addEventListener('click', function() {
            const productsPerView = setProductWidth();
            // Calculate max index based on products per view
            const maxIndex = Math.max(0, totalProducts - Math.floor(productsPerView));
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateSlider();
            }
        });
        
        // Touch/Swipe support
        let startX = 0;
        let isDragging = false;
        
        slider.addEventListener('touchstart', function(e) {
            startX = e.touches[0].clientX;
            isDragging = true;
        });
        
        slider.addEventListener('touchmove', function(e) {
            if (!isDragging) return;
            e.preventDefault();
        });
        
        slider.addEventListener('touchend', function(e) {
            if (!isDragging) return;
            isDragging = false;
            
            const endX = e.changedTouches[0].clientX;
            const diffX = startX - endX;
            
            if (Math.abs(diffX) > 50) { // minimum swipe distance
                if (diffX > 0) {
                    // Swipe left - next
                    nextBtn.click();
                } else {
                    // Swipe right - prev
                    prevBtn.click();
                }
            }
        });
        
        // Initialize and handle resize
        updateSlider();
        window.addEventListener('resize', updateSlider);
    });
    
    // Countdown Timer
    function startCountdown() {
        // Get countdown end time from backend (Laravel variable)
        @php
            // Default: 10 hours from now if not set
            $flashSaleEndTime = $flashSaleEndTime ?? now()->addHours(10);
        @endphp
        const endTime = new Date('{{ $flashSaleEndTime->toISOString() }}').getTime();
        
        function updateCountdown() {
            const now = new Date().getTime();
            const timeLeft = endTime - now;
            
            if (timeLeft > 0) {
                const hours = Math.floor(timeLeft / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
                
                document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
            } else {
                // Timer expired
                document.getElementById('hours').textContent = '00';
                document.getElementById('minutes').textContent = '00';
                document.getElementById('seconds').textContent = '00';
                clearInterval(countdownInterval);
            }
        }
        
        // Update immediately and then every second
        updateCountdown();
        const countdownInterval = setInterval(updateCountdown, 1000);
    }
    
    // Start countdown when page loads
    document.addEventListener('DOMContentLoaded', startCountdown);
</script>