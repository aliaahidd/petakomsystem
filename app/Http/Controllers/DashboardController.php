<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //FROM LOGIN PAGE TO THIS DASHBOARD PAGE

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function loadDashboard()
    {
        $category = Auth::user()->category;

        if ($category == 'Student') {
            return view('dashboard.Student');
        }
        if ($category == 'Lecturer') {
            return view('dashboard.Lecturer');
        }
        if ($category == 'Committee') {
            return view('dashboard.Committee');
        }
        if ($category == 'Coordinator') {
            return view('dashboard.Coordinator');
        }
        if ($category == 'Hosd') {
            return view('dashboard.Hosd');
        }
        if ($category == 'Dean') {
            return view('dashboard.Dean');
        }
    }
}
