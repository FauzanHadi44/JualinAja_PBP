@extends('layouts.master')

@section('title', 'Beranda')

@section('content')
<div class="min-h-screen pt-32 pb-8 px-4">
    <div class="flex gap-4 max-w-7xl mx-auto">
        <div class="w-full max-w-[260px] shrink-0 bg-white shadow-lg rounded-lg px-4 sm:px-6 h-fit py-6 absoulate top-50">
            <div class="flex items-center border-b border-gray-300 pb-2 mb-6">
                <h3 class="text-slate-900 text-lg font-semibold">Filter</h3>
                <button type="button" id="clearAllFilters" class="text-sm text-red-500 hover:text-red-700 font-semibold ml-auto cursor-pointer transition-colors">Clear all</button>
            </div>
            <div>
                <ul class="mt-6 space-y-4">
                    <li class="flex items-center gap-3">
                        <input id="semua" type="checkbox" name="category" value="semua"
                        class="w-4 h-4 cursor-pointer category-filter" />
                        <label for="semua" class="text-slate-600 font-medium text-sm cursor-pointer">Semua</label>
                    </li>
                    <li class="flex items-center gap-3">
                        <input id="baju" type="checkbox" name="category" value="baju"
                        class="w-4 h-4 cursor-pointer category-filter" />
                        <label for="baju" class="text-slate-600 font-medium text-sm cursor-pointer">Baju</label>
                    </li>
                    <li class="flex items-center gap-3">
                        <input id="celana" type="checkbox" name="category" value="celana"
                        class="w-4 h-4 cursor-pointer category-filter" />
                        <label for="celana" class="text-slate-600 font-medium text-sm cursor-pointer">Celana</label>
                    </li>
                    <li class="flex items-center gap-3">
                        <input id="jaket" type="checkbox" name="category" value="jaket"
                        class="w-4 h-4 cursor-pointer category-filter" />
                        <label for="jaket" class="text-slate-600 font-medium text-sm cursor-pointer">Jaket</label>
                    </li>
                    <li class="flex items-center gap-3">
                        <input id="tas" type="checkbox" name="category" value="tas"
                        class="w-4 h-4 cursor-pointer category-filter" />
                        <label for="tas" class="text-slate-600 font-medium text-sm cursor-pointer">Tas</label>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-300" />
            <div>
                <h6 class="text-slate-900 text-sm font-semibold">Size</h6>
                <div class="flex flex-wrap gap-3 mt-4">
                <button type="button" data-size="xs" class="size-filter cursor-pointer border border-gray-300 hover:border-blue-600 hover:bg-blue-50 rounded-md text-[13px] text-slate-600 font-medium py-1 px-1 min-w-14 transition-colors">XS</button>
                <button type="button" data-size="s" class="size-filter cursor-pointer border border-gray-300 hover:border-blue-600 hover:bg-blue-50 rounded-md text-[13px] text-slate-600 font-medium py-1 px-1 min-w-14 transition-colors">S</button>
                <button type="button" data-size="m" class="size-filter cursor-pointer border border-gray-300 hover:border-blue-600 hover:bg-blue-50 rounded-md text-[13px] text-slate-600 font-medium py-1 px-1 min-w-14 transition-colors">M</button>
                <button type="button" data-size="l" class="size-filter cursor-pointer border border-gray-300 hover:border-blue-600 hover:bg-blue-50 rounded-md text-[13px] text-slate-600 font-medium py-1 px-1 min-w-14 transition-colors">L</button>
                <button type="button" data-size="xl" class="size-filter cursor-pointer border border-gray-300 hover:border-blue-600 hover:bg-blue-50 rounded-md text-[13px] text-slate-600 font-medium py-1 px-1 min-w-14 transition-colors">XL</button>
                </div>
            </div>
            <hr class="my-6 border-gray-300" />
            <div>
                <h6 class="text-slate-900 text-sm font-semibold">Price</h6>
                <div class="relative mt-6">
                <div class="h-1.5 bg-gray-300 relative">
                    <div id="activeTrack" class="absolute h-1.5 bg-pink-500 rounded-full w-9/12"></div>
                </div>
                <input
                    type="range"
                    id="minRange"
                    min="0"
                    max="200000"
                    value="0"
                    class="absolute top-0 w-full h-1.5 bg-transparent appearance-none cursor-pointer 
                        [&::-webkit-slider-thumb]:appearance-none 
                        [&::-webkit-slider-thumb]:w-5 
                        [&::-webkit-slider-thumb]:h-5 
                        [&::-webkit-slider-thumb]:bg-pink-500 
                        [&::-webkit-slider-thumb]:rounded-full 
                        [&::-webkit-slider-thumb]:border-2 
                        [&::-webkit-slider-thumb]:border-white 
                        [&::-webkit-slider-thumb]:shadow-md 
                        [&::-webkit-slider-thumb]:cursor-pointer
                        [&::-moz-range-thumb]:w-5 
                        [&::-moz-range-thumb]:h-5 
                        [&::-moz-range-thumb]:bg-pink-500 
                        [&::-moz-range-thumb]:rounded-full 
                        [&::-moz-range-thumb]:border-2 
                        [&::-moz-range-thumb]:border-white 
                        [&::-moz-range-thumb]:shadow-md 
                        [&::-moz-range-thumb]:cursor-pointer
                        [&::-moz-range-thumb]:border-none"
                />
                <input
                    type="range"
                    id="maxRange"
                    min="0"
                    max="200000"
                    value="200000"
                    class="absolute top-0 w-full h-1.5 bg-transparent appearance-none cursor-pointer 
                        [&::-webkit-slider-thumb]:appearance-none 
                        [&::-webkit-slider-thumb]:w-5 
                        [&::-webkit-slider-thumb]:h-5 
                        [&::-webkit-slider-thumb]:bg-pink-500 
                        [&::-webkit-slider-thumb]:rounded-full 
                        [&::-webkit-slider-thumb]:border-2 
                        [&::-webkit-slider-thumb]:border-white 
                        [&::-webkit-slider-thumb]:shadow-md 
                        [&::-webkit-slider-thumb]:cursor-pointer
                        [&::-moz-range-thumb]:w-5 
                        [&::-moz-range-thumb]:h-5 
                        [&::-moz-range-thumb]:bg-pink-500 
                        [&::-moz-range-thumb]:rounded-full 
                        [&::-moz-range-thumb]:border-2 
                        [&::-moz-range-thumb]:border-white 
                        [&::-moz-range-thumb]:shadow-md 
                        [&::-moz-range-thumb]:cursor-pointer
                        [&::-moz-range-thumb]:border-none"
                />
                <div class="flex justify-between text-slate-600 font-medium text-sm mt-4">
                    <span id="minPrice">Rp0</span>
                    <span id="maxPrice">Rp200.000</span>
                </div>
                </div>
            </div>
            <hr class="my-6 border-gray-300" />
            <div>
                <h6 class="text-slate-900 text-sm font-semibold">Brand Search</h6>
                <div class="mt-4">
                    <input 
                        type="text" 
                        id="brandSearch" 
                        placeholder="Cari produk disini..." 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                    />
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
        
        const minVal = parseInt(minRange.value);
        const maxVal = parseInt(maxRange.value);
        
        if (minVal >= maxVal) {
            minRange.value = maxVal - 1000;
        }
        
        const minPercent = (minRange.value / minRange.max) * 100;
        const maxPercent = (maxRange.value / maxRange.max) * 100;
        
        activeTrack.style.left = minPercent + '%';
        activeTrack.style.width = (maxPercent - minPercent) + '%';
        
        minPrice.textContent = 'Rp' + parseInt(minRange.value).toLocaleString('id-ID');
        maxPrice.textContent = 'Rp' + parseInt(maxRange.value).toLocaleString('id-ID');
        
        // Dispatch event to update products
        document.dispatchEvent(new CustomEvent('priceFilterChanged', {
            detail: { 
                minPrice: parseInt(minRange.value), 
                maxPrice: parseInt(maxRange.value) 
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
                
                if (this.classList.contains('border-blue-600')) {
                    // Remove selection
                    this.classList.remove('border-blue-600', 'bg-blue-50', 'text-blue-600');
                    this.classList.add('border-gray-300', 'text-slate-600');
                    selectedSizes = selectedSizes.filter(s => s !== size);
                } else {
                    // Add selection
                    this.classList.remove('border-gray-300', 'text-slate-600');
                    this.classList.add('border-blue-600', 'bg-blue-50', 'text-blue-600');
                    selectedSizes.push(size);
                }
                
                // Dispatch event to update products
                document.dispatchEvent(new CustomEvent('sizeFilterChanged', {
                    detail: { sizes: selectedSizes }
                }));
                console.log('Selected sizes:', selectedSizes);
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
        maxRange.value = 200000;
        updatePriceRange();
        
        if (sizeFilters.length > 0) {
            sizeFilters.forEach(button => {
                button.classList.remove('border-blue-600', 'bg-blue-50', 'text-blue-600');
                button.classList.add('border-gray-300', 'text-slate-600');
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