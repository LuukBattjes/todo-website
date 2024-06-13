<div class="flex">
    <a href="{{ url('/complete/' . $todo->id) }}"
        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Complete
    </a>
    <a class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded"
        href="{{ url('/destroy/' . $todo->id) }}">
        Delete
    </a>
    <a class="ml-1" href="{{ url('/edit/' . $todo->id) }}">
        {{ $todo->todo }}
    </a>
</div>