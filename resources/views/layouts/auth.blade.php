<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donlight</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gradient-to-br from-pink-100 via-white to-teal-100">

    <main class="min-h-screen flex items-center justify-center">
        @yield('content')
    </main>

</body>
</html>
