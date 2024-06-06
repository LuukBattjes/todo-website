<x-layout>
    <x-slot:heading>
        <h1 class="text-3xl font-bold underline">
            Home heading!
        </h1>
    </x-slot:heading>
    <h1 class="text-3xl font-bold underline">
        Home content!
    </h1>
    <form action="/todo" method="POST">
        @csrf        
        <input class="border" type="text" name="name">
        <input class="border" type="text" name="input">
        <button type="submit">submit</button>
    </form>
</x-layout>
