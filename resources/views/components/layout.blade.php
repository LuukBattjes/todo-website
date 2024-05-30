<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <nav>
        <ul>
            <li><x-nav-link href="/">Home</x-nav-link></li>
            <li><x-nav-link href="/about">About</x-nav-link></li>
            <li><x-nav-link href="/contact">Contact</x-nav-link></li>
        </ul>
    </nav>
    {{ $slot }}
</body>

</html>
