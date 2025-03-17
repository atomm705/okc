<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Make_an_appointmentControler extends Controller
{
    public function index()
    {
        return view('main.make_an_appointment');
    }
}
