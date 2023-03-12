<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function getStudents()
    {
        //comment
        $students = Student::all();
        return view("students", ["students" => $students]);
    }

    public function updateStatus($id)
    {
        $student = Student::find($id);

        if ($student->student_status == 1) {
            $student->student_status = 0;
        } else {
            $student->student_status = 1;
        }

        $student->save();
        return redirect()->back();
    }

}
