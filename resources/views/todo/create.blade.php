<form action="/todo" method="POST">
    @csrf
    <input class="border" type="text" name="todo">
    <button type="submit">Add</button>
</form>