<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategoryTranslate;
use App\Models\ArticleTranslate;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function category_page($category_slug) {
        $translation = ArticleCategoryTranslate::where('slug', $category_slug)
            ->where('locale', app()->getLocale())
            ->firstOrFail();

        return view('main.services', [
            'category' => $translation,
        ]);
    }

    public function page($category_slug, $slug){
        $translation = ArticleTranslate::where('slug', $slug)
            ->where('locale', app()->getLocale())
            ->firstOrFail();

        return view('main.services_article', [
            'article' => $translation
        ]);
    }

}
