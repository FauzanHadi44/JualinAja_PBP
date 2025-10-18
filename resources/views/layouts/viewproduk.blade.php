<div>
    <div class="grid items-start grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="top-0">
            <div class="overflow-hidden rounded-lg">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                    class="w-full h-auto max-h-[600px] object-cover object-center shadow-lg hover:scale-[1.02] transition-all duration-300" />
            </div>
        </div>
    
        <div class="py-6 px-8 max-lg:max-w-2xl">
            <div>
                <h2 class="text-2xl font-semibold text-slate-900">{{ $product->name }}</h2>
            </div>
    
            <div class="mt-4">
                <div class="flex items-center flex-wrap gap-4">
                    <p class="text-slate-900 text-4xl font-semibold">
                        Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                </div>
            </div>
    
            @php
                // Ambil nama kategori produk (pastikan huruf kecil agar konsisten)
                $categoryName = strtolower($product->category->name ?? ($product['category'] ?? ''));
            @endphp
    
            @if ($categoryName === 'fashion')
                <div class="mt-6">
                    <h3 class="text-lg font-medium text-slate-900">Pilih Ukuran</h3>
                    <div class="flex flex-wrap gap-2 mt-3" id="size-options">
                        @foreach(['S', 'M', 'L', 'XL'] as $size)
                            <button type="button" data-size="{{ $size }}"
                                class="size-btn px-2.5 py-1.5 text-sm bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors">
                                {{ $size }}
                            </button>
                        @endforeach
                    </div>
                </div>
            @elseif ($categoryName === 'sepatu')
                <div class="mt-6">
                    <h3 class="text-lg font-medium text-slate-900">Pilih Ukuran</h3>
                    <div class="flex flex-wrap gap-2 mt-3" id="size-options">
                        @for($size = 38; $size <= 44; $size++)
                            <button type="button" data-size="{{ $size }}"
                                class="size-btn px-2.5 py-1.5 text-sm bg-[#F2E7D8] text-[#74512D] rounded border border-[#D4AF37]/30 font-medium cursor-pointer hover:bg-[#8B5A2B] hover:text-white transition-colors">
                                {{ $size }}
                            </button>
                        @endfor
                    </div>
                </div>
            @elseif ($categoryName === 'tas')
                <div class="mt-6" id="size-options">
                    <div class="bg-[#F2E7D8] border border-[#74512D]/30 rounded-lg p-3">
                        <p class="text-[#74512D] font-medium text-center text-sm">
                            Produk ini tidak memerlukan pilihan ukuran
                        </p>
                    </div>
                </div>
            @endif
            <div class="mt-6">
                <h3 class="text-lg font-medium text-slate-900 mb-3">Jumlah</h3>
                <div class="flex items-center gap-3">
                    <div class="flex items-center border border-[#74512D] rounded-lg">
                        <button type="button" id="decrease-qty" 
                            class="px-2.5 py-1.5 text-[#74512D] hover:bg-[#F2E7D8] transition-colors rounded-l-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                            </svg>
                        </button>
                        <input type="number" id="quantity" value="1" min="1" 
                            class="w-16 px-2 py-1.5 text-center text-sm border-l border-r border-[#74512D] focus:outline-none focus:ring-2 focus:ring-[#8B5A2B] text-slate-900 font-medium">
                        <button type="button" id="increase-qty" 
                            class="px-2.5 py-1.5 text-[#74512D] hover:bg-[#F2E7D8] transition-colors rounded-r-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-8 space-y-4">
                <button type="button" id="add-to-cart-btn"
                    class="w-full px-4 py-2.5 cursor-pointer border border-[#74512D] bg-transparent hover:bg-[#F2E7D8] text-[#74512D] text-sm font-medium rounded-md transition-all duration-200 flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l-1.5 6m0 0h9M17 21a2 2 0 100-4 2 2 0 000 4zM9 21a2 2 0 100-4 2 2 0 000 4z"></path>
                    </svg>
                    Tambah ke Keranjang
                </button>
                <button type="button" id="buy-now-btn"
                    class="w-full px-4 py-2.5 cursor-pointer border border-[#74512D] bg-[#74512D] hover:bg-[#8B5A2B] text-white text-sm font-medium rounded-md transition-all duration-200 flex items-center justify-center gap-2">
                    Beli Sekarang
                </button>
            </div>
    
            <div class="mt-8">
                <div>
                    <h3 class="text-xl font-semibold text-slate-900">Product Description</h3>
                    <p class="text-base text-slate-600 mt-4 leading-relaxed">{{ $product['description'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let selectedSize = null;
    const categoryName = '{{ $categoryName }}';
    
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const urlSelectedSize = urlParams.get('size');

        if (urlSelectedSize) {
            selectedSize = urlSelectedSize;
            const sizeButtons = document.querySelectorAll('.size-btn');
            sizeButtons.forEach(button => {
                if (button.getAttribute('data-size') === urlSelectedSize) {
                    button.classList.remove('bg-[#F2E7D8]', 'text-[#74512D]', 'border-[#D4AF37]/30');
                    button.classList.add('bg-[#8B5A2B]', 'text-white', 'border-[#8B5A2B]');
                }
            });
            
            showSelectedSizeInfo(urlSelectedSize);
        }

        const sizeButtons = document.querySelectorAll('.size-btn');
        sizeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const clickedSize = this.getAttribute('data-size');
                
                const isCurrentlySelected = this.classList.contains('bg-[#8B5A2B]');
                
                sizeButtons.forEach(btn => {
                    btn.classList.remove('bg-[#8B5A2B]', 'text-white', 'border-[#8B5A2B]');
                    btn.classList.add('bg-[#F2E7D8]', 'text-[#74512D]', 'border-[#D4AF37]/30');
                });

                if (isCurrentlySelected) {
                    selectedSize = null;
                    hideSelectedSizeInfo();
                } else {
                    this.classList.remove('bg-[#F2E7D8]', 'text-[#74512D]', 'border-[#D4AF37]/30');
                    this.classList.add('bg-[#8B5A2B]', 'text-white', 'border-[#8B5A2B]');
                    selectedSize = clickedSize;
                    showSelectedSizeInfo(clickedSize);
                }
            });
        });

        const quantityInput = document.getElementById('quantity');
        const decreaseBtn = document.getElementById('decrease-qty');
        const increaseBtn = document.getElementById('increase-qty');

        if (decreaseBtn && increaseBtn && quantityInput) {
            decreaseBtn.addEventListener('click', function(e) {
                e.preventDefault();
                let currentValue = parseInt(quantityInput.value) || 1;
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });

            increaseBtn.addEventListener('click', function(e) {
                e.preventDefault();
                let currentValue = parseInt(quantityInput.value) || 1;
                quantityInput.value = currentValue + 1;
            });

            quantityInput.addEventListener('input', function() {
                let value = parseInt(this.value);
                if (isNaN(value) || value < 1) {
                    this.value = 1;
                }
            });

            quantityInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                }
            });
        }

        const addToCartBtn = document.getElementById('add-to-cart-btn');
        addToCartBtn.addEventListener('click', function() {
            addToCart();
        });

        const buyNowBtn = document.getElementById('buy-now-btn');
        buyNowBtn.addEventListener('click', function() {
            addToCart(true);
        });

        updateCartCount();
    });

    function addToCart(redirectToCart = false) {
        if ((categoryName === 'fashion' || categoryName === 'alas kaki') && !selectedSize) {
            showNotification('Silakan pilih ukuran terlebih dahulu!', 'error');
            return;
        }

        const quantity = parseInt(document.getElementById('quantity').value);
        
        const formData = new FormData();
        formData.append('product_id', '{{ $product->id }}');
        formData.append('quantity', quantity);
        formData.append('size', selectedSize || '');
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
                
                if (redirectToCart) {
                    setTimeout(() => {
                        window.location.href = '/checkout';
                    }, 1500);
                }
            } else {
                if (data.redirect) {
                    showNotification('Anda harus login terlebih dahulu!', 'error');
                    setTimeout(() => {
                        window.location.href = data.redirect;
                    }, 2000);
                } else {
                    showNotification('Anda tidak bisa menambahkan ke keranjang. Anda harus login terlebih dahulu!', 'error');
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showNotification('Terjadi kesalahan saat menambahkan produk!', 'error');
        });
    }

    function showNotification(message, type = 'success') {
        const existingNotification = document.querySelector('.notification');
        if (existingNotification) {
            existingNotification.remove();
        }

        const notification = document.createElement('div');
        notification.className = `notification fixed top-4 right-4 z-50 px-6 py-3 rounded-lg shadow-lg transition-all duration-300 transform translate-x-full`;
        
        if (type === 'success') {
            notification.className += ' bg-green-500 text-white';
        } else {
            notification.className += ' bg-red-500 text-white';
        }
        
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);
        
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }

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
                cartCountElement.style.display = data.count > 0 ? 'flex' : 'none';
            }
        })
            .catch(error => {
                console.error('Error updating cart count:', error);
            });
    }
    
    function showSelectedSizeInfo(size) {
        const existingInfo = document.getElementById('selected-size-info');
        if (existingInfo) {
            existingInfo.remove();
        }
        
        const sizeOptionsContainer = document.getElementById('size-options');
        if (sizeOptionsContainer) {
            const infoDiv = document.createElement('div');
            infoDiv.id = 'selected-size-info';
            infoDiv.className = 'mt-4 p-3 bg-[#8B5A2B]/10 border border-[#8B5A2B]/30 rounded-lg';
            infoDiv.innerHTML = `
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-[#8B5A2B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-[#8B5A2B] font-medium">Ukuran yang dipilih: ${size}</span>
                </div>
            `;
            sizeOptionsContainer.parentNode.appendChild(infoDiv);
        }
    }
    
    function hideSelectedSizeInfo() {
        const existingInfo = document.getElementById('selected-size-info');
        if (existingInfo) {
            existingInfo.remove();
        }
    }
</script>
