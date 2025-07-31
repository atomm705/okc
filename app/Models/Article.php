<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public function translation()
    {
        return $this->hasOne(ArticleTranslate::class, 'article_id', 'article_id')
            ->where('locale', app()->getLocale())
            ->where('is_visible', 1);
    }

    public function category(){
        return $this->hasOne(ArticleCategory::class, 'category_id', 'category_id');
    }
}
