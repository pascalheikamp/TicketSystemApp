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



//    public function index(Request $request)
//    {
//        if ($request->ajax()) {
//            $data = User::select('*');
//            return Datatables::of($data)
//                ->addIndexColumn()
//                ->addColumn('status', function($row){
//                    if($row->status){
//                        return '<span class="badge badge-primary">Active</span>';
//                    }else{
//                        return '<span class="badge badge-danger">Deactive</span>';
//                    }
//                })
//                ->filter(function ($instance) use ($request) {
//                    if ($request->get('status') == '0' || $request->get('status') == '1') {
//                        $instance->where('status', $request->get('status'));
//                    }
//                    if (!empty($request->get('search'))) {
//                        $instance->where(function($w) use($request){
//                            $search = $request->get('search');
//                            $w->orWhere('name', 'LIKE', "%$search%")
//                                ->orWhere('email', 'LIKE', "%$search%");
//                        });
//                    }
//                })
//                ->rawColumns(['status'])
//                ->make(true);
//        }
//
//        return view('users');
//    }
}
