@extends('layouts.master')

@section('title', 'Produk')

@section('content')
<div class="min-h-screen pt-32 pb-8 px-4">
    <div class="flex gap-4 max-w-7xl mx-auto">
        <div class="w-full max-w-[260px] shrink-0 bg-gradient-to-br from-white/95 to-[#F8F5F0]/95 backdrop-blur-sm shadow-xl rounded-2xl px-6 h-fit py-6 border-2 border-[#8B5A2B]/20 hover:shadow-2xl transition-all duration-300">
            <div class="flex items-center border-b border-[#8B5A2B]/20 pb-3 mb-6">
                <h3 class="text-[#8B5A2B] text-lg font-bold flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.707A1 1 0 013 7V4z"></path>
                    </svg>
                    Filter
                </h3>
                <button type="button" id="clearAllFilters" class="text-sm text-[#FF6B6B] hover:text-[#E55555] font-semibold ml-auto cursor-pointer transition-all duration-200 px-3 py-1 rounded-lg hover:bg-red-50">Clear all</button>
            </div>
            <div>
                <div class="mt-6 space-y-3">
                    <label class="flex items-center cursor-pointer group p-2 rounded-lg hover:bg-[#8B5A2B]/5 transition-all duration-200">
                        <input id="semua" type="checkbox" name="category" value="semua" class="w-4 h-4 cursor-pointer category-filter accent-[#8B5A2B] mr-3 rounded transition-all duration-200 transform group-hover:scale-110" checked />
                        <span class="text-[#74512D] group-hover:text-[#8B5A2B] font-medium text-sm transition-all duration-200 flex items-center gap-2">
                            <svg class="w-4 h-4 opacity-60 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            Semua
                        </span>
                    </label>
                    <label class="flex items-center cursor-pointer group p-2 rounded-lg hover:bg-[#8B5A2B]/5 transition-all duration-200">
                        <input id="fashion" type="checkbox" name="category" value="fashion" class="w-4 h-4 cursor-pointer category-filter accent-[#8B5A2B] mr-3 rounded transition-all duration-200 transform group-hover:scale-110" />
                        <span class="text-[#74512D] group-hover:text-[#8B5A2B] font-medium text-sm transition-all duration-200 flex items-center gap-2">
                            <svg class="w-4 h-4 opacity-60 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Fashion
                        </span>
                    </label>
                    <label class="flex items-center cursor-pointer group p-2 rounded-lg hover:bg-[#8B5A2B]/5 transition-all duration-200">
                        <input id="tas" type="checkbox" name="category" value="tas" class="w-4 h-4 cursor-pointer category-filter accent-[#8B5A2B] mr-3 rounded transition-all duration-200 transform group-hover:scale-110" />
                        <span class="text-[#74512D] group-hover:text-[#8B5A2B] font-medium text-sm transition-all duration-200 flex items-center gap-2">
                            <svg class="w-4 h-4 opacity-60 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            Tas
                        </span>
                    </label>
                    <label class="flex items-center cursor-pointer group p-2 rounded-lg hover:bg-[#8B5A2B]/5 transition-all duration-200">
                        <input id="sepatu" type="checkbox" name="category" value="sepatu" class="w-4 h-4 cursor-pointer category-filter accent-[#8B5A2B] mr-3 rounded transition-all duration-200 transform group-hover:scale-110" />
                        <span class="text-[#74512D] group-hover:text-[#8B5A2B] font-medium text-sm transition-all duration-200 flex items-center gap-2">
                            <svg class="w-4 h-4 opacity-60 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                            </svg>
                            Sepatu
                        </span>
                    </label>
                </div>
            </div>
            <hr class="my-6 border-[#8B5A2B]/20" />
            <div>
                <h6 class="text-[#8B5A2B] text-sm font-bold flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4a1 1 0 011-1h4M4 16v4a1 1 0 001 1h4m8-16h4a1 1 0 011 1v4m-4 12h4a1 1 0 001-1v-4"></path>
                    </svg>
                    Size
                </h6>
                <div class="flex flex-wrap gap-3 mt-4">
                    <button type="button" data-size="s" class="size-filter cursor-pointer border border-[#8B5A2B]/30 hover:border-[#8B5A2B] hover:bg-[#8B5A2B] hover:text-white rounded-lg text-[13px] text-[#74512D] font-medium py-2.5 px-3 min-w-14 transition-all duration-200 hover:shadow-md transform hover:scale-105 active:scale-95">S</button>
                    <button type="button" data-size="m" class="size-filter cursor-pointer border border-[#8B5A2B]/30 hover:border-[#8B5A2B] hover:bg-[#8B5A2B] hover:text-white rounded-lg text-[13px] text-[#74512D] font-medium py-2.5 px-3 min-w-14 transition-all duration-200 hover:shadow-md transform hover:scale-105 active:scale-95">M</button>
                    <button type="button" data-size="l" class="size-filter cursor-pointer border border-[#8B5A2B]/30 hover:border-[#8B5A2B] hover:bg-[#8B5A2B] hover:text-white rounded-lg text-[13px] text-[#74512D] font-medium py-2.5 px-3 min-w-14 transition-all duration-200 hover:shadow-md transform hover:scale-105 active:scale-95">L</button>
                    <button type="button" data-size="xl" class="size-filter cursor-pointer border border-[#8B5A2B]/30 hover:border-[#8B5A2B] hover:bg-[#8B5A2B] hover:text-white rounded-lg text-[13px] text-[#74512D] font-medium py-2.5 px-3 min-w-14 transition-all duration-200 hover:shadow-md transform hover:scale-105 active:scale-95">XL</button>
                </div>
            </div>
            <hr class="my-6 border-[#8B5A2B]/20" />
            <div>
                <h6 class="text-[#8B5A2B] text-sm font-bold flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Price
                </h6>
                <div class="relative mt-6 p-4 bg-[#8B5A2B]/5 rounded-lg border border-[#8B5A2B]/10">
                    <div class="relative px-3 py-4">
                        <div class="h-2 bg-gradient-to-r from-[#8B5A2B]/20 to-[#74512D]/20 relative rounded-full shadow-inner">
                            <div id="activeTrack" class="absolute h-2 bg-gradient-to-r from-[#8B5A2B] to-[#74512D] rounded-full w-full shadow-sm"></div>
                        </div>
                        <input
                            type="range"
                            id="minRange"
                            min="0"
                            max="200000"
                            value="0"
                            class="absolute top-4 left-3 right-3 h-2 bg-transparent appearance-none cursor-pointer hover:shadow-md transition-all duration-200
                                [&::-webkit-slider-thumb]:appearance-none 
                                [&::-webkit-slider-thumb]:w-5 
                                [&::-webkit-slider-thumb]:h-5 
                                [&::-webkit-slider-thumb]:bg-gradient-to-br 
                                [&::-webkit-slider-thumb]:from-[#8B5A2B] 
                                [&::-webkit-slider-thumb]:to-[#74512D] 
                                [&::-webkit-slider-thumb]:rounded-full 
                                [&::-webkit-slider-thumb]:border-2 
                                [&::-webkit-slider-thumb]:border-white 
                                [&::-webkit-slider-thumb]:shadow-lg 
                                [&::-webkit-slider-thumb]:cursor-pointer
                                [&::-webkit-slider-thumb]:hover:shadow-xl
                                [&::-webkit-slider-thumb]:hover:scale-110
                                [&::-webkit-slider-thumb]:transition-all
                                [&::-webkit-slider-thumb]:duration-200
                                [&::-moz-range-thumb]:w-5 
                                [&::-moz-range-thumb]:h-5 
                                [&::-moz-range-thumb]:bg-[#8B5A2B] 
                                [&::-moz-range-thumb]:rounded-full 
                                [&::-moz-range-thumb]:border-none 
                                [&::-moz-range-thumb]:shadow-lg 
                                [&::-moz-range-thumb]:cursor-pointer"
                        />
                        <input
                            type="range"
                            id="maxRange"
                            min="0"
                            max="500000"
                            value="500000"
                            class="absolute top-4 left-3 right-3 h-2 bg-transparent appearance-none cursor-pointer hover:shadow-md transition-all duration-200
                                [&::-webkit-slider-thumb]:appearance-none 
                                [&::-webkit-slider-thumb]:w-5 
                                [&::-webkit-slider-thumb]:h-5 
                                [&::-webkit-slider-thumb]:bg-gradient-to-br 
                                [&::-webkit-slider-thumb]:from-[#8B5A2B] 
                                [&::-webkit-slider-thumb]:to-[#74512D] 
                                [&::-webkit-slider-thumb]:rounded-full 
                                [&::-webkit-slider-thumb]:border-2 
                                [&::-webkit-slider-thumb]:border-white 
                                [&::-webkit-slider-thumb]:shadow-lg 
                                [&::-webkit-slider-thumb]:cursor-pointer
                                [&::-webkit-slider-thumb]:hover:shadow-xl
                                [&::-webkit-slider-thumb]:hover:scale-110
                                [&::-webkit-slider-thumb]:transition-all
                                [&::-webkit-slider-thumb]:duration-200
                                [&::-moz-range-thumb]:w-5 
                                [&::-moz-range-thumb]:h-5 
                                [&::-moz-range-thumb]:bg-[#8B5A2B] 
                                [&::-moz-range-thumb]:rounded-full 
                                [&::-moz-range-thumb]:border-none 
                                [&::-moz-range-thumb]:shadow-lg 
                                [&::-moz-range-thumb]:cursor-pointer"
                        />
                    </div>
                <div class="flex justify-between text-[#74512D] font-medium text-sm mt-4 bg-[#8B5A2B]/5 px-3 py-2 rounded-lg">
                    <span id="minPrice" class="flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        Rp0
                    </span>
                    <span id="maxPrice" class="flex items-center gap-1 font-bold text-[#8B5A2B]">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                        Rp500.000
                    </span>
                </div>
                </div>
            </div>
            <hr class="my-6 border-[#8B5A2B]/20" />
            <div>
                <h6 class="text-[#8B5A2B] text-sm font-bold flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Brand Search
                </h6>
                <div class="mt-4 relative">
                    <input 
                        type="text" 
                        id="brandSearch" 
                        placeholder="Cari produk disini..." 
                        class="w-full pl-10 pr-4 py-3 border-2 border-[#8B5A2B]/30 rounded-lg text-sm text-[#74512D] placeholder-[#74512D]/60 focus:outline-none focus:ring-2 focus:ring-[#8B5A2B] focus:border-[#8B5A2B] transition-all duration-200 hover:border-[#8B5A2B]/50 bg-gradient-to-r from-white to-[#F8F5F0]/30"
                    />
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-[#8B5A2B]/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <!-- Products Section -->
        <div class="flex-1">
            @include('layouts.halproduk')
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Price Range Slider Functionality
    const minRange = document.getElementById('minRange');
    const maxRange = document.getElementById('maxRange');
    const minPrice = document.getElementById('minPrice');
    const maxPrice = document.getElementById('maxPrice');
    const activeTrack = document.getElementById('activeTrack');
    
    function updatePriceRange() {
        if (!minRange || !maxRange || !minPrice || !maxPrice || !activeTrack) return;
        
        let minVal = parseInt(minRange.value);
        let maxVal = parseInt(maxRange.value);
        
        // Ensure minimum value is not negative
        if (minVal < 0) {
            minVal = 0;
            minRange.value = 0;
        }
        
        // Ensure min is not greater than max
        if (minVal >= maxVal) {
            if (maxVal <= 1000) {
                minRange.value = 0;
                minVal = 0;
            } else {
                minRange.value = maxVal - 1000;
                minVal = maxVal - 1000;
            }
        }
        
        const minPercent = (minVal / parseInt(minRange.max)) * 100;
        const maxPercent = (maxVal / parseInt(maxRange.max)) * 100;
        
        activeTrack.style.left = minPercent + '%';
        activeTrack.style.width = (maxPercent - minPercent) + '%';
        
        // Format price display
        const formatPrice = (price) => {
            if (price === 0) return 'Rp0';
            return 'Rp' + price.toLocaleString('id-ID');
        };
        
        minPrice.textContent = formatPrice(minVal);
        maxPrice.textContent = formatPrice(maxVal);
        
        // Dispatch event to update products
        document.dispatchEvent(new CustomEvent('priceFilterChanged', {
            detail: { 
                minPrice: minVal, 
                maxPrice: maxVal 
            }
        }));
    }
    
    if (minRange && maxRange) {
        minRange.addEventListener('input', updatePriceRange);
        maxRange.addEventListener('input', updatePriceRange);
    }
    
    // Initialize price range
    updatePriceRange();
    
    // Size Filter Functionality
    const sizeFilters = document.querySelectorAll('.size-filter');
    let selectedSizes = [];
    
    if (sizeFilters.length > 0) {
        sizeFilters.forEach(button => {
            button.addEventListener('click', function() {
                const size = this.dataset.size;
                
                if (this.classList.contains('bg-[#8B5A2B]')) {
                    // Remove selection
                    this.classList.remove('border-[#8B5A2B]', 'bg-[#8B5A2B]', 'text-white');
                    this.classList.add('border-[#8B5A2B]/30', 'text-[#74512D]');
                    this.style.backgroundColor = '';
                    this.style.color = '';
                    this.style.borderColor = '';
                    selectedSizes = selectedSizes.filter(s => s !== size);
                } else {
                    // Add selection
                    this.classList.remove('border-[#8B5A2B]/30', 'text-[#74512D]');
                    this.classList.add('border-[#8B5A2B]', 'bg-[#8B5A2B]', 'text-white');
                    this.style.backgroundColor = '#8B5A2B';
                    this.style.color = 'white';
                    this.style.borderColor = '#8B5A2B';
                    selectedSizes.push(size);
                }
                
                // Dispatch event to update products
                document.dispatchEvent(new CustomEvent('sizeFilterChanged', {
                    detail: { sizes: selectedSizes }
                }));
                console.log('Selected sizes:', selectedSizes);
            });
            
            // Handle hover effects for non-selected buttons
            button.addEventListener('mouseenter', function() {
                if (!this.classList.contains('bg-[#8B5A2B]')) {
                    this.style.backgroundColor = '#8B5A2B';
                    this.style.color = 'white';
                    this.style.borderColor = '#8B5A2B';
                }
            });
            
            button.addEventListener('mouseleave', function() {
                if (!this.classList.contains('bg-[#8B5A2B]')) {
                    this.style.backgroundColor = '';
                    this.style.color = '#74512D';
                    this.style.borderColor = 'rgba(139, 90, 43, 0.3)';
                }
            });
        });
    }
    
    // Category Filter Functionality
    const categoryFilters = document.querySelectorAll('.category-filter');
    const semuaFilter = document.getElementById('semua');
    
    if (categoryFilters.length > 0) {
        categoryFilters.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (this.value === 'semua') {
                    // If "Semua" is checked, uncheck all others
                    if (this.checked) {
                        categoryFilters.forEach(cb => {
                            if (cb.value !== 'semua') {
                                cb.checked = false;
                            }
                        });
                    }
                } else {
                    // If any specific category is checked, uncheck "Semua"
                    if (this.checked && semuaFilter) {
                        semuaFilter.checked = false;
                    }
                    
                    // If no specific categories are checked, check "Semua"
                    const specificCategories = Array.from(categoryFilters).filter(cb => cb.value !== 'semua');
                    const anyChecked = specificCategories.some(cb => cb.checked);
                    if (!anyChecked && semuaFilter) {
                        semuaFilter.checked = true;
                    }
                }
                
                const selectedCategories = Array.from(categoryFilters)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value);
                
                // Dispatch event to update products
                document.dispatchEvent(new CustomEvent('categoryFilterChanged', {
                    detail: { categories: selectedCategories }
                }));
                console.log('Selected categories:', selectedCategories);
            });
        });
    }
    
    if (semuaFilter) {
        semuaFilter.checked = true;
    }
    
    const brandSearch = document.getElementById('brandSearch');
    if (brandSearch) {
        brandSearch.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            document.dispatchEvent(new CustomEvent('brandSearchChanged', {
                detail: { searchTerm: searchTerm }
            }));
            console.log('Brand search:', searchTerm);
        });
    }
    
    const clearAllBtn = document.getElementById('clearAllFilters');
    if (clearAllBtn) {
        clearAllBtn.addEventListener('click', function() {
        minRange.value = 0;
        maxRange.value = 500000;
        updatePriceRange();
        
        if (sizeFilters.length > 0) {
            sizeFilters.forEach(button => {
                button.classList.remove('border-[#8B5A2B]', 'bg-[#8B5A2B]', 'text-white');
                button.classList.add('border-[#8B5A2B]/30', 'text-[#74512D]');
            });
            selectedSizes = [];
        }
        
        if (categoryFilters.length > 0) {
            categoryFilters.forEach(cb => {
                if (cb.value === 'semua') {
                    cb.checked = true;
                } else {
                    cb.checked = false;
                }
            });
        }
        
        // Reset brand search
        if (brandSearch) {
            brandSearch.value = '';
        }
        
        // Dispatch event to clear all filters
        document.dispatchEvent(new CustomEvent('clearAllFilters'));
        console.log('All filters cleared');
        });
    }
});
</script>
@endsection