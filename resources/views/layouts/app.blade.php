<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donlight</title>

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    @vite('resources/css/app.css')
</head>
<body class="bg-[#F7FBFF]">

{{-- NAVBAR --}}
<nav class="bg-white px-10 py-4 flex justify-between items-center shadow-sm">
    {{-- LOGO --}}
    <div class="flex items-center gap-3 font-bold text-xl">
        <img src="{{ asset('logo.png') }}" class="w-9 h-9" alt="logo">
        Donlight
    </div>

    {{-- NAV ICONS --}}
    <div class="flex items-center gap-6 text-xl text-gray-700">

        {{-- HOME --}}
        <a href="{{ route('customer.dashboard') }}"
           class="flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-teal-400 to-blue-500 text-white text-base">
            <i class="bi bi-house"></i>
            Home
        </a>

        {{-- ORDER --}}
        <i class="bi bi-receipt cursor-pointer"></i>

        {{-- CART --}}
        <a href="{{ route('customer.cart') }}">
            <i class="bi bi-cart"></i>
        </a>

        {{-- LOCATION --}}
        <i class="bi bi-geo-alt cursor-pointer"></i>

        {{-- PROFILE --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">
                <i class="bi bi-person cursor-pointer"></i>
            </button>
        </form>

    </div>
</nav>

{{-- CONTENT --}}
<main class="px-10 py-8">
    @yield('content')
</main>

</body>
</html>
