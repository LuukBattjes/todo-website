<x-layout>
    <x-slot:heading>
        Todos
    </x-slot:heading>
    
    {{-- create todo --}}
    @include('todo.create')

    {{-- todos --}}
    <div class="flex flex-col gap-3">
        @foreach ($todos as $todo)
            @if ($todo->completed == false)
                @include('todo.todo')
            @endif
        @endforeach
    </div>
</x-layout>
