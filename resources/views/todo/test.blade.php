<form action="/save/{{ $todo }}" method="POST">
    @csrf
    <input type="text" value="{{ $todo }}">
</form>