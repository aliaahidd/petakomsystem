<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function loadActv()
    {
        return view('activity.ViewActv');
    }

    public function addActv()
    {
        return view('activity.AddActv');
    }

    public function planActv()
    {
        return view('activity.PlanActv');
    }

    public function index()
    {
        return view('activity.RecordActv');
    }
}
