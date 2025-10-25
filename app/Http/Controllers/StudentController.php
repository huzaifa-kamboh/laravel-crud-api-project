<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Student::create([
        'name' => $request->name,
        'fatherName' => $request->fatherName,
        'email' => $request->email,
        'depart' => $request->depart
    ]);
    return redirect()->route('students.index')->with('success', 'Student added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students = Student::findOrFail($id); // id se student fetch kary ga
        return view('edit', compact('students')); // view mein bhej dy ga
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);

        $student->update([
            'name' => $request->name,
            'fatherName' => $request->fatherName,
            'email' => $request->email,
            'depart' => $request->depart,
        ]);

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
}
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::findOrFail($id); // row fetch
        $students->delete(); // delete

        return redirect()->route('students.index')->with('dlt-success', 'Student deleted successfully!');
    }
}
