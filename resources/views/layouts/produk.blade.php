<!-- Products Section -->
<div id="produk-kami" class="max-w-7xl mx-auto px-4 py-4 mt-3 mb-5">
    <div class="flex justify-between items-start mb-8">
        <div class="text-left flex-1">
            <!-- Title Section -->
            <div class="bg-gradient-to-br from-white/95 to-[#F8F5F0]/95 backdrop-blur-sm shadow-xl rounded-2xl px-6 h-fit py-6 border-2 border-[#8B5A2B]/20 rounded-2xl p-6">
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
                class="category-btn px-8 py-2 bg-white text-[#8B5A2B] font-medium rounded-lg border-2 border-[#8B5A2B] hover:bg-[#8B5A2B] hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 whitespace-nowrap">
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
                <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-[#FFD700]/20 to-[#F4E976]/20 rounded-full blur-xl">
                </div>
                <div class="relative z-10 flex flex-col h-full" onclick="goToProductDetail({{ $product->id }})">
                    <div class="aspect-square rounded-xl mb-4 overflow-hidden shadow-lg">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="font-semibold text-[#74512D] mb-3 text-xl leading-tight h-14 flex items-center">
                        {{ $product->name }}</h3>
                    <div class="flex-grow">
                        <p class="text-sm text-gray-600 mb-3 line-clamp-2 h-10">{{ $product->description }}
                        </p>
                        <!-- Size Options - Dynamic based on category -->
                        <div class="mb-3" id="size-options">
                            @php
                                $categoryName = strtolower($product->category->name);
                            @endphp
                            
                            @if($categoryName === 'fashion')
                                <p class="text-xs text-[#74512D] font-medium mb-2">Ukuran:</p>
                                <div class="flex gap-1 flex-wrap">
                                    <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="S" data-product-id="{{ $product->id }}">S</span>
                                    <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="M" data-product-id="{{ $product->id }}">M</span>
                                    <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="L" data-product-id="{{ $product->id }}">L</span>
                                    <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="XL" data-product-id="{{ $product->id }}">XL</span>
                                </div>
                            @elseif($categoryName === 'alas kaki')
                                <p class="text-xs text-[#74512D] font-medium mb-2">Ukuran:</p>
                                <div class="flex gap-1 flex-wrap">
                                    @for($size = 38; $size <= 44; $size++)
                                        <span class="size-option px-2 py-1 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors" data-size="{{ $size }}" data-product-id="{{ $product->id }}">{{ $size }}</span>
                                    @endfor
                                </div>
                            @elseif($categoryName === 'tas')
                                <div class="px-3 py-2 text-xs bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium text-center">
                                    Produk ini tidak memerlukan pilihan ukuran
                                </div>
                            @endif
                        </div>
                        <p class="text-[#FF6B6B] font-bold text-lg mb-4">Rp
                            {{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>
                    <div class="flex gap-2 mt-auto">
                        <button
                            class="flex-[2] bg-[#8B5A2B] hover:bg-[#74512D] text-white font-medium py-2.5 px-5 rounded-lg transition-colors duration-200"
                            onclick="event.stopPropagation(); addToCart({{ $product->id }}, '{{ $product->name }}', {{ $product->price }}, '{{ $product->description }}', '{{ $product->image }}', '{{ $categoryName }}', true)">
                            Beli Sekarang
                        </button>
                        <button
                            class="flex-[1] border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] font-medium py-2.5 px-3 rounded-lg transition-colors duration-200 flex items-center justify-center"
                            onclick="event.stopPropagation(); addToCart({{ $product->id }}, '{{ $product->name }}', {{ $product->price }}, '{{ $product->description }}', '{{ $product->image }}', '{{ $categoryName }}')"
                            title="Tambah ke Keranjang">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l-1.5 6m0 0h9M17 21a2 2 0 100-4 2 2 0 000 4zM9 21a2 2 0 100-4 2 2 0 000 4z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-500">Belum ada produk tersedia.</p>
        @endforelse
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
        let visibleCount = 0;
        productCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category').toLowerCase();

            if (category === 'semua' || cardCategory === category) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Tampilkan pesan jika tidak ada produk
        const noMsg = document.getElementById('no-products-message');
        if (noMsg) {
            if (visibleCount === 0) {
                noMsg.classList.remove('hidden');
            } else {
                noMsg.classList.add('hidden');
            }
        }
    }

    // Function to filter products by size
    function filterBySize(size) {
        const productCards = document.querySelectorAll('.product-card');
        const categoryButtons = document.querySelectorAll('.category-btn');
        
        // Reset category buttons
        categoryButtons.forEach(btn => {
            btn.classList.remove('bg-[#8B5A2B]', 'text-white', 'active');
            btn.classList.add('bg-white', 'text-[#8B5A2B]');
        });

        // Determine category based on size
        let targetCategory = '';
        if (['S', 'M', 'L', 'XL'].includes(size)) {
            targetCategory = 'fashion';
        } else if (['38', '39', '40', '41', '42', '43', '44'].includes(size)) {
            targetCategory = 'alas kaki';
        }

        // Filter products
        productCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category').toLowerCase();
            
            if (targetCategory && cardCategory === targetCategory) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });

        // Update active category button
        if (targetCategory) {
            const targetButton = document.querySelector(`[onclick="filterProducts('${targetCategory}')"]`);
            if (targetButton) {
                targetButton.classList.remove('bg-white', 'text-[#8B5A2B]');
                targetButton.classList.add('bg-[#8B5A2B]', 'text-white', 'active');
            }
        }
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
            
            // Don't change category filter when unselecting size - just unselect the size
        } else {
            // Select the new size
            element.classList.remove('bg-[#F2E7D8]', 'text-[#74512D]');
            element.classList.add('bg-[#8B5A2B]', 'text-white');
            selectedSizes[productId] = selectedSize;
            console.log(`Selected size ${selectedSize} for product ${productId}`);
            
            // Don't filter products by size - just select the size for this product
        }

        // Store in localStorage for persistence
        localStorage.setItem('selectedSizes', JSON.stringify(selectedSizes));
    }

    function goToProductDetail(productId) {
        // Get selected size for this product
        const selectedSize = selectedSizes[productId] || null;

        // Create URL with size parameter and from parameter
        let url = `/produk/${productId}?from=home`;
        if (selectedSize) {
            url += `&size=${selectedSize}`;
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
                const productId = this.getAttribute('data-product-id');
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
</script>

<script>
// Add to cart function
function addToCart(productId, productName, productPrice, productDescription, productImage, categoryName, redirectToCheckout = false) {
    // Get selected size for this product
    const productCard = document.querySelector(`[data-id="${productId}"]`);
    const selectedSizeElement = productCard.querySelector('.size-option.bg-\\[\\#8B5A2B\\]');
    const selectedSize = selectedSizeElement ? selectedSizeElement.dataset.size : '';
    
    // Check if size is required but not selected for fashion and alas kaki categories
    if ((categoryName === 'fashion' || categoryName === 'alas kaki') && !selectedSize) {
        showNotification('Silakan pilih ukuran terlebih dahulu!', 'error');
        return;
    }

    const formData = new FormData();
    formData.append('product_id', productId);
    formData.append('quantity', 1);
    formData.append('size', selectedSize);
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
            updateCartCount();
            if (redirectToCheckout) {
                setTimeout(() => {
                    window.location.href = '/checkout';
                }, 1200);
            }
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

// Show notification function
function showNotification(message, type = 'success') {
    // Remove existing notification if any
    const existingNotification = document.querySelector('.notification');
    if (existingNotification) {
        existingNotification.remove();
    }

    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification fixed top-4 right-4 z-50 px-6 py-3 rounded-lg shadow-lg transition-all duration-300 transform translate-x-full`;
    
    if (type === 'success') {
        notification.className += ' bg-green-500 text-white';
    } else {
        notification.className += ' bg-red-500 text-white';
    }
    
    notification.textContent = message;
    
    // Add to body
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);
    
    // Remove after 3 seconds
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 300);
    }, 3000);
}

// Update cart count function
function updateCartCount() {
    fetch('/cart/count', {
        method: 'GET',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        const cartCountElement = document.getElementById('cart-count');
        if (cartCountElement && data.count !== undefined) {
            cartCountElement.textContent = data.count;
            // Gunakan display:flex agar centering bekerja sesuai kelas flex
            cartCountElement.style.display = data.count > 0 ? 'flex' : 'none';
        }
    })
    .catch(error => {
        console.error('Error updating cart count:', error);
    });
}

// Initialize cart count on page load
document.addEventListener('DOMContentLoaded', function() {
    updateCartCount();
});
</script>
