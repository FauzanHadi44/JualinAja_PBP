<aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div class="relative flex flex-col flex-1 min-h-0 pt-0 border-r border-amber-700/30 bg-gradient-to-br from-white/95 to-[#F8F5F0]/95;">
        
        <!-- Decorative overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#D4AF37]/5 via-transparent to-[#D4AF37]/5"></div>
        
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto relative z-10">
            <div class="flex-1 px-3 space-y-1">
                <ul class="pb-2 space-y-2">
                    <!-- Dashboard -->
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="flex items-center p-3 text-base text-[#74512D] rounded-lg hover:bg-[#74512D]/20 hover:text-[#8B5A2B] group transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-[#74512D]/30 text-[#8B5A2B] shadow-lg border border-[#74512D]/30' : '' }}">
                            <svg class="w-6 h-6 text-[#74512D] transition duration-75 group-hover:text-[#8B5A2B] {{ request()->routeIs('admin.dashboard') ? 'text-[#8B5A2B]' : '' }}"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3 font-medium" sidebar-toggle-item>Dashboard</span>
                        </a>
                    </li>

                    <!-- Pesanan/Orders -->
                    <li>
                        <a href="{{ route('admin.orders.index') }}"
                            class="flex items-center p-3 text-base text-[#74512D] rounded-lg hover:bg-[#74512D]/20 hover:text-[#8B5A2B] group transition-all duration-200 {{ request()->routeIs('admin.orders.index') ? 'bg-[#74512D]/30 text-[#8B5A2B] border-l-2 border-[#74512D]' : '' }}">
                            <svg class="w-6 h-6 text-[#74512D] transition duration-75 group-hover:text-[#8B5A2B]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.586 6L12 2H6z"></path>
                                <path d="M8 12h4a1 1 0 110 2H8a1 1 0 110-2zM8 8h2a1 1 0 110 2H8a1 1 0 110-2z"></path>
                            </svg>
                            <span class="ml-3 font-medium" sidebar-toggle-item>Pesanan</span>
                        </a>
                    </li>

                    <!-- Kelola Produk -->
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-3 text-base text-[#74512D] transition duration-200 rounded-lg group hover:bg-[#74512D]/20 hover:text-[#8B5A2B]"
                            aria-controls="dropdown-products" data-collapse-toggle="dropdown-products">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#74512D] transition duration-75 group-hover:text-[#8B5A2B]"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap font-medium" sidebar-toggle-item>Kelola Produk</span>
                            <svg sidebar-toggle-item class="w-5 h-5 text-[#74512D] group-hover:text-[#8B5A2B]" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-products" class="space-y-2 py-2 hidden">
                            <li>
                                <a href="{{ route('admin.products.index') }}"
                                    class="text-base text-[#74512D]/80 rounded-lg flex items-center p-2 group hover:bg-[#74512D]/20 hover:text-[#8B5A2B] transition duration-200 pl-11 {{ request()->routeIs('admin.products.index') ? 'bg-[#74512D]/30 text-[#8B5A2B] border-l-2 border-[#74512D]' : '' }}">
                                    <i class="bi bi-list-ul mr-2 text-[#74512D]"></i>
                                    Daftar Produk
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.products.create') }}"
                                    class="text-base text-[#74512D]/80 rounded-lg flex items-center p-2 group hover:bg-[#74512D]/20 hover:text-[#8B5A2B] transition duration-200 pl-11 {{ request()->routeIs('admin.products.create') ? 'bg-[#74512D]/30 text-[#8B5A2B] border-l-2 border-[#74512D]' : '' }}">
                                    <i class="bi bi-plus-circle mr-2 text-[#74512D]"></i>
                                    Tambah Produk
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Kelola Kategori -->
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-3 text-base text-[#74512D] transition duration-200 rounded-lg group hover:bg-[#74512D]/20 hover:text-[#8B5A2B]"
                            aria-controls="dropdown-categories" data-collapse-toggle="dropdown-categories">
                            <svg class="flex-shrink-0 w-6 h-6 text-[#74512D] transition duration-75 group-hover:text-[#8B5A2B]"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap font-medium" sidebar-toggle-item>Kelola Kategori</span>
                            <svg sidebar-toggle-item class="w-5 h-5 text-[#74512D] group-hover:text-[#8B5A2B]" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-categories" class="space-y-2 py-2 hidden">
                            <li>
                                <a href="{{ route('admin.categories.index') }}"
                                    class="text-base text-[#74512D]/80 rounded-lg flex items-center p-2 group hover:bg-[#74512D]/20 hover:text-[#8B5A2B] transition duration-200 pl-11 {{ request()->routeIs('admin.categories.index') ? 'bg-[#74512D]/30 text-[#8B5A2B] border-l-2 border-[#74512D]' : '' }}">
                                    <i class="bi bi-tags mr-2 text-[#74512D]"></i>
                                    Daftar Kategori
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.categories.index') }}#add-category"
                                    class="text-base text-[#74512D]/80 rounded-lg flex items-center p-2 group hover:bg-[#74512D]/20 hover:text-[#8B5A2B] transition duration-200 pl-11">
                                    <i class="bi bi-tag mr-2 text-[#74512D]"></i>
                                    Tambah Kategori
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Laporan -->
                    <li>
                        <a href="#"
                            class="flex items-center p-3 text-base text-[#74512D] rounded-lg hover:bg-[#74512D]/20 hover:text-[#8B5A2B] group transition-all duration-200">
                            <svg class="w-6 h-6 text-[#74512D] transition duration-75 group-hover:text-[#8B5A2B]"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2v1a1 1 0 102 0V3a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 3a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100-2H7a1 1 0 000 2zm3-2a1 1 0 000 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3 font-medium" sidebar-toggle-item>Laporan</span>
                        </a>
                    </li>

                    <!-- Pengaturan -->
                    <li>
                        <a href="#"
                            class="flex items-center p-3 text-base text-[#74512D] rounded-lg hover:bg-[#74512D]/20 hover:text-[#8B5A2B] group transition-all duration-200">
                            <svg class="w-6 h-6 text-[#74512D] transition duration-75 group-hover:text-[#8B5A2B]"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3 font-medium" sidebar-toggle-item>Pengaturan</span>
                        </a>
                    </li>
                </ul>

                <!-- Divider -->
                <div class="pt-4 mt-4 space-y-2 border-t border-[#74512D]/30">
                    <ul class="space-y-2">
                        <!-- Kembali ke Website -->
                        <li>
                            <a href="{{ route('beranda') }}"
                                class="flex items-center p-3 text-base text-[#74512D] rounded-lg hover:bg-[#74512D]/20 hover:text-[#8B5A2B] group transition-all duration-200">
                                <svg class="w-6 h-6 text-[#74512D] transition duration-75 group-hover:text-[#8B5A2B]"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                                <span class="ml-3 font-medium" sidebar-toggle-item>Kembali ke Website</span>
                            </a>
                        </li>

                        <!-- Logout -->
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="flex items-center w-full p-3 text-base text-[#74512D] rounded-lg hover:bg-red-600/30 hover:text-white group transition-all duration-200">
                                    <svg class="w-6 h-6 text-[#74512D] transition duration-75 group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-3 font-medium" sidebar-toggle-item>Logout</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
