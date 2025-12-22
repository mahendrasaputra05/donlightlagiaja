<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Donlight')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <div class="flex min-h-screen">
        {{-- Sidebar --}}
        <aside class="w-64 bg-gray-800 text-white p-4">
            <h1 class="text-xl font-bold mb-6">Donlight</h1>
            <ul class="space-y-2">
                <li><a href="/dashboard" class="block hover:bg-gray-700 p-2 rounded">Dashboard</a></li>
                <li><a href="/produk" class="block hover:bg-gray-700 p-2 rounded">Produk</a></li>
                <li><a href="/order" class="block hover:bg-gray-700 p-2 rounded">Order</a></li>
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="w-full text-left hover:bg-red-600 p-2 rounded">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </aside>

        {{-- Content --}}
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>
