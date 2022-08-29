<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;


class ClassController extends Controller
{
    public function index()
    {
        $getAllClases = Classes::query()->with(['student'])->get();
        return response()->json([
            'status' => 200,
            'message' => 'Get data all class',
            'data' => $getAllClases
        ]);
    }

    public function store(Request $request)
    {
        $postsClasses = new Classes();
        $postsClasses->name_class = $request->name_class;
        $postsClasses->students_id = $request->students_id;
        $postsClasses->save();
        return response()->json([
            'status' => 200,
            'message' => 'Successfully post data class',
            'data' => $postsClasses
        ]);
    }
    public function update(Request $request, $id)
    {
        $updatedClasses = Classes::find($id);
        $updatedClasses->name_class = $request->name_class;
        $updatedClasses->students_id = $request->students_id;
        $updatedClasses->save();
        return response()->json([
            'status' => 200,
            'message' => 'Successfully Update data class',
            'data' => $updatedClasses
        ]);
    }
    public function destroy($id)
    {
        $delete = Classes::find($id);
        $delete->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Successfully delete data class',
            'data' => $delete
        ]);
    }
}
