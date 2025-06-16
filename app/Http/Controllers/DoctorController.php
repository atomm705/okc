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
use Illuminate\Support\Str;

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

    //$doctor = Doctor::where('doctor_id', $id)->first();

    $doctor = Doctor::with('translations')->where('doctor_id', $id)->firstOrFail();

    return view('admin.doctors.edit', compact('doctor'));

}

    /*public function update(Request $request, $id)
    {
        $doctor = Doctor::where('doctor_id', $id)->firstOrFail();


        if ($request->hasFile('photo_full')) {
            $path = $request->file('photo_full')->store('doctors', 'public');
            $doctor->photo_full_id = Image::create(['path' => $path])->id;
        }

        if ($request->hasFile('photo_square')) {
            $path = $request->file('photo_square')->store('doctors', 'public');
            $doctor->photo_square_id = Image::create(['path' => $path])->id;
        }


        if ($request->hasFile('sertificates')) {
            foreach ($request->file('sertificates') as $file) {
                $path = $file->store('doctors/certificates', 'public');
                Image::create([
                    'path' => $path,
                    'model_type' => Doctor::class,
                    'model_id' => $doctor->doctor_id,
                    'type' => 'certificate',
                ]);
            }
        }

        $doctor->position = $request->input('position', 0);
        $doctor->is_visible = $request->has('is_visible');
        $doctor->save();


        foreach (config('app.fallback_locale') as $locale) {
            $first = $request->input("first_name.$locale");
            $second = $request->input("second_name.$locale");
            $middle = $request->input("middle_name.$locale");

            $fullName = trim("$second $first $middle");
            $shortName = trim("$second " . mb_substr($first, 0, 1) . '.' . mb_substr($middle, 0, 1) . '.');

            DoctorTranslation::updateOrCreate(
                ['doctor_id' => $doctor->doctor_id, 'locale' => $locale],
                [
                    'first_name' => $first,
                    'second_name' => $second,
                    'middle_name' => $middle,
                    'full_name' => $fullName,
                    'short_name' => $shortName,
                    'full_slug' => \Str::slug($fullName),
                    'short_slug' => \Str::slug($shortName),
                    'email' => $request->input("email.$locale"),
                    'educations' => $request->input("educations.$locale"),
                    'position_main' => $request->input("position_main.$locale"),
                    'about' => $request->input("about.$locale"),
                    'specialisation' => $request->input("specialisation.$locale"),
                    'courses' => $request->input("courses.$locale"),
                    'associations' => $request->input("associations.$locale"),
                    'procedures' => $request->input("procedures.$locale"),
                    'treatment_of_disease' => $request->input("treatment_of_disease.$locale"),
                    'awards' => $request->input("awards.$locale"),
                    'position_all' => $request->input("position_all.$locale"),
                    'page_seo' => $request->input("page_seo.$locale"),
                ]
            );
        }


        $doctor->departments()->sync($request->input('department_ids', []));

        return redirect()
            ->route('admin.doctor.edit', ['id' => $doctor->doctor_id])
            ->with('success', 'Лікаря успішно оновлено.');
    }*/

    public function update(Request $request, $id)
    {
        $doctor = Doctor::where('doctor_id', $id)->firstOrFail();

        if ($request->hasFile('photo_full')) {
            $path = $request->file('photo_full')->store('doctors', 'public');
            $doctor->photo_full_id = Image::create(['path' => $path])->id;
        }

        if ($request->hasFile('photo_square')) {
            $path = $request->file('photo_square')->store('doctors', 'public');
            $doctor->photo_square_id = Image::create(['path' => $path])->id;
        }

        if ($request->hasFile('sertificates')) {
            foreach ($request->file('sertificates') as $file) {
                $path = $file->store('doctors/certificates', 'public');
                Image::create([
                    'path' => $path,
                    'model_type' => Doctor::class,
                    'model_id' => $doctor->doctor_id,
                    'type' => 'certificate',
                ]);
            }
        }

        $doctor->position = $request->input('position', 0);
        $doctor->is_visible = $request->has('is_visible');
        $doctor->save();

        $jsonFields = [
            'educations',
            'courses',
            'awards',
            'associations',
            'treatment_of_disease',
            'procedures',
            'specialisation'
        ];

        $singleJsonFields = [
            'position_main',
            'position_all'
        ];

        foreach (config('app.fallback_locale') as $locale) {
            $first = $request->input("first_name.$locale");
            $second = $request->input("second_name.$locale");
            $middle = $request->input("middle_name.$locale");

            $fullName = trim("$second $first $middle");

            $shortName = trim("$second " . mb_substr($first, 0, 1) . '.' . mb_substr($middle, 0, 1) . '.');

            $dataToUpdate = [
                'first_name' => $first,
                'second_name' => $second,
                'middle_name' => $middle,
                'full_name' => $fullName,
                'short_name' => $shortName,
                'full_slug' => Str::slug($fullName),
                'short_slug' => Str::slug($shortName),
                'email' => $request->input("email.$locale"),
                'about' => $request->input("about.$locale"),
                'page_seo' => $request->input("page_seo.$locale"),
            ];

            foreach ($jsonFields as $field) {
                $input = $request->input("$field.$locale");
                $dataToUpdate[$field] = array_values(array_filter(explode("\n", $input)));
            }

            foreach ($singleJsonFields as $field) {
                $input = $request->input("$field.$locale");
                $dataToUpdate[$field] = array_values(array_filter([$input]));

                if (empty(trim($input))) {
                    $dataToUpdate[$field] = [];
                }
            }

            DoctorTranslation::updateOrCreate(
                ['doctor_id' => $doctor->doctor_id, 'locale' => $locale],
                $dataToUpdate
            );
        }

        $doctor->departments()->sync($request->input('department_ids', []));

        return redirect()->route('admin.doctor.edit', ['id' => $doctor->doctor_id])->with('success', 'Лікаря успішно оновлено.');
    }


    public function destroy(Request $request){

    }

}
