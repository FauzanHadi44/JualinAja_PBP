@extends('layouts.master')

@section('title', 'Checkout')

@section('content')
<div class="max-w-5xl max-lg:max-w-2xl mx-auto p-4 pt-24">
    <div class="max-w-xl mx-auto bg-white">
        <div class="rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="bg-gradient-to-r from-[#74512D] to-[#8B5A2B] p-6">
                <h1 class="text-xl font-semibold text-[#74512D]">Checkout</h1>
            </div>

            <div class="p-6">
                {{-- Ringkasan Keranjang --}}
                @if(isset($cartItems) && $cartItems->count() > 0)
                <div class="mb-6">
                    <h2 class="text-lg font-semibold text-[#74512D] mb-3">Ringkasan Keranjang</h2>
                    <div class="divide-y divide-gray-200 border border-gray-200 rounded-md">
                        @foreach($cartItems as $item)
                            <div class="flex items-center justify-between p-3">
                                <div>
                                    <p class="text-sm font-medium text-slate-900">{{ $item->product->name }}</p>
                                    <p class="text-xs text-slate-600">Ukuran: {{ $item->size ?? '-' }} • Qty: {{ $item->quantity }}</p>
                                </div>
                                <div class="text-sm font-semibold text-[#74512D]">
                                    Rp{{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-4 grid grid-cols-2 gap-x-4 gap-y-2 text-sm">
                        <div class="text-slate-600">Subtotal</div>
                        <div class="text-right font-medium text-slate-900">Rp{{ number_format($subtotal, 0, ',', '.') }}</div>

                        <div class="text-slate-600">Pengiriman</div>
                        <div class="text-right font-medium text-slate-900">Rp{{ number_format($shipping, 0, ',', '.') }}</div>

                        <div class="text-slate-600">Pajak (10%)</div>
                        <div class="text-right font-medium text-slate-900">Rp{{ number_format($tax, 0, ',', '.') }}</div>

                        <div class="text-slate-900 font-semibold">Total</div>
                        <div class="text-right font-semibold text-[#74512D]">Rp{{ number_format($total, 0, ',', '.') }}</div>
                    </div>
                </div>
                @else
                <div class="mb-6 p-3 bg-yellow-50 border border-yellow-200 rounded-md text-sm text-yellow-800">
                    Keranjang Anda kosong. <a href="{{ route('produk.indexsemua') }}" class="text-[#74512D] hover:text-[#8B5A2B] underline">Lanjutkan belanja</a> untuk menambahkan produk.
                </div>
                @endif

                <form method="POST" action="{{ route('checkout.process') }}" id="checkoutForm">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-slate-900 text-sm font-medium mb-2" for="full_name">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="full_name" name="full_name"
                            class="px-4 py-2.5 bg-white border border-[#D4AF37]/30 text-slate-900 w-full text-sm rounded-md focus:outline-none focus:border-[#74512D] focus:ring-1 focus:ring-[#74512D] @error('full_name') border-red-500 @enderror"
                            placeholder="Budi Budiman" value="{{ old('full_name') }}" required />
                        @error('full_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-slate-900 text-sm font-medium mb-2" for="email">
                            Alamat Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" name="email"
                            class="px-4 py-2.5 bg-white border border-[#D4AF37]/30 text-slate-900 w-full text-sm rounded-md focus:outline-none focus:border-[#74512D] focus:ring-1 focus:ring-[#74512D] @error('email') border-red-500 @enderror"
                            placeholder="budi@email.com" value="{{ old('email') }}" required />
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-slate-900 text-sm font-medium mb-2" for="phone">
                            Telephone <span class="text-red-500">*</span>
                        </label>
                        <input type="tel" id="phone" name="phone"
                            class="px-4 py-2.5 bg-white border border-[#D4AF37]/30 text-slate-900 w-full text-sm rounded-md focus:outline-none focus:border-[#74512D] focus:ring-1 focus:ring-[#74512D] @error('phone') border-red-500 @enderror"
                            placeholder="08776661111" value="{{ old('phone') }}" required />
                        @error('phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-slate-900 text-sm font-medium mb-2" for="province">
                            Provinsi <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="province" name="province"
                            class="px-4 py-2.5 bg-white border border-[#D4AF37]/30 text-slate-900 w-full text-sm rounded-md focus:outline-none focus:border-[#74512D] focus:ring-1 focus:ring-[#74512D] @error('province') border-red-500 @enderror"
                            placeholder="Masukkan Provinsi" value="{{ old('province') }}" required />
                        @error('province')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-slate-900 text-sm font-medium mb-2" for="regency">
                            Kabupaten/Kota <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="regency" name="regency"
                            class="px-4 py-2.5 bg-white border border-[#D4AF37]/30 text-slate-900 w-full text-sm rounded-md focus:outline-none focus:border-[#74512D] focus:ring-1 focus:ring-[#74512D] @error('regency') border-red-500 @enderror"
                            placeholder="Masukkan Kabupaten/Kota" value="{{ old('regency') }}" required />
                        @error('regency')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-slate-900 text-sm font-medium mb-2" for="district">
                            Kecamatan <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="district" name="district"
                            class="px-4 py-2.5 bg-white border border-[#D4AF37]/30 text-slate-900 w-full text-sm rounded-md focus:outline-none focus:border-[#74512D] focus:ring-1 focus:ring-[#74512D] @error('district') border-red-500 @enderror"
                            placeholder="Masukkan Kecamatan" value="{{ old('district') }}" required />
                        @error('district')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-slate-900 text-sm font-medium mb-2" for="village">
                            Kelurahan <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="village" name="village"
                            class="px-4 py-2.5 bg-white border border-[#D4AF37]/30 text-slate-900 w-full text-sm rounded-md focus:outline-none focus:border-[#74512D] focus:ring-1 focus:ring-[#74512D] @error('village') border-red-500 @enderror"
                            placeholder="Masukkan Kelurahan" value="{{ old('village') }}" required />
                        @error('village')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center">
                            <input type="checkbox" id="terms" name="terms" value="on"
                                class="h-4 w-4 text-[#74512D] focus:ring-[#74512D] border-[#D4AF37]/30 rounded" required />
                            <label for="terms" class="ml-2 block text-sm text-slate-900 font-medium">
                                I agree to the <a href="#" class="text-[#74512D] hover:text-[#8B5A2B]">Terms and Conditions</a> <span class="text-red-500">*</span>
                            </label>
                        </div>
                        @error('terms')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col space-y-4">
                        <button type="submit" id="payButton"
                            class="cursor-pointer w-full py-2.5 px-4 rounded-md flex items-center justify-center bg-[#74512D] hover:bg-[#8B5A2B] text-sm text-white font-medium transition-colors disabled:bg-gray-400 disabled:cursor-not-allowed"
                            disabled>
                            Complete Order Rp{{ number_format($total, 0, ',', '.') }}
                        </button>
                        <div id="loadingText" class="flex items-center justify-center text-slate-500 text-sm hidden">
                            <span>Order processing...</span>
                        </div>
                    </div>

                    <!-- Error display container -->
                    <div id="errorContainer" class="mt-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded-md hidden">
                        <ul id="errorList" class="list-disc list-inside text-sm"></ul>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="flex justify-center gap-2 mt-4">
        <img src="https://readymadeui.com/images/visa.webp" class="w-12" alt="Visa" />
        <img src="https://readymadeui.com/images/american-express.webp" class="w-12" alt="American Express" />
        <img src="https://readymadeui.com/images/master.webp" class="w-12" alt="Mastercard" />
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-black/50 backdrop-blur-[2px] flex items-center justify-center z-50 hidden animate-fadeIn">
        <div class="bg-white rounded-lg p-6 max-w-md w-full mx-4">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4 animate-bounceSlow">
                    <svg class="w-8 h-8 text-green-600 animate-scaleIn" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-gray-900 mb-2">Pembayaran & Pesanan Berhasil</h2>
                <p class="text-gray-600 text-center mb-6">{{ __('Pembayaran berhasil! Pesanan Anda telah dibuat dan akan diproses.') }}</p>
                <button id="okButton" class="px-6 py-2 bg-[#74512D] hover:bg-[#8B5A2B] text-white rounded-md font-medium transition-colors">
                    OK
                </button>
            </div>
        </div>
    </div>
</div>

<style>
/* Modal muncul fade-in */
@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.9); }
  to { opacity: 1; transform: scale(1); }
}
.animate-fadeIn {
  animation: fadeIn 0.4s ease-out;
}

/* Ikon melambung pelan */
@keyframes bounceSlow {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-8px); }
}
.animate-bounceSlow {
  animation: bounceSlow 1.2s infinite;
}

/* Centang zoom masuk */
@keyframes scaleIn {
  0% { transform: scale(0); opacity: 0; }
  100% { transform: scale(1); opacity: 1; }
}
.animate-scaleIn {
  animation: scaleIn 0.5s ease-out;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const termsCheckbox = document.getElementById('terms');
        const payButton = document.getElementById('payButton');
        const form = document.getElementById('checkoutForm');
        const loadingText = document.getElementById('loadingText');
        const errorContainer = document.getElementById('errorContainer');
        const errorList = document.getElementById('errorList');
        const successModal = document.getElementById('successModal');
        const okButton = document.getElementById('okButton');

        termsCheckbox.addEventListener('change', function() {
            payButton.disabled = !this.checked;
        });

        // Simple toast notification
        function showNotification(message, type = 'success') {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 px-4 py-3 rounded-lg text-white z-50 shadow-lg ${type === 'success' ? 'bg-green-600' : 'bg-red-600'}`;
            notification.textContent = message;
            document.body.appendChild(notification);
            setTimeout(() => {
                notification.classList.add('opacity-0');
                setTimeout(() => notification.remove(), 300);
            }, 2500);
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            if (!termsCheckbox.checked) {
                alert('Anda harus menyetujui Terms and Conditions untuk melanjutkan.');
                return;
            }

            // Set loading state
            payButton.disabled = true;
            payButton.innerHTML = '<span class="flex items-center"><svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Processing...</span>';
            loadingText.classList.remove('hidden');

            // Hide previous errors
            errorContainer.classList.add('hidden');
            errorList.innerHTML = '';

            // Get form data
            const formData = new FormData(form);

            // Send AJAX request
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (!response.ok) {
                    return response.text().then(text => {
                        try {
                            const err = JSON.parse(text);
                            return Promise.reject(err);
                        } catch (e) {
                            return Promise.reject({ message: text || 'Gagal memproses pesanan. Coba lagi nanti.' });
                        }
                    });
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Show toast + success modal
                    const orderId = data.order_id ? ` #${data.order_id}` : '';
                    showNotification(`Pembayaran dan pesanan${orderId} berhasil!`, 'success');
                    successModal.classList.remove('hidden');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                let message = 'Gagal memproses pesanan. Periksa data dan coba lagi.';
                if (error && error.errors) {
                    Object.keys(error.errors).forEach(key => {
                        const li = document.createElement('li');
                        li.textContent = `${key.replace('_', ' ')}: ${error.errors[key][0]}`;
                        errorList.appendChild(li);
                    });
                    errorContainer.classList.remove('hidden');
                } else if (error && error.message) {
                    message = error.message;
                }
                showNotification(message, 'error');
                // Reset button
                payButton.disabled = false;
                payButton.innerHTML = 'Complete Order Rp{{ number_format($total, 0, ",", ".") }}';
                loadingText.classList.add('hidden');
            });
        });

        okButton.addEventListener('click', function() {
            // Hide the modal
            successModal.classList.add('hidden');
            // Redirect to orders history
            window.location.href = '{{ route("orders.index") }}';
        });
    });
</script>
@endsection