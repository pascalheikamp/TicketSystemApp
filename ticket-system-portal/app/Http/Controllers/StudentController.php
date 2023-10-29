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

    public function show_profile() {
        return view('pages.student.profile');
    }

    public function edit_profile() {
        return view('pages.student.edit_profile');
    }

    public function update_profile(Request $request, $id) {
        $request->validate([
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'name' => ['required', 'string'],
            'date_of_birth' => ['required'],
            'email' => ['required']
        ]);
        $ticket = User::find($id);
        $ticket->title = $request->input('title');
        $ticket->description = $request->input('description');
        $ticket->category_id = $request->input('category_id');
        $ticket->priority = $request->input('priority');
        $ticket->update();

        return redirect()->route('student.index');
    }




   /* public function GetStudent(int $studentId) {
        $student = Student::find($studentId)->width();
        //select * from categories where id = categoryid
    }
   */
}
