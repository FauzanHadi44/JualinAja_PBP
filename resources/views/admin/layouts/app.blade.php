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

<body class="bg-gray-100">

    @include('admin.partials.navbar')
    <div class="flex-1 flex flex-col ">
        <div class="flex pt-16 ml-64">
            @include('admin.partials.sidebar')

            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>

        <!-- Flowbite and template JS (copy to public/vendor/flowbite/js/) -->
        <script src="{{ asset('build/assets/js/index.js') }}"></script>
        <script src="{{ asset('build/assets/js/sidebar.js') }}"></script>
        @stack('scripts')
</body>

</html>
