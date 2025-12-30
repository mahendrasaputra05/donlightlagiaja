<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donlight</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gradient-to-br from-pink-100 via-white to-teal-100">

    {{-- Navbar --}}
    <nav class="fixed top-0 w-full bg-white shadow z-50">
        <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img src="/logo.png" class="w-8 h-8" alt="">
                <span class="font-bold text-lg">Donlight</span>
            </div>

            <div class="ml-auto flex items-center gap-6">
                <i class="bi bi-house text-xl"></i>
                <i class="bi bi-receipt text-xl"></i>
                <i class="bi bi-cart text-xl"></i>

                <button class="bg-gradient-to-r from-pink-400 to-teal-400 text-white px-4 py-2 rounded-full shadow">
                    Profile
                </button>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main class="pt-28 flex justify-center items-center">
        @yield('content')
    </main>

</body>
</html>
