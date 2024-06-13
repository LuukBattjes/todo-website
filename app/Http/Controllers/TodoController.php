<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\SameSize;

class TodoController extends Controller
{
    //show all todos
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();

        return view('todo.index', [
            'todos' => $todos
        ]);
    }

    //store todo
    public function store(Request $request)
    {
        $todo = new Todo();

        $todo->create([
            'todo' => $request->todo
        ]);
        return redirect('/');
    }

    //delete todo
    public function destroy($id)
    {
        $todo = Todo::find($id);
        if ($todo) {
            $todo->delete();
        }
        return redirect('/');
    }

    // update todo
    public function update(Request $request, $id)
    {
        // dd($request->todo, $id);
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();
        return redirect('/');
    }

    // edit todo
    public function edit(Todo $todo)
    {
        return view('todo.edit', ['todo' => $todo, 'id' => $todo->id]);
    }
}
