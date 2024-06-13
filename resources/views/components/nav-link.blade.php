@props(['href', 'active'=>false, ])

<li class="rounded-lg {{ $active ? 'bg-green-100' : 'bg-gray-50' }}">
    <a href="{{ $href }}" class="block w-full h-full p-2 text-black-500">
        {{ $slot }}
    </a>
</li>
