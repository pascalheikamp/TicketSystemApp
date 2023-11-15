<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

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

    public function show_error() {
        return view('pages.error.unauthorized_error');
    }

    public function show_profile() {
        return view('pages.student.profile');
    }

    public function edit_profile($id) {
        $user = User::find($id);
           if($user->id == Auth::user()->id) {
               return view('pages.student.edit_profile', compact('user'));
           }
           else {
               return redirect('student/error/unauthorized')->with('unauthorized', 'You are not authorized to visit this page');
           }
    }

    public function update_profile(Request $request, $id) {
        $request->validate([
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'name' => ['required', 'string'],
            'date_of_birth' => ['required'],
            'address' => ['required', 'string'],
            'email' => ['required']
        ]);
        $user = User::find($id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->name = $request->input('name');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->address = $request->input('address');
        $user->email = $request->input('email');
        $user->update();

        return redirect()->route('student.index');
    }




   /* public function GetStudent(int $studentId) {
        $student = Student::find($studentId)->width();
        //select * from categories where id = categoryid
    }
   */
}
