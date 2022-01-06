<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        if (auth()->user()->is_admin) {
            $todos = Todo::orderBy('completed')->get();
        } else {
            $todos = auth()->user()->todos()->orderBy('completed')->get();
        }

        return view('todos.create', compact('todos'));
    }

    // public function create()
    // {
    //     $todos = Todo::all();
        
    //     return view('todos.create', compact('todos'));
    // }

    public function store(TodoRequest $request)
    {
        auth()->user()->todos()->create($request->validated());

        return redirect()->back()->with('success', 'Created successfuly...');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Todo $todo)
    {
        if ($todo->completed == 1) {
            $todo->update(['completed' => false]);
        } else {
            $todo->update(['completed' => true]);
        }

        return redirect()->back()->with('success', 'Updated successfuly...');
    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->back()->with('success', 'Deleted successfuly...');
    }
}
