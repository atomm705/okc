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
use App\Models\BlogArticle;



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
    public function blog(Request $request, ?string $date = null)
    {
        $queryString = $request->input('s'); // поисковый запрос

        $query = \App\Models\BlogArticle::query()
            ->where('is_visible', true)
            ->whereHas('translation', function ($q) use ($queryString) {
                $q->where('locale', app()->getLocale());

                if ($queryString) {
                    $q->where('name', 'like', "%{$queryString}%");
                }
            })
            ->with([
                'translation' => fn($q) => $q->where('locale', app()->getLocale()),
                'translation.image',
                'translation.authorImage',
                'categories.translation' => fn($q) => $q->where('locale', app()->getLocale()),
                'translation.tags',
            ]);

        // Если дата указана и нет поискового запроса — фильтруем по месяцу
        if ($date && !$queryString) {
            if (preg_match('/^\d{4}-\d{2}$/', $date)) {
                $query->whereDate('created_at', 'like', "$date%");
            } else {
                abort(404);
            }
        }

        $articles = $query->latest()->paginate(10);

        $archives = $this->getArchives();
        $recentArticles = $this->getRecentArticles();

        $archiveName = null;
        if ($date && !$queryString) {
            $archiveName = Carbon::createFromFormat('Y-m', $date)->format('F Y');
        }

        return view('main.blog', compact('articles', 'recentArticles', 'archives', 'archiveName', 'date', 'queryString'));
    }

    //функція пошуку за статтею
    public function search($query)
    {
        $locale = app()->getLocale();

        $query = urldecode($query);

        $articles = BlogArticle::query()
            ->where('is_visible', true)
            ->whereHas('translation', function ($q) use ($query, $locale) {
                $q->where('locale', $locale)
                    ->where(function ($q2) use ($query) {
                        $q2->where('name', 'like', "%$query%");
                    });
            })
            ->with([
                'translation' => fn($q) => $q->where('locale', $locale),
                'translation.image',
                'translation.authorImage',
                'categories.translation' => fn($q) => $q->where('locale', $locale),
                'translation.tags',
            ])
            ->latest()
            ->paginate(10);

        $archives = $this->getArchives();
        $recentArticles = $this->getRecentArticles();

        return view('main.blog', compact('articles', 'query', 'archives', 'recentArticles'));
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
        $article = BlogArticle::with([
            'translation' => fn($q) => $q->where('locale', app()->getLocale()),
            'translation.image',
            'translation.authorImage',
            'categories.translation' => fn($q) => $q->where('locale', app()->getLocale()),
            'translation.tags',
        ])->whereHas('translation', fn($q) => $q->where('slug', $slug)->where('locale', app()->getLocale()))
            ->where('is_visible', true)
            ->firstOrFail();

        $translation = $article->translation;

        $archives = $this->getArchives();
        $recentArticles = BlogArticle::with([
            'translation' => fn($q) => $q->where('locale', app()->getLocale()),
            'translation.image',
            'categories.translation' => fn($q) => $q->where('locale', app()->getLocale())
        ])
            ->where('is_visible', true)
            ->where('article_id', '!=', $article->id)
            ->latest()
            ->take(2)
            ->get();

        return view('main.show', compact('article', 'translation', 'archives', 'recentArticles'));
    }

    // фільтрація по категоріям
    public function blog_category(Request $request, $slug)
    {
        $locale = app()->getLocale();
        $query = $request->input('s');

        $categoryTranslation = \App\Models\BlogCategoryTranslation::where('slug', $slug)
            ->where('locale', $locale)
            ->firstOrFail();

        $category = $categoryTranslation->category;

        $articles = $category->articles()
            ->where('is_visible', true)
            ->whereHas('translation', function ($q) use ($locale, $query) {
                $q->where('locale', $locale);

                if ($query) {
                    $q->where('name', 'like', "%$query%");
                }
            })
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

        return view('main.blog', compact('articles', 'categoryTranslation', 'archives', 'recentArticles', 'query'));
    }


    public function blog_category_paginated($slug, $page = 1)
    {
        request()->merge(['page' => $page]);
        return $this->blog_category($slug);
    }

    // фільтрація по тегам
    public function blog_tag(Request $request, $slug)
    {
        $tag = \App\Models\BlogTag::where('slug', $slug)->firstOrFail();
        $locale = app()->getLocale();
        $query = $request->input('s');

        $translationIds = $tag->translations()
            ->where('locale', $locale)
            ->pluck('blog_articles_translations.translation_id');

        $articles = \App\Models\BlogArticle::whereHas('translation', function ($q) use ($translationIds, $query) {
            $q->whereIn('translation_id', $translationIds);

            if ($query) {
                $q->where('name', 'like', "%$query%");
            }
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

        return view('main.blog', compact('articles', 'tag', 'archives', 'recentArticles', 'query'));
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
