<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BlogTag extends Model
{
    protected $table = 'blog_tags';

    public function translations()
    {
        return $this->belongsToMany(
            BlogArticleTranslation::class,
            'blog_articles_tags',
            'tag_id',
            'translation_id',
            'tag_id',
            'translation_id'
        );
    }

   // public function articles(): BelongsToMany
  //  {
   //     return $this->belongsToMany(
   //         BlogArticle::class,
   //         'blog_articles_tags',
    //      'tag_id',
    //        'article_id'
   //    );
  //  }
}
