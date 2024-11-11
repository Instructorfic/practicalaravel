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
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'lastname' => 'required'
        ]);

        Student::create([
            'name' => $request->name,
            'lastname' => $request->lastname

        ]);

        return redirect()->route('students.index')->with('success','Los datos del estudiante se han registrado en la base de datos');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required',
            'lastname'=> 'required'
        ]);

        $student = Student::findOrFail($id);

        $student->update([
            'name' => $request->name,
            'lastname' => $request->lastname
        ]);

        return redirect()->route('students.index')->with('success', 'Los datos del estudiante se han modificado en la base de datos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $student = Student::findOrFail($id);
       $student->delete();
       return redirect()->route('students.index')->with('success','Los datos del estudiante se han eliminado de la base de datos');
    }
}
