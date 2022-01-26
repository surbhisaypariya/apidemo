<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $students = Student::all();
        return view('student.show',compact('students'));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('student.create');
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required',
        ]);
        
        $student = new Student();
        $student::create([
            'name' => $request->name,
            'course' => $request->course,
        ]);
        
        return redirect()->route('students.index');
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Student  $student
    * @return \Illuminate\Http\Response
    */
    public function show(Student $student)
    {
        //
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Student  $student
    * @return \Illuminate\Http\Response
    */
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Student  $student
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required',
        ]);
        
        $student->update([
            'name' => $request->get('name'),
            'course' => $request->get('course'),
        ]);
        return redirect()->route('students.index');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Student  $student
    * @return \Illuminate\Http\Response
    */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
