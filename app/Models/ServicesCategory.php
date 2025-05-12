<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesCategory extends Model
{
    protected $table = 'services_categories';

    protected $primaryKey = 'category_id';

    protected $casts = [
        'is_visible' => 'boolean'
    ];

    public function groups()
    {
        return $this->hasMany(ServicesCategoryGroup::class, 'category_id')
            ->where('is_visible', 1);
    }

    public function translation()
    {
        return $this->hasOne(ServicesCategoryTranslation::class, 'category_id', 'category_id')
            ->where('locale', app()->getLocale())
            ->where('is_visible', 1);
    }

    public function scopeVisible($query)
    {
        return $query->where('is_visible', 1);
    }

    public function admin_translation(){
        return $this->hasMany(ServicesCategoryTranslation::class, 'category_id', 'category_id')->where('locale', 'uk')->first();
    }

    public function visibleGroups()
    {
        return $this->hasMany(ServiceCategoryGroup::class, 'category_id', 'category_id')
            ->where('is_visible', 1);
    }

}
