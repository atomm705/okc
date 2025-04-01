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

    public function prices()
    {
        return view('main.prices');
    }

    //public function priceCategory($category)
    //{
        //$validCategories = [ 'x-ray', 'dermatologiya', 'oftalmologiya', 'terapevt','povne-obstezhennya-organizmu-sheck-up','khirurgichna-plastika','ginekologiya'];



        //if (!in_array($category, $validCategories)) {
          //  abort(404);
        //}

        //return view('main.prices', compact('category'));

   // }


    public function testimonials(){

        return view('main.testimonials');
    }

    public function telemed(){

        return view('main.telemed');
    }

    public function blepharoplastika(){

        return view('main.blepharoplastika');
    }

    public function plastichnakhururgiya(){

    return view('main.plastichna-khururgiya');
    }











}
