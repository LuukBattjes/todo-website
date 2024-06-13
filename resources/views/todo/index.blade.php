<x-layout>
    <x-slot:heading>
        <h1 class="text-3xl font-bold underline">
            Todo heading!
        </h1>
    </x-slot:heading>
    <form action="/todo" method="POST">
        @csrf        
        <input class="border" type="text" name="todo">
        <button type="submit">Add</button>
    </form>
    @foreach ($todos as $todo)
    <div class="flex">
        <a href="{{ url('/edit/' . $todo->id) }}" >{{ $todo->todo }}</a>
        <a class="ml-1 text-red-500" href="{{ url('/destroy/' . $todo->id) }}">Delete</a>
    </div>
    @endforeach
</x-layout>
