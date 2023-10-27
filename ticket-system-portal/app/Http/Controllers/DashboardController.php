<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ticket;
use App\Models\User;
use Couchbase\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        $tickets = Ticket::all();
        $categories = Category::all();
        $users = User::all();
        return view('pages.dashboard.index', compact('users','tickets', 'categories'));
    }

    public function update_status(Request $request) {

        $ticket = Ticket::find($request->ticket_id);
        $ticket->status = $request->status;
        $ticket->update();
        return response()->json(['success' => 'Status successfully changed']);
    }

    public function filter_category() {

    }
}
