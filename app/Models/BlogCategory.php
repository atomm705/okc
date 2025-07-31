<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';
    protected $primaryKey = 'category_id';
    public $incrementing = true;
    protected $keyType = 'int';

    public function translations(): HasMany
    {
        return $this->hasMany(BlogCategoryTranslation::class, 'category_id');
    }

    public function translation(): HasOne
    {
        return $this->hasOne(BlogCategoryTranslation::class, 'category_id')
            ->where('locale', app()->getLocale());
    }

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(
            BlogArticle::class,
            'blog_articles_categories',
            'category_id',
            'article_id'
        );
    }
}

