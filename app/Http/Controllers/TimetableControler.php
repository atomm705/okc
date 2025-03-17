<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimetableControler extends Controller
{
    public function index()
    {
        return view('main.timetable');
    }
}
