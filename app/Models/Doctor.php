<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Collection;

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $primaryKey = 'doctor_id';

    public function translations()
    {
        return $this->hasMany(DoctorTranslation::class, 'doctor_id', 'doctor_id')->where('locale', app()->getLocale())->first();
    }

    public function translation()
    {
        return $this->hasOne(DoctorTranslation::class, 'doctor_id', 'doctor_id')
            ->where('locale', app()->getLocale());
    }

    public function image()
    {
        return $this->belongsTo(Image::class, 'photo_square_id', 'image_id');
    }

    public function imageSquare()
    {
        return $this->belongsTo(Image::class, 'photo_square_id');
    }

    public function imageFull()
    {
        return $this->belongsTo(Image::class, 'photo_full_id');
    }

    public function departments()
    {
        return $this->belongsToMany(
            DoctorDepartment::class,
            'doctors_doctors_departments',
            'doctor_id',
            'department_id'
        ) ->withPivot('work_hours');
    }

    public function getCertificates(): Collection
    {
        $ids = json_decode($this->certificates, true);

        if (!is_array($ids)) return collect();

        return \App\Models\Image::whereIn('image_id', $ids)->get();
    }


}
