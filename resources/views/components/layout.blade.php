<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
</head>

<body class="h-screen bg-white flex">
    
    {{-- sidebar --}}
    <div class="bg-gray-50 w-64 h-full rounded-lg">
        <h1 class="text-center mt-4">sidebar</h1>
        <ul class="flex flex-col m-3">
            <x-nav-link href="/" :active="request()->is('/') ? true : false">Todos</x-nav-link>
            <x-nav-link href="/completed" :active="request()->is('completed') ? true : false">Completed</x-nav-link>
        </ul>
    </div>

    {{-- main content --}}
    <div class="h-full w-full flex justify-center overflow-x-hidden bg-red-200">
        <div class="flex flex-col">
            <h1 class="font-bold text-center mt-4">
                {{ $heading }}
            </h1>
            <main class="m-3">
                {{ $slot }}
            </main>
        </div>
    </div>

</body>

</html>
