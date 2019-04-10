<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Http\Resources\Todo as TodoResource;
use App\Http\Resources\TodoCollection;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Todo::all();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->text = $request->text;
        $todo->completed = false;
        $todo->save();
        return response()->json($todo);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //return Todo::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    // public function update(Request $request)
    {
        $todo = Todo::find($id);
        $todo->completed = $request->completed;
        $todo->text = $request->text;
        $todo->save();

        $todos = ToDo::all();
        return response()->json($todos);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return Todo::all();
    }
}
