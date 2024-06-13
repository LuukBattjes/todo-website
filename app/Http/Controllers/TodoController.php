<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\SameSize;

class TodoController extends Controller
{
    //show all todos
    public function todo()
    {
        $todo = new Todo();
        $todos = $todo->all();

        return view('pages.todos', ['todos' => $todos]);
    }

    public function completed()
    {
        $todo = new Todo();
        $todos = $todo->all();

        return view('pages.completed', ['todos' => $todos]);
    }

    //store todo
    public function store(Request $request)
    {
        $todo = new Todo();

        $todo->create([
            'todo' => $request->todo
        ]);
        return redirect('/')->with('message', 'created');
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

    public function complete(Todo $todo)
    {
        $todo->completed = true;
        $todo->save();
        return redirect('/');
    }

    public function decomplete(Todo $todo)
    {
        $todo->completed = false;
        $todo->save();
        return redirect('/completed');
    }
}
