<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();

        return view('todos.index', [
            'todos' => $todos
        ]);
    }

    public function store(Request $request)
    {
        $todo = new Todo();
        $todo->create([
            'todo' => $request->todo
        ]);

        return redirect('/');
    }

    public function create()
    {
        return view('todos.create');
    }
}
