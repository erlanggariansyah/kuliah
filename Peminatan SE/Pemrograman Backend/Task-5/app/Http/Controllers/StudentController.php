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
            'nim' => ['required', 'integer'],
            'email' => ['required', 'string'],
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
}
