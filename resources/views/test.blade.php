<x-layout>
    <x-slot:heading>
        <h1 class="text-3xl font-bold underline">
            Test heading!
        </h1>
        @foreach ($fruits as $fruit)
            <h1>{{ $fruit }}</h1>
        @endforeach
        {{ $name }}
    </x-slot:heading>
</x-layout>
