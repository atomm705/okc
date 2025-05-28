<?php

namespace App\Http\Controllers;

use App\Models\BlogArticleTranslation;
use App\Models\DoctorDepartmentTranslation;
use App\Models\DoctorTranslation;
use App\Models\Image;
use App\Models\ServicesCategory;
use App\Models\ServicesCategoryTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Doctor;



class PageController extends Controller
{

    public function index()
    {
        return view('main.index');
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

    public function blog()
    {
        $articles = \App\Models\BlogArticle::query()
            ->where('is_visible', true)
            ->whereHas('translation', fn($q) => $q->where('locale', app()->getLocale()))
            ->with([
                'translation' => fn($q) => $q->where('locale', app()->getLocale()),
                'translation.image',
                'translation.authorImage',
                'categories.translation' => fn($q) => $q->where('locale', app()->getLocale()),
                'translation.tags',
            ])
            ->latest()
            ->paginate(10);

        return view('main.blog', compact('articles'));
    }

    public function blog_show($slug)
    {

        $translation = BlogArticleTranslation::where('slug', $slug)
            ->where('locale', app()->getLocale())
            ->firstOrFail();
        $article = $translation->article;

        return view('main.show', compact('article', 'translation'));

    }

    public function blog_category($slug)
    {
        $locale = app()->getLocale();

        $categoryTranslation = \App\Models\BlogCategoryTranslation::where('slug', $slug)
            ->where('locale', $locale)
            ->firstOrFail();

        $category = $categoryTranslation->category;

        $articles = $category->articles()
            ->where('is_visible', true)
            ->whereHas('translation', fn($q) => $q->where('locale', $locale))
            ->with([
                'translation' => fn($q) => $q->where('locale', $locale),
                'translation.image',
                'translation.authorImage',
                'translation.tags',
            ])
            ->latest()
            ->paginate(10);

        return view('main.blog', compact('articles', 'categoryTranslation'));
    }

    public function blog_tag($slug)
    {
        $tag = \App\Models\BlogTag::where('slug', $slug)->firstOrFail();

        $articles = $tag->articles()
            ->where('is_visible', true)
            ->whereHas('translation', fn($q) => $q->where('locale', app()->getLocale()))
            ->with([
                'translation' => fn($q) => $q->where('locale', app()->getLocale()),
                'translation.image',
                'translation.authorImage',
                'categories.translation' => fn($q) => $q->where('locale', app()->getLocale()),
                'translation.tags',
            ])
            ->latest()
            ->paginate(10);

        return view('main.blog', compact('articles', 'tag'));
    }




    public function timetable($departmentSlug = null)
    {
        $locale = app()->getLocale();


        $allDepartments = DoctorDepartmentTranslation::with([
            'department.doctors' => function ($query) use ($locale) {
                $query->with([
                    'translation' => function ($q) use ($locale) {
                        $q->where('locale', $locale);
                    },
                    'imageSquare',
                ]);
            },
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
        $categories = ServicesCategory::where('is_visible', true)->get();

        $category_active = ServicesCategoryTranslation::where('slug', 'oftalmologiya')->where('locale', app()->getLocale())->first();

        return view('main.prices', compact('categories', 'category_active'));
    }

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
