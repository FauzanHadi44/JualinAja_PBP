<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'Dashboard')</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ asset('vendor/flowbite/css/style.css') }}">
</head>

<body class="min-h-screen" style="background:#FDFAF6; position: relative;">
    <!-- Background overlay untuk konsistensi dengan beranda -->
    <div class="fixed inset-0 bg-gradient-to-r from-[#D4AF37]/5 via-transparent to-[#D4AF37]/5 pointer-events-none"></div>
    
    <!-- Decorative elements -->
    <div class="fixed inset-0 pointer-events-none">
        <div class="absolute top-20 left-20 w-3 h-3 bg-[#D4AF37] rounded-full animate-bounce opacity-30" style="animation-delay: 0s;"></div>
        <div class="absolute top-32 right-32 w-2 h-2 bg-[#F4E976] rounded-full animate-bounce opacity-20" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-32 w-2.5 h-2.5 bg-[#FFD700] rounded-full animate-bounce opacity-40" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-32 right-20 w-2 h-2 bg-[#B8860B] rounded-full animate-bounce opacity-25" style="animation-delay: 3s;"></div>
    </div>

    @include('admin.partials.navbar')
    <div class="flex-1 flex flex-col relative z-10">
        <div class="flex pt-16 ml-64">
            @include('admin.partials.sidebar')

            <main class="flex-1 p-8">
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl border border-amber-200/30 p-8 mx-4">
                    @yield('content')
                </div>
            </main>
        </div>

        <!-- Flowbite and template JS (copy to public/vendor/flowbite/js/) -->
        <script src="{{ asset('build/assets/js/index.js') }}"></script>
        <script src="{{ asset('build/assets/js/sidebar.js') }}"></script>
        @stack('scripts')
</body>

</html>
