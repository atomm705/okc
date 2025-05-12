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
}
