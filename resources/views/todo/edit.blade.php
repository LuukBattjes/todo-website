<form action="{{ url('update', $id) }}" method="post">
    @csrf
    <input type="text" name="todo" value="{{ $todo->todo }}">
    <button type="submit">submit</button>
</form>
