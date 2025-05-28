<?php

namespace App\Http\Controllers;


use App\Models\Doctor;
use App\Models\DoctorDepartment;
use App\Models\DoctorDepartmentTranslation;
use App\Models\DoctorDoctorDepartment;
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

    public function doctors($id = '1'){

        $departments = DoctorDepartment::all();

        $department_active = DoctorDepartment::where('department_id', $id)->first();

        $doctors = DoctorDoctorDepartment::where('department_id', $id)->get();

        return view('admin.doctors.index', compact('departments', 'doctors', 'department_active'));
    }

    public function create($department_id){

        return view('admin.doctors.create', compact('department_id'));
    }

    public function store(Request $request){

    }

    public function edit($id){

        $doctor = Doctor::where('doctor_id', $id)->first();

        return view('admin.doctors.edit', compact('doctor'));
    }

    public function update(Request $request, $id){

    }

    public function destroy(Request $request){

    }




}
