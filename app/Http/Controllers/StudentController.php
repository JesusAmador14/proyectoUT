<?php

namespace App\Http\Controllers;

use App\Student;
use Exception;
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
        try {
            $students = Student::all();
            return View('students.list', ['students' => $students]);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->professor = $request->professor;
        $student->grade = $request->grade;
        $student->control_number = $request->control_number;
        $student->group = $request->group;
        $status = false;
        try {
            $student->save();
            $status = "Se registró correctamente";
            return redirect("students")->with("status", $status);
        } catch (Exception $e) {
            return redirect("students")->with("status", $status);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($student)
    {
        try {
            $res = Student::where('control_number', $student)->delete();
            $msg = "";
            if ($res == 1) {
                $msg = "Se eliminó correctamente";
                return json_encode($msg);
            }
        } catch (Exception $e) {
            return json_encode($e);
        }
    }
}
