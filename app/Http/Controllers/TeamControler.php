<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamControler extends Controller
{
    public function index()
    {
        return view('main.team');
    }
}
