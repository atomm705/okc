<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Casts\UnescapedJsonCast;

class DoctorTranslation extends Model
{
    protected $table = 'doctors_translations';
    protected $primaryKey = 'translation_id';
    public $timestamps = false;


    protected $casts = [
        'page_seo' => UnescapedJsonCast::class,
        'position_main' => UnescapedJsonCast::class,
        'position_all' => UnescapedJsonCast::class,
        'educations' => UnescapedJsonCast::class,
        'courses' => UnescapedJsonCast::class,
        'awards' => UnescapedJsonCast::class,
        'associations' => UnescapedJsonCast::class,
        'treatment_of_disease' => UnescapedJsonCast::class,
        'procedures' => UnescapedJsonCast::class,
        'specialisation' => UnescapedJsonCast::class,
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
        'short_name',
        'position_main',
        'about',
        'specialisation',
        'courses',
        'associations',
        'procedures',
        'treatment_of_disease',
        'awards',
        'position_all',
        'page_seo',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }


}
