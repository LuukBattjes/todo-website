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
        <p>{{ $todo->todo }}</p>
        <a class="text-red-500 ml-1" href="/delete?todo={{ $todo->id }}">delete</a>
    </div>
    @endforeach
</x-layout>
