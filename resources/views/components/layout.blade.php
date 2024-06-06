<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
</head>

<body class="h-full bg-white">
    <nav class="flex bg-gray-200">
        <ul class="flex mt-3">
            <x-nav-link href="/" :active="request()->is('/') ? true : false">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about') ? true : false">About</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact') ? true : false">Contact</x-nav-link>
        </ul>
    </nav>

    <header class="m-3">
        {{ $heading }}
    </header>
    <hr class="w-full border-t-2 border-gray-300">
    <main class="m-3">
        {{ $slot }}
        <x-form>

        </x-form>
    </main>
</body>

</html>
