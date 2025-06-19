<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use App\Models\Division;
use App\Models\DivisionCategory;
use App\Models\DivisionTranslation;
use App\Models\NewDivision;
use App\Models\ServicesCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DivisionController extends Controller
{
    public function index(){

        $divisions = NewDivision::all();

        return view('admin.divisions.index', compact('divisions'));
    }

    public function create(){

        return view('admin.divisions.create');
    }

    public function store(Request $request){

        $division = new NewDivision();
        $division->slug = Str::slug($request->name_uk);
        $division->save();

        foreach(config('app.fallback_locale') as $lang){
            $title = 'name_'.$lang;
            $description = 'description_'.$lang;
            $inner_title = 'inner_title_'.$lang;
            $inner_description = 'inner_description_'.$lang;

            $translate = new NewDivisionTranslation();
            $trans = array();
            $translate->division_id = $division->id;
            $translate->locale = $lang;
            $translate->name = $request->$title;

            $trans['description'] = $request->$description;
            $trans['inner_title'] = $request->$inner_title;
            $trans['inner_description'] = $request->$inner_description;

            $translate->page_seo = json_encode($trans, JSON_UNESCAPED_UNICODE);

            $translate->save();
        }

        return redirect()->route('admin.divisions');

    }

    public function edit($id){

        $division = NewDivision::find($id);

        return view('admin.divisions.edit', compact('division'));
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

            $trans = array();

            $trans['description'] = $request->$description;
            $trans['inner_title'] = $request->$inner_title;
            $trans['inner_description'] = $request->$inner_description;

            $translate->page_seo = json_encode($trans, JSON_UNESCAPED_UNICODE);

            $translate->save();
        }
        return redirect()->route('admin.divisions');
    }

    public function category_del(){

    }
}
