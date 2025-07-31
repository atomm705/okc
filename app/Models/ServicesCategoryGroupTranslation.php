<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesCategoryGroupTranslation extends Model
{
    protected $table = 'services_categories_groups_translations';

    protected $primaryKey = 'translation_id';

    public function group()
    {
        return $this->belongsTo(ServicesCategoryGroup::class, 'group_id');
    }

}
