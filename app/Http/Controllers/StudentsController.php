<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $getAllUsers = Students::query()->with(['class'])->get();
        return response()->json([
            'status' => 200,
            'message' => 'Get data all students',
            'data' => $getAllUsers
        ]);
    }

    public function store(Request $request)
    {
        $postsStudents = new Students();
        $postsStudents->username = $request->username;
        $postsStudents->save();
        return response()->json([
            'status' => 200,
            'message' => 'Successfully post data students',
            'data' => $postsStudents
        ]);
    }
    public function update(Request $request, $id)
    {
        $updatedStudents = Students::find($id);
        $updatedStudents->username = $request->username;
        $updatedStudents->save();
        return response()->json([
            'status' => 200,
            'message' => 'Successfully Update data students',
            'data' => $updatedStudents
        ]);
    }
    public function destroy($id)
    {
        $delete = Students::find($id);
        $delete->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Successfully delete data students',
            'data' => $delete
        ]);
    }
}
