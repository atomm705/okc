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
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


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

    // сторінка блогу (start)
    // функція сторінки блогу
    public function blog(?string $date = null)
    {

        $query = \App\Models\BlogArticle::query()
            ->where('is_visible', true)
            ->whereHas('translation', fn($q) => $q->where('locale', app()->getLocale()))
            ->with([
                'translation' => fn($q) => $q->where('locale', app()->getLocale()),
                'translation.image',
                'translation.authorImage',
                'categories.translation' => fn($q) => $q->where('locale', app()->getLocale()),
                'translation.tags',
            ]);

        if ($date) {
            if (preg_match('/^\d{4}-\d{2}$/', $date)) {
                $query->whereDate('created_at', 'like', "$date%");
            } else {
                abort(404);
            }
        }

        $articles = $query->latest()->paginate(10);



        $recentArticles = \App\Models\BlogArticle::query()
            ->where('is_visible', true)
            ->with(['translation'])
            ->latest()
            ->limit(5)
            ->get();

        $archives = DB::table('blog_articles')
            ->select(DB::raw("DATE_FORMAT(created_at, '%Y-%m') as `year_month`"), DB::raw("COUNT(*) as posts_count"))
            ->where('is_visible', 1)
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m')"))
            ->orderBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m')"), 'desc')
            ->get();

        foreach ($archives as $archive) {
            $archive->month_name = Carbon::createFromFormat('Y-m', $archive->year_month)->format('F Y');
        }

        $archiveName = null;
        if ($date) {
            $archiveName = Carbon::createFromFormat('Y-m', $date)->format('F Y');
        }

        return view('main.blog', compact('articles', 'recentArticles', 'archives', 'archiveName', 'date'));
    }

    // функція для фильтрації по місяцям
    private function getArchives()
    {
        $archives = DB::table('blog_articles')
            ->select(DB::raw("DATE_FORMAT(created_at, '%Y-%m') as `year_month`"), DB::raw("COUNT(*) as posts_count"))
            ->where('is_visible', 1)
            ->groupBy('year_month')
            ->orderBy('year_month', 'desc')
            ->get();

        foreach ($archives as $archive) {
            $archive->month_name = Carbon::createFromFormat('Y-m', $archive->year_month)->format('F Y');
        }

        return $archives;
    }

    // функція для фільтрації останіх статтей
    private function getRecentArticles()
    {
        return \App\Models\BlogArticle::query()
            ->where('is_visible', true)
            ->with(['translation'])
            ->latest()
            ->limit(5)
            ->get();
    }

    public function blog_paginated($page = 1)
    {
        request()->merge(['page' => $page]);
        return $this->blog();
    }

    // функція для показу поста
    public function blog_show($slug)
    {

        $translation = BlogArticleTranslation::where('slug', $slug)
            ->where('locale', app()->getLocale())
            ->firstOrFail();
        $article = $translation->article;

        $archives = $this->getArchives();

        $recentArticles = $this->getRecentArticles();

        return view('main.show', compact('article', 'translation', 'archives','recentArticles'));
    }

    // фільтрація по категоріям
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

        $archives = $this->getArchives();

        $recentArticles = $this->getRecentArticles();

        return view('main.blog', compact('articles', 'categoryTranslation', 'archives','recentArticles'));
    }

    public function blog_category_paginated($slug, $page = 1)
    {
        request()->merge(['page' => $page]);
        return $this->blog_category($slug);
    }

    // фільтрація по тегам
    public function blog_tag($slug)
    {
        $tag = \App\Models\BlogTag::where('slug', $slug)->firstOrFail();
        $locale = app()->getLocale();

        $translationIds = $tag->translations()->where('locale', $locale)->pluck('blog_articles_translations.translation_id');

        $articles = \App\Models\BlogArticle::whereHas('translation', function ($q) use ($translationIds) {
            $q->whereIn('translation_id', $translationIds);
        })
            ->where('is_visible', true)
            ->with([
                'translation' => fn($q) => $q->where('locale', app()->getLocale()),
                'translation.image',
                'translation.authorImage',
                'categories.translation' => fn($q) => $q->where('locale', app()->getLocale()),
                'translation.tags',
            ])
            ->latest()
            ->paginate(10);

        $archives = $this->getArchives();

        $recentArticles = $this->getRecentArticles();

        return view('main.blog', compact('articles', 'tag', 'archives','recentArticles'));
    }

    public function blog_tag_paginated($slug, $page = 1)
    {
        request()->merge(['page' => $page]);
        return $this->blog_tag($slug);
    }
    // сторінка блогу (finish)

    // сторінка розкладу
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
