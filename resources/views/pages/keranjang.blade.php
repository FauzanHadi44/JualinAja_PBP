@extends('layouts.master')

@section('title', 'Keranjang')

@section('content')
<div class="max-w-5xl max-lg:max-w-2xl mx-auto p-4 pt-24">
    <div class="mb-4">
        <button id="backButton" onclick="goBack()" class="inline-flex items-center gap-2 px-4 py-2 bg-[#8B5A2B] text-white font-semibold rounded-xl hover:from-[#74512D] hover:to-[#8B5A2B] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 group">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span id="backButtonText">Kembali</span>
        </button>
    </div>
    <h1 class="text-3xl font-semibold text-[#74512D]">Keranjang Belanja</h1>
    <div class="grid lg:grid-cols-3 lg:gap-x-8 gap-x-6 gap-y-8 mt-6 mb-10">
        <div class="lg:col-span-2 space-y-6">
            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-4 rounded">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="bg-red-100 text-red-800 p-4 rounded">{{ session('error') }}</div>
            @endif
            @forelse($cartItems as $item)
                <div class="flex gap-4 bg-white px-4 py-6 rounded-md shadow-sm border border-black-20" data-item-id="{{ $item->id }}" data-price="{{ $item->product->price }}">
                    <div class="flex gap-6 sm:gap-4 max-sm:flex-col">
                        <div class="w-24 h-24 max-sm:w-24 max-sm:h-24 shrink-0">
                            <img src="{{ asset('storage/' . $item->product->image) }}" class="w-full h-full object-contain" />
                        </div>
                        <div class="flex flex-col gap-4">
                            <div>
                                <h3 class="text-sm sm:text-base font-semibold text-slate-900">{{ $item->product->name }}</h3>
                                <p class="text-sm font-medium text-slate-500 mt-2">Price: Rp{{ number_format($item->product->price, 0, ',', '.') }}</p>
                                @if($item->size)
                                    <p class="text-sm font-medium text-slate-500">Size: {{ $item->size }}</p>
                                @endif
                            </div>
                            <div class="mt-auto">
                                <h3 class="text-sm font-semibold text-slate-900 total-price item-total">Total: Rp{{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="ml-auto flex flex-col">
                        <div class="flex items-start gap-4 justify-end">
                            <form method="POST" action="{{ route('cart.remove', $item->id) }}" class="remove-item-form" style="display: inline;">
                                @csrf
                                <button type="submit" class="w-4 h-4 cursor-pointer fill-slate-400 hover:fill-red-600 inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z" data-original="#000000"></path>
                                        <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" data-original="#000000"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <div class="flex items-center gap-3 mt-auto">
                            <form method="POST" action="{{ route('cart.update', $item->id) }}" class="update-qty-form flex items-center gap-3" data-item-id="{{ $item->id }}">
                                @csrf
                                <input type="hidden" name="quantity" class="qty-input" value="{{ $item->quantity }}">
                                <button type="button" class="decrement-btn flex items-center justify-center w-[18px] h-[18px] cursor-pointer bg-[#8B5A2B] hover:bg-[#74512D] text-white outline-none rounded-full transition-colors duration-200" {{ $item->quantity <= 1 ? 'disabled' : '' }}>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-2 fill-white" viewBox="0 0 124 124">
                                        <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z" data-original="#000000"></path>
                                    </svg>
                                </button>
                                <span class="font-semibold text-black leading-[18px] px-3 py-1 rounded text-center min-w-[30px] qty-value">{{ $item->quantity }}</span>
                                <button type="button" class="increment-btn flex items-center justify-center w-[18px] h-[18px] cursor-pointer bg-[#74512D] hover:bg-[#8B5A2B] text-white outline-none rounded-full transition-colors duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-2 fill-white" viewBox="0 0 42 42">
                                        <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224 5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" data-original="#000000"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-slate-500">Keranjang kosong.</p>
            @endforelse
        </div>

        <div class="bg-white rounded-md px-4 py-6 h-max shadow-sm border border-gray-200" id="cartSummary">
            @php
                $subtotal = $cartItems->sum(function($item) {
                    return $item->product->price * $item->quantity;
                });
                $shipping = 15000; // Biaya pengiriman tetap
                $tax = $subtotal * 0.1; // Pajak 10%
                $total = $subtotal + $shipping + $tax;
            @endphp
            <ul class="text-slate-500 font-medium space-y-4">
                <li class="flex flex-wrap gap-4 text-sm">Subtotal <span class="ml-auto font-semibold text-slate-900" id="subtotal" data-summary="subtotal">Rp{{ number_format($subtotal, 0, ',', '.') }}</span></li>
                <li class="flex flex-wrap gap-4 text-sm">Shipping <span class="ml-auto font-semibold text-slate-900" id="shipping" data-summary="shipping">Rp{{ number_format($shipping, 0, ',', '.') }}</span></li>
                <li class="flex flex-wrap gap-4 text-sm">Tax <span class="ml-auto font-semibold text-slate-900" id="tax" data-summary="tax">Rp{{ number_format($tax, 0, ',', '.') }}</span></li>
                <hr class="border-slate-300" />
                <li class="flex flex-wrap gap-4 text-sm font-semibold text-slate-900">Total <span class="ml-auto" id="total" data-summary="total">Rp{{ number_format($total, 0, ',', '.') }}</span></li>
            </ul>
            <div class="mt-8 space-y-4">
                @if($cartItems->count() > 0)
                <a href="{{ route('checkout') }}" class="text-sm px-4 py-2.5 w-full font-medium tracking-wide bg-[#74512D] hover:bg-[#8B5A2B] text-white rounded-md cursor-pointer text-center block">Buy Now</a>
                @else
                <button disabled class="text-sm px-4 py-2.5 w-full font-medium tracking-wide bg-gray-400 text-white rounded-md cursor-not-allowed text-center block" title="Keranjang kosong">Buy Now</button>
                @endif
                <a href="{{ route('produk.indexsemua') }}" class="text-sm px-4 py-2.5 w-full font-medium tracking-wide bg-slate-50 hover:bg-slate-100 text-slate-900 border border-gray-300 rounded-md text-center block">Continue Shopping</a>
            </div>
            <div class="mt-5 flex flex-wrap justify-center gap-4">
                <img src='https://readymadeui.com/images/master.webp' alt="card1" class="w-10 object-contain" />
                <img src='https://readymadeui.com/images/visa.webp' alt="card2" class="w-10 object-contain" />
                <img src='https://readymadeui.com/images/american-express.webp' alt="card3" class="w-10 object-contain" />
            </div>
        </div>
    </div>
</div>

<script>
function goBack() {
    const referrer = document.referrer;
    const currentHost = window.location.host;
    
    if (referrer && referrer.includes(currentHost)) {
        if (referrer.includes('/produk/') || referrer.includes('/viewproduk')) {
            window.location.href = referrer;
        }
        else if (referrer.includes('/beranda') || referrer.includes('/produk') || referrer === `${window.location.protocol}//${currentHost}/`) {
            window.location.href = referrer;
        }
        else {
            window.location.href = '{{ route("beranda") }}';
        }
    } else {
        window.location.href = '{{ route("beranda") }}';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const backButtonText = document.getElementById('backButtonText');
    const referrer = document.referrer;
    const currentHost = window.location.host;
    
    if (referrer && referrer.includes(currentHost)) {
        if (referrer.includes('/produk/') || referrer.includes('/viewproduk')) {
            backButtonText.textContent = 'Kembali ke Produk';
        } else if (referrer.includes('/beranda') || referrer === `${window.location.protocol}//${currentHost}/`) {
            backButtonText.textContent = 'Kembali ke Beranda';
        } else if (referrer.includes('/produk')) {
            backButtonText.textContent = 'Kembali ke Produk';
        } else {
            backButtonText.textContent = 'Kembali ke Beranda';
        }
    } else {
        backButtonText.textContent = 'Kembali ke Beranda';
    }

    const cartCountBadge = document.getElementById('cart-count');

    function formatCurrency(amount) {
        return 'Rp' + amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    }

    function showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 p-4 rounded-lg text-white z-50 ${type === 'success' ? 'bg-green-500' : 'bg-red-500'}`;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.remove();
        }, 3000);
    }

    function updateCartSummary(data) {
        document.getElementById('subtotal').textContent = formatCurrency(data.subtotal);
        document.getElementById('shipping').textContent = formatCurrency(data.shipping);
        document.getElementById('tax').textContent = formatCurrency(data.tax);
        document.getElementById('total').textContent = formatCurrency(data.total);
    }

    function updateCartSummary(cartSummary) {
        const subtotalElement = document.querySelector('[data-summary="subtotal"]');
        if (subtotalElement) {
            subtotalElement.textContent = 'Rp' + cartSummary.subtotal.toLocaleString('id-ID');
        }
        
        const shippingElement = document.querySelector('[data-summary="shipping"]');
        if (shippingElement) {
            shippingElement.textContent = 'Rp' + cartSummary.shipping.toLocaleString('id-ID');
        }
        
        const taxElement = document.querySelector('[data-summary="tax"]');
        if (taxElement) {
            taxElement.textContent = 'Rp' + cartSummary.tax.toLocaleString('id-ID');
        }
        
        const totalElement = document.querySelector('[data-summary="total"]');
        if (totalElement) {
            totalElement.textContent = 'Rp' + cartSummary.total.toLocaleString('id-ID');
        }
    }

    function removeCartItem(itemId) {
        const itemDiv = document.querySelector(`[data-item-id="${itemId}"]`);
        if (itemDiv) {
            itemDiv.style.transition = 'opacity 0.3s ease-out';
            itemDiv.style.opacity = '0';
            
            setTimeout(() => {
                itemDiv.remove();
                const remainingItems = document.querySelectorAll('[data-item-id]');
                if (remainingItems.length === 0) {
                    setTimeout(() => {
                        location.reload(); 
                    }, 500);
                }
            }, 300);
        }
    }

    function updateCartItem(itemId, qty, total) {
        const itemDiv = document.querySelector(`[data-item-id="${itemId}"]`);
        if (itemDiv) {
            const qtySpan = itemDiv.querySelector('.qty-value');
            if (qtySpan) qtySpan.textContent = qty;
            
            const totalPriceElements = itemDiv.querySelectorAll('.item-total');
            totalPriceElements.forEach(element => {
                element.textContent = formatCurrency(total);
            });
            
            const qtyInputs = itemDiv.querySelectorAll('.qty-input');
            qtyInputs.forEach(input => {
                input.value = qty;
            });
        }
    }

    function updateCartCount(count) {
        if (cartCountBadge) {
            cartCountBadge.textContent = count;
            if (count > 0) {
                cartCountBadge.classList.remove('hidden');
            } else {
                cartCountBadge.classList.add('hidden');
            }
        }
    }

    document.querySelectorAll('.remove-item-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(form);
            const action = form.action;

            fetch(action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': formData.get('_token') || (document.querySelector('meta[name="csrf-token"]') ? document.querySelector('meta[name="csrf-token"]').getAttribute('content') : ''),
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
                credentials: 'same-origin',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(data => {
                        const msg = (data && (data.message || data.error)) ? (data.message || data.error) : `HTTP error! status: ${response.status}`;
                        throw new Error(msg);
                    }).catch(() => {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    });
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    const itemId = action.split('/').pop();
                    removeCartItem(itemId);
                    
                    if (data.cartCount !== undefined) {
                        const cartCountElement = document.getElementById('cart-count');
                        if (cartCountElement) {
                            cartCountElement.textContent = data.cartCount;
                            if (data.cartCount > 0) {
                                cartCountElement.style.display = 'flex';
                            } else {
                                cartCountElement.style.display = 'none';
                            }
                        }
                        
                        if (typeof window.updateCartCount === 'function') {
                            window.updateCartCount();
                        }
                    }
                    
                    if (data.cartSummary) {
                        updateCartSummary(data.cartSummary);
                    }
                    
                    showNotification('Item berhasil dihapus dari keranjang', 'success');
                } else {
                    showNotification(data.message || 'Gagal menghapus item dari keranjang', 'error');
                }
            })
            .catch(err => {
                console.error('Error:', err);
                showNotification(err.message || 'Terjadi kesalahan saat menghapus item', 'error');
            });
        });
    });

    document.querySelectorAll('.decrement-btn').forEach(button => {
        button.addEventListener('click', function() {
            const form = button.closest('form');
            const qtyInput = form.querySelector('.qty-input');
            const qtyValue = form.querySelector('.qty-value');
            let currentQty = parseInt(qtyInput.value);
            const itemRoot = form.closest('[data-item-id]');
            const price = itemRoot ? parseInt(itemRoot.getAttribute('data-price')) : null;
            
            if (currentQty > 1) {
                const newQty = currentQty - 1;
                qtyInput.value = newQty;
                qtyValue.textContent = newQty;
                if (price) {
                    const totalPriceElements = itemRoot.querySelectorAll('.item-total');
                    totalPriceElements.forEach(el => {
                        el.textContent = formatCurrency(price * newQty);
                    });
                }
                
                if (newQty <= 1) {
                    button.disabled = true;
                    button.classList.add('opacity-50', 'cursor-not-allowed');
                }
                
                submitUpdateForm(form);
            }
        });
    });

    document.querySelectorAll('.increment-btn').forEach(button => {
        button.addEventListener('click', function() {
            const form = button.closest('form');
            const qtyInput = form.querySelector('.qty-input');
            const qtyValue = form.querySelector('.qty-value');
            const decrementBtn = form.querySelector('.decrement-btn');
            let currentQty = parseInt(qtyInput.value);
            const itemRoot = form.closest('[data-item-id]');
            const price = itemRoot ? parseInt(itemRoot.getAttribute('data-price')) : null;
            
            const newQty = currentQty + 1;
            qtyInput.value = newQty;
            qtyValue.textContent = newQty;
            if (price) {
                const totalPriceElements = itemRoot.querySelectorAll('.item-total');
                totalPriceElements.forEach(el => {
                    el.textContent = formatCurrency(price * newQty);
                });
            }
            
            if (decrementBtn.disabled) {
                decrementBtn.disabled = false;
                decrementBtn.classList.remove('opacity-50', 'cursor-not-allowed');
            }
            
            submitUpdateForm(form);
        });
    });

    // Submit update quantity AJAX
    function submitUpdateForm(form) {
        const formData = new FormData(form);
        const action = form.action;
        fetch(action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': formData.get('_token') || (document.querySelector('meta[name="csrf-token"]') ? document.querySelector('meta[name="csrf-token"]').getAttribute('content') : ''),
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            },
            credentials: 'same-origin',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(data => {
                    const msg = (data && (data.message || data.error)) ? (data.message || data.error) : `HTTP error! status: ${response.status}`;
                    throw new Error(msg);
                }).catch(() => {
                    throw new Error(`HTTP error! status: ${response.status}`);
                });
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                if (data.cartSummary) {
                    updateCartSummary(data.cartSummary);
                }
                
                if (data.itemTotal !== undefined) {
                    const itemId = form.getAttribute('data-item-id');
                    const itemDiv = document.querySelector(`[data-item-id="${itemId}"]`);
                    if (itemDiv) {
                        const totalPriceElements = itemDiv.querySelectorAll('.item-total');
                        totalPriceElements.forEach(element => {
                            element.textContent = formatCurrency(data.itemTotal);
                        });
                    }
                }
                
                if (data.cartCount !== undefined) {
                    const cartCountElement = document.getElementById('cart-count');
                    if (cartCountElement) {
                        cartCountElement.textContent = data.cartCount;
                        if (data.cartCount > 0) {
                            cartCountElement.style.display = 'flex';
                        } else {
                            cartCountElement.style.display = 'none';
                        }
                    }
                    
                    if (typeof window.updateCartCount === 'function') {
                        window.updateCartCount();
                    }
                }
                
                showNotification('Jumlah item berhasil diperbarui', 'success');
            } else {
                showNotification(data.message || 'Gagal memperbarui keranjang', 'error');
            }
        })
        .catch(err => {
            console.error('Error:', err);
            showNotification(err.message || 'Terjadi kesalahan saat memperbarui keranjang', 'error');
        });
    }
});
</script>
@endsection
