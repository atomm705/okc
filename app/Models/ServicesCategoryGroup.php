<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesCategoryGroup extends Model
{
    protected $table = 'services_categories_groups';

    protected $primaryKey = 'group_id';

    protected $casts = [
        'is_visible' => 'boolean'
    ];

    public function category()
    {
        return $this->belongsTo(ServicesCategory::class, 'category_id')->where('is_visible', 1);
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'group_id')
            ->where('is_visible', 1);
    }

    public function translations()
    {
        return $this->hasMany(ServicesCategoryGroupTranslation::class, 'group_id')
            ->where('is_visible', 1);
    }

    public function scopeVisible($query)
    {
        return $query->where('is_visible', 1);
    }

    public function translation()
    {
        return $this->hasOne(ServicesCategoryGroupTranslation::class, 'group_id', 'group_id')
            ->where('locale', app()->getLocale())
            ->where('is_visible', 1);
    }

    public function admin_translation(){
        return $this->hasMany(ServicesCategoryGroupTranslation::class, 'group_id', 'group_id')->where('locale', 'uk')->first();
    }

    public function group(){
        return $this->hasOne(ServicesCategoryGroup::class, 'group_id');
    }

}
