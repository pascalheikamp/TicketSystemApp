<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        $id = Auth::user()->id;
        $tickets = Ticket::where('user_id', '=', $id)->get();
        return view('pages.student.index', compact('tickets'));
    }




   /* public function GetStudent(int $studentId) {
        $student = Student::find($studentId)->width();
        //select * from categories where id = categoryid
    }
   */
}
