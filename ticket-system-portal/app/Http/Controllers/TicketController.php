<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

    public function overview() {
        $tickets  = Ticket::all();
        return view('pages.ticket.overview', compact('tickets'));
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

    public function delete($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect()->route('student.index');
    }

    public function edit($id)
    {
        $ticket = Ticket::find($id);
        return view('pages.ticket.edit', compact('ticket'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'category_id' => ['required'],
            'priority' => ['required']
        ]);
        $ticket = Ticket::find($id);
        $ticket->title = $request->input('title');
        $ticket->description = $request->input('description');
        $ticket->category_id = $request->input('category_id');
        $ticket->priority = $request->input('priority');
        $ticket->update();

        return redirect()->route('student.index');
    }

    public function update_status(Request $request) {

        $ticket = Ticket::find($request->ticket_id);
        $ticket->status = $request->status;
        $ticket->update();
        return response()->json(['success' => 'Status successfully changed']);
    }
    public function filterTicket(Request $request) {
        $query = Ticket::query();
        $categories = Category::all();
    if(empty($request->category)){

    } else {
        $tickets =  $query->where(['category_id' => $request->category])->get();
        return response()->json(['tickets'=>$tickets]);
    }

    $tickets = $query->get();
        return view('pages.dashboard.index', compact('categories', 'tickets'));
    }
}
