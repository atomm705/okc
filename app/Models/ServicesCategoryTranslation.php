<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesCategoryTranslation extends Model
{
    protected $table = 'services_categories_translations';

    protected $primaryKey = 'translation_id';

    public function category()
    {
        return $this->belongsTo(ServicesCategory::class, 'category_id');
    }

    public function translation($lang = 'uk'){
        return $this->hasOne(ServicesCategoryTranslation::class, 'category_id', 'category_id')->where('locale', $lang)->first();
    }

    public function admin_translation($lang){
        return $this->hasOne(ServicesCategoryTranslation::class, 'category_id', 'category_id')
            ->where('locale', $lang);
    }
}
