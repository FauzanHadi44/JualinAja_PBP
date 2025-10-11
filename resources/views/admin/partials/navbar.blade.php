<!-- Admin Navbar -->
<nav class="fixed z-30 w-full bg-[#F2E7D8] shadow-lg">
    <div class="px-8 py-3 lg:px-12 lg:pl-12">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                    class="p-2 text-gray-300 rounded cursor-pointer lg:hidden hover:text-white hover:bg-gray-700 focus:bg-gray-700 focus:ring-2 focus:ring-gray-600 transition-all duration-200">
                    <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                
                <!-- Logo dan Judul - Dipindah ke tengah -->
                <div class="flex-1 flex justify-center lg:justify-start">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center group">
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
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <!-- User Profile Dropdown -->
                <div class="relative">
                    <button type="button" class="flex items-center text-sm bg-[#74512D] rounded-full hover:bg-[#8B5A2B] transition-colors duration-200 p-2" 
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <span class="sr-only">Open user menu</span>
                        <div class="w-8 h-8 bg-[#8B5A2B] rounded-full flex items-center justify-center">
                            <i class="bi bi-person-fill text-white"></i>
                        </div>
                        <span class="ml-2 text-white font-medium">{{ auth()->user()->name ?? 'Admin' }}</span>
                        <svg class="w-4 h-4 ml-2 text-white/70" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-[#F2E7D8] divide-y divide-[#E6DACB] rounded shadow" id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-[#3F2A14]" role="none">{{ auth()->user()->name ?? 'Admin' }}</p>
                            <p class="text-sm font-medium text-[#3F2A14] truncate" role="none">{{ auth()->user()->email ?? '' }}</p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="{{ route('beranda') }}" class="block px-4 py-2 text-sm text-[#3F2A14] hover:bg-[#E6DACB]" role="menuitem">
                                    <i class="bi bi-house mr-2"></i>Lihat Website
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" class="block">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-[#3F2A14] hover:bg-[#E6DACB]" role="menuitem">
                                        <i class="bi bi-box-arrow-right mr-2"></i>Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
