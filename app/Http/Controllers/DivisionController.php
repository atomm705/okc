<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use App\Models\Division;
use App\Models\DivisionCategory;
use App\Models\DivisionTranslation;
use App\Models\ServicesCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DivisionController extends Controller
{
    public function index(){

        $divisions = Division::all();

        return view('admin.divisions.index', compact('divisions'));
    }

    public function create(){

        return view('admin.divisions.create');
    }

    public function store(Request $request){

        $division = new Division();
        $division->slug = Str::slug($request->name_uk);
        $division->save();

        foreach(config('app.fallback_locale') as $lang){
            $title = 'name_'.$lang;
            $description = 'description_'.$lang;
            $inner_title = 'inner_title_'.$lang;
            $inner_description = 'inner_description_'.$lang;

            $translate = new DivisionTranslation();
            $translate->division_id = $division->id;
            $translate->locale = $lang;
            $translate->title = $request->$title;
            $translate->description = $request->$description;
            $translate->inner_title = $request->$inner_title;
            $translate->inner_description = $request->$inner_description;

            $translate->save();
        }

        return redirect()->route('admin.divisions');

    }

    public function edit($id){

        $division = Division::find($id);

        $categories = ArticleCategory::where('is_visible', true)->with('translation')->get();

        return view('admin.divisions.edit', compact('division', 'categories'));
    }

    public function update(Request $request, $id)
    {

        $division = Division::findOrfail($id);

        foreach (config('app.fallback_locale') as $lang) {
            $title = 'name_' . $lang;
            $description = 'description_' . $lang;
            $inner_title = 'inner_title_' . $lang;
            $inner_description = 'inner_description_' . $lang;

            $translate = DivisionTranslation::where('division_id', $division->id)->where('locale', $lang)->first();

            $translate->title = $request->$title;
            $translate->description = $request->$description;
            $translate->inner_title = $request->$inner_title;
            $translate->inner_description = $request->$inner_description;

            $translate->save();
        }
        return redirect()->route('admin.divisions');
    }

    public function category_add(Request $request, $id){

        $category = DivisionCategory::where('division_id', $id)->where('category_id', $request->category)->first();
        if(!$category){
            $category = new DivisionCategory();
            $category->division_id = $id;
            $category->category_id = $request->category;
            $category->save();
        }

        $division = Division::find($id);

        return view('admin.divisions.part', compact('division'));
    }

    public function category_del(){

    }
}
