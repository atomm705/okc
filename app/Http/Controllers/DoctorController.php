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
use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\Log;

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
        // Метод store пустий, якщо це очікується
    }

    public function edit($id){
        $doctor = Doctor::with('translations')->where('doctor_id', $id)->firstOrFail();
        return view('admin.doctors.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::where('doctor_id', $id)->firstOrFail();

        if ($request->hasFile('photo_full')) {

            if ($doctor->imageFull && $doctor->imageFull->src) {
                $oldRelativePath = Str::after($doctor->imageFull->src, '/assets/images/uploads/');
                Storage::disk('public')->delete($oldRelativePath);
                $doctor->imageFull->delete();
            }

            $uploadedFile = $request->file('photo_full');
            $relativePath = $uploadedFile->store('doctors', 'public');
            $fullPublicPath = '/assets/images/uploads/' . $relativePath;

            $filename = pathinfo($relativePath, PATHINFO_FILENAME);
            $hash = $filename;

            $newImage = Image::create([
                'src' => $fullPublicPath,
                'hash' => $hash,
            ]);

            $doctor->photo_full_id = $newImage->image_id;
            $doctor->save();
        }

        if ($request->hasFile('photo_square')) {
            if ($doctor->imageSquare && $doctor->imageSquare->src) {
                $oldRelativePath = Str::after($doctor->imageSquare->src, '/assets/images/uploads/');
                Storage::disk('public')->delete($oldRelativePath);
                $doctor->imageSquare->delete();
            }

            $uploadedFile = $request->file('photo_square');
            $relativePath = $uploadedFile->store('doctors', 'public');
            $fullPublicPath = '/assets/images/uploads/' . $relativePath;

            $filename = pathinfo($relativePath, PATHINFO_FILENAME);
            $hash = $filename;

            $newImage = Image::create([
                'src' => $fullPublicPath,
                'hash' => $hash,
            ]);

            $doctor->photo_square_id = $newImage->image_id;
            $doctor->save();
        }

        if ($request->hasFile('sertificates')) {
            $currentCertificates = $doctor->getCertificates();
            $newCertificateIds = [];

            foreach ($currentCertificates as $certificate) {
                $oldRelativePath = Str::after($certificate->src, '/assets/images/uploads/');
                Storage::disk('public')->delete($oldRelativePath);
                $certificate->delete();
            }

            foreach ($request->file('sertificates') as $file) {
                $uploadedFile = $file;
                $relativePath = $uploadedFile->store('doctors/certificates', 'public');
                $fullPublicPath = '/assets/images/uploads/' . $relativePath;

                $filename = pathinfo($relativePath, PATHINFO_FILENAME);
                $hash = $filename;

                $newImage = Image::create([
                    'src' => $fullPublicPath,
                    'hash' => $hash,
                ]);

                $newCertificateIds[] = $newImage->image_id;
            }
            $doctor->certificates = json_encode($newCertificateIds);
            $doctor->save();
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
                    $dataToUpdate[$field] = [''];
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
