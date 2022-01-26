<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use App\Models\Student;

class ApiController extends Controller
{
    public function index()
    {
        return Student::all();
    }
    
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'course' => 'required',
        ]);
        
        return Student::create([
            'name' => request('name'),
            'course' => request('course'),
        ]);
        
    }
    
    public function update(Student $student)
    {
        request()->validate([
            'name' => 'required',
            'course' => 'required',
        ]);
        
        $student = Student::where('id',request('id'))->update([
            'name' => request('name'),
            'course' => request('course'),
        ]);
        return $student;
    }
    
    public function destroy()
    {
        $student = Student::where('id',request('id'))->delete();
        return ['success' => $student  ];
        
    }
    
    public function show()
    {
        $student = Student::where('id',request('id'))->first();
        return $student;    
    }
}
