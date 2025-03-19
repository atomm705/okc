<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function team(){

        return view('main.team');
    }

    public function about(){

        return view('main.about');
    }

    public function departments(){

        return view('main.departments');
    }

    public function contacts(){

        return view('main.contacts');
    }

    public function blog(){

        return view('main.blog');
    }


    public function timetable(){

        return view('main.timetable');
    }

    public function prices(){

        return view('main.prices');
    }

    public function testimonials(){

        return view('main.testimonials');
    }

    public function telemed(){

        return view('main.telemed');
    }







}
