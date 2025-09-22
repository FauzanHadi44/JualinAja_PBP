<nav class="border-gray-200 fixed top-0 left-0 right-0 z-50 w-full shadow-md bg-[#F2E7D8]">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse group">
            <div class="flex items-center space-x-2 group">
                <div class="bg-gradient-to-br from-[#74512D] to-[#8B5A2B] p-3 rounded-xl shadow-lg group-hover:shadow-xl transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-[#74512D]">
                        <path d="M5.223 2.25c-.497 0-.974.198-1.325.55l-1.3 1.298A3.75 3.75 0 0 0 7.5 9.75c.627.47 1.406.75 2.25.75.844 0 1.624-.28 2.25-.75.626.47 1.406.75 2.25.75.844 0 1.623-.28 2.25-.75a3.75 3.75 0 0 0 4.902-5.652l-1.3-1.299a1.875 1.875 0 0 0-1.325-.549H5.223Z" />
                        <path fill-rule="evenodd" d="M3 20.25v-8.755c1.42.674 3.08.673 4.5 0A5.234 5.234 0 0 0 9.75 12c.804 0 1.568-.182 2.25-.506a5.234 5.234 0 0 0 2.25.506c.804 0 1.567-.182 2.25-.506 1.42.674 3.08.675 4.5.001v8.755h.75a.75.75 0 0 1 0 1.5H2.25a.75.75 0 0 1 0-1.5H3Zm3-6a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75v-3Zm8.25-.75a.75.75 0 0 0-.75.75v5.25c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-5.25a.75.75 0 0 0-.75-.75h-3Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="self-center whitespace-nowrap text-2xl font-bold text-[#74512D] font-serif tracking-wide group-hover:text-[#8B5A2B] transition-colors duration-300">Jualin Aja</span>
                    <span class="text-xs text-[#74512D]/70 font-medium tracking-wide group-hover:text-[#8B5A2B]/70 transition-colors duration-300">Marketplace UMKM Terpercaya</span>
                </div>
            </div>
        </a>
        <form action="/search" class="flex-1 max-w-lg mx-4">
            <div class="relative flex items-center bg-white rounded-full border-2 border-[#74512D]/20 shadow-lg hover:shadow-xl transition-all duration-300 focus-within:border-[#74512D] focus-within:shadow-xl">
                <input id="search-bar" placeholder="Cari produk disini..." name="q"
                    class="flex-1 px-6 py-3 bg-transparent rounded-full outline-none text-[#74512D] placeholder-[#74512D]/60 font-medium" required="">
                <button type="submit"
                    class="flex items-center justify-center w-12 h-12 bg-[#74512D] hover:bg-[#8B5A2B] text-white rounded-full mr-1 transition-all duration-300 hover:scale-105 active:scale-95">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </button>
            </div>
        </form>
        <div class="flex items-center md:order-2 space-x-2 md:space-x-2 rtl:space-x-reverse">
            <div class="flex items-center gap-3">
                <div class="sm:flex sm:gap-3">
                    <a class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-[#74512D] hover:text-[#74512D] hover:shadow-lg transform transition-all duration-300" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 640 640" class="w-8 h-8">
                            <path fill="#74512D" d="M24 48C10.7 48 0 58.7 0 72C0 85.3 10.7 96 24 96L69.3 96C73.2 96 76.5 98.8 77.2 102.6L129.3 388.9C135.5 423.1 165.3 448 200.1 448L456 448C469.3 448 480 437.3 480 424C480 410.7 469.3 400 456 400L200.1 400C188.5 400 178.6 391.7 176.5 380.3L171.4 352L475 352C505.8 352 532.2 330.1 537.9 299.8L568.9 133.9C572.6 114.2 557.5 96 537.4 96L124.7 96L124.3 94C119.5 67.4 96.3 48 69.2 48L24 48zM208 576C234.5 576 256 554.5 256 528C256 501.5 234.5 480 208 480C181.5 480 160 501.5 160 528C160 554.5 181.5 576 208 576zM432 576C458.5 576 480 554.5 480 528C480 501.5 458.5 480 432 480C405.5 480 384 501.5 384 528C384 554.5 405.5 576 432 576z"/>
                        </svg>
                    </a>
                </div>
                @guest
                    <div class="sm:flex sm:gap-3">
                        <a class="inline-flex items-center justify-center rounded-full border-2 border-[#74512D] bg-[#74512D] px-6 py-2.5 text-sm font-semibold text-white hover:bg-transparent hover:text-[#74512d] hover:border-[#74512d] hover:shadow-lg transform hover:scale-105 transition-all duration-300" href="/login">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            Login
                        </a>
                    </div>
                    <div class="hidden sm:flex">
                        <a class="inline-flex items-center justify-center rounded-full border-2 border-[#74512D] bg-transparent px-6 py-2.5 text-sm font-semibold text-[#74512D] hover:bg-[#74512d] hover:text-white hover:border-transparent hover:shadow-lg transform hover:scale-105 transition-all duration-300" href="/register">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                            </svg>
                            Register
                        </a>
                    </div>
                @else
                    <!-- User Profile Dropdown -->
                    <div class="relative">
                        <button id="user-menu-button" class="flex items-center space-x-2 px-4 py-2 rounded-full border-2 border-[#74512D] bg-[#74512D] text-white hover:bg-transparent hover:text-[#74512D] transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#74512D] focus:ring-offset-2" aria-expanded="false" aria-haspopup="true">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="font-semibold">{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div id="user-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-50">
                            <div class="py-1">
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-200">
                                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    Profil Saya
                                </a>
                                <div class="border-t border-gray-100"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="flex items-center w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors duration-200">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>

<script>
    // Toggle dropdown menu
    document.addEventListener('DOMContentLoaded', function() {
        const userMenuButton = document.getElementById('user-menu-button');
        const userDropdown = document.getElementById('user-dropdown');
        
        if (userMenuButton && userDropdown) {
            userMenuButton.addEventListener('click', function() {
                userDropdown.classList.toggle('hidden');
                const isExpanded = !userDropdown.classList.contains('hidden');
                userMenuButton.setAttribute('aria-expanded', isExpanded);
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!userMenuButton.contains(event.target) && !userDropdown.contains(event.target)) {
                    userDropdown.classList.add('hidden');
                    userMenuButton.setAttribute('aria-expanded', 'false');
                }
            });
        }
    });
</script>
