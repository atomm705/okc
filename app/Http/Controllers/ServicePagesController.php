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

    public function lazernayaepilyatsiya(){

        return view('services.lazernaya-epilyatsiya');
    }

    public function lazernoeomolozhenie(){

        return view('services.lazernoe-omolozhenie');
    }

    public function co2(){

        return view('services.co2');
    }

    public function checkup(){

        return view('services.checkup');
    }

    public function panoptix(){

        return view('services.panoptix');
    }

    public function oklens(){

        return view('services.oklens');
    }


}
