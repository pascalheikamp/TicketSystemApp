<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;
use function Webmozart\Assert\Tests\StaticAnalysis\string;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('pages.ticket.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'category_id' => ['required'],
            'priority' => ['required']
        ]);
        $id = Auth::user()->id;
        Ticket::create([
            'user_id' => $id,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'priority' => $request->input('priority'),
            'remove_date' => now(),
            'status' => 0
        ]);

        return redirect()->route('student.index');
    }
    public function delete(Request $request) {
//        $id = Auth::tic
//       $ticket = Ticket::find()
    }
}
