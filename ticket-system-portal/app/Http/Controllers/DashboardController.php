<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Couchbase\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('pages.dashboard.index');
    }
}
