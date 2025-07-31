<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table = 'articles_categories';

    protected $primaryKey = 'category_id';

    public function translation()
    {
        return $this->hasOne(ArticleCategoryTranslate::class, 'category_id', 'category_id')
            ->where('locale', app()->getLocale())
            ->where('is_visible', 1);
    }

    public function admin_translation($lang){
        return $this->hasOne(ArticleCategoryTranslate::class, 'category_id', 'category_id')
            ->where('locale', $lang);
    }

    public function articles(){
        return $this->hasMany(Article::class, 'category_id', 'category_id')->where('is_visible', true);
    }

    public function serviceCategory(){

        return $this->hasOne(ServicesCategory::class, 'category_id', 'price_id');
    }

}
