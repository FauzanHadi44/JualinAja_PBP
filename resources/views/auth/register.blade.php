<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Jualin Aja</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col items-center justify-center py-8">
    <div class="w-full max-w-4xl mx-4 mb-4">
        <nav aria-label="Breadcrumb">
            <ol class="flex items-center gap-1 text-sm text-[#74512D]">
                <li>
                <a href="/" class="block transition-colors text-[#74512D] hover:text-[#8B5A2B]" aria-label="Home">
                    <svg xmlns="http://www.w3.org/2000/svg"class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </a>
                </li>
                <li class="rtl:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </li>
                <li>
                    <a href="/login" class="block transition-colors text-[#8B5A2B] hover:text-[#8B5A2B]">Login </a>
                </li>
                <li class="rtl:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </li>
                <li>
                    <a href="/register" class="block text-[#8B5A2B] font-medium">Register </a>
                </li>
            </ol>
        </nav>
    </div>
    
    <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-4xl w-full mx-4">
        <div class="flex">
            <!-- Left Side - Logo/Brand -->
             <div class="w-1/2 bg-[#F2E7D8] p-8 flex flex-col items-center justify-center">
                 <div class="flex justify-center items-center mb-8">
                    <div class="flex items-center space-x-3 group">
                        <div class="bg-[#F2E7D8] p-3 rounded-xl shadow-lg group-hover:shadow-xl transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-[#74512D]">
                                <path d="M5.223 2.25c-.497 0-.974.198-1.325.55l-1.3 1.298A3.75 3.75 0 0 0 7.5 9.75c.627.47 1.406.75 2.25.75.844 0 1.624-.28 2.25-.75.626.47 1.406.75 2.25.75.844 0 1.623-.28 2.25-.75a3.75 3.75 0 0 0 4.902-5.652l-1.3-1.299a1.875 1.875 0 0 0-1.325-.549H5.223Z" />
                                <path fill-rule="evenodd" d="M3 20.25v-8.755c1.42.674 3.08.673 4.5 0A5.234 5.234 0 0 0 9.75 12c.804 0 1.568-.182 2.25-.506a5.234 5.234 0 0 0 2.25.506c.804 0 1.567-.182 2.25-.506 1.42.674 3.08.675 4.5.001v8.755h.75a.75.75 0 0 1 0 1.5H2.25a.75.75 0 0 1 0-1.5H3Zm3-6a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75v-3Zm8.25-.75a.75.75 0 0 0-.75.75v5.25c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-5.25a.75.75 0 0 0-.75-.75h-3Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h3 class="text-3xl font-bold text-[#74512D] font-serif tracking-wide group-hover:text-[#8B5A2B] transition-colors duration-300">
                                Jualin Aja
                            </h3>
                            <p class="text-sm text-gray-600 font-medium mt-1">Marketplace UMKM Terpercaya</p>
                        </div>
                    </div>
                </div>

                <p class="mx-auto max-w-md text-center leading-relaxed text-gray-500 dark:text-gray-400 pb-20">
                    Dari ide UMKM kecil, menuju bisnis yang besar. Kami bantu Jualin Aja, biar Anda fokus berkreasi.
                </p>

                <div class="text-center md:text-left">
                    <p class="text-sm text-gray-600">
                        © 2024 <span class="font-semibold text-[#74512D]">Jualin Aja</span>. All rights reserved.
                    </p>
                    <p class="text-xs text-gray-500 mt-1">
                        Empowering UMKM across Indonesia
                    </p>
                </div>
             </div>

            <!-- Right Side - Register Form -->
            <div class="w-1/2 p-8">
                <!-- Header -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Daftar Akun</h2>
                    <p class="text-gray-600">Bergabunglah dengan kami!</p>
                </div>
            
            <!-- Register Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input id="password" type="password" name="password" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Register Button -->
                <button type="submit" class="w-full bg-gray-800 text-white py-3 px-4 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors">
                    Daftar
                </button>
            </form>

            <!-- Login Link -->
                 <div class="mt-6 text-center">
                     <p class="text-sm text-gray-600">
                         Sudah punya akun? 
                         <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-500 font-medium">Login di sini</a>
                     </p>
                 </div>
             </div>
         </div>
     </div>

</body>
</html>