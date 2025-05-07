<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\DoctorDepartmentTranslation;
use App\Models\DoctorTranslation;
use App\Models\Doctor;
use App\Models\Image;

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

    public function tests()
    {
        $locale = App::getLocale();


        $departments = DoctorDepartmentTranslation::where('locale', $locale)
            ->join('doctors_departments', 'doctors_departments.department_id', '=', 'doctors_departments_translations.department_id')
            ->join('images', 'images.image_id', '=', 'doctors_departments.image_id')
            ->select(
                'doctors_departments_translations.*',
                'images.src as image_src'
            )
            ->get()
            ->keyBy('department_id');


        $doctors = DoctorTranslation::with('doctor.image') // Загружаем картинку с каждым врачом
        ->where('locale', $locale)
            ->join('doctors', 'doctors.doctor_id', '=', 'doctors_translations.doctor_id')
            ->where('doctors.is_visible', true)
            ->select('doctors_translations.*')
            ->get()
            ->keyBy('doctor_id');


        $images = Image::all()->keyBy('image_id');

        return view('services.tests', compact('departments', 'doctors' ,'images'));
    }


    public function liposaktsiya(){

        return view('services.liposaktsiya-ta-liposkulpturuvannya-v-dokart');
    }


}
