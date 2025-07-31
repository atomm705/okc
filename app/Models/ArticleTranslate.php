<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleTranslate extends Model
{
    protected $table = 'articles_translations';

    public function article(){
        return $this->hasOne(Article::class, 'article_id', 'article_id');
    }
}
