<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Couchbase\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $users = User::all();
        return view('pages.dashboard.index', compact('users'));
    }
}
