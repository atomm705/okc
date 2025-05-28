<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use App\Models\ServicesCategory;
use App\Models\ServicesCategoryTranslation;
use Illuminate\Http\Request;

class ServicesControler extends Controller
{
    public function index()
    {
        return redirect('main.index');
    }

    public function price($slug){

        $categories = ServicesCategory::where('is_visible', true)->get();

        $category_active = ServicesCategoryTranslation::where('slug', $slug)->where('locale', app()->getLocale())->first();

        return view('main.prices', compact('categories', 'category_active'));
    }

    public function prices($slug= 'oftalmologiya' ){

        $categories = ServicesCategory::where('is_visible', true)->get();

        $category_active = ServicesCategoryTranslation::where('slug', $slug)->where('locale', app()->getLocale())->first();

        return view('admin.prices.index', compact('categories', 'category_active'));
    }

    public function edit($slug){
        $category = ServicesCategoryTranslation::where('slug', $slug)->where('locale', app()->getLocale())->first();

        $categories = ArticleCategory::all();

        return view('admin.prices.edit', compact('category', 'categories'));
    }

}
