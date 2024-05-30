@props(['href', 'active'=>false, ])

<li class="{{ $active ? 'bg-white' : 'bg-gray-200' }}">
    <a href="{{ $href }}" class="block w-full h-full p-4 text-gray-500">
        {{ $slot }}
    </a>
</li>
