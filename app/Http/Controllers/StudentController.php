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
        //
        $students= Student::all();   # select * from student

        return view("students.index",["students"=>$students]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("students.create");

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
//        dd($request);   #returns with data sent in the post

        $request->validate([
           "name"=>"required|min:5",
            "email"=>"required",
            "level"=>"Digits:1"
        ]);
        $name=$request["name"];
        $email=$request["email"];
        $track=$request["track"];
        $level=$request["level"];

        #create function (ORM)
        # Mass assigment
        Student::create([
            "name"=>$name,
            "track"=>$track,
            "email"=>$email,
            "level"=>$level
        ]);
        return redirect("students");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {

        return view("students.show",["student"=>$student]);
//        return redirect($student->path());

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {

        return view("students.edit",["student"=>$student]);

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
        //
//        dd($request,$student);

//        $request->validate([
//            "name"=>"required|min:5",
//            "email"=>"required",
//            "level"=>"Digits:1"
//        ]);
//            $this->validateDate($request);

//        $student->name=$request["name"];
//        $student->email=$request["email"];
//        $student->track=$request["track"];
//        $student->level=$request["level"];
//        $student->save();
            $student->update([
                "name"=>$request["name"],
                "email"=>$request["email"],
                "track"=>$request["track"],
                "level"=>$request["level"],
            ]);

            $student->fill(["name"=>$request["name"]]);

            return redirect($student->path());

//        return redirect(route("student.show",$student));
//        return view("students.show",["student"=>$student]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        //        dd($student);
        $student->delete();
        return back();
    }

    public function validateDate($request){
        $request->validate([
            "name"=>"required|min:5",
            "email"=>"required",
            "level"=>"Digits:1"
        ]);
       # $error
    }
}
