<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceTranslation extends Model
{
    protected $table = 'services_translations';

    protected $primaryKey = 'translation_id';

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
