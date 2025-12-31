<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Donlight</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<!-- NAVBAR ADMIN -->
<nav class="bg-white shadow px-8 py-4 flex justify-between items-center">
    <h1 class="font-bold text-xl text-pink-500">Donlight Admin</h1>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="text-sm text-gray-600 hover:text-pink-500">
            Logout
        </button>
    </form>
</nav>

<!-- CONTENT -->
<main class="max-w-6xl mx-auto px-6 py-8">
    @yield('content')
</main>

</body>
</html>
