@extends('layouts.master')

@section('title', 'Detail Produk')

@section('content')
<div class="min-h-screen py-16 px-4">
    <div class="max-w-7xl mx-auto mt-15">
        <nav aria-label="Breadcrumb" class="mb-8">
            <ol class="flex items-center gap-2 text-sm text-[#74512D]">
                <li>
                    <a href="/" class="flex items-center gap-1 transition-colors text-[#74512D] hover:text-[#8B5A2B] font-medium" aria-label="Home">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span>Beranda</span>
                    </a>
                </li>
                
                @php
                    // Check if coming from product page via URL parameter
                    $fromPage = request()->get('from', 'home');
                @endphp
                
                <!-- Always show Produk breadcrumb -->
                <li class="rtl:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#8B5A2B]/50" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li>
                    @if($fromPage === 'home')
                        <!-- Link to homepage section produk -->
                        <a href="/#produk-kami" class="flex items-center gap-1 transition-colors text-[#74512D] hover:text-[#8B5A2B] font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                            <span>Produk</span>
                        </a>
                    @else
                        <!-- Link to product page -->
                        <a href="/produk" class="flex items-center gap-1 transition-colors text-[#74512D] hover:text-[#8B5A2B] font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                            <span>Produk</span>
                        </a>
                    @endif
                </li>
                
                <li class="rtl:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#8B5A2B]/50" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li>
                    <span class="flex items-center gap-1 text-[#8B5A2B] font-semibold">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        <span>Detail Produk</span>
                    </span>
                </li>
            </ol>
        </nav>

        @include('layouts.viewproduk')
    </div>
</div>
@endsection