<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        return view('pages.student.index');
    }

   /* public function GetStudent(int $studentId) {
        $student = Student::find($studentId)->width();
        //select * from categories where id = categoryid
    }
   */
}
