<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the todo.
     */
    public function index()
    {
        $todos = Todo::latest()->get();

        return view('client.todo.index', ['todos' => $todos]);
    }

    /**
     * Store a newly created todo in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'todo_title' => 'required|max:255'
        ]);

        Todo::create($validatedData);

        return back()->with('success', 'Todo created successfully.');
    }


    /**
     * Show the form for editing the specified todo.
     */
    public function edit(Todo $todo)
    {
        return view('client.todo.edit', ['todo' => $todo]);
    }

    /**
     * Update the specified todo in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $validatedData = $request->validate([
            'todo_title' => 'required|max:255'
        ]);

        $todo->update($validatedData);

        return redirect()->route('home')->with('success', 'Todo updated successfully.');
    }

    /**
     * Remove the specified todo from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return back()->with('success', 'Todo completed.');
    }
}
