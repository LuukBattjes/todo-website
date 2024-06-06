<x-create>
    <form action="/todo" method="POST">
        @csrf        
        <input class="border" type="text" name="todo">
        <button type="submit">submit</button>
    </form>
</x-create>