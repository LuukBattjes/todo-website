<x-form>
    <div class="h-screen w-screen flex justify-center items-center">
        <form class="flex flex-col bg-red-200 p-10 rounded-lg" action="{{ url('update', $id) }}" method="post">
            @csrf
            <div class="p-3">
                <a href="/">back</a>
            </div>
            <div class="p-3">
                <input class="border" type="text" name="todo" value="{{ $todo->todo }}">
                <button type="submit">submit</button>
            </div>
            <div class="p-3">
                <a href="{{ url('/destroy/' . $todo->id) }}">delete</a>
            </div>
        </form>
    </div>
</x-form>
