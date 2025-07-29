<?php

namespace App\Http\Controllers;

use App\Models\NewCategory;
use App\Models\NewCategoryTranslation;
use App\Models\NewPriceTranslation;
use App\Models\NewServiceTranslation;
use App\Models\NewDivision;
use App\Models\NewService;
use App\Models\ServicesCategory;
use App\Models\ServicesCategoryTranslation;
use Illuminate\Http\Request;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\NewPrice;

class ServicesController extends Controller
{
    public function index()
    {

        return redirect('main.index');
    }

    public function price($slug){

        $categories = NewCategory::where('is_visible', true)->get();

        $category_active = NewCategory::where('slug', $slug)->first();

        return view('main.prices', compact('categories', 'category_active'));
    }

    public function prices($slug = 'oftalmologiya' ){

        $categories = NewCategory::where('is_visible', true)->get();

        $category_active = NewCategory::where('slug', $slug)->first();

        return view('admin.prices.index', compact('categories', 'category_active'));
    }

    public function category(){

        $categories = NewCategory::all();

        return view('admin.category.index', compact('categories'));
    }

    public function category_create(){

        $divisions = NewDivision::where('is_visible', true)->get();

        return view('admin.category.create', compact('divisions'));
    }

    public function category_store(Request $request){

        $category = new NewCategory();

        $category->slug = \Illuminate\Support\Str::slug($request->name_uk);
        $category->division_id = $request->division_id;
        $category->is_visible = $request->is_visible;
        $category->is_root = $request->is_root;

        if($request->file('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            ]);

            $file = $request->file('image');
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

            $category->image = 'assets/images/uploads/' . $filename;
        }

        $category->save();


        foreach(config('app.available_locales') as $lang){
            $name = 'name_'.$lang;
            if($request->$name){
                $short_name = 'short_name_'.$lang;
                $text = 'text_'.$lang;
                $seo_title = 'seo_title_'.$lang;
                $seo_description = 'seo_description_'.$lang;
                $seo_keywords = 'seo_keywords_'.$lang;

                $seo = array();
                $translate = new NewCategoryTranslation();
                $translate->category_id = $category->id;
                $translate->locale = $lang;
                $translate->name = $request->$name;
                $translate->short_name = $request->$short_name;
                $translate->text = $request->$text;

                $seo['title'] = $request->$seo_title;
                $seo['description'] = $request->$seo_description;
                $seo['keywords'] = $request->$seo_keywords;

                $translate->page_seo = json_encode($seo, JSON_UNESCAPED_UNICODE);

                $translate->save();
            }
        }
        return redirect()->route('admin.groups', ['slug' => $category->slug]);
    }

    public function category_edit($id){

        $category = NewCategory::findOrFail($id);

        $divisions = NewDivision::where('is_visible', true)->get();

        return view('admin.category.edit', compact('divisions', 'category'));

    }

    public function category_update(Request $request, $id){

        $category = NewCategory::findOrFail($id);

        $category->division_id = $request->division_id;
        $category->is_visible = $request->is_visible;
        $category->is_root = $request->is_root;

        if($request->file('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            ]);

            $file = $request->file('image');
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

            $category->image = 'assets/images/uploads/' . $filename;
        }

        $category->save();


        foreach(config('app.available_locales') as $lang){
            $name = 'name_'.$lang;
            if($request->$name){
                $short_name = 'short_name_'.$lang;
                $text = 'text_'.$lang;
                $seo_title = 'seo_title_'.$lang;
                $seo_description = 'seo_description_'.$lang;
                $seo_keywords = 'seo_keywords_'.$lang;

                $seo = array();
                $translate = NewCategoryTranslation::where('category_id', $id)->where('locale', $lang)->first();
                if(!$translate){
                    $translate = new NewCategoryTranslation();
                    $translate->category_id = $id;
                    $translate->locale = $lang;
                }
                $translate->name = $request->$name;
                $translate->short_name = $request->$short_name;
                $translate->text = $request->$text;

                $seo['title'] = $request->$seo_title;
                $seo['description'] = $request->$seo_description;
                $seo['keywords'] = $request->$seo_keywords;

                $translate->page_seo = json_encode($seo, JSON_UNESCAPED_UNICODE);

                $translate->save();
            }
        }
        return redirect()->route('admin.groups', ['slug' => $category->slug]);
    }

    public function category_image_del(Request $request){
        $category = NewCategory::find($request->category);

        $image = public_path($category->image);

        $webp = pathinfo($image, PATHINFO_FILENAME).'.webp';

        if(file_exists($image)){
            unlink($image);
        }

        if(file_exists($webp)){
            unlink($webp);
        }

        $category->image = '';

        $category->save();
    }

    public function groups($slug)
    {
        $category = NewCategory::where('slug', $slug)->first();

        $groups = NewService::where('category_id', $category->id)->get();

        $categories = NewCategory::where('is_visible', true)->get();

        return view('admin.groups.index', compact('category', 'groups', 'categories'));
    }

    public function groups_create($slug){

        $categories = NewCategory::where('is_visible', true)->get();

        $category = NewCategory::where('slug', $slug)->first();

        return view('admin.groups.create', compact('categories', 'category'));
    }

    public function groups_store(Request $request){
        $group = new NewService();

        $group->slug = \Illuminate\Support\Str::slug($request->name_uk);
        $group->category_id = $request->category_id;
        $group->is_visible = $request->is_visible;
        $group->is_group = $request->is_group;
        $group->save();


        foreach(config('app.available_locales') as $lang){
            $name = 'name_'.$lang;
            if($request->$name){
                $text = 'text_'.$lang;
                $text_before = 'text_before_'.$lang;
                $text_after = 'text_after_'.$lang;
                $seo_title = 'seo_title_'.$lang;
                $seo_description = 'seo_description_'.$lang;
                $seo_keywords = 'seo_keywords_'.$lang;

                $seo = array();
                $translate = new NewServiceTranslation();
                $translate->service_id = $group->id;
                $translate->locale = $lang;
                $translate->name = $request->$name;
                $translate->text = $request->$text;
                $translate->text_before = $request->$text_before;
                $translate->text_after = $request->$text_after;

                $seo['title'] = $request->$seo_title;
                $seo['description'] = $request->$seo_description;
                $seo['keywords'] = $request->$seo_keywords;

                $translate->page_seo = json_encode($seo, JSON_UNESCAPED_UNICODE);

                $translate->save();
            }
        }
        return redirect()->route('admin.groups', ['slug' => $group->category->slug]);
    }

    public function groups_edit($id){

        $group = NewService::findOrFail($id);

        $categories = NewCategory::where('is_visible', true)->get();

        return view('admin.groups.edit', compact('group', 'categories'));
    }

    public function groups_update(Request $request, $id){
        $group = NewService::findOrFail($id);

        $group->category_id = $request->category_id;
        $group->is_visible = $request->is_visible;
        $group->is_group = $request->is_group;
        $group->save();


        foreach(config('app.available_locales') as $lang){
            $name = 'name_'.$lang;
            if($request->$name){
                $text = 'text_'.$lang;
                $text_before = 'text_before_'.$lang;
                $text_after = 'text_after_'.$lang;
                $seo_title = 'seo_title_'.$lang;
                $seo_description = 'seo_description_'.$lang;
                $seo_keywords = 'seo_keywords_'.$lang;

                $seo = array();
                $translate = NewServiceTranslation::where('service_id', $group->id)->where('locale', $lang)->first();

                if(!$translate){
                    $translate = new NewServiceTranslation();
                    $translate->service_id = $group->id;
                    $translate->locale = $lang;
                }

                $translate->name = $request->$name;
                $translate->text = $request->$text;
                $translate->text_before = $request->$text_before;
                $translate->text_after = $request->$text_after;

                $seo['title'] = $request->$seo_title;
                $seo['description'] = $request->$seo_description;
                $seo['keywords'] = $request->$seo_keywords;

                $translate->page_seo = json_encode($seo, JSON_UNESCAPED_UNICODE);

                $translate->save();
            }
        }
        return redirect()->route('admin.groups', ['slug' => $group->category->slug]);
    }

    public function create($group_id){

        $group = NewService::where('id', $group_id)->first();

        $groups = NewService::where('category_id', $group->category_id)->where('is_visible', true)->get();

        return view('admin.prices.create', compact('group', 'groups'));
    }

    public function store(Request $request){

        $group = NewService::find($request->group_id);

        $price = new NewPrice();
        $price->service_id = $request->service_id;
        $price->is_visible = $request->is_visible;
        $price->save();

        foreach(config('app.available_locales') as $lang) {
            $name = 'name_' . $lang;
            if ($request->$name) {
                $prices = 'price_'.$lang;
                $prices_promo = 'price_promo_'.$lang;
                $time = 'time_'.$lang;
                $note = 'note_'.$lang;

                $translate = new NewPriceTranslation();
                $translate->price_id = $price->id;
                $translate->locale = $lang;
                $translate->name = $request->$name;
                $translate->price = $request->$prices;
                $translate->price_promo = $request->$prices_promo;
                $translate->time = $request->$time;
                $translate->note = $request->$note;
                $translate->save();
            }
        }

        return redirect()->route('admin.groups', ['slug' => $group->group->category->slug]);
    }

    public function edit($id){

        $price = NewPrice::findOrFail($id);

        $group = NewService::where('id', $price->service_id)->first();

        $groups = NewService::where('category_id', $group->category_id)->where('is_visible', true)->get();

        return view('admin.prices.edit', compact('price', 'groups'));
    }

    public function update(Request $request, $id){

        $price = NewPrice::findOrFail($id);
        $price->service_id = $request->service_id;
        $price->is_visible = $request->is_visible;
        $price->save();

        foreach(config('app.available_locales') as $lang) {
            $name = 'name_' . $lang;
            if ($request->$name) {
                $prices = 'price_'.$lang;
                $prices_promo = 'price_promo_'.$lang;
                $time = 'time_'.$lang;
                $note = 'note_'.$lang;

                $translate = NewPriceTranslation::where('price_id', $price->id)->where('locale', $lang)->first();
                if(!$translate){
                    $translate->price_id = $price->id;
                    $translate->locale = $lang;
                }
                $translate->name = $request->$name;
                $translate->price = $request->$prices;
                $translate->price_promo = $request->$prices_promo;
                $translate->time = $request->$time;
                $translate->note = $request->$note;
                $translate->save();
            }
        }

        return redirect()->route('admin.groups', ['slug' => $price->group->category->slug]);


    }
}
