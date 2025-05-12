<?php

namespace App\Http\Controllers;


use App\Models\DoctorDepartment;
use App\Models\DoctorDepartmentTranslation;
use App\Models\DoctorTranslation;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DoctorController extends Controller
{

    public function index(){

            $locale = App::getLocale();

            $departments = DoctorDepartment::where('is_visible', true)->get();

            return view('doctors.index', compact('departments'));

    }
    public function show($slug)
    {
        $doctorTranslation = DoctorTranslation::where('full_slug', $slug)->where('locale', app()->getLocale())->first();

        return view('doctors.show', compact('doctorTranslation'));
    }




}
