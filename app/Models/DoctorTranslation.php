<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorTranslation extends Model
{
    protected $table = 'doctors_translations';
    protected $primaryKey = 'translation_id';
    public $timestamps = false;

    // для seo
    protected $casts = [
        'page_seo' => 'array',
    ];

    protected $fillable = [
        'doctor_id',
        'locale',
        'first_name',
        'second_name',
        'middle_name',
        'full_name',
        'full_slug',
        'short_slug',
        'email',
        'educations',
        'position_main',
        'about',
        'specialisation',
        'courses',
        'associations',
        'procedyres',
        'treatment_of_disease',
        'awards',
        'position_all',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
