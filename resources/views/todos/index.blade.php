<x-layout>
    <x-slot:heading>
        <h1 class="text-3xl font-bold underline">
            Todo heading!
        </h1>
    </x-slot:heading>
    @foreach ($todos as $todo)
        <p>{{ $todo->todo }}</p>
    @endforeach
</x-layout>