<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $getAlltodos = Todos::query()->get();
        return response()->json([
            'status' => 200,
            'message' => 'Get data all todos',
            'data' => $getAlltodos
        ]);
    }

    public function store(Request $request)
    {
        $postsTodos = new Todos();
        $postsTodos->name_todos = $request->name_todos;
        $postsTodos->description_todos = $request->description_todos;
        $postsTodos->save();
        return response()->json([
            'status' => 200,
            'message' => 'Successfully post data todos',
            'data' => $postsTodos
        ]);
    }
    public function update(Request $request, $id)
    {
        $updatedTodos = Todos::find($id);
        $updatedTodos->name_todos = $request->name_todos;
        $updatedTodos->description_todos = $request->description_todos;
        $updatedTodos->save();
        return response()->json([
            'status' => 200,
            'message' => 'Successfully Update data todos',
            'data' => $updatedTodos
        ]);
    }
    public function destroy($id)
    {
        $deleteTodos = Todos::find($id);
        $deleteTodos->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Successfully delete data todos',
            'data' => $deleteTodos
        ]);
    }
}
