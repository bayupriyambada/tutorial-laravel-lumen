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
}
