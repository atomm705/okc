<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategoryTranslate extends Model
{
    protected $table = 'articles_categories_translations';

    public function category(){
        return $this->hasOne(ArticleCategory::class, 'category_id', 'category_id');
    }
}
