<?php

namespace App\Http\Controllers;

use App\Models\DoctorDepartmentTranslation;
use App\Models\DoctorTranslation;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class PageController extends Controller
{




    public function index()
    {
        return view('main.index');
    }

    public function team(){

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


        $doctors = DoctorTranslation::with('doctor.image')
            ->where('locale', $locale)
            ->join('doctors', 'doctors.doctor_id', '=', 'doctors_translations.doctor_id')
            ->where('doctors.is_visible', true)
            ->select('doctors_translations.*')
            ->get()
            ->keyBy('doctor_id');


        $images = Image::all()->keyBy('image_id');

        return view('main.team', compact('departments', 'doctors' ,'images'));


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





    // public function timetable($department = null)
    //  {
    //    return view('main.timetable', compact('department'));
    //  }

    public function timetable($departmentSlug = null)
    {
        $locale = app()->getLocale();


        $allDepartments = DoctorDepartmentTranslation::with([
            'department.doctors.translations' => function ($query) use ($locale) {
                $query->where('locale', $locale);
            },
             'department.doctors.imageSquare',
        ])->where('locale', $locale)->get();


        if (!$departmentSlug) {
            $defaultDepartment = $allDepartments->firstWhere('slug', 'oftalmologiya');
            $departmentSlug = $defaultDepartment?->slug;
    }

        $currentDepartment = $allDepartments->firstWhere('slug', $departmentSlug);

        foreach ($allDepartments as $department) {
            $filteredDoctors = [];

            foreach ($department->department->doctors as $doctor) {

                $workHours = json_decode($doctor->pivot->work_hours, true);


                if (empty($workHours) || collect($workHours)->filter()->isEmpty()) {
                    continue;
                }


                $days = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
                $doctorSchedule = [];

                foreach ($days as $i => $day) {
                    $doctorSchedule[] = [
                        'day' => $day,
                        'time' => $workHours[$i] ?? 'нет приёма',
                    ];
                }


                $doctor->schedule = $doctorSchedule;


                $filteredDoctors[] = $doctor;
            }

            $department->department->setRelation('doctors', collect($filteredDoctors));
        }

        return view('main.timetable', [
            'departments' => $allDepartments,
            'currentDepartment' => $currentDepartment,
        ]);
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
