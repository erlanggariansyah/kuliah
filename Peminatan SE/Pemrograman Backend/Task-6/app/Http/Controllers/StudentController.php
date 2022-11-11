<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * GET /api/students
     */
    public function index() : Object {
        $data = [
            'message' => 'get all students.',
            'data' => Student::all()
        ];

        return response()->json($data, 200);
    }

    /**
     * POST /api/students
     */
    public function store (Request $request) : Object {
        $this->validate($request, [
            'nama' => ['required', 'string'],
            'nim' => ['required', 'integer', 'unique:students,nim'],
            'email' => ['required', 'string', 'unique:students,email'],
            'jurusan' => ['required', 'string']
        ]);

        $data = [
            'message' => 'student is created successfully.',
            'data' => Student::create([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ])
        ];

        return response()->json($data, 201);
    }

    /**
     * GET /api/students/{id}
     */
    public function show($id) : Object {
        $student = Student::find($id);
        if (!$student) {
            return response()->json([
                'message' => 'student with this id is not found.'
            ], 404);
        }

        return response()->json([
            'message' => 'get student by id.',
            'data' => $student
        ]);
    }

    /**
     * PUT /api/students/{id}
     */
    public function update (Request $request, $id) : Object {
        $request['id'] = $id;
        $this->validate($request, [
            'id' => ['required', 'exists:students,id'],
            'nama' => ['string'],
            'nim' => ['integer', 'unique:students,nim,' . $id],
            'email' => ['string', 'unique:students,email,' . $id],
            'jurusan' => ['string']
        ]);

        $student = Student::find($id);
        $student->update(
            $request->except(['id'])
        );

        $data = [
            'message' => 'student is updated successfully.',
            'data' => $student->refresh()
        ];

        return response()->json($data, 200);
    }

    /**
     * DELETE /api/students/{id}
     */
    public function delete($id) : Object {
        $student = Student::find($id);
        if (!$student) return response()->json([
            'message' => 'student with this id is not found.'
        ], 404);

        $student->delete();

        return response()->json([
            'message' => 'student is deleted successfully.'   
        ]);
    }
}
