<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategoryTranslate;
use App\Models\ArticleTranslate;
use App\Models\NewCategory;
use App\Models\NewService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function category_page($category_slug) {
        $category = NewCategory::where('slug', $category_slug)->where('is_visible', true)->first();

        if(!$category){
            abort(404);
        }
        return view('main.services', [
            'category' => $category,
        ]);
    }

    public function page($category_slug, $slug){
        $group = NewService::where('slug', $slug)
            ->whereHas('category', function ($q) use ($category_slug) {
                $q->where('slug', $category_slug);
            })
            ->where('is_visible', true)
            ->first();

        if(!$group){
            abort(404);
        }

        return view('main.services_article', [
            'group' => $group,
        ]);
    }

}
