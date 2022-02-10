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
        $student =new Student();
        $student->cne=$request->cne;
        $student->firstName=$request->firstName;
        $student->secondName=$request->secondName;
        $student->age=$request->age;
        $student->speciality=$request->speciality;
        $student->save();
        return view('students',['students'=>$students,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $students= Student::all();
        return view('students',['students'=>$students,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student=Student::find($id);
        $students=Student::all();
        return view('students',['students'=>$students,'layout'=>'show']);
    }

    public function edit($id)
    {
        $student=Student::find($id);
        $students=Student::all();
        return view('students',['students'=>$students,'layout'=>'edit']);

    }

    public function update(Request $request, $id)
    {
        $student= Student::find($id);
        $student->cne=$request->input('cne');
        $student->firstName=$request->input('firstName');
        $student->secondName=$request->input('secondName');
        $student->age=$request->input('age');
        $student->speciality=$request->input('speciality');
        $student->save();
        return redirect('/');
    }

    
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect('/');
    }
}
