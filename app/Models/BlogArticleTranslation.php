<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BlogArticleTranslation extends Model
{
    protected $table = 'blog_articles_translations';

    public function article(): BelongsTo
    {
        return $this->belongsTo(BlogArticle::class, 'article_id');
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function authorImage(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'author_image_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(
            BlogTag::class,
            'blog_articles_tags',
            'translation_id',
            'tag_id',
            'translation_id',
            'tag_id'
        );
    }
}
