<div class="flex gap-4">
    <a href="{{ url('/complete/' . $todo->id)}}" class="border p-3 rounded-lg">complete</a>
    <a 
        href="{{ url('/edit/' . $todo->id) }}" 
        class="border p-3 rounded-lg break-words max-w-[30%]">
        {{ $todo->todo }}
    </a>
</div>
