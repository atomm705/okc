<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicePagesController extends Controller
{
    public function inektsionnayaterapiya(){

        return view('services.inektsionnaya-terapiya');
    }
    public function plazmoterapiya(){

        return view('services.plazmoterapiya');
    }
    public function rflifting(){

        return view('services.rf-lifting');
    }


}
