<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index(){
        $students = Student::all();
        return view('student/index',compact('students')); 
    }

    public function show($stud_id){
        $student = Student::findOrFail($stud_id);
        return view('student/show',compact('student'));
    }

    public function create(){
        return view('student/create');
    }

    public function store(Request $request)
    {
        Student::create($request->except('_method', '_token', 'stud_id'));
        return redirect()->to(route('student.index'));
    }

    public function edit($stud_id){
        $student = Student::findOrFail($stud_id);
        return view('student/edit',compact('student'));
    }

    public function update(){

    }

    public function delete(Request $request){
        $stud = Student::findOrFail($request->stud_id);
        $stud->delete();
        return redirect()->to( route('student.index'));
    }

}
