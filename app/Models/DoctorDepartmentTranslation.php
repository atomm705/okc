<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorDepartmentTranslation extends Model
{
    protected $table = 'doctors_departments_translations';
    protected $primaryKey = 'translation_id';
    public $timestamps = true;

    protected $fillable = [
        'department_id',
        'locale',
        'name',
        'slug',
        'is_visible',
        'page_seo',

    ];

    public function department()
    {
        return $this->belongsTo(DoctorDepartment::class, 'department_id');
    }


}
