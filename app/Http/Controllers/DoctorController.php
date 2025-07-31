<?php

namespace App\Http\Controllers;

use App\Models\NewCategory;
use App\Models\NewDoctor;
use App\Models\NewDoctorDepartment;
use App\Models\NewDoctorSertificate;
use App\Models\NewDoctorTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Spatie\ImageOptimizer\OptimizerChainFactory;

//use Illuminate\Support\Facades\Log;

class DoctorController extends Controller
{

    public function index(){

        $departments = NewCategory::where('is_visible', true)->get();

        return view('doctors.index', compact('departments'));
    }

    public function show($slug)
    {
        $doctor = NewDoctor::where('slug', $slug)
                ->where('is_visible', true)->first();

        if (!$doctor || !$doctor->translation) {
            return redirect()->route('main.index');
        }

        return view('doctors.show', compact('doctor'));
    }

    public function doctors(){
        $departments = NewCategory::where('is_visible', true)->get();

        $department = $departments->first();

        $doctors = NewDoctorDepartment::where('department_id', '1')->where('is_visible', true)->get();

        return view('admin.doctors.index', compact('departments', 'doctors', 'department'));
    }

    public function doctors_list($id){
        $departments = NewCategory::where('is_visible', true)->get();

        $department = NewCategory::find($id);

        $doctors = NewDoctorDepartment::where('department_id', $department->id)->where('is_visible', true)->get();

        return view('admin.doctors.index', compact('departments', 'doctors', 'department'));
    }

    public function create($department_id){
        return view('admin.doctors.create', compact('department_id'));
    }

    public function store(Request $request, $department_id){

        $doctor = new NewDoctor();
        $doctor->slug = \Illuminate\Support\Str::slug($request->second_name_uk .' '. $request->first_name_uk .' ' . $request->middle_name_uk);
        $doctor->is_visible = '1';

        if($request->file('photo_full')){
            $request->validate([
                'photo_full' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            ]);

            $file = $request->file('photo_full');
            $filename = hash('sha256', $file->getClientOriginalName());
            $basename = pathinfo($filename, PATHINFO_FILENAME);
            $directory = public_path('assets/images/uploads/');

            $originalPath = $directory . $filename;
            $file->move($directory, $filename);

            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize($originalPath);

            $manager = new ImageManager(new Driver());
            $image = $manager->read($originalPath);
            $webPath = $directory . $basename. '.webp';
            $image->toWebp()->save($webPath);

            $doctor->photo_full = 'assets/images/uploads/' . $filename;
        }
        if($request->file('photo_square')){
            $request->validate([
                'photo_square' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            ]);

            $file = $request->file('photo_square');
            $filename = hash('sha256', $file->getClientOriginalName());
            $basename = pathinfo($filename, PATHINFO_FILENAME);
            $directory = public_path('assets/images/uploads/');

            $originalPath = $directory . $filename;
            $file->move($directory, $filename);

            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize($originalPath);

            $manager = new ImageManager(new Driver());
            $image = $manager->read($originalPath);
            $webPath = $directory . $basename. '.webp';
            $image->toWebp()->save($webPath);

            $doctor->photo_square = 'assets/images/uploads/' . $filename;
        }

        $doctor->save();

        if ($request->hasFile('sertificates')) {
            $request->validate([
                'sertificates.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            ]);

            $files = $request->file('sertificates');

            foreach ($files as $file) {
                $filename = hash('sha256', $file->getClientOriginalName() . now()) . '.' . $file->getClientOriginalExtension();
                $basename = pathinfo($filename, PATHINFO_FILENAME);
                $directory = public_path('assets/images/uploads/');

                // Переміщення оригіналу
                $originalPath = $directory . $filename;
                $file->move($directory, $filename);

                // Оптимізація
                $optimizerChain = OptimizerChainFactory::create();
                $optimizerChain->optimize($originalPath);

                // Генерація .webp
                $manager = new ImageManager(new Driver());
                $image = $manager->read($originalPath);
                $webPath = $directory . $basename . '.webp';
                $image->toWebp()->save($webPath);

                $sertif = new NewDoctorSertificate();
                $sertif->doctor_id = $doctor->id;
                $sertif->image = 'assets/images/uploads/' . $filename;
                $sertif->save();

            }
        }

        $department = new NewDoctorDepartment();
        $department->department_id = $department_id;
        $department->doctor_id = $doctor->id;

        $data = $request->input('working_hours', []);

        $workingHours = [];

        for ($i = 0; $i < 7; $i++) {
            $start = $data[$i]['start'] ?? null;
            $end = $data[$i]['end'] ?? null;

            if ($start && $end) {
                $workingHours[$i] = $start . '-' . $end;
            } else {
                $workingHours[$i] = null;
            }
        }
        $department->work_hours = json_encode($workingHours, JSON_UNESCAPED_UNICODE);
        $department->is_visible = '1';
        $department->save();

        foreach(config('app.fallback_locale') as $lang){
            $first_name = 'first_name_'.$lang;
            if($request->$first_name){
                $second_name = 'second_name_'.$lang;
                $middle_name = 'middle_name_'.$lang;
                $position_main = 'position_main_'.$lang;
                $position_all = 'position_all_'.$lang;
                $educations = 'educations_'.$lang;
                $courses = 'courses_'.$lang;
                $awards = 'awards_'.$lang;
                $associations = 'associations_'.$lang;
                $treatment_of_disease = 'treatment_of_disease_'.$lang;
                $procudures = 'procudures_'.$lang;
                $specialisations = 'specialisation_'.$lang;
                $about = 'about_'.$lang;
                $seo_title = 'seo_title_'.$lang;
                $seo_description = 'seo_description_'.$lang;
                $seo_keywords = 'seo_keywords_'.$lang;

                $seo = array();
                $translate = new NewDoctorTranslation();
                $translate->doctor_id = $doctor->id;
                $translate->locale = $lang;
                $translate->first_name = $request->$first_name;
                $translate->second_name = $request->$second_name;
                $translate->middle_name = $request->$middle_name;
                $translate->position_main = json_encode(array_map('trim', explode(',', $request->$position_main)), JSON_UNESCAPED_UNICODE);
                $translate->position_all = json_encode(array_map('trim', explode(',', $request->$position_all)), JSON_UNESCAPED_UNICODE);
                $translate->educations = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$educations))), JSON_UNESCAPED_UNICODE);
                $translate->courses = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$courses))), JSON_UNESCAPED_UNICODE);
                $translate->awards = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$awards))), JSON_UNESCAPED_UNICODE);
                $translate->associations = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$associations))), JSON_UNESCAPED_UNICODE);
                $translate->treatment_of_disease = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$treatment_of_disease))), JSON_UNESCAPED_UNICODE);
                $translate->procedures = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$procudures))), JSON_UNESCAPED_UNICODE);
                $translate->specialisations = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$specialisations))), JSON_UNESCAPED_UNICODE);
                $translate->about = $request->$about;

                $seo['title'] = $request->$seo_title;
                $seo['description'] = $request->$seo_description;
                $seo['keywords'] = $request->$seo_keywords;

                $translate->page_seo = json_encode($seo, JSON_UNESCAPED_UNICODE);

                $translate->save();
            }
        }
        return redirect()->route('admin.doctors.list', ['id' => $department_id]);
    }

    public function edit($id){
        $doctor = NewDoctor::findOrFail($id);

        return view('admin.doctors.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $doctor = NewDoctor::findOrFail($id);
        $doctor->is_visible = '1';

        if($request->file('photo_full')){
            $request->validate([
                'photo_full' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            ]);

            $file = $request->file('photo_full');
            $filename = hash('sha256', $file->getClientOriginalName());
            $basename = pathinfo($filename, PATHINFO_FILENAME);
            $directory = public_path('assets/images/uploads/');

            $originalPath = $directory . $filename;
            $file->move($directory, $filename);

            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize($originalPath);

            $manager = new ImageManager(new Driver());
            $image = $manager->read($originalPath);
            $webPath = $directory . $basename. '.webp';
            $image->toWebp()->save($webPath);

            $doctor->photo_full = 'assets/images/uploads/' . $filename;
        }
        if($request->file('photo_square')){
            $request->validate([
                'photo_square' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            ]);

            $file = $request->file('photo_square');
            $filename = hash('sha256', $file->getClientOriginalName());
            $basename = pathinfo($filename, PATHINFO_FILENAME);
            $directory = public_path('assets/images/uploads/');

            $originalPath = $directory . $filename;
            $file->move($directory, $filename);

            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize($originalPath);

            $manager = new ImageManager(new Driver());
            $image = $manager->read($originalPath);
            $webPath = $directory . $basename. '.webp';
            $image->toWebp()->save($webPath);

            $doctor->photo_square = 'assets/images/uploads/' . $filename;
        }

        $doctor->save();

        if ($request->hasFile('sertificates')) {
            $request->validate([
                'sertificates.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            ]);

            $files = $request->file('sertificates');

            foreach ($files as $file) {
                $filename = hash('sha256', $file->getClientOriginalName() . now()) . '.' . $file->getClientOriginalExtension();
                $basename = pathinfo($filename, PATHINFO_FILENAME);
                $directory = public_path('assets/images/uploads/');

                // Переміщення оригіналу
                $originalPath = $directory . $filename;
                $file->move($directory, $filename);

                // Оптимізація
                $optimizerChain = OptimizerChainFactory::create();
                $optimizerChain->optimize($originalPath);

                // Генерація .webp
                $manager = new ImageManager(new Driver());
                $image = $manager->read($originalPath);
                $webPath = $directory . $basename . '.webp';
                $image->toWebp()->save($webPath);

                $sertif = new NewDoctorSertificate();
                $sertif->doctor_id = $doctor->id;
                $sertif->image = 'assets/images/uploads/' . $filename;
                $sertif->save();

            }

        }

        $department = NewDoctorDepartment::where('doctor_id', $id)->first();

        $data = $request->input('working_hours', []);

        $workingHours = [];

        for ($i = 0; $i < 7; $i++) {
            $start = $data[$i]['start'] ?? null;
            $end = $data[$i]['end'] ?? null;

            if ($start && $end) {
                $workingHours[$i] = $start . '-' . $end;
            } else {
                $workingHours[$i] = null;
            }
        }
        $department->work_hours = json_encode($workingHours, JSON_UNESCAPED_UNICODE);
        $department->is_visible = '1';
        $department->save();

        foreach(config('app.fallback_locale') as $lang){
            $first_name = 'first_name_'.$lang;
            if($request->$first_name){
                $second_name = 'second_name_'.$lang;
                $middle_name = 'middle_name_'.$lang;
                $position_main = 'position_main_'.$lang;
                $position_all = 'position_all_'.$lang;
                $educations = 'educations_'.$lang;
                $courses = 'courses_'.$lang;
                $awards = 'awards_'.$lang;
                $associations = 'associations_'.$lang;
                $treatment_of_disease = 'treatment_of_disease_'.$lang;
                $procedures = 'procedures_'.$lang;
                $specialisations = 'specialisation_'.$lang;
                $about = 'about_'.$lang;
                $seo_title = 'seo_title_'.$lang;
                $seo_description = 'seo_description_'.$lang;
                $seo_keywords = 'seo_keywords_'.$lang;

                $seo = array();
                $translate = NewDoctorTranslation::where('doctor_id', $id)->where('locale', $lang)->first();
                if(!$translate){
                    $translate = new NewDoctorTranslation();
                    $translate->doctor_id = $doctor->id;
                    $translate->locale = $lang;
                }
                $translate->first_name = $request->$first_name;
                $translate->second_name = $request->$second_name;
                $translate->middle_name = $request->$middle_name;
                $translate->position_main = json_encode(array_map('trim', explode(',', $request->$position_main)), JSON_UNESCAPED_UNICODE);
                $translate->position_all = json_encode(array_map('trim', explode(',', $request->$position_all)), JSON_UNESCAPED_UNICODE);
                $translate->educations = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$educations))), JSON_UNESCAPED_UNICODE);
                $translate->courses = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$courses))), JSON_UNESCAPED_UNICODE);
                $translate->awards = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$awards))), JSON_UNESCAPED_UNICODE);
                $translate->associations = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$associations))), JSON_UNESCAPED_UNICODE);
                $translate->treatment_of_disease = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$treatment_of_disease))), JSON_UNESCAPED_UNICODE);
                $translate->procedures = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$procedures))), JSON_UNESCAPED_UNICODE);
                $translate->specialisations = json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->$specialisations))), JSON_UNESCAPED_UNICODE);
                $translate->about = $request->$about;

                $seo['title'] = $request->$seo_title;
                $seo['description'] = $request->$seo_description;
                $seo['keywords'] = $request->$seo_keywords;

                $translate->page_seo = json_encode($seo, JSON_UNESCAPED_UNICODE);

                $translate->save();
            }
        }
        return redirect()->route('admin.doctors.list', ['id' => $department->department_id]);
    }

    public function destroy(Request $request){

    }

    public function department_add(Request $request){

        $doctor = NewDoctorDepartment::where('department_id', $request->department)->where('doctor_id', $request->doctor)->first();
        if(!$doctor){

            $doctor = new NewDoctorDepartment();
            $doctor->department_id = $request->department;
            $doctor->doctor_id = $request->doctor;
            $doctor->is_visible = '1';
            $data = $request->input('working_hours', []);

            $workingHours = [];

            for ($i = 0; $i < 7; $i++) {
                $start = $data[$i]['start'] ?? null;
                $end = $data[$i]['end'] ?? null;

                if ($start && $end) {
                    $workingHours[$i] = $start . '-' . $end;
                } else {
                    $workingHours[$i] = null;
                }
            }
            $doctor->work_hours = json_encode($workingHours, JSON_UNESCAPED_UNICODE);
            $doctor->save();
        }

        return redirect()->route('admin.doctors.list', ['id' => $request->department]);
    }

    public function search(Request $request){
            $search = $request->q;

            $results = NewDoctor::select('new_doctors.id')
                ->join('new_doctor_translations', function ($join) {
                    $join->on('new_doctors.id', '=', 'new_doctor_translations.doctor_id');
                })
                ->where(function ($query) use ($search) {
                    $query->whereRaw("CONCAT_WS(' ', new_doctor_translations.second_name, new_doctor_translations.first_name, new_doctor_translations.middle_name) LIKE ?", ["%{$search}%"]);
                })
                ->where('new_doctor_translations.locale', app()->getLocale()) // обов'язково
                ->limit(20)
                ->get()
                ->map(function ($doctor) {
                    $fullName = "{$doctor->translation->second_name} {$doctor->translation->first_name} {$doctor->translation->middle_name}";
                    return [
                        'id' => $doctor->id,
                        'name' => trim($fullName)
                    ];
                });

        return response()->json($results);
    }

}
