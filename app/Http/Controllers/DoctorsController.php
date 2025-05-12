<?php

namespace App\Http\Controllers;


use App\Models\DoctorTranslation;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{

    public function show($slug)
    {
        $locale = app()->getLocale();

        $doctorTranslation = DoctorTranslation::with([
            'doctor.imageSquare',
            'doctor.imageFull',
            'doctor.departments.translations' => function ($query) use ($locale) {
                $query->where('locale', $locale);
            }
        ])
            ->where('full_slug', $slug)
            ->where('locale', $locale)
            ->firstOrFail();

        $doctor = $doctorTranslation->doctor;

        return view('main.doctor-profile', compact('doctorTranslation', 'doctor'));
    }




}
