<x-layout>
    <x-slot:heading>
        Completed
    </x-slot:heading>
    @foreach ($todos as $todo)
        @if ($todo->completed == true)
            @include('todo.completed')
        @endif
    @endforeach
</x-layout>
