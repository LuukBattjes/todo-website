<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="h-full bg-white">
    <nav class="flex bg-gray-100">
        <ul class="flex">
            <x-nav-link href="/">Home</x-nav-link>
            <x-nav-link href="/about">About</x-nav-link>
            <x-nav-link href="/contact">Contact</x-nav-link>
        </ul>
    </nav>
    <header class="m-3">
        {{ $heading }}
    </header>
    <hr class="w-full border-t-2 border-gray-300">
    <main class="m-3">
        {{ $slot }}
    </main>
</body>

</html>
