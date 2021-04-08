<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all() ;
        
        return view('student',['students'=>$students,'layout'=>'index']);
    }
    public function create()
    {
      $students = Student::all() ;
      return view('student',['students'=>$students,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student() ;
        $student->cne = $request->input('cne') ;
        $student->firstName = $request->input('firstName') ;
        $student->secondName = $request->input('secondName') ;
        $student->age = $request->input('age') ;
        $student->speciality = $request->input('speciality') ;
        $student->save() ;
        return redirect('/') ;
    }
    public function show($id)
    {
        $student = Student::find($id);
        $students = Student::all() ;
        return view('student',['students'=>$students,'student'=>$student,'layout'=>'show']);

    }
    public function edit($id)
    {
      $student = Student::find($id);
      $students = Student::all() ;
      return view('student',['students'=>$students,'student'=>$student,'layout'=>'edit']);

    }
    public function update(Request $request, $id)
    {
      $student = Student::find($id);
      $student->cne = $request->input('cne') ;
      $student->firstName = $request->input('firstName') ;
      $student->secondName = $request->input('secondName') ;
      $student->age = $request->input('age') ;
      $student->speciality = $request->input('speciality') ;
      $student->save() ;
      return redirect('/') ;
    }

    
    public function destroy($id)
    {
      $student = Student::find($id);
      $student->delete() ;
      return redirect('/') ;
    }
}