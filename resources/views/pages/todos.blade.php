<x-layout>
    <x-slot:heading>
        Todos
    </x-slot:heading>

    {{-- create todo --}}
    @include('todo.create')    
    <h1>Todo</h1>
    @foreach ($todos as $todo)
        @if ($todo->completed == false)
            @include('todo.todo')
        @endif
    @endforeach
</x-layout>
