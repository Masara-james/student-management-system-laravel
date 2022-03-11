<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $students=Student::all();
        
        //$student=Student::find($id);
        // dd('$student');
        return view('studentlist',compact('students'));
    }

    public function add(Request $request)
    {
         

          return view('students');
     
    }
    public function addstudent(Request $request){
        $student= new Student();
        $student->cne=$request->cne;
        $student->firstName=$request->firstName;
        $student->secondName=$request->secondName;
        $student->age=$request->age;
        $student->speciality=$request->speciality;
        //("$student");

        $student->save();

        return redirect()->back();

    }
    public function delete($id){
        $student=Student::find($id);
        dd($student);
        $student->delete();
        return redirect()->back();

    }
    public function show($id){
        $student=Student::find($id);
        
    }
}
    