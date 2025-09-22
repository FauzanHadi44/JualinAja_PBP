@extends('layouts.master')

@section('title', 'Beranda')

@section('content')
<div class="min-h-100 py-8 px-4 flex items-center justify-center">
    <div class="max-w-7xl mx-auto w-full relative z-10 pt-15">
        <div class="rounded-3xl p-10 mb-2 mt-2 flex flex-col md:flex-row items-center min-h-[500px] relative overflow-hidden transform hover:scale-[1.01] transition-all duration-700 shadow-2xl" 
            style="background: linear-gradient(135deg, #74512D 0%, #8B5A2B 25%, #A0522D 50%, #8B5A2B 75%, #74512D 100%); box-shadow: 0px 25px 50px 0px rgba(116, 81, 45, 0.3), 0px 0px 0px 1px rgba(255, 255, 255, 0.1), inset 0px 1px 0px rgba(255, 255, 255, 0.2);">
            
            <div class="absolute inset-0 bg-gradient-to-r from-[#D4AF37]/10 via-transparent to-[#D4AF37]/10 animate-pulse"></div>
            
            <div class="absolute inset-0 opacity-20">
                <video autoplay muted loop playsinline class="w-full h-full object-cover object-bottom" style="filter: sepia(30%) saturate(150%) hue-rotate(15deg);">
                    <source src="{{ asset('images/hero5.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            
            <div class="absolute inset-0">
                <div class="absolute top-20 left-20 w-3 h-3 bg-[#D4AF37] rounded-full animate-bounce opacity-70" style="animation-delay: 0s;"></div>
                <div class="absolute top-32 right-32 w-2 h-2 bg-[#F4E976] rounded-full animate-bounce opacity-60" style="animation-delay: 1s;"></div>
                <div class="absolute bottom-20 left-32 w-2.5 h-2.5 bg-[#FFD700] rounded-full animate-bounce opacity-80" style="animation-delay: 2s;"></div>
                <div class="absolute bottom-32 right-20 w-2 h-2 bg-[#B8860B] rounded-full animate-bounce opacity-50" style="animation-delay: 3s;"></div>
                <div class="absolute top-1/2 left-20 w-1.5 h-1.5 bg-[#DAA520] rounded-full animate-ping opacity-40" style="animation-delay: 4s;"></div>
                <div class="absolute top-1/3 right-1/4 w-1 h-1 bg-[#F0E68C] rounded-full animate-ping opacity-60" style="animation-delay: 5s;"></div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto my-16">
    <hr class="border-t-2 border-[#8B4513]/40">
</div>

@include('layouts.flashsale')

@include('layouts.produk')

@endsection