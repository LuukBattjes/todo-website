<form action="/todo" method="POST" class="m-4">
    @csrf
    <input class="border" type="text" name="todo">
    <button type="submit">Add</button>
</form>