<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use function Webmozart\Assert\Tests\StaticAnalysis\string;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        return view('pages.ticket.create');
    }

    public function store(Request $request): \Response {

        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'category_id' => ['required'],
            'priority' => ['required']
        ]);

        Ticket::create([
           'title' => $request->title,
           'description' => $request->description,
           'category_id' => $request->category_id,
           'priority' => $request->priority
        ]);

        return redirect()->route('student.index');
//        return Ticket::create([
//            'title' => $data['title'],
//            'category_id' => $data ['category_id'],
//            'description' => $data['description'],
//            'priority' => $data['priority']
//        ]);
//        return redirect()->route('student.index');
    }
}
