<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::all();

        return response()->json([
            'fio' => $student,
            'kurs' => $student,
            'gruppa' => $student,
            'address' => $student,
            'tel' => $student,
            'email' => $student
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Student::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Student Was Created Successfully!',
            'student' => $student
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Student Was Updated Successfully!',
            'student' => $student
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json([
            'status'=> true,
            'message' => 'Student was Deleted Successfully!',
    
        ], 200);
    }
}

