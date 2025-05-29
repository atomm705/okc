<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BlogArticle extends Model
{
    protected $table = 'blog_articles';
    protected $primaryKey = 'article_id';
    public $incrementing = true;
    protected $keyType = 'int';


    public function translations(): HasMany
    {
        return $this->hasMany(BlogArticleTranslation::class, 'article_id');
    }

    public function translation(): HasOne
    {
        return $this->hasOne(BlogArticleTranslation::class, 'article_id')
            ->where('locale', app()->getLocale());
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            BlogCategory::class,
            'blog_articles_categories',
            'article_id',
            'category_id'
        );
    }

    public function getTagsAttribute()
    {
        return $this->translation ? $this->translation->tags : collect();
    }

}
